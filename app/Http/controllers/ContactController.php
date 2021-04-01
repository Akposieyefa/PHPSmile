<?php

namespace Http\controllers;

use Http\models\ContactModel;
use Http\requests\ContactRequest;
use App\lib\Validator;

class ContactController
{
      
       public function store($request)
       {
              $contactModel = new ContactModel();
              Validator::validate($request , ContactRequest::rules());
              if (!Validator::error()) {
                  try {
                      $contactModel::createQuery($contactModel->table, $request);
                      die('Successful');
                  } catch (\Exception $e) {
                      die($e->getMessage());
                  }
              } else {
                    $error = Validator::error();
                    var_dump($error);
              }
       }
}