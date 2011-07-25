<?php include '../shared/head.php'?>
	<?php include '../shared/banner.php'?>
	<header class="styleguide_header"><h1>| Axle | 'pagination'</h1></header>
	<?php include '../shared/widget_nav.php'?>
	<article class="styleguide_body button_styleguide">

		<header>
			<p>1. Pagination buttons w/title</p>
			<p>There are a lot of little parts here to make this UI.  The &lt;ul&gt; block requires both the <code>.pagination</code> and <code>.linkBox</code> classes.  <code>.pagination</code> is the primary class that drives the UI.  <code>.linkBox</code> drives a JS feature that enables the entire &lt;li&gt; to be clickable, thus increasing the target area.</p>
			<p><code>.pagination</code> has the <code>-box-pack: end</code> attribute that moves all the pagination elements to the right.  In order to inset any content to the left, insert another &lt;li&gt; tag with the <code>.pagination_left</code> class.</p>
			<p>Only default spacing is surrounding this element.  Over-ride at the screen template level as needed.</p>
		</header>
		<article>
			<ul class="pagination linkBox">
				<li class="pagination_left">
					<h4>This is a title</h4>
				</li>
				<li>Page</li>
				<li><input type="text" title="tool tip message" maxlength="3" /></li>
				<li>of XX</li>
				<li>
					<ul>
						<li>
							<a href="javascript:void(0)" title="Back"></a>	
						</li>
						<li>
							<a href="javascript:void(0)" title="Next"></a>
						</li>
					</ul>
				</li>
			</ul>
			
			
			<p>Example code:</p>
			
			<pre class="prettyprint">
&lt;ul class=&quot;pagination linkBox&quot;</span>&gt;
  &lt;li class=&quot;pagination_left&quot;</span>&gt;
    &lt;h4&gt;This is a title&lt;/h4&gt;
  &lt;/li&gt;
  &lt;li&gt;Page&lt;/li&gt;
  &lt;li&gt;&lt;input type=&quot;text&quot; title=&quot;tool tip message&quot; maxlength=&quot;3&quot;</span>/&gt;&lt;/li&gt;
  &lt;li&gt;of XX&lt;/li&gt;
  &lt;li&gt;
    &lt;ul&gt;
      &lt;li&gt;
        &lt;a href=&quot;#&quot; title=&quot;Back&quot;&gt;&lt;/a&gt;	
      &lt;/li&gt;
      &lt;li&gt;
        &lt;a href=&quot;#&quot; title=&quot;Next&quot;&gt;&lt;/a&gt;
      &lt;/li&gt;
    &lt;/ul&gt;
  &lt;/li&gt;
&lt;/ul&gt;			
			</pre>
			
		</article>
		
		
		
		<header>
			<p>1.1 Pagination buttons</p>
			<p>Following the same pattern as above, simply remove the &lt;li class=&quot;pagination_left&quot;&gt; block and the CSS will address the rest.</p>
		</header>
		<article>
			<ul class="pagination linkBox">
				<li>Page</li>
				<li><input type="text" title="tool tip message" maxlength="3" /></li>
				<li>of XX</li>
				<li>
					<ul>
						<li>
							<a href="javascript:void(0)" title="Back" class="closeButton"></a>	
						</li>
						<li>
							<a href="javascript:void(0)" title="Next" class="closeButton"></a>
						</li>
					</ul>
				</li>
			</ul>
			
			
			<p>Example code:</p>
			
			<pre class="prettyprint">
&lt;ul class=&quot;pagination linkBox&quot;</span>&gt;
  &lt;li&gt;Page&lt;/li&gt;
  &lt;li&gt;&lt;input type=&quot;text&quot; title=&quot;tool tip message&quot;  maxlength=&quot;3&quot;</span>/&gt;&lt;/li&gt;
  &lt;li&gt;of XX&lt;/li&gt;
  &lt;li&gt;
    &lt;ul&gt;
      &lt;li&gt;
        &lt;a href=&quot;#&quot; title=&quot;Back&quot;&gt;&lt;/a&gt;	
      &lt;/li&gt;
      &lt;li&gt;
        &lt;a href=&quot;#&quot; title=&quot;Next&quot;&gt;&lt;/a&gt;
      &lt;/li&gt;
    &lt;/ul&gt;
  &lt;/li&gt;
&lt;/ul&gt;			
			</pre>
		</article>
		
		<header>2 Mini pagination</header>
		<article>
			<ul class="mini_pagination">
				<li>1 of 15</li>
				<li>
					<button><span>reverse</span></button>
					<button><span>adcance</span></button>
				</li>
			</ul>
			
			
		</article>
		
		<article>
			<p>Example HTML:</p>
			<pre class="prettyprint">
&lt;ul class=&quot;mini_pagination&quot;&gt;
  &lt;li&gt;1 of 15&lt;/li&gt;
  &lt;li&gt;
    &lt;button&gt;&lt;span&gt;&lt;/span&gt;&lt;/button&gt;
    &lt;button&gt;&lt;span&gt;&lt;/span&gt;&lt;/button&gt;
  &lt;/li&gt;
&lt;/ul&gt;
			</pre>
		</article>
		
		<article>
			<p>Example LESS mixin:</p>
			<pre class="prettyprint">
.mini_buttons () {
	.anti_button;
	button {
		.two_stop_linear_gradient (lighten(@hotel_grey, 10%), @hotel_grey);
		.border_radius (.25em);
		border: 1px solid @golf_grey;
		width: 1.3888888em;
		height: 1.3888888em;
		color: transparent;
		.text_shadow (transparent, 0 0 0);
		display: inline-block;
		span {
			background: url(/public/images/arrow_icon.png) no-repeat 50% 50%;
			display: block;
			width: 0.555556em;
			height: 0.555556em;
			margin: 0 auto;
			.transform (rotate(180deg));
		}
		&:hover {
			.box_shadow (@white, 0 0 0);
			.two_stop_linear_gradient (@hotel_grey, lighten(@hotel_grey, 10%));
		}
		+ button {
			span {
				.transform (rotate(0deg));
			}
		}
	}
}
			</pre>
		</article>
		
		<article>
			<p>Example semantic LESS using mixin:</p>
			<pre class="prettyprint">
.mini_pagination {
	font-weight: bold;
	line-height: 2.08333333em;
	li {
		float: left;
		margin-right: 0.8333333em;
	}
	.mini_buttons;
}
			</pre>
		</article>
	
	
	
	
	
	</article>
<?php include '../shared/footer.php'?>