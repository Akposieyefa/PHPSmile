<?php

namespace App\Libs;

class Validator
{
    private $_errors = [];

    public  function validate($request, $rules = [] )
    {
        foreach($request as $item => $item_value) {
            if (key_exists($item, $rules)) {
                foreach($rules[$item] as $rule => $rule_value) {
                    if (is_int($rule))
                        $rule = $rule_value;
                    switch ($rule) {
                        case 'required':
                            if(empty($item_value) && $rule_value) {
                                $this->addError($item,ucwords($item). ' required');
                            }
                            break;
                        case 'min':
                            if (strlen($item_value) < $rule_value) {
                                $this->addError($item, ucwords($item). ' should be minimum '.$rule_value. ' characters');
                            }
                            break;
                        case 'max':
                            if (strlen($item_value) > $rule_value) {
                                $this->addError($item, ucwords($item). ' should be maximum '.$rule_value. ' characters');
                            }
                            break;
                        case 'numeric':
                            if (!ctype_digit($item_value) && $rule_value) {
                                $this->addError($item, ucwords($item). ' should be numeric');
                            }
                            break;
                        case 'alpha':
                            if (!ctype_alpha($item_value) && $rule_value) {
                                $this->addError($item, ucwords($item). ' should be alphabetic characters');
                            }
                            break;
                        case 'email':
                            if (!filter_var($item_value, FILTER_VALIDATE_EMAIL) && $rule_value) {
                                $this->addError($item, ucwords($item). ' must be valid');
                            }
                            break;
                        case 'trim':
                            trim($item_value);
                            break;
                        case 'strip':
                            stripcslashes($item_value);
                            break;
                        case 'html':
                            htmlspecialchars($item_value);
                            break;
                    }
                }
            } else {
                return "Error";
            }

        }
    }

    private function addError($item, $error)
    {
        $this->_errors[$item][] = $error;
    }

    public function error()
    {
        if (empty($this->_errors)) {
            return false;
        } else {
            return json_encode( $this->_errors);
        }
    }
}