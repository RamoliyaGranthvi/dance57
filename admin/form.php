<?php
        include 'header.php';
    ?>    
            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Admission Form</h6>
                            <form action="admissionform.php" method="POST">
                                <div class="row mb-3">
                                    <label for="inputfName3" class="col-sm-2 col-form-label">First Name</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="firstname" class="form-control" id="inputfName3">
                                    </div>
                                    <label for="inputlName3" class="col-sm-2 col-form-label">Last Name</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="lastname" class="form-control" id="inputlName3">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" name="email" class="form-control" id="inputEmail3">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" name="pass" class="form-control" id="inputPassword3">
                                    </div>
                                </div>
                                
                                <fieldset class="row mb-3">
                                    <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender"
                                                id="gridRadios1" value="Male" checked>
                                            <label class="form-check-label" for="gridRadios1">
                                                Male
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender"
                                                id="gridRadios2" value="Female">
                                            <label class="form-check-label" for="gridRadios2">
                                                Female
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                                        <div class="row mb-3">
                                    <label for="inputfName3"  class="col-sm-2 col-form-label">city</label>
                                    <div class="col-sm-4">
                                         <select class="form-control" name="city" >
                                            <option value="select city">select city</option>
                                            <option value="Surat">Surat</option>
                                            <option value="Rajkot">Rajkot</option>
                                            <option value="Ahemdabad">Ahemdabad</option>
                                            <option value="Vadodra">select city</option>
                                         </select>
                                        
                                        </div>
                                    <label for="inputfName4"  class="col-sm-2 col-form-label">course</label>
                                    <div class="col-sm-4">
                                         <select class="form-control" name="course" >
                                            <option value="select course">select course</option>
                                            <option value="Flamengo Dance">Flamengo Dance</option>
                                            <option value="Salsa Dance">Salsa Dance</option>
                                            <option value="Hip-Hop Dance">Hip-Hop Dance</option>
                                            <option value="Indian Dance">Indian Dance</option>
                                            <option value="Break Dance">Break Dance</option>
                                            <option value="Dallet Dance">Dallet Dance</option>
                                         </select>
                                        
                                    </div>
</div>
                                <div class="row mb-3">
                                    <label for="inputfName3" class="col-sm-2 col-form-label">Birth Of Date</label>
                                    <div class="col-sm-4">
                                        <input type="date" name="birthdate" class="form-control" id="inputfName3">
                                    </div>
                                    <label for="inputlName3" class="col-sm-2 col-form-label">Batch Time</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="batchtime" class="form-control" id="inputlName3">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputfName3" class="col-sm-2 col-form-label">Student MO</label>
                                    <div class="col-sm-4">
                                        <input type="contact" name="studentmo" class="form-control" id="inputfName3">
                                    </div>
                                    <label for="inputlName3" class="col-sm-2 col-form-label">Perent's Mo</label>
                                    <div class="col-sm-4">
                                        <input type="contact" name="perentsmo" class="form-control" id="inputlName3">
                                    </div>
                                </div>
                                </fieldset>
                                
                                <button type="submit" name="submit" class="btn btn-primary" style="width: 100%;">Register</button>
                            </form>
                        </div>
                    </div>
                    
            </div>
            <!-- Form End -->


            <?php
                    include 'footer.php';
                ?>    