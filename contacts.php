<?php include("co_head.php") ?>
<?php include("co_nav.php") ?>
<!-- ==============================================PAGE CONTENT================================================ -->

<!-- ================ start banner Area ================= -->
<section class="banner-area">
	<div class="container">
		<div class="row justify-content-center align-items-center">
			<div class="col-lg-12 banner-right">
				<h1 class="text-white">
					Contacts
				</h1>
				<p class="mx-auto text-white  mt-20 mb-40">
					For any quiry and question please contact us, we are always available..
				</p>
				<div class="link-nav">
					<span class="box">
						<a href="index.php">Home </a>
						<i class="lnr lnr-arrow-right"></i>
						<a href="contacts.php">Contacts</a>
					</span>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ================ End banner Area ================= -->

<!-- ================ Start contact-page Area  ================= -->
<section class="contact-page-area section-gap">
	<div class="container">
		<div class="row">
			<div class="col-12 m-5">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3719.9497393082593!2d81.29659467503625!3d21.194155480496917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a293cf9cb28d18f%3A0x88523ddfbff6ee3f!2sBhilai%20Institute%20of%20Technology%20Durg!5e0!3m2!1sen!2sin!4v1721228069988!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
			<div class="col-lg-4 d-flex flex-column address-wrap">
				<div class="single-contact-address d-flex flex-row">
					<div class="icon">
						<span class="lnr lnr-home"></span>
					</div>
					<div class="contact-details">
						<h5>BIT, Durg</h5>
						<p>Chhattisgarh</p>
					</div>
				</div>
				<div class="single-contact-address d-flex flex-row">
					<div class="icon">
						<span class="lnr lnr-phone-handset"></span>
					</div>
					<div class="contact-details">
						<h5>+91 98769 98456</h5>
						<p>Mon to Fri 9am to 6 pm</p>
					</div>
				</div>
				<div class="single-contact-address d-flex flex-row">
					<div class="icon">
						<span class="lnr lnr-envelope"></span>
					</div>
					<div class="contact-details">
						<h5>internmatch2support@gmail.com</h5>
						<p>Send us your query anytime!</p>
					</div>
				</div>
			</div>
			<div class="col-lg-8">
				<form class="form-area contact-form text-right" id="myForm" <?php echo"action='database/message.php?pg=contacts'"; ?> method="post">
					<div class="row">
						<div class="col-lg-6 form-group">
							<input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">

							<input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

							<input name="subject" placeholder="Enter subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter subject'" class="common-input mb-20 form-control" required="" type="text">
						</div>
						<div class="col-lg-6 form-group">
							<textarea class="common-textarea form-control" name="message" placeholder="Enter Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" required=""></textarea>
						</div>
						<div class="col-lg-12">
							<div class="alert-msg" style="text-align: left;"></div>
							<button type="submit" class="btn" style="float: right;">Send</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<!-- ================ End contact-page Area ================= -->

<!-- ==============================================PAGE CONTENT================================================ -->
<?php include("co_footer.php") ?>
<?php include("co_script.php") ?>