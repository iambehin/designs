<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Contact Behin</title>

<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">
<style type="text/css">
.center  {
    text-align: center;
}

.center {
    display:inline-block;
    float: none;
}
</style>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>
<body>
<div class="container center">
  <nav class="navbar navbar-default">
    <div class="container-fluid"> 
      <!-- Brand and toggle get grouped for better mobile display -->
      <p><img src="BDLogoFrosty.png" class="img-rounded img-responsive" alt="Placeholder image"></p>
      <div class="navbar-header">
<!-- Search box removed for the time being:
<form class="navbar-form navbar-left" role="search">
</form>-->
</div>
      <div role="tabpanel">
<div id="tabContent1" class="tab-content">
          <div role="tabpanel" class="tab-pane fade in active" id="home1">
<div class="container-fluid">
  <h1 class="text-center">Thank You</h1>
  <div class="col-md-6 col-md-offset-3">Here's the data we received:
	<br>
	<?php
	if (@$_POST[submit])
	{
		$email=$_POST["email"];
		$comment=$_POST["comment"];
		$purpose=$_POST["purpose"];
		$requirements=$_POST["requirements"];
		$contact=$_POST["contact"];
		
		$msg= "Email:$email<br>Comment:$comment<br>Purpose:#purpose<br>Requirements:$requirements<br>Contact:$contact<br>";
		
		echo $msg.		
			"\n<hr>Sending email...\n<br>";
		$result =mail("behindesigns@gmail.com","New Comment",$msg,"From: $email\n");
		
		if(!$result)
			 echo "Error";
		else 
			echo "Successfully sent.\n<br>We appreciate your communication and will respond within 48 hours.";
		
	}
	else
		echo "ERROR: no POST submitted plz email a screenshot to behindesigns@gmail.com";
			
			
	?>
  </div>
            </div>
          </div>
<!--         
		 <div role="tabpanel" class="tab-pane fade" id="paneTwo1">
            <p>Benjamin Davis was born in North Carolina in the 80s.<br>
            </p>
            <p>He began designing web pages in 2006.</p>
            <p>He currently holds an Associate's Degree in Web Design from Virginia Western. </p>
            <p>He is also the author of Dalaroth:
            <a href="http://dalaroth.awardspace.com" target="_NEW"><button type="button" class="btn btn-info">Dalaroth</button></a></p>
            <p>His personal blog is called Behin Live:  <a href="http://behin.atwebpages.com" target="_NEW"><button type="button" class="btn btn-info">Behin Live</button></a></p>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="tabDropDownOne1">
            <p>Behin can be reached by email via the following form: </p>
<div>
              <div class="input-group input-group-lg"> </div>
              <div class="input-group input-group-lg">
                <form id="form1" name="form1" method="post">
                  Content for form Goes Here
                
                <input type="text" class="form-control" placeholder="Your Email Here" id="email">
                <span class="input-group-addon">user@example.com</span></div>
              <div class="input-group input-group-lg">
<div class="form-group">
  <label for="comment">Comment:</label>
  <textarea class="form-control" rows="5" id="comment"></textarea>
</div>
</div>
            </div>
<input type="submit" name="submit" id="submit" value="Submit">
          </div>
          </form>
          <div role="tabpanel" class="tab-pane fade" id="tabDropDownTwo1">
            <div class="row">
<p>In order to request a quote from Behin Designs we need some basic information first.</p>

<div class="radio">
  <label><input type="radio" name="optradio">
    Personal</label>
</div>
<div class="radio">
  <label><input type="radio" name="optradio">
    Business</label>
</div>
<div class="radio disabled">
  <label><input type="radio" name="optradio" disabled>
    Developer</label>
</div>
              <!-- /.col-lg-6 --><!--
              <div class="col-lg-6">
                <div class="input-group"><span class="label label-primary">Primary purpose for site:</span><span class="input-group-addon"> </span>
                  <input type="text" class="form-control" placeholder="What is the primary purpose for your site?">
                </div>
                <!-- /input-group --><!--
              </div>
              <div class="col-lg-6"><span class="label label-info">Requirements:</span>
                <div class="input-group"><span class="input-group-addon">
                  </span>
                  <input type="text" class="form-control" placeholder="Any specific requirements such as mobile friendly or forums?">
                  <button type="button" class="btn btn-success">Submit</button>
                </div>
                <!-- /input-group -->
              </div>
              <!-- /.col-lg-6 -->
            </div>
          </div>
        </div>
      </div>
<!-- Collect the nav links, forms, and other content for toggling -->      <!-- /.navbar-collapse --> 
    </div>
    <!-- /.container-fluid --> 
  </nav>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-6 col-md-offset-3"><span class="col-sm-4 text-justify"></span>    </div>
    <!-- <ol class="breadcrumb">
      <li><a href="index.html#">Home</a>      </li>
      <li></li>
<a href="index.html#tabDropDownOne1" tabindex="-1" data-toggle="tab">Contact</a>
    </ol>
	-->
<div class="row">
      <div class="text-center col-md-6 col-md-offset-3">
        <h4>Farewell!</h4>
        <p><span class="glyphicon glyphicon-copyright-mark" aria-hidden="true"></span> Copyright Benjamin "Behin" Davis &copy; 2016</p>
      · All Rights Reserved · <a href="http://behin.atwebpages.com/"><span aria-hidden="true" dw_span_id="true"> </span>Behin Live</a>      </div>
    </div>
  </div>
  <hr>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.3.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>
</body>
</html>
