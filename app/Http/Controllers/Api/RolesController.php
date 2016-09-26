<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\ApiController;
use Spatie\Permission\Models\Role;

class RolesController extends ApiController
{
    public function index()
    {
        return Role::paginate();
    }
}
