<!DOCTYPE html>
<html>
<body>
<form method="POST">
Your gender: <br>
  <input type="radio" name="gender" value="male"> Male<br>
  <input type="radio" name="gender" value="female"> Female<br>
Age: <input name="age" type="number" min="1" max="100">
<input type="submit" value="Submit">
</form>
<?php
if(isset($_POST["age"]) && isset($_POST["gender"])){
$age = $_POST["age"];
$gender = $_POST["gender"];
if($gender == "male"){
if($age <= 13)
echo "Mitä poitsu?";

else if($age >=14 && $age<=25)
echo "Mitä nuorimieas?";

else if($age >=26 && $age<=56)
echo "Mies parhaassa iässä";}

if($gender == "female"){
if($age <= 13)
echo "Mitä tytttö?";

else if($age >=14 && $age<=25)
echo "Mitä nuorinainen?";

else if($age >=26 && $age<=56)
echo "Nainen parhaassa iässä";
} 
}else
return;?>
</body>
</html>
