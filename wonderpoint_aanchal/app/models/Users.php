<?php

use Phalcon\Mvc\Model;

class Users extends Model
{

	public $id;

	public $firstname;
    
    public $lastname;

	public $email;
    
    public $gender;
    
    public $education;
    
    public $skills;
    
     public function setEmail($email)
    {
         
        $user = Users::findFirstByEmail($email);
        if ($user) {
            throw new InvalidArgumentException(
                "Email already exists."
            );
        }

        $this->email = $email;
    }


}
