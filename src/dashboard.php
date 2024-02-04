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
<div  class="p-4 sm:ml-64">


    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <div class="text-gray-500  dark:text-white dark:bg-gray-800  ">
            <!-- Header -->
            <div class="">
                <div class="p-5 text-lg  text-left  text-gray-900 dark:text-white dark:bg-gray-800">
                    <h1 class="text-3xl text-left">Dashboard</h1>
                </div>
            </div>

            <!-- Content  cards -->
            <div class="grid grid-cols-4 gap-2">
                <div class="ms:ml-6">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Animi aperiam culpa dignissimos, eligendi eos esse est
                    excepturi iure officiis provident quae quaerat quis quod
                    repellat reprehenderit sed sit soluta voluptates!
                </div>
                <div class="">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Animi aperiam culpa dignissimos, eligendi eos esse est
                    excepturi iure officiis provident quae quaerat quis quod
                    repellat reprehenderit sed sit soluta voluptates!
                </div>
                <div class="">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Animi aperiam culpa dignissimos, eligendi eos esse est
                    excepturi iure officiis provident quae quaerat quis quod
                    repellat reprehenderit sed sit soluta voluptates!
                </div>
                <div class="">
                    <div class="">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Animi aperiam culpa dignissimos, eligendi eos esse est
                        excepturi iure officiis provident quae quaerat quis quod
                        repellat reprehenderit sed sit soluta voluptates!
                    </div>

                </div>

            </div>


            </div>



        </div>






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