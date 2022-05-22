<section id="contact_us" class="contact-us pt-60 pb-60">

	<div class="container">
		<!--Section heading-->
		<div class="section-title text-center">
			<span class="h1-responsive font-weight-bold text-center my-4 wow fadeInUp">Contact us</span>
		</div>

		<!--Section description-->
		<p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
			a matter of hours to help you.</p>

		<div class="row">

			<!--Grid column-->
			<div class="col-md-12 mb-md-0 py-5">
				<form id="contact-form" name="contact-form" action="mail.php" method="POST">

					<!--Grid row-->
					<div class="row">

						<!--Grid column-->
						<div class="col-md-6">
							<div class="md-form mb-3">
								<label for="name" class="">Your name</label>
								<input type="text" id="name" name="name" class="form-control">

							</div>
						</div>
						<!--Grid column-->

						<!--Grid column-->
						<div class="col-md-6">
							<div class="md-form mb-3">
								<label for="email" class="">Your email</label>
								<input type="text" id="email" name="email" class="form-control">

							</div>
						</div>
						<!--Grid column-->

					</div>
					<!--Grid row-->

					<!--Grid row-->
					<div class="row">
						<div class="col-md-12">
							<div class="md-form mb-3">
								<label for="subject" class="">Subject</label>
								<input type="text" id="subject" name="subject" class="form-control">

							</div>
						</div>
					</div>
					<!--Grid row-->

					<!--Grid row-->
					<div class="row">

						<!--Grid column-->
						<div class="col-md-12">

							<div class="md-form mb-3">
								<label for="message">Your message</label>
								<textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>

							</div>

						</div>
					</div>
					<!--Grid row-->

				</form>

				<div class="text-center text-md-left">
					<a class=" main-btn btn-hover wow fadeInUp" onclick="document.getElementById('contact-form').submit();">Send</a>
				</div>
				<div class="status"></div>
			</div>
			<!--Grid column-->

		</div>
	</div>

</section>