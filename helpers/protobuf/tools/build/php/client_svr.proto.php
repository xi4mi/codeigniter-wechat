<?php
/**
 *  Created by protoc-gen-php: 
 *  Description:
 **/
require_once __DIR__ . '/head.proto.php';
require_once __DIR__ . '/client.proto.php';


// message ts.ClientReq
class ClientReq extends PBMessage{

    public $name = 'ts.ClientReq';

    public function __construct($reader = null) {
        parent::__construct($reader);
        $this->fields = array(
                1 => 'ServiceHead',
                2 => 'ClientInfo',
                3 => 'PBString',
        );
        $this->values = array(
                    1 => '',
                    2 => '',
                    3 => '',
            );
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

        function topclientid()
        {
            return $this->_get_value(3);
        }

        function set_topclientid($value)
        {
            $this->_set_value(3, $value);
            return $this;
        }
    }

    // message ts.ClientAns
    class ClientAns extends PBMessage{

        public $name = 'ts.ClientAns';

        public function __construct($reader = null) {
            parent::__construct($reader);
            $this->fields = array(
                    1 => 'ServiceHead',
                    2 => 'ClientList',
                    3 => 'PBString',
            );
            $this->values = array(
                        1 => '',
                        2 => '',
                        3 => '',
                );
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

            function clientList()
            {
                return $this->_get_value(2);
            }

            function set_clientList($value)
            {
                $this->_set_value(2, $value);
                return $this;
            }

            function strclientlist()
            {
                return $this->_get_value(3);
            }

            function set_strclientlist($value)
            {
                $this->_set_value(3, $value);
                return $this;
            }
        }