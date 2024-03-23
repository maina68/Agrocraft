<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
    <title>Farmer Registration Portal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../portal_files/bootstrap.min.css">
    <script>
        function state() {
            var a = document.getElementById('states').value;
            if (a === 'BARINGO') {
                var array = ['Baringo Central ', 'Baringo North','Baringo South','Eldama Ravine','Mogotio','Tiaty'];
            } else if (a === 'BOMET') {
                var array = ['Bomet Central', 'Bomet East', 'Chepalungu', 'Konoin', 'Sotik'];
            } else if (a === 'BUNGOMA') {
                var array = ['Bumula', 'Kabuchai', 'Kanduyi', 'Kimilili', 'Mt. Elgon', 'Sirisia', 'Tongaren', 'Webuye East', 'Webuye West'];
            } else if (a === 'BUSIA') {
                var array = ['Budalangi', 'Butula', 'Funyula', 'Matayos', 'Nambale', 'Teso North', 'Teso South'];
            } else if (a === 'ELGEYO-MARAKWET') {
                var array = ['Keiyo North', 'Keiyo South', 'Marakwet East', 'Marakwet West'];
            } else if (a === 'EMBU') {
                var array = ['Manyatta', 'Mbeere North', 'Mbeere South', 'Runyenjes'];
            } else if (a === 'GARISSA') {
                var array = ['Balambala', 'Dadaab', 'Fafi', 'Ijara', 'Lagdera'];
            } else if (a === 'HOMA BAY') {
                var array = ['Homa Bay Town', 'Kabondo Kasipul', 'Karichuonyo', 'Kasipul', 'Mbita', 'Ndhiwa', 'Rangwe', 'Suba'];
            } else if (a === 'ISIOLO') {
                var array = [ 'Isiolo North', 'Isiolo South'];
            } else if (a === 'KAJIADO') {
                var array = ['Kajiado Central', 'Kajiado East', 'Kajiado North', 'Kajiado South', 'Kajiado West'];
            } else if (a === 'KAKAMEGA') {
                var array = ['Butere', 'Ikolomani', 'Kwisero', 'Likuyani', 'Lugari', 'Lurambi', 'Malava', 'Matungu', 'Mumias East', 'Mumias West', 'Navakholo', 'Shinyalu'];
            } else if (a === 'KERICHO') {
                var array = ['Ainamoi', 'Belgut', 'Bureti', 'Kipkelion East', 'Kipkelion West', 'Sigowet-Soin'];
            } else if (a === 'KIAMBU') {
                var array = ['Gatundu North', 'Gatundu South', 'Juja', 'Kabete', 'Kiambaa', 'Kiambu', 'Kikuyu', 'Lari', 'Limuru', 'Ruiru', 'Thika Town'];
            } else if (a === 'KILIFI') {
                var array = ['Ganze', 'Kaloleni', 'Kilifi North', 'Kilifi South', 'Magarini', 'Malindi', 'Rabai'];
            } else if (a === 'KIRINYAGA') {
                var array = ['Gichugu', 'Kirinyaga Central', 'Mwea', 'Ndia'];
            } else if (a === 'KISII') {
                var array = ['Bobasi', 'Bomachoge Borabu', 'Bomachoge Chache', 'Bonchari', 'Kitutu Chache North', 'Kitutu Chache South', 'Nyaribari Chache', 'Nyaribari Masaba', 'South Mugirango'];
            } else if (a === 'KISUMU') {
                var array = ['Kisumu Central', 'Kisumu East', 'Kisumu West', 'Muhoroni', 'Nyakach', 'Nyando', 'Seme'];
            } else if (a === 'KITUI') {
                var array = ['Kitui Central', 'Kitui Rural', 'Kitui South', 'Kitui West', 'Mwingi Central', 'Mwingi North', 'Mwingi West'];
            } else if (a === 'KWALE') {
                var array = ['Kinango', 'Lunga Lunga', 'Matuga', 'Msambweni'];
            } else if (a === 'LAIKIPIA') {
                var array = ['laikipia East', 'Laikipia North', 'Laikipia West'];
            } else if (a === 'LAMU') {
                var array = ['Lamu East', 'Lamu West'];
            } else if (a === 'MACHAKOS') {
                var array = ['Kangundo', 'Kathiani', 'Machakos Town', 'Masinga', 'Matungulu', 'Mavoko', 'Mwala', 'Yatta'];
            } else if (a === 'MAKUENI') {
                var array = ['Kaiti ', 'Kibwezi East', 'Kibwezi West', 'Kilome', 'Makueni', 'Mbooni'];
            } else if (a === 'MANDERA') {
                var array = ['Banissa', 'Lafey', 'Mandera East', 'Mandera North', 'Mandera South', 'Mandera West'];
            } else if (a === 'MARSABIT') {
                var array = ['Laisamis', 'Moyale', 'North Horr', 'Saku'];
                //check
            } else if (a === 'MERU') {
                var array = ['Buuri', 'Central Imenti', 'Igembe Central', 'Igembe North', 'Igembe South', 'North Imenti', 'South Imenti', 'Tigania East', 'Tigania West'];
            } else if (a === 'MIGORI') {
                var array = ['Awendo', 'Kuria East', 'Kuria West', 'Nyatike', 'Rongo', 'Suna East', 'Suna West', 'Uriri'];
            } else if (a === 'MOMBASA') {
                var array = ['Changamwe ', 'Jomvu', 'Kisauni', 'Likoni', 'Mvita', 'Nyali'];
            } else if (a === 'MURANGA') {
                var array = ['Gatanga', 'Kandara', 'Kangema', 'Kigumo', 'Kiharu', 'Maragua', 'Mathioya'];
            } else if (a === 'NAIROBI') {
                var array = ['Dagoretti', 'Dagoretti North', 'Dagoretti South', 'Embakasi Central', 'Embakasi', 'Embakasi East', 'Embakasi North', 'Embakasi South', 'Embakasi West', 'Kamukunji', 'Kasarani', 'Kibra', 'Langata', 'Makadara', 'Mathare', 'Roysambu', 'Ruaraka', 'Starehe', 'Westlands'];            
            } else if (a === 'NAKURU') {
                var array = ['Bahati', 'Gilgil', 'Kuresoi North', 'Kuresoi South', 'Molo', 'Naivasha', 'Nakuru Town East', 'Nakuru Town West', 'Njoro', 'Rongai', 'Subukia'];
            } else if (a === 'NANDI') {
                var array = ['Aldai', 'Chesumei', 'Emgwen', 'Mosop', 'Nandi Hills', 'Tinderet'];
            } else if (a === 'NAROK') {
                var array = ['Emurua Dikirr', 'Kilgoris', 'Narok East', 'Narok North', 'Narok South', 'Narok West'];
            } else if (a === 'NYAMIRA') {
                var array = ['Borabu', 'Kitutu Masaba', 'North Mugirango', 'West Mugirango'];
            } else if (a === 'Nyandarua') {
                var array = ['Kinangop', 'Kipipiri', 'Ndaragwa', 'Ol Jorok', 'Ol Kalou'];
            } else if (a === 'NYERI') {
                var array = ['Kieni', 'Mathira', 'Mukurweni', 'Nyeri Town','Othaya','Tetu'];
            } else if (a === 'SAMBURU') {
                var array = ['Samburu East', 'Samburu North', 'Samburu West'];
            } else if (a === 'SIAYA') {
                var array = ['Alego', 'Bondo', 'Gem', 'Rarieda', 'Ugenya', 'Ugunja'];
            } else if (a === 'TAITA-TAVETA') {
                var array = ['Mwatate', 'Taveta', 'Voi', 'Wundanyi' ];
            } else if (a === 'TANA RIVER') {
                var array = ['Bura', 'Galole', 'Garsen'];
            } else if (a === 'THARAKA-NITHI') {
                var array = ['Chuka', 'Maara', 'Tharaka'];
            } else if (a === 'TRANS-NZOIA') {
                var array = ['Cherangany', 'Endebess', 'Kiminini', 'Kwanza', 'Saboti'];
            } else if (a === 'TURKANA') {
                var array = ['Loima', 'Turkana Central', 'Turkana East', 'Turkana North', 'Turkana South', 'Turkana West'];
            } else if (a === 'UASIN GISHU') {
                var array = ['Ainabkoi', 'Kapseret', 'Kesses', 'Moiben', 'Soy', 'Turbo'];
            } else if (a === 'VIHIGA') {
                var array = ['Emuhaya', 'Hamisi', 'Luanda', 'Sabatia', 'Vihiga'];
            } else if (a === 'WAJIR') {
                var array = ['Eldas', 'Tarbaj', 'Wajir East', 'Wajir North', 'Wajir South', 'Wajir West'];
            } else if (a === 'WEST POKOT') {
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
    <style>
    @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);
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


    .mybtn {
        border-color: green;
        border-style: solid;
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
  body{
        margin: 0;
        font-size: .9rem;
        font-weight: 400;
        line-height: 1.6;
        color: #212529;
        text-align: left;
        background-color: #f5f8fa;
    }

    .my-form, .login-form
    {
        font-family: Raleway, sans-serif;
    }

    .my-form
    {
        padding-top: 1.5rem;
        padding-bottom: 1.5rem;
    }

    .my-form .row
    {
        margin-left: 0;
        margin-right: 0;
    }

    .login-form
    {
        padding-top: 1.5rem;
        padding-bottom: 1.5rem;
    }

    .login-form .row
    {
        margin-left: 0;
        margin-right: 0;
    }
    @media only screen and (min-device-width:320px) and (max-device-width:480px) {
        /* .mycarousel {
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
        } */

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
        /* .pic{
        height:auto;
    } */
    
    /* .mobtext{
        display:none;
    }
    .destext{
        display:inline-block;
        width:90%;
        margin-left: 5%;
        margin-right: 5%;
    } */
    }
    </style>
</head>

<body>
 
<main class="my-form">
		<div class="cotainer">
			<div class="row justify-content-center">
				<div class="col-md-8">
					<div class="card">
						<div class="card-header" style="background-color:#292b2c"><h4 style="font-style:bold;color:goldenrod">Farmer Registration<h4></div>
						<div class="card-body border border-dark">
							<form name="my-form" action="FarmerRegister.php" method="post">
								<div class="form-group row">
									<label for="full_name" class="col-md-4 col-form-label text-md-right"><i class="fas fa-user mr-2"></i><b>Full Name</b></label>
									<div class="col-md-6">
										<input type="text" id="full_name" class="form-control border border-dark" name="name" placeholder="Enter Your Name" required>
									</div>
								</div>

								<div class="form-group row">
									<label for="phone_number" class="col-md-4 col-form-label text-md-right"><i class="fas fa-phone-alt mr-2"></i><b>Phone Number</b></label>
									<div class="col-md-6">
										<input type="text" id="phone_number" class="form-control border border-dark" name="phonenumber" placeholder="Phone Number" required>
									</div>
								</div>

								<div class="form-group row">
									<label for="present_address" class="col-md-4 col-form-label text-md-right"><i class="fas fa-home mr-2"></i><b>Present Address</b></label>
									<div class="col-md-6">
										<textarea type="text" id="present_address" class="form-control border border-dark" rows="4" name="address" placeholder="Address" required></textarea>
									</div>
								</div>	
							
                                <div class="form-group row">
                                    <label for="states" class="col-md-4 col-form-label text-md-right"><b><i class="fas fa-globe-americas mr-2"></i>State</b></label>
                                    <div class="col-md-6">
                                        <select name="statevalue" id="states" onchange="state()" class="form-control border border-dark">
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
                                </div>    
                                <div class="form-group row">
                                    <label for="states" class="col-md-4 col-form-label text-md-right"><b><i class="fas fa-globe-americas mr-2"></i>District</b></label>
                                    <div class="col-md-6">
                                        <select name="district" id="district" class="form-control border border-dark">>
                                            <option>Select District</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
									<label for="account2" class="col-md-4 col-form-label text-md-right"><i class="fas fa-pencil-alt mr-2"></i><b>PAN No.</b></label>
									<div class="col-md-6">
										<input type="text" id="account2" class="form-control border border-dark" name="pan" placeholder="Pan number" required>
									</div>
								</div>

                                <div class="form-group row">
									<label for="account1" class="col-md-4 col-form-label text-md-right"><i class="fas fa-university mr-2"></i><b>Bank Account No.</b></label>
									<div class="col-md-6">
										<input type="text" id="account1" class="form-control border border-dark" name="account" placeholder="Bank Account number" required>
									</div>
								</div>


								<div class="form-group row">
									<label for="p1" class="col-md-4 col-form-label text-md-right"><i class="fas fa-lock mr-2"></i><b>Password</b></label>
									<div class="col-md-6">
										<input id="p1" class="form-control border border-dark" type="password" name="password" placeholder="Password" required>
									</div>
								</div>

								<div class="form-group row">
									<label for="p2" class="col-md-4 col-form-label text-md-right"><i class="fas fa-lock mr-2"></i><b>Confirm Password</b></label>
									<div class="col-md-6">
										<input id="p2" class="form-control border border-dark" type="password" name="confirmpassword" placeholder="Confirm Password" required>
									</div>
								</div>

								<div class="col-md-6 offset-md-4">
									<button type="submit" class="btn btn-primary " style="background-color:#292b2c;color:goldenrod"   name="register" value="Register">
										Register
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
   
</body>

</html>


<?php

include("../Includes/db.php");

$ciphering = "AES-128-CTR";
$iv_length = openssl_cipher_iv_length($ciphering);
$options = 0;
$encryption_iv = '2345678910111211';
$encryption_key = "DE";

if (isset($_POST['register'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $phonenumber = mysqli_real_escape_string($con, $_POST['phonenumber']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $account = mysqli_real_escape_string($con, $_POST['account']);
    $pan = mysqli_real_escape_string($con, $_POST['pan']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $confirmpassword = mysqli_real_escape_string($con, $_POST['confirmpassword']);
    $district = mysqli_real_escape_string($con, $_POST['district']);
    $state = mysqli_real_escape_string($con, $_POST['statevalue']);

    $encryption = openssl_encrypt(
        $password,
        $ciphering,
        $encryption_key,
        $options,
        $encryption_iv
    );
    // echo $encryption;

    if (strcmp($password, $confirmpassword) == 0) {

        $query = "insert into farmerregistration (farmer_name,farmer_phone,
                farmer_address, farmer_state, farmer_district,
                farmer_pan,farmer_bank,farmer_password) 
                values ('$name','$phonenumber','$address',
                '$state','$district','$pan','$account',
                '$encryption')";

        $run_register_query = mysqli_query($con, $query);
        echo "<script>console.log('SucessFully Inserted');</script>";
        echo "<script>window.open('FarmerLogin.php','_self')</script>";
    } else if (strcmp($password, $confirmpassword) != 0) {
        echo "<script>
				alert('Password and Confirm Password Should be same');
			</script>";
    }
}

?>