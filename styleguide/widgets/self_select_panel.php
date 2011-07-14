<?php include '../shared/head.php'?>
	<?php include '../shared/banner.php'?>
	<header class="styleguide_header"><h1>| Axle | 'Widgets'</h1></header>
	<?php include '../shared/widget_nav.php'?>
	<section class="styleguide_body">
		<header>
			<p>1. Self select navigation panel</p>
		</header>
		<article class="imageblock_grid">
			<ul class="featured_events">
				<li>
					<ul>
						<li class="image">image block</div></li>
						<li class="title"><h2>title block</h2></li>
						<li class="caption"><p>caption block</p></li>
					</ul>
				</li>
				<li>
					<ul>
						<li class="image">image block</div></li>
						<li class="title"><h2>title block</h2></li>
						<li class="caption"><p>caption block</p></li>
					</ul>
				</li>
				<li>
					<ul>
						<li class="image">image block</div></li>
						<li class="title"><h2>title block</h2></li>
						<li class="caption"><p>caption block</p></li>
					</ul>
				</li>
			</ul>
		</article>
		
		<article>
			<p></p>
			<p>HTML Example:</p>
			<pre class="prettyprint">
&lt;article&gt;
  &lt;ul class=&quot;featured_events&quot;&gt;
    &lt;li&gt;
      &lt;ul&gt;
        &lt;li class=&quot;image&quot;&gt;image block&lt;/div&gt;&lt;/li&gt;
        &lt;li class=&quot;title&quot;&gt;&lt;h2&gt;title block&lt;/h2&gt;&lt;/li&gt;
        &lt;li class=&quot;caption&quot;&gt;&lt;p&gt;caption block&lt;/p&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/li&gt;
    &lt;li&gt;
      &lt;ul&gt;
        &lt;li class=&quot;image&quot;&gt;image block&lt;/div&gt;&lt;/li&gt;
        &lt;li class=&quot;title&quot;&gt;&lt;h2&gt;title block&lt;/h2&gt;&lt;/li&gt;
        &lt;li class=&quot;caption&quot;&gt;&lt;p&gt;caption block&lt;/p&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/li&gt;
    &lt;li&gt;
      &lt;ul&gt;
        &lt;li class=&quot;image&quot;&gt;image block&lt;/div&gt;&lt;/li&gt;
        &lt;li class=&quot;title&quot;&gt;&lt;h2&gt;title block&lt;/h2&gt;&lt;/li&gt;
        &lt;li class=&quot;caption&quot;&gt;&lt;p&gt;caption block&lt;/p&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/li&gt;
  &lt;/ul&gt;
&lt;/article&gt;			
			</pre>
		</article>
		
		<article>
			<p>Example LESS mixin:</p>
			<pre class="prettyprint">
.image_block_caption {
	.grid_12(9);
	> li {
		.grid_12(3);
		&:first-child {
			.alpha;
		}
		&:last-child {
			.omega;
		}
	}
	.image, .title, .caption {
		.grid_12(3);
		.alpha;
		.omega;
		height: 130px;
	}
	
	.title {
		height: 30px;
		background: @alpha_grey;
		h2 {
			.medium;
			margin: 0;
			line-height: 30px;
			color: @white;
			padding: 0 0 0 10px;
		}
	}
	.caption {
		.two_stop_linear_gradient (@fox_grey, fadeout(@white, 100%));
		height: 100px;
		p {
			padding: 10px;
		}
	}
}

			</pre>
		</article>
		
		<article>
			<p>Example semantic LESS:</p>
			<pre class="prettyprint">
.featured_events {
	.image_block_caption;
}
			</pre>
		</article>
	</section>


<?php include '../shared/footer.php'?>