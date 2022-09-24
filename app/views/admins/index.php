<?php require APPROOT . '/views/inc/header.php'; ?>


    <div class="container mt-3">

        <?php flash('admins_index'); ?>

        <h1>Hi <?php echo $_SESSION['user_name']; ?>!</h1>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createBatchModal">
            Create New Batch
        </button>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="createBatchModal">
        <div class="modal-dialog modal-lg">
            <form>
                <div class="modal-content">
                    <h2 class="text-center mt-3"> Create New Batch </h2>
                    <hr>
                    <div class="container mb-3">
                        <div class="form-group mb-3">
                            <label class="form-label">Session</label>
                            <input id="session" type="text" name="session" class="form-control" placeholder="2020-21"
                                   required>
                            <span id="session-err" class="invalid-feedback"></span>
                        </div>

                        <button type="submit" id="create-class-btn" class="btn btn-primary">Create Batch</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Modal End -->


    <div class="wrapper row m-5 justify-content-center">

        <?php foreach ($data['batches'] as $batch): ?>
            <div class="col-lg-3 col-md-6 col-sm-12 class m-1">
                <div class="card">
                    <div class="card-header">

                        <div class="row">

                            <div class="col">
                                <h4 class="card-title"><?php echo $batch->session; ?></h4>
                            </div>

                            <div class="col-3 ">
                                <div class="dropdown ">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">

                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="<?php echo URLROOT; ?>/admins/deleteBatch/<?php echo $batch->session ?>">Remove</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <td>No of Students</td>
                                <td class="right">39</td>
                            </tr>
                        </table>
                    </div>
                    <div class="card-footer bg-dark-blue"><a class="nav-link"
                                                             href="<?php echo URLROOT; ?>/admins/manageBatch/<?php echo $batch->session; ?>">Manage</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>


    </div>

    <script>
        document.querySelector('#create-class-btn').addEventListener('click', function (e) {


            if($('#session').val()!==''){
                e.preventDefault();

                console.log('here')
                var items = document.querySelectorAll('#createBatchModal input,#createClassModal select');
                var data = {};
                for (let i of items) {
                    data[i.name] = i.value;
                }
                //console.log(data);

                $.ajax({
                    url: '<?php echo URLROOT; ?>/admins/addBatch',
                    type: 'post',
                    data: data,
                    dataType: 'json',
                    success: function (d) {

                        $('.wrapper').prepend('<div class="col-lg-3 col-md-6 col-sm-12 class m-1">'+
                            '<div class="card">'+
                        '<div class="card-header">'+

                        '<div class="row">'+

                        '<div class="col">'+
                        '<h4 class="card-title">'+d.session+'</h4>'+
                        '</div>'+

                        '<div class="col-3 ">'+
                        '<div class="dropdown ">'+
                        '<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">'+

                        '</button>'+
                        '<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">'+
                        '<li><a class="dropdown-item" href="<?php echo URLROOT; ?>/admins/deleteBatch/'+d.session+'">Remove</a></li>'+
                        '</ul>'+
                        '</div>'+
                        '</div>'+
                        '</div>'+

                        '</div>'+
                        '<div class="card-body">'+
                        '<table class="table">'+
                        ' <tr>'+
                        '<td>No of Students</td>'+
                        '<td class="right">39</td>'+
                        '</tr>'+
                        '</table>'+
                        '</div>'+
                        '<div class="card-footer bg-dark-blue"><a class="nav-link" href="<?php echo URLROOT; ?>/admins/manageBatch/'+d.session+'">Manage</a>'+
                        '</div>'+
                        '</div>'+
                        '</div>');

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
                        console.log('here2')
                        $('#session-err').html('Already exist');
                        $('#session-err').show();
                    }
                });
            }

        });

        $('#msg-flash').delay(1000).fadeOut('slow');

    </script>

    <!-- Body Ends -->

<?php require APPROOT . '/views/inc/footer.php'; ?>