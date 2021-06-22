<?php
	$name="";
	$err_name="";
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$ConfirmPass="";
	$err_ConfirmPass="";
	$email="";
	$err_email="";
	$phNumber="";
	$err_phNumber="";
	$code="";
	$err_code="";
	$number="";
	$err_number="";
	$streetAddress="";
	$err_streetAddress="";
	$city="";
	$err_city="";
	$state="";
	$err_state="";
	$PostalCode="";
	$err_PostalCode="";
	$day="";
	$err_day="";
	$month="";
	$err_month="";
	$year="";
	$err_year="";
	$gender="";
	$err_gender="";
	$getInformation=[];
	$err_getInformation="";
	$bio="";
	$err_bio="";
	
	$hasError=false;
	
	$months= array("January","February","March","April","May","June","July","August","September","October","November","December");
	$years= array("1985","1986","1987","1988","1989","1990","1991","1992","1993","1994","1995","1996","1997","1998","2000","2001","2002","2003",
	              "2004","2005","2006","2007","2008","2009","2010","2011","2012","2013","2014","2015","2016","2017","2018","2019","2020","2021");
	
	function GetInformation($g){
		global $getInformation;
		foreach($getInformation as $getInfo){
			if ($g == $getInfo) return true;
		}
		return false;
	}
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["name"])){
			$hasError=true;
			$err_name="Name Required";
		}
		elseif (strlen($_POST["name"]) <=2){
			$hasError = true;
			$err_name = "Name must be greater than 2 characters";
		}
		elseif (is_numeric($_POST["name"]))
		{
			$hasError = true;
			$err_name = "Name can't be numeric!!";
		}
		else{
			$name = $_POST["name"];
		}
		
		if(!isset($_POST["uname"])){
			$hasError=true;
			$err_uname="UserName Required";
		}
		elseif (strlen($_POST["uname"]) <6){
			$hasError = true;
			$err_uname = "UserName must be greater than 6 characters";
		}
		elseif (strpos($_POST["uname"]," ")){
			$hasError = true;
			$err_uname = "UserName can't take space!!!";
		}
		else
		{
			$uname = $_POST["uname"];
		}
		if(!isset($_POST["pass"])){
			$hasError=true;
			$err_pass="Password Required!!";
		}
		elseif (strlen($_POST["pass"]) <8 ){
			$hasError = true;
			$err_pass = "Password must have atleast 8 characters!!";
		}
		elseif (!strpos($_POST["pass"],"#") && !strpos($_POST["pass"],"?")){
			$hasError = true;
			$err_pass = "Password must have atleast 1 special characters(# or ?)!!";
		}
		elseif (!ctype_upper($_POST["pass"]) && !ctype_lower($_POST["pass"])){
			$hasError = true;
			$err_pass = "Password must have Combination of lower and upper class!!";
		}
		else
		{
			$pass = $_POST["pass"];
		}
		if(!isset($_POST["ConfirmPass"])){
			$hasError=true;
			$err_ConfirmPass="Confirm Password Required!!";
		}
		elseif (strlen($_POST["ConfirmPass"]) <8 ){
			$hasError = true;
			$err_pass = "Confirm Password must have atleast 8 characters!!";
		}
		elseif (!strpos($_POST["ConfirmPass"],"#") && !strpos($_POST["ConfirmPass"],"?")){
			$hasError = true;
			$err_pass = "Confirm Password must have atleast 1 special characters(# or ?)!!";
		}
		elseif (!ctype_upper($_POST["ConfirmPass"]) && !ctype_lower($_POST["ConfirmPass"])){
			$hasError = true;
			$err_pass = "Confirm Password must have Combination of lower and upper class!!";
		}
		else
		{
			$ConfirmPass = $_POST["ConfirmPass"];
		}
		if(!isset($_POST["email"])){
			$hasError = true;
			$err_email = "Email Required!!!";
		}
		elseif(strpos($_POST["email"],"@.")){
			$email = $_POST["email"];	
		}
		else{
			$hasError = true;
			$err_email = "please use an @. !!!";
		}
		
		if(!isset($_POST["gender"])){
			$hasError = true;
			$err_gender = "Gender Required!!!";
		}
		else{
			$gender = $_POST["gender"];
		}
		
		if(!isset($_POST["code"])){
			$hasError = true;
			$err_code = "Code Required!!!";
		}
		elseif(is_numeric($_POST["code"])){
			$code = $_POST["code"];
		}
		else{
			$hasError = true;
			$err_code  = "Please enter a numeric value!!!";
		}
		if(!isset($_POST["number"])){
			$hasError = true;
			$err_number = "number Required!!!";
		}
		elseif(is_numeric($_POST["number"])){
			$number = $_POST["number"];
		}
		else{
			$hasError = true;
			$err_number = "Please enter a numeric value!!!";
		}
		if(!isset($_POST["streetAddress"])){
			$hasError = true;
			$err_streetAddress= "Street Address Required!!";
		}
		else{
			$streetAddress = $_POST["streetAddress"];
		}
		if(!isset($_POST["city"])){
			$hasError = true;
			$err_city= "City Required!!";
		}
		else{
			$city = $_POST["city"];
		}
		if(!isset($_POST["state"])){
			$hasError = true;
			$err_state= "State Required!!";
		}
		else{
			$state = $_POST["state"];
		}
		if(!isset($_POST["PostalCode"])){
			$hasError = true;
			$err_PostalCode= "Postal Code Required!!";
		}
		else{
			$PostalCode = $_POST["PostalCode"];
		}
		if(!isset($_POST["day"])){
			$hasError = true;
			$err_day= "Please choose a date!!";
		}
		else{
			$day = $_POST["day"];
		}
		if(!isset($_POST["month"])){
			$hasError = true;
			$err_month= "Please choose a month!!";
		}
		else{
			$month = $_POST["month"];
		}
		if(!isset($_POST["year"])){
			$hasError = true;
			$err_year= "Please choose your birth year!!";
		}
		else{
			$year = $_POST["year"];
		}
		if(!isset($_POST["getInformation"])){
			$hasError = true;
			$err_getInformation = "It's Required!!!";
		}
		else{
			$getInformation = $_POST["getInformation"];
		}
		if(!isset($_POST["bio"])){
			$hasError = true;
			$err_bio = "Bio Required.. Please enter your bio!!";
		}
		else{
			$bio = $_POST["bio"];
		}
		
		if(!$hasError){
			echo $_POST["name"]."<br>";
			echo $_POST["uname"]."<br>";
			echo $_POST["pass"]."<br>";
			echo $_POST["ConfirmPass"]."<br>";
			echo $_POST["email"]."<br>";
			echo $_POST["code"]."<br>";
			echo $_POST["number"]."<br>";
			echo $_POST["streetAddress"]."<br>";
			echo $_POST["city"]."<br>";
			echo $_POST["state"]."<br>";
			echo $_POST["PostalCode"]."<br>";
			echo $_POST["gender"]."<br>";
			echo $_POST["day"]."<br>";
			echo $_POST["month"]."<br>";
			echo $_POST["year"]."<br>";
			echo $_POST["getInformation"]."<br>";
			echo $_POST["bio"]."<br>";
			$arr = $_POST["getInformation"];
			
			foreach($arr as $e){
				echo "$e<br>";
			}
		}
		
	}
	
?>
<html>
	<body>
		<form action="" method="post">
			<table align="center">
			    <tr>
					<td colspan="2"><h1> Club Member Registration </h1></td>
				</tr>
				<tr>
					<td align="right">Name</td>
					<td>:<input name="name" value="<?php echo $name;?>" type="text"><br>
					<span><?php echo $err_name;?></span></td>
				</tr>
				<tr>
					<td align="right">Username</td>
					<td>:<input name="uname" type="text" value="<?php echo $uname;?>"><br>
					<span><?php echo $err_uname;?></span></td>
				</tr>
				<tr>
					<td align="right">Password</td>
					<td>:<input name="pass" type="password" value="<?php echo $pass;?>">
					<br><span><?php echo $err_pass;?></span></td>
				</tr>
				<tr>
					<td align="right">Confirm Password</td>
					<td>:<input name="ConfirmPass" type="password" value="<?php echo $ConfirmPass;?>"><br>
					<span><?php echo $err_ConfirmPass;?></span></td>
				</tr>
				<tr>
					<td align="right">Email</td>
					<td>:<input name="email" type="text" value="<?php echo $email;?>">
					    <br><span><?php echo $err_email;?></span></td>
				</tr>
				<tr>
					<td align="right">Phone Number</td>
					<td>:
					<input name="code" type="text" value="<?php echo $code;?>" placeholder="Code">-<input name="number" type="text" value="<?php echo $number;?>" placeholder="Number">
					<br>
					<span><?php echo $err_number;?></span>
					</td>
					
				</tr>
				<tr>
					<td align="right">Address</td>
					<td>:
					<input name="streetAddress" type="text" value="<?php echo $streetAddress;?>" placeholder="Street Address"><br>
					
					<span><?php echo $err_streetAddress;?></span></td>
				</tr>
				<tr>
					<td></td>
					<td>&nbsp;
					<input name="city" type="text" value="<?php echo $city;?>" placeholder="City">-<input name="state" type="text" value="<?php echo $state;?>" placeholder="State"><br>
					
					<span><?php echo $err_city; echo $err_state;?></span></td>
				</tr>
				<tr>
					<td></td>
					<td>&nbsp;
					<input name="PostalCode" type="text" value="<?php echo $PostalCode;?>" placeholder="Postal/ZIP Code">
					<br>
					<span><?php echo $err_PostalCode;?></span></td>
				</tr>
				<tr>
					<td align="right">Date Of Birth</td>
					<td colspan="2">:<select name="day" value="<?php echo $day;?>">
							<option selected disabled>Day</option>
							<?php
								for($i=1; $i<=31; $i++){
									echo "<option>$i</option>";
								}
							?>
						</select><span><?php echo $err_day;?></span>
						<select name="month" value="<?php echo $month;?>">
							<option selected disabled>Month</option>
							<?php
								foreach($months as $m){
									if($m == $month)
										echo "<option selected>$m</option>";
									else
										echo "<option>$m</option>";
								}
							?>
						</select><span><?php echo $err_month;?></span>
						<select name="year" value="<?php echo $year;?>">
							<option selected disabled>Year</option>
							<?php
								foreach($years as $y){
									if($y == $year)
										echo "<option selected>$y</option>";
									else
										echo "<option>$y</option>";
								}
							?>
						</select><span><?php echo $err_year;?></span>
					</td>
				</tr>
				<tr>
					<td align="right">Gender</td>
					<td>:<input type="radio" value="Male" <?php if($gender == "Male") echo "checked";?> name="gender"> Male <input type="radio" <?php if($gender == "Female") echo "checked";?> value="Female" name="gender"> Female <br>
					<span><?php echo $err_gender;?></span></td>
				</tr>
				<tr>
					<td align="right">Where did you hear<br>about us?</td>
					<td>
						<input type="checkbox" value="A friend or Colleague"  name="getInformation[]" <?php if(getInformation("A friend or Colleague")) echo "checked";?>>A friend or Colleague<br>  
						<input value="Google" name="getInformation[]" <?php if(getInformation("Google")) echo "checked";?> type="checkbox">Google<br>
						<input value="Blog Post" name="getInformation[]" <?php if(getInformation("Blog Post")) echo "checked";?> type="checkbox">Blog Post<br> 
						<input value="News Article" name="getInformation[]" <?php if(getInformation("News Article")) echo "checked";?> type="checkbox">News Article
					<br>
					<span><?php echo $err_getInformation;?></span></td>
				</tr>
				<tr>
					<td align="right">Bio</td>
					<td>:
						<textarea name="bio"><?php echo $bio;?></textarea>
						<br><span><?php echo $err_bio;?></span>
					</td>
				</tr>
				<tr>
					<td></td>
					<td align="left"><input type="submit" value="Register"></td>
					
				</tr>
			</table>
		</form>
	</body>
</html>