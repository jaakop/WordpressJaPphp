<!DOCTYPE html>
<html>
<body>
    <form method="POST">
    Age: <input name="age" type="number" min="1" max="100">
    <input type="submit" value="Submit">
    </form>
    <?php
    if($_POST["age"] != null){
        $age = $_POST["age"];
        if($age <= 13)
            echo "Mitä poitsu?";
        else if($age >=14 && $age<=25)
            echo "Mitä nuorimieas?";
        else if($age >=26 && $age<=56)
            echo "Mies parhaassa iässä";
        else
            echo "c:";
    }?>
</body>
</html>