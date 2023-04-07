<?php
namespace App\Service;

use App\DTOs\UserDTO;

class UserService{


    public function insert(UserDTO $userDTO){

      return $data =  $userDTO->toArray();


    }


}


?>
