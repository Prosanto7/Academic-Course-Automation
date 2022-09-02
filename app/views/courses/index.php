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
                            <option value="2020-21">2020-21</option>
                            <option value="2019-20">2019-20</option>
                            <option value="2018-19">2018-19</option>
                            <option value="2017-18">2017-18</option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label">Semester</label>
                        <select name="semester" class="form-control">
                            <option value="1">1st</option>
                            <option value="2">2nd</option>
                            <option value="3">3rd</option>
                            <option value="4">4th</option>
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
                        <input type="text" class="form-control" name="title" placeholder="Eg - Web Technology Lab" required>
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label">Course Credit</label>
                        <select name="credit" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>

                    <button id="create-class-btn" class="btn btn-primary">Create Class</button>
                </div>
            </div>    
        </div>
    </div>
    <!-- Modal End -->


    <div class="wrapper row m-5">

        <div class="col-lg-3 col-md-6 col-sm-12 class">
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

        <div class="col-lg-3 col-md-6 col-sm-12 class">
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

        <div class="col-lg-3 col-md-6 col-sm-12 class">
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

    <script>
        /*document.querySelector('#create-class-btn').addEventListener('click',function () {

            var items=document.querySelectorAll('#createClassModal input,#createClassModal select');
            var data={};
            for (let i of items) {
                data[i.name]=i.value;
            }

            var xhr=new XMLHttpRequest();
            xhr.open('POST','<?php echo URLROOT; ?>/courses/add',true);

            xhr.onload=function () {
                if(this.status === 200){
                    console.log(this.response);
                    var d=JSON.parse(this.response);
                    document.querySelector('#course-container').innerHTML+='<div class="col-lg-3 col-md-6 col-sm-12"> <div class="card"> <div class="card-header"> <h4 class="card-title">'+d.code+'</h4> <h5>'+d.title+'</h5> </div> <div class="card-body"> <table class="table"> <tr> <td>Batch</td> <td class="right">'+d.session+'</td> </tr> <tr> <td>No of Students</td> <td class="right">34</td> </tr> <tr> <td>Credit</td> <td class="right">'+d.credit+'</td> </tr> <tr> <td>No of Classes</td> <td class="right">09</td> </tr></table> </div> <div class="card-footer bg-dark-blue"><a class="nav-link" href="<?php echo URLROOT; ?>/pages/attendance?course_id='+d.course_id+'" >Attendance</a></div> </div> </div>';

                    var myModalEl = document.querySelector('.modal');
                    var modal = bootstrap.Modal.getInstance(myModalEl)
                    modal.hide();
                }
            }

            console.log(JSON.stringify(data));

            xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
            xhr.send(JSON.stringify(data));
        });*/

        document.querySelector('#create-class-btn').addEventListener('click',function () {

            var items=document.querySelectorAll('#createClassModal input,#createClassModal select');
            var data={};
            for (let i of items) {
                data[i.name]=i.value;
            }
            //console.log(data);

            $.ajax({
                url : '<?php echo URLROOT; ?>/courses/add',
                type : 'post',
                data : data,
                dataType : 'json',
                success : function (d) {

                    $('.wrapper').prepend('<div class="col-lg-3 col-md-6 col-sm-12 class"> <div class="card"> <div class="card-header"> <h4 class="card-title">'+d.code+'</h4> <h5>'+d.title+'</h5> </div> <div class="card-body"> <table class="table"> <tr> <td>Batch</td> <td class="right">'+d.session+'</td> </tr> <tr> <td>No of Students</td> <td class="right">34</td> </tr> <tr> <td>Credit</td> <td class="right">'+d.credit+'</td> </tr> <tr> <td>No of Classes</td> <td class="right">09</td> </tr></table> </div> <div class="card-footer bg-dark-blue"><a class="nav-link" href="<?php echo URLROOT; ?>/pages/attendance?course_id='+d.course_id+'" >Attendance</a></div> </div> </div>');
                    $('.wrapper .class').first().hide();
                    $('.wrapper .class').first().show('slow');
                    console.log(d);
                    $('.modal').modal('hide');
                },
                error : function (err) {
                    console.log(err);
                }
            });
        });



    </script>

<!-- Body Ends -->

<?php require APPROOT . '/views/inc/footer.php'; ?>