<?php
/**
 *  Created by protoc-gen-php: 
 *  Description:
 **/
namespace ts;


// message ts.ClientInfo
class ClientInfo extends \PBMessage{

    public $name = 'ts.ClientInfo';

        public $fields = array(
              1 => 'PBBytes',
              2 => 'PBBytes',
              3 => 'PBBytes',
              4 => 'PBBytes',
              5 => 'PBInt',
              6 => 'PBBytes',
              7 => 'PBInt',
      );
       public $values = array(
                1 => '',
                2 => '',
                3 => '',
                4 => '',
                5 => '',
                6 => '',
                7 => '',
      );
       public $fields_name = array(
                1 => 'clientid',
                2 => 'acctid',
                3 => 'fatherid',
                4 => 'topid',
                5 => 'status',
                6 => 'group',
                7 => 'level',
      );
      public function __construct($reader = null) {
          parent::__construct($reader);
      }

      function clientid()
      {
          return $this->_get_value(1);
      }

      function set_clientid($value)
      {
          $this->_set_value(1, $value);
          return $this;
      }

      function acctid()
      {
          return $this->_get_value(2);
      }

      function set_acctid($value)
      {
          $this->_set_value(2, $value);
          return $this;
      }

      function fatherid()
      {
          return $this->_get_value(3);
      }

      function set_fatherid($value)
      {
          $this->_set_value(3, $value);
          return $this;
      }

      function topid()
      {
          return $this->_get_value(4);
      }

      function set_topid($value)
      {
          $this->_set_value(4, $value);
          return $this;
      }

      function status()
      {
          return $this->_get_value(5);
      }

      function set_status($value)
      {
          $this->_set_value(5, $value);
          return $this;
      }

      function group()
      {
          return $this->_get_value(6);
      }

      function set_group($value)
      {
          $this->_set_value(6, $value);
          return $this;
      }

      function level()
      {
          return $this->_get_value(7);
      }

      function set_level($value)
      {
          $this->_set_value(7, $value);
          return $this;
      }
}

// message ts.ClientList
class ClientList extends \PBMessage{

    public $name = 'ts.ClientList';

        public $fields = array(
              1 => 'PBInt',
              2 => 'ts\ClientInfo',
      );
       public $values = array(
                1 => '',
                2 => array(),
      );
       public $fields_name = array(
                1 => 'num',
                2 => 'client',
      );
      public function __construct($reader = null) {
          parent::__construct($reader);
      }

      function num()
      {
          return $this->_get_value(1);
      }

      function set_num($value)
      {
          $this->_set_value(1, $value);
          return $this;
      }

      function client($offset)
      {
          return $this->_get_arr_value(2, $offset);
      }

      function set_client($index, $value)
      {
          $this->_set_arr_value(2, $index, $value);
          return $this;
      }

      function client_size()
      {
          return $this->_get_arr_size(2);
      }
}