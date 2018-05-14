<?php
include_once('utilities.php');

// Obtenemos el total de los futbolistas si es diferente de null.
if($futbolistas!=null)
  $total_futbolistas = count($futbolistas);
else
  $total_futbolistas = 0; // De lo contrario se asigna 0

if($basquetbolistas!=null)
  $total_basquetbolistas = count($basquetbolistas);
else
  $total_basquetbolistas = 0; // De lo contrario se asigna 0
?>

    <?php require_once('header.php'); ?>

    <div class="row">
      <?php // Seccion para mostrar Futbolistas ?>
      <div class="large-9 columns">
        <h3>Futbolistas</h3>
          <p>Lista</p>
        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
              <div class="row">
              </div>
              <?php if($total_futbolistas!=0){ ?>
              <table>
                <thead>
                  <tr>
                    <th width="200">No. Jugador</th>
                    <th width="250">Nombre</th>
                    <th width="250">Posicion</th>
                    <th width="250">Carrera</th>
                    <th width="250">Email</th>
                    <th width="250">Ver</th>
                    <th width="250">Borrar</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach( $futbolistas as $id => $user ){ ?>
                  <tr>
                    <td><?php echo $user['Id'] ?></td>
                    <td><?php echo $user['Nombre'] ?></td>
                    <td><?php echo $user['Posicion'] ?></td>
                    <td><?php echo $user['Carrera'] ?></td>
                    <td><?php echo $user['Email'] ?></td>
                    <td><a href="./futbolista.php?id=<?php echo $id; ?>" class="button radius tiny secondary">Detalles</a></td>
                    <td><a href="./eliminar-futbolista.php?id=<?php echo $id; ?>" class="button radius tiny alert">Borrar</a></td>
                  </tr>
                  <?php } ?>
                  <tr>
                    <td colspan="4"><b>Total de registros: </b> <?php echo $total_futbolistas; ?></td>
                  </tr>
                </tbody>
              </table>
              <?php }else{ ?>
              No hay registros
              <?php } ?>
            </div>
          </section>
        </div>
      </div>
    </div>

    <div class="row">
      <?php // Seccion para mostrar Basquetbolistas ?>
      <div class="large-9 columns">
        <h3>Basquetbolistas</h3>
          <p>Lista</p>
        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
              <div class="row">
              </div>
              <?php if($total_basquetbolistas!=0){ ?>
              <table>
                <thead>
                  <tr>
                    <th width="200">No. Jugador</th>
                    <th width="250">Nombre</th>
                    <th width="250">Posicion</th>
                    <th width="250">Carrera</th>
                    <th width="250">Email</th>
                    <th width="250">Acción</th>
                    <th width="250">Borrar</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($basquetbolistas as $id => $user){ ?>
                  <tr>
                    <td><?php echo $user['Id'] ?></td>
                    <td><?php echo $user['Nombre'] ?></td>
                    <td><?php echo $user['Posicion'] ?></td>
                    <td><?php echo $user['Carrera'] ?></td>
                    <td><?php echo $user['Email'] ?></td>
                    <td><a href="./basquetbolista.php?id=<?php echo $id; ?>" class="button radius tiny secondary">Detalles</a></td>
                    <td><a href="./eliminar-basquetbolista.php?id=<?php echo $id; ?>" class="button radius tiny alert">Borrar</a></td>
                  </tr>
                  <?php } ?>
                  <tr>
                    <td colspan="4"><b>Total de registros: </b> <?php echo $total_basquetbolistas; ?></td>
                  </tr>
                </tbody>
              </table>
              <?php }else{ ?>
              No hay registros
              <?php } ?>
            </div>
          </section>
        </div>
      </div>
    </div>
    <?php require_once('footer.php'); ?>