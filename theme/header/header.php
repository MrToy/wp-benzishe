<section class="header">
	<div class="bg-box">
		<div class="bg-blur"></div>
		<div class="bg-mask"></div>
	</div>
	<nav>
		<img class="logo" src="<?php echo get_template_directory_uri(); ?>/header/20161231072227135.png" />
		<?php
			wp_nav_menu(array(
				'container'=>'ul',
				'theme_location'=>'top',
				'items_wrap'=>'<ul>%3$s</ul>'
			));
		?>
		<ul class="user">
			<li><a href="/">注册</a></li>
			<li class="line"></li>
			<li><a href="/">登录</a></li>
		</ul>
		<div class="search">
			<form>
				<input placeholder="你想来点什么本子？" />
				<button type="submit">
					<svg height="27" viewBox="0 0 24 24" width="27" xmlns="http://www.w3.org/2000/svg">
						<path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
						<path d="M0 0h24v24H0z" fill="none"/>
					</svg>
				</button>
			</form>
		</div>
	</nav>
</section>
<style>
	.header{
		position:relative;height:170px;background:url(<?php echo get_template_directory_uri(); ?>/header/2Q==.jpg) no-repeat center -10px
	}
	.header .bg-box{
		top:0;position:absolute;width: 100%;height: 42px;overflow: hidden;box-shadow: rgba(0,0,0,0.1) 0 1px 2px;
	}
	.header .bg-box .bg-mask{
		height: 170px;position:absolute;top:0;width: 100%;background:rgba(255,255,255,0.4);
	}
	.header .bg-box .bg-blur{
		height: 170px;position:absolute;width: 100%;top:-10px;-webkit-filter: blur(5px);-ms-filter: blur(5px);filter: blur(5px);filter: progid:DXImageTransform.Microsoft.Blur(PixelRadius=5,MakeShadow=false);background:url(<?php echo get_template_directory_uri(); ?>/header/2Q==.jpg) no-repeat center 0;
	}
	.header nav{
		margin: 0 auto;width: 980px;position: relative;	
	}
	.header ul,.header li{
		list-style-type: none;padding: 0;margin: 0
	}
	.header li{
		float:left;line-height: 42px
	}
	.header nav a{
		height: 100%;display: block;font-size: 13px;padding: 0 14px;transition: all 0.2s
	}
	.header nav a:hover{
		background: rgba(255,255,255,0.3);
	}
	.header .user{
		float: right;
	}
	.header .user .line{
		display: inline-block;border-left: 1px solid #222;height: 12px;margin-top: 15px;vertical-align: top;
	}
	.header .logo{
		height: 20px;float: left;margin-top: 10px
	}
	.header .search{
		position: absolute;right: 0;top:130px;
	}
	.header  form{
		background-color: rgba(255,255,255,0.8);display: block;height: 32px;border-radius: 4px;transition: .2s background-color;
	}
	.header form:hover{
		background-color: rgba(255,255,255,0.9);
	}
	.header form input{
		width: 200px;color: #222;font-size: 12px;height: 32px;line-height: 32px;padding: 0 12px;border: 0;background-color: transparent;outline: none;vertical-align: top
	}
	.header form button{
		width: 48px;height: 32px;background:none;border: 0;outline: none;cursor: pointer;
	}
	.header form button svg{
		margin-top:2px;fill: #00a1d6
	}
</style>