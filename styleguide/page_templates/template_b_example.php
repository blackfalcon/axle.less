<?php include '../shared/template_head.php'?>

<body onload="prettyPrint()">
	<?php include '../shared/layout_nav.php'?>
	<section class="template_b" id="">
		<header class="site_header">
			<h1>site header</h1>
			<nav>header nav</nav>
		</header>
		
		<section class="screen_header editorial_header">
			<header>Suspendisse</header>
			<article>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac diam nisi, in bibendum dolor. Vivamus nec placerat erat.</p>
			</article>
			<div class="site_search_block">
				<?php include '../widgets/_search_bar.php'?>
			</div>		
		</section>
		
		<aside class="site_aside">
			<ul class="example_self_select_panel">
				<?php include '../widgets/_self_select_panel.php'?>
			</ul>
		</aside>
		
		<section class="primary_content_section editorial">
			<article class="slide_viewer">
				<?php include '../widgets/_slide_show.php'?>
			</article>
			
			<article class="image_blocks">
				<h3>In hac habitasse platea dictumst</h3>
				<ul class="featured_events">
					<?php include '../widgets/_imageblock_caption.php'?>
				</ul>
			</article>
			
			<article class="editorial_coverage">
				<h4>Curabitur elit leo</h4>
				<?php include '../widgets/_three_col_text_block.php'?>
			</article>
			
			<article class="editorial_content">
				<h3>Lorem ipsum dolor sit amet</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur elit leo, eleifend consequat imperdiet eget, pulvinar vitae nulla. In hac habitasse platea dictumst. </p>
				<ul>
					<li><b>Lorem ipsum dolor sit amet</b>, consectetur adipiscing elit</li>
					<li><b>Curabitur elit leo</b>, eleifend consequat imperdiet eget, pulvinar vitae nulla</li>
					<li><b>In hac habitasse</b> platea dictumst</li>
				</ul>
			</article>
			
			<article class="narratives">
				<ul class="global_assignment">
					<?php include '../widgets/_narrative_element_left.php'?>
				</ul>
				<ul class="editorial_subscription">
					<?php include '../widgets/_narrative_element_right.php'?>
				</ul>
				<ul class="deep_file_research">
					<?php include '../widgets/_narrative_element_left.php'?>
				</ul>
			</article>
			
			<article>
				<h4>Lorem ipsum dolor sit amet, consectetur adipiscing eli</h4>
				<div class="site_search_block">
					<?php include '../widgets/_search_bar.php'?>
				</div>
			</article>	
			
			<article class="editorial_coverage">
				<h4>Curabitur elit leo</h4>
				<?php include '../widgets/_three_col_text_block.php'?>
			</article>
		</section>
	
		
		<footer class="site_footer">site footer</footer>
	</section>
</body>

