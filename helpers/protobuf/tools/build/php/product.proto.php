<?php
/**
 *  Created by protoc-gen-php: 
 *  Description:
 **/
namespace ts;


// message ts.ProductParam
class ProductParam extends \PBMessage{

    public $name = 'ts.ProductParam';

        public $fields = array(
              1 => 'PBBytes',
              2 => 'PBBytes',
      );
       public $values = array(
                1 => '',
                2 => '',
      );
       public $fields_name = array(
                1 => 'key',
                2 => 'value',
      );
      public function __construct($reader = null) {
          parent::__construct($reader);
      }

      function key()
      {
          return $this->_get_value(1);
      }

      function set_key($value)
      {
          $this->_set_value(1, $value);
          return $this;
      }

      function value()
      {
          return $this->_get_value(2);
      }

      function set_value($value)
      {
          $this->_set_value(2, $value);
          return $this;
      }
}

// message ts.StorageInfo
class StorageInfo extends \PBMessage{

    public $name = 'ts.StorageInfo';

        public $fields = array(
              1 => 'PBInt',
              2 => 'PBBytes',
              3 => 'PBInt',
              4 => 'PBBytes',
              5 => 'PBBytes',
              6 => 'PBBytes',
              7 => 'PBBytes',
              8 => 'PBBytes',
              9 => 'PBBytes',
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
      );
       public $fields_name = array(
                1 => 'storagetype',
                2 => 'supplyerid',
                3 => 'storageid',
                4 => 'esalesaccount',
                5 => 'esalespassword',
                6 => 'esalespassword2',
                7 => 'esalesfilepath',
                8 => 'loginuser',
                9 => 'loginpassword',
      );
      public function __construct($reader = null) {
          parent::__construct($reader);
      }

      function storagetype()
      {
          return $this->_get_value(1);
      }

      function set_storagetype($value)
      {
          $this->_set_value(1, $value);
          return $this;
      }

      function supplyerid()
      {
          return $this->_get_value(2);
      }

      function set_supplyerid($value)
      {
          $this->_set_value(2, $value);
          return $this;
      }

      function storageid()
      {
          return $this->_get_value(3);
      }

      function set_storageid($value)
      {
          $this->_set_value(3, $value);
          return $this;
      }

      function esalesaccount()
      {
          return $this->_get_value(4);
      }

      function set_esalesaccount($value)
      {
          $this->_set_value(4, $value);
          return $this;
      }

      function esalespassword()
      {
          return $this->_get_value(5);
      }

      function set_esalespassword($value)
      {
          $this->_set_value(5, $value);
          return $this;
      }

      function esalespassword2()
      {
          return $this->_get_value(6);
      }

      function set_esalespassword2($value)
      {
          $this->_set_value(6, $value);
          return $this;
      }

      function esalesfilepath()
      {
          return $this->_get_value(7);
      }

      function set_esalesfilepath($value)
      {
          $this->_set_value(7, $value);
          return $this;
      }

      function loginuser()
      {
          return $this->_get_value(8);
      }

      function set_loginuser($value)
      {
          $this->_set_value(8, $value);
          return $this;
      }

      function loginpassword()
      {
          return $this->_get_value(9);
      }

      function set_loginpassword($value)
      {
          $this->_set_value(9, $value);
          return $this;
      }
}

// message ts.ProductInfo
class ProductInfo extends \PBMessage{

    public $name = 'ts.ProductInfo';

        public $fields = array(
              1 => 'PBBytes',
              2 => 'PBBytes',
              3 => 'PBInt',
              4 => 'PBInt',
              5 => 'PBBytes',
              6 => 'PBInt',
              7 => 'PBInt',
              8 => 'PBBytes',
              9 => 'PBBytes',
              10 => 'PBBytes',
              11 => 'PBBytes',
              12 => 'PBBytes',
              13 => 'PBBytes',
              14 => 'PBBytes',
              15 => 'PBBytes',
              16 => 'PBBytes',
              17 => 'ts\ProductParam',
              18 => 'ts\StorageInfo',
              19 => 'PBInt',
              20 => 'PBBytes',
              21 => 'PBBytes',
              22 => 'PBBytes',
              23 => 'PBBytes',
              24 => 'PBInt',
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
                15 => '',
                16 => '',
                17 => array(),
                18 => array(),
                19 => '',
                20 => '',
                21 => '',
                22 => '',
                23 => '',
                24 => '',
      );
       public $fields_name = array(
                1 => 'productid',
                2 => 'playerid',
                3 => 'productnum',
                4 => 'defaultvalue',
                5 => 'providerid',
                6 => 'salerprovince',
                7 => 'producttmpid',
                8 => 'accounttype',
                9 => 'consumemode',
                10 => 'gameid',
                11 => 'gamename',
                12 => 'area',
                13 => 'server',
                14 => 'roleaccount',
                15 => 'rolepassword',
                16 => 'bindipaddress',
                17 => 'productparamlist',
                18 => 'storageinfolist',
                19 => 'storagelistpoint',
                20 => 'submittime',
                21 => 'tradetime',
                22 => 'deadlinetime',
                23 => 'userip',
                24 => 'providemode',
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

      function playerid()
      {
          return $this->_get_value(2);
      }

      function set_playerid($value)
      {
          $this->_set_value(2, $value);
          return $this;
      }

      function productnum()
      {
          return $this->_get_value(3);
      }

      function set_productnum($value)
      {
          $this->_set_value(3, $value);
          return $this;
      }

      function defaultvalue()
      {
          return $this->_get_value(4);
      }

      function set_defaultvalue($value)
      {
          $this->_set_value(4, $value);
          return $this;
      }

      function providerid()
      {
          return $this->_get_value(5);
      }

      function set_providerid($value)
      {
          $this->_set_value(5, $value);
          return $this;
      }

      function salerprovince()
      {
          return $this->_get_value(6);
      }

      function set_salerprovince($value)
      {
          $this->_set_value(6, $value);
          return $this;
      }

      function producttmpid()
      {
          return $this->_get_value(7);
      }

      function set_producttmpid($value)
      {
          $this->_set_value(7, $value);
          return $this;
      }

      function accounttype()
      {
          return $this->_get_value(8);
      }

      function set_accounttype($value)
      {
          $this->_set_value(8, $value);
          return $this;
      }

      function consumemode()
      {
          return $this->_get_value(9);
      }

      function set_consumemode($value)
      {
          $this->_set_value(9, $value);
          return $this;
      }

      function gameid()
      {
          return $this->_get_value(10);
      }

      function set_gameid($value)
      {
          $this->_set_value(10, $value);
          return $this;
      }

      function gamename()
      {
          return $this->_get_value(11);
      }

      function set_gamename($value)
      {
          $this->_set_value(11, $value);
          return $this;
      }

      function area()
      {
          return $this->_get_value(12);
      }

      function set_area($value)
      {
          $this->_set_value(12, $value);
          return $this;
      }

      function server()
      {
          return $this->_get_value(13);
      }

      function set_server($value)
      {
          $this->_set_value(13, $value);
          return $this;
      }

      function roleaccount()
      {
          return $this->_get_value(14);
      }

      function set_roleaccount($value)
      {
          $this->_set_value(14, $value);
          return $this;
      }

      function rolepassword()
      {
          return $this->_get_value(15);
      }

      function set_rolepassword($value)
      {
          $this->_set_value(15, $value);
          return $this;
      }

      function bindipaddress()
      {
          return $this->_get_value(16);
      }

      function set_bindipaddress($value)
      {
          $this->_set_value(16, $value);
          return $this;
      }

      function productparamlist($offset)
      {
          return $this->_get_arr_value(17, $offset);
      }

      function set_productparamlist($index, $value)
      {
          $this->_set_arr_value(17, $index, $value);
          return $this;
      }

      function productparamlist_size()
      {
          return $this->_get_arr_size(17);
      }

      function storageinfolist($offset)
      {
          return $this->_get_arr_value(18, $offset);
      }

      function set_storageinfolist($index, $value)
      {
          $this->_set_arr_value(18, $index, $value);
          return $this;
      }

      function storageinfolist_size()
      {
          return $this->_get_arr_size(18);
      }

      function storagelistpoint()
      {
          return $this->_get_value(19);
      }

      function set_storagelistpoint($value)
      {
          $this->_set_value(19, $value);
          return $this;
      }

      function submittime()
      {
          return $this->_get_value(20);
      }

      function set_submittime($value)
      {
          $this->_set_value(20, $value);
          return $this;
      }

      function tradetime()
      {
          return $this->_get_value(21);
      }

      function set_tradetime($value)
      {
          $this->_set_value(21, $value);
          return $this;
      }

      function deadlinetime()
      {
          return $this->_get_value(22);
      }

      function set_deadlinetime($value)
      {
          $this->_set_value(22, $value);
          return $this;
      }

      function userip()
      {
          return $this->_get_value(23);
      }

      function set_userip($value)
      {
          $this->_set_value(23, $value);
          return $this;
      }

      function providemode()
      {
          return $this->_get_value(24);
      }

      function set_providemode($value)
      {
          $this->_set_value(24, $value);
          return $this;
      }
}

// message ts.AcceptedOrder
class AcceptedOrder extends \PBMessage{

    public $name = 'ts.AcceptedOrder';

        public $fields = array(
              1 => 'PBBytes',
              2 => 'PBInt',
              3 => 'PBBytes',
              4 => 'PBInt',
              5 => 'PBBytes',
      );
       public $values = array(
                1 => '',
                2 => '',
                3 => '',
                4 => '',
                5 => '',
      );
       public $fields_name = array(
                1 => 'orderid',
                2 => 'storageid',
                3 => 'playerid',
                4 => 'producttmpid',
                5 => 'esalesaccount',
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

      function storageid()
      {
          return $this->_get_value(2);
      }

      function set_storageid($value)
      {
          $this->_set_value(2, $value);
          return $this;
      }

      function playerid()
      {
          return $this->_get_value(3);
      }

      function set_playerid($value)
      {
          $this->_set_value(3, $value);
          return $this;
      }

      function producttmpid()
      {
          return $this->_get_value(4);
      }

      function set_producttmpid($value)
      {
          $this->_set_value(4, $value);
          return $this;
      }

      function esalesaccount()
      {
          return $this->_get_value(5);
      }

      function set_esalesaccount($value)
      {
          $this->_set_value(5, $value);
          return $this;
      }
}