<?php
    $fname = $_POST['fname'];
    $country = $_POST['country'];
    $gender = $_POST['gender'];
    $about = $_POST['about'];
    $dob = $_POST['dob'];
    $theme = $_POST['theme'];

    if(isset($_POST['submit']))
    {
        $pic = $_FILES['pic']['name'];
        $pic_loc = $_FILES['pic']['tmp_name'];
        $folder="images/";
        if(move_uploaded_file($pic_loc,$folder.$pic) && $theme == 'Theme A')
        {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Eventers</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="css/creative.min.css" rel="stylesheet">
</head>

<body id="page-top">
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Eventers</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#page-top">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#profile">Profile</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#story">Story</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#eventdetails">Event Details</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#keypeople">Key People</a>
                    </li>
                    <li>
                        <a href="home.html">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">Welcome <?php echo $fname; ?></h1>
                <hr>
                <p>Your Favorite App for Event Registration</p>
                <a href="#profile" class="btn btn-primary btn-xl page-scroll">Profile</a>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="profile">
        <div class="container">
            <div class="row">
                <div class="text-center">
                    <h2 class="section-heading">Profile</h2>
                    <hr class="light">
                    <h3>Full Name: <?php echo $fname; ?></h3>
                    <center><img class="img-responsive" src="images/<?php echo $_FILES['pic']['name']; ?>"></center>
                    <br>
                    <p class="text-faded">
                        This is your profile...This is your profile...This is your profile...This is your profile...This is your profile...This is your profile...This is your profile...This is your profile...This is your profile...This is your profile...This is your profile...This is your profile...This is your profile...This is your profile...This is your profile...This is your profile...This is your profile...This is your profile...This is your profile...This is your profile...This is your profile...This is your profile...This is your profile...This is your profile...This is your profile...This is your profile...This is your profile...
                    </p>
                    <a href="#story" class="page-scroll btn btn-default btn-xl sr-button">Story</a>
                </div>
            </div>
        </div>
    </section>

    <section id="story">
        <div class="container">
            <div class="row">
                <div class="text-center">
                    <h2 class="section-heading">Story</h2>
                    <hr class="primary">
                    <p class="text-muted">
                        This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...This is a story...
                    </p>
                    <a href="#eventdetails" class="page-scroll btn btn-primary btn-xl sr-button">Event Details</a>
                </div>
            </div>
        </div>
    </section>

    <section id="eventdetails">
        <div class="container-fluid">
            <div class="row">
                <div class="text-center">
                    <h2 class="section-heading">Event Details</h2>
                    <hr class="primary">
                    <p class="text-muted">
                        Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...Here are the event details...
                    </p>
                    <a href="#keypeople" class="page-scroll btn btn-primary btn-xl sr-button">Key People</a>
                </div>
            </div>
        </div>
    </section>

    <section id="keypeople">
        <div class="container-fluid">
            <div class="row">
                <div class="text-center">
                    <h2 class="section-heading">Key People</h2>
                    <hr class="primary">
                    <p class="text-muted">
                        Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...Here are the key people...
                    </p>
                    <a href="#page-top" class="page-scroll btn btn-primary btn-xl sr-button">Back to top</a>
                </div>
            </div>
        </div>
    </section>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="js/creative.min.js"></script>
</body>
</html>

<?php
        }
    }
    else
    {
        header("location:home.html");
    }
?>