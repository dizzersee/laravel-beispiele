<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index() {

        $user = User::find(1);
        $profil = new Profile();
        $profil->description = "Test";

        $user->profile()->save($profil);

        return "Test";
    }
}
