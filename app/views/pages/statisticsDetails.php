<?php require APPROOT . '/views/inc/header.php'; ?>


    <div class="container">
        <div class="main py-5">
            <?php flash('admins'); ?>

            <h4>Total number of class occurred: <?php echo $data['total_class']; ?></h4>

            <div class="card" style="width: 100%;">
                <div class="card-header">
                    <div class="row">
                        <div class="col col-md-6">
                            <i class="fas fa-table me-1"></i> <span class="table-head">Students statistics</span>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table my-4 cell-border pt-3 table-striped">
                        <thead>
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Percentage</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($data['students'] as $student) : ?>
                            <tr class="text-center">
                                <td class="tableDataWrap"><?php echo $student->ID; ?></td>
                                <td class="tableDataWrap"><?php echo $student->name; ?></td>
                                <td class="tableDataWrap"><?php echo $data['attendances'][$student->ID]; ?></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


<?php require APPROOT . '/views/inc/footer.php'; ?>