<section class="site-section" id="blog-section">
   <div class="row justify-content-center mb-5 blogHeader">
      <div class="col-md-8 text-center">
         <h2 class="text-black h1 site-section-heading text-center">Blog</h2>
      </div>
   </div>
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <ul class="portfolio__filter">
               <li data-filter="*" class="active mixitup-control-active">Todos</li>
               <li data-filter=".particulares">Particulares</li>
               <li data-filter=".colaboraciones" class="">Colaboraciones</li>
               <li data-filter=".laborales">Laborales</li>
            </ul>
         </div>
      </div>
      <div class="row">
         <?php foreach($blogList as $item){ ?>
         <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
               <a href="<?php echo $item["link"]; ?>"><img src="<?php echo $item["imagen"]; ?>" alt="Image" class="img-fluid"></a>
               <h2 class="font-size-regular"><a href="<?php echo $item["link"]; ?>"><?php echo $item["title"]; ?></a></h2>
               <div class="meta mb-4">
                  <?php echo $item["date"]; ?><span class="mx-2">&bullet;</span> 
                  <a href="#"><?php echo $item["categoria"]; ?></a>
               </div>
               <p><?php echo custom_echo(strip_tags($item["articulo"]),80); ?></p>
               <p><a href="<?php echo $item["link"]; ?>">Continuar Leyendo...</a></p>
            </div>
         </div>
         <?php } ?>
      </div>
   </div>
</section>