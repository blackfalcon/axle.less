<?php include 'shared/head.php'?>
	<?php include 'shared/banner.php'?>
	<header class="styleguide_header"><h1>| Axle | '960 grid' | 16 col</h1></header>
	<?php include 'shared/nav.php'?>
	<article class="styleguide_body">
		<div class="instructions">
			<p>Axle's grid system is based off of the <a href="http://960.gs/">960 grid system</a> developed by <a href="http://sonspring.com/about">Nathan Smith</a>. You and others led the way ... thanks for all the hard work.</p>
			<p>Axle's grid.LESS can support both a <a href="/styleguide/">12</a> and <a href="grid_16.php">16</a> col grid system.  Below is an example of a 16 col.  See code instructions and examples below.	</p>
		</div>
		<header>
			<p>1. 960 Site grid</p>
			<article>
				<p>960 grid layout for UI placement</p>
			</article>
		</header>
		<div class="grid_960 col_16">
			<ul>
				<li class="grid-16-1">.grid_16(1)</li>
				<li class="grid-16-15">.grid_16(15)</li>
			</ul>
			<ul>
				<li class="grid-16-2">.grid_16(2)</li>
				<li class="grid-16-14">.grid_16(14)</li>
			</ul>
			<ul>
				<li class="grid-16-3">.grid_16(3)</li>
				<li class="grid-16-13">.grid_16(13)</li>
			</ul>
			<ul>
				<li class="grid-16-4">.grid_16(4)</li>
				<li class="grid-16-12">.grid_16(12)</li>
			</ul>
			<ul>
				<li class="grid-16-5">.grid_16(5)</li>
				<li class="grid-16-11">.grid_16(11)</li>
			</ul>
			<ul>
				<li class="grid-16-6">.grid_16(6)</li>
				<li class="grid-16-10">.grid_16(10)</li>
			</ul>
			<ul>
				<li class="grid-16-7">.grid_16(7)</li>
				<li class="grid-16-9">.grid_16(9)</li>
			</ul>
			<ul>
				<li class="grid-16-8">.grid_16(8)</li>
				<li class="grid-16-8">.grid_16(8)</li>
			</ul>
			<ul>
				<li class="grid-16-9">.grid_16(9)</li>
				<li class="grid-16-7">.grid_16(7)</li>
			</ul>
			<ul>
				<li class="grid-16-10">.grid_16(10)</li>
				<li class="grid-16-6">.grid_16(6)</li>
			</ul>
			<ul>
				<li class="grid-16-11">.grid_16(11)</li>
				<li class="grid-16-5">.grid_16(5)</li>
			</ul>
			<ul>
				<li class="grid-16-12">.grid_16(12)</li>
				<li class="grid-16-4">.grid_16(4)</li>
			</ul>
			<ul>
				<li class="grid-16-13">.grid_16(13)</li>
				<li class="grid-16-3">.grid_16(3)</li>
			</ul>
			<ul>
				<li class="grid-16-14">.grid_16(14)</li>
				<li class="grid-16-2">.grid_16(2)</li>
			</ul>
			<ul>
				<li class="grid-16-15">.grid_16(15)</li>
				<li class="grid-16-1">.grid_16(1)</li>
			</ul>
			<ul>
				<li class="grid-16-4">.grid_16(4)</li>
				<li class="grid-16-4">.grid_16(4)</li>
				<li class="grid-16-4">.grid_16(4)</li>
				<li class="grid-16-4">.grid_16(4)</li>
			</ul>
		</div>
		<article>
			<p><b>Instructions:</b></p>
			<p>Axle's grid solution is based on <a href="https://github.com/blackfalcon/axle.less/blob/master/public/styles/less/imports/grid.less">5 mixins per grid solution</a>.  These mixins support Grid width, prefix, suffix, pull and push.</p>
			<p>In your semantic class, use the mixin of <code>.grid_12()</code> or <code>.grid_16()</code> depending on the layout you want to use.  The same syntax will be used for <code>.prefix_12(), suffix_12(), pull_12() and push_12()</code> or  <code>.prefix_16(), suffix_16(), pull_16() and push_16()</code></p>
			<p>In the <code>()</code> you will enter the column values and Axle takes care of the rest.</p>
			<p>Axle's solution is completely mathematical, fluid and based on percentages.  Whereas a .pull or .push in 960gs will move the block a full 60px or 80px, Axle's grid solution will allow you to move a fraction of a grid if needed.</p>
			<p>Using something like <code>.push_16(.5)</code> will push the block element 1/2 a grid (or 30px per this example).</p>
			<p><b>Building a semantic block element class using mixins.</b></p>
			<p><b>HTML Example:</b></p>
			<pre class="prettyprint">
&lt;article <span>class=&quot;summary_quote&quot;</span>&gt;
  &lt;p&gt;Axle is not a CSS framework, but is more of a process in which to develop visual assets. The real power behind Axle is to develop your UI solution in an abstract environment from the application.&lt;/p&gt;
  &lt;p&gt;If you like OOCSS and crave real semantic markup, you will LOVE AXLE!&lt;/p&gt;
  &lt;blockquote&gt;BTW- axle.dalesande.com is fucking awesome&lt;/blockquote&gt;
  &lt;p&gt;&lt;cite&gt;-- &lt;a href=&quot;http://twitter.com/#!/whazzmaster&quot;&gt;whazzmaster&lt;/a&gt;&lt;/cite&gt;&lt;/p&gt;
&lt;/article&gt;
&lt;aside <span>class=&quot;home_twitter_feed&quot;</span>&gt;
  &lt;?php include 'partials/twitter.php'?&gt;
&lt;/aside&gt;			
			</pre>
			
			<p><b>LESS Example:</b></p>
			<pre class="prettyprint">
<span>.summary_quote</span> {
  .large;
  .grid_16(9);
  float: left;
  .push_16(.25);
}

<span>.home_twitter_feed</span> {
  .grid_16(7);
  .box_shadow (0 0px 10px, @shadow_color);
  float: left; 
  .push_16(1);
}			
			</pre>
		</article>		
	</article>
<?php include 'shared/footer.php'?>