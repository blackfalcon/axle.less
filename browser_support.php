<?php include 'shared/head.php'?>

		<header class="site_header">
			<h1>Wanna talk browser support?</h1>
		</header>

		<section class="body_call_to_action">
			<ul>
				<li><h3>Wanna live on the edge?  Do ya?</h3></li>
				<li><a href="http://github.com/blackfalcon/axle.less" class="button">Works great in real browsers</a></li>
			</ul>
		</section>
		<?php include 'shared/body_navbar.php'?>
		<section class="page_content lower_content">
			<aside class="twitter_feed">
				<?php include 'shared/twitter.php'?>
			</aside>
			<article class="main_article">
				<h5>Complete browser harmony, the one true holy grail</h5>
				<img src="/public/images/browserSupport.png" alt="you want browser support? you can't handel browser support!" title="browser_support" />
				<p>In developing our projects we have clearly competing goals. We want to engineer our code with the future in mind, but on the other hand, we need to support legacy browsers.  Truly the dark side of design/development. </p>
				<p>Modern browsers have given us a plethora of tools to use that are exciting and capable of amazing things.  But ... not all browsers are supporting this new treasure trove of awesome.  I am speaking to you Internet Explorer.  So, as designers, developers and engineers what do we do?</p>
				<p>Before I go into the tools and strategies that I use for browser support, I also want to go on record to say that I an a firm believer that you see the internet with the browser you use. Simply put, if you choose to use IE6, I feel that you should see the world the way that IE6 intended.  If you do not like the way that it looks, it is my job to inject more code to alter that experience or is it your responsibility to move to an experience that you feel is better?</p>
				<p>Me personally, I agree with the latter.  As designers and UI engineers our job is to stay current with new and merging technologies.  Not to burden the development process with the almost unachievable goal of total browser equality.  If there is a physical reason whereas the user cannot complete the task, that is one issue.  If the experience isn't 100% the same in IE6 as it is in Chrome, that is easily correctible, upgrade.  If you buy a <a href="http://www.time.com/time/specials/2007/article/0,28804,1658545_1658533_1658529,00.html">Yugo</a> and demand the experience of a <a href="http://www.porsche.com/">porsche</a>, can you ask a mechanic to install the porsche awesome?  Didn't think so.</p>
				<p>When we as developers go to heroic measures to address the short comings of antiquated browsers, we are only enabling the ongoing use of these ancient browsers. So, help your users.  Encourage them to upgrade.</p>
				<h5>Axle's browser support solutions</h5>
				<p>Aside from all that, there are real world issues that we need to address and these are solvable problems due to some really awesome people out there.  There is a wonderful open source community out there, show them some love, will ya?</p>
				
				<a href="http://www.modernizr.com/"><img src="/public/images/modernizer.png" alt="" title="modernizer logo" /></a>
				<p><b><a href="http://www.modernizr.com/">Modernizr</a></b> is a great tool that I am just recently coming to grips with.  This tool takes everything we thought was a good idea for cross browser CSS support and throws it out the window.</p>
				<p>The idea being, don't write code specifically for the browser, but address the feature.  After all, browsers will come and go, it is the adoption or total objection of a feature by that browser that you are coding for.  This is mind blowing and hard to get a grip on at first, but it is totally worth it.</p>
				<p>Example use case.  The navigation for Axle is using <a href="http://html5.dalesande.com/are.php">flex-box</a>.  This is a super awesome tool and I encourage everybody to use it.  But ... isn't supported in all browsers.  What do you do?</p>
				<p>With modernizer installed, it will place a class attribute in your <code>&lt;html&gt;</code> tag of ether <code>flexbox</code> or <code>no-flexbox</code>.</p>
				<p>I prefer to code in the mindset that the feature I am developing for exists, then engineer the fallback solution. So for the nav, I used <code>flex-box</code> then hooking off the existing tags in the DOM, I engineered this fallback.</p>
				<pre class="prettyprint">
// ---------------------------------------
.no-flexbox {
  .site_navigation, .body_navbar, .body_call_to_action {
    li {
      float: left;
    }
  }
  .site_navigation {
    a {
      padding: 0 2.5em;
    }
  }
  .body_navbar {
    a {
    padding: 0 1em;
    }
  }

  .body_call_to_action {
    ul {
      width: 90%;
      margin: 0 auto;
    }
    li {
      padding: 0 1em;
      a {
        margin-left: 2em;
      }
    }
  }
}
				</pre>
				<p>Notice that there are no references to IE or Opera's lack of supporting this feature. So, when this feature is then supported by a browser, these instructions are now rendered obsolete.</p>
				
				<a href="http://selectivizr.com/"><img src="/public/images/selectivizr - CSS3 selectors for Internet Explorer.png" alt="" title="modernizer logo" /></a>
				<p><b><a href="http://selectivizr.com/">Selectivizr</a></b></p>
				<blockquote>selectivizr is a JavaScript utility that emulates CSS3 pseudo-classes and attribute selectors in Internet Explorer 6-8. Simply include the script in your pages and selectivizr will do the rest.</blockquote>
				<p>This is a huge find for me.  If you have been looking at Axle's code you will see that I am heavily leaning on nth:child to mange the automated selection of UI.  Initially I was going to engineer a jQuery solution, but this is way more awesome!</p>
				<p>selectivizr goes way past nth:child. It supports a large array of pseudo-classes where modernizer does not. </p>
				
				<h3>One more thing ...</h3>
				<p><a href="http://rafael.adm.br/css_browser_selector/">CSS Browser Selector</a>.  While not an exciting name, it is an awesome tool and I am very happy to support it.</p>
				<p>While modernizer is totally awesome and I 100% support this concept, there will be times when you need to target the browser specifically.  html5 boilerplate supports this with the following code from <a href="http://paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/">Paul</a>:</p>
				<pre class="prettyprint">
&lt;!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ --&gt;
&lt;!--[if lt IE 7]&gt; &lt;html class=&quot;no-js ie6&quot; lang=&quot;en&quot;&gt; &lt;![endif]--&gt;
&lt;!--[if IE 7]&gt;    &lt;html class=&quot;no-js ie7&quot; lang=&quot;en&quot;&gt; &lt;![endif]--&gt;
&lt;!--[if IE 8]&gt;    &lt;html class=&quot;no-js ie8&quot; lang=&quot;en&quot;&gt; &lt;![endif]--&gt;
&lt;!--[if gt IE 8]&gt;&lt;!--&gt;  &lt;html class=&quot;no-js&quot; lang=&quot;en&quot;&gt; &lt;!--&lt;![endif]--&gt;				
				</pre>
				<p>I never found this to be all that awesome. I never want to write conditional comments or any IE hack for that matter ever again.  So, enter <a href="http://rafael.adm.br/css_browser_selector/">CSS Browser Selector</a>.  This very simple script works in the same way that modernizer does. It will place selectors in the <code>&lt;html&gt;</code> tag. Like the following:</p>
				<pre class="prettyprint">
&lt;html class=&quot; webkit chrome mac js&quot;&gt;
				</pre>
				<p>From here, you can hook off of a selector much like you would using modernizer. This is a last resort option.  Use sparingly as most of the time when a UI isn't working as expected, there is a better way.  The more 'browser' specific work you need to do, the harder your app is to maintain.  </p>
				
				<h3>In conclusion ...</h3>
				<p>It is with these three tools that I intend to make Axle as browser compatible as possible without having to wield the Hammer of Thor. Are we there yet?  In a word ... no.  But we will, we will.</p>
			</article>
		</section>
		
		<?php include 'shared/content_footer.php'?>
		
<?php include 'shared/footer.php'?>