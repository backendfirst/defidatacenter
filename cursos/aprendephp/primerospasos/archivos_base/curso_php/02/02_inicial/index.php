<?php
include_once('utilities.php');
$upload = false;
$upload_error = false;
$msg = '';
$msg_error = '';

?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Curso PHP |  Bienvenidos</title>
    <link rel="stylesheet" href="./css/foundation.css" />
    <script src="./js/vendor/modernizr.js"></script>
    <style>
      .file-upload {
        position: relative;
        overflow: hidden;
        margin: 10px; 
      }

      .file-upload input.file-input {
        position: absolute;
        top: 0;
        right: 0;
        margin: 0;
        padding: 0;
        font-size: 20px;
        cursor: pointer;
        opacity: 0;
        filter: alpha(opacity=0); 
      }
    </style>
  </head>
  <body>
    
    <?php require_once('header.php'); ?>

     
    <div class="row">
 
      <div class="large-9 columns">
        <h3>Carga de archivos</h3>
        <div class="section-container tabs" data-section>
          <section class="section">
            <h5 class="title"><a href="#panel1">Seleccione una imagen</a></h5>
            <?php if( $upload ){ ?>
            <div data-alert class="alert-box success radius">
              <?php echo $msg; ?>
              <a href="#" class="close">&times;</a>
            </div>
            <?php } ?>
            <?php if( $upload_error ){ ?>
            <div data-alert class="alert-box alert radius">
              <?php echo $msg_error; ?>
              <a href="#" class="close">&times;</a>
            </div>
            <?php } ?>
            <div class="content" data-slug="panel1">
              <form method="post">
                <div class="row collapse">
                  
                  <div class="large-10 columns">
                    <button class="file-upload">            
                      <input type="file" class="file-input" name="image">Elegir archivo
                    </button>

                  </div>
                </div>
                <button type="submit" class="radius button success ">Cargar</button>
              </form>
            </div>
          </section>
        </div>
      </div>
    

    <?php require_once('footer.php'); ?>