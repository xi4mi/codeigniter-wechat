<?php
/**
 *  Created by protoc-gen-php: 
 *  Description:
 **/
namespace ts;
require_once __DIR__ . '/head.proto.php';
require_once __DIR__ . '/product.proto.php';
require_once __DIR__ . '/client.proto.php';


// message ts.Provide
class Provide extends \PBMessage{

    public $name = 'ts.Provide';

        public $fields = array(
              1 => 'ts\ServiceHead',
              2 => 'ts\ProductInfo',
              3 => 'ts\ClientInfo',
      );
       public $values = array(
                1 => '',
                2 => '',
                3 => '',
      );
       public $fields_name = array(
                1 => 'head',
                2 => 'product',
                3 => 'client',
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

      function product()
      {
          return $this->_get_value(2);
      }

      function set_product($value)
      {
          $this->_set_value(2, $value);
          return $this;
      }

      function client()
      {
          return $this->_get_value(3);
      }

      function set_client($value)
      {
          $this->_set_value(3, $value);
          return $this;
      }
}

// message ts.ProvideAns
class ProvideAns extends \PBMessage{

    public $name = 'ts.ProvideAns';

        public $fields = array(
              1 => 'ts\ServiceHead',
              2 => 'ts\ProductInfo',
              3 => 'ts\ClientInfo',
      );
       public $values = array(
                1 => '',
                2 => '',
                3 => '',
      );
       public $fields_name = array(
                1 => 'head',
                2 => 'product',
                3 => 'client',
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

      function product()
      {
          return $this->_get_value(2);
      }

      function set_product($value)
      {
          $this->_set_value(2, $value);
          return $this;
      }

      function client()
      {
          return $this->_get_value(3);
      }

      function set_client($value)
      {
          $this->_set_value(3, $value);
          return $this;
      }
}

// message ts.GetOrderList
class GetOrderList extends \PBMessage{

    public $name = 'ts.GetOrderList';

        public $fields = array(
              1 => 'ts\ServiceHead',
              2 => 'PBBytes',
              3 => 'PBInt',
      );
       public $values = array(
                1 => '',
                2 => '',
                3 => array(),
      );
       public $fields_name = array(
                1 => 'head',
                2 => 'top_dealerid',
                3 => 'producttmpid',
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

      function top_dealerid()
      {
          return $this->_get_value(2);
      }

      function set_top_dealerid($value)
      {
          $this->_set_value(2, $value);
          return $this;
      }

      function producttmpid($offset)
      {
          return $this->_get_arr_value(3, $offset);
      }

      function set_producttmpid($index, $value)
      {
          $this->_set_arr_value(3, $index, $value);
          return $this;
      }

      function producttmpid_size()
      {
          return $this->_get_arr_size(3);
      }
}

// message ts.GetOrderListAns
class GetOrderListAns extends \PBMessage{

    public $name = 'ts.GetOrderListAns';

        public $fields = array(
              1 => 'ts\ServiceHead',
              2 => 'PBInt',
              3 => 'ts\AcceptedOrder',
      );
       public $values = array(
                1 => '',
                2 => '',
                3 => array(),
      );
       public $fields_name = array(
                1 => 'head',
                2 => 'ordernum',
                3 => 'orderlist',
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

      function ordernum()
      {
          return $this->_get_value(2);
      }

      function set_ordernum($value)
      {
          $this->_set_value(2, $value);
          return $this;
      }

      function orderlist($offset)
      {
          return $this->_get_arr_value(3, $offset);
      }

      function set_orderlist($index, $value)
      {
          $this->_set_arr_value(3, $index, $value);
          return $this;
      }

      function orderlist_size()
      {
          return $this->_get_arr_size(3);
      }
}