<?php
/*
  Template Name: 99 - Privacy Policy
*/
  get_header();
  while(have_posts()) {
    the_post();
?>
<main role="main">
  <section id="introduction">
    <div class="container">
      <div class="row">
        <h3 class="col-12 title">Privacy Policy</h3>

      </div><!--row-->
    </div><!--container-->
  </section><!--#introduction-->




  <section id="privacy-policy">
    <div class="container">
      <div class="row">

        <div class="col-12">
          <?php the_content(); ?>
        </div>

      </div><!--row-->
    </div><!--container-->
  </section><!--#privacy-policy-->



</main><!--main-->



<?php
  }


get_footer();


?>
