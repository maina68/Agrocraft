<!-- <?php
     include("../Functions/functions.php");
     ?> -->

<!DOCTYPE html>

<html>

<head>
     <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <title>Product Details</title>
     <!-- <link rel="stylesheet" type="text/css" href="../Styles/BuyerHomepage.css"> -->
     <!-- <link rel="stylesheet" href="portal_files/font-awesome.min.css"> -->
     <!-- <script src="../portal_files/c587fc1763.js.download" crossorigin="anonymous"></script> -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
     <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

     <link rel="stylesheet" href="../portal_files/bootstrap.min.css">
     <script src="../portal_files/jquery.min.js.download"></script>
     <script src="../portal_files/popper.min.js.download"></script>
     <script src="../portal_files/bootstrap.min.js.download"></script>

     <script>
          function state() {
               var a = document.getElementById('states').value;
               if (a === '30') {
                    var array = ['Baringo Central ', 'Baringo North','Baringo South','Eldama Ravine','Mogotio','Tiaty'];
               } else if (a === '36') {
                    var array = ['Bomet Central', 'Bomet East', 'Chepalungu', 'Konoin', 'Sotik'];
               } else if (a === '39') {
                    var array = ['Bumula', 'Kabuchai', 'Kanduyi', 'Kimilili', 'Mt. Elgon', 'Sirisia', 'Tongaren', 'Webuye East', 'Webuye West'];
               } else if (a === '40') {
                    var array = ['Budalangi', 'Butula', 'Funyula', 'Matayos', 'Nambale', 'Teso North', 'Teso South'];
               } else if (a === '28') {
                    var array = ['Keiyo North', 'Keiyo South', 'Marakwet East', 'Marakwet West'];
               } else if (a === '14') {
                    var array = ['Manyatta', 'Mbeere North', 'Mbeere South', 'Runyenjes'];
               } else if (a === '43') {
                    var array = ['Homa Bay Town', 'Kabondo Kasipul', 'Karichuonyo', 'Kasipul', 'Mbita', 'Ndhiwa', 'Rangwe', 'Suba'];
               } else if (a === '11') {
                    var array = ['Isiolo North', 'Isiolo South'];
               } else if (a === '34') {
                    var array = ['Kajiado Central', 'Kajiado East', 'Kajiado North', 'Kajiado South', 'Kajiado West'];
               } else if (a === '37') {
                    var array = ['Butere', 'Ikolomani', 'Kwisero', 'Likuyani', 'Lugari', 'Lurambi', 'Malava', 'Matungu', 'Mumias East', 'Mumias West', 'Navakholo', 'Shinyalu'];
               } else if (a === '35') {
                    var array = ['Ainamoi', 'Belgut', 'Bureti', 'Kipkelion East', 'Kipkelion West', 'Sigowet-Soin'];
               } else if (a === '22') {
                    var array = ['Gatundu North', 'Gatundu South', 'Juja', 'Kabete', 'Kiambaa', 'Kiambu', 'Kikuyu', 'Lari', 'Limuru', 'Ruiru', 'Thika Town'];
               } else if (a === '03') {
                    var array = [ 'Ganze', 'Kaloleni', 'Kilifi North', 'Kilifi South', 'Magarini', 'Malindi', 'Rabai'];
               } else if (a === '20') {
                    var array = ['Gichugu', 'Kirinyaga Central', 'Mwea', 'Ndia'];
               } else if (a === '45') {
                    var array = ['Bobasi', 'Bomachoge Borabu', 'Bomachoge Chache', 'Bonchari', 'Kitutu Chache North', 'Kitutu Chache South', 'Nyaribari Chache', 'Nyaribari Masaba', 'South Mugirango'];
               } else if (a === '42') {
                    var array = ['Kisumu Central', 'Kisumu East', 'Kisumu West', 'Muhoroni', 'Nyakach', 'Nyando', 'Seme'];
               } else if (a === '15') {
                    var array = ['Kitui Central', 'Kitui Rural', 'Kitui South', 'Kitui West', 'Mwingi Central', 'Mwingi North', 'Mwingi West'];
               } else if (a === '02') {
                    var array = ['Kinango', 'Lunga Lunga', 'Matuga', 'Msambweni'];
               } else if (a === '31') {
                    var array = ['Laikipia East', 'Laikipia North', 'Laikipia West'];
               } else if (a === '05') {
                    var array = ['Lamu East', 'Lamu West'];
               } else if (a === '16') {
                    var array = ['Kangundo', 'Kathiani', 'Machakos Town', 'Masinga', 'Matungulu', 'Mavoko', 'Mwala', 'Yatta'];
               } else if (a === '17') {
                    var array = ['Kaiti ', 'Kibwezi East', 'Kibwezi West', 'Kilome', 'Makueni', 'Mbooni'];
               } else if (a === '09') {
                    var array = ['Banissa', 'Lafey', 'Mandera East', 'Mandera North', 'Mandera South', 'Mandera West'];
               } else if (a === '10') {
                    var array = ['Laisamis', 'Moyale', 'North Horr', 'Saku'];
               } else if (a === '12') {
                    var array = ['Buuri', 'Central Imenti', 'Igembe Central', 'Igembe North', 'Igembe South', 'North Imenti', 'South Imenti', 'Tigania East', 'Tigania West'];
               } else if (a === '44') {
                    var array = ['Awendo', 'Kuria East', 'Kuria West', 'Nyatike', 'Rongo', 'Suna East', 'Suna West', 'Uriri'];
               } else if (a === '01') {
                    var array = ['Changamwe ', 'Jomvu', 'Kisauni', 'Likoni', 'Mvita', 'Nyali'];
               } else if (a === '21') {
                    var array = ['Gatanga', 'Kandara', 'Kangema', 'Kigumo', 'Kiharu', 'Maragua', 'Mathioya'];
               } else if (a === '47') {
                    var array = ['Dagoretti', 'Dagoretti North', 'Dagoretti South', 'Embakasi Central', 'Embakasi', 'Embakasi East', 'Embakasi North', 'Embakasi South', 'Embakasi West', 'Kamukunji', 'Kasarani', 'Kibra', 'Langata', 'Makadara', 'Mathare', 'Roysambu', 'Ruaraka', 'Starehe', 'Westlands'];           
               } else if (a === '32') {
                    var array = ['Bahati', 'Gilgil', 'Kuresoi North', 'Kuresoi South', 'Molo', 'Naivasha', 'Nakuru Town East', 'Nakuru Town West', 'Njoro', 'Rongai', 'Subukia'];
               } else if (a === '29') {
                    var array = ['Aldai', 'Chesumei', 'Emgwen', 'Mosop', 'Nandi Hills', 'Tinderet'];
               } else if (a === '33') {
                    var array = ['Emurua Dikirr', 'Kilgoris', 'Narok East', 'Narok North', 'Narok South', 'Narok West'];
               } else if (a === '46') {
                    var array = [ 'Borabu', 'Kitutu Masaba', 'North Mugirango', 'West Mugirango'];
               } else if (a === '18') {
                    var array = ['Kinangop', 'Kipipiri', 'Ndaragwa', 'Ol Jorok', 'Ol Kalou'];
               } else if (a === '19' ) {
                    var array = ['Kieni', 'Mathira', 'Mukurweni', 'Nyeri Town','Othaya','Tetu'];
               } else if (a === '25') {
                    var array = ['Samburu East', 'Samburu North', 'Samburu West'];
               } else if (a === '41') {
                    var array = ['Alego', 'Bondo', 'Gem', 'Rarieda', 'Ugenya', 'Ugunja'];
               } else if (a === '06') {
                    var array = ['Mwatate', 'Taveta', 'Voi', 'Wundanyi'];
               } else if (a === '04') {
                    var array = ['Bura', 'Galole', 'Garsen'];
               } else if (a === '13') {
                    var array = ['Chuka', 'Maara', 'Tharaka'];
               } else if (a === '26') {
                    var array = ['Cherangany', 'Endebess', 'Kiminini', 'Kwanza', 'Saboti'];
               } else if (a === '23') {
                    var array = ['Loima', 'Turkana Central', 'Turkana East', 'Turkana North', 'Turkana South', 'Turkana West'];
               } else if (a === '27') {
                    var array = ['Ainabkoi', 'Kapseret', 'Kesses', 'Moiben', 'Soy', 'Turbo'];
               } else if (a === '38') {
                    var array = ['Emuhaya', 'Hamisi', 'Luanda', 'Sabatia', 'Vihiga'];
               } else if (a === '08') {
                    var array = ['Eldas', 'Tarbaj', 'Wajir East', 'Wajir North', 'Wajir South', 'Wajir West'];
               } else if (a === '24') {
                    var array = ['Kacheliba', 'Kapenguria', 'Pokot South', 'Sigor'];
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
          * {
               margin: 0;
               box-sizing: border-box;
          }


          .header {
               position: sticky;
               z-index: 100;
               top: 0rem;
               height: 69px;
               width: 100%;
               background-color: #00b300;
          }

          .select_element {
               width: 20px;
               background-color: transparent;
               border: none;
               text: none;
          }


          #logo {
               height: 66px;
               width: 100px;
               text-align: left;
               float: left;
          }

          .search_input {
               clear: none;
               float: left;
               margin-left: 20px;
               margin-top: 20px;

          }

          .proicon {
               float: right;
               margin-right: 10px;
               margin-top: 20px;
          }

          #icon {
               background-color: red;
               color: white;
          }

          .dropdown {
               float: right;
               margin-right: 20px;
               margin-top: 20px;


          }

          .options {
               color: yellow;
               margin-left: 5px;
               margin-right: 26px;
          }

          .icon2 {
               float: right;
               margin-right: 10px;
               margin-top: 20px;


          }

          .filter {
               float: right;
               margin-right: 800px;
               margin-top: 15px;
               background-color: transparent;
               color: black;


          }

          .filterbutton {
               background-color: transparent;
               border: none;
               margin-top: 5px;
               color: white;
          }

          .loginz {
               float: right;
               margin-right: 20px;
               margin-top: 20px;
          }

          .headerdown {
               background-color: transparent;
               height: 50px;
               width: 100%;
          }

          #majic {
               height: 70px;
               width: 100%;
               visibility: hidden;


          }

          #states {
               float: left;
               width: 150px;
               margin-left: -400px;
               margin-top: 20px;
               padding: 10px;

               border-radius: 25%;
               border-color: #00b300;
          }

          #district {
               /* height: 200px; */
               border-radius: 25%;
               border-color: #00b300;
               margin-bottom: 20px;
               margin-top: 20px;
               padding: 10px;
               margin-left: 150px;
               margin-right: -400px;
          }

          .makeitgreen {
               color: #00b300;
               width: 156px;

          }

          .sel1 {
               color: green;
               float: left;
               margin-top: 3px;
          }

          .sel2 {
               border-color: green;
               color: green;
               float: left;
               margin-left: 600px;
               margin-top: 3px;
          }

          .sel3 {
               font-size: 20px;
               margin-top: 3px;
               float: right;
               margin-right: 5px;
          }

          #input1 {
               width: 220px;
               border: none;
          }


          #input1:active {
               background-color: tomato;
          }


          .wrapper {
               display: grid;
               grid-template-columns: 20% 20% 20% 20%;
               grid-column-gap: 20px;
               grid-row-gap: 10px;
               grid-column-gap: 20px;
               grid-row-gap: 10px;
               margin-left: 30px;
          }

          .inputwrapper {
               float: left;
               border-style: double;
               text-align: center;
               margin-left: 80px;
               width: 280px;
               margin-bottom: 20px;
               clear: auto;
          }


          .inputwrapper:last-child {
               margin-right: 30px;
          }

          .addtocart {
               background-color: #FFD700;
          }

          .numberinput {
               width: 35px;
          }

          .content_item {
               text-align: center;
               justify-content: center;
          }

          .etc {
               margin-left: -90px;
               min-width: 90px;
               font-size: 20px;
          }


          .crop_items {
               color: green;
          }

          .footer {
               height: 70px;
               width: 100%;
               clear: both;
          }

          .payment {
               float: left;
               margin-left: 520px;
               font-size: 20px;
               margin-top: 25px;
          }

          .cash {
               float: left;
               margin-top: 0px;
               margin-left: 20px;
               margin-right: 20px;
          }

          .paytm {
               float: left;
          }

          h3 {
               width: 100%;
               text-align: center;
               border-bottom: 1px solid #000;
               line-height: 0.1em;
               margin: 10px 0 20px;
          }

          h3 span {
               background: #fff;
               padding: 0 10px;
          }

          .morefooter {
               height: 100px;
               width: 100%;
               background-color: white;

          }

          .call {
               float: left;
               font-size: 20px;
               margin-left: 150px;
               margin-top: 25px;
          }

          .gmail {
               margin-top: 10px;
               float: right;
               margin-right: 150px;

          }

          .instagram {
               margin-top: 10px;
               float: left;
               margin-left: 420px;
          }

          .instaid {
               height: 10px;
               width: 100%;

          }

          .text {
               float: left;
               margin-left: 735px;
               margin-top: -50px;
          }

          .gmailid {
               float: right;
               margin-right: 80px;
               margin-top: -60px;
          }

          .copy {
               float: left;
               margin-top: -65px;
          }

          .ribbon {
               /* text-align: center; */
               height: 200px;
               margin-left: 10%;
               margin-top: 8%;
          }

          .box {

               color: rgb(6, 36, 7);
               width: 370px;
               line-height: 40px;
               float: center;
               margin: auto;
               text-align: center;
               margin-top: 50px;
               padding: 5px;
               border-style: outset;
               /* border-width: 5px;
            border-radius: 16px; */
               border-color: lightgrey;
               /* font-size:20px; */
               height: 400px;

          }

          .idk {
               /* text-align:center; */
               margin-top: 10%;

          }

          .textarea {
               width: 50%;
               height: 10%;
          }

          .one {
               /* width:35px; */
               text-align: center;
               background-color: #FFD700;
               /* float:left; */
               /* margin-right: 50%; */
          }

          .hen {
               float: right;
          }

          .newarrival {
               background: green;
               width: 50px;
               color: white;
               font-size: 12px;
               font-weight: bold;
          }

          .col-md-7 h2 {
               color: #555;
          }

          /* .col-md-7{
                 text-align: center;
            } */
          .price {
               font-size: 20px;
               font-weight: bold;
               padding-top: 20px;
               /* margin-left: 15%; */
               color: darkolivegreen;

          }

          .some {

               font-weight: 10px;
          }

          .ri {
               float: right;
          }

          input {
               width: 9%;
               text-align: center;
          }

          .th {
               background-color: #FFD700;
               float: right;
          }

          .done {
               float: left;
               margin-left: 10%;
          }

          .mid {
               text-align: top;

          }

          .bye {
               margin-left: 10%;
          }

          .happy {
               float: right;
          }

          .doing {
               /* width:15px;    */
               text-align: center;
               background-color: #FFD700;
               float: right;
               /* float:left; */
               /* margin-right: 50%; */
               /* margin-bottom: 0px;
               bottom: 0px; */
               /* margin-top: 125px; */
               margin-right: 15px;

          }

          .mid {
               text-align: center;
               font-size: 20px;
          }

          .midone {
               margin-left: 20px;
               float: left;
          }

          .midd {
               text-align: center;
               /* margin-right:5%; */
               float: right;

          }

          .nice {
               border-color: gray;
               border-width: 5px;
               border-style: outset;
               height: 400px;
               width: 400px;
               margin-top: 50px;

          }

          #linebreak {
               display: block;
               margin-bottom: 1.25em;
          }
     </style>

</head>

<body>

     <div class="header">


          <a href="BuyerHomepage.php"><img id="logo" src="../portal_files/logo.jpg"></a>

          <div class="search_input">
               <form action="SearchResults.php" method="get" enctype="multipart/form-data">
                    <i class="fas fa-search" style="font-size:20px;color:white; "></i>
                    <input type="text" id="input1" name="search" placeholder="Search...">
               </form>
          </div>
          <div class="dropdown">
               <button class="btn btn-default dropdown-toggle" type="button" id="menu1" class="dric" data-toggle="dropdown" style="margin-top:-5px;"> </span></button>
               <ul class="dropdown-menu etc">
                    <?php
                    if (isset($_SESSION['phonenumber'])) {
                         echo "<li class='options' role='presentation'><a role='menuitem' tabindex='-1' href= 'BuyerProfile.php'><label class='makeitgreen'>Profile</label></a></li>";

                         echo "<li class='options' role='presentation'><a role='menuitem' tabindex='-1' href= '#'><label class='makeitgreen'>Save For Later</label></a></li>";

                         echo "<li class='options' role='presentation'><a role='menuitem' tabindex='-1' href= 'BuyerTransactions.php'><label class='makeitgreen'>Transactions</label></a></li>";

                         echo "<li class='options' role='presentation'><a role='menuitem' tabindex='-1' href= 'BuyerProfile.php'><label class='makeitgreen'>Customer Care</label></a></li>";

                         echo "<li class='options' role='presentation'><a role='menuitem' tabindex='-1' href= 'Farmers.php'><label class='makeitgreen'>Farmer</label></a></li>";

                         echo "<li class='options' role='presentation'><a role='menuitem' tabindex='-1' href='../Includes/logout.php'><label class='makeitgreen'>Logout</label></a></li>";
                    } else {
                         echo "<li class='options' role='presentation'><a role='menuitem' tabindex='-1' href= '../auth/BuyerLogin.php'><label class='makeitgreen'>Login</label></a></li>";
                    }
                    ?>
          </div>
          <div class="proicon">
               <?php
               if (!isset($_SESSION['phonenumber'])) {
                    echo "<a href='../auth/BuyerLogin.php'> <i class='far fa-user-circle' style='font-size:30px; color: white'></i></a>";
               } else {
                    echo "<a href='BuyerProfile.php'> <i class='far fa-user-circle' style='font-size:30px; color: white'></i></a>";
               }
               ?>
          </div>

          <div class="icon2">
               <a href="CartPage.php"> <i class="fa" style="font-size:30px; color:white ;">&#61562;</i></a>
               <span id="icon"> <?php echo totalItems(); ?> </span>
          </div>

          <div class="loginz">
               <?php getUsername(); ?>
          </div>

          <div class="filter">
               <button class="filterbutton " onclick="display()">Filter
                    <i class="fas fa-filter"></i></button>
          </div>
     </div>
     <div class="headerdown">
          <div id="show">
               <div class="sel1 sel">
                    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">CROPS
                         <span class="caret"></span></button>
                    <ul class="dropdown-menu  ">
                         <?php getCrops(); ?>
                    </ul>
               </div>
               <div class="sel2 sel">
                    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">VEGETABLES </i>
                         <span class="caret"></span></button>
                    <ul class="dropdown-menu ">
                         <?php getVegetables(); ?>
                    </ul>
               </div>
               <div class="sel3 sel">
                    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">FRUITS </i>
                         <span class="caret"></span></button>
                    <ul class="dropdown-menu ">
                         <?php getFruits(); ?>
                    </ul>
               </div>
          </div>
          <div id="majic" class="headerdown ">
               <table>
                    <select id="states" onchange="state()" tabindex="1">
                         <option value="0">Select State</option>
                         <option value="30">BARINGO</option>
                         <option value="36">BOMET</option>
                         <option value="39">BUNGOMA</option>
                         <option value="40">BUSIA</option>
                         <option value="28">ELGEYO-MARAKWET</option>
                         <option value="14">EMBU</option>
                         <option value="07">GARISSA</option>
                         <option value="43">HOMA BAY</option>
                         <option value="11">ISIOLO</option>
                         <option value="34">KAJIADO</option>
                         <option value="37">KAKAMEGA</option>
                         <option value="35">KERICHO</option>
                         <option value="22">KIAMBU</option>
                         <option value="03">KILIFI</option>
                         <option value="20">KIRINYAGA</option>
                         <option value="45">KISII</option>
                         <option value="42">KISUMU</option>
                         <option value="15">KITUI</option>
                         <option value="02">KWALE</option>
                         <option value="31">LAIKIPIA</option>
                         <option value="05">LAMU</option>
                         <option value="16">MACHAKOS</option>
                         <option value="17">MAKUENI</option>
                         <option value="09">MANDERA</option>
                         <option value="10">MARSABIT</option>
                         <option value="12">MERU</option>
                         <option value="44">MIGORI</option>
                         <option value="01">MOMBASA</option>
                         <option value="21">MURANGA</option>
                         <option value="47">NAIROBI</option>
                         <option value="32">NAKURU</option>
                         <option value="29">NANDI</option>
                         <option value="33">NAROK</option>
                         <option value="46">NYAMIRA</option>
                         <option value="18">NYANDARUA</option>
                         <option value="19">NYERI</option>
                         <option value="25">SAMBURU</option>
                         <option value="41">SIAYA</option>
                         <option value="06">TAITA-TAVETA</option>
                         <option value="04">TANA RIVER</option>
                         <option value="13">THARAKA-NITHI</option>
                         <option value="26">TRANS-NZOIA</option>
                         <option value="23">TURKANA</option>
                         <option value="27">UASIN GISHU</option>
                         <option value="38">VIHIGA</option>
                         <option value="08">WAJIR</option>
                         <option value="24">WEST POKOT</option>


                    </select>


                    <select name="" id="district">
                         <option>Select District</option>
                    </select>


               </table>
          </div>
     </div>


     <div>



          <?php
          if (isset($_GET['id'])) {
               global $con;
               $product_id  = $_GET['id'];
               $query = "select * from products where product_id = $product_id";
               $run_query = mysqli_query($con, $query);
               echo "<br>";
               while ($rows = mysqli_fetch_array($run_query)) {
                    $farmer_fk = $rows['farmer_fk'];
                    $product_title = $rows['product_title'];
                    $product_image = $rows['product_image'];
                    $product_price = $rows['product_price'];
                    $product_stock = $rows['product_stock'];
                    $product_delivery = $rows['product_delivery'];
                    $product_desc = $rows['product_desc'];
                    if ($product_delivery == "yes") {
                         $product_delivery = "Delivery by Farmer";
                    } else {
                         $product_delivery = "Delivery by Farmer Not Available";
                    }
                    $querya = "select * from farmerregistration where farmer_id = $farmer_fk";
                    $runa_query = mysqli_query($con, $querya);
                    echo "<br>";
                    while ($rows = mysqli_fetch_array($runa_query)) {
                         $name = $rows['farmer_name'];
                         $phone = $rows['farmer_phone'];
                         $address = $rows['farmer_address'];

                         echo "<div class='container'>
                              <div class='row'>
                                   <div class='col-md-4'>
                                        <div id='carouselExampleControls' class='carousel slide' data-ride='carousel'>
                                             <div class='carousel-inner'>
                                                  <div class='carousel-item active'>
                                                       <div class='nice'> <img src='../Admin/product_images/$product_image' height=400px class='d-block w-100'></div>
                                                  </div>

                                             </div>

                                        </div>
                                   </div>
                                   <div class='col-md-4'>
                                        <label>
                                             <p class='newarrival text-center'>FRESH</p>
                                        </label>
                                        <div class='mid'>
                                             <h2> $product_title</h2>
                                        </div><br>

                                        <p class='price'>Price<i class='fa fa-rupee fa-1x'></i> : $product_price  Rs</p>
                                        <p class='price'>Stock : $product_stock Kg</p>
                                        <br>


                                        <form action = '' method = 'post'>
                                        <div class='mid'><label ><b>Quantity</b></label>
                                             
                                             <input type='number' style = 'width:80px;' name = 'quantity' value='1'>
                                            
                                        </div>

                                        <br><button type = 'submit' name = 'save' class='one'>Save for Later<i  style = 'padding:4px;padding-bottom:7px;' class='fa fa-shopping-basket fa-2x'></i></button>

                                        <div class='ri'><button type = 'submit' name = 'cart'  style = 'padding:4px;padding-bottom:7px;' class='addtocart'>ADD TO CART <i class='fa fa-shopping-cart fa-2x' style=' background-color:#FFD700'></i></button></a><br><br>    
                                        </div><br>
                                        </form>



                                        <br><br><i class='fa fa-truck fa-1x'></i><label  style = 'padding-left:9px;' > $product_delivery</label>
                                   </div>
                                   <div class='box'><br>
                                        <h2> FARMER DETAILS </h2>
                                        <span id='linebreak'></span>
                                        <label><b> Name: </b></label><label style = 'padding-left:10px;'>$name</label><br>
                                        <label><b>  Phone Number :  </b> </label><label style = 'padding-left:10px;'>$phone</label>
                                        <br><label>
                                             <div class='midd'>
                                                  <div class='midone'><b  style = 'padding-right:10px;' >Address:</b></div><textarea style = 'background-color:transparent' disabled cols='24'>$address</textarea>
                                             </div>
                                        </label><label></label>
                                        <a href = '../ChatSystem/index.php'><button class='doing' style = 'padding-left:7px;'>Chat <i class='fa fa-comment fa-1x'></i></button></a>
                                   </div>

                                   <div class='col-md-4'> <br>
                                        <div class='bye'>
                                             <p class='some'>
                                                  <h2> Description</h2>
                                             </p><br>
                                             <p>$product_desc</p><br>
                                        </div>

                                   </div>
                              </div>

                         </div>";

                         if (isset($_POST['cart'])) {

                              if (isset($_POST['quantity'])) {
                                   $qty = $_POST['quantity'];
                              } else {
                                   $qty = 1;
                              }
                              global $con;
                              $sess_phone_number = $_SESSION['phonenumber'];

                              $check_pro = "select * from cart where phonenumber = $sess_phone_number and product_id='$product_id' ";

                              $run_check = mysqli_query($con, $check_pro);

                              if (mysqli_num_rows($run_check) > 0) {
                                   echo "";
                              } else {
                                   $insert_pro = "insert into cart (product_id,phonenumber,qty) values ('$product_id','$sess_phone_number','$qty')";
                                   $run_insert_pro = mysqli_query($con, $insert_pro);
                                   // echo "<script>window.location.reload(true)</script>";
                              }
                         }
                    }
               }
          }
          ?>







          <div class="footer">
               <hr>
               <label class="payment">Payment Options:-</label>
               <div class="cash"><img src="../Images/Website/cash.jpg" height="75px" width="125px"></div>
               <div class="patym"><img src="../Images/Website/petm.jpg" height="75px" width="125px"></div>
          </div><br><br>
          <h3><span> GET SOCIAL WITH US </span></h3>
     </div>
     <div class="morefooter">

          <div class="call">
               <i class="fas fa-phone-alt call_color"></i>
               <a href="#" style="color:black;">+91-8191046421</a>
          </div>

          <div class="instagram"><img src="../Images/Website/Insta.jpg" height="45px" width="60px">
          </div>

          <div class="gmail">
               <img src="../Images/Website/gmail.jpg" height="30px" width="50px">
          </div>

     </div>
     <div class="instaid">
          <div class="text"><a href="#" style="color:black;">@AgroCraft</a></div>

          <div class="gmailid">
               <a href="#" class="hypher" style="color:black;">agrocraft6@gmail.com</a>
          </div>

     </div>
     <div class="copy">
          <h5 style="text-align:center; padding-top:40px;margin-left:650px; background-color:'grey';">Copyright &copy; 2022 by www.AgroCraft.com</h5>
     </div>

</body>

</html>