<?php include 'shared/head.php'?>
	<?php include 'shared/banner.php'?>
	<header class="styleguide_header"><h1>| Axle | '960 grid'</h1></header>
	<?php include 'shared/nav.php'?>
	<article class="styleguide_body">
		<div class="instructions">
			<p>Axle's grid system is based off of the <a href="http://960.gs/">960 grid system</a> developed by <a href="http://sonspring.com/about">Nathan Smith</a>.  Classes can either be applied to the block element in the HTML or the preferred method is to apply the mixin to a semantically named class for the block. </p>
			<p>Axle's grid solution is based on percentages. This will give your design ultimate flexibility that these grid spots will retain a proportional relationship regardless of the width of it's parent container. Just think about how this will work with mobile stylesheets.</p>
		</div>
		<header>
			<p>1. 960 Site grid</p>
			<article>
				<p>960 grid layout for UI placement</p>
			</article>
		</header>
		<div class="grid_960">
			<ul>
				<li class="grid_7">56.25% (.grid_7)</li>
				<li class="grid_5">39.58% (.grid_5)</li>
			</ul>
			<ul>
				<li class="grid_8">64.58% (.grid_8)</li>
				<li class="grid_4">31.25% (.grid_4)</li>
			</ul>
			<ul>
				<li class="grid_9">72.91% (.grid_9)</li>
				<li class="grid_3">22.91% (.grid_3)</li>
			</ul>
			<ul>
				<li class="grid_10">81.25% (.grid_10)</li>
				<li class="grid_2">14.58% (.grid_2)</li>
			</ul>
			<ul>
				<li class="grid_11">89.58% (.grid_11)</li>
				<li class="grid_1">6.25%</li>
			</ul>
			<ul>
				<li class="grid_12">97.91% (.grid_12)</li>
			</ul>
			<ul>
				<li class="grid_1">6.25%</li>
				<li class="grid_11">89.58% (grid_11)</li>
			</ul>
			<ul>
				<li class="grid_2">14.58% (.grid_2)</li>
				<li class="grid_10">81.25% (.grid_10)</li>
			</ul>
			<ul>
				<li class="grid_3">22.91% (.grid_3)</li>
				<li class="grid_9">72.91% (.grid_9)</li>
			</ul>
			<ul>
				<li class="grid_4">31.25% (.grid_4)</li>
				<li class="grid_8">64.58%  (.grid_8)</li>
			</ul>
			<ul>
				<li class="grid_5">39.58% (.grid_5)</li>
				<li class="grid_7">56.25% (.grid_7)</li>
			</ul>
			<ul>
				<li class="grid_1">6.25%</li>
				<li class="grid_1">.grid_1</li>
				<li class="grid_1">6.25%</li>
				<li class="grid_1">.grid_1</li>
				<li class="grid_1">6.25%</li>
				<li class="grid_1">.grid_1</li>
				<li class="grid_1">6.25%</li>
				<li class="grid_1">.grid_1</li>
				<li class="grid_1">6.25%</li>
				<li class="grid_1">.grid_1</li>
				<li class="grid_1">6.25%</li>
				<li class="grid_1">.grid_1</li>
			</ul>
			<ul>
				<li class="grid_4">31.25% (.grid_4)</li>
				<li class="grid_4">31.25% (.grid_4)</li>
				<li class="grid_4">31.25% (.grid_4)</li>
			</ul>
			<ul>
				<li class="grid_6">47.93% (.grid_6)</li>
				<li class="grid_6">47.93% (.grid_6)</li>
			</ul>
		</div>
		<article>
			<p>Code example:</p>
			<p><b>Building a semantic block element class using mixins.</b></p>
			<pre>
~ HTML ~
&lt;div <span>class=&quot;main_body&quot;</span>&gt;
  &lt;section <span>class=&quot;site_nav&quot;</span>&gt;
    &lt;nav class=&quot;main_nav&quot;&gt;&lt;/nav&gt;
  &lt;/section&gt;
  &lt;section <span>class=&quot;main_content&quot;</span>&gt;
    &lt;header class=&quot;content_header&quot;&gt;&lt;/header&gt;
    &lt;article&gt;&lt;/article&gt;
    &lt;footer class=&quot;content_footer&quot;&gt;&lt;/footer&gt;
  &lt;/section&gt;
&lt;/div&gt;

~ LESS ~
.main_body {
  width: 960px
}

.site_nav {
  .grid_4;
}

.main_content {
  .grid_8;
}
			</pre>

			<p><b>Applying OOCSS class names to block elements.</b></p>
			<pre>
~ HTML ~
&lt;div <span>class=&quot;main_body&quot;</span>&gt;
  &lt;section <span>class=&quot;site_nav grid_4&quot;</span>&gt;
    &lt;nav class=&quot;main_nav&quot;&gt;&lt;/nav&gt;
  &lt;/section&gt;
  &lt;section <span>class=&quot;main_content grid_8&quot;</span>&gt;
    &lt;header class=&quot;content_header&quot;&gt;&lt;/header&gt;
    &lt;article&gt;&lt;/article&gt;
    &lt;footer class=&quot;content_footer&quot;&gt;&lt;/footer&gt;
  &lt;/section&gt;
&lt;/div&gt;
			</pre>
		</article>		
	</article>
<?php include 'shared/footer.php'?>