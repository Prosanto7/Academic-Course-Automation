<!-- Navigationbar Starts -->
    <nav class="navbar navbar-expand-lg sticky-top bg-dark-blue">
        <div class="container">
            <a href="#page-top">
                <img src="<?php echo URLROOT; ?>/res/favicon.png" width="50px">
            </a>
            <span class="navbar-brand mr-2">
                Academic Course Automation
            </span>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <img src="<?php echo URLROOT; ?>/res/menu.png" width="50px">
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav" style="margin-left: auto;">
                        <?php if($_SESSION['isadmin']):?>
                            <li class="nav-item"><a class="nav-link" href="<?php echo URLROOT; ?>/admins/index">Admin Panel</a></li>
                        <?php endif; ?>

                        <?php if(isset($_SESSION['user_id']) && !$_SESSION['isadmin']):?>
                            <li class="nav-item"><a class="nav-link" href="<?php echo URLROOT; ?>/courses/index">Home</a></li>
                            <!--<li class="nav-item"><a class="nav-link" href="<?php /*echo URLROOT; */?>/pages/student">Student Dashboard</a></li>-->
                            <li class="nav-item"><a class="nav-link" href="<?php echo URLROOT; ?>/users/profile">Profile</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo URLROOT; ?>/pages/statistics">Statistics</a></li>
                        <?php endif; ?>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                        <?php if(isset($_SESSION['user_id'])):?>
                            <li class="nav-item"><a class="nav-link" href="<?php echo URLROOT; ?>/users/logout">Logout</a></li>
                        <?php endif; ?>

                        <?php if(!isset($_SESSION['user_id'])):?>
                            <li class="nav-item"><a class="nav-link" href="<?php echo URLROOT; ?>/users/index">Login</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo URLROOT; ?>/users/signup">Signup</a></li>
                        <?php endif; ?>
                    </ul>
            </div>
        </div>
    </nav>
<!-- Navigationbar Ends -->