<?php
/**
 *  Created by protoc-gen-php: 
 *  Description:
 **/
namespace ts;
require_once __DIR__ . '/client.proto.php';
require_once __DIR__ . '/pay.proto.php';
require_once __DIR__ . '/product.proto.php';


// message ts.Order
class Order extends \PBMessage{

    public $name = 'ts.Order';

        public $fields = array(
              1 => 'PBBytes',
              2 => 'PBBytes',
              3 => 'PBBytes',
              4 => 'PBBytes',
              5 => 'ts\ClientInfo',
              6 => 'ts\PayInfo',
              7 => 'ts\ProductInfo',
              8 => 'ts\ProfitInfo',
              9 => 'PBBytes',
              10 => 'PBBytes',
              11 => 'PBBytes',
              12 => 'PBBytes',
              13 => 'PBInt',
              14 => 'PBBytes',
      );
       public $values = array(
                1 => '',
                2 => '',
                3 => '',
                4 => '',
                5 => '',
                6 => '',
                7 => '',
                8 => '',
                9 => '',
                10 => '',
                11 => '',
                12 => '',
                13 => '',
                14 => '',
      );
       public $fields_name = array(
                1 => 'orderid',
                2 => 'status',
                3 => 'type',
                4 => 'out_orderid',
                5 => 'client',
                6 => 'pay',
                7 => 'product',
                8 => 'profit',
                9 => 'content',
                10 => 'extend1',
                11 => 'extend2',
                12 => 'extend3',
                13 => 'resultcode',
                14 => 'resultinfo',
      );
      public function __construct($reader = null) {
          parent::__construct($reader);
      }

      function orderid()
      {
          return $this->_get_value(1);
      }

      function set_orderid($value)
      {
          $this->_set_value(1, $value);
          return $this;
      }

      function status()
      {
          return $this->_get_value(2);
      }

      function set_status($value)
      {
          $this->_set_value(2, $value);
          return $this;
      }

      function type()
      {
          return $this->_get_value(3);
      }

      function set_type($value)
      {
          $this->_set_value(3, $value);
          return $this;
      }

      function out_orderid()
      {
          return $this->_get_value(4);
      }

      function set_out_orderid($value)
      {
          $this->_set_value(4, $value);
          return $this;
      }

      function client()
      {
          return $this->_get_value(5);
      }

      function set_client($value)
      {
          $this->_set_value(5, $value);
          return $this;
      }

      function pay()
      {
          return $this->_get_value(6);
      }

      function set_pay($value)
      {
          $this->_set_value(6, $value);
          return $this;
      }

      function product()
      {
          return $this->_get_value(7);
      }

      function set_product($value)
      {
          $this->_set_value(7, $value);
          return $this;
      }

      function profit()
      {
          return $this->_get_value(8);
      }

      function set_profit($value)
      {
          $this->_set_value(8, $value);
          return $this;
      }

      function content()
      {
          return $this->_get_value(9);
      }

      function set_content($value)
      {
          $this->_set_value(9, $value);
          return $this;
      }

      function extend1()
      {
          return $this->_get_value(10);
      }

      function set_extend1($value)
      {
          $this->_set_value(10, $value);
          return $this;
      }

      function extend2()
      {
          return $this->_get_value(11);
      }

      function set_extend2($value)
      {
          $this->_set_value(11, $value);
          return $this;
      }

      function extend3()
      {
          return $this->_get_value(12);
      }

      function set_extend3($value)
      {
          $this->_set_value(12, $value);
          return $this;
      }

      function resultcode()
      {
          return $this->_get_value(13);
      }

      function set_resultcode($value)
      {
          $this->_set_value(13, $value);
          return $this;
      }

      function resultinfo()
      {
          return $this->_get_value(14);
      }

      function set_resultinfo($value)
      {
          $this->_set_value(14, $value);
          return $this;
      }
}