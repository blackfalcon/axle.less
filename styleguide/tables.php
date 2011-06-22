<?php include 'shared/head.php'?>
	<?php include 'shared/banner.php'?>
	<header class="styleguide_header"><h1>| Axle | 'tables'</h1></header>
	<article class="styleguide_body">
		<?php include 'shared/nav.php'?>
		<header>
			<p>1. Standard table UI</p>
			<article>	
				<p>Styles are applied to the <code>&lt;table&gt;</code> tag in the markup. No IDs or Classes necessary.  </p>
				<p>Be sure to use the <code>&lt;thead&gt;</code> and <code>&lt;tbody&gt;</code> tags.</p>	
			</article>
		</header>
		<article>
			<table>
			 	<thead>
			 		<tr>
			 			<th>header</th>
			 			<th>header</th>
			 			<th>header</th>
			 			<th>header</th>
			 			<th>header</th>
			 			<th>header</th>
			 		</tr>
			 	</thead>
			 	<tbody>
			 		<tr>
			 			<td>body</td>
			 			<td>body</td>
			 			<td>body</td>
			 			<td>body</td>
			 			<td>body</td>
			 			<td>body</td>
			 		</tr>
			 		<tr>
			 			<td>body</td>
			 			<td>body</td>
			 			<td>body</td>
			 			<td>body</td>
			 			<td>body</td>
			 			<td>body</td>
			 		</tr>
			 	</tbody>
			 </table> 
			 <p>Example code:</p>
			 <pre class="prettyprint">
&lt;table&gt;</span>
  &lt;thead&gt;</span>
    &lt;tr&gt;
      &lt;th&gt;header&lt;/th&gt;
      &lt;th&gt;header&lt;/th&gt;
      &lt;th&gt;header&lt;/th&gt;
      &lt;th&gt;header&lt;/th&gt;
      &lt;th&gt;header&lt;/th&gt;
      &lt;th&gt;header&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/thead&gt;
  &lt;tbody&gt;</span>
    &lt;tr&gt;
      &lt;td&gt;body&lt;/td&gt;
      &lt;td&gt;body&lt;/td&gt;
      &lt;td&gt;body&lt;/td&gt;
      &lt;td&gt;body&lt;/td&gt;
      &lt;td&gt;body&lt;/td&gt;
      &lt;td&gt;body&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;td&gt;body&lt;/td&gt;
      &lt;td&gt;body&lt;/td&gt;
      &lt;td&gt;body&lt;/td&gt;
      &lt;td&gt;body&lt;/td&gt;
      &lt;td&gt;body&lt;/td&gt;
      &lt;td&gt;body&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tbody&gt;
&lt;/table&gt;
			 </pre>
		</article>
		<footer></footer>

	</article>
<?php include 'shared/footer.php'?>