<?php
    if(isset($_POST['submit'])){
        session_start();

        $_SESSION['name'] = htmlentities($_POST['name']);
        $_SESSION['email'] = htmlentities($_POST['email']);

        header('location: page2.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Sessions</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/minty/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	      <div class="form-group">
		      <label>Name</label>
		      <input type="text" name="name" class="form-control">
	      </div>
	      <div class="form-group">
	      	<label>Email</label>
	      	<input type="text" name="email" class="form-control">
	      </div>
	      <div class="form-group">
	      	<label>Message</label>
	      	<textarea name="message" class="form-control"></textarea>
	      </div>
	      <br>
	      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</body>
</html>