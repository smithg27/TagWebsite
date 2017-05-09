<!DOCTYPE html>
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link rel='stylesheet' href='mainsty.css'>
    
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <title>Tag Industrial, LLC</title>
</head>
<body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">Tag Industrial, LLC</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.html">Home <span class="sr-only">(current)</span></a></li>
            <li><a href="contactus.html">Contact Us</a></li>
            <li><a href="line_card.html">Line Card</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$body = "Phone: " . $phone . " email: " . $email . " Message: " . $message;
$email = "fred@tagindustrial.net";
if(empty($name)){
    echo ("No valid name, please try filling out the name portion and try again.");
}
elseif(empty($email)){
    echo ("No valid email, please try filling out the name portion and try again.");
}
elseif(empty($phone)){
    echo ("No valid phone number, please try filling out the name portion and try again.");
}
elseif(empty($subject)){
    echo ("No valid subject, please try filling out the name portion and try again.");
}
elseif(empty($message)){
    echo ("No valid message, please try filling out the name portion and try again.");
}
else {
    if(mail($email, $subject, $body, $email)) {
        echo("Thanks for contacting us!");
    }
    else {
        echo("It seems we ran into an error. Try emailing us directly at fred@tagindustrial.net .");
    }
}
?>
</body>
</html>