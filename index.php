<?php
// C:\xampp\htdocs\carpool\vendor\kreait\firebase-php\src\Firebase\Factory.php
// mayuresh
// before
// protected static string $databaseUriPattern = 'https://%s.firebaseio.com';
// after
// protected static string $databaseUriPattern = 'https://%s-default-rtdb.firebaseio.com';

// https://m-softtech.in/index.php/2022/03/10/how-to-create-carpool-website-using-html-css/

?>

<?php

$reference = $firebase->getReference('Users');
$data = $reference->getChildKeys();

echo '<pre>';
// print_r($firebase);
echo '</pre>';
// Kreait\Firebase\Database

// return;

        echo '<pre>';

// UserRecord 

$rides = $firebase->getReference('NewRideDetails')->orderByChild('userid')->equalTo($_SESSION['user_id'])->getValue();

$booked_rides = $firebase->getReference('BookedRides')->getValue();
$dropoffpoint = array_column($booked_rides, 'dropoffpoint');
$pickuppoint = array_column($booked_rides, 'pickuppoint');
$date = array_column($booked_rides, 'date');
$user_id = array_column($booked_rides, 'userid');
$my_rides = array_map(null,$dropoffpoint, $pickuppoint, $date, $user_id);

print_r($my_rides);
echo '</pre>';