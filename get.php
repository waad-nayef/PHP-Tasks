    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>GET</title>
    </head>

    <body>

        <?php
        $fName = $_GET['firstName'];
        echo "<h2>First Name: $fName </h2><br>";

        $lName = $_GET['lastName'];
        echo "<h2>Last Name: $lName </h2><br>";

        $email = $_GET['email'];
        echo "<h2>Email: $email </h2><br>";

        $gender = $_GET['gender'];
        echo "<h2>Gender: $gender </h2><br>";
        
     // This is intentionally incorrect for learning purposes.
        $password = $_GET['password'];
        echo "<h2>Password: $password</h2><br>";

        // function xyz()
        // {
        //     //super global are accessible from anywhere
        //     echo "Hello, " . $_GET['firstName'] . " " . $_GET['lastName'] . "!";
        // }
        // xyz();

        //get the data from url
        // $birthdate = $_GET['birthdate'];
        // echo "<h2>Birthdate: $birthdate</h2><br>";


        // $age = $_GET['age'];
        // echo "<h2>Age: $age</h2><br>";
        // 
        ?>

    </body>

    </html>