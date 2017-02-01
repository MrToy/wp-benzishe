<!DOCTYPE html>
<html>
	<head>
		<?php include 'meta.php' ?>
	</head>
	<body>
		<?php include 'header/header.php'; ?>
		<?php include 'nav/nav.php'; ?>
		<?php if (have_posts()) : the_post() ?>
		<?php include 'info/info.php'; ?>
		<section class="article">
			<?php the_content(); ?>
		</section>
		<?php endif; ?>
		<style>
			.article{
				background:#f6f9fa;padding: 20px 0;
			}
			.article .alignnone{
				margin: 0 auto;display: block;
			}
		</style>
	</body>
</html>