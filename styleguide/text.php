<?php include 'shared/head.php'?>
		
	<header class="styleguide_header"><h1>Styleguide_TEXT</h1></header>
	<article class="styleguide_body">
		<?php include 'shared/nav.php'?>
		<header><p>1. Heading text</p></header>
		<article class="h1s">
			<h1>H1: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec posuere malesuada adipiscing.</h1>
			<h2>H2: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec posuere malesuada adipiscing.</h2>
			<h3>H3: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec posuere malesuada adipiscing.</h3>
			<h4>H4: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec posuere malesuada adipiscing.</h4>
			<h5>H5: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec posuere malesuada adipiscing.</h5>
		</article>
		<footer></footer>

		
		<header>
			<p>2. body text</p>
			<article>
				<em>
					<p>Site default uses the <em>.medium_text</em> class.</p>
					<p>Applying a size class to the parent block element will adjust the font size in the appropriate em scale.</p>
				</em>
			</article>
		</header>
		<article class="body_text">
			<p class="extra_small_text"><span>class="extra_small_text"</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dolor diam, condimentum gravida ultricies non, sollicitudin eget nunc.</p>
			<p class="small_text"><span>class="small_text"</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dolor diam, condimentum gravida ultricies non, sollicitudin eget nunc.</p>
			<p class="medium_text"><span>class="medium_text" (default site style)</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dolor diam, condimentum gravida ultricies non, sollicitudin eget nunc.</p>
		</article>
		<article class="body_text">
			<p class="large_text"><span>class="large_text"</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dolor diam, condimentum gravida ultricies non, sollicitudin eget nunc.</p>
			<p class="extra_large_text"><span>class="extra_large_text"</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dolor diam, condimentum gravida ultricies non, sollicitudin eget nunc.</p>
			<p class="xx_large_text"><span>class="xx_large_text"</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dolor diam, condimentum gravida ultricies non, sollicitudin eget nunc.</p>
		</article>
		<footer></footer>
		
		<header><p>3. Standard body links</p></header>
		<article>
			<p><em>Note: The following examples show using an &lt;a&gt; tag will produce the desired UI.  By appending the font size classes as described in #2 will account for the appropriate font sizes.</em>  </p>
		</article>
		<article class="link_text">
			<p class="extra_small_text"><a href="#">&lt;p class=&quot;extra_small_text&quot;&gt;&lt;a href=&quot;#&quot;&gt;extra-small&lt;/a&gt;&lt;/p&gt;</a></p>
			<p class="small_text"><a href="#">&lt;p class=&quot;small_text&quot;&gt;&lt;a href=&quot;#&quot;&gt;small&lt;/a&gt;&lt;/p&gt;</a></p>
			<p><a href="#">&lt;p&gt;&lt;a href=&quot;#&quot;&gt;medium (defult)&lt;/a&gt;&lt;/p&gt;</a></p>
		</article>
		<footer></footer>
	</article>
<?php include 'shared/footer.php'?>