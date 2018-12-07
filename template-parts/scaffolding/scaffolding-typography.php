<?php
/**
 * The template used for displaying typography in the scaffolding library.
 *
 * @package _s
 */

?>

<section class="section-scaffolding">

	<h2 class="scaffolding-heading"><?php esc_html_e( 'Typography', '_s' ); ?></h2>

	<?php
	// H1.
	_s_display_scaffolding_section( array(
		'title'       => 'H1',
		'description' => 'Display an H1',
		'usage'       => '<h1>This is a headline</h1> or <div class="h1">This is a headline</div>',
		'output'      => '<h1>This is a headline one</h1>',
	) );

	// H2.
	_s_display_scaffolding_section( array(
		'title'       => 'H2',
		'description' => 'Display an H2',
		'usage'       => '<h2>This is a headline</h2> or <div class="h2">This is a headline</div>',
		'output'      => '<h2>This is a headline two</h2>',
	) );

	// H3.
	_s_display_scaffolding_section( array(
		'title'       => 'H3',
		'description' => 'Display an H3',
		'usage'       => '<h3>This is a headline</h3> or <div class="h3">This is a headline</div>',
		'output'      => '<h3>This is a headline three</h3>',
	) );

	// H4.
	_s_display_scaffolding_section( array(
		'title'       => 'H4',
		'description' => 'Display an H4',
		'usage'       => '<h4>This is a headline</h4> or <div class="h4">This is a headline</div>',
		'output'      => '<h4>This is a headline four</h4>',
	) );

	// H5.
	_s_display_scaffolding_section( array(
		'title'       => 'H5',
		'description' => 'Display an H5',
		'usage'       => '<h5>This is a headline</h5> or <div class="h5">This is a headline</div>',
		'output'      => '<h5>This is a headline five</h5>',
	) );

	// H6.
	_s_display_scaffolding_section( array(
		'title'       => 'H6',
		'description' => 'Display an H6',
		'usage'       => '<h6>This is a headline</h6> or <div class="h6">This is a headline</div>',
		'output'      => '<h6>This is a headline six</h6>',
	) );

	// Body.
	_s_display_scaffolding_section( array(
		'title'       => 'Paragraph',
		'description' => 'Display a paragraph',
		'usage'       => '<p>Elementum faucibus vehicula id neque magnis scelerisque quam conubia torquent, auctor nisl quis aliquet venenatis sem sagittis morbi eu, fermentum ipsum congue ultrices non dui lectus pulvinar. Sapien etiam convallis urna suscipit euismod pharetra tellus himenaeos, dignissim consectetur cum suspendisse sem ornare eros enim egestas, cubilia venenatis mauris vivamus elit fringilla duis.</p>',
		'output'      => '<p>Elementum faucibus vehicula id neque magnis scelerisque quam conubia torquent, auctor nisl quis aliquet venenatis sem sagittis morbi eu, fermentum ipsum congue ultrices non dui lectus pulvinar. Sapien etiam convallis urna suscipit euismod pharetra tellus himenaeos, dignissim consectetur cum suspendisse sem ornare eros enim egestas, cubilia venenatis mauris vivamus elit fringilla duis.</p>',
	) );

	// Link.
	_s_display_scaffolding_section( array(
		'title'       => 'Link',
		'description' => 'Displays a link.',
		'usage'       => '<a href="#">Link</a>',
		'output'      => '<a href="#">Link</a>',
	) );

	// HTML table.
	_s_display_scaffolding_section( array(
		'title'       => 'Table',
		'description' => 'Display a table',
		'usage'       => '
			<table cellspacing="0" cellpadding="0">
				<thead>
					<tr>
						<th>Table Header 1</th>
						<th>Table Header 2</th>
						<th>Table Header 3</th>
						<th>Table Header 4</th>
						<th>Table Header 5</th>
						<th>Table Header 6</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Division 1</td>
						<td>Division 2</td>
						<td>Division 3</td>
						<td>Division 4</td>
						<td>Division 5</td>
						<td>Division 6</td>
					</tr>
					<tr>
						<td>Division 1</td>
						<td>Division 2</td>
						<td>Division 3</td>
						<td>Division 4</td>
						<td>Division 5</td>
						<td>Division 6</td>
					</tr>
					<tr>
						<td>Division 1</td>
						<td>Division 2</td>
						<td>Division 3</td>
						<td>Division 4</td>
						<td>Division 5</td>
						<td>Division 6</td>
					</tr>
				</tbody>
			</table>
		',
		'output'      => '
			<table cellspacing="0" cellpadding="0">
				<thead>
					<tr>
						<th>Table Header 1</th>
						<th>Table Header 2</th>
						<th>Table Header 3</th>
						<th>Table Header 4</th>
						<th>Table Header 5</th>
						<th>Table Header 6</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Division 1</td>
						<td>Division 2</td>
						<td>Division 3</td>
						<td>Division 4</td>
						<td>Division 5</td>
						<td>Division 6</td>
					</tr>
					<tr>
						<td>Division 1</td>
						<td>Division 2</td>
						<td>Division 3</td>
						<td>Division 4</td>
						<td>Division 5</td>
						<td>Division 6</td>
					</tr>
					<tr>
						<td>Division 1</td>
						<td>Division 2</td>
						<td>Division 3</td>
						<td>Division 4</td>
						<td>Division 5</td>
						<td>Division 6</td>
					</tr>
				</tbody>
			</table>
		',
	) );


	// Ordered List.
	_s_display_scaffolding_section( array(
		'title'       => 'Ordered List',
		'description' => 'Display an ordered list.',
		'usage'       => '
			<ol>
				<li>List Item 1</li>
				<li>List Item 2</li>
				<li>List Item 3</li>
			</ol>
		',
		'output'      => '
			<ol>
				<li>List Item 1</li>
				<li>List Item 2</li>
				<li>List Item 3</li>
			</ol>
		',
	) );

	// Unordered List.
	_s_display_scaffolding_section( array(
		'title'       => 'Unordered List',
		'description' => 'Display an unordered list.',
		'usage'       => '
			<ul>
				<li>List Item 1</li>
				<li>List Item 2</li>
				<li>List Item 3</li>
			</ul>
		',
		'output'      => '
			<ul>
				<li>List Item 1</li>
				<li>List Item 2</li>
				<li>List Item 3</li>
			</ul>
		',
	) );

	// Blockquote.
	_s_display_scaffolding_section( array(
		'title'       => 'Blockquote',
		'description' => 'Display a blockquote.',
		'usage'       => '<blockquote><p>Stay hungry. Stay foolish.</p></blockquote>',
		'output'      => '<blockquote><p>Stay hungry. Stay foolish.</p></blockquote>',
	) );

	// Code tag.
	_s_display_scaffolding_section( array(
		'title'       => 'Code Tag',
		'description' => 'Display a code tag.',
		'usage'       => '<code>word-wrap: break-word;</code>',
		'output'      => '<p>You will learn later on in these tests that <code>word-wrap: break-word;</code> will be your best friend.</p>',
	) );

	// Em tag.
	_s_display_scaffolding_section( array(
		'title'       => 'Emphasize Tag',
		'description' => 'Display an <em> tag.',
		'usage'       => '<em>italicize</em>',
		'output'      => 'The emphasize tag should <em>italicize</em> text.',
	) );

	// Strong tag.
	_s_display_scaffolding_section( array(
		'title'       => 'Strong Tag',
		'description' => 'Display bold text.',
		'usage'       => '<strong>bold<strong>',
		'output'      => '<p>This tag shows <strong>bold<strong> text.</strong></strong></p>',
	) );

	// Abbreviation Tag.
	_s_display_scaffolding_section( array(
		'title'       => 'Abbreviation Tag',
		'description' => 'Display an abbreviation.',
		'usage'       => '<abbr title="Seriously">srsly</abbr>',
		'output'      => '<p>The abbreviation <abbr title="Seriously">srsly</abbr> stands for “seriously”.</p>',
	) );

	// Acronym Tag.
	_s_display_scaffolding_section( array(
		'title'       => 'Acronym Tag',
		'description' => 'Display an acronym.',
		'usage'       => '<acronym title="For The Win">ftw</acronym>',
		'output'      => '<p>The acronym <acronym title="For The Win">ftw</acronym> stands for “for the win”.</p>',
	) );

	// Cite Tag.
	_s_display_scaffolding_section( array(
		'title'       => 'Cite Tag',
		'description' => 'Display a citation.',
		'usage'       => '<cite>Automattic</cite>',
		'output'      => '<p>“Code is poetry.” —<cite>Automattic</cite></p>',
	) );

	// Stirkeout Tag.
	_s_display_scaffolding_section( array(
		'title'       => 'Strikeout Text',
		'description' => 'Display strikeout text.',
		'usage'       => '<strike>Automattic</strike>',
		'output'      => '<p>This tag will let you <strike>strikeout text</strike></p>.',
	) );

	// Preformatted Tag.
	_s_display_scaffolding_section( array(
		'title'       => 'Preformatted tag.',
		'description' => 'This tag styles large blocks of code.',
		'usage'       => '
			<pre>.post-title {
				margin: 0 0 5px;
				font-weight: bold;
				font-size: 38px;
				line-height: 1.2;
			}</pre>
		',
		'output'      => '
			<pre>.post-title {
				margin: 0 0 5px;
				font-weight: bold;
				font-size: 38px;
				line-height: 1.2;
			}</pre>
		',
	) );
	?>
</section>
