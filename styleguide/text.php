<?php include 'shared/head.php'?>
	<?php include 'shared/banner.php'?>
	<header class="styleguide_header"><h1>| Axle | 'text'</h1></header>
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
			<p>1.1 Special Heading text</p>
			<article>
				<em>
					<p>For OOCSS application, apply the <code>.google_font_alpha</code> to a block element containing heading tags.  For a semantic .LESS approach, apply <code>.google_font_alpha</code> to a semantically named class.</p>
				</em>
			</article>
		</header>
		<article class="h1s google_font_alpha">
			<h1>H1: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec posuere malesuada adipiscing.</h1>
			<h2>H2: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec posuere malesuada adipiscing.</h2>
			<h3>H3: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec posuere malesuada adipiscing.</h3>
			<h4>H4: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec posuere malesuada adipiscing.</h4>
			<h5>H5: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec posuere malesuada adipiscing.</h5>
			<p><b>OOCSS Example:</b></p>
			<pre>
&lt;div <span>class=&quot;home_page_hero google_font_alpha&quot;</span>&gt;
  &lt;h1&gt;H1: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec posuere malesuada adipiscing.&lt;/h1&gt;
&lt;/div&gt;
			</pre>
			<p><b>Semantic .LESS approach</b></p>
			<pre>
.LESS
<span>.home_page_hero</span> {
	<span>.google_font_alpha;</span>
}

HTML
&lt;div <span>class=&quot;home_page_hero&quot;</span> id=&quot;&quot;&gt;
	&lt;h1&gt;This .LESS stuff is pretty awesome!&lt;/h1&gt;
&lt;/div&gt;
			</pre>
		</article>
		<footer></footer>

		
		<header>
			<p>2. body text</p>
			<article>
				<em>
					<p>Applying a size class to the parent block element or the LESS mixin to a semantic class will adjust the font size in the appropriate em scale.</p>
				</em>
			</article>
		</header>
		<article class="body_text">
			<p class="extra_small"><span>class="extra_small"</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dolor diam, condimentum gravida ultricies non, sollicitudin eget nunc.</p>
			<p class="small"><span>class="small"</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dolor diam, condimentum gravida ultricies non, sollicitudin eget nunc.</p>
			<p class="medium"><span>class="medium" (default site style)</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dolor diam, condimentum gravida ultricies non, sollicitudin eget nunc.</p>
		</article>
		<article class="body_text">
			<p class="large"><span>class="large"</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dolor diam, condimentum gravida ultricies non, sollicitudin eget nunc.</p>
			<p class="extra_large"><span>class="extra_large"</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dolor diam, condimentum gravida ultricies non, sollicitudin eget nunc.</p>
			<p class="xx_large"><span>class="xx_large"</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dolor diam, condimentum gravida ultricies non, sollicitudin eget nunc.</p>
		</article>
		<footer></footer>
		
		<header><p>3. Standard body links</p></header>
		<article>
			<p><em>Note: The following examples show that by simply using an &lt;a&gt; tag will produce the desired UI.  But also appending the font size classes as described in #2 will account for the appropriate font sizes.</em>  </p>
		</article>
		<article class="link_text">
			<p class="extra_small"><a href="#">&lt;p class=&quot;extra_small&quot;&gt;&lt;a href=&quot;#&quot;&gt;extra-small&lt;/a&gt;&lt;/p&gt;</a></p>
			<p class="small"><a href="#">&lt;p class=&quot;small&quot;&gt;&lt;a href=&quot;#&quot;&gt;small&lt;/a&gt;&lt;/p&gt;</a></p>
			<p><a href="#">&lt;p&gt;&lt;a href=&quot;#&quot;&gt;medium (defult)&lt;/a&gt;&lt;/p&gt;</a></p>
		</article>
		<footer></footer>
		
		<header><p>4. blockquote</p></header>
		<article>
			<blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</blockquote>
			<p><cite>-- Some guy</cite></p>
			<br>
			<pre>
&lt;blockquote&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/blockquote&gt;
&lt;p&gt;&lt;cite&gt;-- Some guy&lt;/cite&gt;&lt;/p&gt;
			</pre>
		</article>
		<footer></footer>
		
		<header><p>5. Unordered lists</p></header>
		<article>
			<p>Since <code>&lt;ul&gt;&lt;/ul&gt;</code> tags are used a lot for layout, to regain the natural unordered list UI, the class of <code>.lower_content</code> is required on the parent container.</p>
			<p>The good news is that the layout of the screen is dependent on <code>.lower_container</code>, so for the most part you get this for free an that is what we all like.</p>
		</article>
		<article class="lower_content">
			<ul>
				<li>List item one</li>
				<li>List item two</li>
				<li>List item three</li>
				<li>List item four</li>
			</ul>
			<pre>
&lt;div <span>class=&quot;lower_container&quot;</span>&gt;
  &lt;ul&gt;
    &lt;li&gt;List item one&lt;/li&gt;
    &lt;li&gt;List item two&lt;/li&gt;
    &lt;li&gt;List item three&lt;/li&gt;
    &lt;li&gt;List item four&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;
			</pre>
		</article>
		<footer></footer>
		
		
	</article>
<?php include 'shared/footer.php'?>