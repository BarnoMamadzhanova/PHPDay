<?php

$cars_types = ['Standard', 'Business', 'First class'];
$characteristics = ['Mark', 'Model', 'Price', 'Location', 'Availability'];
$values_cars = [
    'Standard' => [
        'Mark' => 'Ford',
        'Model' => 'Focus',
        'Price' => 50,
        'Location' => 'Vienna',
        'Availability' => 'available'
    ],
    'Business'  => [
        'Mark' => 'Audi',
        'Model' => 'A3',
        'Price' => 100,
        'Location' => 'Vienna',
        'Availability' => 'available'
    ],
    'First class'  => [
        'Mark' => 'Mercedes-Benz',
        'Model' => 'C-Class',
        'Price' => 150,
        'Location' => 'Vienna',
        'Availability' => 'available'
    ]
]; 

$values_minivans = [
    'Standard' => [
        'Mark' => 'Citroen',
        'Model' => 'C4 Grand Picasso',
        'Price' => 250,
        'Location' => 'Vienna',
        'Availability' => 'not available'
    ],
    'Business' => [
        'Mark' => 'Ford',
        'Model' => 'Transit',
        'Price' => 380,
        'Location' => 'Vienna',
        'Availability' => 'available'
    ],
    'First class' => [
        'Mark' => 'Volkswagen',
        'Model' => 'Transporter',
        'Price' => 500,
        'Location' => 'Vienna',
        'Availability' => 'available'
    ]
];

$values_trucks = [
    'Standard' => [
        'Mark' => 'Cargo',
        'Model' => 'Van',
        'Price' => 2500,
        'Location' => 'Vienna',
        'Availability' => 'not available'
    ],
    'Business' => [
        'Mark' => 'Moving',
        'Model' => 'Truck',
        'Price' => 3500,
        'Location' => 'Vienna',
        'Availability' => 'available'
    ],
    'First class' => [
        'Mark' => 'Actros',
        'Model' => 'L till 250 tonnes',
        'Price' => 4500,
        'Location' => 'Vienna',
        'Availability' => 'available'
    ]
];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Day1</title>
    <style
        type="text/css" media="all">
        @import url("style.css");
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    

<!-- 
// Exercise 1
// Print your name in an h1 HTML element using PHP (define the variable and store your name into it). 
// Use external CSS to position your name in the middle of the screen (horizontal, vertical).
   
//    $firstName = 'Barno';
//    $lastName = 'Mamadzhanova';
//    $birthYear = 1996;
//    $job = 'pizza maker';
//    $age = date('Y') - $birthYear;

//    echo "<h1>Hi, my name is $firstName $lastName</h1>";

// Exercise 2
// create a couple of variables, name, age, and job title, and after that,
// you print a message on the screen "hi, my name is NAME, and i am AGE, and i work as a JOB_TITLE"


//    echo "Hi, my name is $firstName $lastName,  and I am $age years old, and I work as $job."

// Exercise 3
// create an array that has names Mark, John, Georg and Lisa, print the 3rd player on
// the screen like this: "the third player in the team is 3rd_player".

// $names_array = ['Mark', 'John', 'Georg', 'Lisa'];

// echo "The third player in the team is " . $names_array[2];


// Day 1 | Advanced
// Define an associative array and output array elements on the screen. 
// Use for this cartoon/anime/game characters (like Mickey Mouse, Super Mario, Goku, Pokemon etc.). 


// $characters = [
//     'character1' => 'Mickey Mouse',
//     'character2' => 'Super Mario',
//     'character3' => 'Sebastian',
//     'character4' => 'Flash'
// ];

// echo $characters['character1'] . "<br>";
// echo $characters['character2'] . "<br>";
// echo $characters['character3'] . "<br>";
// echo $characters['character4'];


// Transform this code into a solution done with multidimensional arrays to track different properties
// of the characters. (hint: in order to output nicely (user friendly) your solutions on the browser you 
// will need the HTML tags for it).  

// $characters = [
//     'Mickey Mouse' => [
//         'friendliness' => 10,
//         'compassion' => 10,
//         'coolness' => 5,
//     ],
//     'Super Mario' => [
//         'friendliness' => 10,
//         'compassion' => 8,
//         'coolness' => 6,
//     ],
//     'Sebastian' => [
//         'friendliness' => 5,
//         'compassion' => 5,
//         'coolness' => 10,
//     ],
//     'Flash' => [
//         'friendliness' => 7,
//         'compassion' => 6,
//         'coolness' => 7,
//     ]
//     ];

// echo "Friendliness of Mickey Mouse: ";
// echo $characters['Mickey Mouse']['friendliness']. "<br>";
// echo " Compassion of Super Mario: ";
// echo $characters['Super Mario']['compassion']. "<br>";
// echo " Coolness of Sebastian: ";
// echo $characters['Sebastian']['coolness']. "<br>";
// echo " Friendliness of Flash: ";
// echo $characters['Flash']['friendliness']. "<br>";

// echo "Friendliness of Mickey Mouse: " . 
//      $characters['Mickey Mouse']['friendliness']. "<br>";
// echo " Compassion of Super Mario: " .
//      $characters['Super Mario']['compassion']. "<br>";
// echo " Coolness of Sebastian: " . 
//      $characters['Sebastian']['coolness']. "<br>";
// echo " Friendliness of Flash: " . 
//      $characters['Flash']['friendliness']. "<br>";


    //  Day 1 | Challenge
    //  This chapter will be Project-based. We will create a Car rental agency. 
    //  The Car agency should show the availability of the cars, the make, and models of the cars, price, 
    //  and location of the specific rental place.
    //  The second thing you need to do is to create user-friendly GUI rendering. You should 
    //  use Bootstrap elements to create GUI for this project. Come up with an idea of which data you would 
    //  like to present and which pages (forms, tables) you need in your GUI part and create them.  -->



<nav class="navbar fixed-top navbar-expand-lg  bg-dark border-bottom border-body" data-bs-theme="dark" >
    <div class="container-fluid">
      <a class="navbar-brand" href="#">RentRide</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
      </div>
    </div>
</nav>

<!-- Hero image -->

<section class="hero">
<div id="carouselExampleDark" class="carousel carousel-dark slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="https://cdn.pixabay.com/photo/2018/04/09/22/07/car-3305699_1280.jpg" class="d-block w-100 image-slide" alt="...">
      <div class="carousel-caption d-none d-md-block caption">
        <a href="#car"><h4>Cars</h4></a>
        <p>A great selection of business class cars for rent</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="https://cdn.pixabay.com/photo/2017/04/25/16/00/mobile-home-2260094_1280.jpg" class="d-block w-100 image-slide" alt="...">
      <div class="carousel-caption d-none d-md-block caption">
        <a href="#minivan"><h4>Minivans</h4></a>
        <p>Minivan hire for travelling</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://cdn.pixabay.com/photo/2014/11/17/12/15/semi-trailers-534577_1280.jpg" class="d-block w-100 image-slide" alt="...">
      <div class="carousel-caption d-none d-md-block caption">
        <a href="#truck"><h4>Trucks</h4></a>
        <p>Truck rental for transport of goods</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>

<!-- Main container -->

<div class="container my-5" id="car">
    <h3 class="my-5">Car rental</h3>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
    <div class="col">
        <div class="card">
            <img src="https://cdn.pixabay.com/photo/2021/11/13/19/04/car-rental-6792111_1280.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo "$cars_types[0]";?></h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <?php echo $characteristics[0] . ": " . $values_cars['Standard']['Mark']; ?>
                </li>
                <li class="list-group-item">
                    <?php echo $characteristics[1] . ": " .  $values_cars['Standard']['Model']; ?>
                </li>
                <li class="list-group-item">
                    <?php echo $characteristics[2] . ": " . $values_cars['Standard']['Price'] . " for 3 days"; ?>
                </li>
                <li class="list-group-item">
                    <?php echo $characteristics[3] . ": " . $values_cars['Standard']['Location']; ?>
                </li>
                <li class="list-group-item">
                    <?php echo $characteristics[4] . ": " .  $values_cars['Standard']['Availability']; ?>
                </li>
            </ul>
        </div>
    </div>
    <div class="col">
        <div class="card">
                <img src="https://cdn.pixabay.com/photo/2018/05/12/19/47/auto-3394416_1280.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo "$cars_types[1]";?></h5>
                </div>
                    <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <?php echo $characteristics[0] . ": " . $values_cars['Business']['Mark']; ?>
                    </li>
                    <li class="list-group-item">
                        <?php echo $characteristics[1] . ": " .  $values_cars['Business']['Model']; ?>
                    </li>
                    <li class="list-group-item">
                        <?php echo $characteristics[2] . ": " . $values_cars['Business']['Price'] . " for 3 days"; ?>
                    </li>
                    <li class="list-group-item">
                        <?php echo $characteristics[3] . ": " . $values_cars['Business']['Location']; ?>
                    </li>
                    <li class="list-group-item">
                        <?php echo $characteristics[4] . ": " .  $values_cars['Business']['Availability']; ?>
                    </li>
                </ul>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <img src="https://cdn.pixabay.com/photo/2015/12/22/13/57/autostadt-wolfsburg-1104120_1280.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo "$cars_types[2]";?></h5>
            </div>
            <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <?php echo $characteristics[0] . ": " . $values_cars['First class']['Mark']; ?>
                    </li>
                    <li class="list-group-item">
                        <?php echo $characteristics[1] . ": " .  $values_cars['First class']['Model']; ?>
                    </li>
                    <li class="list-group-item">
                        <?php echo $characteristics[2] . ": " . $values_cars['First class']['Price'] . " for 3 days"; ?>
                    </li>
                    <li class="list-group-item">
                        <?php echo $characteristics[3] . ": " . $values_cars['First class']['Location']; ?>
                    </li>
                    <li class="list-group-item">
                        <?php echo $characteristics[4] . ": " .  $values_cars['First class']['Availability']; ?>
                    </li>
            </ul>
        </div>
    </div>
</div>



<div class="container" id="minivan">
<h3 class="my-5">Minivan rental</h3>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
    <div class="col">
        <div class="card">
            <img src="https://cdn.pixabay.com/photo/2017/10/30/11/00/minivan-2902127_1280.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo "$cars_types[0]";?></h5>
            </div>
            <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <?php echo $characteristics[0] . ": " . $values_minivans['Standard']['Mark']; ?>
                    </li>
                    <li class="list-group-item">
                        <?php echo $characteristics[1] . ": " .  $values_minivans['Standard']['Model']; ?>
                    </li>
                    <li class="list-group-item">
                        <?php echo $characteristics[2] . ": " . $values_minivans['Standard']['Price'] . " for 3 days"; ?>
                    </li>
                    <li class="list-group-item">
                        <?php echo $characteristics[3] . ": " . $values_minivans['Standard']['Location']; ?>
                    </li>
                    <li class="list-group-item">
                        <?php echo $characteristics[4] . ": " .  $values_minivans['Standard']['Availability']; ?>
                    </li>
            </ul>
        </div>
    </div>
    <div class="col">
        <div class="card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkD4Lxe9TBck9Y3VxSyFkkMmEdqquOSDBJmCwdE4rruA&s" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo "$cars_types[1]";?></h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <?php echo $characteristics[0] . ": " . $values_minivans['Business']['Mark']; ?>
                    </li>
                    <li class="list-group-item">
                        <?php echo $characteristics[1] . ": " .  $values_minivans['Business']['Model']; ?>
                    </li>
                    <li class="list-group-item">
                        <?php echo $characteristics[2] . ": " . $values_minivans['Business']['Price'] . " for 3 days"; ?>
                    </li>
                    <li class="list-group-item">
                        <?php echo $characteristics[3] . ": " . $values_minivans['Business']['Location']; ?>
                    </li>
                    <li class="list-group-item">
                        <?php echo $characteristics[4] . ": " .  $values_minivans['Business']['Availability']; ?>
                    </li>
                </ul>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <img src="https://media.cnn.com/api/v1/images/stellar/prod/210716140154-chrysler-pacifica-2021.jpg?q=w_2000,h_1334,x_0,y_0,c_fill" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo "$cars_types[2]";?></h5>
            </div>
            <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <?php echo $characteristics[0] . ": " . $values_minivans['First class']['Mark']; ?>
                    </li>
                    <li class="list-group-item">
                        <?php echo $characteristics[1] . ": " .  $values_minivans['First class']['Model']; ?>
                    </li>
                    <li class="list-group-item">
                        <?php echo $characteristics[2] . ": " . $values_minivans['First class']['Price'] . " for 3 days"; ?>
                    </li>
                    <li class="list-group-item">
                        <?php echo $characteristics[3] . ": " . $values_minivans['First class']['Location']; ?>
                    </li>
                    <li class="list-group-item">
                        <?php echo $characteristics[4] . ": " .  $values_minivans['First class']['Availability']; ?>
                    </li>
            </ul>
        </div>
    </div>
</div>
<div class="container containerThird" id="truck">
<h3 class="my-5">Truck rental</h3>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
    <div class="col">
        <div class="card">
            <img src="https://images.contentstack.io/v3/assets/blte891c850d5781579/blt53faefb3dffea48c/6452c0632beffe356089eb86/why-is-it-called-a-semi-truck.jpg" class="card-img-top cardImage" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo "$cars_types[0]";?></h5>
            </div>
            <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <?php echo $characteristics[0] . ": " . $values_trucks['Standard']['Mark']; ?>
                    </li>
                    <li class="list-group-item">
                        <?php echo $characteristics[1] . ": " .  $values_trucks['Standard']['Model']; ?>
                    </li>
                    <li class="list-group-item">
                        <?php echo $characteristics[2] . ": " . $values_trucks['Standard']['Price'] . " for 1 trip"; ?>
                    </li>
                    <li class="list-group-item">
                        <?php echo $characteristics[3] . ": " . $values_trucks['Standard']['Location']; ?>
                    </li>
                    <li class="list-group-item">
                        <?php echo $characteristics[4] . ": " .  $values_trucks['Standard']['Availability']; ?>
                    </li>
            </ul>
        </div>
    </div>
    <div class="col">
        <div class="card">
                <img src="https://cdn.britannica.com/17/126517-050-9CDCBDDF/semi-semitrailer-truck-tractor-highway.jpg" class="card-img-top cardImage" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo "$cars_types[1]";?></h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <?php echo $characteristics[0] . ": " . $values_trucks['Business']['Mark']; ?>
                    </li>
                    <li class="list-group-item">
                        <?php echo $characteristics[1] . ": " .  $values_trucks['Business']['Model']; ?>
                    </li>
                    <li class="list-group-item">
                        <?php echo $characteristics[2] . ": " . $values_trucks['Business']['Price'] . " for 1 trip"; ?>
                    </li>
                    <li class="list-group-item">
                        <?php echo $characteristics[3] . ": " . $values_trucks['Business']['Location']; ?>
                    </li>
                    <li class="list-group-item">
                        <?php echo $characteristics[4] . ": " .  $values_trucks['Business']['Availability']; ?>
                    </li>
                </ul>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <img src="https://www.pensketruckrental.com/media-library/photo-of-a-commercial-light-duty-box-truck-rental.jpg?id=29479699&width=1245&height=700&quality=85&coordinates=0%2C0%2C0%2C0" class="card-img-top cardImage" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo "$cars_types[2]";?></h5>
            </div>
            <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <?php echo $characteristics[0] . ": " . $values_trucks['First class']['Mark']; ?>
                    </li>
                    <li class="list-group-item">
                        <?php echo $characteristics[1] . ": " .  $values_trucks['First class']['Model']; ?>
                    </li>
                    <li class="list-group-item">
                        <?php echo $characteristics[2] . ": " . $values_trucks['First class']['Price'] . " for 1 trip"; ?>
                    </li>
                    <li class="list-group-item">
                        <?php echo $characteristics[3] . ": " . $values_trucks['First class']['Location']; ?>
                    </li>
                    <li class="list-group-item">
                        <?php echo $characteristics[4] . ": " .  $values_trucks['First class']['Availability']; ?>
                    </li>
            </ul>
        </div>
    </div>
</div>


<!-- Footer -->







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
crossorigin="anonymous"></script>
</body>
</html>

