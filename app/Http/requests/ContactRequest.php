<?php 

namespace Http\requests;

class ContactRequest
{
       public static function grantAccess()
       {
             return true;
       }

       public static function rules() 
       {
              if (self::grantAccess()) {
                     return [
                            'name' => ['required', 'min' => 6, 'max' => 150, 'trim'],
                            'email' => ['required', 'email', 'html'],
                            'subject' => ['required'],
                            'message' => ['required']
                        ]; 
              }else {
                     die("UnAuthorized Access");
              }
       }
}