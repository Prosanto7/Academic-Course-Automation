<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Webpage Title -->
    <title>Academic Course Automation</title>

    <!-- Webpage Icon -->
    <link rel="icon" href="res/favicon.png" type="image/png">

    <!-- Bootstrap Srouce Code -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Bootstrap Bundle Js -->
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- External CSS -->
    <link rel="stylesheet" href="css/style.css">
    
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