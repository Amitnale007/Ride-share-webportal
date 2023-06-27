<?php
// Login page template

// session_start();

// if(isset($_SESSION['user_id'])) {
// 	header('Location: home.php');
// } else {
// 	session_destroy();
// }

include_once( __DIR__ . '/header.php');
?>

<section class="sec-1 login-sec">
	<div class="container">
		<form method="POST" class="login_form">
			<div class="title">
				<h2> Sign In </h2>
			</div>
			<div>
				<p class="login_error"></p>
			</div>
			<div>
			<label for="email">Email:</label>
			<input type="email" name="email" required>
		    </div>
		    <div>
			<label for="password">Password:</label>
			<input type="password" name="password" required>
		  	</div>
		  	<div class="submit">
			<button type="submit" class="btn-r">Login</button>
			</div>
		</form>
	</div>
</section>


<?php
include_once( __DIR__ . '/footer.php');
?>

<?php
// Login functionality
include_once(__DIR__ . '/db-connect.php');

use Kreait\Firebase\Auth;
$auth = $factory->createAuth();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
    $email 		= $_POST['email'];
    $password 	= $_POST['password'];

    try {
        $signInResult	= $auth->signInWithEmailAndPassword($email, $password);
		$user_id 		= $signInResult->data()['localId'];
		$customer_name 	= $firebase->getReference('Users/'.$user_id.'/customername')->getValue();
		session_start();
		$_SESSION['user_id'] 		= $user_id;
		$_SESSION['customer_name'] 	= $customer_name;
        header('Location: home.php');
    // } catch (\Kreait\Firebase\Exception\Auth\InvalidPassword $e) {
    //     $error = '1. Invalid password.';
    // } catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e) {
    //     $error = '2. User not found.';
    } catch (\Exception $e) {
        $error = $e->getMessage();
    }

    if( isset($error) && !empty($error) ) {
    	?>
    	<script type="text/javascript">
    		console.log('error rror ');
    		jQuery('.login_error').text('<?php echo 'An error occurred: '.$error; ?>');
    	</script>
    	<?php
    }
}


?>