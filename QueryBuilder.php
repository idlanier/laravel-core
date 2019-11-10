<?php

namespace Sts\PleafCore;

class QueryBuilder implements Query {

    private $stringBuilder;

    public function __construct() {
        $this->stringBuilder = "";
    }

    /**
     * @param $stringBuilder
     * @return $this
     */
    public function add($stringBuilder){
        $this->stringBuilder .= $stringBuilder;
        return $this;
    }

    /**
     * @param $object
     * @param $stringBuilder
     * @return $this
     */
    public function addIfNotEmpty($object, $stringBuilder){
        if(!is_null($object) && $object != "") {
            $this->stringBuilder .= $stringBuilder;
        }
        return $this;
    }

    /**
     * @param $object
     * @param $stringBuilder
     * @return $this
     */
    public function addIfEmpty($object, $stringBuilder){
        if(is_null($object) || $object == "") {
            $this->stringBuilder .= $stringBuilder;
        }
        return $this;
    }

    /**
     * @param $object
     * @param $comparison
     * @param $stringBuilder
     */
    public function addIfNotEquals($object, $comparison, $stringBuilder){
        if($comparison!=$object) {
            $this->stringBuilder .= $stringBuilder;
        }
        return $this;
    }

    /**
     * @param $object
     * @param $comparison
     * @param $stringBuilder
     * @return $this
     */
    public function addIfEquals($object, $comparison, $stringBuilder){
        if($comparison==$object) {
            $this->stringBuilder .= $stringBuilder;
        }
        return $this;
    }

    /**
     * @param $boolean
     * @param $stringBuilder
     * @return $this
     */
    public function addIfTrue($boolean, $stringBuilder){
        if($boolean) {
            $this->stringBuilder .= $stringBuilder;
        }
        return $this;
    }

    /**
     * @return string
     */
    public function toString() {
        return $this->stringBuilder;
    }

}