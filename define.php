<?php

IF (!defined("_PLEAF_COMMANDS")) define("_PLEAF_COMMANDS", ".pleaf-commands");

// Response constants
IF (!defined("_RESPONSE_OK")) define("_RESPONSE_OK","OK");
IF (!defined("_RESPONSE_FAIL")) define("_RESPONSE_FAIL","FAIL");

// General Constants
IF (!defined("_YES")) define("_YES","Y");
IF (!defined("_NO")) define("_NO","N");
IF (!defined("_NULL_LONG")) define("_NULL_LONG",-99);
IF (!defined("_REF_DOC_TYPE_ID")) define("_REF_DOC_TYPE_ID",811);
IF (!defined("_PATH")) define("_PATH","img/attachment/");
IF (!defined("_EMPTY_VALUE")) define("_EMPTY_VALUE","");
IF (!defined("_SPACE_VALUE")) define("_SPACE_VALUE"," ");

// SESSION KEYS
IF (!defined("_PLEAF_SESS_USERS")) define("_PLEAF_SESS_USERS","sessUser");
IF (!defined("_PLEAF_ALLOWED_TASK")) define("_PLEAF_ALLOWED_TASK","allowedTask");
IF (!defined("_PLEAF_CURRENT_ROLE")) define("_PLEAF_CURRENT_ROLE","currentRole");
IF (!defined("_PLEAF_SET_CURRENT_ROLE")) define("_PLEAF_SET_CURRENT_ROLE","setCurrentRole");
IF (!defined("_PLEAF_SESS_ERRORS")) define("_PLEAF_SESS_ERRORS","_PLEAF_SESS_ERRORS");

// VALIDATION
IF (!defined("VALUE_CANNOT_NULL")) define("VALUE_CANNOT_NULL","value.cannot.null");
IF (!defined("DATE_FORMAT_INVALID")) define("DATE_FORMAT_INVALID","date.format.invalid");
IF (!defined("DATETIME_FORMAT_INVALID")) define("DATETIME_FORMAT_INVALID","datetime.format.invalid");
IF (!defined("DTO_FORMAT_INVALID")) define("DTO_FORMAT_INVALID","core.dto.format.invalid");
IF (!defined("DTO_CANNOT_NULL")) define("DTO_CANNOT_NULL","core.dto.cannot.null");
IF (!defined("DTO_ERROR")) define("DTO_ERROR","core.dto.error");
IF (!defined("EMAIL_FORMAT_INVALID")) define("EMAIL_FORMAT_INVALID","email.format.invalid");
IF (!defined("INVALID_ARGUMENT")) define("INVALID_ARGUMENT","invalid.argument");
IF (!defined("PARAMETER_NOT_SPECIFIED")) define("PARAMETER_NOT_SPECIFIED","core.parameter.not.found");
IF (!defined("VALUE_MUST_NUMERIC")) define("VALUE_MUST_NUMERIC","value.must.numeric");
IF (!defined("HTTP_URL_FORMAT_INVALID")) define("HTTP_URL_FORMAT_INVALID","http.url.format.invalid");
IF (!defined("DATA_INTGR_VIOLATION")) define("DATA_INTGR_VIOLATION","data.integrity.violation");
IF (!defined("MERGE_FAIL_DATA_NOT_UPTODATE")) define("MERGE_FAIL_DATA_NOT_UPTODATE","merge.fail.data.not.uptodate");
IF (!defined("REMOVE_FAIL_DATA_NOT_UPTODATE")) define("REMOVE_FAIL_DATA_NOT_UPTODATE","remove.fail.data.not.uptodate");
IF (!defined("TIME_FORMAT_INVALID")) define("TIME_FORMAT_INVALID","time.format.invalid");
IF (!defined("PERIOD_FORMAT_INVALID")) define("PERIOD_FORMAT_INVALID","period.format.invalid");
IF (!defined("VALUE_MUST_NUMBER")) define("VALUE_MUST_NUMBER","value.must.number");
IF (!defined("NOT_VALID_DATE_COMPARE")) define("NOT_VALID_DATE_COMPARE","not.valid.date.compare");
IF (!defined("NOT_VALID_DATETIME_COMPARE")) define("NOT_VALID_DATETIME_COMPARE","not.valid.datetime.compare");
IF (!defined("NOT_VALID_TIME_COMPARE")) define("NOT_VALID_TIME_COMPARE","not.valid.time.compare");
IF (!defined("NOT_VALID_PERIOD_COMPARE")) define("NOT_VALID_PERIOD_COMPARE","not.valid.period.compare");
IF (!defined("NOT_VALID_NUMBER_COMPARE")) define("NOT_VALID_NUMBER_COMPARE","not.valid.number.compare");
IF (!defined("FILTERED_RESTRICTED_PARAMETER_NOT_VALID")) define("FILTERED_RESTRICTED_PARAMETER_NOT_VALID","filtered.restricted.parameter.not.valid");
IF (!defined("TEMPLATE_OBJECT_INSTANCE_OF_MAP")) define("TEMPLATE_OBJECT_INSTANCE_OF_MAP","template.object.instance.of.map");
IF (!defined("CSV_NAME_NOT_FOUND")) define("CSV_NAME_NOT_FOUND","csv.name.not.found");
IF (!defined("INVALID_IP_ADDRESS_VALUE")) define("INVALID_IP_ADDRESS_VALUE","invalid.ip.address.value");
IF (!defined("INVALID_IP_ADDRESS_RANGE")) define("INVALID_IP_ADDRESS_RANGE","invalid.ip.address.range");
IF (!defined("MAIL_SENDER_CONFIG_NOT_DEFINE")) define("MAIL_SENDER_CONFIG_NOT_DEFINE","mail.sender.config.not.define");
IF (!defined("MAIL_RECEPIENT_NOT_DEFINE")) define("MAIL_RECEPIENT_NOT_DEFINE","mail.recepient.not.define");
IF (!defined("MAIL_CONTENT_NOT_DEFINE")) define("MAIL_CONTENT_NOT_DEFINE","mail.content.not.define");
IF (!defined("ENTITY_CLASS_NOT_FOUND")) define("ENTITY_CLASS_NOT_FOUND","entity.class.not.found");
IF (!defined("ENTITY_CLASS_MISSING_TABLE_NAME")) define("ENTITY_CLASS_MISSING_TABLE_NAME","entity.class.missing.table.name");
//
IF (!defined("ERROR_DATA_VALIDATION")) define("ERROR_DATA_VALIDATION","Error Data Validation");

IF (!defined("ERROR_DATA_CONCURRENCY_VALIDATION")) define("ERROR_DATA_CONCURRENCY_VALIDATION","Error Data Concurrency Validation");

IF (!defined("ERROR_BUSINESS_VALIDATION")) define("ERROR_BUSINESS_VALIDATION","Error Business Validation");

IF (!defined("ERROR_TEST_VALIDATION")) define("ERROR_TEST_VALIDATION","Error Test Validation");

IF (!defined("_CORE_EXCEPTION")) define("_CORE_EXCEPTION","Sts\PleafCore\CoreException");
IF (!defined("_DELETE_DATA")) define("_DELETE_DATA","DELETE_DATA");
IF (!defined("_EDIT_DATA")) define("_EDIT_DATA","EDIT_DATA");
IF (!defined("_ADD_DATA")) define("_ADD_DATA","ADD_DATA");
IF (!defined("_LOAD_DATA")) define("_LOAD_DATA","LOAD_DATA");

//COOKIE KEYS
IF (!defined("_PLEAF_COOKIE_USERS")) define("_PLEAF_COOKIE_USERS","user_cookie");

//HOST
IF (!defined("_SERVER_URL")) define("_SERVER_URL","http://192.168.0.129:8000");


// HEADER
IF (!defined("_REMOTE_ADDR")) define("_REMOTE_ADDR", (getenv("REMOTE_ADDR"))? getenv("REMOTE_ADDR")
    :isset($_SERVER["REMOTE_ADDR"])? $_SERVER["REMOTE_ADDR"] : NULL);
IF (!defined("_REMOTE_HOST")) define("_REMOTE_HOST",(isset($_SERVER["REMOTE_ADDR"])? $_SERVER["REMOTE_ADDR"] : NULL));
IF (!defined("_USER_AGENT")) define("_USER_AGENT",(getenv("HTTP_USER_AGENT")? getenv("HTTP_USER_AGENT") :
        isset($_SERVER["HTTP_USER_AGENT"])? $_SERVER["HTTP_USER_AGENT"] : NULL));
IF (!defined("_REMOTE_USER")) define("_REMOTE_USER",NULL);