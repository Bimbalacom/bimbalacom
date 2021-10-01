<?php

/**
 * Bimbala Theme
 */

?>
<style>.tab-pane{ display:none; }, .tab-pane.active{ display:block; }</style>

<div class="theme-settings">

	<ul class="nav nav-tabs">
		<li class="active"><a data-toggle="tab" href="#branding">Branding</a></li>
		<li><a data-toggle="tab" href="#homepage">Homepage</a></li>
		<li><a data-toggle="tab" href="#themeinfo">Theme Info</a></li>
	</ul>

	<div class="tab-content">

		<div id="branding" class="tab-pane fade in active">

			{!! theme_field('image', 'logo', 'Site Logo') !!}

			{!! theme_field('image', 'footer_logo', 'Footer Logo') !!}

		</div>

		<div id="homepage" class="tab-pane">

			{!! theme_field('text', 'home_headline', 'Homepage Headline') !!}
			{!! theme_field('text', 'home_subheadline', 'Homepage Subheadline') !!}
			{!! theme_field('text_area', 'home_description', 'Homepage Copy Below Subheadline') !!}
			{!! theme_field('text', 'home_cta', 'Homepage CTA Text') !!}
			{!! theme_field('text', 'home_cta_url', 'Homepage CTA URL') !!}
			{!! theme_field('image', 'home_promo_image', 'Homepage Promo Image') !!}

		</div>

		<div id="themeinfo" class="tab-pane">

			<h3>Bimbala theme</h3>
			<p>This theme was built using TailwindCSS. You can learn more about Tailwind by visiting the links below.</p>
			<a href="https://github.com/Bimbalacom/Website" target="_blank" class="btn btn-small btn-primary">Github project</a>
			<a href="https://tailwindcss.com/docs" target="_blank" class="btn btn-small btn-primary">Tailwind Documentation</a>
			<hr>
			<h3>Theme Options</h3>
			<p>You can edit this file located at: <code>{{ resource_path('views/' . theme_folder()) . '/options.blade.php' }}</code>
			<p>It's quite easy to add your own options, instructions are commented at the top of the file.</p>
			<hr>

		</div>

	</div>


</div>
