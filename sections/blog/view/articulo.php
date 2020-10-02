<div class="site-wrap">

   <div class="site-blocks-cover overlay" style="background-image: url(<?php echo $articulo["imagen"]; ?>);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
         <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
               <div class="row justify-content-center mb-4">
                  <div class="col-md-8 text-center">
                     <h1><?php echo $articulo["title"]; ?></h1>
                     <p class="lead"><?php echo $articulo["date"]; ?> <span class="mx-2">&bullet;</span> <?php echo $articulo["categoria"]; ?></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="site-section">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-md-8 blog-content">
               <?php echo $articulo["articulo"];?>
            </div>
         </div>
      </div>
   </div>
   
</div>