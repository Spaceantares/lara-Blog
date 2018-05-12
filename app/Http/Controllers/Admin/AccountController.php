<?php

namespace App\Http\Controllers\Admin;

use App\Entities\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use App\Http\Middleware;



class AccountController extends Controller {

public function index() {

	
	
	return view('admin.index');

}

};