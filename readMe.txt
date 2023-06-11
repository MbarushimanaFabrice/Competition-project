	CREATE DATABASE Barbados;
	CREATE TABLE Admin(admin_id int(16) PRIMARY KEY NOT Null AUTO_INCREMENT,Names varchar(222),Email varchar(177),Username varchar(177),Password varchar(177));

    CREATE TABLE Supplier(sup_id int(16) PRIMARY KEY NOT NULL AUTO_INCREMENT,sup_name varchar(188),national_id varchar(188),Address varchar(188),Phone varchar(188), Username varchar(188),Password varchar(188))
 	CREATE TABLE Product(pro_id int(16) PRIMARY KEY NOT null AUTO_INCREMENT,pro_Name varchar(166),Quality varchar(177));
	CREATE TABLE Application(app_id int(16) PRIMARY KEY not null AUTO_INCREMENT,file varchar(177),sup_id int(16), FOREIGN KEY(sup_id) REFERENCES supplier(sup_id),pro_id int(16), FOREIGN KEY(pro_id) REFERENCES product(pro_id));

CREATE TABLE accept_reject(id int PRIMARY KEY NOT null AUTO_INCREMENT,app_id int(16),FOREIGN KEY(app_id) REFERENCES application(app_id),file varchar(1000),sup_id varchar(122),pro_id varchar(133),status varchar(133));





<?php
// Assuming you have established a database connection

// Your SQL query
$query = "SELECT t1.id, t2.name FROM first_table t1
          JOIN second_table t2 ON t1.id = t2.id";

$result = mysqli_query($connection, $query);

if ($result) {
    // Loop through the result set
    while ($row = mysqli_fetch_assoc($result)) {
        $userId = $row['id'];
        $userName = $row['name'];

        // Display the user's name
        echo "User ID: $userId, Name: $userName <br>";
    }

    // Free the result set
    mysqli_free_result($result);
} else {
    // Handle query error
    echo "Error executing the query: " . mysqli_error($connection);
}

// Close the database connection
mysqli_close($connection);
?>
