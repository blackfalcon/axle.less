<?php include '../shared/head.php'?>
	<?php include '../shared/banner.php'?>
	<header class="styleguide_header"><h1>| Axle | 'Widgets'</h1></header>
	<?php include '../shared/widget_nav.php'?>
	<section class="styleguide_body">
		<header>
			<p>1. Narrative element </p>
			<p>The Narrative element is a 12 col of a 16 col grid layout.  Consists of two blocks of 6.</p>
			<p>For semantic use, apply the <code>.narrative_element</code> mixin within the semantic class for the block element.</p>
		</header>
		<article class="col_16_grid inner_widget">
			<ul class="global_assignment">
				<?php include '../../partials/_narrative_element_left.php'?>
			</ul>
		</article>
		
		
		<article>
			<p></p>
			<p>HTML example:</p>
			<pre class="prettyprint">
&lt;article&gt;
  &lt;ul class=&quot;global_assignment&quot;&gt;
    &lt;li class=&quot;media&quot;&gt;image content&lt;/li&gt;
    &lt;li class=&quot;text&quot;&gt;
      &lt;h4&gt;Narrative title&lt;/h4&gt;
      &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc volutpat mauris non lectus fringilla ut sollicitudin magna dignissim. Duis lobortis mauris augue.&lt;/p&gt;
      &lt;ul&gt;
        &lt;li&gt;&lt;b&gt;Lorem ipsum dolor sit amet&lt;/b&gt; consectetur adipiscing.&lt;/li&gt;
        &lt;li&gt;&lt;b&gt;Lorem ipsum dolor sit amet&lt;/b&gt; consectetur adipiscing.&lt;/li&gt;
        &lt;li&gt;&lt;b&gt;Lorem ipsum dolor sit amet&lt;/b&gt; consectetur adipiscing.&lt;/li&gt;
      &lt;/ul&gt;
      &lt;p&gt;Nunc &lt;a href=&quot;#&quot;&gt;volutpat mauris&lt;/a&gt; non &lt;a href=&quot;#&quot;&gt;lectus fringilla&lt;/a&gt; ut sollicitudin magna dignissim. Duis lobortis mauris augue.&lt;/p&gt;
    &lt;/li&gt;
  &lt;/ul&gt;
&lt;/article&gt;
			</pre>
		</article>
		
		<article>
			<p>LESS mixin example:</p>
			<pre class="prettyprint">
.narrative_element() {
	.grid_16(12);
	> li {
		.grid_16(6);
		&:first-child {
			.alpha;
		}
		&:last-child {
			.omega;
		}
	}
	.media {
		.grid_16(6);
		height: 250px;
	}
	.text {
		.bulleted_list;
	}
}
			</pre>
		</article>
		
		<article>
			<p>Example semantic LESS application:</p>
			<pre class="prettyprint">
.global_assignment {
	.narrative_element;
}
			</pre>
		</article>
		
		<header>
			<p>1.1 Narrative element </p>
			<p>To use a reverse UI version of the narrative element, simply swap the order of the <code>.text</code> and <code>.media</code> HTML blocks as shown below.</p>
		</header>
		<article class="col_16_grid inner_widget">
			<ul class="global_assignment">
				<?php include '../../partials/_narrative_element_right.php'?>
			</ul>
		</article>
		
				<article>
			<p></p>
			<p>HTML example:</p>
			<pre class="prettyprint">
&lt;article&gt;
  &lt;ul class=&quot;global_assignment&quot;&gt;
    &lt;li class=&quot;text&quot;&gt;
      &lt;h4&gt;Narrative title&lt;/h4&gt;
      &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc volutpat mauris non lectus fringilla ut sollicitudin magna dignissim. Duis lobortis mauris augue.&lt;/p&gt;
      &lt;ul&gt;
        &lt;li&gt;&lt;b&gt;Lorem ipsum dolor sit amet&lt;/b&gt; consectetur adipiscing.&lt;/li&gt;
        &lt;li&gt;&lt;b&gt;Lorem ipsum dolor sit amet&lt;/b&gt; consectetur adipiscing.&lt;/li&gt;
        &lt;li&gt;&lt;b&gt;Lorem ipsum dolor sit amet&lt;/b&gt; consectetur adipiscing.&lt;/li&gt;
      &lt;/ul&gt;
      &lt;p&gt;Nunc &lt;a href=&quot;#&quot;&gt;volutpat mauris&lt;/a&gt; non &lt;a href=&quot;#&quot;&gt;lectus fringilla&lt;/a&gt; ut sollicitudin magna dignissim. Duis lobortis mauris augue.&lt;/p&gt;
    &lt;/li&gt;
    &lt;li class=&quot;media&quot;&gt;image content&lt;/li&gt;
  &lt;/ul&gt;
&lt;/article&gt;
			</pre>
		</article>

	</section>


<?php include '../shared/footer.php'?>