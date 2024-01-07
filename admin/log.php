<?php      
    include 'config.php';  
	session_start();
	if(isset($_POST['submit']))
    {
    	$username = $_POST['user'];  
    	$password = $_POST['pass'];  
      
        $sql = "SELECT * FROM admin_login WHERE username = '$username' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
          	$_SESSION['username'] = $username;
            header('location:dashboard.php');
        }  
        else
        { ?>  
        <script>
            alert("Incorrect Username or Password");
            window.location.href='index.php';
        </script>
        <?php }     
    }
?>  