<?php
/**
 *  Created by protoc-gen-php: 
 *  Description:
 **/
namespace ts;
require_once __DIR__ . '/head.proto.php';
require_once __DIR__ . '/client.proto.php';


// message ts.GetCRS
class GetCRS extends \PBMessage{

    public $name = 'ts.GetCRS';

        public $fields = array(
              1 => 'ts\ServiceHead',
              2 => 'ts\ClientInfo',
      );
       public $values = array(
                1 => '',
                2 => '',
      );
       public $fields_name = array(
                1 => 'head',
                2 => 'clientinfo',
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

      function clientinfo()
      {
          return $this->_get_value(2);
      }

      function set_clientinfo($value)
      {
          $this->_set_value(2, $value);
          return $this;
      }
}

// message ts.GetCRSAns
class GetCRSAns extends \PBMessage{

    public $name = 'ts.GetCRSAns';

        public $fields = array(
              1 => 'ts\ServiceHead',
              2 => 'ts\ClientInfo',
      );
       public $values = array(
                1 => '',
                2 => array(),
      );
       public $fields_name = array(
                1 => 'head',
                2 => 'client_list',
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

      function client_list($offset)
      {
          return $this->_get_arr_value(2, $offset);
      }

      function set_client_list($index, $value)
      {
          $this->_set_arr_value(2, $index, $value);
          return $this;
      }

      function client_list_size()
      {
          return $this->_get_arr_size(2);
      }
}