<?php require APPROOT . '/views/inc/header.php'; ?>

    <div class="container mt-3">
        <h1>Hi <?php echo $_SESSION['user_name']; ?>!</h1>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createClassModal">
            Create New Class
        </button>
    </div>
       
    

    <!-- Modal -->
    <div class="modal fade" id="createClassModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <h2 class="text-center mt-3"> Create New Class </h2>
                <hr>
                <div class="container mb-3">
                    <div class="form-group mb-3">
                        <label class="form-label">Session</label>
                        <select name="session" class="form-control">
                            <option value="2016-17">2020-21</option>
                            <option value="2016-17">2019-20</option>
                            <option value="2016-17">2018-19</option>
                            <option value="2016-17">2017-18</option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label">Semester</label>
                        <select name="Semester" class="form-control">
                            <option value="1">1rst</option>
                            <option value="2">2nd</option>
                            <option value="3">3rd</option>
                            <option value="4">4rth</option>
                            <option value="5">5th</option>
                            <option value="6">6th</option>
                            <option value="7">7th</option>
                            <option value="8">8th</option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label">Course Code</label>
                        <input type="text" class="form-control" name="code" placeholder="Eg - CSE-3104" required>
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label">Course Title</label>
                        <input type="text" class="form-control" name="code" placeholder="Eg - Web Technology Lab" required>
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label">Course Credit</label>
                        <select name="Semester" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>

                    <button class="btn btn-primary">Create Class</button>
                </div>
            </div>    
        </div>
    </div>

    <div class="row m-5">
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">CSE 3103</h4>
                    <h5>Web Technology</h5>
                </div>
                <div class="card-body">        
                    <table class="table">
                        <tr>
                            <td>Batch</td>                           
                            <td class="right">2nd</td>
                        </tr>
                        <tr>
                            <td>No of Students</td>                           
                            <td class="right">31</td>                           
                        </tr>
                        <tr>
                            <td>Credit</td>                           
                            <td class="right">01</td>                           
                        </tr>
                        <tr>
                            <td>No of Classes</td>                           
                            <td class="right">05</td>                           
                        </tr>
                    </table>  
                </div>
                <div class="card-footer bg-dark-blue"><a class="nav-link" href="<?php echo URLROOT; ?>/pages/attendance" >Attendance</a></div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">CSE 2205</h4>
                    <h5>Information Security</h5>
                </div>
                <div class="card-body">
                <table class="table">
                        <tr>
                            <td>Batch</td>                           
                            <td class="right">2nd</td>
                        </tr>
                        <tr>
                            <td>No of Students</td>                           
                            <td class="right">39</td>                           
                        </tr>
                        <tr>
                            <td>Credit</td>                           
                            <td class="right">02</td>                           
                        </tr>
                        <tr>
                            <td>No of Classes</td>                           
                            <td class="right">12</td>                           
                        </tr>
                    </table> 
                </div>
                <div class="card-footer bg-dark-blue"><a class="nav-link" href="<?php echo URLROOT; ?>/pages/attendance" >Attendance</a></div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card">
            <div class="card-header">
                    <h4 class="card-title">SE 1213</h4>
                    <h5>Object Oriented Concepts</h5>
                </div>
                <div class="card-body">
                <table class="table">
                        <tr>
                            <td>Batch</td>                           
                            <td class="right">1rst</td>
                        </tr>
                        <tr>
                            <td>No of Students</td>                           
                            <td class="right">34</td>                           
                        </tr>
                        <tr>
                            <td>Credit</td>                           
                            <td class="right">02</td>                           
                        </tr>
                        <tr>
                            <td>No of Classes</td>                           
                            <td class="right">09</td>                           
                        </tr>
                    </table> 
                </div>
                <div class="card-footer bg-dark-blue"><a class="nav-link" href="<?php echo URLROOT; ?>/pages/attendance" >Attendance</a></div>
            </div>
        </div>

    </div>

<!-- Body Ends -->

<?php require APPROOT . '/views/inc/footer.php'; ?>