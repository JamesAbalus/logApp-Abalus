<?php
require('vendor/autoload.php');
require('config/config.php');
require('config/db.php');

$faker = Faker\Factory::create();

for ($i = 1; $i <= 100; $i++) {
    $f_email = mysqli_real_escape_string($conn, $faker->freeEmail);
    $f_lname =mysqli_real_escape_string($conn, $faker->lastName);
    $f_fname = mysqli_real_escape_string($conn, $faker->firstName);
    $f_uname =mysqli_real_escape_string($conn, $faker->userName);
    $f_pass = mysqli_real_escape_string($conn, $faker->password);

  
    $query = "INSERT INTO useraccount(email, lastName, firstName, userName, password) VALUES('$f_email', '$f_lname', '$f_fname', '$f_uname', '$f_pass')";

    if (mysqli_query($conn, $query)) {
        echo "Succesfully inserted new data";
        
    } else {
        echo "insert data unsucessful";
        echo 'ERROR: ' . mysqli_error($conn);
    }
}
