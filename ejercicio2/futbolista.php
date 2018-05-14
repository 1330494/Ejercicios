<?php
include_once('utilities.php');
$id = isset( $_GET['id'] ) ? $_GET['id'] : '';
if( !array_key_exists($id, $futbolistas) )
{
  die('No existe dicho futbolista.');
}

?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>UPV Sport Club</title>
    <link rel="stylesheet" href="./css/foundation.css" />
    <script src="./js/vendor/modernizr.js"></script>
  </head>
  <body>
    
    <?php require_once('header.php'); ?>

    <div class="row">
      <div class="large-9 columns">
        <h3>Futbolista</h3>
          <p>Informacion</p>
        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
              <div class="row">
              </div>
              <form method="POST" action="editar-futbolista.php">
                <table>
                <tbody>
                    <tr>
                    <td style="width: 180px;">No. Jugador:</td>
                      <td><input type="number" name="id" required value="<?php echo $futbolistas[$id]['Id'] ?>"></td>
                    </tr>

                    <tr>
                      <td style="width: 180px;">Nombre:</td>
                      <td><input type="text" name="nombre" required value="<?php echo $futbolistas[$id]['Nombre'] ?>"></td>
                    </tr>

                    <tr>
                      <td style="width: 180px;">Posicion:</td>
                      <td><input type="text" name="posicion" required value="<?php echo $futbolistas[$id]['Posicion'] ?>"></td>
                    </tr>

                    <tr>
                      <td style="width: 180px;">carrera:</td>
                      <td><input type="text" name="carrera" required value="<?php echo $futbolistas[$id]['Carrera'] ?>"></td>
                    </tr>

                    <tr>
                      <td style="width: 180px;">Email:</td>
                      <td><input type="email" required name="email" value="<?php echo $futbolistas[$id]['Email'] ?>"></td>
                    </tr>
                  </tbody>
                </table>
                <center><input style="border-radius: 15px;" class="button" type="submit" name="modificar" value="Modificar"></center>
                <input type="hidden" name="last_id" value="<?php echo $futbolistas[$id]['Id'] ?>">
              </form>
            </div>
          </section>
        </div>
      </div>
    </div>
     
    <?php require_once('footer.php'); ?>