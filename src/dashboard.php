<?php
include 'databaseConnection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="./output.css">
</head>
<body>


<?php
include "navbarAndSideBar.php";
?>

<!-- Main section -->
<div class="p-4 sm:ml-64">


</div>


<script>
    // Select the element
    var element = document.getElementById("dashboard_page");

    // Get the class list
    var classes = element.className.split(" ");

    // Iterate over the classes
    for (var i = 0; i < classes.length; i++) {
        // If the class contains 'hover:', replace it with an empty string
        if (classes[i].includes('hover:')) {
            classes[i] = classes[i].replace('hover:', '');
        }
    }

    // Join the classes back together and set the className of the element
    element.className = classes.join(" ");

</script>
<script src="../node_modules/flowbite/dist/flowbite.min.js"></script>
</body>
</html>