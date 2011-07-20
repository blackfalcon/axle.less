<?php include '../shared/head.php'?>
	<?php include '../shared/banner.php'?>
	<header class="styleguide_header"><h1>| Axle | 'Widgets'</h1></header>
	<?php include '../shared/widget_nav.php'?>
	<section class="styleguide_body">
		<header>
			<p>1. Slide show viewer </p>
			<p>Info will go here</p>
		</header>
		<article class="col_12_grid inner_widget">
			<?php include '../../partials/_slide_show.php'?>
		</article>
		
		
		<article>
			<p></p>
			<p>HTML example:</p>
			<pre class="prettyprint">
&lt;div class=&quot;slide_show_container&quot; id=&quot;&quot;&gt;
  &lt;div class=&quot;slide_show_view&quot; id=&quot;&quot;&gt;There are no images assigned to this widget&lt;/div&gt;
  &lt;div class=&quot;slide_show_tools&quot; id=&quot;&quot;&gt;
    &lt;ul class=&quot;tool_box&quot;&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Share&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Caption&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;View all&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;ul class=&quot;mini_pagination&quot;&gt;
      &lt;li&gt;1 of 15&lt;/li&gt;
      &lt;li&gt;
        &lt;button&gt;&lt;span&gt;reverse&lt;/span&gt;&lt;/button&gt;
        &lt;button&gt;&lt;span&gt;adcance&lt;/span&gt;&lt;/button&gt;
      &lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
&lt;/div&gt;
			</pre>
		</article>

		
		<article>
			<p>Example LESS application:</p>
			<pre class="prettyprint">
.slide_show_container {
	.grid_12(8.98);
	.alpha;
	.omega;
	border: 1px solid @alpha_grey;
}

.slide_show_view {
	background: @echo_grey;
	.grid_12(8.86);			// take into account padding and borders
	.alpha;
	.omega;
	margin: 5px;
	height: 300px;
	color: @white;
	line-height: 300px;
	text-align: center;
}

.slide_show_tools {
	.grid_12(8.87);			// take into account padding and borders
	.alpha;
	.omega;
	margin: 0 5px;
	float: left;
	ul {
		float: left;
		margin: 0;
	}
}

.mini_pagination {
	font-weight: bold;
	line-height: 2.08333333em;
	width: auto;
	float: right !important;
	li {
		float: left;
		margin-right: 0.8333333em;
		&:last-child {
			margin: 0;
			line-height: 3em;
		}
	}
	.mini_buttons_paging;
}


.tool_box {
	line-height: 2.08333333em;
	li {
		float: left;
		margin-right: 0.8333333em;
	}
	a {
		color: @alpha_grey;
	}
}
			</pre>
		</article>
	</section>


<?php include '../shared/footer.php'?>