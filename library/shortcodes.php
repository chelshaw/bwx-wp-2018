<?php
/*
 *
 * CUSTOM SHORTCODES FOR BALANCEWORX
 *
 *
*/

function bworx_title_func( $atts, $content = null ) {
    return '<div class="bwx-title"><span class="title-underline">'.$content.'</span></div>';
}
add_shortcode( 'title', 'bworx_title_func' );

function bworx_button_func( $atts, $content = null ) {
    return '<span class="bwx-button">'.$content.'</span>';
}
add_shortcode( 'button', 'bworx_button_func' );

function bworx_tab_container_func($atts, $content = null) {
    return '<div class="bwx-tab__container"><div class="bwx-tab__buttons">' . do_shortcode($content) . '</div><div id="bwx-tab__show-content"></div></div>';
}
// add_shortcode( 'tab-container', 'bworx_tab_container_func' );

function bworx_tab_func($atts, $content = null) {
    $a = shortcode_atts( array(
        'name' => 'This Tab',
        'id' => 'tab_1',
        'default' => false,
    ), $atts );
    $button_class = 'bwx-tab__button';
    if ($a['default']) {
      $button_class .= ' default';
    }
    $id = 'tab_' . preg_replace('~[^\w]~','',esc_attr($a['id']));
    return '<div class="bwx-tab__single-tab">' .
    '<div class="' . $button_class  . '" data-open="' . $id . '">' . esc_attr($a['name']) . '</div>' .
    '<div class="bwx-tab__content" id="' . $id . '">' . do_shortcode($content) . '</div>' .
    '</div>';
}
// add_shortcode( 'tab', 'bworx_tab_func' );

function bworx_what_we_do_func($atts, $content = null) {
  $a = shortcode_atts( array(
    'title' => '',
    'bg' => '',
    'icon' => '',
  ), $atts );

  $output = '<div class="what-we-do-block">';
  $output .= '<div class="what-we-do-block__image" style="background-image: url(' . $a['bg'] . ')">';
  $output .= '<div class="what-we-do-block__icon"><i class="fa fa-' . esc_attr($a['icon']) . '" aria-hidden="true"></i></div>';
  $output .= '</div>';
  $output .= '<div class="what-we-do-block__content">';
  $output .= '<h4>' . esc_attr($a['title']) . '</h4>';
  $output .= do_shortcode($content);
  $output .= '</div><!--wwdb?-->';
  $output .= '</div><!--wwdb__content-->';
  $output .= '</div><!--wwdb-->';
  return $output;
}
add_shortcode( 'what-we-do', 'bworx_what_we_do_func' );

?>
