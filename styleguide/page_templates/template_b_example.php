<?php include '../shared/template_head.php'?>

<body onload="prettyPrint()">
	<?php include '../shared/layout_nav.php'?>
	<section class="template_b" id="">
		<header class="site_header">
			<h1>site header</h1>
			<nav>header nav</nav>
		</header>
		
		<section class="screen_header">
			<header>Suspendisse</header>
			<article>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac diam nisi, in bibendum dolor. Vivamus nec placerat erat.</p>
			</article>
			<?php include '../widgets/_search_bar.php'?>		
		</section>
		
		<aside class="site_aside">
			<?php include '../widgets/_self_select_panel.php'?>
		</aside>
		
		<section class="primary_content_section">
			<article class="image_blocks">
				<h3>Lorem ipsum</h3>
				<?php include '../widgets/_imageblock_caption.php'?>
			</article>
			
			<article class="editorial_coverage">
				<h4>Lorem ipsum</h4>
				<ul>
					<li>
						<p><b>Lorem ipsum</b></p>
						<p><a href="#">Lorem ipsum dolor sit amet</a></p>
						<p><a href="#">Lorem ipsum dolor sit amet</a></p>
						<p><a href="#">Lorem ipsum dolor sit amet</a></p>
						<p><a href="#">Lorem ipsum dolor sit amet</a></p>
					</li>
					<li>
						<p><b>Lorem ipsum</b></p>
						<p><a href="#">Lorem ipsum dolor sit amet</a></p>
						<p><a href="#">Lorem ipsum dolor sit amet</a></p>
						<p><a href="#">Lorem ipsum dolor sit amet</a></p>
						<p><a href="#">Lorem ipsum dolor sit amet</a></p>
					</li>
					<li>
						<p><b>Lorem ipsum</b></p>
						<p><a href="#">Lorem ipsum dolor sit amet</a></p>
						<p><a href="#">Lorem ipsum dolor sit amet</a></p>
						<p><a href="#">Lorem ipsum dolor sit amet</a></p>
						<p><a href="#">Lorem ipsum dolor sit amet</a></p>
					</li>
				</ul>
			</article>
			
			<article class="editorial_content">
				<h3>Lorem ipsum</h3>
			</article>
			
			<article class="narratives">
				<?php include '../widgets/_narrative_element_left.php'?>
				<?php include '../widgets/_narrative_element_right.php'?>
				<?php include '../widgets/_narrative_element_left.php'?>
			</article>
			
			<?php include '../widgets/_search_bar.php'?>
		</section>
	
		
		<footer class="site_footer">site footer</footer>
	</section>
</body>

