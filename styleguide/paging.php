<?php include 'shared/head.php'?>
	<?php include 'shared/banner.php'?>
	<header class="styleguide_header"><h1>| Axle | 'pagination'</h1></header>
	<?php include 'shared/nav.php'?>
	<article class="styleguide_body button_styleguide">

		<header>
			<p>1. Pagination buttons w/title</p>
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
			
			<p>There are a lot of little parts here to make this UI.  The &lt;ul&gt; block requires both the <code>.pagination</code> and <code>.linkBox</code> classes.  <code>.pagination</code> is the primary class that drives the UI.  <code>.linkBox</code> drives a JS feature that enables the entire &lt;li&gt; to be clickable, thus increasing the target area.</p>
			<p><code>.pagination</code> has the <code>-box-pack: end</code> attribute that moves all the pagination elements to the right.  In order to inset any content to the left, insert another &lt;li&gt; tag with the <code>.pagination_left</code> class.</p>
			<p>Only default spacing is surrounding this element.  Over-ride at the screen template level as needed.</p>
			<p>Example code:</p>
			
			<pre>
&lt;ul <span>class=&quot;pagination linkBox&quot;</span>&gt;
  &lt;li <span>class=&quot;pagination_left&quot;</span>&gt;
    &lt;h4&gt;This is a title&lt;/h4&gt;
  &lt;/li&gt;
  &lt;li&gt;Page&lt;/li&gt;
  &lt;li&gt;&lt;input type=&quot;text&quot; title=&quot;tool tip message&quot; <span>maxlength=&quot;3&quot;</span>/&gt;&lt;/li&gt;
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
			
			<p>Following the same pattern as above, simply remove the &lt;li class=&quot;pagination_left&quot;&gt; block and the CSS will address the rest.</p>
			<p>Example code:</p>
			
			<pre>
&lt;ul <span>class=&quot;pagination linkBox&quot;</span>&gt;
  &lt;li&gt;Page&lt;/li&gt;
  &lt;li&gt;&lt;input type=&quot;text&quot; title=&quot;tool tip message&quot;  <span>maxlength=&quot;3&quot;</span>/&gt;&lt;/li&gt;
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
	
	
	
	
	
	</article>
<?php include 'shared/footer.php'?>