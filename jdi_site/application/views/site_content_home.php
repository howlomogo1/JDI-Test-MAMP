      <div class="col-md-9 col-sm-9 fillheight">
        <div class="row content-top">
          <img class="logo" src="<?php echo base_url();?>img/logo.png">
        </div>
        <div class="row upperrow">
          <h5 id="content-nav">BLOG / ALL POST</h5>
          <h1 id="content-title"><?php echo $theHeading; ?></h1>
          <h3 id="content-subheader"><?php echo $theParagraph ?></h3>
        </div>
        <div class="row carrowcontainer" style="background-color:#fbfbfb;">
          <div class="carrow">
            <div class="col-md-4 col-sm-4 carcolumn">
              <img id="img1" style="width:100%;" src="<?php echo base_url();?>img/carimgs/car1.jpg">
              <div class="carinfo">
                <h6 id="heading1" class="car-heading">EXAMPLE HEADING</h6>
                <hr />
                <p id="text1" class="car-text">Some text</p>
                <a id="carimglink1" class="carimglink">Image Link</a>
              </div>
            </div>
            <div class="col-md-4 col-sm-4 carcolumn">
              <img id="img2" style="width:100%;" src="<?php echo base_url();?>img/carimgs/car2.jpg">
              <div class="carinfo">
                <h6 id="heading2" class="car-heading">EXAMPLE HEADING</h6>
                <hr />
                <p id="text2" class="car-text">Some text</p>
                <a id="carimglink2" class="carimglink">Image Link</a>
              </div>
            </div>
            <div class="col-md-4 col-sm-4 carcolumn">
              <img id="img3" style="width:100%;" src="<?php echo base_url();?>img/carimgs/car3.jpg">
              <div class="carinfo">
                <h6 id="heading3" class="car-heading">EXAMPLE HEADING</h6>
                <hr />
                <p id="text3" class="car-text">Some text</p>
                <a id="carimglink3" class="carimglink">Image Link</a>
              </div>
            </div>
          </div>
        </div>

        <div class="row lowerrow"></div>
      </div>
  </div>
<!-- Include and start the slideshow -->
<script src="<?php echo base_url();?>js/jdi_slideshow.js"></script>
</body>

</html>