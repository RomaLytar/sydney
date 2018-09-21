<?php
class Custom_Walker_Nav_Menu  extends Walker_Nav_Menu {
public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
$html = "";
if($depth == 0) {
$html .= "\n<li";

$html .= "><li class='dropdown'";
if($args->walker->has_children) {
$html .= '';
}
if(!$args->walker->has_children) {
$html .= ' href="' . $item->url . '" ';
}
if($args->walker->has_children){
$html .='';
}
$html .= '>%s';

if($args->walker->has_children){
$html .= '<a href="'.$item->url.'">'.$item->title.'</a>';
}

$html .= '</a>';
$output .= sprintf($html,$item->title);

}
elseif($depth == 1) {
$output .= '<li><a href="'.$item->url.'">'.$item->title.'</a></li>';
}
}

public function end_el(&$output, $item, $depth = 0, $args = array()) {
if($depth == 0) {
$output .= "</li>";
}
elseif($depth == 1) {
$output .= '</li>';
}
}

public function start_lvl(&$output, $depth = 0, $args = array()) {
if($depth == 0) {
$output .= '<ul class="menu__second-wrap" data-menu-second>';
  }
  if($depth == 0) {
  $output .= '<ul class="menu__second">';
    }
    }

    public function end_lvl(&$output, $depth = 0, $args = array()) {
    if($depth == 0) {
    $output .= '</ul>';
  }
  }
  }