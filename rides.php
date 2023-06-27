<?php
// Explore Rides page template

include_once( __DIR__ . '/header.php');

// In case a non-logged in user visits this page
if(!isset($_SESSION['user_id'])) {
	?>
	<div class="rides_logout_msg" style="text-align:center">
	<p> Please sign in to access this page </p>
	<a class="btn-r download-app" href="login.php"> Sign in </a>
</div>
	<?php
	exit();
}

include_once(__DIR__ . '/db-connect.php');

$rides = $firebase->getReference('NewRideDetails')->getValue();

// get booked rides
$booked_rides = $firebase->getReference('BookedRides')->getValue();

foreach ($booked_rides as $key => $b_ride) {
	if(isset($b_ride['userid']) && ($b_ride['userid'] != $_SESSION['user_id']) ) {
		unset($booked_rides[$key]);
	}
}

$pickuppoint = array_column($booked_rides, 'pickuppoint');
$dropoffpoint = array_column($booked_rides, 'dropoffpoint');
$date = array_column($booked_rides, 'date');
// $user_id = array_column($booked_rides, 'userid');
$my_rides = array_map(null,$pickuppoint, $dropoffpoint, $date);


?>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

<div class="sec-1 rides_table_wrap">
	<div class="title">
		<h2> All Rides </h2>
		<p> To book a ride, please use our app </p>
	</div>
	<br>
<table id="rides_table" class="display">
	<thead>
		<tr>
			<th> Car </th>
			<th> Charge/km </th>
			<th> From </th>
			<th> To </th>
			<th> Persons </th>
			<th> Checkpoint </th>
			<th> Date </th>
			<th> time </th>
			<th> Posted by </th>
			<th> Vehicle No. </th>
		</tr>
	</thead>
	<tbody>
		<?php
		foreach ($rides as $ride) {
			if(!empty ($ride) ) {
				$ride_subarray = array( $ride['pickuppoint'], $ride['dropoffpoint'], $ride['date'] );
				// print_r($ride_subarray);
				if(!in_array($ride_subarray, $my_rides)) {
				$customer_name 	= $firebase->getReference('Users/'.$ride['userid'].'/customername')->getValue();
				?>
				<tr>
					<td> <?php echo $ride['carmodel']; ?></td>
					<td> <?php echo $ride['chargeperkm']; ?></td>
					<td> <?php echo $ride['pickuppoint']; ?></td>
					<td> <?php echo $ride['dropoffpoint']; ?></td>
					<td> <?php echo $ride['numberofpersons']; ?></td>
					<td> <?php echo $ride['checkpoint']; ?></td>
					<td> <?php echo $ride['date']; ?></td>
					<td> <?php echo $ride['time']; ?></td>
					<td> <?php echo $customer_name; ?></td>
					<td> <?php echo $ride['vehiclenumber']; ?></td>
				</tr>
				<?php
			}}
		}
		?>
	</tbody>
</table>
</div>

<script type="text/javascript">
	// let table = new DataTable('#rides_table');
	jQuery(document).ready(function () {
	    jQuery('#rides_table').DataTable({
	        initComplete: function () {
	            this.api()
	                .columns([2,3,6])
	                .every(function () {
	                    var column = this;
	                    var select = $('<select><option value="">Select</option></select>')
	                        .appendTo($(column.header()))
	                        .on('change', function () {
	                            var val = $.fn.dataTable.util.escapeRegex($(this).val());
	 
	                            column.search(val ? '^' + val + '$' : '', true, false).draw();
	                        });
	 
	                    column
	                        .data()
	                        .unique()
	                        .sort()
	                        .each(function (d, j) {
	                            select.append('<option value="' + d + '">' + d + '</option>');
	                        });
	                });
	        },
	    });
	});
</script>

