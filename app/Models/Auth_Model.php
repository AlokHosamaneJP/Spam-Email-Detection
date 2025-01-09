<?php
namespace App\Models;
use CodeIgniter\Model;

/**
 * 
 */
class Auth_Model extends Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function create($user)
	{
        $db = db_connect();
		$db->table('users')->insert($user);
		return $db->insertID();
	}
	public function auth($email, $password)
	{
        $db = db_connect();
		$user = $db->table('users')->where(array('email'=>$email))->get()->getRowObject();

		if($user){
			if(password_verify($password, $user->password))
			{
				$userData = array(
					'userId' => $user->userId,
					'fullname' => $user->fullname,
					'email' => $user->email,
					'mobileNumber' => $user->mobileNumber,
					'isLoggedIn' => TRUE,
				);
                $session =session();
				$session->set($userData);
				return true;
			}
			return false;
		}
		return false;
	}
}