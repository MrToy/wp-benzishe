<section class="list">
	<?php if ( have_posts() ) : while ( have_posts()) : the_post();if(has_post_thumbnail()): ?>
	<a href="<?php the_permalink(); ?>" class="block">
		<?php the_post_thumbnail();  ?>
		<div class="info-box">
			<div class="title"><?php the_title(); ?></div>
			<?php get_template_part('info/meta') ?>
		</div>
	</a>
	<?php endif; endwhile; endif; ?>
</section>
<style>
	.list .info-box{
		height: 51px;overflow: hidden;
	}
	.list .block{
		position: relative;float:left;width: 200px;margin: 0 30px 30px 0;
	}
	.list .block:hover .title{
		color:#00a1d6;height: 35px
	}
	.list img{
		width: 100%;height: auto;border-radius:4px
	}
	.list .title{
		margin:8px 0;transition: all .2s;font-size: 13px;line-height: 17px;height: 17px;overflow: hidden;text-overflow: ellipsis;
	}
</style>
<script type="text/javascript" src="//cdn.staticfile.org/masonry/4.1.1/masonry.pkgd.min.js"></script>
<script type="text/javascript" src="//cdn.staticfile.org/fetch/2.0.1/fetch.min.js"></script>
<script type="text/javascript">
	var msnry = new Masonry( '.list')
	document.querySelectorAll(".list img").forEach(function(img){
		img.onload=function(){
			msnry.layout()
		}
	})
	var loader={
		loaded:10,
		total:100,
		state:"wait",
		load:function(){
			var ctx=this
			if(ctx.state!="wait")return
			if(ctx.loaded>=ctx.total)return
			ctx.state="loading"
			var page=ctx.loaded/5+1
			fetch('/wp-json/wp/v2/posts?_embed&page='+page+'&per_page=5').then(function(res){
				ctx.total=parseInt(res.headers.get('X-WP-Total'))
				return res.json()
			}).then(function(data){
				ctx.loaded+=data.length
				data.forEach(function(it){
					var el=ctx.transform(it)
					if(!el)return
					document.querySelector(".list").appendChild(el)
					msnry.appended(el)
				})
				ctx.state="wait"
			})
		},
		transform:function(data){
			var it=document.querySelector(".list .block").cloneNode(true)
			it.querySelector(".title").innerText=data.title.rendered
			var img=it.querySelector("img")
			if(!data._embedded["wp:featuredmedia"]||!data._embedded["wp:featuredmedia"][0].source_url)return
			img.src=data._embedded["wp:featuredmedia"][0].source_url
			img.removeAttribute("srcset")
			img.onload=function(){
				msnry.layout()
			};
			return it;
		}
	};
	window.onscroll=function(){
		var last=document.body.clientHeight-window.scrollY-window.innerHeight
		if(last<200)loader.load()
	}
</script>