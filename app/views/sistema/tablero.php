<?php Template::load('sistema/head.php');?>
<body>

<div class="wrapper">
   <?php Template::load('sistema/nav.php');?>

   <div class="sidebar" data-color="<?=TEMPLATEFX?>" >
      <?php Template::load('sistema/menu.php');?>
   </div>

   <div class="main-panel">

      <div class="content">
         <div class="container-fluid">
            <div class="row">
               <!-- total de clientes -->
               <!-- <div class="col-lg-3 col-sm-6">
                  <div class="card card-stats">
                     <div class="content">
                        <div class="row">
                           <div class="col-xs-3">
                              <div class="icon-big text-center">
                                 <i class="pe-7s-users text-info"></i>
                              </div>
                           </div>
                           <div class="col-xs-9">
                              <div class="numbers">
                                 <p class="nomarginbutton">Total de clientes</p> 
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div> -->
               
            </div>

              
         </div>
      </div>

   </div>
</div>


<button class="btn btn-default btn-block" id="fer" onclick="showNotification('top','center')">Top Right</button>
</body>
<!--   Core JS Files and PerfectScrollbar library inside jquery.ui   -->
<script src="/sistema/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="/sistema/js/jquery-ui.min.js" type="text/javascript"></script>
<script src="/sistema/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/sistema/js/light-bootstrap-dashboard.js"></script>
</html>
