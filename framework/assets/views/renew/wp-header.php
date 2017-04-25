<!-- HOME PAGE HERO
===================================================================== -->

<?php

// Set ACF Vars
//==============================================

$home_title = get_the_title();
if( get_field( 'home_header_title' ) ){
	$home_title = get_field( 'home_header_title' );
}

$sub = '';
if( get_field( 'home_header_subtext' ) ){
	$sub = get_field( 'home_header_subtext' );
}

$home_bg = '';
if( get_field( 'home_header_bg' ) ){
	$home_bg = get_field( 'home_header_bg' );
	$home_bg_url = $bg['url'];
}

?>



<div id="x-section-1" class="x-section cs-ta-center _before _overlay-black bg-image" style="margin: 0px;padding: 8% 0px; background-image: url(<?php echo esc_url( $home_bg_url ); ?>); background-color: transparent;" data-x-element="section" data-x-params="{&quot;type&quot;:&quot;image&quot;,&quot;parallax&quot;:false}">
	
	<div class="x-container" style="margin: 0px auto;padding: 0px;">
		
		<div class="x-column x-sm x-1-1" style="padding: 0px;">
			<img class="x-img x-img-none" src="/wp-content/uploads/2017/04/welcome.png" alt="Hello and welcome">
			<div class="x-text -white _larger-txt _max-520 _center">
				<p><?php echo esc_html( $sub ); ?></p>
			</div>
		</div>
	</div>
	
</div>







<!-- INNER PAGE HERO
===================================================================== -->

<?php

// Set ACF Vars
//==============================================

$title = get_the_title();
if( get_field( 'page_header_title' ) ){
	$title = get_field( 'page_header_title' );
}

$bg = '';
if( get_field( 'page_header_bg' ) ){
	$bg = get_field( 'page_header_bg' );
	$bg_url = $bg['url'];
}

?>


<div id="x-section-1" class="x-section page-header _before bg-image" style="margin: 0px;padding: 5% 0px; background-image: url(<?php echo esc_url( $bg_url ); ?>); background-color: transparent;" data-x-element="section" data-x-params="{&quot;type&quot;:&quot;image&quot;,&quot;parallax&quot;:false}">

	<div class="x-container max width" style="margin: 0px auto;padding: 0px;">
		<div class="x-column x-sm x-1-1" style="padding: 0px;">

			<div class="x-text content -dash-left-vertical -white">
				<h1 class="">
					<span class="title -thin"><?php echo esc_html( $title ); ?></span>
				</h1>
			</div>
			

		</div>
	</div>
</div>



