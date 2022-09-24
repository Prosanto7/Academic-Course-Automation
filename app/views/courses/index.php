<?php require APPROOT . '/views/inc/header.php'; ?>


    <div class="container mt-3">

        <?php flash('courses_index'); ?>

        <h1>Hi <?php echo $_SESSION['user_name']; ?>!</h1>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createClassModal">
            Create New Class
        </button>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="createClassModal">
        <div class="modal-dialog modal-lg">
            <form>
                <div class="modal-content">
                    <h2 class="text-center mt-3"> Create New Class </h2>
                    <hr>
                    <div class="container mb-3">
                        <div class="form-group mb-3">
                            <label class="form-label">Session</label>
                            <select id="session" name="session" class="form-control">
                                <?php foreach ($data['batches'] as $batch): ?>
                                    <option value="<?php echo $batch->session; ?>"><?php echo $batch->session; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label">Course Code</label>
                            <input id="code" type="text" class="form-control" name="code" placeholder="Eg - CSE-3104"
                                   required>
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label">Course Title</label>
                            <input id="title" type="text" class="form-control" name="title"
                                   placeholder="Eg - Web Technology Lab" required>
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label">Course Credit</label>
                            <select id="credit" name="credit" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>

                        <button type="submit" id="create-class-btn" class="btn btn-primary">Create Class</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Modal End -->


    <div class="wrapper row m-5 justify-content-center">

        <?php foreach ($data['courses'] as $course): ?>
            <div class="col-lg-3 col-md-6 col-sm-12 class m-1">
                <div class="card">
                    <div class="card-header">

                        <div class="row">

                            <div class="col">
                                <h4 class="card-title"><?php echo $course->code; ?></h4>
                                <h5><?php echo $course->title; ?></h5>
                            </div>

                            <div class="col-3 ">
                                <div class="dropdown ">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">

                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="<?php echo URLROOT; ?>/courses/delete/<?php echo $course->course_id ?>">Remove</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <td>Session</td>
                                <td class="right"><?php echo $course->session; ?></td>
                            </tr>
                            <tr>
                                <td>Credit</td>
                                <td class="right"><?php echo $course->credit; ?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="card-footer bg-dark-blue"><a class="nav-link"
                                                             href="<?php echo URLROOT; ?>/pages/attendance/<?php echo $course->course_id; ?>">Attendance</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>


    </div>

    <script>
        document.querySelector('#create-class-btn').addEventListener('click', function (e) {


            if($('#title').val()!=='' && $('#code').val()!=='' && $('#session').val()!=='' && $('#credit').val()!==''){
                e.preventDefault();

                console.log('here')
                var items = document.querySelectorAll('#createClassModal input,#createClassModal select');
                var data = {};
                for (let i of items) {
                    data[i.name] = i.value;
                }
                //console.log(data);

                $.ajax({
                    url: '<?php echo URLROOT; ?>/courses/add',
                    type: 'post',
                    data: data,
                    dataType: 'json',
                    success: function (d) {

                        $('.wrapper').prepend('<div class="col-lg-3 col-md-6 col-sm-12 class"> <div class="card"> <div class="card-header"> <h4 class="card-title">' + d.code + '</h4> <h5>' + d.title + '</h5> </div> <div class="card-body"> <table class="table"> <tr> <td>Batch</td> <td class="right">' + d.session + '</td> </tr> <tr> <td>No of Students</td> <td class="right">34</td> </tr> <tr> <td>Credit</td> <td class="right">' + d.credit + '</td> </tr> <tr> <td>No of Classes</td> <td class="right">09</td> </tr></table> </div> <div class="card-footer bg-dark-blue"><a class="nav-link" href="<?php echo URLROOT; ?>/pages/attendance/' + d.course_id + '" >Attendance</a></div> </div> </div>');
                        $('.wrapper .class').first().hide();
                        $('.wrapper .class').first().show('slow');

                        for (let i of items) {
                            i.value = '';
                        }

                        console.log(d);
                        $('.modal').modal('hide');
                    },
                    error: function (err) {
                        console.log(err);
                    }
                });
            }

        });

        $('#msg-flash').delay(3000).fadeOut('slow');

    </script>

    <!-- Body Ends -->

<?php require APPROOT . '/views/inc/footer.php'; ?>