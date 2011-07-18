<?php include 'shared/head.php'?>
	<?php include 'shared/banner.php'?>
	<header class="styleguide_header"><h1>| Axle | 'text'</h1></header>
	<article class="styleguide_body">
		<?php include 'shared/nav.php'?>
		<header><p>1. Heading text</p></header>
		<article class="h1s">
			<h1>heading_1: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec posuere malesuada adipiscing.</h1>
			<h2>heading_2: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec posuere malesuada adipiscing.</h2>
			<h3>heading_3: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec posuere malesuada adipiscing.</h3>
			<h4>heading_4: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec posuere malesuada adipiscing.</h4>
			<h5>heading_5: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec posuere malesuada adipiscing.</h5>
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
			<h1>heading_1: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec posuere malesuada adipiscing.</h1>
			<h2>heading_2: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec posuere malesuada adipiscing.</h2>
			<h3>heading_3: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec posuere malesuada adipiscing.</h3>
			<h4>heading_4: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec posuere malesuada adipiscing.</h4>
			<h5>heading_5: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec posuere malesuada adipiscing.</h5>
			<p><b>OOCSS Example:</b></p>
			<pre class="prettyprint">
&lt;div class=&quot;home_page_hero google_font_alpha&quot;</span>&gt;
  &lt;h1&gt;heading_ 1: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec posuere malesuada adipiscing.&lt;/h1&gt;
&lt;/div&gt;
			</pre>
			<p><b>Semantic .LESS approach</b></p>
			<pre class="prettyprint">
.home_page_hero {
  .google_font_alpha;
}</pre>
			<p><b>Supporting markup</b></p>
			<pre class="prettyprint">
&lt;div class=&quot;home_page_hero&quot;&gt;
  &lt;h1&gt;This LESS stuff is pretty awesome!&lt;/h1&gt;
&lt;/div&gt;</pre>
		</article>
		<footer></footer>

		
		<header>
			<p>2. body text</p>
			<article>
				<p>Font styles are based on <code>em</code> scales, see <a href="http://www.alistapart.com/articles/howtosizetextincss/">How to Size Text in CSS</a>.  Setting the 'medium' or base font size for the application on the <code>body</code> tag sets the app precedence.</p> 
				<p>At the appropriate block level apply the LESS mixins of <code>macro, extra_small, small, medium, large, extra_large, xx_large</code> to the semantically named classes in your design LESS.  </p>
			</article>
		</header>
		<article class="body_text">
			<p class="macro_text">@macro: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dolor diam, condimentum gravida ultricies non, sollicitudin eget nunc.</p>
			<p class="extra_small">@extra_small: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dolor diam, condimentum gravida ultricies non, sollicitudin eget nunc.</p>
			<p class="small">@small: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dolor diam, condimentum gravida ultricies non, sollicitudin eget nunc.</p>
			<p class="medium">@medium: (default site style)</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dolor diam, condimentum gravida ultricies non, sollicitudin eget nunc.</p>
			<p class="large">@large: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dolor diam, condimentum gravida ultricies non, sollicitudin eget nunc.</p>
			<p class="extra_large">@extra_large: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dolor diam, condimentum gravida ultricies non, sollicitudin eget nunc.</p>
			<p class="xx_large">@xx_large: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dolor diam, condimentum gravida ultricies non, sollicitudin eget nunc.</p>
		</article>
		<footer></footer>
		
		<article>
			<p>Example HTML:</p>
			<pre class="prettyprint">
&lt;article class=&quot;leading_article&quot;&gt;
  &lt;header&gt;
    This is going to be some large text!
  &lt;/header&gt;
  &lt;p&gt;For the sake of giving emphasis to the leading article, we will make the body copy larger.&lt;/p&gt;
&lt;/article&gt;</pre>
		</article>
		
		<article>
			<p>Example LESS:</p>
			<pre class="prettyprint">
.leading_article {
  header {
    @xx_large;
  }
  p {
    @large;
  }
}</pre>
		</article>
		
		<header>
			<p>3. Standard body links</p>
			<p>The following examples show that by simply using an &lt;a&gt; tag will produce the desired UI.</p>
		</header>
		<article class="link_text">
			<p><a href="#">&lt;p&gt;&lt;a href=&quot;#&quot;&gt;standard copy 1em font style&lt;/a&gt;&lt;/p&gt;</a></p>
		</article>
		<footer></footer>
		
		<header><p>4. blockquote</p></header>
		<article>
			<blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</blockquote>
			<p><cite>-- Some guy</cite></p>
			<br>
			<pre class="prettyprint">
&lt;blockquote&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/blockquote&gt;
&lt;p&gt;&lt;cite&gt;-- Some guy&lt;/cite&gt;&lt;/p&gt;
			</pre>
		</article>
		<footer></footer>
		
		<header><p>5 Unordered lists</p></header>
		<article>
			<p>Since <code>&lt;ul&gt;&lt;/ul&gt;</code> tags are used a lot for layout, to regain a standard unordered list UI, use the <code>.bulleted_list</code> mixin in your semantic LESS class as illustrated.</p>
		</article>
		<article class="example_bullets">
			<ul>
				<li>Standard unordered list of items</li>
				<li>Thing to list out</li>
				<li>Grocery list maybe is a good one?</li>
				<li>Right, list of Netflix movies I will never watch!</li>
			</ul>
		</article>
		
		<article>
			<p>Example HTML:</p>
			<pre class="prettyprint">
&lt;article class=&quot;example_bullets&quot;&gt;
  &lt;ul&gt;
    &lt;li&gt;Standard unordered list of items&lt;/li&gt;
    &lt;li&gt;Thing to list out&lt;/li&gt;
    &lt;li&gt;Grocery list maybe is a good one?&lt;/li&gt;
    &lt;li&gt;Right, list of Netflix movies I will never watch!&lt;/li&gt;
  &lt;/ul&gt;
&lt;/article&gt;
			</pre>
		</article>
		
		<article>
			<p>.LESS mixin</p>
			<pre class="prettyprint">
.bulleted_list() {
	ul {
		list-style: disc;
		margin: 0 0 1.5em 1.6666667em;
	}
	li {
		float: none;
	}
}			</pre>
		</article>
		
		<article>
			<p>Example semantic LESS</p>
			<pre class="prettyprint">
.example_bullets {
	.bulleted_list;
}				</pre>
		</article>
		
	</article>
<?php include 'shared/footer.php'?>