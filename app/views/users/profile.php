<?php require APPROOT . '/views/inc/header.php'; ?>

    <?php flash('profile');?>

    <div class="container mt-5 mb-5">
        <form action="<?php echo URLROOT; ?>/users/profileEdit/<?php echo $_SESSION['user_id']; ?>" method="post">
            <div class="wrapper">
                <dl class="dl-horizontal">
                    <dt>Name :</dt>
                    <dd>
                        <div class="input-group">
                            <input class="form-control" name="name" placeholder="Enter your name"
                                   value="<?php echo $_SESSION['user_name']; ?>">
                        </div>
                    </dd>
                    <dt>Phone :</dt>
                    <dd>
                        <div class="input-group">
                            <input class="form-control" name="phone" placeholder="Enter your phone"
                                   value="<?php echo $_SESSION['user_phone']; ?>">
                        </div>
                    </dd>
                    <dt>Email :</dt>
                    <dd>
                        <div class="input-group">
                            <input class="form-control" name="email" placeholder="Enter your email"
                                   value="<?php echo $_SESSION['user_email']; ?>">
                        </div>
                    </dd>
                    <button class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>

    </body>
    <!-- Body Ends -->

<?php require APPROOT . '/views/inc/footer.php'; ?>