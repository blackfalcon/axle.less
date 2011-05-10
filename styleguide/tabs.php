<?php include 'shared/head.php'?>
	<?php include 'shared/banner.php'?>
	<header class="styleguide_header"><h1>| Axle | 'tabs'</h1></header>
	<?php include 'shared/nav.php'?>
	<article class="styleguide_body button_styleguide">
		<header>
			<p>1. General purpose header tabs</p>
		</header>
		<article class="">
			<div class="" id="" style="background-color: red; padding: 10px; width: 98%; float: left; margin-bottom: 10px;">
				<ul class="tabbed_ui">
					<li><a href="#">tabbed link</a></li>
					<li class="selected_tab"><a href="/" onclick="return false">tabbed link</a></li>
				</ul>
			</div>
			<div class="" id="" style="margin-top: 10px;">
				<p>Tab UI as applied to the &lt;li&gt;&lt;/li&gt; tags.  Apply <em>.tabbed_ui</em> class to parent &lt;ul&gt;.</p>
				<p>The <em>.selected_tab</em> class will need to be dynamically applied to the active tab &lt;li&gt;.  Javascript onclick="return false" will need to be applied to the cooresponding &lt;a&gt; tag to render the link useless.  </p>
				<p>Exmaple code:</p>
				<pre>
&lt;ul <span>class=&quot;tabbed_ui&quot;</span>&gt;
	&lt;li&gt;&lt;a href=&quot;#&quot;&gt;tabbed link&lt;/a&gt;&lt;/li&gt;
	&lt;li <span>class=&quot;selected_tab&quot;</span>&gt;&lt;a href=&quot;/&quot; <span>onclick=&quot;return false&quot;</span>&gt;tabbed link&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
				</pre>
			</div>
		</article>
		
		<header>
			<p>1.2 Small tabs</p>
		</header>
		<article class="">
			<div class="" id="" style="background-color: red; padding: 10px; width: 98%; float: left; margin-bottom: 10px;">
				<ul class="tabbed_ui small_tab">
					<li><a href="#">tabbed link</a></li>
					<li class="selected_tab"><a href="/" onclick="return false">tabbed link</a></li>
				</ul>
			</div>
			<div class="" id="" style="margin-top: 10px;">
				<p>Tab UI as applied to the &lt;li&gt;&lt;/li&gt; tags.  Apply <em>.tabbed_ui</em> and <em>.small_tab</em> classes to parent &lt;ul&gt;.</p>
				<p>The <em>.selected_tab</em> class will need to be dynamically applied to the active tab &lt;li&gt;.  Javascript onclick="return false" will need to be applied to the cooresponding &lt;a&gt; tag to render the link useless.  </p>
				<p>Exmaple code:</p>
				<pre>
&lt;ul <span>class=&quot;tabbed_ui small_tab&quot;</span>&gt;
  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;tabbed link&lt;/a&gt;&lt;/li&gt;
  &lt;li <span>class=&quot;selected_tab&quot;</span>&gt;&lt;a href=&quot;/&quot; onclick=&quot;return false&quot;&gt;tabbed link&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
				</pre>
			</div>
		</article>


	</article>
<?php include 'shared/footer.php'?>