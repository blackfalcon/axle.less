<?php include 'shared/head.php'?>
	<?php include 'shared/banner.php'?>
	<header class="styleguide_header"><h1>| Axle | 'form elements'</h1></header>
	<article class="styleguide_body form_styleguide">
		<?php include 'shared/nav.php'?>		
		<header>
			<p>1. input type="text"</p>
		</header>
		<div class="master_container" id="">
			<fieldset class="styleguide_form_frame editor-container" style="">
				<label for="text_field">This is a label<span>(optional)</span></label>
				<input type="text" class="" name="" id="text_field" value="" placeholder="placeholder text" />
				<p class="instructional">This is instructional text</p>
				<p class="alert" style="display:none;">This is alert text</p>
			</fieldset>
			
			<div class="right_content" id="">
				<p>Exmaple code:</p>
				<pre>
&lt;label for=&quot;text_field&quot;&gt;This is a label&lt;span&gt;(optional)&lt;/span&gt;&lt;/label&gt;
&lt;input type=&quot;text&quot; class=&quot;&quot; name=&quot;&quot; id=&quot;text_field&quot; value=&quot;&quot; /&gt;
&lt;p <span>class=&quot;instructional&quot;</span>&gt;This is instructional text&lt;/p&gt;
&lt;p <span>class=&quot;alert&quot;</span> <span>style=&quot;display:none;&quot;</span>&gt;This is alert text&lt;/p&gt;	
				</pre>
			</div>
		</div>
		
		<header>
			<p>1.1 input type="text" w/error</p>
		</header>
		<div class="master_container" id="">
			<fieldset class="styleguide_form_frame editor-container" style="">
				<label for="text_field">This is a label<span>(optional)</span></label>
				<input type="text" class="fail" name="" id="text_field" value="" />
				<p class="instructional">This is instructional text</p>
				<p class="alert" style="display:block;">This is alert text</p>
				<p class="alert" style="display:block;">This is alert text</p>
				<p class="alert" style="display:block;">This is alert text</p>
			</fieldset>
			
			<div class="right_content" id="">
				<p>Add <code>.fail</code> class to &lt;input&gt; tag.</p>
				<p>Exmaple code:</p>
				<pre>
&lt;label for=&quot;text_field&quot;&gt;This is a label&lt;span&gt;(optional)&lt;/span&gt;&lt;/label&gt;
&lt;input type=&quot;text&quot; <span>class=&quot;fail&quot;</span> name=&quot;&quot; id=&quot;text_field&quot; value=&quot;&quot; /&gt;
&lt;p <span>class=&quot;instructional&quot;</span>&gt;This is instructional text&lt;/p&gt;
&lt;p <span>class=&quot;alert&quot;</span> <span>style=&quot;display:block;&quot;</span>&gt;This is alert text&lt;/p&gt;	
				</pre>
			</div>
		</div>
		
		<header>
			<p>1.2 input type="text" disabled field</p>
		</header>
		<div class="master_container" id="">
			<fieldset class="styleguide_form_frame editor-container" style="">
				<label for="text_field">This is a label<span>(optional)</span></label>
				<input type="text" class="" name="" id="text_field" value="" disabled="disabled" />
				<p class="instructional">This is instructional text</p>
				<p class="alert" style="display:none;">This is alert text</p>
			</fieldset>
			
			<div class="right_content" id="">
				<p>Append the <code>disabled</code> attribute to the &lt;input&gt; tag.</p>
				<p>Exmaple code:</p>
				<pre>
&lt;label for=&quot;text_field&quot;&gt;This is a label&lt;span&gt;(optional)&lt;/span&gt;&lt;/label&gt;
&lt;input type=&quot;text&quot; class=&quot;&quot; name=&quot;&quot; id=&quot;text_field&quot; value=&quot;&quot; <span>disabled=&quot;disabled&quot;</span> /&gt;
&lt;p <span>class=&quot;instructional&quot;</span>&gt;This is instructional text&lt;/p&gt;
&lt;p <span>class=&quot;alert&quot;</span> <span>style=&quot;display:none;&quot;</span>&gt;This is alert text&lt;/p&gt;	
				</pre>
			</div>
		</div>




		<header>
			<p>2. input type="file"</p>
		</header>
		<div class="master_container" id="">	
			<fieldset class="styleguide_form_frame editor-container" style="">
				<label for="file">This is a label<span>(optional)</span></label>
				<input type="file" class="" name="file" id="file_field" value="" />
				<p class="instructional">This is instructional text</p>
				<p class="alert" style="display:none;">This is alert text</p>
			</fieldset>
			<div class="right_content" id="">
				<p>Exmaple code:</p>
				<pre>
&lt;label for=&quot;file&quot;&gt;This is a label&lt;span&gt;(optional)&lt;/span&gt;&lt;/label&gt;
&lt;input type=&quot;file&quot; class=&quot;&quot; name=&quot;&quot; id=&quot;file&quot; value=&quot;&quot; /&gt;
&lt;p <span>class=&quot;instructional&quot;</span>&gt;This is instructional text&lt;/p&gt;
&lt;p <span>class=&quot;alert&quot;</span> <span>style=&quot;display:none;&quot;</span>&gt;This is alert text&lt;/p&gt;	
				</pre>
			</div>
		</div>
		
		<header>
			<p>2.1 input type="file" w/error</p>
		</header>
		<div class="master_container" id="">	
			<fieldset class="styleguide_form_frame editor-container" style="">
				<label for="file">This is a label<span>(optional)</span></label>
				<input type="file" class="fail" name="file" id="file_field" value="" />
				<p class="instructional">This is instructional text</p>
				<p class="alert" style="display:block;">This is alert text</p>
				<p class="alert" style="display:block;">This is alert text</p>
				<p class="alert" style="display:block;">This is alert text</p>
			</fieldset>
			<div class="right_content" id="">
				<p>Add <code>.fail</code> class to &lt;input&gt; tag.</p>
				<p>Exmaple code:</p>
				<pre>
&lt;label for=&quot;file&quot;&gt;This is a label&lt;span&gt;(optional)&lt;/span&gt;&lt;/label&gt;
&lt;input type=&quot;file&quot; <span>class=&quot;fail&quot;</span> name=&quot;&quot; id=&quot;file&quot; value=&quot;&quot; /&gt;
&lt;p <span>class=&quot;instructional&quot;</span>&gt;This is instructional text&lt;/p&gt;
&lt;p <span>class=&quot;alert&quot;</span> <span>style=&quot;display:block;&quot;</span>&gt;This is alert text&lt;/p&gt;	
				</pre>
			</div>
		</div>
		
		<header>
			<p>2.2 input type="file" disabled field</p>
		</header>
		<div class="master_container" id="">	
			<fieldset class="styleguide_form_frame editor-container" style="">
				<label for="file">This is a label<span>(optional)</span></label>
				<input type="file" class="" name="file" id="file_field" value="" disabled="disabled" />
				<p class="instructional">This is instructional text</p>
				<p class="alert" style="display:none;">This is alert text</p>
			</fieldset>
			<div class="right_content" id="">
				<p>Exmaple code:</p>
				<pre>
&lt;label for=&quot;file&quot;&gt;This is a label&lt;span&gt;(optional)&lt;/span&gt;&lt;/label&gt;
&lt;input type=&quot;file&quot; class=&quot;&quot; name=&quot;&quot; id=&quot;file&quot; value=&quot;&quot; disabled=&quot;disabled&quot; /&gt;
&lt;p <span>class=&quot;instructional&quot;</span>&gt;This is instructional text&lt;/p&gt;
&lt;p <span>class=&quot;alert&quot;</span> <span>style=&quot;display:none;&quot;</span>&gt;This is alert text&lt;/p&gt;	
				</pre>
			</div>
		</div>




		<header>
			<p>3. select</p>
		</header>
		<div class="master_container" id="">
			<fieldset class="styleguide_form_frame editor-container" style="">
				<label for="select_list">This is a label<span>(optional)</span></label>
				<span class="custom-select">
					<select id="select_list">
						<option value="">text</option>
						<option value="">text</option>
						<option value="">text</option>
						<option value="">text</option>
					</select>
				</span>
				<p class="instructional">This is instructional text</p>
				<p class="alert" style="display:none;">This is alert text</p>
			</fieldset>
			<div class="right_content" id="">
				<p>Exmaple code:</p>
				<pre>
&lt;label for=&quot;select_list&quot;&gt;This is a label&lt;span&gt;(optional)&lt;/span&gt;&lt;/label&gt;
&lt;span <span>class=&quot;custom-select&quot;</span>&gt;
  &lt;select id=&quot;select_list&quot;&gt;
    &lt;option value=&quot;&quot;&gt;text&lt;/option&gt;
    &lt;option value=&quot;&quot;&gt;text&lt;/option&gt;
    &lt;option value=&quot;&quot;&gt;text&lt;/option&gt;
    &lt;option value=&quot;&quot;&gt;text&lt;/option&gt;
  &lt;/select&gt;
&lt;/span&gt;
&lt;p <span>class=&quot;instructional&quot;</span>&gt;This is instructional text&lt;/p&gt;
&lt;p <span>class=&quot;alert&quot;</span> <span>style=&quot;display:none;&quot;</span>&gt;This is alert text&lt;/p&gt;	
				</pre>
			</div>
		</div>
		
		<header>
			<p>3.1 select w/error</p>
		</header>
		<div class="master_container" id="">
			<fieldset class="styleguide_form_frame editor-container" style="">
				<label for="select_list_error">This is a label<span>(optional)</span></label>
				<span class="custom-select fail">
					<select id="select_list_error">
						<option value="">text</option>
						<option value="">text</option>
						<option value="">text</option>
						<option value="">text</option>
					</select>
				</span>
				<p class="instructional">This is instructional text</p>
				<p class="alert" style="display:block;">This is alert text</p>
				<p class="alert" style="display:block;">This is alert text</p>
				<p class="alert" style="display:block;">This is alert text</p>
			</fieldset>
			<div class="right_content" id="">
				<p>Add <code>.fail</code> class to &lt;span&gt; tag.</p>
				<p>Exmaple code:</p>
				<pre>
&lt;label for=&quot;select_list_error&quot;&gt;This is a label&lt;span&gt;(optional)&lt;/span&gt;&lt;/label&gt;
&lt;span <span>class=&quot;custom-select fail&quot;</span>&gt;
  &lt;select id=&quot;select_list_error&quot;&gt;
    &lt;option value=&quot;&quot;&gt;text&lt;/option&gt;
    &lt;option value=&quot;&quot;&gt;text&lt;/option&gt;
    &lt;option value=&quot;&quot;&gt;text&lt;/option&gt;
    &lt;option value=&quot;&quot;&gt;text&lt;/option&gt;
  &lt;/select&gt;
&lt;/span&gt;
&lt;p <span>class=&quot;instructional&quot;</span>&gt;This is instructional text&lt;/p&gt;
&lt;p <span>class=&quot;alert&quot;</span> <span>style=&quot;display:block;&quot;</span>&gt;This is alert text&lt;/p&gt;	
				</pre>
			</div>
		</div>
		
		<header>
			<p>3.2 select w/disabled field</p>
		</header>
		<div class="master_container" id="">
			<fieldset class="styleguide_form_frame editor-container" style="">
				<label for="select_list_disabled">This is a label<span>(optional)</span></label>
				<span class="custom-select disabled">
					<select id="select_list_disabled" disabled="disabled">
						<option value="">text</option>
						<option value="">text</option>
						<option value="">text</option>
						<option value="">text</option>
					</select>
				</span>
				<p class="instructional">This is instructional text</p>
				<p class="alert" style="display:none;">This is alert text</p>
			</fieldset>
			<div class="right_content" id="">
				<p>Add attribute <code>disabled="disabled"</code> to &lt;select&gt; tag and the class <code>.disabled</code> to the parent &lt;span&gt; tag.</p>
				<p>Exmaple code:</p>
				<pre>
&lt;label for=&quot;select_list_disabled&quot;&gt;This is a label&lt;span&gt;(optional)&lt;/span&gt;&lt;/label&gt;
&lt;span <span>class=&quot;custom-select disabled&quot;</span>&gt;
  &lt;select id=&quot;select_list_disabled&quot; <span>disabled=&quot;disabled&quot;</span>&gt;
    &lt;option value=&quot;&quot;&gt;text&lt;/option&gt;
    &lt;option value=&quot;&quot;&gt;text&lt;/option&gt;
    &lt;option value=&quot;&quot;&gt;text&lt;/option&gt;
    &lt;option value=&quot;&quot;&gt;text&lt;/option&gt;
  &lt;/select&gt;
&lt;/span&gt;
&lt;p <span>class=&quot;instructional&quot;</span>&gt;This is instructional text&lt;/p&gt;
&lt;p <span>class=&quot;alert&quot;</span> <span>style=&quot;display:none;&quot;</span>&gt;This is alert text&lt;/p&gt;	
				</pre>
			</div>
		</div>







		<header>
			<p>4. input type="radio" &amp; input type="checkbox" | horizontal</p>
		</header>
		<div class="master_container" id="">	
			<fieldset class="styleguide_form_frame editor-container " style="">	
				<label for="option_one">This is a label<span>(optional)</span></label>
				<ul class="horizontal_selectors">
					<li>
						<input type="radio" name="option" id="option_one" value=""/>
						<label for="option_one">option one</label>
					</li>
					<li>
						<input type="radio" name="option" id="option_two" value=""/>
						<label for="option_two">option one</label>
					</li>
				</ul>
				<p class="instructional">This is instructional text</p>
				<p class="alert" style="display:none;">This is alert text</p>
				
				<label for="option_one_checkbox">This is a label<span>(optional)</span></label>
				<ul class="horizontal_selectors">
					<li>
						<input type="checkbox" name="option" id="option_one_checkbox" value=""/>
						<label for="option_one_checkbox">option one</label>
					</li>
					<li>
						<input type="checkbox" name="option" id="option_two_checkbox" value=""/>
						<label for="option_two_checkbox">option two</label>
					</li>
				</ul>
				<p class="instructional">This is instructional text</p>
				<p class="alert" style="display:none;">This is alert text</p>
			</fieldset>
			
			
			<div class="right_content" id="">
				<p>Add <code>.horizontal_selectors</code> to the parent &lt;ul&gt; tag</p>
				<p>Exmaple code: horizontal selectors</p>
				<pre>
&lt;label for=&quot;option_one&quot;&gt;This is a label&lt;span&gt;(optional)&lt;/span&gt;&lt;/label&gt;
&lt;ul <span>class=&quot;horizontal_selectors&quot;</span>&gt;
  &lt;li&gt;
    &lt;input type=&quot;radio&quot; name=&quot;option&quot; id=&quot;option_one&quot; value=&quot;&quot;/&gt;
    &lt;label for=&quot;option_one&quot;&gt;option one&lt;/label&gt;
  &lt;/li&gt;
  &lt;li&gt;
    &lt;input type=&quot;radio&quot; name=&quot;option&quot; id=&quot;option_two&quot; value=&quot;&quot;/&gt;
    &lt;label for=&quot;option_two&quot;&gt;option one&lt;/label&gt;
  &lt;/li&gt;
&lt;/ul&gt;
&lt;p <span>class=&quot;instructional&quot;</span>&gt;This is instructional text&lt;/p&gt;
&lt;p <span>class=&quot;alert&quot;</span> <span>style=&quot;display:none;&quot;</span>&gt;This is alert text&lt;/p&gt;	

&lt;label for=&quot;option_one_checkbox&quot;&gt;This is a label&lt;span&gt;(optional)&lt;/span&gt;&lt;/label&gt;
&lt;ul <span>class=&quot;horizontal_selectors&quot;</span>&gt;
  &lt;li&gt;
    &lt;input type=&quot;checkbox&quot; name=&quot;option&quot; id=&quot;option_one_checkbox&quot; value=&quot;&quot;/&gt;
    &lt;label for=&quot;option_one_checkbox&quot;&gt;option one&lt;/label&gt;
  &lt;/li&gt;
  &lt;li&gt;
    &lt;input type=&quot;checkbox&quot; name=&quot;option&quot; id=&quot;option_two_checkbox&quot; value=&quot;&quot;/&gt;
    &lt;label for=&quot;option_two_checkbox&quot;&gt;option two&lt;/label&gt;
  &lt;/li&gt;
&lt;/ul&gt;
&lt;p <span>class=&quot;instructional&quot;</span>&gt;This is instructional text&lt;/p&gt;
&lt;p <span>class=&quot;alert&quot;</span> <span>style=&quot;display:none;&quot;</span>&gt;This is alert text&lt;/p&gt;	
				</pre>
			</div>
		</div>
		
		<header>
			<p>4.1 input type="radio" &amp; input type="checkbox" | horizontal w/error</p>
		</header>
		<div class="master_container" id="">	
			<fieldset class="styleguide_form_frame editor-container" style="">	
				<label for="option_one_error">This is a label<span>(optional)</span></label>
				<ul class="horizontal_selectors">
					<li class="fail">
						<input type="radio" name="option" id="option_one_error" value=""/>
						<label for="option_one_error">option one</label>
					</li>
					<li class="fail">
						<input type="radio" name="option" id="option_two_error" value=""/>
						<label for="option_two_error">option two</label>
					</li>
				</ul>
				<p class="instructional">This is instructional text</p>
				<p class="alert" style="display:block;">This is alert text</p>
				<p class="alert" style="display:block;">This is alert text</p>
				<p class="alert" style="display:block;">This is alert text</p>
				
				<label for="option_one_checkbox_error">This is a label<span>(optional)</span></label>
				<ul class="horizontal_selectors">
					<li class="fail">
						<input type="checkbox" name="option" id="option_one_checkbox_error" value=""/>
						<label for="option_one_checkbox_error">option one</label>
					</li>
					<li class="fail">
						<input type="checkbox" name="option" id="option_two_checkbox_error" value=""/>
						<label for="option_two_checkbox_error">option two</label>
					</li>
				</ul>
				<p class="instructional">This is instructional text</p>
				<p class="alert" style="display:block;">This is alert text</p>
				<p class="alert" style="display:block;">This is alert text</p>
				<p class="alert" style="display:block;">This is alert text</p>
			</fieldset>
			<div class="right_content" id="">
				<p>Add <code>.fail</code> class to parent &lt;li&gt; tag.</p>
				<p>Exmaple code: horizontal selectors</p>
				<pre>
&lt;label for=&quot;option_one&quot;&gt;This is a label&lt;span&gt;(optional)&lt;/span&gt;&lt;/label&gt;
&lt;ul <span>class=&quot;horizontal_selectors&quot;</span>&gt;
  &lt;<span>li class=&quot;fail&quot;</span>&gt;
    &lt;input type=&quot;radio&quot; name=&quot;option&quot; id=&quot;option_one&quot; value=&quot;&quot;/&gt;
    &lt;label for=&quot;option_one&quot;&gt;option one&lt;/label&gt;
  &lt;/li&gt;
  &lt;<span>li class=&quot;fail&quot;</span>&gt;
    &lt;input type=&quot;radio&quot; name=&quot;option&quot; id=&quot;option_two&quot; value=&quot;&quot;/&gt;
    &lt;label for=&quot;option_two&quot;&gt;option one&lt;/label&gt;
  &lt;/li&gt;
&lt;/ul&gt;
&lt;p <span>class=&quot;instructional&quot;</span>&gt;This is instructional text&lt;/p&gt;
&lt;p <span>class=&quot;alert&quot;</span> <span>style=&quot;display:block;&quot;</span>&gt;This is alert text&lt;/p&gt;	

&lt;label for=&quot;option_one_checkbox&quot;&gt;This is a label&lt;span&gt;(optional)&lt;/span&gt;&lt;/label&gt;
&lt;ul <span>class=&quot;horizontal_selectors&quot;</span>&gt;
  &lt;<span>li class=&quot;fail&quot;</span>&gt;
    &lt;input type=&quot;checkbox&quot; name=&quot;option&quot; id=&quot;option_one_checkbox&quot; value=&quot;&quot;/&gt;
    &lt;label for=&quot;option_one_checkbox&quot;&gt;option one&lt;/label&gt;
  &lt;/li&gt;
  &lt;<span>li class=&quot;fail&quot;</span>&gt;
    &lt;input type=&quot;checkbox&quot; name=&quot;option&quot; id=&quot;option_two_checkbox&quot; value=&quot;&quot;/&gt;
    &lt;label for=&quot;option_two_checkbox&quot;&gt;option two&lt;/label&gt;
  &lt;/li&gt;
&lt;/ul&gt;
&lt;p <span>class=&quot;instructional&quot;</span>&gt;This is instructional text&lt;/p&gt;
&lt;p <span>class=&quot;alert&quot;</span> <span>style=&quot;display:block;&quot;</span>&gt;This is alert text&lt;/p&gt;	

				</pre>
			</div>
		</div>
		
		<header>
			<p>4.2 input type="radio" &amp; input type="checkbox" | horizontal w/disabled field</p>
		</header>
		<div class="master_container" id="">	
			<fieldset class="styleguide_form_frame editor-container" style="">	
				<label for="option_one">This is a label<span>(optional)</span></label>
				<ul class="horizontal_selectors">
					<li>
						<input type="radio" name="option" id="option_one" value="" disabled="disabled"/>
						<label for="option_one">option one</label>
					</li>
					<li>
						<input type="radio" name="option" id="option_two" value="" disabled="disabled"/>
						<label for="option_two">option two</label>
					</li>
				</ul>
				<p class="instructional">This is instructional text</p>
				<p class="alert" style="display:none;">This is alert text</p>
				
				<label for="option_one_checkbox">This is a label<span>(optional)</span></label>
				<ul class="horizontal_selectors">
					<li>
						<input type="checkbox" name="option" id="option_one_checkbox" value="" disabled="disabled"/>
						<label for="option_one_checkbox">option one</label>
					</li>
					<li>
						<input type="checkbox" name="option" id="option_two_checkbox" value="" disabled="disabled"/>
						<label for="option_two_checkbox">option two</label>
					</li>
				</ul>
				<p class="instructional">This is instructional text</p>
				<p class="alert" style="display:none;">This is alert text</p>
			</fieldset>
			<div class="right_content" id="">
				<p>Insert attribute <code>disabled="disabled"</code> to the disabled &lt;input&gt; tag</p>
				<p>Exmaple code: horizontal selectors</p>
				<pre>
&lt;label for=&quot;option_one&quot;&gt;This is a label&lt;span&gt;(optional)&lt;/span&gt;&lt;/label&gt;
&lt;ul <span>class=&quot;horizontal_selectors&quot;</span>&gt;
  &lt;li&gt;
    &lt;input type=&quot;radio&quot; name=&quot;option&quot; id=&quot;option_one&quot; value=&quot;&quot; <span>disabled=&quot;disabled&quot;</span>/&gt;
    &lt;label for=&quot;option_one&quot;&gt;option one&lt;/label&gt;
  &lt;/li&gt;
  &lt;li&gt;
    &lt;input type=&quot;radio&quot; name=&quot;option&quot; id=&quot;option_two&quot; value=&quot;&quot;<span>disabled=&quot;disabled&quot;</span>/&gt;
    &lt;label for=&quot;option_two&quot;&gt;option one&lt;/label&gt;
  &lt;/li&gt;
&lt;/ul&gt;
&lt;p <span>class=&quot;instructional&quot;</span>&gt;This is instructional text&lt;/p&gt;
&lt;p <span>class=&quot;alert&quot;</span> <span>style=&quot;display:none;&quot;</span>&gt;This is alert text&lt;/p&gt;	

&lt;label for=&quot;option_one_checkbox&quot;&gt;This is a label&lt;span&gt;(optional)&lt;/span&gt;&lt;/label&gt;
&lt;ul <span>class=&quot;horizontal_selectors&quot;</span>&gt;
  &lt;li&gt;
    &lt;input type=&quot;checkbox&quot; name=&quot;option&quot; id=&quot;option_one_checkbox&quot; value=&quot;&quot;<span>disabled=&quot;disabled&quot;</span>/&gt;
    &lt;label for=&quot;option_one_checkbox&quot;&gt;option one&lt;/label&gt;
  &lt;/li&gt;
  &lt;li&gt;
    &lt;input type=&quot;checkbox&quot; name=&quot;option&quot; id=&quot;option_two_checkbox&quot; value=&quot;&quot;<span>disabled=&quot;disabled&quot;</span>/&gt;
    &lt;label for=&quot;option_two_checkbox&quot;&gt;option two&lt;/label&gt;
  &lt;/li&gt;
&lt;/ul&gt;
&lt;p <span>class=&quot;instructional&quot;</span>&gt;This is instructional text&lt;/p&gt;
&lt;p <span>class=&quot;alert&quot;</span> <span>style=&quot;display:none;&quot;</span>&gt;This is alert text&lt;/p&gt;	
				</pre>
			</div>
		</div>










		<header>
			<p>5. input type="radio" &amp; input type="checkbox" | vertical</p>
		</header>
		<div class="master_container" id="">	
			<fieldset class="styleguide_form_frame editor-container" style="">	
				<label for="option_three">This is a label<span>(optional)</span></label>
				<ul class="vertical_selectors">
					<li>
						<input type="radio" name="option_vert" id="option_three" value=""/>
						<label for="option_three">option one</label>
					</li>
					<li>
						<input type="radio" name="option_vert" id="option_four" value=""/>
						<label for="option_four">option two</label>
					</li>
				</ul>
				<p class="instructional">This is instructional text</p>
				<p class="alert" style="display:none;">This is alert text</p>
				
				<label for="option_three_checkbox">This is a label<span>(optional)</span></label>
				<ul class="vertical_selectors">
					<li>
						<input type="checkbox" name="option_vert" id="option_three_checkbox" value=""/>
						<label for="option_three_checkbox">option one</label>
					</li>
					<li>
						<input type="checkbox" name="option_vert" id="option_four_checkbox" value=""/>
						<label for="option_four_checkbox">option two</label>
					</li>
				</ul>
				<p class="instructional">This is instructional text</p>
				<p class="alert" style="display:none;">This is alert text</p>
			</fieldset>
			<div class="right_content" id="">
				<p>Add <code>.vertical_selectors</code> to the parent &lt;ul&gt; tag</p>
				<p>Exmaple code: horizontal selectors</p>
				<pre>
&lt;label for=&quot;option_three&quot;&gt;This is a label&lt;span&gt;(optional)&lt;/span&gt;&lt;/label&gt;
&lt;ul <span>class=&quot;vertical_selectors&quot;</span>&gt;
  &lt;li&gt;
    &lt;input type=&quot;radio&quot; name=&quot;option_vert&quot; id=&quot;option_three&quot; value=&quot;&quot;/&gt;
    &lt;label for=&quot;option_three&quot;&gt;option one&lt;/label&gt;
  &lt;/li&gt;
  &lt;li&gt;
    &lt;input type=&quot;radio&quot; name=&quot;option_vert&quot; id=&quot;option_four&quot; value=&quot;&quot;/&gt;
    &lt;label for=&quot;option_four&quot;&gt;option two&lt;/label&gt;
  &lt;/li&gt;
&lt;/ul&gt;
&lt;p <span>class=&quot;instructional&quot;</span>&gt;This is instructional text&lt;/p&gt;
&lt;p <span>class=&quot;alert&quot;</span> style=&quot;display:none;&quot;&gt;This is alert text&lt;/p&gt;

&lt;label for=&quot;option_three_checkbox&quot;&gt;This is a label&lt;span&gt;(optional)&lt;/span&gt;&lt;/label&gt;
&lt;ul <span>class=&quot;vertical_selectors&quot;</span>&gt;
  &lt;li&gt;
    &lt;input type=&quot;checkbox&quot; name=&quot;option_vert&quot; id=&quot;option_three_checkbox&quot; value=&quot;&quot;/&gt;
    &lt;label for=&quot;option_three_checkbox&quot;&gt;option one&lt;/label&gt;
  &lt;/li&gt;
  &lt;li&gt;
    &lt;input type=&quot;checkbox&quot; name=&quot;option_vert&quot; id=&quot;option_four_checkbox&quot; value=&quot;&quot;/&gt;
    &lt;label for=&quot;option_four_checkbox&quot;&gt;option two&lt;/label&gt;
  &lt;/li&gt;
&lt;/ul&gt;
&lt;p <span>class=&quot;instructional&quot;</span>&gt;This is instructional text&lt;/p&gt;
&lt;p <span>class=&quot;alert&quot;</span> style=&quot;display:none;&quot;&gt;This is alert text&lt;/p&gt;

				</pre>
			</div>
		</div>
		
		
		<header>
			<p>5.2 input type="radio" &amp; input type="checkbox" | vertical w/errors</p>
		</header>
		<div class="master_container" id="">	
			<fieldset class="styleguide_form_frame editor-container" style="">	
				<label for="option_three">This is a label<span>(optional)</span></label>
				<ul class="vertical_selectors">
					<li class="fail">
						<input type="radio" name="option_vert" id="option_three" value=""/>
						<label for="option_three">option one</label>
					</li>
					<li class="fail">
						<input type="radio" name="option_vert" id="option_four" value=""/>
						<label for="option_four">option two</label>
					</li>
				</ul>
				<p class="instructional">This is instructional text</p>
				<p class="alert" style="display:block;">This is alert text</p>
				<p class="alert" style="display:block;">This is alert text</p>
				<p class="alert" style="display:block;">This is alert text</p>
				
				<label for="option_three_checkbox">This is a label<span>(optional)</span></label>
				<ul class="vertical_selectors">
					<li class="fail">
						<input type="checkbox" name="option_vert" id="option_three_checkbox" value=""/>
						<label for="option_three_checkbox">option one</label>
					</li>
					<li class="fail">
						<input type="checkbox" name="option_vert" id="option_four_checkbox" value=""/>
						<label for="option_four_checkbox">option two</label>
					</li>
				</ul>
				<p class="instructional">This is instructional text</p>
				<p class="alert" style="display:block;">This is alert text</p>
				<p class="alert" style="display:block;">This is alert text</p>
				<p class="alert" style="display:block;">This is alert text</p>
			</fieldset>
			<div class="right_content" id="">
				<p>Add <code>.fail</code> class to parent &lt;li&gt; tags.</p>
				<p>Exmaple code: horizontal selectors</p>
				<pre>
&lt;label for=&quot;option_three&quot;&gt;This is a label&lt;span&gt;(optional)&lt;/span&gt;&lt;/label&gt;
&lt;ul class=&quot;vertical_selectors&quot;&gt;
  &lt;li <span>class=&quot;fail&quot;</span>&gt;
    &lt;input type=&quot;radio&quot; name=&quot;option_vert&quot; id=&quot;option_three&quot; value=&quot;&quot;/&gt;
    &lt;label for=&quot;option_three&quot;&gt;option one&lt;/label&gt;
  &lt;/li&gt;
  &lt;li <span>class=&quot;fail&quot;</span>&gt;
    &lt;input type=&quot;radio&quot; name=&quot;option_vert&quot; id=&quot;option_four&quot; value=&quot;&quot;/&gt;
    &lt;label for=&quot;option_four&quot;&gt;option two&lt;/label&gt;
  &lt;/li&gt;
&lt;/ul&gt;
&lt;p class=&quot;instructional&quot;&gt;This is instructional text&lt;/p&gt;
&lt;p class=&quot;alert&quot; style=&quot;display:block;&quot;&gt;This is alert text&lt;/p&gt;
&lt;p class=&quot;alert&quot; style=&quot;display:block;&quot;&gt;This is alert text&lt;/p&gt;
&lt;p class=&quot;alert&quot; style=&quot;display:block;&quot;&gt;This is alert text&lt;/p&gt;

&lt;label for=&quot;option_three_checkbox&quot;&gt;This is a label&lt;span&gt;(optional)&lt;/span&gt;&lt;/label&gt;
&lt;ul class=&quot;vertical_selectors&quot;&gt;
  &lt;li <span>class=&quot;fail&quot;</span>&gt;
    &lt;input type=&quot;checkbox&quot; name=&quot;option_vert&quot; id=&quot;option_three_checkbox&quot; value=&quot;&quot;/&gt;
    &lt;label for=&quot;option_three_checkbox&quot;&gt;option one&lt;/label&gt;
  &lt;/li&gt;
  &lt;li <span>class=&quot;fail&quot;</span>&gt;
    &lt;input type=&quot;checkbox&quot; name=&quot;option_vert&quot; id=&quot;option_four_checkbox&quot; value=&quot;&quot;/&gt;
    &lt;label for=&quot;option_four_checkbox&quot;&gt;option two&lt;/label&gt;
  &lt;/li&gt;
&lt;/ul&gt;
&lt;p class=&quot;instructional&quot;&gt;This is instructional text&lt;/p&gt;
&lt;p class=&quot;alert&quot; style=&quot;display:block;&quot;&gt;This is alert text&lt;/p&gt;
&lt;p class=&quot;alert&quot; style=&quot;display:block;&quot;&gt;This is alert text&lt;/p&gt;
&lt;p class=&quot;alert&quot; style=&quot;display:block;&quot;&gt;This is alert text&lt;/p&gt;
				</pre>
			</div>
		</div>
		
		
		
		
		<header>
			<p>5.3 input type="radio" &amp; input type="checkbox" | vertical w/disabled fields</p>
		</header>
		<div class="master_container" id="">	
			<fieldset class="styleguide_form_frame editor-container" style="">	
				<label for="option_three">This is a label<span>(optional)</span></label>
				<ul class="vertical_selectors">
					<li>
						<input type="radio" name="option_vert" id="option_three" value="" disabled="disabled"/>
						<label for="option_three">option one</label>
					</li>
					<li>
						<input type="radio" name="option_vert" id="option_four" value="" disabled="disabled"/>
						<label for="option_four">option two</label>
					</li>
				</ul>
				<p class="instructional">This is instructional text</p>
				<p class="alert" style="display:none;">This is alert text</p>
				
				<label for="option_three_checkbox">This is a label<span>(optional)</span></label>
				<ul class="vertical_selectors">
					<li>
						<input type="checkbox" name="option_vert" id="option_three_checkbox" value="" disabled="disabled"/>
						<label for="option_three_checkbox">option one</label>
					</li>
					<li>
						<input type="checkbox" name="option_vert" id="option_four_checkbox" value="" disabled="disabled"/>
						<label for="option_four_checkbox">option two</label>
					</li>
				</ul>
				<p class="instructional">This is instructional text</p>
				<p class="alert" style="display:none;">This is alert text</p>
			</fieldset>
			<div class="right_content" id="">
				<p>Exmaple code: vertical selectors</p>
				<pre>
&lt;label for=&quot;option_three&quot;&gt;This is a label&lt;span&gt;(optional)&lt;/span&gt;&lt;/label&gt;
&lt;ul <span>class=&quot;vertical_selectors&quot;</span>&gt;
  &lt;li&gt;
    &lt;input type=&quot;radio&quot; name=&quot;option_vert&quot; id=&quot;option_three&quot; value=&quot;&quot; <span>disabled=&quot;disabled&quot;</span>/&gt;
    &lt;label for=&quot;option_three&quot;&gt;option one&lt;/label&gt;
  &lt;/li&gt;
  &lt;li&gt;
    &lt;input type=&quot;radio&quot; name=&quot;option_vert&quot; id=&quot;option_four&quot; value=&quot;&quot; <span>disabled=&quot;disabled&quot;</span>/&gt;
    &lt;label for=&quot;option_four&quot;&gt;option two&lt;/label&gt;
  &lt;/li&gt;
&lt;/ul&gt;
&lt;p class=&quot;instructional&quot;&gt;This is instructional text&lt;/p&gt;
&lt;p class=&quot;alert&quot; style=&quot;display:none;&quot;&gt;This is alert text&lt;/p&gt;

&lt;label for=&quot;option_three_checkbox&quot;&gt;This is a label&lt;span&gt;(optional)&lt;/span&gt;&lt;/label&gt;
&lt;ul <span>class=&quot;vertical_selectors&quot;</span>&gt;
  &lt;li&gt;
    &lt;input type=&quot;checkbox&quot; name=&quot;option_vert&quot; id=&quot;option_three_checkbox&quot; value=&quot;&quot; <span>disabled=&quot;disabled&quot;</span>/&gt;
    &lt;label for=&quot;option_three_checkbox&quot;&gt;option one&lt;/label&gt;
  &lt;/li&gt;
  &lt;li&gt;
    &lt;input type=&quot;checkbox&quot; name=&quot;option_vert&quot; id=&quot;option_four_checkbox&quot; value=&quot;&quot; <span>disabled=&quot;disabled&quot;</span>/&gt;
    &lt;label for=&quot;option_four_checkbox&quot;&gt;option two&lt;/label&gt;
  &lt;/li&gt;
&lt;/ul&gt;
&lt;p class=&quot;instructional&quot;&gt;This is instructional text&lt;/p&gt;
&lt;p class=&quot;alert&quot; style=&quot;display:none;&quot;&gt;This is alert text&lt;/p&gt;
				</pre>
			</div>
		</div>



		<header>
			<p>6. input type="text</p>
		</header>
		<div class="master_container" id="">	
			<fieldset class="styleguide_form_frame editor-container" style="">		
				<label for="textarea">This is a label<span>(optional)</span></label>
				<textarea id="textarea">hello, I am text</textarea>
				<p class="instructional">This is instructional text</p>
				<p class="alert" style="display:none;">This is alert text</p>
			</fieldset>
			<div class="right_content" id="">
			<p>Exmaple code: textarea</p>
				<pre>
&lt;label for=&quot;textarea&quot;&gt;This is a label&lt;span&gt;(optional)&lt;/span&gt;&lt;/label&gt;
&lt;textarea id=&quot;textarea&quot;&gt;hello, I am text&lt;/textarea&gt;
&lt;p <span>class=&quot;instructional&quot</span>;&gt;This is instructional text&lt;/p&gt;
&lt;p <span>class=&quot;alert&quot;</span> <span>style=&quot;display:none;&quot;</span>&gt;This is alert text&lt;/p&gt;	
				</pre>
			</div>
		</div>
		<footer></footer>
		
		<header>
			<p>6.1 input type="text" w/errors</p>
		</header>
		<div class="master_container" id="">	
			<fieldset class="styleguide_form_frame editor-container" style="">		
				<label for="textarea">This is a label<span>(optional)</span></label>
				<textarea id="textarea" class="fail">hello, I am text</textarea>
				<p class="instructional">This is instructional text</p>
				<p class="alert" style="display:block;">This is alert text</p>
				<p class="alert" style="display:block;">This is alert text</p>
				<p class="alert" style="display:block;">This is alert text</p>
			</fieldset>
			<div class="right_content" id="">
			<p>Add <code>.fail</code> class to the &lt;textarea&gt; tag.</p>
			<p>Exmaple code: textarea</p>
				<pre>
&lt;label for=&quot;textarea&quot;&gt;This is a label&lt;span&gt;(optional)&lt;/span&gt;&lt;/label&gt;
&lt;textarea id=&quot;textarea&quot; <span>class=&quot;fail&quot;</span>&gt;hello, I am text&lt;/textarea&gt;
&lt;p <span>class=&quot;instructional&quot</span>;&gt;This is instructional text&lt;/p&gt;
&lt;p <span>class=&quot;alert&quot;</span> <span>style=&quot;display:block;&quot;</span>&gt;This is alert text&lt;/p&gt;
&lt;p <span>class=&quot;alert&quot;</span> <span>style=&quot;display:block;&quot;</span>&gt;This is alert text&lt;/p&gt;
&lt;p <span>class=&quot;alert&quot;</span> <span>style=&quot;display:block;&quot;</span>&gt;This is alert text&lt;/p&gt;	
				</pre>
			</div>
		</div>
		<footer></footer>
		
		<header>
			<p>6.2 input type="text" w/disabled field</p>
		</header>
		<div class="master_container" id="">	
			<fieldset class="styleguide_form_frame editor-container" style="">		
				<label for="textarea">This is a label<span>(optional)</span></label>
				<textarea id="textarea" disabled="disabled">hello, I am text</textarea>
				<p class="instructional">This is instructional text</p>
				<p class="alert" style="display:none;">This is alert text</p>
			</fieldset>
			<div class="right_content" id="">
			<p>Exmaple code: textarea</p>
				<pre>
&lt;label for=&quot;textarea&quot;&gt;This is a label&lt;span&gt;(optional)&lt;/span&gt;&lt;/label&gt;
&lt;textarea id=&quot;textarea&quot; <span>disabled=&quot;disabled&quot;</span>&gt;hello, I am text&lt;/textarea&gt;
&lt;p <span>class=&quot;instructional&quot</span>&gt;This is instructional text&lt;/p&gt;
&lt;p <span>class=&quot;alert&quot;</span> <span>style=&quot;display:none;&quot;</span>&gt;This is alert text&lt;/p&gt;	
				</pre>
			</div>
		</div>
		<footer></footer>
		
		<header><p>7 Large inputs</p></header>
		<div class="master_container" id="">
			<fieldset class="styleguide_form_frame editor-container foo_form" style="">
				<label for="text_field">This is a label<span>(optional)</span></label>
				<input type="text" class="" name="" id="text_field" value="" />
			</fieldset>
			
			<div class="right_content" id="">
				<p><b>Note: </b>Larger form UI is created when appending the mixin of <code>.large_form</code> to the class of the parent container.</p>
				<p>Example code:</p>
				<pre>
&lt;style&gt;
  .foo_form {
    .large_form
  }
&lt;/style&gt;

&lt;fieldset <span>class=&quot;foo_form&quot;</span> style=&quot;&quot;&gt;
  &lt;label for=&quot;text_field&quot;&gt;This is a label&lt;span&gt;(optional)&lt;/span&gt;&lt;/label&gt;
  &lt;input type=&quot;text&quot; class=&quot;&quot; name=&quot;&quot; id=&quot;text_field&quot; value=&quot;&quot; /&gt;
&lt;/fieldset&gt;
				</pre>
			</div>
		</div>
		
		
	</article>
<?php include 'shared/footer.php'?>
