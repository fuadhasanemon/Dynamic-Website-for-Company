<?php

$ourTeam = [

	[
		'image' => 'hacker.png',

		'name' => 'Fuad Hasan',

		'designation' => 'Software Engineer',

		'socials' => [

			'https://www.facebook.com/', 'https://www.linkedin.com/feed/', 'https://github.com/'

		],

		'social_icons' => [

			'bi bi-facebook', 'bi bi-linkedin', 'bi bi-github'

		]

	],

	[
		'image' => 'delivery-boy.png',

		'name' => 'Siam Sheikh',

		'designation' => 'Copywriter',

		'socials' => [

			'https://www.facebook.com/', 'https://www.linkedin.com/feed/', 'https://github.com/'

		],

		'social_icons' => [

			'bi bi-facebook', 'bi bi-linkedin', 'bi bi-github'

		]

	],

	[
		'image' => 'woman.png',

		'name' => 'Sonia Akhter',

		'designation' => 'SQA',

		'socials' => [

			'https://www.facebook.com/', 'https://www.linkedin.com/feed/', 'https://github.com/'

		],

		'social_icons' => [

			'bi bi-facebook', 'bi bi-linkedin', 'bi bi-github'

		]

	],


];


?>

<div class="section cards pt-60 pb-60">


	<div class="container">

		<div class="row">
			<div class="section-title text-center">
				<span class="py-5 card__title wow fadeInUp">Our Team</span>

			</div>


			<?php foreach ($ourTeam as $teamMember) { ?>

				<div class="col-sm-4">
					<div class="card wow fadeInUp">
						<img src="assets/img/team/<?php echo $teamMember['image'] ?>" class="card-img-top" alt="...">
						<div class="card-body text-center">
							<h5 class="card-title member__name"><?php echo $teamMember['name']; ?></h5>
							<p class="card-text member__designation"><?php echo $teamMember['designation']; ?></p>

							<div class="socials">

								<ul>
									<?php foreach (array_combine($teamMember['socials'], $teamMember['social_icons']) as $socials => $icons) { ?>

										<li><a href="<?php echo $socials; ?>"><i class="<?php echo $icons; ?>"></i></a>
										</li>

									<?php }; ?>
								</ul>

							</div>

						</div>
					</div>
				</div>

			<?php } ?>
		</div>

	</div>


</div>