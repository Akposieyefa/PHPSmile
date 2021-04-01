<?php 

namespace Http\models;
use App\core\Model;

class ContactModel extends Model 
{
       public $table = 'contacts';

       public $fields = [
              'name', 'email', 'subject', 'message'
       ];
}