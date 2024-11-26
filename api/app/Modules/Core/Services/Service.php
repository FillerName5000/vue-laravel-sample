<?php

namespace App\Modules\Core\Services;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\App;

abstract class Service{
    protected $_model;
    protected $_errors;
    protected $_rules;
    protected $_isTranslatable = true;

    public function __construct(Model $model){
        $this->_model = $model;
        $this->_errors = new MessageBag();
    }


    protected function validate($data) {
        $this->_errors = new MessageBag();

        $validator = Validator::make($data, $this->_rules);

        if ($validator->fails()) {
            $this->_errors = $validator->errors();
            return false;
        }
    }

    public function hasErrors() {
        return $this->_errors->any();
    }

    public function getErrors() {
        return $this->_errors;
    }

    public function getLanguage() {
        return App::getLocale();
    }
}
