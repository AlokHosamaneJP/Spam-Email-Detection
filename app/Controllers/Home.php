<?php

namespace App\Controllers;
use App\Models\Auth_Model;
class Home extends BaseController
{
    public function index()
    {
        $data['error'] = "";
        $request = \Config\Services::request();
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $email = $request->getPost('email');
            $password = $request->getPost('password');
            $userModel = new Auth_Model();
            $isLoggedIn = $userModel->auth($email, $password);
            $session = session();
            if ($isLoggedIn) {
                return redirect()->to('/predict');
            } else {
                $data['error'] = "Invalid credentials";
                return view('login', $data);
            }
;
        } else {
            return view('login', $data);
        }
    }

    public function register()
    {
        $data["error"] = "";
        $data["success"] = "";
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $userModel = new Auth_Model();
            $request = \Config\Services::request();
            $validation = \Config\Services::validation();
            $validation->setRule('fullname', 'Full Name', 'trim|required|min_length[3]|max_length[255]');
            $validation->setRule('email', 'Email', 'trim|required|is_unique[users.email]|valid_email');
            $validation->setRule('password', 'Password', 'trim|required|min_length[8]');
            $validation->setRule('mobilenumber', 'Mobile Number', 'trim|required|is_unique[users.mobileNumber]|exact_length[10]');
            $user = array(
                "fullname" => $request->getPost('fullname'),
                "email" => $request->getPost('email'),
               "password" => password_hash($request->getPost('password'), PASSWORD_DEFAULT),
                "mobilenumber"=>$request->getPost('mobilenumber'),
            );
            if ($validation->run($user) == TRUE) {
                
                $userModel->create($user);
                $data["success"] = "Account created successfully";
                return view('register', $data);
            } else {
                $data['error'] = validation_list_errors();
                return view('register', $data);
            }
        } else {
            return view('register', $data);
        }
    }

    public function predict(): string
    {   
        $data["output"] = "";
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $request = \Config\Services::request();
            $subject =  $request->getPost('subject');
            $body =  $request->getPost('body');
            $message = "subject: ".$subject."; ".$body;
            exec('python prediction.py "'.$message.'"', $out, $result);
            $data["output"] = $out[0];

        }
        return view('email', $data);
    }
}
