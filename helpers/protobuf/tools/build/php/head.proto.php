<?php
/**
 *  Created by protoc-gen-php: 
 *  Description:
 **/
namespace ts;


// message ts.ServiceHead
class ServiceHead extends \PBMessage{

    public $name = 'ts.ServiceHead';

        public $fields = array(
              1 => 'PBBytes',
              2 => 'PBBytes',
              3 => 'PBBytes',
              4 => 'PBBytes',
              5 => 'PBBytes',
              6 => 'PBInt',
              7 => 'PBBytes',
              8 => 'PBInt',
              9 => 'PBBytes',
              10 => 'PBInt',
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
      );
       public $fields_name = array(
                1 => 'cmdcode',
                2 => 'seq',
                3 => 'subcmd',
                4 => 'portalseq',
                5 => 'trantime',
                6 => 'resultcode',
                7 => 'resultinfo',
                8 => 'errorcode',
                9 => 'errinfo',
                10 => 'sessionid',
      );
      public function __construct($reader = null) {
          parent::__construct($reader);
      }

      function cmdcode()
      {
          return $this->_get_value(1);
      }

      function set_cmdcode($value)
      {
          $this->_set_value(1, $value);
          return $this;
      }

      function seq()
      {
          return $this->_get_value(2);
      }

      function set_seq($value)
      {
          $this->_set_value(2, $value);
          return $this;
      }

      function subcmd()
      {
          return $this->_get_value(3);
      }

      function set_subcmd($value)
      {
          $this->_set_value(3, $value);
          return $this;
      }

      function portalseq()
      {
          return $this->_get_value(4);
      }

      function set_portalseq($value)
      {
          $this->_set_value(4, $value);
          return $this;
      }

      function trantime()
      {
          return $this->_get_value(5);
      }

      function set_trantime($value)
      {
          $this->_set_value(5, $value);
          return $this;
      }

      function resultcode()
      {
          return $this->_get_value(6);
      }

      function set_resultcode($value)
      {
          $this->_set_value(6, $value);
          return $this;
      }

      function resultinfo()
      {
          return $this->_get_value(7);
      }

      function set_resultinfo($value)
      {
          $this->_set_value(7, $value);
          return $this;
      }

      function errorcode()
      {
          return $this->_get_value(8);
      }

      function set_errorcode($value)
      {
          $this->_set_value(8, $value);
          return $this;
      }

      function errinfo()
      {
          return $this->_get_value(9);
      }

      function set_errinfo($value)
      {
          $this->_set_value(9, $value);
          return $this;
      }

      function sessionid()
      {
          return $this->_get_value(10);
      }

      function set_sessionid($value)
      {
          $this->_set_value(10, $value);
          return $this;
      }
}