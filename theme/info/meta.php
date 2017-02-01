<div class="info-meta">
	<div class="info">
		<div class="item">
			<i class="author"></i>
			<span><?php the_author(); ?></span>
		</div>
		<div class="item">
			<i class="play"></i>
			<span>0</span>
		</div>
		<div class="item">
			<i class="comment"></i>
			<span>0</span>
		</div>
	</div>
</div>
<style>
	.info-meta i{
		background:url(<?php echo get_template_directory_uri();?>/assets/icons.png) no-repeat;width: 12px;height: 12px;display: inline-block;vertical-align: top;margin-right: 3px
	}
	.info-meta i.author{
		background-position: -282px -154px;
	}
	.info-meta i.eye{
		background-position: -332px -154px;
	}
	.info-meta i.comment{
		background-position: -282px -218px;
	}
	.info-meta i.play{
		background-position: -282px -90px;
	}
	.info-meta .item{
		color: #99a2aa;font-size: 12px;display: inline-block;margin-right: 30px
	}
	.info-meta .item span{
		vertical-align: top;
	}
</style>