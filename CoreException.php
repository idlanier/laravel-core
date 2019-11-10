<?php

namespace Sts\PleafCore;
use Exception;

class CoreException extends Exception {

    protected $message;
    protected $errorKey;
    protected $args;

    public function __construct() {
        $get_arguments       = func_get_args();
        $number_of_arguments = func_num_args();

        if (method_exists($this, $method_name = '__construct'.$number_of_arguments)) {
            call_user_func_array(array($this, $method_name), $get_arguments);
        }
    }

    public function __construct1($args1) {
        $this->errorKey = "";
        $this->message = $args1;
    }

    public function __construct2($args1, $args2 = []) {
        $array_args = [];

        foreach($args2 as $key=>$value) {
            $arr = [
                "{".$key."}" => $value
            ];

            $array_args = array_merge($array_args, $arr);
        }
        $this->errorKey = "";
        $this->message = str_replace(array_keys($array_args), array_values($array_args), $args1);

    }

    public function __construct3($args1, $args2 = [], $args3 = []) {
        $this->args = $args2;
        $this->errorKey = $args1;
        $this->message = $args3;
    }

    public function getArgs() {
        return $this->args;
    }

    public function getErrorKey() {
        return $this->errorKey;
    }

    public function getMessages() {
        return $this->message;
    }

}