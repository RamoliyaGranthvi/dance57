<?php

    include 'config.php';
    if(isset($_POST['submit']))
    {
        $name = $_POST["username"];
        $email = $_POST["email"];
        $password=$_POST["password"];

        $sql = "INSERT INTO admin_login (username, email,password) VALUES ('$name','$email','$password')";
        $result = mysqli_query($conn, $sql);

        if($result == "TRUE")
        { ?>
            <script>
                alert("Your Record Send Successfully");
                window.location.href='signin.php';
            </script>
        <?php }
        else{
            echo "record not inserted";
        }
        
    }

?>
