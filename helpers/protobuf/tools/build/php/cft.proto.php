<?php
/**
 *  Created by protoc-gen-php: 
 *  Description:
 **/
namespace ts;


// message ts.CFTInfo
class CFTInfo extends \PBMessage{

    public $name = 'ts.CFTInfo';

        public $fields = array(
              1 => 'PBBytes',
              2 => 'PBBytes',
              3 => 'PBInt',
              4 => 'PBBytes',
      );
       public $values = array(
                1 => '',
                2 => '',
                3 => '',
                4 => '',
      );
       public $fields_name = array(
                1 => 'cftacctid',
                2 => 'cftacctname',
                3 => 'payamt',
                4 => 'remark',
      );
      public function __construct($reader = null) {
          parent::__construct($reader);
      }

      function cftacctid()
      {
          return $this->_get_value(1);
      }

      function set_cftacctid($value)
      {
          $this->_set_value(1, $value);
          return $this;
      }

      function cftacctname()
      {
          return $this->_get_value(2);
      }

      function set_cftacctname($value)
      {
          $this->_set_value(2, $value);
          return $this;
      }

      function payamt()
      {
          return $this->_get_value(3);
      }

      function set_payamt($value)
      {
          $this->_set_value(3, $value);
          return $this;
      }

      function remark()
      {
          return $this->_get_value(4);
      }

      function set_remark($value)
      {
          $this->_set_value(4, $value);
          return $this;
      }
}