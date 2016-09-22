<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Role;
use App\Http\Requests;
use App\Http\Controllers\ApiController;

class RolesController extends ApiController
{
    public function index()
    {
        return Role::paginate();
    }
}
