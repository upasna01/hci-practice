<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Upload Prescription</title>
<link rel="stylesheet" type="text/css" href="css/upload-prescription.css" />
<link rel="shortcut icon" href="images/fav-icon.png" type="image/x-icon"/>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>

<body>
<div id="header">
	<div class="container-manual">
	<div id="navigationBar">
	
    	
        	<div id="logo"><a href="/"><img src="images/logo.png" /></a></div>
            
                <div class="nav">
                
                    <ul>
                        <li><a href="otcProducts">Over the Counter</a></li>
                        <li><a href="diabetesCategory">Diabetes</a></li>
                        <li><a href="personalCategory">Personal Care</a></li>
                        <li><a href="otcProducts">Respiratory Care</a></li>
                        <div id="login" style="float:right;"><li>
                        <?php $user = Session::get('user');?>
                        @if(empty($user))
                        <a href="register"><img src="images/user-icon.png" />Login</a>
                        @endif
                         @if(!empty($user))
                            <div class="dropdownMenu">
                            <span><a href="register"><img src="images/user-icon.png" />{{$user}}</a></span>
                            <div class="dropdown-contentMenu">
                                <p><a href="myOrders" style="font-weight:normal;padding:10px">My Orders</a></p>
                                <p><a href="myPrescriptions" style="font-weight:normal;padding:10px">My Prescriptions</a></p>
                                <p><a href="accountSettings" style="font-weight:normal;padding:10px">Settings</a></p>
                                <p><a href="logout" style="font-weight:normal;padding:10px">Logout</a></p>
                            </div>
                            </div>
                        @endif
                        
                        </li></div>
                         
                        
                    </ul>
                </div>
   
        </div>
    </div>
</div>

<div id="header2">
	<div class="container-manual">
    	<div id="search">
        	<input type="text" placeholder="Search for medicine here" style="background-image:url(images/search_bg.jpg); height:30px; width:289px; font-size:16px; margin-top:6px; padding-left:18px; " /></div>&nbsp; &nbsp; 
            <a href="search"><img src="images/go-icon.jpg" style="padding-top:9px; " /></a>
             <a href="uploadPres"><img src="images/upload-prescription.jpg" style="padding-top:9px; padding-left:18px; " /></a>
             <img src="images/helpline.png" style=" padding-left:45px;" />
        </div>
	</div>
</div>
<br/>
<div class="container-manual">
	<div id="heading">UPLOAD PRESCRIPTION</div>
    <br/><br/>
    <img src="images/guide.jpg" />
    <br/><br/>
    <img src="images/seperator.jpg" />
    <br/><br/>
    <div class="row">
    	<div class="col-lg-4 col-md-4">
        	<a href="#"><img src="images/up-space.jpg" /></a>
        </div>
        <div class="col-lg-8 col-md-8" style="padding-left:90px;">
        	<img src="images/instructs.jpg" />
        </div>
    </div>
    <br/><br/>
    <a href="thankYouPrescription"> <img src="images/submit-button.jpg" style="float:right;" />
</div>


<br/><br/><br/><br/>
<div id="footer">
	<div class="container">
    	<div id="copyright">
    		<div id="footer">
    	<img src="images/copyright.png" style="padding-top:20px; text-align:center; margin:0 auto;" />
        <div id="footer_navBar">
    	<ul>
        	<li><a href="/">Home</a></li>
            <li><a href="aboutUs">About Us</a></li>
            <li><a href="gallery">Gallery</a></li>
            <li><a href="contactUs">Contact Us</a></li>
            <li><a href="/">Terms & Conditions</a></li>
        </ul>    
    </div>
    </div>
        </div>
    </div>
</div>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
