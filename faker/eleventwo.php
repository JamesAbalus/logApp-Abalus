<?php
require('vendor/autoload.php');
require('config/config.php');
require('config/db.php');

$faker = Faker\Factory::create();

for ($i = 1; $i <= 20; $i++) {
    $f_cctype = mysqli_real_escape_string($conn, $faker->creditCardType);
    $f_ccnum = mysqli_real_escape_string($conn, $faker->creditCardNumber);
    $f_ccexpdate = mysqli_real_escape_string($conn, $faker->creditCardExpirationDateString);
    $f_uidnum= mysqli_real_escape_string($conn, $faker->unique()->numberBetween($min=1, $max=100));
   
  
    $query = "INSERT INTO carddetail(creditCardType, creditCardNumber, creditCardExpirationDate, userIdNumber) VALUES('$f_cctype', '$f_ccnum', '$f_ccexpdate', '$f_uidnum')";

   
    if (mysqli_query($conn, $query)) {
        echo "Succesfully inserted new data";
       
    } else {
        echo "insert data unsucessful";
        echo 'ERROR: ' . mysqli_error($conn);
    }
}

?>