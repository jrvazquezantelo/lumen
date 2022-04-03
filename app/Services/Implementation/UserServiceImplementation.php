<?php

namespace App\Services\Implementation;

use App\Services\Interfaces\ServiceInterface;
use App\Models\User;

class UserServiceImplementation implements ServiceInterface{
    private $model;

    function __construct()
    {
        $this->model = new User();
    }
    function get()
    {
        
    }
    function getById(int $id)
    {

    }
    function post(array $user)
    {

    }
    function put(array $user, int $id)
    {

    }
    function delete(int $id)
    {

    }
    function restore(int $id)
    {

    }
}