<?php 
include('smtp/PHPMailerAutoload.php');

$name = $_POST['name'];
$phoneno = $_POST['phoneno'];
$email = $_POST['email'];
$companyname = $_POST['companyname'];
$businesstype = $_POST['businesstype'];
$message = $_POST['message'];

// mail
$html= $phoneno ;
 smtp_mailer('rupanbiswas08@gmail.com','subject',$html);
function smtp_mailer($to,$subject, $msg){
	$mail = new PHPMailer(); 
	$mail->SMTPDebug  = 3;
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = "leads.welcomepolymers@gmail.com";
	$mail->Password = "Leads";
	$mail->SetFrom("leads.welcomepolymers@gmail.com");
	$mail->Subject = $subject;
	$mail->Body =$msg;
	$mail->AddAddress($to);
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if(!$mail->Send()){
		// echo $mail->ErrorInfo;
	}else{
		return 'Sent';
	}
}
// mail
$link = mysqli_connect('localhost', 'root', '', 'welcomepolymers');
// Check connection
if($link === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$stmt = "INSERT INTO contact(name, phoneno, email, companyname, businesstype, message) VALUES
('$name', '$phoneno', '$email', '$companyname', '$businesstype', '$message')";
if(mysqli_query($link, $stmt)){
    // echo "we will contact you soon.";
	
} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
// header("Location: index.html");
?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/8f7c5a9c29.js" crossorigin="anonymous"></script>
    <link rel="icon" href="./images/favicon.png" type="image/gif" sizes="16x16">
    <title>Welcome Polymers</title>
</head>

<body>
    <header>
        <div class="logo">
            <a href="index.html"><img src="images/wpml1.png" alt="Wellcome Polymers"></a>
            <!-- <img src="../images/WP PNG.png" alt=""> -->
        </div>
        <nav>
            <div class="topnav" id="myTopnav">
                <a href="#home" class="actives">Home</a>
                <!-- <a href="#news">News</a> -->
               
                <div class="dropdown" >
                    <button class="dropbtn">Products
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="footware.html">
                            <h3>Footwear Category</h3>
                        </a>
                        <ul>
                            <a href="footware.html#fwpBx-1">
                                <li>Footwear EVA Laminated Fabrics</li>

                            </a>
                            <a href="footware.html#fwpBx-2">
                                <li>Footwear Foam Laminated Fabrics</li>
                            </a>
                            <a href="footware.html#fwpBx-3">
                                <li>Footwear Innerlining Fabrics</li>
                            </a>
                            <a href="footware.html#fwpBx-5">
                                <li>Footwear Insocks Material Fabrics</li>

                            </a>
                        </ul>



                        <a href="orthopedic.html">
                            <h3>Orthopaedic Products</h3>
                        </a>
                        <ul>
                            <a href="orthopedic.html#orp-1">
                                <li>Posture Belt Fabrics</li>
                            </a>
                            <a href="orthopedic.html#orp-2">
                                <li>Arm Sling Fabrics</li>
                            </a>
                            <a href="orthopedic.html#orp-3">
                                <li>Lumbar Support Fabrics</li>
                            </a>
                            <a href="orthopedic.html#orp-4">
                                <li>Knee Support Fabrics</li>
                            </a>
                            <a href="orthopedic.html#orp-5">
                                <li>Velcroable Fabrics</li>
                            </a>
                        </ul>

                        <a href="neoperene.html">
                            <h3>Neoprene Laminated Fabrics</h3>
                        </a>
                        <ul>
                            <a href="neoperene.html#ne-1">
                                <li>Bottle Koozie Fabrics</li>
                            </a>
                            <a href="neoperene.html#ne-2">
                                <li>Support Fabrics</li>
                            </a>
                        </ul>
                        <a href="Fabricspeciality.html">
                            <h3>Fabrics Specaialities</h3>
                        </a>
                        <ul>
                            <a href="Fabricspeciality.html#fsBx-1">
                                <li>Interlock Fabrics</li>
                            </a>
                            <a href="Fabricspeciality.html#fsBx-2">
                                <li>Circular Chord Fabrics</li>
                            </a>
                            <a href="Fabricspeciality.html#fsBx-3">
                                <li>Suede Fabrics</li>
                            </a>
                            <a href="Fabricspeciality.html#fsBx-4">
                                <li>Digital Printed Fabrics</li>
                            </a>
                            <a href="Fabricspeciality.html#fsBx-5">
                                <li>Waterjet Fabrics</li>
                            </a>
                        </ul>
                        <a href="productDevelopment.html">
                            <h3>Product Development</h3>
                        </a>
                        <ul>
                            <a href="productDevelopment.html#pdBx-1">
                                <li>PUR Lamination</li>
                            </a>
                            <a href="productDevelopment.html#pdBx-2">
                            <li>PUL Fabrics For Use</li></a>
                        </ul>
                        
                        <a href="productionCapability.html">
                            <h3>Production Capabilities</h3>
                        </a>
                        <ul>
                            <a href="productionCapability.html#pcBx-1">
                                <li>Flame Lamination</li>
                            </a>
                            <a href="productionCapability.html#pcBx-2">
                            <li>EVA & Rubber Band Knife Splitting</li> </a>
                            <a href="productionCapability.html#pcBx-3">
                            <li>Water Based Adhesive Lamination</li></a>
                            <a href="productionCapability.html#pcBx-4">
                            <li>Hot Melt Film Lamination</li> </a>
                        </ul>
                    </div>
                </div>
                <a href="#about">About</a>
                <a href="contactus.html">Contact</a>
                <a href="javascript:void(0);" style="font-size:25px;" class="icon" onclick="myFunction()">&#9776;</a>
            </div>



            <div class="social">
                <ul>
                    <li><a href="https://www.facebook.com/welcomepolymers"><i class="fab fa-facebook-square"></i></a></li>
                    <li><a href="tel:9810082485"><i class="fas fa-phone-square-alt"></i></a></li>
                    <li><a href="https://wa.me/message/SR27IIZ2MPNLC1"><i class="fab fa-whatsapp-square"></i></a></li>
                    <li><a href=" https://www.instagram.com/welcomepolymers/ "><i class="fab fa-instagram-square"></i></a></li>
                    <li><a href=" https://www.linkedin.com/company/wppl270 "><i class="fab fa-linkedin"></i></a></li>
                    <!-- <li><a href=""><i class="fab fa-youtube-square"></i></a></li> -->
                </ul>
            </div>
        </nav>
    </header>

    <section>
        <div class="youtube-video">
            <!-- <video src="https://youtu.be/piAr2WnKAoo"></video> -->
            <iframe class="youtube-frame" width="800" height="550" src="https://www.youtube.com/embed/piAr2WnKAoo"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            <div class="cnt-btn">
                <button>
                    <a href="contactus.html">
                        <span>Contact Us</span>
                    </a>
                </button>
            </div>
        </div>

        <div class="aboutBx" id="about">
            <h1>Who we are</h1>
            <p>We at Welcome Polymers are determined to provide our customers with premium range of laminated textile
                both domestically and internationally. We have been in the textile industry for the past 20 years and
                are at the forefront for devloping new range of Fabrics for use in footware, automobile, medical,
                helmet, packaging and bag industry. Bonding is something we take pride in and are able to laminate all
                types of Fabrics with various polymers or Fabrics.</p>
        </div>

        <div class="videoBx">
            <video src="images/2.mp4" width="100%" autoplay loop muted></video>

            <div class="textBx">
                <p class="item-1">Premium range of Laminated Textiles</p>

                <p class="item-2">Dominating the Textile Industry for 20 Years</p>

                <p class="item-3">Leading Expets in Textile and Fabics</p>

            </div>
        </div>

        <div class="aboutBx">
            <h1>What We Do</h1>
            <p>At Welcome Polymers India Pvt. Ltd. We manufacture laminated and technical textile for use in apparel,
                footwear, orthopedic belts, luggage, helmats and car interiors industry. </p>
            <p>These Fabrics are manufactured keeping it's end use functional property in mind. We also deal in variety
                of printed Fabrics for use in these industries. The requirement for functional textile is ever growing
                and We are here to cater to all those needs.</p>

            <div class="cnt-btn">
                <button>
                    <a href="contactus.html">
                        <span>Contact Us</span>
                    </a>
                </button>
            </div>
        </div>

        <!-- product section  -->
        <!-- 1st product section  -->
        <div class="produdctBx" >
            <h2>Our Products</h2>

            <!-- 1st product  -->
            <div class="container-1" id="product-1">
                <div class="img-box">
                    <img src="images/a.png" alt="">
                    <a href="footware.html">
                    <h3 class="product-title-1">footwear Category</h3>
                </a>
                </div>

                <!-- para  -->
                <div class="all-para">
                    <div class="para-card-1">
                        <a href="footware.html#fwpBx-1">
                        <p>Footwear EVA Laminated Fabrics</p>
                    </a>
                    </div>
                    <div class="para-card-1">
                        <a href="footware.html#fwpBx-2">
                        <p>Footwear Foam Laminated Fabrics</p>
                        </a>
                    </div>
                    <div class="para-card-1">
                        <a href="footware.html#fwpBx-3">
                        <p>Footwear Innerlining Fabrics</p>
                        </a>
                    </div>
                    <div class="para-card-1">
                        <a href="footware.html#fwpBx-4">
                        <p>Footwear Insocks Material compositees</p>
                        </a>
                    </div>
                </div>
            </div>


            <!-- 2nd product  -->
            <div class=" container-2" id="product-2">
                <div class=" img-box">
                <img src="images/b.png" alt="">
                <a href="orthopedic.html">
                <h3 class="product-title-2">ORTHOPAEDIC PRODUCTS</h3>
            </a>
            </div>

            <!-- para  -->
            <div class="all-para">
                <div class="para-card-1">
                    <a href="orthopedic.html#orp-1">
                    <p>Posture Belt Fabrics</p>
                </a>
                </div>
                <div class="para-card-1">
                    <a href="orthopedic.html#orp-2">
                    <p>Arm Sling Fabrics</p>
                    </a>
                </div>
                <div class="para-card-1">
                    <a href="orthopedic.html#orp-3">
                    <p>Lumbar support Fabrics</p>
                    </a>
                </div>
                <div class="para-card-1">
                    <a href="orthopedic.html#orp-4">
                    <p>Knee Support Fabrics</p>
                    </a>
                </div>
                <div class="para-card-1">
                    <a href="orthopedic.html#orp-5">
                    <p>Velcroable Fabrics</p>
                    </a>
                </div>
            </div>
        </div>
        <!-- 3rd product  -->
        <div class="container-1" id="product-3">
            <div class="img-box">
                <img src="images/c.png" alt="">
                <a href="neoperene.html">
                <h3 class="product-title-1">NEOPRENE LAMINATED FABRIC</h3>
            </a>
            </div>

            <!-- para  -->
            <div class="all-para">
                <div class="para-card-1">
                    <a href="neoperene.html#ne-1">
                    <p>Bottle koozie Fabrics</p>
                    </a>
                </div>
                <div class="para-card-1">
                    <a href="neoperene.html#ne-2">
                    <p>support Fabrics</p>
                    </a>
                </div>

            </div>
        </div>


        <!-- 4th product  -->
        <div class=" container-2" id="product-4">
            <div class="img-box">
                <img src="images/d.png" alt="">
                <a href="Fabricspeciality.html">
                <h3 class="product-title-2">Fabrics SPECIALITIES</h3>
                </a>
            </div>

            <!-- para  -->
            <div class="all-para">
                <div class="para-card-1">
                    <a href="Fabricspeciality.html#fsBx-1">
                    <p>Interlock Fabrics</p>
                </a>
                </div>
                <div class="para-card-1">
                    <a href="Fabricspeciality.html#fsBx-2">
                    <p>Circular Chord Fabrics</p>
                    </a>
                </div>
                <div class="para-card-1">
                    <a href="Fabricspeciality.html#fsBx-3">
                    <p>Suede Fabrics</p>
                    </a>
                </div>
                <div class="para-card-1">
                    <a href="Fabricspeciality.html#fsBx-4">
                    <p>Digital Printed Fabrics</p>
                    </a>
                </div>
                <div class="para-card-1">
                    <a href="Fabricspeciality.html#fsBx-5">
                    <p>Waterjet Fabrics</p>
                    </a>
                </div>
            </div>
        </div>


        <!-- 5th product  -->
        <div class="container-1" id="product-5">
            <div class="img-box">
                <img src="images/e.png" alt="">
                <a href="productDevelopment.htm">
                <h3 class="product-title-1">PRODUCT DEVELOPMENT</h3>
            </a>
            </div>

            <!-- para  -->
            <div class="all-para">
                <div class="para-card-1">
                    <a href="productDevelopment.html#pdBx-1">
                    <p>PUR Lamination</p>
                </a>
                </div>
                <div class="para-card-1">
                    <a href="productDevelopment.html#pdBx-2">
                    <p>PUL Fabrics For Use</p>
                    </a>
                </div>
            </div>
        </div>


        <!-- 6th product  -->
        <div class=" container-2" id="product-6">
            <div class="img-box">
                <img src="images/f.png" alt="">
                <a href="productionCapability.html">
                <h3 class="product-title-2">PRODUCTION CAPABILITIES</h3>
                </a>
            </div>

            <!-- para  -->
            <div class="all-para">
                <div class="para-card-1">
                    <a href="productionCapability.html#pcBx-1">
                    <p>Flame Lamination</p>
                    </a>
                </div>
                <div class="para-card-1">
                    <a href="productionCapability.html#pcBx-2">
                    <p>EVA & Rubber Band Knife Splitting</p>
                    </a>
                </div>
                <div class="para-card-1">
                    <a href="productionCapability.html#pcBx-3">
                    <p>Water Based Adhesive Lamination</p>
                    </a>
                </div>
                <div class="para-card-1">
                    <a href="productionCapability.html#pcBx-4">
                    <p>Hot Melt Film Lamination</p>
                    </a>
                </div>
            </div>
        </div>


        </div>
        <!-- footer top section  -->
        <div class="endBx">


            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#fff" fill-opacity="1"
                    d="M0,32L60,26.7C120,21,240,11,360,53.3C480,96,600,192,720,245.3C840,299,960,309,1080,272C1200,235,1320,149,1380,106.7L1440,64L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z">
                </path>
            </svg>


            <h4>Lets Connect and get your product designed</h4>
            <p>For any laminated o technical textile inquires please enter the details on contact us page or call us at-  <a
                    href="tel:9810082485">98100-82485</a></p>

            <!-- button  -->
            <div class="cnt-btn-1">
                <button>
                    <a href="contactus.html">
                        <span>Contact Us</span>
                    </a>
                </button>
            </div>
        </div>
    </section>
    <footer>
        <a href="index.html">
            <img src="images/WP PNG.png" alt="" class="fotimg">
        </a>
        <p class="foot-para">
            Get in touch with us through social and stay notified with day-to-day updates about Textile World
        </p>
        <div class="footer-social">
            <ul>
                    <li><a href="https://www.facebook.com/welcomepolymers"><i class="fab fa-facebook-square"></i></a></li>
                    <li><a href="tel:9810082485"><i class="fas fa-phone-square-alt"></i></a></li>
                    <li><a href="https://wa.me/message/SR27IIZ2MPNLC1"><i class="fab fa-whatsapp-square"></i></a></li>
                    <li><a href=" https://www.instagram.com/welcomepolymers/ "><i class="fab fa-instagram-square"></i></a></li>
                    <li><a href=" https://www.linkedin.com/company/wppl270 "><i class="fab fa-linkedin"></i></a></li>
                    <!-- <li><a href=""><i class="fab fa-youtube-square"></i></a></li> -->
            </ul>
        </div>
        <!-- contact details  -->
        <div class="foot-contact">
            <ul>
                <!-- <li class="image-icon"><img src="../images/mail.png" alt=""></li> -->
                <li><a href="mailto:welcomepolymersinfo@gmail.com"><i class="fas fa-envelope"></i>welcomepolymersinfo@gmail.com</a>
                </li>


            </ul>
            <ul>
                <!-- <li class="image-icon"><img src="../images/location.png" alt=""></li> -->
                <li><a href="https://maps.app.goo.gl/TvNyUh5D1KSYXXvGA"><i class="fas fa-map-marker-alt"></i>plot no. 270,footwear
                        park, sector 17,bahadurgarh Haryana. India - 124507</a></li>
            </ul>
            <ul>
                <!-- <li class="image-icon"><img src="../images/ph.png" alt=""></li> -->
                <li><a href="tel:9810082485"><i class="fas fa-mobile-alt"></i>98100 82485</a></li>
            </ul>
        </div>

        <p>&copy;All rights reserved | 2021</p>
    </footer>




    <script src="./js/app.js"></script>
</body>

</html>

		
