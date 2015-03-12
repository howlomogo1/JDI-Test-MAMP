<!DOCTYPE HTML>

<html>
<head>
  <title>JDI Site Test</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/custom.css" rel="stylesheet">
  <script src="js/bootstrap.min.js"></script>
</head>

<body>
  <div class="container-fluid">
    <!-- I would really prefer this side bar fixed btu am having issues making it work with a fluid design -->
    <!-- Dropdown support on the products tab -->
      <div class="col-md-3 col-sm-3 sidenavbarcolumn">
        <div class="sidenavbar">
            <nav class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                
                <div class="collapse navbar-collapse">
                  <ul class="nav nav-stacked">
                    <div id="logininfo" class="row">
                      <div style="float:left;">
                        <img width="45px" src="img/guest.png">
                      </div>
                      <div style="float:left; color:#fff; font-family: font-family: 'Raleway', sans-serif;">
                        <p style="margin:0px;">Guest</p>
                        <p style="margin:0px;">Not Logged In</p>
                      </div>
                    </div>
                    </ul>
                    <ul class="nav nav-stacked">
                      <h5>NAVIGATION</h5>
                        <li class="active"><a href="#"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Homepage</a></li>
                        <ul class="nav nav-list">
                  <li data-toggle="collapse" data-target="#test">
                        <a href="#"><span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span> Products</a>
                      <ul class="nav nav-list collapse" id="test">
                          <li>
                            <a class="navsubitem" href="#">Example Sub Item</a>
                          </li>
                      </ul>
                  </li>
              </ul>
                        <li><a href="#"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> About Us</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Blog</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Knowledgebase</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> Support Forums</a></li>
                    </ul>
                    <ul class="nav nav-stacked">
                        <h5>ACCOUNTS</h5>
                        <li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Register</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span> Login</a></li>
                    </ul>
                        <h5>SEARCH</h5>
                    
                </div><!-- /.navbar-collapse -->
            </nav>
          </div>
      </div><!--/end left column-->
      
      <div class="col-md-9 col-sm-9 someheight">
        <div class="row" style="height:70px; background-color:#4e5050;">
          <img class="logo" src="img/logo.png">
        </div>
        <div class="row upperrow">
          <h5 class="content-nav">BLOG / ALL POST</h5>
          <h1 class="content-title">Example Title</h1>
          <h3 class="content-subheader">An example of a sub heading</h3>
        </div>
        <div class="row carrowcontainer" style="background-color:#fbfbfb;">
          <div class="carrow">
            <div class="col-md-4 col-sm-4 carcolumn">
              <img style="width:100%;" src="img/carimgs/car1.jpg">
              <div class="carinfo">
                <h6 class="car-heading">EXAMPLE HEADING</h6>
                <hr />
                <p class="car-text">Some text, <span class="carnews">Car news</span></p>
              </div>
            </div>
            <div class="col-md-4 col-sm-4 carcolumn">
              <img style="width:100%;" src="img/carimgs/car2.jpg">
              <div class="carinfo">
                <h6 class="car-heading">EXAMPLE HEADING</h6>
                <hr />
                <p class="car-text">Some text, <span class="carnews">Car news</span></p>
              </div>
            </div>
            <div class="col-md-4 col-sm-4 carcolumn">
              <img style="width:100%;" src="img/carimgs/car3.jpg">
              <div class="carinfo">
                <h6 class="car-heading">EXAMPLE HEADING</h6>
                <hr />
                <p class="car-text">Some text, <span class="carnews">Car news</span></p>
              </div>
            </div>
          </div>
        </div>
        <div class="row lowerrow">

        </div>
      </div>
  </div>
</body>

</html>