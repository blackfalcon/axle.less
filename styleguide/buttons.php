<?php include 'shared/head.php'?>	
	<?php include 'shared/banner.php'?>
	<header class="styleguide_header"><h1>| Axle | 'buttons'</h1></header>
	<?php include 'shared/nav.php'?>	
	<article class="styleguide_body button_styleguide">

		<div class="instructions">
			<p>Axle's buttons are based on the principal that the styles support the markup. The UIs presented here are styled simply for <code>button, input[type=submit], input[type=button], a.button</code>.  Follow the code samples below for instructions on using class placed on the parent block element to get special layout and sizing adjustments. </p>
		</div>

		<header>
			<p>1. Primary buttons</p>
		</header>
		<article>
			<div class="" id="">
				<button>Button text</button><button>Button text</button><button disabled="disabled">Button text</button>
			</div>
			<div class="" id="">
				<input type="submit" value="Button text"><input type="submit" value="Button text"><input type="submit" value="Button text" disabled="disabled">
			</div>
			<div class="" id="">
				<input type="button" value="Button text"><input type="button" value="Button text"><input type="button" value="Button text" disabled="disabled">
			</div>
			<div class="" id="">
				<a href="#" class="button">Button text</a><a href="#" class="button">Button text</a><a href="#" class="button" id="disabled">Button text</a>
			</div>
			<div class="" id="">
				<p>All buttons by default assume this style.  Apply the <code>disabled="disabled"</code> attribute to the buttons rendered useless to the user.</p>
				<p>Example code:</p>
				<pre class="prettyprint">
&lt;button&gt;Button text&lt;/button&gt;&lt;button&gt;Button text&lt;/button&gt;&lt;button disabled=&quot;disabled&quot;&gt;Button text&lt;/button&gt;

&lt;input type=&quot;submit&quot; value=&quot;Button text&quot;&gt;&lt;input type=&quot;submit&quot; value=&quot;Button text&quot;&gt;&lt;input type=&quot;submit&quot; value=&quot;Button text&quot; disabled=&quot;disabled&quot;&gt;

&lt;input type=&quot;button&quot; value=&quot;Button text&quot;&gt;&lt;input type=&quot;button&quot; value=&quot;Button text&quot;&gt;&lt;input type=&quot;button&quot; value=&quot;Button text&quot; disabled=&quot;disabled&quot;&gt;

&lt;a href=&quot;#&quot; class=&quot;button&quot;&gt;Button text&lt;/a&gt;&lt;a href=&quot;#&quot; class=&quot;button&quot;&gt;Button text&lt;/a&gt;&lt;a href=&quot;#&quot; class=&quot;button&quot;id=&quot;disabled&quot;&gt;Button text&lt;/a&gt;
				</pre>
			</div>
		</article>
		<footer></footer>


		<header>
			<p>1.1 Primary buttons w/cancel option link</p>
		</header>
		<article>
			<div class="cancel_buttons" id="">
				<button>Button text</button><button>Cancel</button><button disabled="disabled">Disabled cancel</button>
			</div>
			<div class="cancel_buttons" id="">
				<input type="submit" value="Button text"><input type="submit" value="Cancel"><input type="submit" value="Disabled cancel" disabled="disabled">
			</div>
			<div class="cancel_buttons" id="">
				<input type="button" value="Button text"><input type="button" value="Cancel"><input type="button" value="Disabled cancel" disabled="disabled">
			</div>
			<div class="cancel_buttons" id="">
				<a href="#" class="button">Button text</a><a href="#" class="button">Cancel</a><a href="#" class="button" id="disabled">Disabled cancel</a>
			</div>
			<div class="" id="">
				<p><p>Place the <code>.cancel_buttons</code> class on the parent block.</p>
				<p>Example code:</p>
				<pre class="prettyprint">
&lt;div class=&quot;cancel_buttons&quot; id=&quot;&quot;&gt;
  &lt;button&gt;Button text&lt;/button&gt;&lt;button&gt;Cancel&lt;/button&gt;&lt;button disabled=&quot;disabled&quot;&gt;Disabled cancel&lt;/button&gt;
&lt;/div&gt;
&lt;div class=&quot;cancel_buttons&quot; id=&quot;&quot;&gt;
  &lt;input type=&quot;submit&quot; value=&quot;Button text&quot;&gt;&lt;input type=&quot;submit&quot; value=&quot;Cancel&quot;&gt;&lt;input type=&quot;submit&quot; value=&quot;Disabled cancel&quot; disabled=&quot;disabled&quot;&gt;
&lt;/div&gt;
&lt;div class=&quot;cancel_buttons&quot; id=&quot;&quot;&gt;
  &lt;input type=&quot;button&quot; value=&quot;Button text&quot;&gt;&lt;input type=&quot;button&quot; value=&quot;Cancel&quot;&gt;&lt;input type=&quot;button&quot; value=&quot;Disabled cancel&quot; disabled=&quot;disabled&quot;&gt;
&lt;/div&gt;
&lt;div class=&quot;cancel_buttons&quot; id=&quot;&quot;&gt;
  &lt;a href=&quot;#&quot; class=&quot;button&quot;&gt;Button text&lt;/a&gt;&lt;a href=&quot;#&quot; class=&quot;button&quot;&gt;Cancel&lt;/a&gt;&lt;a href=&quot;#&quot; class=&quot;button&quot; id=&quot;disabled&quot;&gt;Disabled cancel&lt;/a&gt;
&lt;/div&gt;
				</pre>
			</div>
		</article>
		<footer></footer>

				<header>
			<p>1.2 All Primary buttons</p>
		</header>
		<article>
			<div class="primary_buttons" id="">
				<button>Button text</button><button>Button text</button><button disabled="disabled">Button text</button>
			</div>
			<div class="primary_buttons" id="">
				<input type="submit" value="Button text"><input type="submit" value="Button text"><input type="submit" value="Button text" disabled="disabled">
			</div>
			<div class="primary_buttons" id="">
				<input type="button" value="Button text"><input type="button" value="Button text"><input type="button" value="Button text" disabled="disabled">
			</div>
			<div class="primary_buttons" id="">
				<a href="#" class="button">Button text</a><a href="#" class="button">Button text</a><a href="#" class="button" id="disabled">Button text</a>
			</div>
			<div class="" id="">
				<p>To have all your buttons appear with the Primary style, use the class <code>.primary_buttons</code> in the parent block element.</p>
				<p>Example code:</p>
				<pre class="prettyprint">
&lt;div class=&quot;primary_buttons&quot; id=&quot;&quot;&gt;
  &lt;button&gt;Button text&lt;/button&gt;&lt;button&gt;Button text&lt;/button&gt;&lt;button disabled=&quot;disabled&quot;&gt;Button text&lt;/button&gt;
&lt;/div&gt;
&lt;div class=&quot;primary_buttons&quot; id=&quot;&quot;&gt;
  &lt;input type=&quot;submit&quot; value=&quot;Button text&quot;&gt;&lt;input type=&quot;submit&quot; value=&quot;Button text&quot;&gt;&lt;input type=&quot;submit&quot; value=&quot;Button text&quot; disabled=&quot;disabled&quot;&gt;
&lt;/div&gt;
&lt;div class=&quot;primary_buttons&quot; id=&quot;&quot;&gt;
  &lt;input type=&quot;button&quot; value=&quot;Button text&quot;&gt;&lt;input type=&quot;button&quot; value=&quot;Button text&quot;&gt;&lt;input type=&quot;button&quot; value=&quot;Button text&quot; disabled=&quot;disabled&quot;&gt;
&lt;/div&gt;
&lt;div class=&quot;primary_buttons&quot; id=&quot;&quot;&gt;
  &lt;a href=&quot;#&quot; class=&quot;button&quot;&gt;Button text&lt;/a&gt;&lt;a href=&quot;#&quot; class=&quot;button&quot;&gt;Button text&lt;/a&gt;&lt;a href=&quot;#&quot; class=&quot;button&quot; id=&quot;disabled&quot;&gt;Button text&lt;/a&gt;
&lt;/div&gt;
				</pre>
			</div>
		</article>
		<footer></footer>

		
		<header>
			<p>2. Secondary buttons</p>
		</header>
		<article>
			<div class="secondary_buttons" id="">
				<button>Button text</button><button>Button text</button><button disabled="disabled">Button text</button>
			</div>
			<div class="secondary_buttons" id="">
				<input type="submit" value="Button text"><input type="submit" value="Button text"><input type="submit" value="Button text" disabled="disabled">
			</div>
			<div class="secondary_buttons" id="">
				<input type="button" value="Button text"><input type="button" value="Button text"><input type="button" value="Button text" disabled="disabled">
			</div>
			<div class="secondary_buttons" id="">
				<a href="#" class="button">Button text</a><a href="#" class="button">Button text</a><a href="#" class="button" id="disabled">Button text</a>
			</div>
			<div class="secondary_buttons cancel_buttons" id="">
				<button>Button text</button><button>Cancel</button><button disabled="disabled">Disabled cancel</button>
			</div>
			<div class="" id="">
				<p>Place the <code>.secondary_buttons</code> class on the parent block</p>
				<p>Example code:</p>
				<pre class="prettyprint">
&lt;div class=&quot;secondary_buttons&quot;&gt;
	&lt;button&gt;Button text&lt;/button&gt;&lt;button&gt;Button text&lt;/button&gt;&lt;button disabled=&quot;disabled&quot;&gt;Button text&lt;/button&gt;
&lt;/div&gt;
&lt;div class=&quot;secondary_buttons&quot;&gt;
	&lt;input type=&quot;submit&quot; value=&quot;Button text&quot;&gt;&lt;input type=&quot;submit&quot; value=&quot;Button text&quot;&gt;&lt;input type=&quot;submit&quot; value=&quot;Button text&quot; disabled=&quot;disabled&quot;&gt;
&lt;/div&gt;
&lt;div class=&quot;secondary_buttons&quot;&gt;
	&lt;input type=&quot;button&quot; value=&quot;Button text&quot;&gt;&lt;input type=&quot;button&quot; value=&quot;Button text&quot;&gt;&lt;input type=&quot;button&quot; value=&quot;Button text&quot; disabled=&quot;disabled&quot;&gt;
&lt;/div&gt;
&lt;div class=&quot;secondary_buttons&quot;&gt;
	&lt;a href=&quot;#&quot; class=&quot;button&quot;&gt;Button text&lt;/a&gt;&lt;a href=&quot;#&quot; class=&quot;button&quot;&gt;Button text&lt;/a&gt;&lt;a href=&quot;#&quot; class=&quot;button&quot; id=&quot;disabled&quot;&gt;Button text&lt;/a&gt;
&lt;/div&gt;

// cancel option ~
&lt;div class=&quot;secondary_buttons cancel_buttons&quot; id=&quot;&quot;&gt;
  &lt;button&gt;Button text&lt;/button&gt;&lt;button&gt;Cancel&lt;/button&gt;&lt;button disabled=&quot;disabled&quot;&gt;Disabled cancel&lt;/button&gt;
&lt;/div&gt;
				</pre>
			</div>
		</article>
		<footer></footer>
		
		<header>
			<p>3. Small primary button</p>
		</header>
		<article>
			<div class="small_buttons" id="">
				<button>Button text</button><button>Button text</button><button disabled="disabled">Button text</button>
			</div>
			<div class="small_buttons cancel_buttons" id="">
				<button>Button text</button><button>Button text</button><button disabled="disabled">Button text</button>
			</div>
			<div class="" id="">
				<p>The small primary button will assume the default <buttom> style.  Apply the <code>.small_buttons</code> class to a parent block element to reduce the appearance.  </p>
				<p>Example code:</p>
				<pre class="prettyprint">
&lt;div class=&quot;small_buttons&quot;&gt;
	&lt;button&gt;Button text&lt;/button&gt;&lt;button&gt;Button text&lt;/button&gt;&lt;button disabled=&quot;disabled&quot;&gt;Button text&lt;/button&gt;
&lt;/div&gt;

// cancel option ~
&lt;div class=&quot;small_buttons cancel_buttons&quot; id=&quot;&quot;&gt;
  &lt;button&gt;Button text&lt;/button&gt;&lt;button&gt;Button text&lt;/button&gt;&lt;button disabled=&quot;disabled&quot;&gt;Button text&lt;/button&gt;
&lt;/div&gt;
				</pre>
			</div>
		</article>
		
		<header>
			<p>4. Small secondary button</p>
		</header>
		<article>
			<div class="secondary_buttons small_buttons" id="">
				<button>Button text</button><button>Button text</button><button disabled="disabled">Button text</button>
			</div>
			<div class="secondary_buttons small_buttons cancel_buttons" id="">
				<button>Button text</button><button>Button text</button><button disabled="disabled">Button text</button>
			</div>
			<div class="" id="">
				<p>The small secondary button requires two class modifications.<br>Apply the <code>.secondary_buttons</code> and <code>.small_button</code> classes to a parent block element for this UI.</p>
				<p>Example code:</p>
				<pre class="prettyprint">
&lt;div class=&quot;secondary_buttons small_buttons&quot;&gt;
	&lt;button&gt;Button text&lt;/button&gt;&lt;button&gt;Button text&lt;/button&gt;&lt;button disabled=&quot;disabled&quot;&gt;Button text&lt;/button&gt;
&lt;/div&gt;

// cancel option ~
&lt;div class=&quot;secondary_buttons small_buttons cancel_buttons&quot; id=&quot;&quot;&gt;
  &lt;button&gt;Button text&lt;/button&gt;&lt;button&gt;Button text&lt;/button&gt;&lt;button disabled=&quot;disabled&quot;&gt;Button text&lt;/button&gt;
&lt;/div&gt;
				</pre>
			</div>
		</article>
		<footer></footer>
		
		<header>
			<p>5. Combination usage</p>
		</header>
		<article>
			<div class="" id="">
				<button>Button text</button><button>Button text</button><button>Button text</button><button disabled="disabled">Button text</button>
			</div>
			<div class="cancel_buttons" id="">
				<button>Button text</button><button>Button text</button><button>Button text</button><button disabled="disabled">Button text</button>
			</div>
			
			<div class="" id="">
				<p>To produce a series of buttons, simply concatenate a series of &lt;button&gt; tags.  The <code>disabled="disabled"</code> attribute is required to apply the disabled UI. </p>
				<p>Example code:</p>
				<p>
					<pre class="prettyprint">
&lt;button&gt;Button text&lt;/button&gt;&lt;button&gt;Button text&lt;/button&gt;&lt;button&gt;Button text&lt;/button&gt;&lt;button disabled=&quot;disabled&quot;&gt;Button text&lt;/button&gt;

// cancel option ~
&lt;div class=&quot;cancel_buttons&quot; id=&quot;&quot;&gt;
  &lt;button&gt;Button text&lt;/button&gt;&lt;button&gt;Button text&lt;/button&gt;&lt;button&gt;Button text&lt;/button&gt;&lt;button disabled=&quot;disabled&quot;&gt;Button text&lt;/button&gt;
&lt;/div&gt;
					</pre>
				</p>
			</div>
			
			<header>
				<p>5.1 Dual primary button </p>
			</header>
			<div class="dual_primary_buttons" id="">
				<button>Button text</button><button>Button text</button><button>Button text</button><button disabled="disabled">Button text</button>
			</div>
			<div class="dual_primary_cancel_buttons" id="">
				<button>Button text</button><button>Button text</button><button>Button text</button><button disabled="disabled">Button text</button>
			</div>
			
			<div class="" id="">
				<p>To produce the first (2) buttons carry over the primary UI style, simply concatenate a series of &lt;button&gt; tags.  IMPORTANT! you will need to place a <code>.dual_primary_buttons</code> class in the directly preceding parent.  The <code>disabled="disabled"</code> attribute is required to apply the disabled UI. </p>
				<p>For the 'cancel' option, use the class <code>.dual_primary_cancel_buttons</code> on the parent block.</p>
				<p>Example code:</p>
				<p>
					<pre class="prettyprint">
&lt;div class=&quot;dual_primary_buttons&quot;&gt;
	&lt;button&gt;Button text&lt;/button&gt;&lt;button&gt;Button text&lt;/button&gt;&lt;button&gt;Button text&lt;/button&gt;&lt;button disabled=&quot;disabled&quot;&gt;Button text&lt;/button&gt;
&lt;/div&gt;

// cancel option ~
&lt;div class=&quot;dual_primary_cancel_buttons&quot; id=&quot;&quot;&gt;
  &lt;button&gt;Button text&lt;/button&gt;&lt;button&gt;Button text&lt;/button&gt;&lt;button&gt;Button text&lt;/button&gt;&lt;button disabled=&quot;disabled&quot;&gt;Button text&lt;/button&gt;
&lt;/div&gt;
					</pre>
				</p>
			</div>
			
			<header>
				<p>5.2 Reverse primary/secondary button </p>
			</header>
			<div class="reverse_primary_buttons" id="">
				<button>Button text</button><button>Button text</button><button>Button text</button><button disabled="disabled">Button text</button>
			</div>
			<p>To produce an alternate series of buttons whereas the first (1) button is the secondary UI and the remaining buttons use the primary UI style, simply concatenate a series of &lt;button&gt; tags.  IMPORTANT! you will need to place a <code>.reverse_primary_buttons</code> class in the directly preceding parent.  The <code>disabled="disabled"</code> attribute is required to apply the disabled UI. </p>
			<p>Example code:</p>
				<p>
					<pre class="prettyprint">
&lt;div class=&quot;reverse_primary_buttons&quot;&gt;
	&lt;button&gt;Button text&lt;/button&gt;&lt;button&gt;Button text&lt;/button&gt;&lt;button&gt;Button text&lt;/button&gt;&lt;button disabled=&quot;disabled&quot;&gt;Button text&lt;/button&gt;
&lt;/div&gt;

or

&lt;div&gt;
  &lt;p class=&quot;reverse_primary_button&quot;&gt;
    &lt;button&gt;Button text&lt;/button&gt;&lt;button&gt;Button text&lt;/button&gt;&lt;button&gt;Button text&lt;/button&gt;&lt;button disabled=&quot;disabled&quot;&gt;Button text&lt;/button&gt;
  &lt;/p&gt;
&lt;/div&gt;
					</pre>
				</p>
			
			
			
			
			
			
			<header>
				<p>5.3 Combination usage small buttons</p>
			</header>
			<div class="small_buttons" id="">
				<button>Button text</button><button>Button text</button><button>Button text</button><button disabled="disabled">Button text</button>
			</div>
			
			<div class="" id="">
				<p>To produce a series of buttons, simply concatenate a series of &lt;button&gt; tags.  The <code>disabled="disabled"</code> attribute is required to apply the disabled UI. For the smaller buttons, place the <code>.small_buttons</code> class on a parent container.</p>
				<p>Example code:</p>
				<pre class="prettyprint">
&lt;div class=&quot;small_buttons&quot;&gt;
	&lt;button&gt;Button text&lt;/button&gt;&lt;button&gt;Button text&lt;/button&gt;&lt;button&gt;Button text&lt;/button&gt;&lt;button disabled=&quot;disabled&quot;&gt;Button text&lt;/button&gt;
&lt;/div&gt;
				</pre>
			</div>
			<header>
				<p>5.4 Dual primary small buttons</p>
			</header>
			<div class="dual_primary_buttons_small" id="">
				<button>Button text</button><button>Button text</button><button>Button text</button><button disabled="disabled">Button text</button>
			</div>
			
			<div class="" id="">
				<p>To produce an alternate series of buttons whereas the first (2) buttons carry over the primary UI style, simply concatenate a series of &lt;button&gt; tags.  IMPORTANT! you will need to place a <code>.dual_primary_buttons_small</code> class in the directly preceding parent.  The <code>disabled="disabled"</code> attribute is required to apply the disabled UI. </p>
				<p>Example code:</p>
					<pre class="prettyprint">
&lt;div class=&quot;dual_primary_buttons_small&quot;&gt;
	&lt;button&gt;Button text&lt;/button&gt;&lt;button&gt;Button text&lt;/button&gt;&lt;button&gt;Button text&lt;/button&gt;&lt;button disabled=&quot;disabled&quot;&gt;Button text&lt;/button&gt;
&lt;/div&gt;

or

&lt;div&gt;
  &lt;p class=&quot;dual_primary_buttons_small&quot;&gt;
    &lt;button&gt;Button text&lt;/button&gt;&lt;button&gt;Button text&lt;/button&gt;&lt;button&gt;Button text&lt;/button&gt;&lt;button disabled=&quot;disabled&quot;&gt;Button text&lt;/button&gt;
  &lt;/p&gt;
&lt;/div&gt;
					</pre>
			</div>
			<header>
				<p>5.5 Reverse primary small buttons</p>
			</header>
			<div class="reverse_primary_buttons_small" id="">
				<button>Button text</button><button>Button text</button><button>Button text</button><button disabled="disabled">Button text</button>
			</div>
			
			<div class="" id="">
				<p>To produce an alternate series of buttons whereas the first (2) buttons carry over the primary UI style, simply concatenate a series of &lt;button&gt; tags.  IMPORTANT! you will need to place a <code>.dual_primary_buttons_small</code> class in the directly preceding parent.  The <code>disabled="disabled"</code> attribute is required to apply the disabled UI. </p>
				<p>Example code:</p>
					<pre class="prettyprint">
&lt;div class=&quot;reverse_primary_buttons_small&quot;&gt;
	&lt;button&gt;Button text&lt;/button&gt;&lt;button&gt;Button text&lt;/button&gt;&lt;button&gt;Button text&lt;/button&gt;&lt;button disabled=&quot;disabled&quot;&gt;Button text&lt;/button&gt;
&lt;/div&gt;

or

&lt;div&gt;
  &lt;p class=&quot;reverse_primary_buttons_small&quot;&gt;
    &lt;button&gt;Button text&lt;/button&gt;&lt;button&gt;Button text&lt;/button&gt;&lt;button&gt;Button text&lt;/button&gt;&lt;button disabled=&quot;disabled&quot;&gt;Button text&lt;/button&gt;
  &lt;/p&gt;
&lt;/div&gt;
					</pre>
			</div>
		</article>
		<footer></footer>
		
		<header>
			<p>6. Interaction | large</p>
			<article>
				<p>Post click user interaction.  Example, user clicked the Primary button.</p>
			</article>
		</header>
		<article>
			<div class="" id="">
				<button class="active">Button text</button><button>Button text</button><button disabled="disabled">Button text</button>
			</div>
			<div class="" id="">
				<input type="submit" value="Button text" class="active"><input type="submit" value="Button text" class=""><input type="submit" value="Button text" disabled="disabled">
			</div>
			<div class="" id="">
				<a href="#" class="button active">Button text</a><a href="#" class="button">Button text</a><a href="#" class="button" id="disabled">Button text</a>
			</div>
			<div class="" id="">
				<p>Clicking a button will dynamically add the <code>.active</code> class to the &lt;button&gt; tag.</p>
				<p>Example code:</p>
				<pre class="prettyprint">
&lt;button class=&quot;active&quot;&gt;Button text&lt;/button&gt;&lt;button&gt;Button text&lt;/button&gt;&lt;button disabled=&quot;disabled&quot;&gt;Button text&lt;/button&gt;

&lt;input type=&quot;submit&quot; value=&quot;Button text&quot; class=&quot;active&quot;&gt;&lt;input type=&quot;submit&quot; value=&quot;Button text&quot; class=&quot;&quot;&gt;&lt;input type=&quot;submit&quot; value=&quot;Button text&quot; disabled=&quot;disabled&quot;&gt;

&lt;a href=&quot;#&quot; class=&quot;button active&quot;&gt;Button text&lt;/a&gt;&lt;a href=&quot;#&quot; class=&quot;button&quot;&gt;Button text&lt;/a&gt;&lt;a href=&quot;#&quot; spanclass=&quot;button&quot; id=&quot;disabled&quot;&gt;Button text&lt;/a&gt;
				</pre>
			</div>
		</article>
		<footer></footer>
		
		<header>
			<p>7. Interaction | small</p>
		</header>
		<article>
			<div class="small_buttons" id="">
				<button class="active">Button text</button><button>Button text</button><button disabled="disabled">Button text</button>
			</div>
			<div class="small_buttons" id="">
				<input type="submit" value="Button text" class="active"><input type="submit" value="Button text" class=""><input type="submit" value="Button text" disabled="disabled">
			</div>
			<div class="small_buttons" id="">
				<a href="#" class="button active">Button text</a><a href="#" class="button">Button text</a><a href="#" class="button" id="disabled">Button text</a>
			</div>
			<div class="" id="">
				<p>Follow the same convention as '4. Small primary button' by placing <code>.small_buttons</code> class to the parent block element as well as '6. Interaction' by dynamically placing the <code>.active</code> class on the clicked button.</p>
			</div>
			<p>Example code:</p>
			<pre class="prettyprint">
&lt;div class=&quot;small_buttons&quot;&gt;
  &lt;button class=&quot;active&quot;&gt;Button text&lt;/button&gt;&lt;button&gt;Button text&lt;/button&gt;&lt;button disabled=&quot;disabled&quot;&gt;Button text&lt;/button&gt;
&lt;/div&gt;
			</pre>
		</article>
		<footer></footer>
		
		<header>
			<p>7. Mini buttons</p>
			<p>In the example below, the class <code>.pill_buttons</code> are build using the mixin of <code>.mini_buttons</code></p>
		</header>
		<article>
			<div class="pill_buttons" id="">
				<button>X</button><button>X</button><button>X</button>
			</div>
		</article>
		
		<article>
			<p>Example HTML:</p>
			<pre class="prettyprint">
&lt;div class=&quot;pill_buttons&quot;&gt;
  &lt;button&gt;X&lt;/button&gt;&lt;button&gt;X&lt;/button&gt;&lt;button&gt;X&lt;/button&gt;
&lt;/div&gt;
			</pre>
		</article>
		
		<article>
			<p>Example LESS:</p>
			<pre class="prettyprint">
.pill_buttons {		// semantic named class
  .mini_buttons;	// LESS mixin use
}
			</pre>
		</article>
		
		<header>
			<p>7.1 Pill button paging</p>
		</header>
		<article>
			<div class="pill_buttons_nav" id="">
				<button><span>reverse</span></button><button><span>advance</span></button>
			</div>
		</article>
		
		<article>
			<p>Example HTML:</p>
			<pre class="prettyprint">
&lt;div class=&quot;pill_buttons_nav&quot; id=&quot;&quot;&gt;
  &lt;button&gt;&lt;span&gt;reverse&lt;/span&gt;&lt;/button&gt;&lt;button&gt;&lt;span&gt;advance&lt;/span&gt;&lt;/button&gt;
&lt;/div&gt;
			</pre>
		</article>
		
		<article>
			<p>Example LESS:</p>
			<pre class="prettyprint">
.pill_buttons_nav {
  .mini_buttons_paging;
}
			</pre>
		</article>
	</article>
<?php include 'shared/footer.php'?>





















