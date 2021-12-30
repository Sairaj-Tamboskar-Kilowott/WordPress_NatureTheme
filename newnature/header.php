<!DOCTYPE html>
<html>

<head>
    <?php wp_head();?>
    <!-- 
        <link href="bootstrap.min.css" rel="stylesheet"> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>


</head>




<body>

    <!-- <div class="rem">
<div class="container" id="paddingtop">
  <div class="row">
    <div class="col-lg-6">
      <img src="http://localhost/wordpress/wp-content/uploads/2021/12/Capture-removebg-preview.png" width="86" height="72" alt="">
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
    <div class="col-lg-1">
    <button type="secondory-light" class="btn">202-555-0188</button>
    </div>
  </div>
</div>
</div> -->




    <div class="row">
        <div class="col-md-2">
            <img src="http://localhost/wordpress/wp-content/uploads/2021/12/Capture-removebg-preview.png" width="86"
                height="72" alt="">
        </div>
        <div class="col-md-8" id="dog">
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu','menu_class'=> 'nav justify-content-end','container_class'=>'menubar') ); 
 ?>
        </div>
        <div class="col-md-2" id="number">
            <button type="button" class="btn" id="phone">202-555-0188</button>
        </div>
    </div>