<?php
include_once('utilities.php');
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Curso PHP |  Bienvenidos</title>
    <link rel="stylesheet" href="./css/foundation.css" />
    <script src="./js/vendor/modernizr.js"></script>
  </head>
  <body>
    
    <?php require_once('header.php'); ?>

     
    <div class="row">
 
      <div class="large-9 columns">
        <h3>Manejo de fechas</h3>
          <p>Datos de una fecha</p>
        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
              <div class="row">
              </div>
              <ul class="pricing-table">
                <li class="title">Desglose</li>
                <li class="price">dd/mm/aaaa</li>
                <li class="description">aa</li>
                <li class="bullet-item">días en el mes</li>
                <li class="bullet-item">am o pm</li>
                <li class="bullet-item">formato a 24 hr</li>
              </ul>
            </div>
          </section>
        </div>
      </div>
    

    <?php require_once('footer.php'); ?>