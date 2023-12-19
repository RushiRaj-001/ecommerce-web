<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\ProductModel;

class AdminDashboard extends BaseController
{
    public function admin_dashboard()
    {
        
        $model= new UserModel();
        $users= $model->findAll();

        return view('dashboard/admin_dashboard',['users'=>$users]);

    }
   

}