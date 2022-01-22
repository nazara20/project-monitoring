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
  <div class="container-fluid mt-5">
    <div class="row">
      <div class="col-sm-10 col-md-8 col-lg-9 mx-auto d-table h-100">
        <div class="card">
          <div class="card-header">
            <div class="row align-items-start">
              <div class="col">
              </div>
              <div class="col">
                <h1 class="h5">Project Monitoring</h1>
              </div>
              <div class="col text-end">
                <a href="<?= base_url('monitoring'); ?>" class="btn btn-secondary btn-sm">Back</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-7 mx-auto">
                <div class="alert alert-info" role="alert">
                  Add your project here....
                </div>
                <?php if (validation_errors()) : ?>
                  <div class="alert alert-danger alert-dismissible fade show pb-0" role="alert">
                    <?= validation_errors() ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                <?php endif ?>
                <form action="<?= base_url('monitoring/create') ?>" method="post">
                  <div class="mb-3">
                    <label for="project_name" class="form-label">Project Name</label>
                    <input type="text" class="form-control" name="project_name" id="project_name" value="<?= set_value('project_name') ?>" placeholder="input your project name...">
                  </div>
                  <div class="mb-3">
                    <label for="client" class="form-label">Client</label>
                    <input type="text" class="form-control" name="client" id="client" value="<?= set_value('client') ?>" placeholder="input client name...">
                  </div>
                  <div class="mb-3">
                    <label for="project_leader" class="form-label">Project Leader</label>
                    <input type="text" class="form-control" name="project_leader" id="project_leader" value="<?= set_value('project_leader') ?>" placeholder="input your project leader...">
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" name="email" id="email" value="<?= set_value('email') ?>" placeholder="input your email...">
                  </div>
                  <div class="mb-3">
                    <label for="start_date" class="form-label">Start Date Project</label>
                    <input type="date" class="form-control" name="start_date" id="start_date" value="<?= set_value('start_date') ?>">
                  </div>
                  <div class="mb-3">
                    <label for="end_date" class="form-label">End Date Project</label>
                    <input type="date" class="form-control" name="end_date" id="end_date" value="<?= set_value('end_date') ?>">
                  </div>
                  <label for="progress" class="form-label">Progress</label>
                  <div class="input-group mb-3">

                    <input class="form-control" type="number" value="0" id="progress" name="progress" min="0" max="100" maxlength="3" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength); changeHandler(this)">
                    <div class="input-group-append">
                      <span class="input-group-text">%</span>
                    </div>
                    <small class="text-muted">&nbsp;&nbsp; 0 - 100</small>
                  </div>


                  <div class="text-end">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
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


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script defer src="<?= base_url('assets/'); ?>/vendor/js/all.js"></script>
  <script>
    function changeHandler(val) {
      if (Number(val.value) > 100) {
        val.value = 100
      }
    }
  </script>
  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

</body>

</html>