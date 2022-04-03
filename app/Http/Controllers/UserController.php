<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Implementation\UserServiceImplementation;

class UserController extends Controller
{
    /**
     * @var UserServiceImplementation
     */
    private $userService;
    /**
     * @var Request
     */
    private $request;

    public function __construct(UserServiceImplementation $userService, Request $request)
    {
        $this->userService = $userService;
        $this->request = $request;
    }

    function createUser() {

        $response = response("", 201);

        return $response;
    }
}
