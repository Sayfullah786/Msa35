<?php

class PostController {
    public $model;

    function __construct($pageURI = null, $param = null) {
        $this -> model = new Model();
        $this -> $pageURI($param);
    }

    function getinfo($param) {
        $brandName = $param['brandName'];
        $data = $this -> model -> dbGetModelData($brandName);

        if ($data != NULL) {
            echo json_encode($data);
        }
        return NULL;
    }

    function apiGetImages() {
        $data = $this -> model -> imageGetData();

        if ($data != NULL) {
            echo json_encode($data);
        }
        
        return NULL;
    }
}