<?php
    $name = $email = $phone = $gender = "";
    $errmsg = empty($_POST["gender"]) ? "*Please fill all fields" : "";

    if(isset($_POST["submit"])  && isset($_POST["gender"]) ) {
        // get form data
        $name = htmlentities($_POST['name']);
        $email = htmlentities($_POST['email']);
        $phone = htmlentities($_POST['phone']);
        $gender = ($_POST['gender']);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-FORM</title>
</head>
<body>
    <h3>Registration Form</h3>
    <p><?= $errmsg; ?></p>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">

        <div>
            <label for="name">Name: </label>
            <input type="text" name="name" id="name" value="<?= $name?>" required>
        </div>

        <div>
            <label for="email">Email: </label>
            <input type="email" name="email" id="email" value="<?= $email?>" required>
        </div>

        <div>
            <label for="phone">Phone no: </label>
            <input type="tel" name="phone" id="phone" value="<?= $phone?>" required>
        </div>

        <div>
            <label for="gender">Gender: </label>
            <input type="radio" name="gender" id="gender" value="male" <?php if(isset($gender) && $gender== "male") echo "checked"; ?> >Male
            <input type="radio" name="gender" id="gender" value="female" <?php if(isset($gender) && $gender== "female") echo "checked"; ?> >Female
            <input type="radio" name="gender" id="gender" value="others" <?php if(isset($gender) && $gender== "others") echo "checked"; ?> >Others
        </div>

        <input type="submit" name="submit" value="Submit" >
    </form>
    <br>
    <hr>
    <h3>Registration Data</h3>
    <p>User's Name: <?= $name;?></p>
    <p>User's Email: <?= $email;?></p>
    <p>User's Phone-No: <?= $phone;?></p>
    <p>User's Gender: <?= $gender;?></p>

</body>
</html>