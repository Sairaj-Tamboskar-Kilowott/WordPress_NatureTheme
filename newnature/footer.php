<div class="midfoot">
    <p class="text2">QUESTIONS? </p>
    <p class="text3">Whether you’re curious about features, a free trial, or even press, <br> we’re here to answer any
        questions. </p>
    <div class="lastbut">
        <button type="button" class="btn btn-warning">Let's Talk Now</button>
    </div>
</div>





<!-- <div class="foot">

 <div class="container" id="paddingbot">

  <div class="row">
    
  <div class="col-lg-6">
      <img src="" width="86" height="72" alt="">
  </div>
    
 <div class="col-lg-5">
    <ul class="nav">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" style="color:white">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:white">About</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:white">Services</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:white">Contact</a>
  </li>
  </ul>
 </div>

</div>

</div>

</div> -->




<!-- <div class="foot">
<div class="container" id="paddingtop">
  <div class="row">
    <div class="col-lg-6">
      <img src="" width="86" height="72" alt="">
    </div>
    <div class="col-lg-5">
    <ul class="nav">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" >Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" >About</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" >Services</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" >Contact</a>
  </li>
</ul>
    </div>
    <div class="col-lg-1">
    <button type="secondory-light" class="btn">202-555-0188</button>
    </div>
  </div>
</div>
</div> -->

<!-- <footer>
  <div class="lastfoot">
  <div class="container-fluid" id="myfoot">
      <div class="row">
          
          <div class="d-flex justify-content-center"  id="one">
          <ul class="nav">
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" style="color:#536932">Home</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" style="color:#536932">About</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" style="color:#536932">Services</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" style="color:#536932">Contact</a>
          </li>
          </ul>
  
 
          </div>

          <div class="d-flex justify-content-center" id="two">
          <img id="green-leaf-logo" src="http://localhost/wordpress/wp-content/uploads/2021/12/logo-green.jpg" width="86" height="72" alt="">

          </div>

          <div class="d-flex justify-content-center" id="three">
              <p class="note" >Love Nature by Tyler Moore</p>

          </div>

    
      </div>

   </div> 
  </div>
  

</footer> -->





<footer>
    <div class="row">

        <div class="col-md-6">
            <?php wp_nav_menu( array( 'theme_location' => 'extra-menu','menu_class'=> 'nav justify-content-end','container_class'=>'menubar') ); 
 ?>
        </div>

        <div class="col-md-2">
            <img src="http://localhost/wordpress/wp-content/uploads/2021/12/logo-green.jpg" width="86" height="72"
                alt="">
        </div>

        <div class="col-md-4">
            <p>Love Nature by Tyler Moore</p>
        </div>
    </div>
</footer>

<?php wp_footer();?>


</body>

</html>