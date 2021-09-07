<?php

namespace App\Helpers;


class Api
{
    private $data= [
        'error' => false
    ];

    public static function setErrors($validator){
        $obj = new Api();
        $obj->data['error'] = true;
        $obj->data['error_data'] = $validator->errors()->first();
        return $obj->data;
    }
    
    public static function setError($error){
        $obj = new Api();
        $obj->data['error'] = true;
        $obj->data['error_data'] = $error;
        return response()->json($obj->data);
    }
    
    public static function setResponse($index,$object){
        $obj = new Api();
        $obj->data[$index] = $object;
        return response()->json($obj->data);
    }

}