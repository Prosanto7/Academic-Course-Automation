<?php
require_once('php/Database.php');

$db=Database::getInstance();

if(isset($_POST['signup'])) {
    $db->query("insert into users (name,phone,email,pass_hash)
                                values (:name,:phone,:email,:password)");

    $db->bind(':name', $_POST['name']);
    $db->bind(':phone', $_POST['phone']);
    $db->bind(':email', $_POST['email']);
    $db->bind(':password', password_hash($_POST['password'], PASSWORD_DEFAULT));

    if ($db->execute()) {
        //unset($_POST['signup']);
        echo "<script>alert('Sign up successfull. You can login now.')</script>";
    }else{

    }

}else if(isset($_POST['login'])){
    $db->query('select * from users where email = :email');
    $db->bind(':email', $_POST['email']);

    $row = $db->single();

    $hashed_password = $row->pass_hash;

    if (password_verify($_POST['password'], $hashed_password)) {
        session_start();
        $_SESSION['user']=$row;
        header('Location:teacher.php');
    } else {
        echo "<script>alert('Invalid credentials')</script>";
    }
}
?>



<?php
    require_once('header.php');
?>

<!-- Body Starts -->

<body>

    <?php
        require_once('navbar.php');
    ?> 
    
    <div class="container mt-5">
        <table class="table table-bordered table-striped">
            <thead>
                <th>Login</th>
            </thead>
            <tr>
            <td>
                <form method = "POST">
                    <div class="mb-3">
                        <label class="form-label">Email ID</label>
                        <input class="form-control" placeholder="Email" type="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input class="form-control" placeholder="Password" type="password" name="password" required>
                    </div>
                    <input type="submit" name="login" class="btn btn-primary pull-right" value="Login">
                </form>
            </td>
            </tr>
        </table>
    </div>

    <div class="container mt-5 mb-5">
        <table class="table table-bordered table-striped">
            <thead>
                <th>Sign Up</th>
            </thead>
            <tr>
                <td>
                    <form id="signup" method = "POST">
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input class="form-control" placeholder="Name" type="text" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone Number</label>
                            <input class="form-control" placeholder="Phone" type="text" name="phone" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email ID</label>
                            <input class="form-control" placeholder="Email" type="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input class="form-control" placeholder="Password" type="password" name="password" required>
                            <span class="form-text">Password should be 6 characters long.</span>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Re-type Password</label>
                            <input class="form-control" placeholder="Re-type Password" type="password" name="password2" required>
                        </div>
                        <input type="submit" name="signup" class="btn btn-primary pull-right" value="Sign Up">
                    </form>
                </td>
            </tr>
        </table>
    </div>
    
</body>
<!-- Body Ends -->

<?php
    require_once('footer.php');
?>