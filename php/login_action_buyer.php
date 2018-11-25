 <?php
  session_start();
        //error_reporting(E_ERROR | E_PARSE); 
   $password=$_POST["password"];
   $email=$_POST["email"];
   $conn=new mysqli("localhost","root","","market");
              
   if ($conn->connect_error)
  {
        die("Connection failed: " . $conn->connect_error);
  } 

       $query="SELECT * FROM buyer WHERE email='$email' and password='$password' ";
      $result=mysqli_query($conn,$query);
      if(mysqli_num_rows($result)==1)
      {
           while($row = $result->fetch_assoc()) {
              session_start();
              $emailid=$row['email'];
              $_SESSION['market']='true';
              echo $emailid;
              $_SESSION['emailidb']=$emailid;
               $query="SELECT amount FROM buyer_wallet WHERE email='$email' ";
               $result=mysqli_query($conn,$query);
                while($row = $result->fetch_assoc()) {
              
                $amount=$row['amount'];
                //echo $amount;
              $_SESSION['b_wallet']=$amount;
             }
              echo"('login success')";
             //setcookie("test",$emailid,"x", time() + (86400 * 30), "/");
             //setcookie("test2",$emailid,"x2", time() + (86400 * 30), "/");
             //echo "<h1>This is fine</h1>";
              header("Location:buyerdashboard.php");
              //   header('Location: member.php?id='.$username);
                 }
        }
      
        else
            {
              echo 'failed';

            }    
?>