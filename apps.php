<!DOCTYPE html>
<!-- saved from url=(0063)file:///C:/Users/CG-DTE/Desktop/web/application%20form/app.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title>Online Job Application Form</title>
	<style>
	body{
        <div class="bgimage">
		font-family: "ALGERIAN";
		background-color: skyblue;
		background-image: transparent;
		margin: 0;
    }
    h2{
    	background-color: blue;
    	text-align: center;
    	padding: 5px;
    	color: white;
    }
    td{
    	padding: 7px;
    }

    input{
    	height: 20px;
    	border-radius: 10px;
    	border: none;
    }

    input: focus, textarea:focus{
    	outline: none;
    	border: 5px solid forestgreen;
    }

    textarea{
    	border-radius: 10px;
    }

    .button{
    	background-color: green;
    	color: white;
    	font-size: 18px;
    	padding: 0px 25px;
    	border: none;
    	margin-bottom: 30px;

    }

    .button:hover{
    	cursor: pointer;
    	box-shadow: 5px 5px 5px blue;
    }
</style>
</head>
<body>
	<?php
	// define variables and set to empty values
	$name= $father name= $mother name= $current address= permanent address= $contact number= $phone number= $mobile number= $date of birth ="";
	if ($_SERVER["REQUEST_METHOD"] == "POST"{
	<h1 align="center">Online Job Application Form</h1>
	<form>
		<div id="Personal information">
			<div class="bgimage"></div>
			<h2>Personal Information</h2>
		

		    	<table width="100%">
             if ($_SERVER["REQUEST_METHOD"] == "POST"{
		    <tbody><tr>
		    	<td>First Name</td>
		    	<td>
		    		<input type="text" size="25">
		    	</td>
		    	<td>Middle Name </td>
		    	<td>
		    		<input type="text" size="25">
		    	</td>
		    	<td>Last Name</td>
		    	<td>
		    		<input type="text" size="25">
		    	</td>
		    </tr>

		    <tr>
		    	<td>Father's Name</td>
		    	<td>
		    		<input type="text" size="25">
		    	</td>

		    	<td>Mother's Name</td>
		    	<td>
		    		<input type="text" size="25">
		    	</td>
		    </tr>

		    <tr>
		    
		    <td>Current Address</td>
		    	<td>
		    		<textarea rows="5" cols="28"></textarea>
		    	</td>
		    	<td>Permanent Address</td>
		    	<td>
		    		<textarea rows="5" cols="28"></textarea>
		    	</td>
		    </tr>
		    
		    <tr>
		    	<td>Contact Numbers</td>

		    	</tr>

		    	<tr>
		    		<td>Phone Number </td>
		    		<td>
		    			<input type="text" size="25">
		    		</td>
		    		<td>Mobile Number</td>
		    		<td>
		    			<input type="text" size="25">
		    		</td>
		    	</tr>
		    	<tr>
		    		<td>Date of Birth</td>
		    		<td><input type="Date" size="25">
		    		</td>} ?>
		    		<td>Place of Birth</td>
		    		<td>
		    			<input type="text" size="25">
		    		</td>
		    		
		    	</tr>
		    	<tr>
		    		<td>Select Gender</td>
		    		<td>
		    			<input type="radio" name="gender" value="male">Male
		    		</td>
		    		<td>
		    			<input type="radio" name="gender" value="female">Female
		    		</td>
		    		<td>
		    			<input type="radio" name="gender" value="other">Other
		    		</td>
		    	</tr>
		    	<tr>
		    		<td>Highest Qualification</td>
		    		<td>
		    			<input type="text" size="25">
		    		</td>
		    		<td>Year of Passing</td>
		    		<td>
		    			<input type="text" size="25">
		    		</td>
		    	</tr>

		    	<tr>
		    		<td>Languages Known</td>
		    		<td>
		    			<input type="radio" name="telugu">Telugu
		    		</td>
		    		<td>
		    			<input type="radio" name="English">English
		    		</td>
		    		<td>
		    			<input type="radio" name="Hindi">Hindi
		    		</td>
		    	</tr>

		    	<tr>
		    		<td> Select your Hobbies</td>
		    		<td>
		    			<input type="radio" name="Singing">Singing		    			
		    		</td>
		    		<td>
		    			<input type="radio" name="Eating">Eating
		    		</td>
		    		<td>
		    			<input type="radio" name="Coding">Coding
		    		</td>
		    	</tr><tr>
		    		<td>About Yourself</td>
		    		<td>
		    			<textarea rows="5" cols="40"></textarea>&gt;
		    		</td>
		    	</tr>

		    	<tr>
		    		<td>Nationality</td>
		    		<td>
		    			<select>
		    				<option>Indian</option>
		    				<option>American</option>
		    				<option>others</option>
		    			</select>
		    		</td>
		    	</tr>

		    	<tr>
		    		<td>Aadhar Card Number</td>
		    		<td>
		    			<input type="text" size="30">
		    		</td>	

		    		<td>Pan Card number</td>	    	
		    		<td>
		    			<input type="text" size="30">
		    		</td>
		    	</tr>

		    </tbody></table>

		</div>    	

		<!--education details-->

		<div id="education details"></div>
		<h2>Education Details</h2>
		<table width="100%">
			<tbody><tr>
				<td>Sno.</td>
				<td>Qualification</td>
				<td>Institute/University</td>
				<td>Year of passing</td>
				<td>Marks%</td>
			</tr>

			<tr>
				<td>1.</td>
				<td>
					<input type="text" size="20">
				</td>
				<td>
					<input type="text" size="35">
				</td>
				<td>
					<input type="month" size="20">
				</td>
				<td>
					<input type="number" size="15">
				</td>

				</tr>

				<tr>
				<td>2.</td>
				<td>
					<input type="text" size="20">
				</td>
				<td>
					<input type="text" size="35">
				</td>
				<td>
					<input type="month" size="20">
				</td>
				<td>
					<input type="number" size="15">
				</td>

				</tr>

				<tr>
				<td>3.</td>
				<td>
					<input type="text" size="20">
				</td>
				<td>
					<input type="text" size="35">
				</td>
				<td>
					<input type="month" size="20">
				</td>
				<td>
					<input type="number" size="15">
				</td>

				</tr>
			</tbody></table>

			  <!--OTHER DETAILES-->
				
				

				<div id="Other Details"></div>
				<h2> Other Details </h2>
		        <table width="100%">
		        

		        <tbody><tr>
		        	<td>Job Type</td>
		        	<td>
		        		<input type="radio" name="Permanent">Permanent
		        	</td>
		        	<td>
		        		<input type="radio" name="Contact">Contact
		        	</td>
		        	<td>
		        		<input type="radio" name="other">other
		        	</td>
		        </tr>

		        <tr>
		        	<td>Date of Joining</td>
		        	<td>
		        		<input type="Date" size="20">
		        	</td>
		        	<td>Time joning</td>
		        	<td>
		        		<input type="Time" size="20">
		        	</td>
		        </tr>

		        <tr>
		        	<td>jon location</td>
		        	<td>
		        		<input type="radio" name="Bangalore">Bangalore
		        	</td>
		        	<td>
		        		<input type="radio" name="Hydrabad">Hydrabad
		        	</td>
		        	<td>
		        		<input type="radio" name="pune">Pune
		        	</td>
		        </tr>
                
                <tr>
                	<td></td>

                	<td>
                		<input type="Submit" value="Submit" class="button">
                	</td>
                	<td>
                		<input type="Reset" value="Reset" class="button">
                	</td>
                </tr>

		   

		</tbody></table>

		


	</form>


</body></html>