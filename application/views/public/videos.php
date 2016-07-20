<?php $this->load->view('public/templates/header'); ?>
<?php $this->load->view('public/templates/slider'); ?>

<div class="container">
	<div class="row featurette">
		<br>
		<?php $sw = 0; ?>
		<?php foreach ($videos as $video): ?>
			<?php
			$enlaces = explode('=', $video->url_video);
			$link = explode('&', $enlaces[1]);
			?>
			<div class="row featurette">
				<div class="col-md-6 <?= ($sw != 0)?'col-md-push-6':'' ?>">
					<h2 class="featurette-heading"><?= $video->titulo; ?></h2>
					<p class="lead"><?= $video->autor; ?></p>
				</div>
				<div class="col-md-6 <?= ($sw != 0)?'col-md-pull-6':'' ?>">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/<?= $link[0]; ?>" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
			<hr class="featurette-divider">
			<?php
			  if ($sw == 0) {
			    $sw = 1;
			  } else {
			    $sw = 0;
			  }
			?>
		<?php endforeach; ?>
	</div>
</div>

<?php $this->load->view('public/templates/footer'); ?>