<?php
/**
 *  Created by protoc-gen-php: 
 *  Description:
 **/
namespace ts;
require_once __DIR__ . '/head.proto.php';
require_once __DIR__ . '/client.proto.php';
require_once __DIR__ . '/product.proto.php';
require_once __DIR__ . '/pay.proto.php';


// message ts.SalePrice
class SalePrice extends \PBMessage{

    public $name = 'ts.SalePrice';

        public $fields = array(
              1 => 'ts\ServiceHead',
              2 => 'ts\ClientInfo',
              3 => 'ts\ProductInfo',
              4 => 'ts\PayInfo',
              5 => 'ts\ClientInfo',
              6 => 'ts\ProfitInfo',
      );
       public $values = array(
                1 => '',
                2 => '',
                3 => '',
                4 => '',
                5 => array(),
                6 => '',
      );
       public $fields_name = array(
                1 => 'head',
                2 => 'client',
                3 => 'product',
                4 => 'payinfo',
                5 => 'client_list',
                6 => 'profitinfo',
      );
      public function __construct($reader = null) {
          parent::__construct($reader);
      }

      function head()
      {
          return $this->_get_value(1);
      }

      function set_head($value)
      {
          $this->_set_value(1, $value);
          return $this;
      }

      function client()
      {
          return $this->_get_value(2);
      }

      function set_client($value)
      {
          $this->_set_value(2, $value);
          return $this;
      }

      function product()
      {
          return $this->_get_value(3);
      }

      function set_product($value)
      {
          $this->_set_value(3, $value);
          return $this;
      }

      function payinfo()
      {
          return $this->_get_value(4);
      }

      function set_payinfo($value)
      {
          $this->_set_value(4, $value);
          return $this;
      }

      function client_list($offset)
      {
          return $this->_get_arr_value(5, $offset);
      }

      function set_client_list($index, $value)
      {
          $this->_set_arr_value(5, $index, $value);
          return $this;
      }

      function client_list_size()
      {
          return $this->_get_arr_size(5);
      }

      function profitinfo()
      {
          return $this->_get_value(6);
      }

      function set_profitinfo($value)
      {
          $this->_set_value(6, $value);
          return $this;
      }
}

// message ts.SalePriceAns
class SalePriceAns extends \PBMessage{

    public $name = 'ts.SalePriceAns';

        public $fields = array(
              1 => 'ts\ServiceHead',
              2 => 'ts\ClientInfo',
              3 => 'ts\ProductInfo',
              4 => 'ts\PayInfo',
              5 => 'ts\ProfitInfo',
      );
       public $values = array(
                1 => '',
                2 => '',
                3 => '',
                4 => '',
                5 => '',
      );
       public $fields_name = array(
                1 => 'head',
                2 => 'client',
                3 => 'product',
                4 => 'payinfo',
                5 => 'profitinfo',
      );
      public function __construct($reader = null) {
          parent::__construct($reader);
      }

      function head()
      {
          return $this->_get_value(1);
      }

      function set_head($value)
      {
          $this->_set_value(1, $value);
          return $this;
      }

      function client()
      {
          return $this->_get_value(2);
      }

      function set_client($value)
      {
          $this->_set_value(2, $value);
          return $this;
      }

      function product()
      {
          return $this->_get_value(3);
      }

      function set_product($value)
      {
          $this->_set_value(3, $value);
          return $this;
      }

      function payinfo()
      {
          return $this->_get_value(4);
      }

      function set_payinfo($value)
      {
          $this->_set_value(4, $value);
          return $this;
      }

      function profitinfo()
      {
          return $this->_get_value(5);
      }

      function set_profitinfo($value)
      {
          $this->_set_value(5, $value);
          return $this;
      }
}