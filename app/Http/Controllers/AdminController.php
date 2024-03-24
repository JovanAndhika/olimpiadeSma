<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //INDEX
    public function adminIndex(){
        
        return view('admin.adminHomepage', ['title' => 'BOM 2024 | PETRA CHRISTIAN UNIVERSITY']);
    }
}

?>