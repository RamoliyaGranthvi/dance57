<?php

    include 'header.php';
    include 'config.php';

    if(isset($_POST['update']))
    {
        $uid = $_POST['uid'];
        $fn = $_POST['firstname'];
        $ln = $_POST['lastname'];
        $em = $_POST['email'];
        $psw = $_POST['pass'];
        $gender = $_POST['gender'];
        $city = $_POST['city'];
        $course = $_POST['course'];
        $dob = $_POST['birthdate'];
        $batchtime = $_POST['batchtime'];
        $stdno = $_POST['studentmo'];
        $pareno = $_POST['perentsmo'];

        $record = "UPDATE admissionform SET firstname='$fn', lastname='$ln', email='$em', pass='$psw', gender='$gender', city='$city', course='$course', birthdate='$dob', batchtime='$batchtime', studentmo='$stdno', perentsmo='$pareno' WHERE id='$uid'";
        $data = mysqli_query($conn, $record);

        if($data == TRUE)
        {
        ?>
        <script> 
            alert("Your Record Updated Successfully");
            window.location.href='dashboard.php'; 
        </script>
        <?php
        }
    }

    if(isset($_GET['id']))
    {
        $uid = $_GET['id'];
    
        $sql = "SELECT * FROM admissionform WHERE id=$uid";
        $result = mysqli_query($conn, $sql);
    
        if(mysqli_num_rows($result)>0)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                $uid = $row['id'];
                $fn = $row['firstname'];
                $ln = $row['lastname'];
                $em = $row['email'];
                $psw = $row['pass'];
                $gender = $row['gender'];
                $city = $row['city'];
                $dob = $row['birthdate'];
                $stdno = $row['studentmo'];
                $course = $row['course'];
                $batchtime = $row['batchtime'];
                $pno = $row['perentsmo'];
        	}
      	}
    }
?>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Admission Form</h6>
                    <form method="POST">
                        <div class="row mb-3">
                            <label for="inputfName3" class="col-sm-2 col-form-label" >First Name</label>
                                <div class="col-sm-4">
                                    <input type="text" name="firstname" class="form-control" value="<?php echo $fn; ?>" id="inputfName3">
                                    <input type="hidden" name="uid" class="form-control" value="<?php echo $uid; ?>" id="inputfName3">
                                </div>
                                <label for="inputlName3" class="col-sm-2 col-form-label">Last Name</label>
                                <div class="col-sm-4">
                                    <input type="text" name="lastname" class="form-control" value="<?php echo $ln; ?>" id="inputlName3">
                                </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" name="email" class="form-control"  value="<?php echo $em; ?>" id="inputEmail3">
                                </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="text" name="pass" class="form-control" id="inputPassword3" value="<?php echo $psw; ?>">
                            </div>
                        </div>
                        
                        <fieldset class="row mb-3">
                            <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender"
                                        id="gridRadios1" value="Male" value="Male" <?php if($gender == 'Male'){ echo "checked"; } ?>>
                                    <label class="form-check-label" for="gridRadios1">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender"
                                        id="gridRadios2" value="Female" value="Female" <?php if($gender == 'Female'){ echo "checked"; } ?>>
                                    <label class="form-check-label" for="gridRadios2">
                                        Female
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                        <div class="row mb-3">
                            <label for="inputfName3"  class="col-sm-2 col-form-label">city</label>
                            <div class="col-sm-4">
                                <select class="form-select" aria-label="Default select example" value="<?php echo $city; ?>" name="city">
                                    <option disabled>--Select City--</option>
                                    <option value="Surat"<?php if($city == 'Surat'){echo "selected";} ?>>Surat</option>
                                    <option value="Rajkot"<?php if($city == 'Rajkot'){echo "selected";} ?>>Rajkot</option>
                                    <option value="Ahemdabad"<?php if($city == 'Ahemdabad'){echo "selected";} ?>>Ahemdabad</option>
                                    <option value="Vadodra"<?php if($city == 'Vadodra'){echo "selected";} ?>>Vadodra</option>
                                </select>
                            </div>

                            <label for="inputfName4"  class="col-sm-2 col-form-label">course</label>
                            <div class="col-sm-4">
                                    <select class="form-select" aria-label="Default select example" value="<?php echo $city; ?>" name="course">
                                    <option disabled>--Select Course--</option>
                                    <option value="Flamengo Dance"<?php if($city == 'Flamengo Dance'){echo "selected";} ?>>Flamengo Dance</option>
                                    <option value="Salsa Dance"<?php if($city == 'Salsa Dance'){echo "selected";} ?>>Salsa Dance</option>
                                    <option value="Hip-Hop Dance"<?php if($city == 'Hip-Hop Dance'){echo "selected";} ?>>Hip-Hop Dance</option>
                                    <option value="Indian Dance"<?php if($city == 'Indian Dance'){echo "selected";} ?>>Indian Dance</option>
                                    <option value="Break Dance"<?php if($city == 'Break Dance'){echo "selected";} ?>>Break Dance</option>
                                    <option value="Dallet Dance"<?php if($city == 'Dallet Dance'){echo "selected";} ?>>Dallet Dance</option>
                                </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputfName3" class="col-sm-2 col-form-label">Birth Of Date</label>
                                <div class="col-sm-4">
                                    <input type="date" name="birthdate" class="form-control" value="<?php echo $dob; ?>" id="inputfName3">
                                </div>
                                <label for="inputlName3" class="col-sm-2 col-form-label">Batch Time</label>
                                <div class="col-sm-4">
                                    <input type="text" name="batchtime" class="form-control" value="<?php echo $batchtime; ?>" id="inputlName3">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputfName3" class="col-sm-2 col-form-label">Student MO</label>
                                <div class="col-sm-4">
                                    <input type="contact" name="studentmo" class="form-control" value="<?php echo $stdno; ?>" id="inputfName3">
                                </div>
                                <label for="inputlName3" class="col-sm-2 col-form-label">Perent's Mo</label>
                                <div class="col-sm-4">
                                    <input type="contact" name="perentsmo" class="form-control" value="<?php echo $pno; ?>" id="inputlName3">
                                </div>
                            </div>
                                <button type="submit" name="update" class="btn btn-primary" style="width: 100%;">Update</button>
                    </form>
            </div>
        </div>
    </div>
</div>
<?php
    include 'footer.php';
?>