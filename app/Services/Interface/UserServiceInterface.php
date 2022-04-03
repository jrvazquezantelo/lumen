<?php

namespace App\Services\Interfaces;

interface ServiceInterface {
    function get();
    function getById(int $id);
    function post(array $user);
    function put(array $user, int $id);
    function delete(int $id);
    function restore(int $id);
}