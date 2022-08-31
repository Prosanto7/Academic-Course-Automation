<?php require APPROOT . '/views/inc/header.php'; ?>

    <div class="container mt-3">
        <h1>Hi <?php echo $_SESSION['user_name']; ?>!</h1>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#instructionsModal">
            Instructions!
        </button>

        <button type="button" class="btn btn-primary" onclick="submitData()">
            Submit Attendance
        </button>

        <div class="container mt-5">
            <?php
                for($i = 1; $i < 31; $i++) {
                    echo '<div class="student-record">
                            <span>ASH192500'.$i.'M</span>: 
                            <button class="marker btn" onclick="markAsPresent('.($i-1).')">A</button> 
                          </div>';
                    } 
                    
                    echo '<div class="student-record mb-5">
                            <span>ASH19250031M</span>: 
                            <button class="marker btn" onclick="markAsPresent('.($i-1).')">A</button> 
                          </div>';
            ?>
        </div>

        <div class="modal fade" id="instructionsModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <h2 class="text-center mt-3"> Instructions </h2>
                    <hr>
                    <div class="container mb-3">
                        <ol class="text-left">
                                <li>Click the <button class="btn">A</button> button next to that roll number to mark that student as present</li>
                                <li>Click the <button class="btn btn-success">P</button> button if you have accidentally marked that student as present</li>
                                <li>Click the <button class="btn btn-primary">Submit Attendance</button> button at top to save your attendance details</li>
                        </ol>
                    </div>    
                </div>
            </div>
        </div>
    </div>

<?php require APPROOT . '/views/inc/footer.php'; ?>