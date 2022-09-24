<?php require APPROOT . '/views/inc/header.php'; ?>

    <div class="modal fade" id="instructionsModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <h2 class="text-center mt-3"> Instructions </h2>
                <hr>
                <div class="container mb-3">
                    <ol class="text-left">
                        <li>Click the
                            <button class="btn">A</button>
                            button next to that roll number to mark that student as present
                        </li>
                        <li>Click the
                            <button class="btn btn-success">P</button>
                            button if you have accidentally marked that student as present
                        </li>
                        <li>Click the
                            <button class="btn btn-primary">Submit Attendance</button>
                            button at top to save your attendance details
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <div class="container mt-3">
        <h1>Hi <?php echo $_SESSION['user_name']; ?>!</h1>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#instructionsModal">
            Instructions!
        </button>

        <form action="<?php echo URLROOT; ?>/pages/submitAttendance/<?php echo $data['course']->course_id; ?>" method="post">

            <div class="container mt-5 mb-5">

                <div class="row">
                    <?php foreach ($data['students'] as $student): ?>

                        <div class="student-record">
                            <span class="present"><?php echo $student->ID ?></span>
                            <input name="attendances[]" value="<?php echo $student->ID ?>" type="checkbox" data-toggle="toggle" data-on="P" data-off="A" data-onstyle="success"
                                   data-offstyle="danger">
                        </div>

                    <?php endforeach; ?>
                </div>
            </div>

            <div class="container mt-5 mb-5">
                <input type="submit" class="btn btn-success" value="Submit Attendance">
            </div>

        </form>
    </div>


<?php require APPROOT . '/views/inc/footer.php'; ?>