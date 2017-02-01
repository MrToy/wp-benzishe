<section class="information">
	<div class="meta">
		<h1><?php the_title(); ?></h1>
		<time><?php the_time('Y/m/d G:h'); ?></time>
		<?php get_template_part('info/meta') ?>
	</div>
	<div class="author-meta">
		<div class="face">
			<img src="“ />
		</div>
		<div class="info">
			
		</div>
	</div>
</section>
<style>
	.information{
		width: 980px;margin: 0 auto 10px auto;position: relative
	}
	.information h1{
		text-overflow: ellipsis;overflow: hidden;width: 600px;font-weight:normal;margin:0;margin-bottom: 8px ;font-size: 18px;color: #525659
	}
	.information .author-meta{
		position: absolute;top:0;right: 0;width: 320px
	}
	.information time{
		color: #99a2aa;font-size: 12px;margin:6px 0;display: block;
	}
</style>