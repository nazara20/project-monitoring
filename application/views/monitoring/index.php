<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="<?= base_url('assets/'); ?>/vendor/css/all.css" rel="stylesheet">

  <title><?= $title; ?></title>
</head>

<body style="background-color: #dbeafe;">



  <div class="container-fluid">

    <div class="text-center">


      <div class="row align-items-start">
        <div class="col">
        </div>
        <div class="col">
          <h1 class="h5 mt-5 mb-3">Project Monitoring</h1>
        </div>
        <div class="col text-end">
          <a href="<?= base_url('monitoring/create'); ?>" class="btn btn-secondary btn-sm mt-5 mb-3 mr-1"><i class="fa fa-plus"></i>&nbsp;&nbsp;Create New Project</a>
        </div>
      </div>
      <?php if ($this->session->flashdata('message')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
         <?= $this->session->flashdata('message'); ?>.
        </div>
      <?php endif; ?>

    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-borderless" style="width: 100%">
                <tr class="bg-light">
                  <th>PROJECT NAME</th>
                  <th>CLIENT</th>
                  <th>PROJECT LEADER</th>
                  <th>START DATE</th>
                  <th>END DATE</th>
                  <th style="width: 200px;">PROGRESS</th>
                  <th>ACTION</th>
                </tr>
                <tr>
                  <?php foreach ($monitoring as $monitor) : ?>
                    <td><?= $monitor['project_name']; ?></td>
                    <td><?= $monitor['client']; ?></td>
                    <td>
                      <div class="row mb-2">
                        <div class="col-lg-2 d-flex">
                          <img src="<?= base_url('assets/img/') . $monitor['image']; ?>" class="rounded-circle mt-2" width="35px" height="35px" />
                        </div>
                        <div class="col-lg">
                          <strong class="col-mb-6"><?= $monitor['project_leader']; ?></strong><br>
                          <small class="text-muted mt-0"><?= $monitor['email']; ?></small>
                        </div>
                      </div>
                    </td>
                    <td><?= date('d M Y', strtotime($monitor['start_date'])); ?></td>
                    <td><?= date('d M Y', strtotime($monitor['end_date'])); ?></td>
                    <td>
                      <div class="progress">
                        <?= ($monitor['progress'] == '100') ? '<div class="progress-bar bg-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"   style=" width: ' . $monitor['progress'] . "%"  . '" >
                          </div>' :
                          '<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: ' . $monitor['progress'] . "%" . '" >
                          </div>' ?>
                      </div>
            </div>
            <small><?= $monitor['progress']; ?>% Complete</small>
            </td>
            <td>
              <a onclick="return confirm('apakah anda yakin?')" href="<?= base_url(); ?>monitoring/hapus/<?= $monitor['id']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
              <a href="<?= base_url(); ?>monitoring/edit/<?= $monitor['id']; ?>" class="btn btn-success btn-sm"><i class="fas fa-pen"></i></a>
            </td>
            </tr>
          <?php endforeach; ?>
          </table>
          </div>
        </div>
      </div>
      <div class="mt-3">
        <div class="col text-end">
          <p class="mb-0">Created by:</p>
          <p><strong>Muhammad Nazar Abdillah</strong></p>
        </div>
      </div>
    </div>
  </div>
  </div>


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script defer src="<?= base_url('assets/'); ?>/vendor/js/all.js"></script>
  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

</body>

</html>