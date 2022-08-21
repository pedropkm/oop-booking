<?php
 require "../classes/Hotel.php";

 session_start();

 $_SESSION ['hotels'] = [
    new Hotel(
        1,
        "Grand Peak Hotel",
        750,
        10,
        false,
        "(HN) offers you a privileged experience combining comfort and conviviality. Whether you are a backpacker, a solo traveler or with your family, our hotel with top-of-the-range service will meet all your expectations. More than just a hotel, (HN) offers you a place to live and meet people.",
        "https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTJ8fGhvdGVsc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60",

    ),
    new Hotel(
        2, 
        "OceanSide Hotel.", 
        900, 
        15, 
        false, 
        "They provide the luxury of living in the heart of the city without compromising on the views, services, calmness and tranquillity that you look for in an ideal hotel. Their hotels feature luxury spa treatments, restaurants and bars, fitness centres and range of well-designed rooms and suites",
        "https://images.unsplash.com/photo-1584132967334-10e028bd69f7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8aG90ZWxzfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60"  ),

    new Hotel(
        3, 
        "LakeSide Hotel.", 
        1500, 
        20, 
        false, 
        "(HN) offers you a privileged experience combining comfort and conviviality. Whether you are a backpacker, a solo traveler or with your family, our hotel with top-of-the-range service will meet all your expectations. More than just a hotel, (HN) offers you a place to live and meet people.",
        "https://images.unsplash.com/photo-1596436889106-be35e843f974?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fGhvdGVsc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60",
    ),
 ];
 $selectedHotelId = $_GET['hotelId'];
 $selectedHotel;

 foreach ($_SESSION['hotelList'] as $hotel) {

    if ($hotel->getId() == $selectedHotelId) {

        $selectedHotel = $hotel;
    }
}
echo "custoemr data:";

var_dump($_SESSION['Firstname']);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Booking</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>

<body>

    <h1 class="title">
        Confirm Booking
    </h1>

    <hr>

    <div class='box'>
        <h2 class="subtitle">
            Customer Information:
        </h2>
        <?php
        foreach ($_SESSION['customer'] as $detail) {
            echo "
                    <li>
                        $detail
                    </li>
                ";
        }
        ?>
    </div>


    <h2 class="subtitle">
        Hotel Information:
    </h2>
    <?php
    echo "
            <div class='box'>
                <li> Hotel Id: " . $selectedHotel->getId() . " </li>
                <li> Name: " . $selectedHotel->getName() . " </li>
                <li> Cost per night: R" . $selectedHotel->getCostPerNight() . " </li>
                <li>";
    if (!$selectedHotel->getFullyBooked()) {
        echo "<span class='has-text-success'> Rooms Available </span>";
    } else {
        echo "<span class='has-text-danger'> No rooms available </span>";
    }
    echo    "</li>             
            </div>
        ";
    ?>

</body>

</html>