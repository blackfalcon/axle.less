<?php include 'shared/head.php'?>
	<header class="styleguide_header"><h1>| Axle | '960 grid'</h1></header>
	<?php include 'shared/nav.php'?>
	<article class="styleguide_body">
		<header>
			<p>1. 960 Site grid</p>
			<article>
				<p>960 grid layout for UI placement</p>
				<p>Creating a UI layout using the 960 grid system can be done in two ways.  Either apply a class or build a class using a mixin.  The mixin method is prefered of course.  See below for code examples.</p>
			</article>
		</header>
		<div class="grid_960">
			<ul>
				<li class="grid_7">540px (grid_7)</li>
				<li class="grid_5">380px (grid_5)</li>
			</ul>
			<ul>
				<li class="grid_8">620px (grid_8)</li>
				<li class="grid_4">300px (grid_4)</li>
			</ul>
			<ul>
				<li class="grid_9">700px (grid_9)</li>
				<li class="grid_3">220px (grid_3)</li>
			</ul>
			<ul>
				<li class="grid_10">780px (grid_10)</li>
				<li class="grid_2">140px (grid_2)</li>
			</ul>
			<ul>
				<li class="grid_11">860px (grid_11)</li>
				<li class="grid_1">60px</li>
			</ul>
			<ul>
				<li class="grid_12">940px (grid_12)</li>
			</ul>
			<ul>
				<li class="grid_1">60px</li>
				<li class="grid_11">860px (grid_11)</li>
			</ul>
			<ul>
				<li class="grid_2">140px (grid_2)</li>
				<li class="grid_10">780px (grid_10)</li>
			</ul>
			<ul>
				<li class="grid_3">220px (grid_3)</li>
				<li class="grid_9">700px (grid_9)</li>
			</ul>
			<ul>
				<li class="grid_4">300px (grid_4)</li>
				<li class="grid_8">620px (grid_8)</li>
			</ul>
			<ul>
				<li class="grid_5">380px (grid_5)</li>
				<li class="grid_7">540px (grid_7)</li>
			</ul>
			<ul>
				<li class="grid_1">60px</li>
				<li class="grid_1">grid_1</li>
				<li class="grid_1">60px</li>
				<li class="grid_1">grid_1</li>
				<li class="grid_1">60px</li>
				<li class="grid_1">grid_1</li>
				<li class="grid_1">60px</li>
				<li class="grid_1">grid_1</li>
				<li class="grid_1">60px</li>
				<li class="grid_1">grid_1</li>
				<li class="grid_1">60px</li>
				<li class="grid_1">grid_1</li>
			</ul>
			<ul>
				<li class="grid_4">300px (grid_4)</li>
				<li class="grid_4">300px (grid_4)</li>
				<li class="grid_4">300px (grid_4)</li>
			</ul>
			<ul>
				<li class="grid_6">460px (grid_6)</li>
				<li class="grid_6">460px (grid_6)</li>
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

~ SASS ~
.main_body {
  width: 960px
}

.site_nav {
  +grid_4
}

.main_content {
  +grid_8
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