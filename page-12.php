<!-- the template for the gif page -->
<!-- created by Kaiyee0 -->

<?php get_header(); ?>
<!-- <style>
	.author-name-large{	font-size: 20px; margin-top: 10px !important;}
</style> -->
<style>
		.animated {
		  animation-duration: 2.5s;
		  animation-fill-mode: both;
		}


		/*Word Fade In*/
			@keyframes fadeIn {
			  0% {
			    opacity: 0;
			  }
			  49%{
			    opacity: 0;
			  }
			  from {
			    opacity: 0;
			  }
			  to {
			    opacity: 1;
			  }
			}
		

			.fadeIn {
			  animation-name: fadeIn;
			}
		/*Word Fade In End*/
		
		/*pic start*/

			@keyframes slideInLeft {
			  from {
			    transform: translate3d(-100%, 0, 0);
			    visibility: visible;
			  }

			  to {
			    transform: translate3d(0, 0, 0);
			  }
			}
		
			.slideInLeft {
			  animation-name: slideInLeft;
			}

			@keyframes slideInRight {
			  from {
			    transform: translate3d(100%, 0, 0);
			    visibility: visible;
			  }

			  to {
			    transform: translate3d(0, 0, 0);
			  }
			}

			.slideInRight {
			  animation-name: slideInRight;
			}
			
			@keyframes zoomIn {
			  from {
			    opacity: 0;
			    transform: scale3d(.3, .3, .3);
			  }

			  50% {
			    opacity: 1;
			  }
			}
		
			.zoomIn {
			  animation-name: zoomIn;
			}

		/*pic end*/

		/*Custom Block*/

			.myGIF #left{
				position:absolute;
				top:0px;
				left:200px;
				z-index:1;	
			}
			.myGIF #right{
				position:absolute;
				top:0px;
				left: -20px;
				z-index:2;	
			}
			.myGIF #left2{
				position:absolute;
				top:100px;
				left:10px;
				z-index:1;	
			}
			.myGIF #left3{
				position:absolute;
				top:100px;
				left:100px;
				z-index:1;	
			}
			.myGIF #right2{
				position:absolute;
				top:100px;
				right:0px;
				z-index:1;	
			}
			.myGIF #right3{
				position:absolute;
				top:100px;
				right:100px;
				z-index:1;
			}
			.myGIF #middle{
				position: absolute;
				top: 75px;
				left: 445px;
				z-index: 5;
			}
			.myGIF .href-block{
				color: #241e9e;
				border-bottom: 10px gray !important;
				z-index: 5;
				font-size: 18px;
				font-family: Gen-JyuuX;
			}
			.myGIF #block1{
				position: absolute;
				top: 160px;
				left: 1.1%;
				z-index: 3;
				animation: fadeIn 3s;
				margin:auto;
			}
			.myGIF #block2{
				position: absolute;
				top: 160px;
				left: 10.1%;
				z-index: 3;
				animation: fadeIn 3.3s;
				margin:auto;
			}
			.myGIF #block3{
				position: absolute;
				top: 160px;
				left: 19.1%;
				z-index: 3;
				animation: fadeIn 3.6s;
			}
			.myGIF #block4{
				position: absolute;
				top: 160px;
				left: 28.1%;
				z-index: 3;
				animation: fadeIn 3.9s;
			}
			.myGIF #block5{
				position: absolute;
				top: 160px;
				left: 58%;
				z-index: 3;
				animation: fadeIn 4.2s;
			}
			.myGIF #block6{
				position: absolute;
				top: 160px;
				left: 67%;
				z-index: 3;
				animation: fadeIn 4.5s;
			}
			.myGIF #block7{
				position: absolute;
				top: 160px;
				left: 76%;
				z-index: 3;
				animation: fadeIn 4.8s;
			}
			.myGIF #block8{
				position: absolute;
				top: 160px;
				left: 85%;
				z-index: 3;
				animation: fadeIn 5.1s;
			}
			.myGIF #block9{
				position: absolute;
				top: 160px;
				left: 94%;
				z-index: 3;
				animation: fadeIn 5.4s;
			}
			.myGIF{
				position: relative;
				width: 1000px;
				height: 380px;
				padding-left: 10px;
				/*border: 10px solid;*/
			}
			a.href-block:hover{
				color: #518be8;
				text-decoration: none;
				font-size: 30px;
			}
		/*Custom Block End*//**/
			.block_invis_show{
				display: none;
				background-color: #2f2ba2;
				color: white;
				margin-top: 2px;
				padding-left: 10px;
				padding-right: 10px;
				opacity: 0.9;
				font-family: Gen-Jyuux;
			}
			#block1:hover + #block_invis1{
				display: block;
			}
			#block2:hover + #block_invis2{
				display: block;
			}
			#block3:hover + #block_invis3{
				display: block;
			}
			#block4:hover + #block_invis4{
				display: block;
			}
			#block5:hover + #block_invis5{
				display: block;
			}
			#block6:hover + #block_invis6{
				display: block;
			}
			#block7:hover + #block_invis7{
				display: block;
			}
			#block8:hover + #block_invis8{
				display: block;
			}
			#block9:hover + #block_invis9{
				display: block;
			}
</style>
	<div class="row myGIF">
		<a href="http://18.217.117.127/%E8%A1%97%E8%88%9E/"><img src="<?php bloginfo('template_directory'); ?>/img/middle.png" id="middle" class="animated zoomIn"  alt=""></a>
		<img src="<?php bloginfo('template_directory'); ?>/img/left.png" id="left" class="animated slideInLeft" alt="">
		<img src="<?php bloginfo('template_directory'); ?>/img/left2.png" id="left2" class="animated slideInLeft" alt="">
		<img src="<?php bloginfo('template_directory'); ?>/img/left3.png" id="left3" class="animated slideInLeft" alt="">
		<img src="<?php bloginfo('template_directory'); ?>/img/right.png" id="right" class="animated slideInRight" alt="">
		<img src="<?php bloginfo('template_directory'); ?>/img/right2.png" id="right2" class="animated slideInRight" alt="">
		<img src="<?php bloginfo('template_directory'); ?>/img/right3.png" id="right3" class="animated slideInRight" alt="">
		<div id="block1"><a href="http://18.217.117.127/%E5%AA%92%E9%AB%94/http://18.217.117.127/%E5%AA%92%E9%AB%94/" class="href-block">媒體</a></div>
		<div id="block_invis1"  class="block_invis_show" style="position: absolute;top:200px;left: 10px;opacity: 0.8;z-index: 10;">
			<div class="invis_inner">影響街舞形成的媒體</div>
		</div>
		<div id="block2"><a href="http://18.217.117.127/舞蹈/" class="href-block">舞蹈</a></div>
		<div id="block_invis2" class="block_invis_show" style="position: absolute;top:200px;left: 100px;opacity: 0.8;z-index: 10;">
			<div class="invis_inner">影響街舞形成的舞蹈</div>
		</div>
		<div id="block3"><a href="http://18.217.117.127/文化/" class="href-block">文化</a></div>
		<div id="block_invis3"  class="block_invis_show" style="position: absolute;top:200px;left: 190px;opacity: 0.8;z-index: 10;">
			<div class="invis_inner">構成、影響街舞的各種文化</div>
		</div>
		<div id="block4"><a href="http://18.217.117.127/音樂/" class="href-block">音樂</a></div>
		<div id="block_invis4"  class="block_invis_show" style="position: absolute;top:200px;left: 280px;opacity: 0.8;z-index: 10;">
			<div class="invis_inner">街舞和相關音樂間的發展</div>
		</div>
		<div id="block5"><a href=http://18.217.117.127/舞者/" class="href-block">舞者</a></div>
		<div id="block_invis5"  class="block_invis_show" style="position: absolute;top:200px;left: 580px;opacity: 0.8;z-index: 10;">
			<div class="invis_inner">台灣街舞者的生成、各舞團的發展</div>
		</div>
		<div id="block6"><a href="http://18.217.117.127/%E6%95%99%E5%AE%A4/" class="href-block">教室</a></div>
		<div id="block_invis6"  class="block_invis_show" style="position: absolute;top:200px;left: 670px;opacity: 0.8;z-index: 10;">
			<div class="invis_inner">台灣街舞工作室介紹</div>
		</div>
		<div id="block7"><a href="http://18.217.117.127/活動/" class="href-block">活動</a></div>
		<div id="block_invis7"  class="block_invis_show" style="position: absolute;top:200px;left:760px;opacity: 0.8;z-index: 10;">
			<div class="invis_inner">台灣街舞相關活動的整理</div>
		</div>
		<div id="block8"><a href="http://18.217.117.127/%E6%9C%8D%E8%A3%9D/" class="href-block">服裝</a></div>
		<div id="block_invis8"  class="block_invis_show" style="position: absolute;top:200px;left: 850px;opacity: 0.8;z-index: 10;">
			<div class="invis_inner">街舞服裝的演變</div>
		</div>
		<div id="block9"><a href="http://18.217.117.127/%E5%85%B6%E4%BB%96/" class="href-block">其他</a></div>
		<div id="block_invis9"  class="block_invis_show" style="position: absolute;top:200px;left: 840px;opacity: 0.8;z-index: 10;">
			<div class="invis_inner">相關的協會、論文、場所介紹</div>
		</div>
	</div>

<?php get_footer(); ?>