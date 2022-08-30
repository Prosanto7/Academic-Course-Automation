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
                    <button class="btn btn-primary pull-right">Login</button>
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
                        <button class="btn btn-primary pull-right">Sign Up</button>
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