<?php include 'shared/head.php'?>

		<header class="site_header">
			<h1>Test-driven design?</h1>
		</header>

		<section class="body_call_to_action">
			<ul>
				<li><h3>I like to write code, wanna see?</h3></li>
				<li><a href="http://github.com/blackfalcon/axle.less" class="button">Please download my code</a></li>
			</ul>
		</section>
		<?php include 'shared/body_navbar.php'?>
		<section class="page_content lower_content">
			<article class="main_article">
				<h5>Test-driven development as described by Wikipedia</h5>
				<blockquote>
					Test-driven development (TDD) is a software development process that relies on the repetition of a very short development cycle: first the developer writes a failing automated test case that defines a desired improvement or new function, then produces code to pass that test and finally refactors the new code to acceptable standards. Kent Beck, who is credited with having developed or 'rediscovered' the technique, stated in 2003 that TDD encourages simple designs and inspires confidence.[1]
				</blockquote>
				<p><cite>-- <a href="http://en.wikipedia.org/wiki/Test-driven_development">Wikipedia</a></cite></p>
				<p>To developers that are practicing Test-Driven Development (TDD) this makes perfect sense.  Understand what it is that you need to deliver, write an automated test to see if it passes or fails.  Simple enough, right?  Well, one of the issues that I have come across again and again is, how the hell do you test a design?  There are some great solutions out there and the prevailing one is recording a user's experience so that you can see all the screens.  While this is awesome, who actually ever sits down and reviews these videos post the fist acceptance?  I sure don't. </p>
				<p>But again, this isn't test driven, this is post work review.</p>
				<p>Lets examine those TDD principals again.  The ideas is to write a test for the repeated functional aspect.  Can we translate that to design?  What is a design test?  Looking at the finished work, right?  But we can't do that for every use of the design, so we need to abstract the design from the application.  </p>
				<h5>Axle.LESS, putting the 'object' in OOCSS since 2011</h5>
				<p>Taking a look what I have done with Axle, unintentionally I have come up with a solution to this problem.  A principal element of the Axle workflow is, when you are engineering a solution to a new design problem you do this in the UI Pattern Library BEFORE it is used in the application.  This is <strong>!important</strong></p>
				<p>In doing this, you are following the main principals of <a href="https://github.com/stubbornella/oocss/wiki">OOCSS</a> <em>Separate structure and skin</em> and <em>Separate container and content</em>.</p>
				<p>You are abstracting your design engineering from the actual application of that design work to the final project.  This gives you a couple of really awesome things.</p>
				<ul>
					<li>Naturally universal ui elements</li>
					<li>Instantly documented ui patterns</li>
					<li>Referable personalities for your ui elements</li>
					<li>A testing and QA environment</li>
				</ul>
				<h5>A testing and QA environment?</h5>
				<p>Yup, that is what I am putting out there for you all to test out.  When you build the object orientated ui elements in Axle, you should have a stable chunk of code that you can test in all browsers, right?  Win right there.  Then when you apply these UI elements to larger UI Widgets, you should not be writing any code that effects the UI of that element, right?  So then when you place that UI element and widget into a screen, again you should not be writing any new code for those elements or widgets, right?  </p>
				<p>So if any time you refer to Axle and the UI is busted, you can bet your ass that this UI element is busted in the application.</p>
			</article>
		</section>
		
		<?php include 'shared/content_footer.php'?>
		
<?php include 'shared/footer.php'?>