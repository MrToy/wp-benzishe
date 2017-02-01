<section class="nav">
	<nav>
		<?php
		wp_nav_menu(array(
			'container'=>'ul',
			'theme_location'=>'middle',
			'items_wrap'=>'<ul>%3$s</ul>',
			'link_before'=>'<em>',
			'link_after'=>'</em>'
		));
		?>
	</nav>
	<a class="app" href="#"></a>
</section>
<style>
	.nav{
		position: relative;padding: 10px 0;width: 980px;margin: 0 auto;
	}
	.nav nav{
		height: 31px;display: inline-block;
	}
	.nav ul,.nav li{
		list-style-type: none;padding: 0;margin: 0
	}
	.nav li{
		float:left;
	}
	.nav li em{
		font-style: normal;transition: all 0.2s;line-height: 30px;display: inline-block;
	}
	.nav li.current-menu-item em{
		color:#00a1d6;border-bottom: 2px solid #00a1d6
	}
	.nav li:hover em{
		color:#00a1d6
	}
	.nav nav a{
		height: 100%;display: block;font-size: 15px;padding: 0 14px
	}
	.nav .app{
		width: 58px;height: 34px;float: right;background:url(<?php echo get_template_directory_uri(); ?>/nav/app.png);
	}
	.nav .app:hover{
		background:url(<?php echo get_template_directory_uri(); ?>/nav/app2.png);
	}
</style>