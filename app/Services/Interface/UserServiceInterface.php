<?php

namespace App\Services\Interface;

interface UserServiceInterface {
    function list();
    function getById(int $id);
    function add(array $user);
    function put(array $user, int $id);
    function delete(int $id);
    function restore(int $id);
}