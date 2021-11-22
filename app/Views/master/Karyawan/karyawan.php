<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karyawan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/dist/css/adminlte.min.css">
</head>
<body>
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Karyawan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Karyawan</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <form class="col float-right" action="<?php echo base_url(); ?>/KaryawanController/insertKaryawan" method="post">
                    <button class="btn btn-secondary float-right" type="submit"><i class="fa fa-plus"></i> Add New</button>
                </form>
                <div class="col-md-8 offset-md-2">
                    <form action="<?php echo base_url(); ?>/KaryawanController/search">
                        <div class="input-group">
                            <input type="search" name="search" id="search" class="form-control form-control-lg" placeholder="Type your keywords here">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-lg btn-default">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List Karyawan</h3>
              </div>
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Telp</th>
                    <th colspan=3>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                        if (count($data)>0)
                        {
                            foreach ($data as $key=>$value)
                            {
                                echo "<tr>";
                                    echo "<td>$value[id_user]</td>";    
                                    echo "<td>$value[name_user]</td>";    
                                    echo "<td>$value[phone_number_user]</td>";    
                                    echo "<td><form action='/KaryawanController/lihatKaryawan' method='post'><input type='hidden' name='id' value=$value[id_user]><button class='btn btn-default' type='submit'>Lihat</button></form></td>";    
                                    echo "<td><form action='/KaryawanController/updateKaryawan' method='post'><input type='hidden' name='id' value=$value[id_user]><button class='btn btn-default' type='submit'>Edit</button></form></td>";    
                                    echo "<td><button class='btn btn-default' data-toggle='modal' data-target='#modal-default' type='submit'>Delete</button></td>";    
                                echo "</tr>";    
                            }
                        }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Delete Karyawan</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Are You Sure?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
              <button type="button" class="btn btn-danger">Yes</button>
            </div>
          </div>
        </div>
      </div>
</div>
</body>
<!--
<a title="Delete" row-id="1" row-name="X" message="" custom_message="" form_action="http://kee-projects.com/sandbox/product/delete/offset/1/id/1/search/~" style="width:45px;" class="btn mb-5 mr-5 btn-secondary btn-md btn_action">
            <i class="fa fa-remove"></i>
        </a>-->