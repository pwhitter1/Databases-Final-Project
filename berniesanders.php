<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bernie Sanders</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/portfolio-item.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="year.html">Year</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Portfolio Item Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Bernie Sanders</h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">

            <!--<div class="col-md-8">-->
                <!--<img class="img-responsive"--> 
			<img src="https://upload.wikimedia.org/wikipedia/commons/d/de/Bernie_Sanders.jpg" style="height: 400px" alt="">
			<img src="RepresentativeGraphs/BernieSanders/BernieSandersTweet.png" style="height: 225px" hspace="35" alt="">
			<!--</div>-->
		
            <!--<div class="col-md-4">

		</div>-->
		
            <!--<div class="col-md-2">-->
	            <div class="col-lg-12">
	                <h3 class="page-header">Primaries Won by State (as of April 5) </h3>
	            </div>
			
		    <img src="images/BernieSandersPrimary.jpg" style="width: 500px" hspace="120" alt="">
           <!--</div>-->
           
	     
	      <div class="col-md-4">
                <p>
                    <?php

                    $servername = "localhost";
                    $username = "ENTER USERNAME HERE";
                    $password = "ENTER PASSWORD HERE";

                    $conn = mysqli_connect ($servername, $username, $password);

                    // Check connection
                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }

                    mysqli_query($conn, "use ENTER USERNAME HERE");

                    $result = mysqli_query ($conn, "select stateName from CurrentPrimaryData where winnerName='Bernie Sanders' order by stateName;");
			
 		    echo "<table border='1' style='width:100%'>";
	   	    echo "<tr><td>State Name</td><td>Electoral Votes</td><td>Swing State?</td></tr>";
                    while($row = mysqli_fetch_array ($result)){
                        $stateName = $row['stateName'];
                        echo "<tr><td>$stateName</td>";
			$result2 = mysqli_query ($conn, "select electoralVotes, swing from State where stateName='$stateName';");
			$row2 = mysqli_fetch_array($result2);
			$ev = $row2['electoralVotes'];
			$sw = $row2['swing'];
			echo "<td>$ev</td><td>$sw</td></tr>";
                    }

		    echo "</table>";

                    ?>
                </p>
                
            </div>
	</div>
		
        <!-- /.row -->

        <!-- Related Projects Row -->
        <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header">Twitter Sentiment</h3>
            </div>
           <!--<div class="col-sm-3 col-xs-6">
            	<figure>
                    <iframe src="https://docs.google.com/spreadsheets/d/1d36rLuDJk3avYB922TyqH7lzogrTllQd2lZT9RWTCYs/pubhtml?widget=true&amp;headers=false" height = "400" width="400"></iframe>
                 <figcaption><div align="center">Bernie Sanders</div></figcaption>
                </figure>
            </div>-->
	

<?php   

                    $servername = "localhost";
                    $username = "ENTER USERNAME HERE";
                    $password = "ENTER PASSWORD HERE.";

                    $conn = mysqli_connect ($servername, $username, $password);

                    // Check connection
                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }

                    mysqli_query($conn, "ENTER USERNAME HERE");

                    $result = mysqli_query ($conn, "select percentPositive,percentNegative,percentNeutral from Twitter where candidateName='Bernie Sanders';");

                    $row = mysqli_fetch_array ($result);
                    $pos = $row['percentPositive'];
                    $neg = $row['percentNegative'];
                    $neu = $row['percentNeutral'];
                    echo "<h3>&nbsp;&nbsp;&nbsp;&nbsp;Positive: $pos%<br>";
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;Negative: $neg%<br>";
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;Neutral: $neu%</h3><br>";            
        ?>
	     
           
			<img src="RepresentativeGraphs/BernieSanders/twitter_sentiment_raw.png" style="width: 500px" alt="">
			<img src="RepresentativeGraphs/BernieSanders/twitter_sentiment_volume.png" style="width: 500px" hspace="40" alt="">
			
			
            
		     

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
             <!--       <p>Copyright &copy; Your Website 2014</p>-->
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

