<?php
include("../Functions/functions.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Buyer Homepage</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
     <a href="https://icons8.com/icon/83325/roman-soldier"></a>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

     <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
     <script>
          function state() {
            var a = document.getElementById('states').value;
            if (a === 'BARINGO') {
                var array = ['Select District','Baringo Central ', 'Baringo North','Baringo South','Eldama Ravine','Mogotio','Tiaty'];
            } else if (a === 'BOMET') {
                var array = ['Select District', 'Bomet Central', 'Bomet East', 'Chepalungu', 'Konoin', 'Sotik'];
            } else if (a === 'BUNGOMA') {
                var array = ['Select District', 'Bumula', 'Kabuchai', 'Kanduyi', 'Kimilili', 'Mt. Elgon', 'Sirisia', 'Tongaren', 'Webuye East', 'Webuye West'];
            } else if (a === 'BUSIA') {
                var array = ['Select District', 'Budalangi', 'Butula', 'Funyula', 'Matayos', 'Nambale', 'Teso North', 'Teso South'];
            } else if (a === 'ELGEYO-MARAKWET') {
                var array = ['Select District', 'Keiyo North', 'Keiyo South', 'Marakwet East', 'Marakwet West'];
            } else if (a === 'EMBU') {
                var array = ['Select District', 'Manyatta', 'Mbeere North', 'Mbeere South', 'Runyenjes'];
            } else if (a === 'GARISSA') {
                var array = ['Select District', 'Balambala', 'Dadaab', 'Fafi', 'Ijara', 'Lagdera'];
            } else if (a === 'HOMA BAY') {
                var array = ['Select District', 'Homa Bay Town', 'Kabondo Kasipul', 'Karichuonyo', 'Kasipul', 'Mbita', 'Ndhiwa', 'Rangwe', 'Suba'];
            } else if (a === 'ISIOLO') {
                var array = ['Select District', 'Isiolo North', 'Isiolo South'];
            } else if (a === 'KAJIADO') {
                var array = ['Select District', 'Kajiado Central', 'Kajiado East', 'Kajiado North', 'Kajiado South', 'Kajiado West'];
            } else if (a === 'KAKAMEGA') {
                var array = ['Select District', 'Butere', 'Ikolomani', 'Kwisero', 'Likuyani', 'Lugari', 'Lurambi', 'Malava', 'Matungu', 'Mumias East', 'Mumias West', 'Navakholo', 'Shinyalu'];
            } else if (a === 'KERICHO') {
                var array = ['Select District', 'Ainamoi', 'Belgut', 'Bureti', 'Kipkelion East', 'Kipkelion West', 'Sigowet-Soin'];
            } else if (a === 'KIAMBU') {
                var array = ['Select District', 'Gatundu North', 'Gatundu South', 'Juja', 'Kabete', 'Kiambaa', 'Kiambu', 'Kikuyu', 'Lari', 'Limuru', 'Ruiru', 'Thika Town'];
            } else if (a === 'KILIFI') {
                var array = ['Select District', 'Ganze', 'Kaloleni', 'Kilifi North', 'Kilifi South', 'Magarini', 'Malindi', 'Rabai'];
            } else if (a === 'KIRINYAGA') {
                var array = ['Select District', 'Gichugu', 'Kirinyaga Central', 'Mwea', 'Ndia'];
            } else if (a === 'KISII') {
                var array = ['Select District', 'Bobasi', 'Bomachoge Borabu', 'Bomachoge Chache', 'Bonchari', 'Kitutu Chache North', 'Kitutu Chache South', 'Nyaribari Chache', 'Nyaribari Masaba', 'South Mugirango'];
            } else if (a === 'KISUMU') {
                var array = ['Select District', 'Kisumu Central', 'Kisumu East', 'Kisumu West', 'Muhoroni', 'Nyakach', 'Nyando', 'Seme'];
            } else if (a === 'KITUI') {
                var array = ['Select District', 'Kitui Central', 'Kitui Rural', 'Kitui South', 'Kitui West', 'Mwingi Central', 'Mwingi North', 'Mwingi West'];
            } else if (a === 'KWALE') {
                var array = ['Select District', 'Kinango', 'Lunga Lunga', 'Matuga', 'Msambweni'];
            } else if (a === 'LAIKIPIA') {
                var array = ['Select District', 'Laikipia East', 'Laikipia North', 'Laikipia West'];
            } else if (a === 'LAMU') {
                var array = ['Select District', 'Lamu East', 'Lamu West'];
            } else if (a === 'MACHAKOS') {
                var array = ['Select District', 'Kangundo', 'Kathiani', 'Machakos Town', 'Masinga', 'Matungulu', 'Mavoko', 'Mwala', 'Yatta'];
            } else if (a === 'MAKUENI') {
                var array = ['Select District', 'Kaiti ', 'Kibwezi East', 'Kibwezi West', 'Kilome', 'Makueni', 'Mbooni'];
            } else if (a === 'MANDERA') {
                var array = ['Select District', 'Banissa', 'Lafey', 'Mandera East', 'Mandera North', 'Mandera South', 'Mandera West'];
            } else if (a === 'MARSABIT') {
                var array = ['Select District', 'Laisamis', 'Moyale', 'North Horr', 'Saku'];
                //check
            } else if (a === 'MERU') {
                var array = ['Select District', 'Buuri', 'Central Imenti', 'Igembe Central', 'Igembe North', 'Igembe South', 'North Imenti', 'South Imenti', 'Tigania East', 'Tigania West'];
            } else if (a === 'MIGORI') {
                var array = ['Select District', 'Awendo', 'Kuria East', 'Kuria West', 'Nyatike', 'Rongo', 'Suna East', 'Suna West', 'Uriri'];
            } else if (a === 'MOMBASA') {
                var array = ['Select District', 'Changamwe ', 'Jomvu', 'Kisauni', 'Likoni', 'Mvita', 'Nyali'];
            } else if (a === 'MURANGA') {
                var array = ['Select District', 'Gatanga', 'Kandara', 'Kangema', 'Kigumo', 'Kiharu', 'Maragua', 'Mathioya'];
            } else if (a === 'NAIROBI') {
                var array = ['Select District', 'Dagoretti', 'Dagoretti North', 'Dagoretti South', 'Embakasi Central', 'Embakasi', 'Embakasi East', 'Embakasi North', 'Embakasi South', 'Embakasi West', 'Kamukunji', 'Kasarani', 'Kibra', 'Langata', 'Makadara', 'Mathare', 'Roysambu', 'Ruaraka', 'Starehe', 'Westlands'];            
            } else if (a === 'NAKURU') {
                var array = ['Select District', 'Bahati', 'Gilgil', 'Kuresoi North', 'Kuresoi South', 'Molo', 'Naivasha', 'Nakuru Town East', 'Nakuru Town West', 'Njoro', 'Rongai', 'Subukia'];
            } else if (a === 'NANDI') {
                var array = ['Select District', 'Aldai', 'Chesumei', 'Emgwen', 'Mosop', 'Nandi Hills', 'Tinderet'];
            } else if (a === 'NAROK') {
                var array = ['Select District', 'Emurua Dikirr', 'Kilgoris', 'Narok East', 'Narok North', 'Narok South', 'Narok West'];
            } else if (a === 'NYAMIRA') {
                var array = ['Select District', 'Borabu', 'Kitutu Masaba', 'North Mugirango', 'West Mugirango'];
            } else if (a === 'Nyandarua') {
                var array = ['Select District', 'Kinangop', 'Kipipiri', 'Ndaragwa', 'Ol Jorok', 'Ol Kalou'];
            } else if (a === 'NYERI') {
                var array = ['Select District', 'Kieni', 'Mathira', 'Mukurweni', 'Nyeri Town','Othaya','Tetu'];
            } else if (a === 'SAMBURU') {
                var array = ['Select District', 'Samburu East', 'Samburu North', 'Samburu West'];
            } else if (a === 'SIAYA') {
                var array = ['Select District', 'Alego', 'Bondo', 'Gem', 'Rarieda', 'Ugenya', 'Ugunja'];
            } else if (a === 'TAITA-TAVETA') {
                var array = ['Select District', 'Mwatate', 'Taveta', 'Voi', 'Wundanyi' ];
            } else if (a === 'TANA RIVER') {
                var array = ['Select District', 'Bura', 'Galole', 'Garsen'];
            } else if (a === 'THARAKA-NITHI') {
                var array = ['Select District', 'Chuka', 'Maara', 'Tharaka'];
            } else if (a === 'TRANS-NZOIA') {
                var array = ['Select District', 'Cherangany', 'Endebess', 'Kiminini', 'Kwanza', 'Saboti'];
            } else if (a === 'TURKANA') {
                var array = ['Select District', 'Loima', 'Turkana Central', 'Turkana East', 'Turkana North', 'Turkana South', 'Turkana West'];
            } else if (a === 'UASIN GISHU') {
                var array = ['Select District', 'Ainabkoi', 'Kapseret', 'Kesses', 'Moiben', 'Soy', 'Turbo'];
            } else if (a === 'VIHIGA') {
                var array = ['Select District', 'Emuhaya', 'Hamisi', 'Luanda', 'Sabatia', 'Vihiga'];
            } else if (a === 'WAJIR') {
                var array = ['Select District', 'Eldas', 'Tarbaj', 'Wajir East', 'Wajir North', 'Wajir South', 'Wajir West'];
            } else if (a === 'WEST POKOT') {
                var array = ['Select District', 'Kacheliba', 'Kapenguria', 'Pokot South', 'Sigor'];
            }

               var string = "";
               for (let i = 0; i < array.length; i++) {
                    string = string + "<option>" + array[i] + "</option>";
               }
               string = "<select nmae = 'lol'>" + string + "</select>"
               document.getElementById('district').innerHTML = string;

          }
     </script>
     <script>
          var a;
          9

          function display() {
               if (a == 0) {
                    document.getElementById("majic").style.visibility = "hidden";
                    document.getElementById("show").style.visibility = "visible";
                    return a = 1;
               } else {
                    document.getElementById("majic").style.visibility = "visible";
                    document.getElementById("show").style.visibility = "hidden";
                    // document.getElementById("show").style. visibility= "hidden";
                    return a = 0;
               }

          }
     </script>
     <style>
          /* .please{
margin-left:-7%;
margin-top:-10px;
          }
          .states{
               margin-right:-15%;
               color:white;
          }
          .myfooter {
               background-color: #292b2c;
               color:white;
               color: goldenrod;
               margin-top: 15px;
          }
.submitbtn{
     color:white;
     /* margin-left: -70%; */
          /* margin-left:-240%;
margin-top:2%;
} */
          .aligncenter {
               text-align: center;
          }

          a {
               color: goldenrod;
          }

          * {
               margin: 0;
               padding: 0;
               box-sizing: border-box;
          }

          nav {
               background-color: #292b2c;
          }

          .navbar-custom {
               background-color: #292b2c;
          }

          /* change the brand and text color */
          .navbar-custom .navbar-brand,
          .navbar-custom .navbar-text {
               background-color: #292b2c;
          }

          .navbar-custom .navbar-nav .nav-link {
               background-color: #292b2c;
          }

          .navbar-custom .nav-item.active .nav-link,
          .navbar-custom .nav-item:hover .nav-link {
               background-color: #292b2c;
          }

          .firstimage {
               height: 500px;
               width: 100%;
          }

          .mybtn {
               border-color: green;
               border-style: solid;
          }

          .card {
               width: 100%;
               height: 100%;
               margin: 10px;
          }

          .right {
               display: flex;
          }

          .left {
               display: none;
          }

          .cart {
               /* margin-left:10px; */
               margin-right: -9px;
          }

          .profile {
               margin-right: 2px;

          }

          .login {
               margin-right: -2px;
               margin-top: 12px;
               display: none;
          }

          .searchbox {
               width: 60%;
          }

          .lists {
               display: inline-block;
          }

          .moblists {
               display: none;
          }

          .logins {
               text-align: center;
               margin-right: -30%;
               margin-left: 35%;
          }

          /* .images {
            transition: 0.5s;
        } */

          .images:hover {

               height: 220px;
               box-shadow: 5px 5px 10px grey;
               transition: 0.3s;
          }

          .guard {
               width: 100%;
               text-align: center;
               border-bottom: 1px solid #ffc857;
               /* background-color: #ffc857; */
               line-height: 0.1em;
               margin: 10px 0 20px;
               /* font-family: serif; */
          }

          .guard span {
               background: white;
               padding: 0 10px;
          }

          .mobtext {
               display: block;
          }

          .destext {
               display: none;
          }

          .guard {
               width: 100%;
               text-align: center;
               border-bottom: 1px solid #ffc857;
               /* background-color: #ffc857; */
               line-height: 0.1em;
               margin: 10px 0 20px;
               font-family: serif;
          }

          .guard span {
               background: white;
               padding: 0 10px;
          }

          /* .settings{
    margin-left:10px;
} */
          .States {
               margin-right: -1%;
               margin-left: 10%
          }

          .districts {
               margin-right: -15%;
          }

          .go {
               margin-right: -50%;
               margin-left: 5%;
          }

          @media only screen and (min-device-width:320px) and (max-device-width:480px) {
               .States {
                    margin-right: 0%;
                    margin-left: 0%;
                    margin-top: 5%;
               }

               .districts {
                    margin-right: 0%;
                    margin-top: 5%;
               }

               .go {
                    margin-right: 0%;
                    margin-left: 40%;
                    margin-right: 30%;
                    margin-top: 10%;
               }


               .guard {
                    width: 100%;
                    text-align: center;
                    border-bottom: 1px solid #ffc857;
                    /* background-color: #ffc857; */
                    line-height: 0.1em;
                    margin: 10px 0 20px;
                    font-family: serif;
               }

               .guard span {
                    background: white;
                    padding: 0 10px;
               }

               .mobtext {
                    display: none;
               }

               .destext {
                    display: inline-block;
                    width: 90%;
                    margin-left: 5%;
                    margin-right: 5%;
               }

               .mycarousel {
                    display: none;
               }

               .firstimage {
                    height: auto;
                    width: 90%;
               }

               .card {
                    width: 80%;
                    margin-left: 10%;
                    margin-right: 10%;

               }

               .col {
                    margin-top: 20px;
               }

               .right {
                    display: none;
                    background-color: #ff5500;
               }

               /* 
            .settings{
            margin-left:79%;
        } */
               .left {
                    display: flex;
               }

               .moblogo {
                    display: none;
               }

               .logins {
                    text-align: center;
                    margin-right: 35%;
                    padding: 15px;
               }

               .searchbox {
                    width: 95%;
                    margin-right: 5%;
                    margin-left: 0%;
               }

               .moblists {
                    display: inline-block;
                    text-align: center;
                    width: 100%;
               }

               .guard {
                    /* width: 100%; */
                    text-align: center;
                    border-bottom: 1px solid #ffc857;
                    /* background-color: #ffc857; */
                    /* line-height: 0.1em; */
                    /* margin: 10px 0 20px; */
                    /* font-family: serif; */

               }

               .guard span {
                    background: white;
                    padding: 0 10px;
               }
          }




          /* Image Grig */


          * {
               box-sizing: border-box;
          }

          body {
               margin: 0;
               font-family: Arial;
          }

          .header {
               text-align: center;
               padding: 32px;
          }

          .row {
               display: -ms-flexbox;
               /* IE10 */
               display: flex;
               -ms-flex-wrap: wrap;
               /* IE10 */
               flex-wrap: wrap;
               padding: 0 4px;
          }

          /* Create four equal columns that sits next to each other */
          .column {
               -ms-flex: 25%;
               /* IE10 */
               flex: 25%;
               max-width: 25%;
               padding: 0 4px;
          }

          .column img {
               margin-top: 8px;
               vertical-align: middle;
               width: 100%;
          }

          .myfooter {
               background-color: #292b2c;
               color: goldenrod;
               margin-top: 15px;
          }

          .aligncenter {
               text-align: center;
          }

          a {
               color: goldenrod;
          }






          #headings {
               /* text-shadow: 2px 1px #666666; */
               font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
          }

          @media screen and (max-width: 800px) {
               .kolum {
                    flex: 50%;
                    max-width: 50%;
                    max-height: 40%;
               }
          }

          @media screen and (max-width: 600px) {
               .kolum {
                    flex: 50%;
                    max-width: 50%;
                    max-height: 40%;
               }
          }

          /* Responsive layout - makes a two column-layout instead of four columns */
          /* @media screen and (max-width: 800px) {
            .column {
                -ms-flex: 50%;
                flex: 50%;
                max-width: 50%;
            }
        } */

          /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
          /* @media screen and (max-width: 600px) {
            .column {
                -ms-flex: 100%;
                flex: 100%;
                max-width: 100%;
            }
        } */
     </style>
     <!-- <script>
        var a;

        function display() {
            if (a == 0) {
                document.getElementById("majic").style.display = "none";
                document.getElementById("show").style.display = "inline-block";
                return a = 1;
            } else {
                document.getElementById("majic").style.visibility = "visible";
                document.getElementById("show").style.visibility = "hidden";
                // document.getElementById("show").style. visibility= "hidden";
                return a = 0;
            }

        }
    </script> -->

</head>

<body>

<nav class="navbar navbar-expand-xl ">

        <div class=" flex-row-reverse left ">

            <div class="p-2">
                <div class="icon2">
                    <a href="CartPage.php"> <i class="fa" style="font-size:30px; color:green ;margin-top:2px;">&#61562;</i></a>
                    <span id="icon" style="color:green"> <?php echo totalItems(); ?> </span>
                </div>
            </div>
            <div class="p-2 ml-5"><i class='far fa-user-circle' style='font-size:30px; color: green;margin-top:2px;'></i></div>
            <a class="float-left" href="bhome.php">
                <img src="agro.png" class="float-left mr-5 ml-0 " alt="Logo" style="height:50px;">
            </a>
        </div>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fas fa-bars p-1 " style="color:green;margin-right:-9%;font-size:28px;"></i></span>
        </button>
        <a class="float-left" href="bhome.php">
            <img src="agro.png" class="float-left mr-2 moblogo" alt="Logo" style="height:50px;">
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <div class="input-group mb-1 ml-2 searchbox">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-search" style="font-size:20px;color:green; "></i></div>
                </div>
                <form action="SearchResult.php" method="get" enctype="multipart/form-data">
                    <input type="text" class="form-control " id="inlineFormInputGroup" name="search" placeholder="Search for fruits,vegetables or crops " style="width:500px;">
                </form>
            </div>
            <?php
            getUsername();
            ?>
            <div class="list-group moblists">

                <?php
                if (isset($_SESSION['phonenumber'])) {
                    echo "<a href='BuyerProfile.php' class='list-group-item list-group-item-action' style='background-color:#292b2c;text-align:center;color:goldenrod'>Profile</a>";
                    echo "<a href= 'Transaction.php' class='list-group-item list-group-item-action' style='background-color:#292b2c;text-align:center;color:goldenrod'>Transactions</a>";
                    echo "<a href='saveforlater.php' class='list-group-item list-group-item-action' style='background-color:#292b2c;text-align:center;color:goldenrod'>Save For Later</a>";
                    echo "<a href='#' class='list-group-item list-group-item-action' style='background-color:#292b2c;text-align:center;color:goldenrod'>Subscriptions</a>";
                    echo "<a href='farmer.php' class='list-group-item list-group-item-action' style='background-color:#292b2c;text-align:center;color:goldenrod'>Farmers</a>";
                    echo "<a href='../Includes/logout.php' class='list-group-item list-group-item-action ' style='background-color:#292b2c;text-align:center;color:goldenrod'>Logout</a>";
                } else {
                    echo "<a href='../auth/BuyerLogin.php' class='list-group-item list-group-item-action ' style='background-color:#292b2c;text-align:center;color:goldenrod'>Login</a>";
                }
                ?>

            </div>
        </div>




        <div class=" flex-row-reverse right ">
            <div class="p-2 cart">
                <div class="icon2">
                    <a href="CartPage.php"> <i class="fa" style="font-size:30px; color:green">&#61562;</i></a>
                    <span id="icon" style="color:green"> <?php echo totalItems(); ?> </span>
                </div>
            </div>
            <div class="dropdown p-2 settings ">
                <button class="btn  dropdown-toggle text-success" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Settings
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <?php
                    if (isset($_SESSION['phonenumber'])) {
                        echo "<a href='BuyerProfile2.php' class='dropdown-item  ' style='padding-right:-20px;'>Profile</a>";
                        echo "<a href='Transaction.php' class='dropdown-item ' style='padding-right:-20px;'>Transactions</a>";
                        echo "<a href='#' class='dropdown-item'  style='padding-right:-20px;'>Subscriptions</a>";
                        echo "<a href='saveforlater.php' class='dropdown-item' style='padding-right:-20px;'>Save For Later</a>";
                        echo "<a href='farmers.php' class='dropdown-item' style='padding-right:-20px;' >Farmers</a>";
                        echo "<a href='../Includes/logout.php' class='dropdown-item ' style='padding-right:-20px;'>Logout</a>";
                    } else {
                        echo "<a href='../auth/BuyerLogin.php' class='dropdown-item ' style='padding-right:-20px;'>Login</a>";
                    }
                    ?>
                </div>
            </div>


            <div class="text-success  login">Login</div>
        </div>

    </nav>
     <div class="container">
          <div class="d-flex justify-content-around bg-white mb-3">

               <div class="p-2 ">
                    <div class="dropdown">
                         <button class="btn btn-green mybtn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Fruits
                         </button>
                         <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <?php
                              getFruits();
                              ?>
                         </div>
                    </div>
               </div>
               <div class="p-2">
                    <div class="dropdown">
                         <button class="btn btn-green mybtn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Vegetables
                         </button>
                         <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <?php
                              getVegetables();
                              ?>
                         </div>
                    </div>
               </div>
               <div class="p-2 ">
                    <div class="dropdown">
                         <button class="btn btn-green mybtn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Crops
                         </button>
                         <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <?php
                              getCrops();
                              ?>
                         </div>
                    </div>
               </div>
          </div>
     </div>


     <form action="" method="post">
          <div class="container">
               <div class="row   p-2">
                    <div class="col-12 col-xl-3 col-lg-3 col-md-12 col-sm-12">
                         <div class="text-center">
                              <h4 class="font-weight-bold
                              " style="color: #FFD700 ">Select your region</h4>
                         </div>
                    </div>
                    <div class="col-6 col-xl-3 col-lg-3 col-md-6 col-sm-6 p-0 States">

                         <select class="p-2 shadow-lg" id="states" name="stateInput" onchange="state()" tabindex="1" style="border-radius: 6px; margin-right:  200px; border-color:#FFD700 ">
                         <option value="0">--Select State--</option>
                         <option value="BARINGO">BARINGO</option>
                         <option value="BOMET">BOMET</option>
                         <option value="BUNGOMA">BUNGOMA</option>
                         <option value="BUSIA">BUSIA</option>
                         <option value="ELGEYO-MARAKWET">ELGEYO-MARAKWET</option>
                         <option value="EMBU">EMBU</option>
                         <option value="GARISSA">GARISSA</option>
                         <option value="HOMA BAY">HOMA BAY</option>
                         <option value="ISIOLO">ISIOLO</option>
                         <option value="KAJIADO">KAJIADO</option>
                         <option value="KAKAMEGA">KAKAMEGAA</option>
                         <option value="KERICHO">KERICHO</option>
                         <option value="KIAMBU">KIAMBU</option>
                         <option value="KILIFI">KILIFI</option>
                         <option value="KIRINYAGA">KIRINYAG</option>
                         <option value="KISII">KISII</option>
                         <option value="KISUMU">KISUMU</option>
                         <option value="KITUI">KITUI</option>
                         <option value="KWALE">KWALE</option>
                         <option value="LAIKIPIA">LAIKIPIA</option>
                         <option value="LAMU">LAMU</option>
                         <option value="MACHAKOS">MACHAKOS</option>
                         <option value="MAKUENI">MAKUENI</option>
                         <option value="MANDERA">MANDERA</option>
                         <option value="MARSABIT">MARSABIT</option>
                         <option value="MERU">MERU</option>
                         <option value="MIGORI">MIGORI</option>
                         <option value="MOMBASA">MOMBASA</option>
                         <option value="MURANGA">MURANGA</option>
                         <option value="NAROBI">NAROBI</option>
                         <option value="NAKURU">NAKURU</option>
                         <option value="NANDI">NANDI</option>
                         <option value="NAROK">NAROK</option>
                         <option value="NYAMIRA">NYAMIRA</option>
                         <option value="NYANDARUA">NYANDARUA</option>
                         <option value="NYERI">NYERI</option>
                         <option value="SAMBURU">SAMBURU</option>
                         <option value="SIAYA">SIAYA</option>
                         <option value="TAITA-TAVETA">TAITA-TAVETA</option>
                         <option value="TANA RIVER">TANA RIVER</option>
                         <option value="THARAKA-NITHI">THARAKA-NITHI</option>
                         <option value="TRANS-NZOIA">TRANS-NZOIA</option>
                         <option value="TURKANA">TURKANA</option>
                         <option value="UASIN GISHU">UASIN GISHU</option>
                         <option value="VIHIGA">VIHIGA</option>
                         <option value="WAJIR">WAJIR</option>
                         <option value="WEST POKOT">WEST POKOT</option>

                         </select>
                    </div>
                    <div class="col-6 col-xl-3 col-lg-3 col-md-6 col-sm-6 districts">
                         <!-- <div class="dropdown">
                         <button class="btn btn-green mybtn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <b>Districts</b>
                         </button>
                         <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">Patato</a>
                              <a class="dropdown-item" href="#">Carrot</a>
                              <a class="dropdown-item" href="#">Onion</a>
                         </div>
                    </div> -->
                         <select class="p-2 ml-5 shadow-lg" name="districtInput" id="district" style="border-radius: 6px; border-color: #FFD700 ">
                              <option>Select District</option>
                         </select>

                    </div>
                    <div class="col-12 col-xl-3 col-lg-3 col-md-12 col-sm-12 go">
                         <button class='btn btn-border-secondary mx-5 ' name='go' type='submit' style='color:black ;float:right;font-weight:50px; background-color: black;color:#FFD700'>Filter</button>
                    </div>
               </div>

          </div>
          </div>
     </form>
     <?php
     if (isset($_POST['go'])) {
          $districtInput = $_POST['districtInput'];
          $stateInput = $_POST['stateInput'];
          echo $stateInput;
          echo "<br>";
          echo $districtInput;

          if ($stateInput != '0' && $districtInput == 'Select District') {
               echo "<script>window.open('StateSearch.php?state=$stateInput','_self')</script>";
          } else {
               echo "<script>window.open('DistrictSearch.php?district=$districtInput','_self')</script>";
          }
     }

     ?>

     <div class="container ">
          <br>
          <div class="row">


               <?php
               cart();
               ?>
               <?php

               if (isset($_GET['district'])) {

                    $district = $_GET['district'];
                    $get_id = "select * from farmerregistration where farmer_district='$district'";
                    $run_id_query = mysqli_query($con, $get_id);
                    while ($ids = mysqli_fetch_array($run_id_query)) {
                         $farmer_id = $ids['farmer_id'];

                         $get_pro = "select * from products where farmer_fk = $farmer_id";
                         $run_pro = mysqli_query($con, $get_pro);
                         $count = mysqli_num_rows($run_pro);
                         if ($count > 0) {
                              echo "<br>";
                              while ($rows = mysqli_fetch_array($run_pro)) {
                                   $product_id = $rows['product_id'];
                                   $product_title = $rows['product_title'];
                                   $product_image = $rows['product_image'];
                                   $product_price = $rows['product_price'];
                                   $product_delivery = $rows['product_delivery'];
                                   $farmer_fk = $rows['farmer_fk'];
                                   $farmer_name_query = "select farmer_name from farmerregistration where farmer_id = $farmer_fk";
                                   $running_query_name = mysqli_query($con, $farmer_name_query);
                                   while ($names = mysqli_fetch_array($running_query_name)) {
                                        $name = $names['farmer_name'];
                                   }
                                   echo "
                                        <div class='col col-12 col-sm-12 col-md-4 col-xl-4 col-lg-4'>
                                             <div class='card pb-1 pl-1 pr-1 pt-0' style='height:542px'>
                                                  <br>
                                                  <div class='mt-0'><b>
                                                       <h4><img src='iconsmall.png' style='width: 28px; margin-bottom:  10px;'> $name
                                                       </b></h4>
                                                  </div>
                                                  <a href='../BuyerPortal2/ProductDetails.php?id=$product_id'>
                                                  <img class='card-img-top' src='../Admin/product_images/$product_image' alt='Card image cap' height='300px'>
                                                  </a>
                                                  <form action = '' method = 'post'>
                                                       <div class='card-body pb-0'>
                                                            <div class='row'>
                                                                 <div class='col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12'>
                                                                      <div class='input-group mb'>
                                                                           <div class='input-group-prepend'>
                                                                                <h5 class='card-title font-weight-bold'>$product_title</h5>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                        
                                                                 <div class='col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12'>
                                                                 <div class='input-group mb-1'>
                                                                      <div class='input-group-prepend'>
                                                                           <span class='input-group-text bg-warning border-secondary p-1' style='color:black;' id='inputGroup-sizing-default' placeholder='1'><b>Quantity</b></span>
                                                                      </div>
                                                                      <input type='number' class='form-control' aria-label='Default' style='margin-top:0%;width:20%;padding:0%;' aria-describedby='inputGroup-sizing-default'>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                       <p class='card-text mb-2 font-weight-bold'>PRICE:- $product_price Rs/kg</p>
                                                       <div class='row'>
                                                            <div class='col-1 col-xl-3 col-lg-2 col-md-2 col-sm-2'></div>
                                                                 <div class='col-12 col-xl-6 col-lg-6 col-md-6  col-sm-12'>
                                                                      <button class='btn btn-warning border-secondary mr-1 ' name='cart' type = 'submit' style='color:black ;font-weight:50px;'>Add to cart<img src='carticons.png' height='20px'></button>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                  </form>
                                             </div>
                                        </div>";
                                   if (isset($_POST['cart'])) {
                                        if (isset($_POST['quantity'])) {
                                             $qty = mysqli_real_escape_string($con, $_POST['quantity']);
                                        } else {
                                             $qty = 1;
                                        }
                                        global $con;
                                        if (isset($_SESSION['phonenumber'])) {
                                             $sess_phone_number = $_SESSION['phonenumber'];

                                             $check_pro = "select * from cart where phonenumber = $sess_phone_number and product_id='$product_id' ";

                                             $run_check = mysqli_query($con, $check_pro);

                                             if (mysqli_num_rows($run_check) > 0) {
                                                  echo "";
                                             } else {
                                                  $subtotal = $product_price * $qty;
                                                  $insert_pro = "insert into cart (product_id,phonenumber,qty,subtotal) values ('$product_id','$sess_phone_number','$qty','$subtotal')";
                                                  $run_insert_pro = mysqli_query($con, $insert_pro);

                                                  echo "<script>window.location.reload(true)</script>";
                                             }
                                        } else {
                                             echo "<script>window.alert('Please Login First!');</script>";
                                        }
                                   }
                              }
                         } else {
                              echo "<br><br><hr><h1 align = center>Product Not Available !</h1><br><br><hr>";
                         }
                    }
               }

               ?>
          </div>
          <br><br>


     </div>
     </div>



     <!-- footer -->
     <section id="footer" class="myfooter">
          <div class="container">
               <div class="row text-center text-xs-center text-sm-left text-md-left">
                    <div class="col aligncenter">
                         <br>
                         <h5>Payment Option</h5>
                         <img src="../Images/Website/paytm1.jpg" alt="paytm">
                         <img src="../Images/Website/cod.jpg" alt="paytm" style="height:37px">
                    </div>
               </div>
               <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                         <ul class="list-unstyled list-inline social text-center">
                              <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
                              <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
                              <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
                              <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
                              <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
                         </ul>
                    </div>
                    </hr>
               </div>
               <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center">
                         <p><u><a href="https://www.agrocraft.com/">AgroCraft Corporation</a></u> is a Multitrading Company for farmers ang traders</p>
                         <p class="h6">Copy All right Reversed.<a class="text-green ml-2" href="https://www.google.com" target="_blank">Agrotech</a></p>
                    </div>
                    </hr>
               </div>
          </div>
     </section>
     <!-- ./Footer a ,myfooter,aligncenter-->
</body>

</html>