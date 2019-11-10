<?php

namespace Sts\PleafCore;

use DB;
use Illuminate\Database\QueryException;

class CreateNativeQuery {

    private $params = [];
    private $stringQuery;
    private $connection;

    /**
     * @param string $stringQuery
     * @param string $connection
     */
    public function __construct($stringQuery = "", $connection = "") {
        $this->connection = $connection;
        $this->stringQuery = $stringQuery;
    }

    /**
     * @param $key
     * @param $value
     * @return $this
     */
    public function setParameter($key, $value) {
        $keys = [
            "$key" => $value
        ];

        $this->params = array_merge($this->params,$keys);
        return $this;

    }

    /**
     * @return array
     */
    public function getParameter() {
        return $this->params;
    }

    /**
     * @return List
     */
    public function getResultList() {
        try {
            return collect(DB::select(DB::Raw($this->stringQuery), $this->getParameter()))->all();

        } catch(QueryException $ex) {
            \Log::debug($ex->getMessage());

        }
    }

    /**
     * @return single
     */
    public function getSingleResult() {
    	try {
	        return collect(DB::select(DB::Raw($this->stringQuery), $this->getParameter()))->first();
    	} catch(QueryException $ex) {
    		\Log::debug($ex->getMessage());
    	
    	}
    	 
    }

}