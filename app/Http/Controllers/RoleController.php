<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Integer;

class RoleController extends Controller
{
    function getAll() {
        return Role::all();
    }

    function getById($id) {
        return Role::all()->where('id', $id);
    }
}
