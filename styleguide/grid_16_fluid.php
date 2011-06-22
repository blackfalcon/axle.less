<?php include 'shared/head.php'?>
	<?php include 'shared/banner.php'?>
	<header class="styleguide_header"><h1>| Axle | '960 grid' | 16 col | fluid</h1></header>
	<?php include 'shared/nav.php'?>
	<article class="styleguide_body">
		<div class="instructions">
			<p>Axle's grid system is based off of the <a href="http://960.gs/">960 grid system</a> developed by <a href="http://sonspring.com/about">Nathan Smith</a>. You and others led the way ... thanks for all the hard work.  As an alternative, Axle's fluid grid is using a percentage based solution. <a href="index.php">For the standard pixel solution, click here.</a></p>
			<p>Axle's fluid grid.LESS can support both a <a href="grid_12_fluid.php">12</a> and <a href="grid_16_fluid.php">16</a> col grid system.  Below is an example of a 12 col.  See code instructions and examples below.	</p>
			<p><b>ALERT!!!  The fluid grid is STILL IN DEVELOPMENT.</b> This kind of works, I am using hacks that I am not proud of. Do not use at this time.</p>
		</div>
		<header>
			<p>1. 960 Site grid</p>
			<article>
				<p>960 grid layout for UI placement</p>
			</article>
		</header>
		<div class="grid_960 col_16">
			<ul>
				<li class="flgrid-16-1">.flgrid_16(1)</li>
				<li class="flgrid-16-15">.flgrid_16(15)</li>
			</ul>
			<ul>
				<li class="flgrid-16-2">.flgrid_16(2)</li>
				<li class="flgrid-16-14">.flgrid_16(14)</li>
			</ul>
			<ul>
				<li class="flgrid-16-3">.flgrid_16(3)</li>
				<li class="flgrid-16-13">.flgrid_16(13)</li>
			</ul>
			<ul>
				<li class="flgrid-16-4">.flgrid_16(4)</li>
				<li class="flgrid-16-12">.flgrid_16(12)</li>
			</ul>
			<ul>
				<li class="flgrid-16-5">.flgrid_16(5)</li>
				<li class="flgrid-16-11">.flgrid_16(11)</li>
			</ul>
			<ul>
				<li class="flgrid-16-6">.flgrid_16(6)</li>
				<li class="flgrid-16-10">.flgrid_16(10)</li>
			</ul>
			<ul>
				<li class="flgrid-16-7">.flgrid_16(7)</li>
				<li class="flgrid-16-9">.flgrid_16(9)</li>
			</ul>
			<ul>
				<li class="flgrid-16-8">.flgrid_16(8)</li>
				<li class="flgrid-16-8">.flgrid_16(8)</li>
			</ul>
			<ul>
				<li class="flgrid-16-9">.flgrid_16(9)</li>
				<li class="flgrid-16-7">.flgrid_16(7)</li>
			</ul>
			<ul>
				<li class="flgrid-16-10">.flgrid_16(10)</li>
				<li class="flgrid-16-6">.flgrid_16(6)</li>
			</ul>
			<ul>
				<li class="flgrid-16-11">.flgrid_16(11)</li>
				<li class="flgrid-16-5">.flgrid_16(5)</li>
			</ul>
			<ul>
				<li class="flgrid-16-12">.flgrid_16(12)</li>
				<li class="flgrid-16-4">.flgrid_16(4)</li>
			</ul>
			<ul>
				<li class="flgrid-16-13">.flgrid_16(13)</li>
				<li class="flgrid-16-3">.flgrid_16(3)</li>
			</ul>
			<ul>
				<li class="flgrid-16-14">.flgrid_16(14)</li>
				<li class="flgrid-16-2">.flgrid_16(2)</li>
			</ul>
			<ul>
				<li class="flgrid-16-15">.flgrid_16(15)</li>
				<li class="flgrid-16-1">.flgrid_16(1)</li>
			</ul>
			<ul>
				<li class="flgrid-16-4">.flgrid_16(4)</li>
				<li class="flgrid-16-4">.flgrid_16(4)</li>
				<li class="flgrid-16-4">.flgrid_16(4)</li>
				<li class="flgrid-16-4">.flgrid_16(4)</li>
			</ul>
		</div>
		<article>
			<p><b>Instructions:</b></p>
			<p>Axle's grid solution is based on <a href="https://github.com/blackfalcon/axle.less/blob/master/public/styles/less/imports/grid.less">5 mixins per grid solution</a>.  These mixins support Grid width, prefix, suffix, pull and push.</p>
			<p>In your semantic class, use the mixin of <code>.flgrid_12()</code> or <code>.flgrid_16()</code> depending on the layout you want to use.  The same syntax will be used for <code>.flprefix_12(), .flsuffix_12(), .flpull_12() and .flpush_12()</code> or  <code>.flprefix_16(), .flsuffix_16(), .flpull_16() and .flpush_16()</code></p>
			<p>In the <code>()</code> you will enter the column values and Axle takes care of the rest.</p>
			<p>Axle's solution is completely mathematical, fluid and based on percentages.  Whereas a .pull or .push in 960gs will move the block a full 60px or 80px, Axle's grid solution will allow you to move a fraction of a grid if needed.</p>
			<p>Using something like <code>.push_12(.5)</code> will push the block element 1/2 a grid (or 40px per this example).</p>
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
  .flgrid_12(7);
  float: left;
  .push_12(.25);
}

<span>.home_twitter_feed</span> {
  .flgrid_12(5);
  .box_shadow (0 0px 10px, @shadow_color);
  float: left; 
  .push_12(1);
}			
			</pre>
		</article>		
	</article>
<?php include 'shared/footer.php'?>