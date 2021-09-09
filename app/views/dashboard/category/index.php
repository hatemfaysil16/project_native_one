<?php require(VIEWS.'dashboard'.DS.'layout'.DS.'header.php')?>

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><a href="<?= URL.'category/add'?>" class="btn btn-primary"> ADD  </a></h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">

        <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Name</th>
                      <th>Update</th>
                      <th style="width: 40px">Delete</th>
                      <th style="width: 40px"><a href="add">add</a></th>

                    </tr>
                  </thead>
                  <tbody>
                  <?php if(!empty($data)) :?>
                    <?php foreach($data as $category): ?>
                    <tr>
                      <td><?= $category['id']; ?></td>
                      <td><?= $category['name']; ?></td>
                      <td>
                      <a href="update/<?= $category['id']; ?>">Update</a>
                      </td>
                      <td><a href="delete/<?= $category['id']; ?>">Delete</a></td>
                      <td><a href="add">add</a></td>

                    </tr>
                    <?php endforeach; ?>
                    <?php endif;?>
                  </tbody>
                </table>
              </div>
  
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php require(VIEWS.'dashboard'.DS.'layout'.DS.'footer.php')?>
