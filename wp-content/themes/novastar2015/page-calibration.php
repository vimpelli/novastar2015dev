<?php while (have_posts()) : the_post(); ?>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="header-hero">
					<img class="img img-responsive" src="<?php uploads_dir(); ?>calibration.jpg">
					<?php get_template_part('templates/page', 'header'); ?>
				</div>
			</div>
		</div>
	</div>
<div class="container wrapper calibration">
	<div class="row section">
		<div class="col-sm-12">
			<?php the_breadcrumb(); ?>

			<!-- <?php get_template_part('templates/content', 'page'); ?> -->

			<h2>Your Partner in Metrology Services</h2>
			<div class="col-sm-4">
				<ul>
					<li>Superior customer service</li>
					<li>Web accessible asset management tool</li>
					<li>One week turnaround time</li>
				</ul>
			</div>
			<div class="col-sm-4">
				<ul>
					<li>ISO/IEC 17025:2005 accreditation by A2LA</li>
					<li>Cost-effective solutions</li>
					<li>On-site calibrations</li>
				</ul>
			</div>
			<div class="col-sm-4">
				<ul>
					<li>Per point measurement uncertainties</li>
					<li>Pick-up / delivery (call for details</li>
					<li>Expedited services available</li>
				</ul>
			</div>
		</div>
		<div class="col-sm-6">
			<p> Your ability to deliver accurate and reliable measurements depends on the stability of your equipment, and your equipment depends on the accuracy and quality of its calibration. NovaStar understands the relationship between the precision of our calibrations and the precision of your measurements. Our focus is on providing service that continually exceeds your expectations at affordable, competitive prices. </br> NovaStar Solutions Metrology offers calibration and repair services tailored to fit your needs. We can perform in-situ calibrations to enable full system verification., or we can provide you with pick up and delivery services and calibrate your instruments in our lab with a one week turn-around. Every calibration includes as found/as left data. Our customer portal is also an excellent solution for your asset management needs.</p>
		</div>
		<div class="col-sm-6">
			<p> We have customers in a diverse range of industries such as: automotive, general manufacturing, medical and aerospace. As a result, we understand the need for flexibility and individual requirements. Over 200 combined years of broad experience has provided us with the skills, abilities, and unique insights to provide you with the right service for your instruments and equipment. </br>We also provide troubleshooting and repair of your instruments, sensors and measurement/control systems. We also provide consulting services for a wide variety of metrology needs including measurement uncertainty.</p>
		</div>
	</div>
	
	<div class="row section">
		<div class="col-sm-12 col-md-6 info">
			<h2>A2LA Accredited Calibration Services</h2>
			<p class="lead">Our Scope of Accreditation to ISO/IEC 17025:2005 and ANSI/NCSL Z540-1-1994 standards provide you the confidence that we deliver exceptional calibration services.</p>
			<p>Our American Association for Laboratory Accreditation – A2LA accreditation is something we’re proud to have achieved and gives our clients a strong sense of confidence in our Michigan calibration services. Located in Livonia Michigan, NovaStar metrology is centrally located to serve our local clients from Detroit to Ann Arbor through Southfield, Troy, Warren and the entire metro Detroit business community.</p>
		</div>
		<div class="col-sm-12 col-md-6">
			<img class="img-responsive" src="<?php uploads_dir(); ?>services.jpg">
		</div>
	</div>

	<div class="row section">
		<div class="col-sm-12">
			<h2>Customer Portal Services</h2>
			<p class="lead">Our customer portal allows you access to your calibration information from your facility or other remote locations.</p><p> With a balance of multi-layer security and read-only capability to core calibration data and user-by-user defined access to features like customer shipper creation and current asset status, our web system allows you to utilize our asset management services to their fullest. Cross platform and cross browser compatable, with support for a wide variety of mobile devices. You access your data wherever and whenever you need it most.</p>
		</div>
		<div class="col-sm-12">
			<div class="col-sm-4">
				<ul>
					<li>Online asset management tool</li>
					<li>Calibration recall notices</li>
					<li>Escalation policies</li>
					<li>Failure Reporting</li>
				</ul>
			</div>
			<div class="col-sm-4">
				<ul>
					<li>Reverse traceability</li>
					<li>Shipper creation</li>
					<li>Invoice history reporting</li>
					<li>Printable calibration certificates</li>
				</ul>
			</div>
			<div class="col-sm-4">
				<ul>
					<li>Calibration interval extension</li>
					<li>Calibration suspensions</li>
					<li>Performance verification</li>
					<li>Technician assignment</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="row section">
		<div class="col-sm-12 col-md-6">
			<img class="img-responsive" src="<?php uploads_dir(); ?>calibration2.jpg">
		</div>
		<div class="col-sm-12 col-md-6 info">
			<h2>Calibration Services by NovaStar Metrology</h2>
			<p class="lead">We’re proud to say we’ve quadrupled our business since 2008 and get nearly all of our new clients from referrals from our existing, happy clients. We can’t think of a more rewarding and fulfilling way to grow our business!</p>
			<p>NovaStar has a diverse customer base nationwide and within our home state of Michigan. We provide pickup and delivery services for our local customers across Auburn Hills, Troy, Pontiac and the entire metro Detroit area. We maintain clients across the state to Grand Rapids, and nationwide from California to Maine. Many of our customers choose us for our superior customer service, certifications, experience, and a direct line to Guy Howe; our Director of Metrology Services. A summary of the metrology / calibration services we provide are covered in our fact sheet.</p>
		</div>
	</div>

</div>

<?php endwhile; ?>
