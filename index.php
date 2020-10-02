<!DOCTYPE html>
<?php include 'config/vars.php'; ?>
<html lang="es">
   <head>
      <?php include 'themes/solution4u/templates/head.php'; ?>
   </head>
   <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
       <div class="site-wrap">
           
           <div class="site-mobile-menu site-navbar-target">
               <div class="site-mobile-menu-header">
                   <div class="site-mobile-menu-close mt-3">
                       <span class="icon-close2 js-menu-toggle"></span>
                   </div>
               </div>
               <div class="site-mobile-menu-body"></div>
           </div>
           <header class="site-navbar py-4 bg-white js-sticky-header site-navbar-target">
           <?php include 'themes/solution4u/templates/header.php'; ?>
           </header>
           <?php include 'sections/'.$seccion.'/controller/'.$view.'.php'; ?>
           <?php include 'sections/'.$seccion.'/view/'.$view.'.php'; ?>
           
           <footer class="site-footer">
            <?php include 'themes/solution4u/templates/footer.php'; ?>
           </footer>
           
       </div>
       <?php include 'themes/solution4u/templates/javascript.php'; ?>
   </body>
</html>