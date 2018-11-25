 <?php
 session_start();
      //  error_reporting(E_ERROR | E_PARSE); 
             $password=$_POST["password"];
             $email=$_POST["email"];
              
              $conn=new mysqli("localhost","root","","market");
              
             
  if ($conn->connect_error)
  {
      die("Connection failed: " . $conn->connect_error);
  } 
  
    $email=$_POST["email"];
  //  $_SESSION['email'] = $email;
    $password=$_POST["password"];
    
    
    
     $query="SELECT * FROM seller WHERE email='$email' and password='$password' ";
      $result=mysqli_query($conn,$query);
      if(mysqli_num_rows($result)==1)
      {
          
        $_SESSION['emailid']=$email;
        echo"('login success')";
        //setcookie("test","x", time() + (86400 * 30), "/");
       //setcookie("test2","x2", time() + (86400 * 30), "/");
       //echo "<h1>This is fine</h1>";
       header("Location:sellerdashboard.php");
          }
        
      
        else
          {
            echo 'failed';
        // header("Location:login.html");
             }
    
  
?>