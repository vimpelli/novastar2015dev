<?php

defined('ABSPATH') OR exit;


final class respimage {

    /**
     * Default options
     */
    private static $options_default = array(
        'sizes' => array(
            'size1' => array(
                'name' => 'large-img',
                'size' => 900,
                'calc2x' => 1
            ),
            'size2' => array(
                'name' => 'medium-img',
                'size' => 768,
                'calc2x' => 1
            ),
            'size3' => array(
                'name' => 'small-img',
                'size' => 320,
                'calc2x' => 1
            ),
            'size4' => array(
                'name' => '',
                'size' => 0,
                'calc2x' => 1
            ),
            'size5' => array(
                'name' => '',
                'size' => 0,
                'calc2x' => 1
            ),
            'size6' => array(
                'name' => '',
                'size' => 0,
                'calc2x' => 1
            ),
            'size7' => array(
                'name' => '',
                'size' => 0,
                'calc2x' => 1
            ),
            'size8' => array(
                'name' => '',
                'size' => 0,
                'calc2x' => 1
            )
        ),
        'mq' => array(
            'mq1' => '(min-width: 901px) 900px, 100vw',
            'mq2' => '',
            'mq3' => '',
            'mq4' => '',
            'mq5' => ''
        ),
        '_fallback' => 0,
        '_native' => 0,
        '_async' => 1
    );

    private static $options_name = 'elf02_respimage';
    private static $options = array();


    /**
     * Singleton
     */
    private static $instance = null;

    public static function instance() {
        if(NULL === self::$instance) {
            self::$instance = new self;
        }
        return self::$instance;
    }


    /**
     * Init plugin, load options, set image sizes, set filters and actions
     */
    private function __construct() {
        add_theme_support('post-thumbnails');

        self::$options = wp_parse_args(
            get_option(self::$options_name),
            self::$options_default
        );

        foreach(self::$options['sizes'] as $key => $value) {

            if(!empty($value['name']) && !empty($value['size'])) {
                $size = intval($value['size']);
                add_image_size($value['name'], $size);

                // Very secret and magical pixel calculation
                if($value['calc2x']) {
                    $size2x = $size * 2;
                    $name2x = $value['name'].'@2x';
                    self::$options['sizes'][$key]['size2x'] = $size2x;
                    add_image_size($name2x, $size2x);
                }
            }

        }

        if(!self::$options['_native']) {
            add_action(
                'wp_enqueue_scripts',
                array(
                    $this,
                    'add_picturefilljs'
                )
            );
        }

        if(self::$options['_async']) {
            add_filter(
                'clean_url',
                array(
                    $this,
                    'async_picturefilljs'
                ),
                11,
                1
            );
        }


        add_filter(
            'image_send_to_editor',
            array(
                $this,
                'insert_image_with_id'
            ),
            10,
            9
        );

        add_filter(
            'the_content',
            array(
                $this,
                'filter_responsive_images'
            ),
            99
        );
        
        add_filter(
            'post_thumbnail_html',
            array(
                $this,
                'filter_responsive_images'
            ),
            99
        );

        add_action(
            'admin_init',
            array(
                $this,
                'init_options'
            )
        );

        add_action(
            'admin_menu',
            array(
                $this,
                'init_options_page'
            )
        );
    }


    /**
     * Options Page handling
     */
    public function init_options() {
        register_setting(
            self::$options_name . '_options',
            self::$options_name,
            array(
                $this,
                'validate'
            )
        );
    }


    public function init_options_page() {
        add_options_page(
            'RespImage Options',
            'RespImage',
            'manage_options',
            self::$options_name . '_options',
            array(
                $this,
                'options_do_page'
            )
        );
    }


    /**
     * Validate and sanitize options
     */
    public function validate($input) {
        $valid = array();

        foreach($input['sizes'] as $key => $value) {
            $valid['sizes'][$key]['name'] = sanitize_text_field($value['name']);
            $valid['sizes'][$key]['size'] = intval($value['size']);
            $valid['sizes'][$key]['calc2x'] = (int) isset($value['calc2x']);
        }

        foreach($input['mq'] as $key => $value) {
            $valid['mq'][$key] = sanitize_text_field($value);
        }

        $valid['_fallback'] = (int) isset($input['_fallback']);
        $valid['_native'] = (int) isset($input['_native']);
        $valid['_async'] = (int) isset($input['_async']);

        return $valid;
    }


    /**
     * Output options
     */
    public function options_do_page() {
        ?>
        <div class="wrap">
            <h2><?php _e('RespImage Options', 'respimage'); ?></h2>
            <form method="post" action="options.php">
                <?php settings_fields(self::$options_name . '_options'); ?>
                <table class="widefat" style="width:500px;margin-top:20px;">
                <thead>
                    <tr>
                        <th><?php _e('Image Size Name', 'respimage'); ?></th>
                        <th><?php _e('Image Size (width)', 'respimage'); ?></th>
                        <th><?php _e('Add 2x', 'respimage'); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach(self::$options['sizes'] as $key => $value) {
                            echo '<tr>';

                            $str1 = self::$options_name . '[sizes]['. $key .'][name]';
                            $str2 = $value['name'];
                            printf(
                                '<td><input type="text" name="%s" value="%s" style="width:100%%;"></td>',
                                $str1,
                                $str2
                            );

                            $str1 = self::$options_name . '[sizes]['. $key .'][size]';
                            $str2 = $value['size'];
                            printf(
                                '<td><input type="text" name="%s" value="%s" style="width:100%%;"></td>',
                                $str1,
                                $str2
                            );

                            $str1 = self::$options_name . '[sizes]['. $key .'][calc2x]';
                            $str2 = checked($value['calc2x'], 1, false);
                            $str3 = 'cb_calc2x_' . $key;
                            printf(
                                '<td align="center"><input id="%s" type="checkbox" name="%s" value="1" %s></td>',
                                $str3,
                                $str1,
                                $str2
                            );

                            echo '</tr>';
                        }
                    ?>
                </tbody>
                </table>
                <table class="widefat" style="width:500px;margin-top:20px;">
                <thead>
                    <tr>
                        <th><?php _e('#ID', 'respimage'); ?></th>
                        <th><?php _e('Srcset <strong>Sizes</strong> Attribute', 'respimage'); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $i = 1;
                        foreach(self::$options['mq'] as $key => $value) {
                            echo '<tr>';

                            $str1 = ($key === 'mq1') ? $i++ . ' (default)' : $i++;
                            printf('<td>%s</td>', $str1);

                            $str1 = self::$options_name . '[mq]['. $key .']';
                            $str2 = $value;
                            printf(
                                '<td><input type="text" name="%s" value="%s" style="width:100%%;"></td>',
                                $str1,
                                $str2
                            );

                            echo '</tr>';
                        }
                    ?>
                </tbody>
                </table>
                <div style="margin-top:20px;">
                    <p>
                        <label for="cb_fallback">
                        <?php
                            printf(
                                '<input id="cb_fallback" type="checkbox" name="%s" value="1" %s>',
                                self::$options_name.'[_fallback]',
                                checked(self::$options['_fallback'], 1, false)
                            );
                            _e('Use full size image as fallback? This can produce extra http requests.', 'respimage');
                        ?>
                        </label>
                    </p>
                    <p>
                        <label for="cb_native">
                        <?php
                            printf(
                                '<input id="cb_native" type="checkbox" name="%s" value="1" %s>',
                                self::$options_name.'[_native]',
                                checked(self::$options['_native'], 1, false)
                            );
                            _e('Use native implementation? Removes picturefill.js script. <strong>Not yet recommended!</strong>', 'respimage');
                        ?>
                        </label>
                    </p>
                    <p>
                        <label for="cb_async">
                        <?php
                            printf(
                                '<input id="cb_async" type="checkbox" name="%s" value="1" %s>',
                                self::$options_name.'[_async]',
                                checked(self::$options['_async'], 1, false)
                            );
                            _e('Load picturefill.js asynchronously?', 'respimage');
                        ?>
                        </label>
                    </p>
                </div>
                <p class="submit">
                    <input type="submit" class="button-primary" value="<?php _e('Save Changes', 'respimage'); ?>" />
                </p>
            </form>
            <div>
                <?php
                    // Output all registered image sizes
                    printf('<h3>%s</h3><ul>', __('Registered Image Sizes', 'respimage'));
                    global $_wp_additional_image_sizes;
                    foreach($_wp_additional_image_sizes as $key => $value) {
                        $list[] = (!empty($key)) ?
                            sprintf('<li><strong>%s=</strong>%spx</li>', $key, $value['width']) :
                            '';
                    }
                    printf('%s%s', implode($list), '</ul>');
                ?>
            </div>
        </div>
        <?php
    }


    /**
     * Load picturefill.js asynchronously
     */
    public function async_picturefilljs($url) {
        if(false === strpos($url, '.js')) {
            return $url;
        }

        // only for picturefill.js.
        if(strpos($url, 'picturefill')) {
            return "$url' async onload='";
        }

        return $url;
    }


    /**
     * Add picturefill.js
     * picturefill.js - http://scottjehl.github.io/picturefill/
     */
    public function add_picturefilljs() {
        wp_register_script(
            'picturefill',
            sprintf(
                '%s%s',
                RESPIMAGE_PLUGIN_URL,
                '/js/picturefill.min.js'
            ),
            array(),
            null
        );
        wp_enqueue_script('picturefill');
    }


    /**
     * Add data-responsive attribute
     */
    public function insert_image_with_id($html, $id, $caption, $title, $align, $url) {
        $html = str_replace(
            '<img',
            sprintf('<img data-responsive="%s"', $id),
            $html
        );
        return $html;
    }


    /**
     * Filter all images with a data-responsive attribute
     */
    public function filter_responsive_images($content) {
        // Check for empty options
        if(empty(self::$options)) {
            return $content;
        }

        // Check for feed
        if(is_feed()) {
            return $content;
        }

        $content = preg_replace_callback(
            '/<img.*?data-responsive=[\'"](.*?)[\'"].*?>/i',
            array(
                $this,
                'replace_responsive_images'
            ),
            $content
        );

        return $content;
    }


    /**
     * Replace images with srcset image markup
     */
    public function replace_responsive_images($matches) {
        $ori_markup = $matches[0];
        $image_id = $matches[1];
        $mq_id = 1;

        // Check for embedded mq id
        if(strpos($image_id, '/')) {
            $a = explode('/', $image_id);
            if(count($a) === 2) {
                list($image_id, $mq_id) = $a;
            }
        }

        $image_id = intval($image_id);
        $mq_id = intval($mq_id);
        $mq_id = (in_array($mq_id, range(1, 5))) ? $mq_id : 1;
        $mq = self::$options['mq']['mq'.$mq_id];

        // Check image and mq id
        if(empty($image_id) || empty($mq)) {
            return $ori_markup;
        }

        // Check for existing image id
        $imgsrc_full = wp_get_attachment_image_src($image_id, 'full');
        if(false === $imgsrc_full) {
            return $ori_markup;
        }

        // Get class names
        preg_match('/class=[\'"](.*?)[\'"]/i', $ori_markup, $match);
        $class_names = (!empty($match[1])) ?
            sprintf(' class="%s"', $match[1]) :
            '';

        // Check for fallback image
        $img_fallback = (self::$options['_fallback']) ?
            sprintf(' src="%s"', $imgsrc_full[0]) :
            '';

        // Collect all images
        foreach(self::$options['sizes'] as $key => $value) {

            if(!empty($value['name'])) {

                $imgsrc = wp_get_attachment_image_src($image_id, $value['name']);
                if(false === $imgsrc) {
                    continue;
                }

                if($value['calc2x']) {

                    $imgsrc_2x = wp_get_attachment_image_src($image_id, $value['name'].'@2x');
                    if(false === $imgsrc_2x) {
                        continue;
                    }

                    $srcset[] = sprintf(
                        '%s %sw, %s %sw, ',
                        $imgsrc[0],
                        $value['size'],
                        $imgsrc_2x[0],
                        $value['size2x']
                    );

                } else {

                    $srcset[] = sprintf(
                        '%s %sw, ',
                        $imgsrc[0],
                        $value['size']
                    );

                }
            }

        }

        // Check for valid sizes
        if(!isset($srcset)) {
            return $ori_markup;
        }

        // srcset image markup
        $markup = sprintf(
            '<img%s%s srcset="%s" sizes="%s">',
            $class_names,
            $img_fallback,
            trim(implode($srcset), ', '),
            $mq
        );

        return $markup;
    }

}

?>
