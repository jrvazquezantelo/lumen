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

    function createUser()
    {
        return response($this->userService->add($this->request->all()), 201);
    }
    function getListUser()
    {
        return response($this->userService->list());
    }
    function updateUser(int $id)
    {
        return response($this->userService->put($this->request->all(), $id), 202);
    }
    function deleteUser(int $id)
    {
        return response($this->userService->delete($id), 204);
    }
}
