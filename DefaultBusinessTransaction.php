<?php
namespace Sts\PleafCore;

use Sts\PleafCore\BusinessTransaction;
use DB;
use Validator;
use ReflectionClass;
use Log;

abstract class DefaultBusinessTransaction implements BusinessTransaction {
	abstract protected function prepare( $dto, $originalDto );
	abstract protected function process( $dto, $originalDto );

	public function execute($dto){
		$originalDto = $dto;
		$result = [];
		
		//DB::transaction(function() use ($dto, $originalDto) {
		try {
			DB::beginTransaction();
			
			$validator = Validator::make($dto, $this->rules());

			if ($validator->fails()) {
				throw new CoreException(ERROR_DATA_VALIDATION, [], $validator->errors());
			}

			$modified_dto = $this->prepare($dto, $originalDto);
			if($modified_dto != null) $dto = $modified_dto;
			$result =  $this->process($dto, $originalDto);
						
			DB::commit();
		}catch(CoreException $ex){
			DB::rollback();
			throw $ex;
		}	
		//});
		return $result;
	}

    protected static function auditActive($object, $datetime){
        $object->{'active'} = _YES;
        $object->{'active_datetime'} = $datetime;
        $object->{'non_active_datetime'} = _SPACE_VALUE;
    }
	protected static function auditInsert($object, $userLoginId, $datetime){
		$object->{'create_datetime'} =  $datetime;
		$object->{'update_datetime'} =  $datetime;
		$object->{'create_user_id'} =  $userLoginId;
		$object->{'update_user_id'} =  $userLoginId;
        $object->{'version'} =  0;
	}
	protected static function auditUpdate($object, $userLoginId, $datetime){
		$object->{'update_datetime'} =  $datetime;
		$object->{'update_user_id'} =  $userLoginId;
		$object->{'version'}= $object->{'version'}+1;
	}

	protected function rules() {
		return [];
	}

	protected function errorBusinessValidation($errorList=[]) {
		throw new CoreException(ERROR_BUSINESS_VALIDATION, [], $errorList);
	}
}