<?php require APPROOT . '/views/inc/header.php'; ?>


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
                                                             href="<?php echo URLROOT; ?>/pages/statisticsDetails/<?php echo $course->course_id; ?>">Statistics</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>


    </div>


<?php require APPROOT . '/views/inc/footer.php'; ?>