<?php
    include 'databaseConnection.php';

    if (isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $color = $_POST['color'];
        $price = $_POST['price'];
        $category = $_POST['category'];

        $sql = "INSERT INTO test_db (animalName, color, cardType, Price) VALUES ('$name', '$color', '$category', '$price')";
        if (!empty($con)) {
            $result1 = mysqli_query($con, $sql);

        }

        if ($result1 === true)
        {
            $_SESSION['form_submitted'] = true;
            echo '<script>alert("Product added successfully")</script>';
            echo "Product added successfully";
        }
        else
        {
            echo '<script>alert("Product not added")</script>';
            echo "Product not added";
        }

        // Redirect to the same page to prevent form resubmission on refresh
        header("Location: ".$_SERVER['PHP_SELF']);
        exit;
    }
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
//    include_once('navbarAndSideBar.php');
    include "navbarAndSideBar.php";
?>

<!-- Main section -->
<div class="p-4 sm:ml-64">

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <caption
                    class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                <!-- Heading -->
                <h1 class="text-3xl text-left">Products</h1>

                <!-- Search Bar & New Button -->
                <div class="flex flex-row">
                    <!-- Search Bar -->
                    <div class="flex-none">
                        <label for="table-search" class="sr-only">Search</label>
                        <div class="relative mt-1">
                            <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                </svg>
                            </div>
                            <input type="text" id="table-search"
                                   class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   placeholder="Search for items">
                        </div>
                    </div>
                    <div class="flex-grow"></div>
                    <!-- New Button -->
                    <div class="text-right rtl:text-left flex-none">
                        <button id="defaultModalButton" data-modal-target="defaultModal"
                                data-modal-toggle="defaultModal"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4
                                focus:outline-none focus:ring-blue-300 font-medium rounded-lg
                                text-sm px-5 py-2.5 text-center inline-flex items-center me-2
                                dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                type="button">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2" d="M5 12h14m-7 7V5"/>
                            </svg>
                            New
                        </button>

                        <!-- Add Product -->
                        <div id="defaultModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                            <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                                <!-- Modal content -->
                                <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                                    <!-- Modal header -->
                                    <!-- Modal body -->
                                    <form method="post">
                                        <div class="grid gap-4 mb-4 sm:grid-cols-2">
                                            <div>
                                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                                <input type="text"
                                                       name="name"
                                                       id="name"
                                                       value=""
                                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600
                                                       focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600
                                                       dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                       placeholder="product name" required="" autocomplete="off">
                                            </div>
                                            <div>
                                                <label for="color" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Color</label>
                                                <input type="text"
                                                       name="color"
                                                       id="color"
                                                       value=""
                                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600
                                                       focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600
                                                       dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                       placeholder="Product Color" required="" autocomplete="off">
                                            </div>
                                            <div>
                                                <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                                                <input type="number"
                                                       name="price"
                                                       id="price"
                                                       value=""
                                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600
                                                       focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600
                                                       dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                       placeholder="$" required="" autocomplete="off">
                                            </div>
                                            <div>
                                                <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                                                <input type="text"
                                                       name="category"
                                                       id="category"
                                                       value=""
                                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600
                                                       focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600
                                                       dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                       placeholder="Product Category" required="" autocomplete="off">
                                            </div>
                                        </div>
                                        <button type="submit"
                                                name="submit"
                                                class="text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4
                                                focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5
                                                text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                            <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                                            Add new product
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Product Added Alert -->
                        <div class="" id="productAddedAlert">
                            <div id="alert-border-3"
                                 class="fixed bottom-0 right-0 rounded-lg
                             w-1/4 flex items-center p-4 m-4 text-green-800 border-t-4 border-green-300 bg-green-50
                             dark:text-green-400 dark:bg-gray-800 dark:border-green-800" role="alert">
                                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                     fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10
                                .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1
                                0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                                </svg>
                                <div class="ms-3 text-sm font-medium">
                                    Product added successfully.
                                </div>
                                <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500
                            rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex
                            items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
                                        data-dismiss-target="#alert-border-3" aria-label="Close">
                                    <span class="sr-only">Dismiss</span>
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                    </svg>
                                </button>
                            </div>
                        </div>




                    </div>
                </div>
            </caption>

            <!-- Table Headings -->
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Product name
                </th>
                <th scope="col" class="px-6 py-3">
                    Sport
                </th>
                <th scope="col" class="px-6 py-3">
                    Category
                </th>
                <th scope="col" class="px-6 py-3">
                    Size
                </th>
                <th scope="col" class="px-6 py-3">
                    color
                </th>
                <th scope="col" class="px-6 py-3">
                    Price
                </th>
                <th scope="col" class="px-6 py-3">
                    Edit
                </th>
            </tr>
            </thead>
            <tbody>


            <?php
            $sql = "SELECT * FROM products";
            //$result = mysqli_query($con, $sql);
            if (!empty($con)) {
                $result = mysqli_query($con, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $name = $row['animalName'];
                        $color = $row['color'];
                        $cardType = $row['cardType'];
                        $price = $row['Price'];

                        echo
                            '
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">'
                            . $name .
                            '</th>
                            <td class="px-6 py-4">'
                            . $color .
                            '</td>
                            <td class="px-6 py-4">'
                            . $cardType .
                            '</td>
                            <td class="px-6 py-4">'
                            . $price .
                            '</td>
                        </tr>';
                    }
                }
            }
            
            ?>


            </tbody>
        </table>
    </div>


</div>

<script>
    // Select the element
    var element = document.getElementById("products_page");

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
<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById('defaultModalButton').click();
    });
</script>
<script>
    // Select the alert div
    let alertDiv = document.getElementById("productAddedAlert");

    alertDiv.classList.remove("hidden");

    // Hide the alert div after 5 seconds
    setTimeout(function() {
        alertDiv.style.display = "none";
    }, 5000);
</script>

<script src="../node_modules/flowbite/dist/flowbite.min.js"></script>
</body>
</html>