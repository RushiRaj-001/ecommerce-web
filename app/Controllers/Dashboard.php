<?php

namespace App\Controllers;

use App\Models\UserModel;

class Dashboard extends BaseController
{
    public function user_dashboard()
    {
        $model= new UserModel();
        $users= $model->findAll();

        return view('dashboard/user_dashboard',['users'=>$users]);
    }

}