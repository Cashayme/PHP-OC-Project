<?php ob_start(); ?>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0 text-dark">Starter Page</h1>
              <a href="#" class="btn btn-primary mt-2"><i class="fas fa-plus-square mr-2"></i> Créer un nouvel article</a>
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 d-flex flex-wrap">

            <?php
            while ($data = $posts->fetch()) 
            {
            ?>
            <div class="card">
              <div class="card-header">
                <h5 class="m-0">Featured</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Special title treatment</h6>

                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary"><i class="far fa-edit"></i> Editer</a>
                <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i> Supprimer</a>
              </div>
            </div>
            <?php
            }   
            ?>

              </div>
            </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php $content = ob_get_clean(); ?>

<?php require('templateAdmin.php'); ?>
