<?php 
     include('database_configration.php'); 


     function insertuser(){
           global $conn;
     	    $name 			= $_POST['username'];
			$password 		= $_POST['userPassword'];
			$userPicture 	= $_FILES['file']['name'];
			$gender 		= $_POST['Gender'];
            $target_path = "uploads/"; 
            $target_path = $target_path.basename( $_FILES['file']['name']); 
			 $sql1 = "SELECT * FROM login_user WHERE user_name = '$name' AND user_password = '$password'";
			 $result =$conn->query($sql1);
			 if ($result->num_rows > 0){
    	      echo 'this user is already exist';
    	      echo 'Try something else';
    	      exit();
    	        }
                            else
                            {
                            $sql = "INSERT INTO login_user(user_name, user_password, picture ,Gender)
                            VALUES('$name', '$password', '$userPicture', '$gender')";

                            if($conn->query($sql)==true)
                            {
                            if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) 
                            { 
                            echo "File uploaded successfully!"; 
                            } 
                            else
                            { 
                            echo "Sorry, file not uploaded, please try again!"; 
                            } 
                            }
                            }
 }
                    function authUser(){
                    			global $conn;
                    			$name 			= $_POST['username'];
                    			$password 		= $_POST['userPassword'];
                                    $sql = "SELECT * FROM login_user WHERE user_name = '$name' AND user_password = '$password'";
                                    $result =$conn->query($sql);
                                    // $num_rows = mysqli_num_rows($result);
                                    if ($result->num_rows > 0)
                                    {
                                         $row = mysqli_fetch_array($result);
                                         session_start();
                                         $_SESSION['user'] = $row['id'];

                                         if (isset($_SESSION['user'])) 
                                         {
 
                                          echo   "logged in HTML and code here";

                                             } else {
                                              
                                               echo "Not logged in HTML and code here";
                                              
                                             }
                                    echo "<br>";
                                    echo "your name is {$row['user_name']} ";
                                    echo "<br>";
                                    echo "your password is {$row['user_password']} ";
                                    echo "<br>";
                                    // echo "{$row['picture']}";
                                    // echo "<br>";
                                    $url = 'uploads/'."{$row['picture']}";
                                    echo '<img height="100px" width="100px" src="' . $url .'" alt="error" />';
                                    echo "<br>";
                                    echo 'you are a registered person';
                                    echo "<br>";
                                    exit();
                                    }
                                    else
                                    {
                                    echo "please register your self before you login";
                                    exit();
                                    }
                            }
                            function userdel(){
                              global $conn;
                              $id       = $_POST['del'];
                              $sql    = "DELETE FROM login_user WHERE id = '$id'";
                                        $conn->query($sql);
                             
                            }
                            function dataShow(){
                              global $conn;
                              $sql    = "SELECT * FROM login_user" ;
                              $result = $conn->query($sql);
                              while( $row = mysqli_fetch_assoc($result) ){
                              echo "<tr><td>{$row['id']}</td><td>{$row['user_name']}</td><td>{$row['user_password']}</td><td>{$row['picture']}</td></tr>\n";
                              }
                              print_r($row);
                              exit();
                            }
?>