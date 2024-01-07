<?php
    include 'header.php';
    include 'config.php';
    $sql = "SELECT * FROM admissionform";
    $result = mysqli_query($conn, $sql);
?>      

<div class="col-sm-12 col-xl-12 m-2 pt-2 px-2">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Admission Form</h6>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Gender</th>
                    <th scope="col">City</th>
                    <th scope="col">Birthdate</th>
                    <th scope="col">Student No</th>
                    <th scope="col">Course</th>
                    <th scope="col">Batch Time</th>
                    <th scope="col">Parent No</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Update</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if(mysqli_num_rows($result)>0)
                    {
                        while($row=mysqli_fetch_assoc($result))
                        { ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['firstname']; ?></td>
                                <td><?php echo $row['lastname']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['pass']; ?></td>
                                <td><?php echo $row['gender']; ?></td>
                                <td><?php echo $row['city']; ?></td>
                                <td><?php echo $row['birthdate']; ?></td>
                                <td><?php echo $row['studentmo']; ?></td>
                                <td><?php echo $row['course']; ?></td>
                                <td><?php echo $row['batchtime']; ?></td>
                                <td><?php echo $row['perentsmo']; ?></td>
                                <td>
                                <a href="delete.php?id=<?php echo $row['id']; ?>">
                                <button type="submit" name="submit" class="btn btn-primary">Delete</button>
                                </a>
                                </td>
                                <td>
                                <a href="update.php?id=<?php echo $row['id']; ?>">
                                <button type="submit" name="submit" class="btn btn-primary">Update</button>
                                </a>
                            </td>
                            </tr>
                       <?php }
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>
<?php
    include 'footer.php';
?>     