<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CI_Cart
 * --------------------------------------
 * Author       : xiehai
 * Contact      : 50083000@qq.com
 *
 */
class MY_Cart extends CI_Cart {

    private $modify_option;

    function __construct() {
        parent::__construct();
    }
    //单个修改options其中某项值
    //$item = array(
    //    'rowid' => $item['rowid'],
    //    'modify_option' => $modify_option_value
    //);
    function modify($items = array()) {

        if (!is_array($items) OR count($items) == 0) {
            return FALSE;
        }

        //修改项的KEY值
        $this->modify_option = key(array_slice($items, -1, 1, true));
        $save_cart = FALSE;
        if (isset($items['rowid']) AND isset($items[$this->modify_option])) {
            if ($this->_modify($items) == TRUE) {
                $save_cart = TRUE;
            }
        }
        // Save the cart data if the insert was successful
        if ($save_cart == TRUE) {
            $this->_save_cart();
            return TRUE;
        }
        return FALSE;
    }
    function _modify($items = array()) {
        //判断存在
        if (!isset($items['rowid']) OR !isset($this->_cart_contents[$items['rowid']])
            OR !isset($this->_cart_contents[$items['rowid']]['options'][$this->modify_option])) {
            return FALSE;
        }
        //判断是否和原来一样
        if ($this->_cart_contents[$items['rowid']]['options'][$this->modify_option]
            == $items[$this->modify_option]) {
            return FALSE;
        }
        $this->_cart_contents[$items['rowid']]['options'][$this->modify_option]
            = $items[$this->modify_option];
        return TRUE;
    }
}

