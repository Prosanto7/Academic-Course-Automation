<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="container mt-5">
    <table class="table table-bordered table-striped">
        <thead>
        <th>Login</th>
        </thead>
        <tr>
            <td>
                <form action="<?php echo URLROOT; ?>/users/login" method="POST">
                    <div class="mb-3">
                        <label class="form-label" for="email">Email: </label>
                        <input type="email" placeholder="Email" name="email" class="form-control <?php echo (!empty($data['email_err']))? 'is-invalid':''; ?>" value="<?php echo $data['email']; ?>">
                        <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="password">Password: <sup>*</sup></label>
                        <input type="password" placeholder="Password" name="password" class="form-control <?php echo (!empty($data['password_err']))? 'is-invalid':''; ?>" value="<?php echo $data['password']; ?>">
                        <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
                    </div>

                    <div class="row">
                        <div class="col">
                            <input type="submit" value="Login" class="btn btn-success btn-block">
                        </div>
                        <div class="col">
                            <a href="<?php echo URLROOT; ?>/users/signup" class="btn btn-primary pull-right">No account? Register</a>
                        </div>
                    </div>
                </form>
            </td>
        </tr>
    </table>
</div>


<!-- Body Ends -->

<?php require APPROOT . '/views/inc/footer.php'; ?>