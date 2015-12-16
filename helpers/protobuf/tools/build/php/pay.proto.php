<?php
/**
 *  Created by protoc-gen-php: 
 *  Description:
 **/
namespace ts;


// message ts.PayInfo
class PayInfo extends \PBMessage{

    public $name = 'ts.PayInfo';

        public $fields = array(
              1 => 'PBInt',
              2 => 'PBInt',
              3 => 'PBInt',
              4 => 'PBInt',
              5 => 'PBBytes',
              6 => 'PBBytes',
              7 => 'PBBytes',
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
                1 => 'paytype',
                2 => 'channel',
                3 => 'tranamt',
                4 => 'remainamt',
                5 => 'remark',
                6 => 'subcmd',
                7 => 'userid',
      );
      public function __construct($reader = null) {
          parent::__construct($reader);
      }

      function paytype()
      {
          return $this->_get_value(1);
      }

      function set_paytype($value)
      {
          $this->_set_value(1, $value);
          return $this;
      }

      function channel()
      {
          return $this->_get_value(2);
      }

      function set_channel($value)
      {
          $this->_set_value(2, $value);
          return $this;
      }

      function tranamt()
      {
          return $this->_get_value(3);
      }

      function set_tranamt($value)
      {
          $this->_set_value(3, $value);
          return $this;
      }

      function remainamt()
      {
          return $this->_get_value(4);
      }

      function set_remainamt($value)
      {
          $this->_set_value(4, $value);
          return $this;
      }

      function remark()
      {
          return $this->_get_value(5);
      }

      function set_remark($value)
      {
          $this->_set_value(5, $value);
          return $this;
      }

      function subcmd()
      {
          return $this->_get_value(6);
      }

      function set_subcmd($value)
      {
          $this->_set_value(6, $value);
          return $this;
      }

      function userid()
      {
          return $this->_get_value(7);
      }

      function set_userid($value)
      {
          $this->_set_value(7, $value);
          return $this;
      }
}

// message ts.Price
class Price extends \PBMessage{

    public $name = 'ts.Price';

        public $fields = array(
              1 => 'PBBytes',
              2 => 'PBInt',
              3 => 'PBBytes',
              4 => 'PBInt',
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
                1 => 'dealer',
                2 => 'amt',
                3 => 'acctid',
                4 => 'channel',
                5 => 'secretprice',
                6 => 'ruleid',
                7 => 'profit',
      );
      public function __construct($reader = null) {
          parent::__construct($reader);
      }

      function dealer()
      {
          return $this->_get_value(1);
      }

      function set_dealer($value)
      {
          $this->_set_value(1, $value);
          return $this;
      }

      function amt()
      {
          return $this->_get_value(2);
      }

      function set_amt($value)
      {
          $this->_set_value(2, $value);
          return $this;
      }

      function acctid()
      {
          return $this->_get_value(3);
      }

      function set_acctid($value)
      {
          $this->_set_value(3, $value);
          return $this;
      }

      function channel()
      {
          return $this->_get_value(4);
      }

      function set_channel($value)
      {
          $this->_set_value(4, $value);
          return $this;
      }

      function secretprice()
      {
          return $this->_get_value(5);
      }

      function set_secretprice($value)
      {
          $this->_set_value(5, $value);
          return $this;
      }

      function ruleid()
      {
          return $this->_get_value(6);
      }

      function set_ruleid($value)
      {
          $this->_set_value(6, $value);
          return $this;
      }

      function profit()
      {
          return $this->_get_value(7);
      }

      function set_profit($value)
      {
          $this->_set_value(7, $value);
          return $this;
      }
}

// message ts.Profit
class Profit extends \PBMessage{

    public $name = 'ts.Profit';

        public $fields = array(
              1 => 'PBBytes',
              2 => 'PBBytes',
              3 => 'PBInt',
              4 => 'PBInt',
              5 => 'PBInt',
              6 => 'PBInt',
              7 => 'PBBytes',
              8 => 'PBBytes',
              9 => 'PBBytes',
              10 => 'PBInt',
              11 => 'PBInt',
              12 => 'PBInt',
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
      );
       public $fields_name = array(
                1 => 'dealer',
                2 => 'acctid',
                3 => 'saleamt',
                4 => 'profit',
                5 => 'shouldpay',
                6 => 'scrtprice',
                7 => 'ruleid',
                8 => 'param',
                9 => 'groupid',
                10 => 'uniprice',
                11 => 'num',
                12 => 'level',
      );
      public function __construct($reader = null) {
          parent::__construct($reader);
      }

      function dealer()
      {
          return $this->_get_value(1);
      }

      function set_dealer($value)
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

      function saleamt()
      {
          return $this->_get_value(3);
      }

      function set_saleamt($value)
      {
          $this->_set_value(3, $value);
          return $this;
      }

      function profit()
      {
          return $this->_get_value(4);
      }

      function set_profit($value)
      {
          $this->_set_value(4, $value);
          return $this;
      }

      function shouldpay()
      {
          return $this->_get_value(5);
      }

      function set_shouldpay($value)
      {
          $this->_set_value(5, $value);
          return $this;
      }

      function scrtprice()
      {
          return $this->_get_value(6);
      }

      function set_scrtprice($value)
      {
          $this->_set_value(6, $value);
          return $this;
      }

      function ruleid()
      {
          return $this->_get_value(7);
      }

      function set_ruleid($value)
      {
          $this->_set_value(7, $value);
          return $this;
      }

      function param()
      {
          return $this->_get_value(8);
      }

      function set_param($value)
      {
          $this->_set_value(8, $value);
          return $this;
      }

      function groupid()
      {
          return $this->_get_value(9);
      }

      function set_groupid($value)
      {
          $this->_set_value(9, $value);
          return $this;
      }

      function uniprice()
      {
          return $this->_get_value(10);
      }

      function set_uniprice($value)
      {
          $this->_set_value(10, $value);
          return $this;
      }

      function num()
      {
          return $this->_get_value(11);
      }

      function set_num($value)
      {
          $this->_set_value(11, $value);
          return $this;
      }

      function level()
      {
          return $this->_get_value(12);
      }

      function set_level($value)
      {
          $this->_set_value(12, $value);
          return $this;
      }
}

// message ts.ProfitInfo
class ProfitInfo extends \PBMessage{

    public $name = 'ts.ProfitInfo';

        public $fields = array(
              1 => 'PBBytes',
              2 => 'PBInt',
              3 => 'PBInt',
              4 => 'PBInt',
              5 => 'ts\Profit',
      );
       public $values = array(
                1 => '',
                2 => '',
                3 => '',
                4 => '',
                5 => array(),
      );
       public $fields_name = array(
                1 => 'productid',
                2 => 'srcamt',
                3 => 'saleamt',
                4 => 'totalprofit',
                5 => 'profitlist',
      );
      public function __construct($reader = null) {
          parent::__construct($reader);
      }

      function productid()
      {
          return $this->_get_value(1);
      }

      function set_productid($value)
      {
          $this->_set_value(1, $value);
          return $this;
      }

      function srcamt()
      {
          return $this->_get_value(2);
      }

      function set_srcamt($value)
      {
          $this->_set_value(2, $value);
          return $this;
      }

      function saleamt()
      {
          return $this->_get_value(3);
      }

      function set_saleamt($value)
      {
          $this->_set_value(3, $value);
          return $this;
      }

      function totalprofit()
      {
          return $this->_get_value(4);
      }

      function set_totalprofit($value)
      {
          $this->_set_value(4, $value);
          return $this;
      }

      function profitlist($offset)
      {
          return $this->_get_arr_value(5, $offset);
      }

      function set_profitlist($index, $value)
      {
          $this->_set_arr_value(5, $index, $value);
          return $this;
      }

      function profitlist_size()
      {
          return $this->_get_arr_size(5);
      }
}

// message ts.SubAcctInfo
class SubAcctInfo extends \PBMessage{

    public $name = 'ts.SubAcctInfo';

        public $fields = array(
              1 => 'PBBytes',
              2 => 'PBInt',
              3 => 'PBInt',
      );
       public $values = array(
                1 => '',
                2 => '',
                3 => '',
      );
       public $fields_name = array(
                1 => 'subacctid',
                2 => 'amt',
                3 => 'status',
      );
      public function __construct($reader = null) {
          parent::__construct($reader);
      }

      function subacctid()
      {
          return $this->_get_value(1);
      }

      function set_subacctid($value)
      {
          $this->_set_value(1, $value);
          return $this;
      }

      function amt()
      {
          return $this->_get_value(2);
      }

      function set_amt($value)
      {
          $this->_set_value(2, $value);
          return $this;
      }

      function status()
      {
          return $this->_get_value(3);
      }

      function set_status($value)
      {
          $this->_set_value(3, $value);
          return $this;
      }
}

// message ts.AcctInfo
class AcctInfo extends \PBMessage{

    public $name = 'ts.AcctInfo';

        public $fields = array(
              1 => 'PBBytes',
              2 => 'PBBytes',
              3 => 'ts\SubAcctInfo',
      );
       public $values = array(
                1 => '',
                2 => '',
                3 => array(),
      );
       public $fields_name = array(
                1 => 'acctid',
                2 => 'dealid',
                3 => 'subacct',
      );
      public function __construct($reader = null) {
          parent::__construct($reader);
      }

      function acctid()
      {
          return $this->_get_value(1);
      }

      function set_acctid($value)
      {
          $this->_set_value(1, $value);
          return $this;
      }

      function dealid()
      {
          return $this->_get_value(2);
      }

      function set_dealid($value)
      {
          $this->_set_value(2, $value);
          return $this;
      }

      function subacct($offset)
      {
          return $this->_get_arr_value(3, $offset);
      }

      function set_subacct($index, $value)
      {
          $this->_set_arr_value(3, $index, $value);
          return $this;
      }

      function subacct_size()
      {
          return $this->_get_arr_size(3);
      }
}