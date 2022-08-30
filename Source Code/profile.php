<?php
    require_once('header.php');
?>

<!-- Body Starts -->

<body>

    <?php
        require_once('teacher-navbar.php');
    ?> 

<div class="container mt-5 mb-5">
    <div class="wrapper">
      <dl class="dl-horizontal">
        <dt>Name : </dt>
        <dd>
          <div class="input-group">
            <input class="form-control" name="name" placeholder="Enter your name" value="Prosanto Deb">
          </div>
        </dd>
        <dt>Phone : </dt>
        <dd>
          <div class="input-group">
          <input class="form-control" name="phone" placeholder="Enter your phone" value="01793222825">
          </div>
        </dd>
        <dt>Email : </dt>
        <dd>
          <div class="input-group">
          <input class="form-control" name="email" placeholder="Enter your email"  value="prosantodeb7@gmail.com">
          </div>
        </dd>
     <button class="btn btn-primary">Save</button>
    </div>
</div>
       
</body>
<!-- Body Ends -->

<?php
    require_once('footer.php');
?>