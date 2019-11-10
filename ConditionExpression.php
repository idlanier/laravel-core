<?php
namespace Sts\PleafCore;

/**
 * Class ConditionExpression
 * @package Sts\WebToko\Helpers
 *
 * @author Cong, Widana 2018-05-10
 * Untuk membantu mempermudah penulisan suatu kondisi pada suatu query
 */
class ConditionExpression
{

    /**
     * @param $column
     * @param $value
     * @return string
     *
     * Membuat suatu kondisi Like (case sensitive) pada suatu query, ex :
     * AKU LIKE '%KU%' = true
     * AKU LIKE '%ku%' = false
     */
    public static function likeCaseSensitive($column, $value){
        return $column." LIKE '%".$value."%' ";
    }

    /**
     * @param $column
     * @param $value
     * @return string
     *
     * Membuat suatu kondisi Like (case insensitive) pada suatu query, ex :
     * AKU LIKE '%KU%' = true
     * AKU LIKE '%ku%' = true
     */
    public static function likeCaseInsensitive($column, $value){
        return " UPPER(".$column.") ILIKE '%".strtoupper($value)."%' ";
    }

    public static function equalCaseSensitive($column, $value){
        return $column." = '".$value."'";
    }

    public static function equalCaseInsensitive($column, $value){
        return " UPPER(".$column.") = UPPER('".$value."') ";
    }

    public static function notEqualCaseSensitive($column, $value){
        return $column." != '".$value."'";
    }

    public static function notEqualCaseInsensitive($column, $value){
        return " UPPER(".$column.") != UPPER('".$value."') ";
    }

}