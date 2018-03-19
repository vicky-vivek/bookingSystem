<?php
session_start();
include_once 'dbConnect.php';
session_start();

class logincontroller{


	public function saveSignUpDetails()
    {

        $name = $_POST['fname'];
        $email = $_POST['femail'];
        $password = md5($_POST['pass1']);
        $hash = md5(rand(0,1000));
        $captcha_code = $_POST['captcha_code'];
        
        if($captcha_code == $_SESSION['captcha_code']){
       try {
         
            $database = new dbConnect();
         
            $db=$database->openConnection();
            $sql1 = "select name, emailid from signup where emailid='$email'";	
         	
         	$user = $db->query($sql1);
         	$result = $user-> fetchAll();
         	$_SESSION['emailname'] = $result[0]['emailid'];
         	
         	if(empty($result)){   
            $sql= "insert into signup (emailid,name,password) values('$email','$name','$password')";
         	
         	//echo $sql;
         	//exit();
            $db->exec($sql);

            $database->closeConnection();
            header('location:home.php');

            }else{
            	echo "This email is already registered with us!!! ";
            }
        }
         
        catch (PDOException $e)
         
        {
         
            echo "There is some problem in connection: " . $e->getMessage();
         
        }
    }else{
    	echo "Captcha code is not matching please try again!";
    }

    }
	


	public function checkLoginDetails()
	{
        $email = $_POST['femail'];
        $password = md5($_POST['password']);
        $captcha_code = $_POST['captcha_code'];
        $cookie_pass = $_POST['password'];

        if($captcha_code == $_SESSION['captcha_code']){
        
        try {
         
            $database = new dbConnect();
         
            $db=$database->openConnection();

            
            $sql = "select id, name , emailid, password from signup where emailid = '$email' and password= '$password'";
            $user = $db-> query($sql);
            $result = $user-> fetchAll(PDO::FETCH_ASSOC);
            $id = $result[0]['id'];
            $name = $result[0]['name'];
            $email = $result[0]['emailid'];
            $password = $result[0]['password'];
            $_SESSION['name'] = $name;
            $_SESSION['id'] = $id;
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            if(!empty($_POST['rememberMe'])){
            	setcookie('rememberMe',$_SESSION['id'], time()+120, '/'  );
            	setcookie('email',$_SESSION['email'], time()+120, '/'  );
            	setcookie('password',$cookie_pass, time()+120, '/'  );
            	
                 }
            if(!isset($_SESSION['name'])){
                
                header('location:login.php');
                echo "Credentials not matching";
            } else{
                
                header('location:home.php');
            }
            
            $database->closeConnection();
        }
     

       catch (PDOException $e)
         
        {
         
            echo "There is some problem in connection: " . $e->getMessage();
         
        }


	    }else{
	    	echo "Captcha code is not matching please try again!";
	    }

	}


	public function logout(){

		setcookie('rememberMe',$_SESSION['id'], time()-120, '/'  );
		session_destroy();
	}
}

$obj = new logincontroller();
	

	$formName = $_POST['studentForm'];
	$logout = $_GET['logoutaction'];
	
	if($formName == "login"){
		$obj->checkLoginDetails();
	}else if($formName == "signUp"){
		$obj->saveSignUpDetails();	
	}
	if($logout == "logout"){
		$obj->logout();	
	}
	
?>