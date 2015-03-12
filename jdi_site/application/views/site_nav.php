<body>
  <div class="container-fluid">
    <!-- I would really prefer this side bar fixed but am having issues making it work with a fluid design -->
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
                    <img class="collapse-logo" src="<?php echo base_url();?>img/logo.png">
                </div>
                
                <div class="collapse navbar-collapse">
                  <ul class="nav nav-stacked">
                    <div id="logininfo" class="row">
                      <div style="float:left;">
                        <img width="45px" src="<?php echo base_url();?>img/guest.png">
                      </div>
                      <div style="float:left; color:#fff; font-family: font-family: 'Raleway', sans-serif;">
                        <p style="font-size: 17px; margin:0px;">Guest</p>
                        <p style="margin:0px;">Not Logged In</p>
                      </div>
                    </div>
                    </ul>
                    <ul class="nav nav-stacked">
                      <h5 class="nav-headers">NAVIGATION</h5>
                        <li><a <?php if($activelink == "home"){echo 'class="activenav"';} ?> href="<?php echo base_url();?>index.php/site/home"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Homepage</a></li>
                        <ul class="nav nav-list">
                        <li style="margin:0px;" data-toggle="collapse" data-target="#test">
                            <a href="#"><span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span> Products</a>
                            <ul class="nav nav-list collapse" id="test">
                                <li style="margin:0px;">
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
                        <h5 class="nav-headers">ACCOUNTS</h5>
                        <li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Register</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span> Login</a></li>
                    </ul>
                        <h5 class="nav-headers">SEARCH</h5>
                        <form role="form"> 
                          <div class="form-group has-feedback has-feedback-left">
                            <input type="text" class="form-control" placeholder="Example..." />
                            <i class="form-control-feedback glyphicon glyphicon-search"></i>
                          </div>
                        </form>
                </div> <!-- /.navbar-collapse -->
            </nav> <!-- /.navbar -->
          </div> <!-- /.sidebar -->
      </div> <!--/.sidenavbarcolumn-->
