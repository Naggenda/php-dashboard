<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
</head>

<body>
    <center>
        <?php
        include 'connect.php';

        $id = $_REQUEST['id'];
        $name =  $_REQUEST['name'];
        $number = $_REQUEST['number'];
        $password =  $_REQUEST['password'];
        $address = $_REQUEST['address'];
        $email = $_REQUEST['email'];

        // Performing insert query execution
        // here our table name is user

        // Attempt create table query execution
        $sql = "CREATE TABLE user(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    fname VARCHAR(30) NOT NULL,
    email VARCHAR(30) NOT NULL,
    lpassword VARCHAR(70) NOT NULL,
    tnumber VARCHAR(30) NOT NULL
)";

if(mysqli_query($conn, $sql)){
    echo "Table created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

        $sql = "INSERT INTO user (fname, email, lpassword, tnumber) VALUES ('$name',
            '$email','$password','$number')";

        if (mysqli_query($conn, $sql)) {
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";

            echo nl2br("\n$name\n $email\n "
                . "$password\n $number");
        } else {
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>