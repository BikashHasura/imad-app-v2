<!DOCTYPE html>
<html>
<head>

  <link rel="shortcut icon" href="assets/images/penguins-1024x768-43.jpg" type="image/x-icon">
  <title>Student registation form</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/mobirise/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <script language="javascript">
function validate()
{
	if(document.f.Name.value=="")
	{
		window.alert("please enter your name");
		document.f.Name.focus();
		return false;
	}
	if(document.f.Name.value.match(/[^A-Z a-z]/))
	{
		window.alert("please enter proper name");
		document.f.Name.focus();
		return false;
	}
	if(document.f.RollNo.value=="")
	{
		window.alert("please enter your Roll number");
		document.f.RollNo.focus();
		return false;
	}
	if(document.f.RollNo.value.match(/[^A-Za-z0-9]/))
	{
		window.alert("please enter proper roll number");
		document.f.RollNo.focus();
		return false;
	}
/*
	if(document.f.t3.value=="")
	{
		window.alert("please enter your age");
		document.f.t3.focus();
		return false;
	}
	if(document.f.t3.value.length!=2)
	{
		window.alert("enter a legal age");
		document.f.t3.focus();
		return false;
	}
	if(document.f.t3.value.match(/[^0-9]/))
	{
		window.alert(" your age should not contain any alphabate");
		document.f.t3.focus();
		return false;
	}
*/
	if(document.f.Branch.value==-1)
	{
		window.alert("select your branch");
		document.f.Branch.focus();
		return false;
	}

	if(document.f.Phone.value=="")
	{
		window.alert("please enter your mobile no.");
		document.f.Phone.focus();
		return false;
	}
	if(document.f.Phone.value.length!=10)
	{
		window.alert("your mobile no.should contain 10 digit");
		document.f.Phone.focus();
		return false;
	}
	if(document.f.Phone.value.match(/[^0-9]/))
	{
		window.alert("enter valid mobile no");
		document.f.Phone.focus();
		return false;
	}

	/*	if(document.f.Email.value=="")
	{
		window.alert("please enter your email");
		document.f.Email.focus();
		return false;
	}
	var e=document.f.Email.value;
	
	var x=e.indexOf('@');
	var y=e.lastIndexOf('.');
	var z=e.substr(y+1);
	var a=z.length;
	if(x== -1 || y== -1)
	{
		window.alert("your email is not valid");
		document.f.Email.focus();
		return false;
	}
	if(x<0||(y-x)<3||a>3)
	{
		window.alert("your email is not valid");
		document.f.Email.focus();
		return false;
	}
*/
	
	if(document.f.Address.value=="")
	{
		window.alert("please enter your address");
		document.f.Address.focus();
		return false;
	}

	if(document.f.Gender.value=="")
	{
		window.alert("please select gender");
		document.f.Gender.focus();
		return false;
	}

	if(document.f.Password1.value=="")
	{
		window.alert("please enter a password");
		document.f.Password1.focus();
		return false;
	}
	if(document.f.Password1.value.length<5)
	{
		window.alert("your password length should be minimum 5");
		document.f.Password1.focus();
		return false;
	}
	if(document.f.Password1.value!=document.f.Password2.value)
	{
		window.alert("Second Password does not match with first one");
		document.f.Password2.focus();
		return false;
	}
//		window.alert("Submitted Successfully.........");

}
  </script>

<style type="text/css" rel="stylesheet">

#sbmt{
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 3px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}
	</style>

</head>
<body>
<section class="mbr-navbar mbr-navbar--freeze mbr-navbar--absolute mbr-navbar--transparent mbr-navbar--sticky mbr-navbar--auto-collapse" id="menu-2">
    <div class="mbr-navbar__section mbr-section">
        <div class="mbr-section__container container">
            <div class="mbr-navbar__container">
                <div class="mbr-navbar__column mbr-navbar__column--s mbr-navbar__brand">
                    <span class="mbr-navbar__brand-link mbr-brand mbr-brand--inline">
                        <span class="mbr-brand__logo"><a href="localhost"><img src="assets/images/gietlogo-80x114-50.jpg" class="mbr-navbar__brand-img mbr-brand__img" alt="Mobirise"></a></span>
                        <span class="mbr-brand__name"><a class="mbr-brand__name text-white" href="localhost">HOSTEL MANAGEMENT SYSTEM</a></span>
                    </span>
                </div>
                <div class="mbr-navbar__hamburger mbr-hamburger"><span class="mbr-hamburger__line"></span></div>
                <div class="mbr-navbar__column mbr-navbar__menu">
                    <nav class="mbr-navbar__menu-box mbr-navbar__menu-box--inline-right">
                        <div class="mbr-navbar__column">
                            <ul class="mbr-navbar__items mbr-navbar__items--right float-left mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-decorator mbr-buttons--active mbr-buttons--only-links">
							<li class="mbr-navbar__item">
								<a class="mbr-buttons__link btn text-white" href="https://localhost">HOME</a>
							</li>
							<li class="mbr-navbar__item">
								<a class="mbr-buttons__link btn text-white" href="https://localhost">ABOUT</a>
							</li>
								<li class="mbr-navbar__item">
									<a class="mbr-buttons__link btn text-white" href="https://localhost">CONTACT</a>
								</li>
							</ul>                            
                            
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>



                        <form action="" method="post" name="f" onsubmit="return validate()" data-form-title="Student registation form">
<section class="mbr-section mbr-section--relative mbr-section--fixed-size mbr-parallax-background mbr-after-navbar" id="form1-5" style="background-image: url(assets/images/jellyfish-1024x768-2000x1500.jpg);">

				<div class="mbr-section__container mbr-section__container--std-padding container" style="padding-top: 93px; padding-bottom: 93px;">
                        <div class="mbr-header mbr-header--center mbr-header--std-padding">
                            <h2 class="mbr-header__text">New student registation form</h2>
                        </div>

                    <div class="col-sm-8 col-sm-offset-2" data-form-type="formoid">

							<div class="form-group">
                                <input type="text" class="form-control" name="Name" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="RollNo" placeholder="Roll number">
                            </div>
<div class="form-group">

<select class="form-control" name="Branch">
<option value="Chemical Engineering">Chemical Engineering</option>
<option value="Mechanical Engineering">Mechanical Engineering</option>
<option value="Computer Science & Engineering">Computer Science & Engineering</option>
<option value="Applied Electronics & Instrumentation Engg">Applied Electronics & Instrumentation Engg</option>
<option value="Electronics & Communication Engineering">Electronics & Communication Engineering</option>
<option value="Electrical & Electronics Engineering">Electrical & Electronics Engineering</option>
<option value="Biotechnology">Biotechnology</option>
<option value="Electrical Engineering">Electrical Engineering</option>
<option value="Metallurgical Engineering">Metallurgical Engineering</option>
<option value="Civil Engineering">Civil Engineering</option>
</select>

</div>
                            <div class="form-group">
                                <input type="number" class="form-control" name="Phone" placeholder="Phone">
                            </div>
                            <div class="form-group">
								<input type="date" class="form-control" name="DOB" placeholder="Date of birth"  min="1980-01-02" >
							</div>

                        <div class="form-group">
                            <textarea class="form-control" name="Address" rows="6" data-form-field="Address" placeholder="Address" id="Address" ></textarea>
                        </div>

							<div class="form-group">
                                <input type="Password" class="form-control" name="Password1" placeholder="Password" data-form-field="Password1">
							</div>
							<div class="form-group">
                                <input type="Password" class="form-control" name="Password2" placeholder="Retype Password" data-form-field="Password2">
							</div>

<input type="checkbox" name="Diploma" id="sbmt" value="yes"><font size='3px' color='white'>Click if you are a Lateral entry student (Diploma holder.)</font><br>
							
<font size='4px' color='white'>Select your year of joining:</font>
<select name="Joining" id="sbmt">
  <?php
  include 'functionalities/Admin/connectDB.php';
  $sql="Select * from yearchange";
  $res = mysqli_query($conn,$sql);  
							while($row = mysqli_fetch_array($res))
    						{
								$A=$row['T5'];
								$B=$row['T4'];
								$C=$row['T3'];
								$D=$row['T2'];
							}
							echo "<option value='";echo $A;
							echo "'>";
							echo $A;echo"  </option>";

////////////////////////////////////////////////////////////////////////////////////							
  
							echo "<option value='";echo $B;
							echo "'>";
							echo $B;echo"  </option>";

////////////////////////////////////////////////////////////////////////////////////							
  
							echo "<option value='";echo $C;
							echo "'>";
							echo $C;echo"  </option>";

////////////////////////////////////////////////////////////////////////////////////							
							echo "<option value='"; echo $D;
							echo "'>";
							echo $D;echo"  </option>";
?>
</select>
							
			<font size='4px' color='white'>Select your gender:</font>
			<input type="radio" name="Gender" id="GenderM" value="male"><font size='4px' color='white'>Male</font>
			<input type="radio" name="Gender" id="GenderF" value="female"> <font size='4px' color='white'>Female</font>
							
<!--                        <div><button type="submit" class="btn btn-primary">Submit</button></div> -->
<input type="submit" id="sbmt" value="Submit">

		</div>
		</div>
 </section>

</form>
  
  
</body>
</html>




<?php
if(isset($_POST['Password2']))
{
	if(isset($_POST['Diploma']))
	{
		$_POST['Joining']--;
	}
	
	include('functionalities/Admin/connectDB.php');
		$table = $_POST['Joining'] . "JoiningBatch";
$NAME	 =$_POST["Name"];
$ROLLNO	 =$_POST["RollNo"];
$BRANCH	 =$_POST["Branch"];
$DOB	 =$_POST["DOB"];
$PHONE	 =$_POST["Phone"];
$ADDRESS =$_POST["Address"];
$GENDER	 =$_POST["Gender"];
echo password_hash($_POST[`Password2`],PASSWORD_DEFAULT,['cost'=> 10]);
$PASSWORD=password_hash($_POST['Password2'],PASSWORD_DEFAULT,['cost'=> 10]);
//echo "doing till now";
	$query = "INSERT INTO $table (Name, RollNo,Branch, DOB,Phone,Address,Gender) VALUES('$NAME','$ROLLNO','$BRANCH','$DOB','$PHONE','$ADDRESS','$GENDER')";
	$que = "INSERT INTO studentslogin (Password, RollNo) VALUES('$PASSWORD','$ROLLNO')";

	if((mysqli_query($conn,$query)) && (mysqli_query($conn,$que)) )
	{
//		echo "";
echo '<script language="javascript">';
echo 'alert(`You have registered successfully!';
echo'`)';
echo '</script>';

	} 
	else {
echo '<script language="javascript">';
echo 'alert("Problem in registration. Try Again!")';
echo '</script>';
	}
}
?>

