<?php require APPROOT . '/views/inc/header.php'; ?>

    <div class="container mt-5 mb-5">
        <table class="table table-bordered table-striped">
            <thead>
            <th>Sign Up</th>
            </thead>
            <tr>
                <td>
                    <form action="<?php echo URLROOT; ?>/users/signup" id="signup" method="POST">
                        <div class="form-group mb-3">
                            <label class="form-label" for="name">Name: </label>
                            <input type="text" placeholder="Name" name="name" class="form-control <?php echo (!empty($data['name_err']))? 'is-invalid':''; ?>" value="<?php echo $data['name']; ?>">
                            <span class="invalid-feedback"><?php echo $data['name_err']; ?></span>
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label" for="phone">Phone: </label>
                            <input type="text" placeholder="Phone" name="phone" class="form-control <?php echo (!empty($data['phone_err']))? 'is-invalid':''; ?>" value="<?php echo $data['phone']; ?>">
                            <span class="invalid-feedback"><?php echo $data['phone_err']; ?></span>
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label" for="email">Email: </label>
                            <input type="email" placeholder="Email" name="email" class="form-control <?php echo (!empty($data['email_err']))? 'is-invalid':''; ?>" value="<?php echo $data['email']; ?>">
                            <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label" for="password">Password: <sup>*</sup></label>
                            <input type="password" placeholder="Password" name="password" class="form-control <?php echo (!empty($data['password_err']))? 'is-invalid':''; ?>" value="<?php echo $data['password']; ?>">
                            <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
                        </div>
                        <div  class="form-group mb-3">
                            <label class="form-label" for="confirm_password">Confirm password: <sup>*</sup></label>
                            <input type="password" placeholder="Re-type Password" name="confirm_password" class="form-control <?php echo (!empty($data['confirm_password_err']))? 'is-invalid':''; ?>" value="<?php echo $data['confirm_password']; ?>">
                            <span class="invalid-feedback"><?php echo $data['confirm_password_err']; ?></span>
                        </div>


                        <div class="row">
                            <div class="col">
                                <input type="submit" value="Register" class="btn btn-success btn-block">
                            </div>
                            <div class="col">
                                <a href="<?php echo URLROOT; ?>/users/login" class="btn btn-primary pull-right">Have an account? Login</a>
                            </div>
                        </div>

                    </form>
                </td>
            </tr>
        </table>
    </div>
    <!-- Body Ends -->

<?php require APPROOT . '/views/inc/footer.php'; ?>