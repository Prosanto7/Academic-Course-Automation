<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Webpage Title -->
    <title>Academic Course Automation</title>

    <!-- Webpage Icon -->
    <link rel="icon" href="<?php echo URLROOT; ?>/res/favicon.png" type="image/png">

    <!-- Bootstrap Srouce Code -->
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/bootstrap.min.css">

    <!-- Bootstrap Bundle Js -->
    <script src="<?php echo URLROOT; ?>/js/bootstrap.bundle.min.js"></script>

    <!-- External CSS -->
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">
    
    <!-- External JavaScript -->
    <script>
        function submitData() {
            window.location = 'teacher.php';
        }

        function markAsPresent(index) {
            const button = document.getElementsByClassName('marker');
            
            button[index].innerHTML = "<button class='btn btn-success'>P</button>";
        }
    </script>
</head>

<body>

<?php require_once APPROOT.'/views/inc/navbar.php';?>