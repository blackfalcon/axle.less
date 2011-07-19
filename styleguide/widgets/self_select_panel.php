<?php include '../shared/head.php'?>
	<?php include '../shared/banner.php'?>
	<header class="styleguide_header"><h1>| Axle | 'Widgets'</h1></header>
	<?php include '../shared/widget_nav.php'?>
	<section class="styleguide_body">
		<header>
			<p>1. Self select navigation panel</p>
		</header>
		<article class="self_select_grid inner_widget">
			<?php include '../widgets/_self_select_panel.php'?>
		</article>
		
		<article>
			<p></p>
			<p>HTML Example:</p>
			<pre class="prettyprint">
&lt;article&gt;
  &lt;ul class=&quot;example_self_select_panel&quot;&gt;
    &lt;li class=&quot;header&quot;&gt;Select list item&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Select list item&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;selected&quot;&gt;
      &lt;a href=&quot;#&quot;&gt;Select list item&lt;/a&gt;
      &lt;div class=&quot;selected_content&quot;&gt;
        &lt;ul&gt;
          &lt;li class=&quot;carrot&quot;&gt;&lt;span&gt;&lt;/span&gt;&lt;/li&gt;
          &lt;li class=&quot;content&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&lt;/li&gt;
        &lt;/ul&gt;
      &lt;/div&gt;
    &lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Select list item&lt;/a&gt;&lt;/li&gt;  
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Select list item&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Select list item&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Select list item&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/article&gt;
			</pre>
		</article>
		
		<article>
			<p>Example LESS mixin:</p>
			<pre class="prettyprint">
.self_select_panel() {
	.extra_large;
	text-indent: 0.5555556em;
	font-weight: bold;
	li {
		line-height: 2em;
		border-bottom: 1px solid @golf_grey;
		&:hover {
			background: @hotel_grey;
		}
	}
	a {
		display: block;
		background: url(/public/images/self_select_panel.png) no-repeat 90% 50%;
		color: @alpha_grey;
		&:hover {
			text-decoration: none;
		}
	}
	.header {
		background: @alpha_grey;
		color: @white;
		&:hover {
			background: @alpha_grey;
		}
	}
	.selected {
		background: @hotel_grey;
		border-bottom-color: @charlie_grey;
		ul {
			margin-bottom: 0;
		}
	}
	.selected_content {
		color: @white;
		.macro;
		li {
			border: 0;
			&:hover {
				background: transparent;
			}
		}
	}
	.carrot {
		background: transparent;
		height: auto;
		position: absolute;
		margin: -.6666667em 0 0 1.833333em;
		span {
			border-color: transparent transparent @charlie_grey transparent;
			border-style: solid;
			border-width: 0 0.6666667em 0.6666667em 0.6666667em;
			display: block;
			height: auto;
			width: auto;
		}
	}
	.content {
		background: @charlie_grey;
		line-height: 1.5em !important;
		padding: .666667em .666667em 2em .666667em;
		text-indent: 0;
		font-weight: normal;
		&:hover {
			background: @charlie_grey !important;
		}
	}
}

			</pre>
		</article>
		
		<article>
			<p>Example semantic LESS:</p>
			<p><b>Note that the width <code>.grid_12(3);</code> of the widget is defined in the application of the widget, not in the widget itself.</b></p>
			<pre class="prettyprint">
.example_self_select_panel {
	.grid_12(3);
	.self_select_panel;
}
			</pre>
		</article>
	</section>


<?php include '../shared/footer.php'?>