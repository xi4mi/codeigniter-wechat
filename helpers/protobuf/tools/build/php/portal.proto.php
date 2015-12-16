<?php
/**
 *  Created by protoc-gen-php: 
 *  Description:
 **/
namespace ts;
require_once __DIR__ . '/head.proto.php';
require_once __DIR__ . '/client.proto.php';
require_once __DIR__ . '/pay.proto.php';
require_once __DIR__ . '/product.proto.php';
require_once __DIR__ . '/cft.proto.php';


// message ts.QueryAmt
class QueryAmt extends \PBMessage{

    public $name = 'ts.QueryAmt';

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
                2 => 'client',
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

// message ts.QueryAmtAns
class QueryAmtAns extends \PBMessage{

    public $name = 'ts.QueryAmtAns';

        public $fields = array(
              1 => 'ts\ServiceHead',
              2 => 'ts\ClientInfo',
              3 => 'ts\AcctInfo',
      );
       public $values = array(
                1 => '',
                2 => array(),
                3 => array(),
      );
       public $fields_name = array(
                1 => 'head',
                2 => 'client',
                3 => 'acct',
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

      function acct($offset)
      {
          return $this->_get_arr_value(3, $offset);
      }

      function set_acct($index, $value)
      {
          $this->_set_arr_value(3, $index, $value);
          return $this;
      }

      function acct_size()
      {
          return $this->_get_arr_size(3);
      }
}

// message ts.Charge
class Charge extends \PBMessage{

    public $name = 'ts.Charge';

        public $fields = array(
              1 => 'ts\ServiceHead',
              2 => 'ts\ClientInfo',
              3 => 'ts\PayInfo',
      );
       public $values = array(
                1 => '',
                2 => '',
                3 => '',
      );
       public $fields_name = array(
                1 => 'head',
                2 => 'client',
                3 => 'pay',
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

      function pay()
      {
          return $this->_get_value(3);
      }

      function set_pay($value)
      {
          $this->_set_value(3, $value);
          return $this;
      }
}

// message ts.ChargeAns
class ChargeAns extends \PBMessage{

    public $name = 'ts.ChargeAns';

        public $fields = array(
              1 => 'ts\ServiceHead',
              2 => 'ts\ClientInfo',
              3 => 'ts\PayInfo',
      );
       public $values = array(
                1 => '',
                2 => '',
                3 => '',
      );
       public $fields_name = array(
                1 => 'head',
                2 => 'client',
                3 => 'pay',
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

      function pay()
      {
          return $this->_get_value(3);
      }

      function set_pay($value)
      {
          $this->_set_value(3, $value);
          return $this;
      }
}

// message ts.CFTCharge
class CFTCharge extends \PBMessage{

    public $name = 'ts.CFTCharge';

        public $fields = array(
              1 => 'ts\ServiceHead',
              2 => 'PBBytes',
              3 => 'ts\ClientInfo',
              4 => 'ts\PayInfo',
              5 => 'ts\ProductInfo',
              6 => 'PBBytes',
              7 => 'PBBytes',
              8 => 'PBBytes',
              9 => 'PBBytes',
              10 => 'PBBytes',
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
                1 => 'head',
                2 => 'type',
                3 => 'client',
                4 => 'pay',
                5 => 'product',
                6 => 'content',
                7 => 'orderid',
                8 => 'out_orderid',
                9 => 'token',
                10 => 'status',
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

      function type()
      {
          return $this->_get_value(2);
      }

      function set_type($value)
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

      function pay()
      {
          return $this->_get_value(4);
      }

      function set_pay($value)
      {
          $this->_set_value(4, $value);
          return $this;
      }

      function product()
      {
          return $this->_get_value(5);
      }

      function set_product($value)
      {
          $this->_set_value(5, $value);
          return $this;
      }

      function content()
      {
          return $this->_get_value(6);
      }

      function set_content($value)
      {
          $this->_set_value(6, $value);
          return $this;
      }

      function orderid()
      {
          return $this->_get_value(7);
      }

      function set_orderid($value)
      {
          $this->_set_value(7, $value);
          return $this;
      }

      function out_orderid()
      {
          return $this->_get_value(8);
      }

      function set_out_orderid($value)
      {
          $this->_set_value(8, $value);
          return $this;
      }

      function token()
      {
          return $this->_get_value(9);
      }

      function set_token($value)
      {
          $this->_set_value(9, $value);
          return $this;
      }

      function status()
      {
          return $this->_get_value(10);
      }

      function set_status($value)
      {
          $this->_set_value(10, $value);
          return $this;
      }
}

// message ts.CFTChargeAns
class CFTChargeAns extends \PBMessage{

    public $name = 'ts.CFTChargeAns';

        public $fields = array(
              1 => 'ts\ServiceHead',
              2 => 'PBBytes',
              3 => 'ts\ClientInfo',
              4 => 'ts\PayInfo',
              5 => 'ts\ProductInfo',
              6 => 'PBBytes',
              7 => 'PBBytes',
              8 => 'PBBytes',
              9 => 'PBBytes',
              10 => 'PBBytes',
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
                1 => 'head',
                2 => 'type',
                3 => 'client',
                4 => 'pay',
                5 => 'product',
                6 => 'content',
                7 => 'orderid',
                8 => 'out_orderid',
                9 => 'token',
                10 => 'status',
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

      function type()
      {
          return $this->_get_value(2);
      }

      function set_type($value)
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

      function pay()
      {
          return $this->_get_value(4);
      }

      function set_pay($value)
      {
          $this->_set_value(4, $value);
          return $this;
      }

      function product()
      {
          return $this->_get_value(5);
      }

      function set_product($value)
      {
          $this->_set_value(5, $value);
          return $this;
      }

      function content()
      {
          return $this->_get_value(6);
      }

      function set_content($value)
      {
          $this->_set_value(6, $value);
          return $this;
      }

      function orderid()
      {
          return $this->_get_value(7);
      }

      function set_orderid($value)
      {
          $this->_set_value(7, $value);
          return $this;
      }

      function out_orderid()
      {
          return $this->_get_value(8);
      }

      function set_out_orderid($value)
      {
          $this->_set_value(8, $value);
          return $this;
      }

      function token()
      {
          return $this->_get_value(9);
      }

      function set_token($value)
      {
          $this->_set_value(9, $value);
          return $this;
      }

      function status()
      {
          return $this->_get_value(10);
      }

      function set_status($value)
      {
          $this->_set_value(10, $value);
          return $this;
      }
}

// message ts.Pay
class Pay extends \PBMessage{

    public $name = 'ts.Pay';

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

// message ts.PayAns
class PayAns extends \PBMessage{

    public $name = 'ts.PayAns';

        public $fields = array(
              1 => 'ts\ServiceHead',
              2 => 'ts\ClientInfo',
              3 => 'ts\ProductInfo',
              4 => 'ts\PayInfo',
      );
       public $values = array(
                1 => '',
                2 => '',
                3 => '',
                4 => '',
      );
       public $fields_name = array(
                1 => 'head',
                2 => 'client',
                3 => 'product',
                4 => 'payinfo',
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
}

// message ts.TSupPay
class TSupPay extends \PBMessage{

    public $name = 'ts.TSupPay';

        public $fields = array(
              1 => 'ts\ServiceHead',
              2 => 'ts\ClientInfo',
              3 => 'ts\ProductInfo',
              4 => 'ts\ProductInfo',
              5 => 'ts\PayInfo',
              6 => 'ts\ProfitInfo',
      );
       public $values = array(
                1 => '',
                2 => '',
                3 => '',
                4 => '',
                5 => '',
                6 => '',
      );
       public $fields_name = array(
                1 => 'head',
                2 => 'client',
                3 => 'product',
                4 => 'tsupproduct',
                5 => 'payinfo',
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

      function tsupproduct()
      {
          return $this->_get_value(4);
      }

      function set_tsupproduct($value)
      {
          $this->_set_value(4, $value);
          return $this;
      }

      function payinfo()
      {
          return $this->_get_value(5);
      }

      function set_payinfo($value)
      {
          $this->_set_value(5, $value);
          return $this;
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

// message ts.TSupPayAns
class TSupPayAns extends \PBMessage{

    public $name = 'ts.TSupPayAns';

        public $fields = array(
              1 => 'ts\ServiceHead',
              2 => 'ts\ClientInfo',
              3 => 'ts\ProductInfo',
              4 => 'ts\ProductInfo',
              5 => 'ts\PayInfo',
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
                4 => 'tsupproduct',
                5 => 'payinfo',
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

      function tsupproduct()
      {
          return $this->_get_value(4);
      }

      function set_tsupproduct($value)
      {
          $this->_set_value(4, $value);
          return $this;
      }

      function payinfo()
      {
          return $this->_get_value(5);
      }

      function set_payinfo($value)
      {
          $this->_set_value(5, $value);
          return $this;
      }
}

// message ts.TransAmt
class TransAmt extends \PBMessage{

    public $name = 'ts.TransAmt';

        public $fields = array(
              1 => 'ts\ServiceHead',
              2 => 'ts\ClientInfo',
              3 => 'ts\ClientInfo',
              4 => 'ts\PayInfo',
      );
       public $values = array(
                1 => '',
                2 => '',
                3 => '',
                4 => '',
      );
       public $fields_name = array(
                1 => 'head',
                2 => 'from_client',
                3 => 'to_client',
                4 => 'pay_info',
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

      function from_client()
      {
          return $this->_get_value(2);
      }

      function set_from_client($value)
      {
          $this->_set_value(2, $value);
          return $this;
      }

      function to_client()
      {
          return $this->_get_value(3);
      }

      function set_to_client($value)
      {
          $this->_set_value(3, $value);
          return $this;
      }

      function pay_info()
      {
          return $this->_get_value(4);
      }

      function set_pay_info($value)
      {
          $this->_set_value(4, $value);
          return $this;
      }
}

// message ts.TransAmtAns
class TransAmtAns extends \PBMessage{

    public $name = 'ts.TransAmtAns';

        public $fields = array(
              1 => 'ts\ServiceHead',
              2 => 'ts\ClientInfo',
              3 => 'ts\ClientInfo',
              4 => 'ts\PayInfo',
      );
       public $values = array(
                1 => '',
                2 => '',
                3 => '',
                4 => '',
      );
       public $fields_name = array(
                1 => 'head',
                2 => 'from_client',
                3 => 'to_client',
                4 => 'payinfo',
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

      function from_client()
      {
          return $this->_get_value(2);
      }

      function set_from_client($value)
      {
          $this->_set_value(2, $value);
          return $this;
      }

      function to_client()
      {
          return $this->_get_value(3);
      }

      function set_to_client($value)
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
}

// message ts.Withdraw
class Withdraw extends \PBMessage{

    public $name = 'ts.Withdraw';

        public $fields = array(
              1 => 'ts\ServiceHead',
              2 => 'ts\ClientInfo',
              3 => 'ts\CFTInfo',
      );
       public $values = array(
                1 => '',
                2 => '',
                3 => '',
      );
       public $fields_name = array(
                1 => 'head',
                2 => 'client',
                3 => 'cft',
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

      function cft()
      {
          return $this->_get_value(3);
      }

      function set_cft($value)
      {
          $this->_set_value(3, $value);
          return $this;
      }
}

// message ts.WithdrawAns
class WithdrawAns extends \PBMessage{

    public $name = 'ts.WithdrawAns';

        public $fields = array(
              1 => 'ts\ServiceHead',
      );
       public $values = array(
                1 => '',
      );
       public $fields_name = array(
                1 => 'head',
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
}

// message ts.QueryProvide
class QueryProvide extends \PBMessage{

    public $name = 'ts.QueryProvide';

        public $fields = array(
              1 => 'ts\ServiceHead',
      );
       public $values = array(
                1 => '',
      );
       public $fields_name = array(
                1 => 'head',
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
}

// message ts.QueryProvideAns
class QueryProvideAns extends \PBMessage{

    public $name = 'ts.QueryProvideAns';

        public $fields = array(
              1 => 'ts\ServiceHead',
              2 => 'PBInt',
      );
       public $values = array(
                1 => '',
                2 => '',
      );
       public $fields_name = array(
                1 => 'head',
                2 => 'type',
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

      function type()
      {
          return $this->_get_value(2);
      }

      function set_type($value)
      {
          $this->_set_value(2, $value);
          return $this;
      }
}

// message ts.AlterAcct
class AlterAcct extends \PBMessage{

    public $name = 'ts.AlterAcct';

        public $fields = array(
              1 => 'ts\ServiceHead',
              2 => 'ts\ClientInfo',
              3 => 'ts\PayInfo',
      );
       public $values = array(
                1 => '',
                2 => '',
                3 => '',
      );
       public $fields_name = array(
                1 => 'head',
                2 => 'client',
                3 => 'pay',
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

      function pay()
      {
          return $this->_get_value(3);
      }

      function set_pay($value)
      {
          $this->_set_value(3, $value);
          return $this;
      }
}

// message ts.AlterAcctAns
class AlterAcctAns extends \PBMessage{

    public $name = 'ts.AlterAcctAns';

        public $fields = array(
              1 => 'ts\ServiceHead',
              2 => 'ts\ClientInfo',
              3 => 'ts\PayInfo',
      );
       public $values = array(
                1 => '',
                2 => '',
                3 => '',
      );
       public $fields_name = array(
                1 => 'head',
                2 => 'client',
                3 => 'pay',
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

      function pay()
      {
          return $this->_get_value(3);
      }

      function set_pay($value)
      {
          $this->_set_value(3, $value);
          return $this;
      }
}