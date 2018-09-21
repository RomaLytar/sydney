<?php
class Custom_Walker_Nav_Menu  extends Walker_Nav_Menu {

  public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
    //$output .= "Link - ".$depth;


    $html = "";
    if($depth == 0) {
      $html .= "\n<li";

      if($args->walker->has_children) {
        $html .= ' class="menu-item menu-second"';
      }

      if(!$args->walker->has_children) {
        $html .= ' class="menu-item"';
      }

      $html .= "><a ";

      if($args->walker->has_children) {
        $html .= ' class="menu-second__toggle" ';
      }
      if(!$args->walker->has_children) {
        $html .= ' href="' . $item->url . '" ';
      }
      $html .= '>%s ';

      if($args->walker->has_children) {
        $html .= '<span class="menu-second__down">Открыть меню
                            <svg width="30" height="30">
                              <use xlink:href="#arrow-down" />
                            </svg>
                          </span>';
      }
      $html .= '</a>';
      $output .= sprintf($html,$item->title);

    }
    elseif($depth == 1) {
      $output .= '<li class="menu-second__item"><a href="'.$item->url.'">'.$item->title.'</a></li>';
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
      $output .= '<ul class="menu-second__list">';
    }
  }

  public function end_lvl(&$output, $depth = 0, $args = array()) {
    if($depth == 0) {
      $output .= '</ul>';
    }
  }

}
?>