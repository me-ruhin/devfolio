<?php

namespace App\Http\Controllers;

use App\DTOs\UserDTO;
use App\Http\Requests\UserRequest;
use App\Service\UserService;
use Exception;
use Illuminate\Http\Request;

class UserController extends Controller
{


    public function createUser(UserRequest $userRequest){

      try{

        $userSevice = new UserService();

        $userDTO = new UserDTO ($userRequest->all()); // 150

      return  $userSevice->insert( $userDTO);

      } catch(Exception $e){

      }

    }
}
