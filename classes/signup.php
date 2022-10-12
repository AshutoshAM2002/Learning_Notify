<?php

class Signup
{
	private $error = "";
	
	public function evaluate($data)
	{
		foreach($data as $key => $value){
			if(empty($value))
				
			{
				$this->error = $this->error. $key .  "is empty!<br>";
			}
			
		}
		if($this->error == "")
		{
			$this->create_users($data);
			
		}else
		{
			return $this->error;
		}
	}
	
	public function create_users($data)
	{
		
		
		$firstname = $data['firstname'];
		$lastname = $data['lastname'];
		$email = $data['email'];
		$password = $data['password'];
		
		$url_address = strtolower ($firstname) . "." . strtolower ($lastname);
		$userid = $this->create_userid();
		
		$query = "insert into users 
		(userid,firstname,lastname,email,password,url_address) 
		value 
		('$userid', '$firstname', '$lastname', '$email', '$password', '$url_address')";
		
		
		$DB = new Database();
		$DB->save($query);
	}
private function create_userid()
{
	$length = rand(4,19);
		$number = "";
		for($i=0; $i < $length; $i++){
			
			$new_rand = rand(0,9);
			$number = $number . $new_rand;
		}	
               return $number;	
	
}
}

	
?>