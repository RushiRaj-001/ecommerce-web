<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\Products;

class Home extends BaseController
{
    public function index()
    {
        $products = new Products();
        $data['products'] = $products->findAll();
        return view('welcome_message',$data);
    }

    public function register()
    {

        //get
        if($this->request->getMethod() =="get"){
            echo view('register');

        }
        else if($this->request->getMethod() =="post"){
            //submit the form
           
            if($this->validate([
                "username"=>"required",
                "email"=>"required|valid_email",
                "password"=>"required",
                "password"=>"required",
                
                ])){
                    $username=$this->request->getVar("username");
                    $email=$this->request->getVar("email");
                    $password=$this->request->getVar("password");
                   

                    //now submit the data into the db
                    $data=[
                            "username"=>$username,
                            "email"=>$email,
                            "password"=>$password,
                           
                    ];
                    $model=new usermodel();
                    $model->insert($data);

                    echo view('login');
            }
            else{
                return redirect()->back()->withInput();
            }
        }
    }
    
    public function login()
    {
        if ($this->request->getMethod()=="get") {
            
            echo view('login');
        }
        else if ($this->request->getMethod()=="post"){
            //validate
            if($this->validate([
                "email"=>"required",
                "password"=>"required"
            ])){
                $model = new UserModel();
                $record=$model->where("email",$this->request->getVar("email"))
                ->where("password",$this->request->getVar("password"))
                ->first();

                var_dump($record);
                $session=session();
                if(! is_null($record)){
                    //data found at database
                    $sess_data=[
                        "username"=>$record["username"],
                        "email"=>$record["email"],
                        "user_type"=>$record["user_type"]
                    ];
                    $session->set($sess_data);
                    if($record['user_type']=="user"){
                        //go to user page
                        $url="user_dashboard";
                    }
                    else if($record['user_type']=="admin"){
                        // go to admin page
                        $url="admin_dashboard";
                    }

                    return redirect()->to(base_url($url));
                }
                else{
                    $session=session();
                    $session->set("failed_message","Record does not Match, try again");
                    $session->markAsFlashdata('failed_message');
                    return redirect()->back()->withInput();
                }
            }
            else{
                return redirect()->back()->withInput();
            }
        }
    }


    public function category()
    {
        echo view('category');
    }

 
}
