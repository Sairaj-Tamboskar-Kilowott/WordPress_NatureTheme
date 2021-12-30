<div class="abc">
    <?php get_header();?>

    <div class="center">
        <p class="type">we all love </p>
        <p class="word">nature </p>
        <p class="text">
            Look deep into nature, and you will<br>
            understand everything better
        </p>
    </div>
    <div class="button">
        <button type="button" class="btn btn-warning">Get started</button>
    </div>
</div>

<div class="title">
    <h1>
        Our Services
    </h1>
</div>

<div class="card-deck">
    <div class="card">
        <img class="card-img-top" src="http://localhost/wordpress/wp-content/uploads/2021/12/service-1.jpg"
            alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Web Design</h5>
            <p class="card-text">Focus on how you can help and benefit your user. Use simple words so that you don't
                confuse people.</p>

        </div>
    </div>
    <div class="card">
        <img class="card-img-top" src="http://localhost/wordpress/wp-content/uploads/2021/12/service-2.jpg"
            alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Graphic Design</h5>
            <p class="card-text">Focus on how you can help and benefit your user. Use simple words so that you don't
                confuse people..</p>

        </div>
    </div>
    <div class="card">
        <img class="card-img-top" src="http://localhost/wordpress/wp-content/uploads/2021/12/service-3.jpg"
            alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Content Creation</h5>
            <p class="card-text">Focus on how you can help and benefit your user. Use simple words so that you don't
                confuse people.</p>

        </div>
    </div>
</div>



<!-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block" src="http://localhost/wordpress/wp-content/uploads/2021/12/quotes.jpg" alt="First slide">
      <p id="testimony">“Original and with an innate understanding of their customer’s needs, the team at Love Nature are always a pleasure to work with.”</p>
      <img class="d-block" src="http://localhost/wordpress/wp-content/uploads/2021/12/avatar_on_home.png" alt="First slide">
      <p id="Jane"> Jane Miller</p>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> -->


<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <?php while (have_rows('testimonial') ): the_row(); ?>
        <div class="carousel-item <?php if ( get_row_index() == 1 ) echo 'active'; ?>">
            <?php
            $image = get_sub_field('profilepic');
            
            ?>
            <img src="http://localhost/wordpress/wp-content/uploads/2021/12/quotes.jpg" alt="qlogo" id="quote"
                width="50px" height="50px">
            <p><?php the_sub_field('content'); ?> </p>
            <img class="d-block" src="<?php echo $image; ?>">
            <p id="authortext"> <?php the_sub_field('author'); ?> </p>
        </div>
        <?php endwhile; ?>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="sr-only">Next</span>
        <span class="carousel-control-next-icon" aria-hidden="true"></span>

    </a>
</div>







<div class="cont">
    <div class="container">
        <div class="row">

            <div class="col-md-7">

                <div class="paragraph">

                    <p id="aboutus">ABOUT US</p>
                    <p id="autext">Tell website visitors who you are and why they should choose your business.</p>
                    <p id="big">Because when a visitor first lands on your website, you’re a stranger to them. They
                        have to get to know you in order to want to read your blog posts, subscribe to your email
                        newsletter, or buy what you’re selling.</p>


                    <div class="findb"> <button type="button" class="btn btn-outline-secondary">Find out
                            more</button> </div>
                </div>
            </div>

            <div class="col-md-5">
                <img src="http://localhost/wordpress/wp-content/uploads/2021/12/leaf.jpg" alt="">
            </div>
        </div>
    </div>
</div>




<?php get_footer();?>