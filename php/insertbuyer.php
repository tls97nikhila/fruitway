 <?php
      //  error_reporting(E_ERROR | E_PARSE);
          
              $fname=$_POST["firstname"];
              $lname=$_POST["lastname"];
              
              $password=$_POST["password"];
             
              $email=$_POST["email"];
              $phone=$_POST["phonenumber"];
            $address=$_POST["address"];
              $con=new mysqli("localhost","root","","market");
              
              $res=$con->query("insert into buyer(fname,lname, email, password, phonenumber, address) values('$fname','$lname','$email','$password', '$phone','$address')"); 
              if($res)
              {
                  echo "<script>alert('Registered Successfully');</script>";
                  $con->query("insert into buyer_wallet(email,amount) values('$email',3500)"); 
                  header("refresh:1; url=../login_buyer.html");
              }
              else
              {
                  echo "<script>alert('Registration Failed');</script>";
              }
          
        
        ?>