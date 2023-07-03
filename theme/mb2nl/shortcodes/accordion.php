<?php

defined('MOODLE_INTERNAL') || die();

mb2_add_shortcode('accordion', 'mb2_shortcode_accordion');
mb2_add_shortcode('accordion_item', 'mb2_shortcode_accordion_item');

function mb2_shortcode_accordion($atts, $content= null){

	extract(mb2_shortcode_atts( array(
		'show_all' => 0,
		'builder' => 0,
		'type' => 'default',
		'size' => 's',
		'padding' => 0,
		'rounded' => 0,
		'custom_class' => '',
		'tfs' => 1,
		'tfw' => 'global',
		'tcolor' => '',
		'thcolor' => '',
		'hbgcolor' => '',
		'hbghcolor' => '',
		'cbgcolor' => '',
		'iconcolor' => '',
		'iconhcolor' => '',
		'scheme' => 'light',
		'isicon' => 0,
		'icon' => 'fa fa-trophy',
		'accordion_active' => theme_mb2nl_shortcodes_global_opts('accordion', 'accordion_active', 1),
		'mt' => 0,
		'mb' => 30,
		'parent' => 1
		), $atts)
	);

	$output = '';
	$style = '';
	$cls = '';

	$accid = uniqid( 'mb2acc_' );
	$GLOBALS['mb2acc'] = $accid;

	$GLOBALS['mb2accisicon'] = $isicon;
	$GLOBALS['mb2accbuilder'] = $builder;
	$GLOBALS['mb2accactive2'] = $accordion_active;
	$GLOBALS['mb2accparent'] = $parent;
	$GLOBALS['mb2accactive'] = $accordion_active;
	$GLOBALS['mb2accicon'] = $icon ? $icon : 'fa fa-trophy';
	$GLOBALS['mb2accitfs'] = $tfs;
	$GLOBALS['mb2accicontfw'] = $tfw;
	$GLOBALS['mb2acctcolor'] = $tcolor;
	$GLOBALS['mb2accthcolor'] = $thcolor;
	$GLOBALS['mb2acchbgcolor'] = $hbgcolor;
	$GLOBALS['mb2acchbghcolor'] = $hbghcolor;
	$GLOBALS['mb2acccbgcolor'] = $cbgcolor;
	$GLOBALS['mb2accscheme'] = $scheme;
	$GLOBALS['mb2acciconcolor'] = $iconcolor;
	$GLOBALS['mb2acciconhcolor'] = $iconhcolor;
	//$GLOBALS['show_all'] = $show_all;

	$cls .= $custom_class ? ' ' . $custom_class : '';
	$cls .= ' isicon' . $isicon;
	$cls .= ' style-' . $type;
	$cls .= ' size' . $size;
	$cls .= ' padding' . $padding;
	$cls .= ' rounded' . $rounded;

	if ( $mt || $mb )
	{
		$style .= ' style="';
		$style .= $mt ? 'margin-top:' . $mt . 'px;' : '';
		$style .= $mb ? 'margin-bottom:' . $mb . 'px;' : '';
		$style .= '"';
	}

	$output .= '<div id="' . $accid . '" class="mb2-accordion accordion' . $cls . '"' . $style . '>';
	$output .= mb2_do_shortcode($content);
	$output .= '</div>';

	unset( $GLOBALS['mb2acc'] );
	unset( $GLOBALS['mb2accisicon'] );
	unset( $GLOBALS['mb2accbuilder'] );
	unset( $GLOBALS['mb2accactive2'] );
	unset( $GLOBALS['mb2accparent'] );
	unset( $GLOBALS['mb2accactive'] );
	unset( $GLOBALS['mb2accicon'] );
	unset( $GLOBALS['mb2accitfs'] );
	unset( $GLOBALS['mb2accicontfw'] );
	unset( $GLOBALS['mb2acctcolor'] );
	unset( $GLOBALS['mb2accthcolor'] );
	unset( $GLOBALS['mb2acchbgcolor'] );
	unset( $GLOBALS['mb2acchbghcolor'] );
	unset( $GLOBALS['mb2acccbgcolor'] );
	unset( $GLOBALS['mb2accscheme'] );
	unset( $GLOBALS['mb2acciconcolor'] );
	unset( $GLOBALS['mb2acciconhcolor'] );

	return $output;

}





function mb2_shortcode_accordion_item($atts, $content= null){
	extract(mb2_shortcode_atts( array(
		'title' => '',
		'active' => 0,
		'icon' => ''
		), $atts)
	);

	$output = '';
	$cls = '';
	$parent = '';
	$show = '';
	$expanded = 'false';
	$colpsed = ' collapsed';
	$tcls = ' fw' . $GLOBALS['mb2accicontfw'];
	$tstyle = '';
	$cbcls = '';
	$cbstyle = '';
	$istyle = '';

	//$icon = $icon ? $icon : $GLOBALS['mb2accicon'];
	$isicon = $icon;

	if ( $GLOBALS['mb2accbuilder'] )
	{
		$icon = $icon ? $icon : $GLOBALS['mb2accicon'];
		$isicon = $icon || $GLOBALS['mb2accisicon'];
	}

	// Get accordion ids
	$parentid = $GLOBALS['mb2acc'];
	$accid = uniqid( 'accitem_' );

	// Get parent attribute
	if ( $GLOBALS['mb2accparent'] )
	{
		$parent = ' data-parent="#' . $parentid . '"';
	}

	// Define accordion number
	if ( isset( $GLOBALS['accitem'] ) )
	{
		$GLOBALS['accitem']++;
	}
	else
	{
		$GLOBALS['accitem'] = 1;
	}

	// Check if is active
	if( $GLOBALS['mb2accactive2'] == $GLOBALS['accitem'] )
	{
		$show = ' show';
		$expanded = 'true';
		$colpsed = '';
	}

	// Icon style
	if ( $GLOBALS['mb2acciconcolor'] ||  $GLOBALS['mb2acciconhcolor'] )
	{
		$istyle .= ' style="';
		$istyle .= '--mb2-pb-acc-iconcolor:' . $GLOBALS['mb2acciconcolor'] . ';';
		$istyle .= '--mb2-pb-acc-iconhcolor:' . $GLOBALS['mb2acciconhcolor'] . ';';
		$istyle .= '"';
	}

	$pref = theme_mb2nl_font_icon_prefix( $icon );
	$title = format_text( $title, FORMAT_HTML );
	$iconhtml = $isicon ? '<i class="' . $pref . $icon . '"' . $istyle . '></i>' : '';

	// Title style
	if (
		$GLOBALS['mb2accitfs'] ||
		$GLOBALS['mb2acctcolor'] ||
		$GLOBALS['mb2accthcolor'] ||
		$GLOBALS['mb2acchbgcolor'] ||
		$GLOBALS['mb2acchbghcolor']
	)
	{
		$tstyle .= ' style="';
		$tstyle .= 'font-size:' . $GLOBALS['mb2accitfs'] . 'rem;';
		$tstyle .= $GLOBALS['mb2acctcolor'] ? '--mb2-pb-acc-tcolor:' . $GLOBALS['mb2acctcolor'] . ';' : '';
		$tstyle .= $GLOBALS['mb2accthcolor'] ? '--mb2-pb-acc-thcolor:' . $GLOBALS['mb2accthcolor'] . ';' : '';
		$tstyle .= $GLOBALS['mb2acchbgcolor'] ? '--mb2-pb-acc-hbgcolor:' . $GLOBALS['mb2acchbgcolor'] . ';' : '';
		$tstyle .= $GLOBALS['mb2acchbghcolor'] ? '--mb2-pb-acc-hbghcolor:' . $GLOBALS['mb2acchbghcolor'] . ';' : '';
		$tstyle .= '"';
	}

	// Content style
	$cbcls .= ' ' . $GLOBALS['mb2accscheme'];

	if ( $GLOBALS['mb2acccbgcolor'] )
	{
		$cbstyle .= ' style="';
		$cbstyle .= '--mb2-pb-acc-cbgcolor:' . $GLOBALS['mb2acccbgcolor'] . ';';
		$cbstyle .= '"';
	}

	$output .= '<div class="card">';

	$output .= '<div class="card-header">';
	$output .= '<h5 class="mb-0">';
	$output .= '<button type="button" data-toggle="collapse" class="themereset' . $colpsed . '" data-target="#' . $accid . '" aria-controls="#' .
	$accid . '" aria-expanded="' . $expanded . '"' . $parent . $tstyle . '>';
	$output .= $iconhtml . '<span class="acc-text' . $tcls . '">' . $title . '</span>';
	$output .= '</button>';
	$output .= '</h5>';
	$output .= '</div>';

	$output .= '<div id="' . $accid . '" class="collapse' . $show . '"' . $parent . '>';
	$output .= '<div class="card-body' . $cbcls . '"' . $cbstyle . '>';
	$output .= '<div class="inner">';
	$output .= theme_mb2nl_check_for_tags($content, 'iframe') ? $content : mb2_do_shortcode(format_text($content, FORMAT_HTML));
	$output .= '</div>';
	$output .= '</div>';
	$output .= '</div>';


	$output .= '</div>';


	return $output;
}
