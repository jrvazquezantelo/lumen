<?php

namespace App\Services\Implementation;

use App\Services\Interface\UserServiceInterface;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserServiceImplementation implements UserServiceInterface{
    private $model;

    function __construct()
    {
        $this->model = new User();
    }
    function list()
    {
        return $this->model->get();
    }
    function getById(int $id)
    {

    }
    function add(array $user)
    {
        $user['password'] = Hash::make($user['password']);
        $this->model->create($user);
    }
    function put(array $user, int $id)
    {
        $user['password'] = Hash::make($user['password']);
        $this->model->where('id', $id)
        ->first()
        ->fill($user)
        ->save();
    }
    function delete(int $id)
    {
        $user = $this->model->find($id);
        if ($user != null) $user->delete();
    }
    function restore(int $id)
    {

    }
}