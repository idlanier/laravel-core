<?php
/**
 * Created by PhpStorm.
 * User: Ali Irawan
 * Modify by1: Oki Karso Aji
 * Modify by2: Widana Nur Azis
 * Date: 3/24/16
 * Modify Date: 4/18/16
 * Time: 12:30 PM
 */

namespace Sts\PleafCore;

class Response
{
    // LAST MODIFY @Response::ok()
    public static function ok($json){
        if(is_array($json)){
            $json["status"] = _RESPONSE_OK;

            return [
                "result" => $json
            ];
        }
    }

    // LAST MODIFY @Response::fail()
    public static function fail ($json){
        if(is_array($json)){

            $result['args'] = [];
            $result['errorKey'] = "";
            $result['errors'] = $json;

        } elseif (get_class($json) == _CORE_EXCEPTION) {

            if($json->getErrorKey() == ERROR_DATA_VALIDATION){

                $result["status"] = _RESPONSE_FAIL;
                $result["errorKey"] = $json->getErrorKey();
                $result["args"] = $json->getArgs();
                $result["errorList"] = $json->getErrorList();

            } elseif($json->getErrorKey() == ERROR_BUSINESS_VALIDATION) {

                $result["status"] = _RESPONSE_FAIL;
                $result["errorKey"] = $json->getErrorKey();
                $result["args"] = $json->getArgs();
                $result["errorList"] = $json->getErrorList();

            }
        }
        return [
            "result" => $result
        ];
    }

    public static function isOk($json){
    
    	if(!is_null($json)) {
    		if(is_array($json)){
    			$json["status"] = _RESPONSE_OK;
    		} else if(is_object($json)) {
    			$json->status = _RESPONSE_OK;
    		}

            return response()->json([
                "result" => $json,
                "status_code" => 200
            ]);

    	} else {

            return response()->json([
                "status" => _RESPONSE_OK,
                "status_code" => 200
            ]);
    	}
    
    }
    
    public static function isFail($ex){
        $result = [];
        $status_code = 100;


        if($ex instanceof CoreException) {

                $result["status"] = _RESPONSE_FAIL;
                $result["errorKey"] = $ex->getErrorKey();
                $result["args"] = $ex->getArgs();

            if($ex->getErrorKey() == ERROR_DATA_VALIDATION) {

                $errorData = $ex->getMessages();
                $converterJson = json_encode($errorData);
                $converterDecode = (array)json_decode($converterJson);
                $keys = array_keys($converterDecode);

                $errors = [];
                foreach ($keys as $value) {
                    $errors[$value] = $ex->getMessages()->first($value);
                }

                $result["errors"] = $errors;

            } else if($ex->getErrorKey() == ERROR_BUSINESS_VALIDATION) {
                $result["errors"] = $ex->getMessages();
            } else {
                $result["errors"] = $ex->getMessages();
            }

        } else {
            \Log::debug(get_class($ex));
        }

        return response()->json([
            "result" => $result,
            "status_code" => $status_code
        ]);

    }
    
//        public static function ok ($json){
//        if(is_array($json)){
//            $json["status"] = _RESPONSE_OK;
//            return $json;
//        }
//    }

//    public static function fail ($json){
//        if(is_array($json)){
//
//            $result['args'] = [];
//            $result['errorKey'] = "";
//            $result['errors'] = $json;
//
//        } elseif (get_class($json) == _CORE_EXCEPTION) {
//
//            $result['args'] = $json->getArgs();
//            $result['errorKey'] = $json->getErrorKey();
//
//            $exception = $json->getErrorList();
//            $error =[];
//
//            foreach ($exception->getMessages() as $key => $value) {
//                foreach ($value as $message) {
//                    $error_push = (object)[
//                        "key" => $key,
//                        "message" => $message
//                    ];
//                    array_push($error, $error_push);
//                }
//            }
//
//            $result['errors'] = $error;
//
//        }
//
//        return $result;
//
//    }
}