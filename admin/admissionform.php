<?php

    include 'config.php';
    if(isset($_POST['submit']))
    {
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];
        $pass = $_POST["pass"];
        $gender = $_POST["gender"];
        $city = $_POST["city"];
        $birthdate = $_POST["birthdate"];
        $studentmo = $_POST["studentmo"];
        $course = $_POST["course"];
        $batchtime = $_POST["batchtime"];
        $perentsmo = $_POST["perentsmo"];

        $sql = "INSERT INTO admissionform (firstname, lastname, email, pass,gender,city,birthdate,studentmo,course,batchtime,perentsmo) VALUES ('$firstname','$lastname','$email','$pass','$gender','$city','$birthdate','$studentmo','$course','$batchtime','$perentsmo')";
        $result = mysqli_query($conn, $sql);

        if($result == "TRUE")
        { ?>
            <script>
                alert("Your Record Send Successfully");
                window.location.href='dashboard.php';
            </script>
        <?php }
        else{
            echo "record not inserted";
        }   
        
    }

?>
