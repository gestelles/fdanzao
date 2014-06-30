<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * menu_ul()
 * Genera una lista desordenada con la clase current en el elemento seleccionado.
 */
if ( ! function_exists('menu_ul'))
{
    function menu_ul($sel = 'home') {
        $CI =& get_instance();
        $items = $CI->config->item('navigation');
        
        $menu = '<ul class="main_nav">'."\n";
        foreach($items as $item) {
            $current = (in_array($sel, $item)) ? ' class="current"' : '';
            $id = (!empty($item['id'])) ? ' id="'.$item['id'].'"' : '';
            $menu .= '<li'.$current.'><a href="'.$item['link'].'"'.$id.'>'.$item['title'].'</a></li>'."\n";
        }
        $menu .= '</ul>'."\n";
        return $menu;
    }
}

// ------------------------------------------------------------------------

/**
 * Menú principal de administración
 *
 */
if (!function_exists('menuAdmin1L'))
{
    function menuAdmin1L($sel = null) {
        $CI =& get_instance();
        $items = $CI->config->item('nav_admin');
        $menu = '<ul>';
        foreach($items as $key=>$item) {
            $current = ($key==$sel);
            $menu .= ($current) ? '<li class="selected">' : '<li>';
            $menu .= '<a href="'.$item['url'].'">'.$item['label'].'</a>'.'</li>';
        }
        $menu .= '</ul>';
        return $menu;
    }
}

// ------------------------------------------------------------------------

/**
 * SubMenú de administración
 *
 */
if (!function_exists('menuAdmin2L'))
{
    function menuAdmin2L($op = 'Inicio', $sel = null) {
        $CI =& get_instance();
        $items = $CI->config->item('nav_admin');
        if (!array_key_exists($op, $items)) return;
        $items = $items[$op];
        if (!array_key_exists('menu', $items)) return;
        $items = $items['menu'];
        $menu = '<ul class="submenu">';
        foreach($items as $key=>$item) {
            $menu .= ($key==$sel) ? '<li class="selected">' : '<li>';
            $menu .= '<a href="'.$item['url'].'" >'.$item['label'].'</a>'.'</li>';
        }
        $menu .= '</ul>';
        return $menu;
    }
}

/* End of file navigation_helper.php */
/* Location: ./system/helpers/navigation_helper.php */