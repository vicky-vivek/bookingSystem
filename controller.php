<?php
	session_start();
    include_once 'dbConnect.php';
	class controller{


	public function bookseats($seat,$busid){
		try {
            $userid = $_SESSION['id'];

            $database = new dbConnect();
         
            $db=$database->openConnection();
            
            $sql = "INSERT INTO `users`(`user_id`, `bus_id`, `booked_seat`) VALUES ('$userid' , '$busid' , '$seat')";
            $user = $db-> exec($sql);  
            echo json_encode("ok");
            $database->closeConnection();

        }
         
        catch (PDOException $e)
         
        {
         
            echo "There is some problem in connection: " . $e->getMessage();
         
        }
	}

    public function fetchAll($fetch){
        try {

            $database = new dbConnect();
          
            $db=$database->openConnection();
            
            $sql = "select booked_seat from users where bus_id='$fetch' and flag='1'";
            /*echo $sql;
            exit();*/
            $user = $db-> query($sql);

            $result = $user-> fetchAll(PDO::FETCH_ASSOC);
            $out = implode(",",array_map(function($a) {return implode("",$a);},$result));
            print_r($out);            
            $database->closeConnection();
        }
         
        catch (PDOException $e)
         
        {
         
            echo "There is some problem in connection: " . $e->getMessage();
         
        }
    }


    public function fetch_history(){
        try {
            $userid = $_SESSION['id'];
            $database = new dbConnect();
          
            $db=$database->openConnection();
            
            $sql = "SELECT tran_id , bus_name ,booked_seat ,book_time , status  FROM `users` join buses on(bus_id = id) WHERE user_id='$userid' and flag='1'";
           /* echo $sql;
            exit();*/
            $user = $db-> query($sql);

            $result = $user-> fetchAll(PDO::FETCH_ASSOC);
            //$out = implode(",",array_map(function($a) {return implode("",$a);},$result));
            print_r(json_encode($result));            
            $database->closeConnection();
        }
         
        catch (PDOException $e)
         
        {
         
            echo "There is some problem in connection: " . $e->getMessage();
        }
    }


    public function cancel($input ,$tid){
       try {
            
            $database = new dbConnect();
          
            $db=$database->openConnection();
            
            $sql = "select booked_seat from users where tran_id='$tid'";
            /*echo $sql;
            exit();*/
            $user = $db-> query($sql);

            $result = $user-> fetchAll(PDO::FETCH_ASSOC);
            $out = implode(",",array_map(function($a) {return implode("",$a);},$result));
            $output = explode("," , $out);
            //print_r($oout);
            //var_dump($input);
            $final = array_diff($output , $input);
           // print_r($final);
            if (!empty($final)){
                $seat = implode(",",$final);
                $sql1 = "update users set booked_seat='$seat' where tran_id='$tid'";
                $user = $db-> query($sql1);
            }else{
                $sql2 = "update users set flag='0' , status='cancelled' where tran_id= '$tid'";
                $user = $db-> query($sql2);
            }                        
            print_r(json_encode("success"));
            $database->closeConnection();
            
        }
         
        catch (PDOException $e)
         
        {
         
            echo "There is some problem in connection: " . $e->getMessage();
        } 
    }


}

$obj = new controller();


    $fetch = $_GET['fetch'];
	$data = json_decode(stripslashes($_POST['data']));
    $busid = $_POST['bus_id'];
    $seat = implode(",",$data);  
    $history=$_GET['history'];
    //$cancel = $_GET['cancel'];
    $input = json_decode(stripslashes($_POST['canceldata']));
    $tid = $_POST['tid'];

  if(isset($input)){
    $obj->cancel($input ,$tid);
  }  

  if(isset($fetch)){
    $obj->fetchAll($fetch);
  }

  if(isset($data)){
    $obj->bookseats($seat , $busid);
  }

  if(isset($history)){
   $obj->fetch_history(); 
  }
   


?>



