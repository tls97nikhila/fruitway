 <?php
        error_reporting(E_ERROR | E_PARSE);
          
              $fname=$_POST["firstname"];
              $lname=$_POST["lastname"];
              
              $password=$_POST["password"];
             $shop=$_POST["shop"];
              $email=$_POST["email"];
             $pan=$_POST["pan"];
            $address=$_POST["address"];
              $con=new mysqli("localhost","root","","market");
              
              $res=$con->query("insert into seller(fname,lname, email, password, address, pannumber, shop_name) values('$fname','$lname','$email','$password','$address', '$pan','$shop')"); 
              if($res)
              {
                  echo "<script>alert('Registered Successfully');</script>";
                                    $con->query("insert into seller_wallet(email,amount) values('$email',0)"); 

                  header("refresh:1; url=../login_seller.html");
              }
              else
              {
                  echo "<script>alert('Registration Failed');</script>";
              }
          
        
        ?>