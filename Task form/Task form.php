<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            
            font-family: 'Poppins', sans-serif;
        }
        div{
          justify-content:center;
          color:white;
          text-align:center;
        }
        form {
          transform:transparent;
            height: 100%;
            display: flex;
          
            align-items: center;
            padding: 10px;
           background:#D6D6D6;
           
        }
        h2::before {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            height: 3px;
            width: 30px;
            border-radius: 5px;
           
        }
        h2{
            font-size: 25px;
            font-weight: 600;
            position: relative;
            color:white;
        }
         
        input  {
          /*  height: 30px;
            width: 50%;*/
            outline: none;
            font-size: 16px;
            border-radius: 35px;
            padding-left: 15px;
            border: 1px solid black;
            border-bottom-width: 2px;
            transition: all 0.3s ease;
            background: ;
        }
        form select {
            height: 57%;
            width:73%;
            border-radius: 35px;
            border: 1px solid black;
            color: none;
            font-size: 18px;
            font-weight: 100;
            letter-spacing: 1px;
            cursor: pointer;
            transition: all 0.3s ease;
          
        }
        textarea {
            height: 40%;
            width:80%;
            border-radius: 30px;
            border: 1px solid black;
            color: none;
            font-size: 15px;
            font-weight: 80;
            letter-spacing: 1px;
          
         transition: all 0.3s ease;
          background: ;
        }
.error {color: #FF0000;
  font-size: 11px;
}
p{
    display:none;

}
h2{
  text-align:center;
}
form{
  width: 100%;
 padding: 20px;
 background-color:none;
margin-left:auto;
margin-right:auto;
box-shadow:0 5px 50px rgba(0,0,0,0.20);
 transform:transparent;
  
 max-width :500%;
 max-height :500%;
 display: flex;
justify-content: center;
align-items: center;
height: 100vh;
margin: 0 auto;
text-align: center;
width: 550px;
}
body{
  background-image: url("images.jpg ");
  
  
}

.button[type="submit"]{
  background: linear-gradient(lightgreen);
  background-color: lightgreen;
 
  padding: 10px 20px;
  border: 20px;
  border-radius: 5px;
  cursor: pointer;
  
}
 
.button:hover {
            background-color: lightgreen;
        }
 
form {
  font-size: 15px;
  font-weight: bold;
  width:50%;
  transform:transparent;

}

.button1[type="reset"]{
background: linear-gradient(lightgreen);
background-color: lightgreen;
padding: 10px 20px;
border: 20px;
border-radius: 5px;cursor: pointer;}
.button1:hover {
 background-color: lightgreen;
  }
  h3{
color:white;
 }
</style>
<body>
<h2>Student Registeration Form</h2>  
        
<div>
<?php
// define variables and set to empty values
$nameErr = $fnameErr= $mnameErr= $numberErr= $genderErr = $bloodErr= $emailErr =$checkErr= $websiteErr = "";
$name =$fname=$mname=$number=$gender= $blood=$email = $comment=$check = $website=$check1= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["fname"])) {
    $fnameErr = "FatherName is required";
  } else {
    $fname = test_input($_POST["fname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$fname)) {
      $fnameErr = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["mname"])) {
    $mnameErr = "Mother Name is required";
  } else {
    $mname = test_input($_POST["mname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$mname)) {
      $mnameErr = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["number"])) {
    $numberErr = "number is required";
  } else {
    $number = test_input($_POST["number"]);
    // check if name only contains letters and whitespace
    if(preg_match('/^[0-9]{10}+$/', $phone)) {
      $numberErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if (empty($_POST["blood"])) {
    $bloodErr = "Blood group is required";
  } else {
    $blood = test_input($_POST["blood"]);
  }
  if (empty($_POST["check"])) {
    $checkErr = "Check is required";
  } else {
    $check = test_input($_POST["check"]);
  }
  if (empty($_POST["check1"])) {
    $check1Err = "Check is required";
  } else {
    $check1 = test_input($_POST["check1"]);
  }


  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email))  {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }    
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
</div>
<p><span class="error">* required field</span></p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> ">  
       
<table>
<tr>
  <td>Name:</td> <td><input type="text" name="name" >
  <span class="error">* <?php echo $nameErr;?></span></td>
 
</tr>
<tr>
<td>Father Name:</td> <td><input type="text" name="fname">
  <span class="error">* <?php echo $fnameErr;?></span></td>
</tr>
<tr>
<td>Mother Name:</td> <td><input type="text" name="mname">
  <span class="error">* <?php echo $mnameErr;?></span></td>
</tr>
<tr>
<td>
  Mobile number:</td> <td><input type="text" number="number">
  <span class="error">* <?php echo $numberErr;?></span></td>
</tr>

<tr>
<td>Gender:</td> <td>
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span></td>
</tr>
<tr>
<td>Blood group:</td>
<td><select name="blood">
  <option> </option>
    <option>A Positive</option>
    <option>A Negative</option>
 
    <option>B Positive</option>
    <option>B Negative</option>
   
    <option>AB Positive</option>
    <option>AB Negative</option>
    <option>AB Unknown</option>
    <option>O Positive</option>
    <option>O Negative</option>
    <option>O Unknown</option>
    <option>Unknown</option>
</select>
<span class="error">* <?php echo $bloodErr;?></span></td>
</tr>
 <tr>
<td>
    E-mail:</td> <td><input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
</td>
</tr>

<tr>
    

<td> Website:</td> <td><input type="text" name="website" style="width:73%">
  <span class="error"><?php echo $websiteErr;?></span></td>
</tr>
<tr>
    <td>Department:</td><td>
<input type="checkbox"  name="check" >BCA
  
  <input type="checkbox" name="check">MCA
 
  <input type="checkbox"  name="check" >B.com
   <span class="error"><?php echo $checkErr;?></span>
 </td>
</tr>
   <!-- <td>course:</td><td>
<input type="checkbox"  name="check1" >HTML
  
  <input type="checkbox" name="check1">JAVA
 
  <input type="checkbox"  name="check1" >PHP
   <span class="error"><?php echo $check1Err;?></span>
 </td>
</tr>-->
</tr>
  <tr>
  <td> Comment:</td>
   <td><textarea name="comment" rows="5" cols="40"></textarea></td>
</tr>
<tr>  <td>
  <!--<input type="submit" name="submit" value="Submit">   </td>  </tr>-->
  <br><br>
  <div class="row" >
				<input type="submit" value="Submit" class="button" >
  
			
				<input type="reset" value="reset" class="button1" >
			</div>

</table>
</form>
</body>
<div >
<?php
echo "<h3>Your Input:</h3>";
echo $name;
echo "<br>";
echo $fname ;
echo "<br>";
echo $mname;
echo "<br>";
echo $number;
echo "<br>";
echo $gender;
echo "<br>";
echo $blood;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $check;
echo "<br>";
?>
</div>
</html>

    
