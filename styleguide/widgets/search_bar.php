<?php include '../shared/head.php'?>
	<?php include '../shared/banner.php'?>
	<header class="styleguide_header"><h1>| Axle | 'Widgets'</h1></header>
	<?php include '../shared/widget_nav.php'?>
	<section class="styleguide_body">
		<header>
			<p>1. Standard site search bar</p>
		</header>
		
		<article class="imageblock_grid inner_widget">
			<div class="site_search_block">
				<form>
					<input type="text" />
					<button>search</button>
				</form>			
			</div>
		</article>
		



		<article>
			<p></p>
			<p>HTML Example:</p>
			<pre class="prettyprint">
&lt;div class=&quot;site_search_block&quot;&gt;
  &lt;form&gt;
    &lt;input type=&quot;text&quot; /&gt;
    &lt;button&gt;search&lt;/button&gt;
  &lt;/form&gt;			
&lt;/div&gt;
			</pre>
		</article>
		
		<article>
			<p>Example LESS mixin:</p>
			<pre class="prettyprint">
.site_standard_search() {
  .dual_primary_buttons_small;
  .grid_12(6);      // sets width of search widget within the screen
  input {
    .grid_12(4.85); // width accounts for padding and border
    .alpha;
  button {
    .push_12(.1);   // overrides standard button spacing
  }
}

			</pre>
		</article>
		
		<article>
			<p>Example semantic LESS:</p>
			<pre class="prettyprint">
.site_search_block {
  .site_standard_search;
}
			</pre>
		</article>
	</section>


<?php include '../shared/footer.php'?>