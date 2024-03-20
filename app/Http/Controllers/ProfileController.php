<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index() {
        $profile = Profile::find(1);
        $user = $profile->user;

        dump($user);

        return "Test";
    }
}
