<?php

namespace App\Http\Controllers;

use App\Entities\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;



class AccountController extends Controller {

public function index() {

	return view('account.index');

}

};