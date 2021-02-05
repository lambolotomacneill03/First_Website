<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>LavaLust CRUD</title>
  </head>
  <body>
    <div class="container">
      <div class="row mt-3">
        <div class="col-sm-8 mx-auto">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">LavaLUST CRUD</h5>
                <table class="table table-striped">
                  <tr>
                    <th>Student ID</th>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Sex</th>
                    <th>Address</th>
                    <th>Action</th>
                  </tr>
                  <?php foreach($data as $datum): ?>
                  <tr>
                    <td><?=$datum['stud_id'];?></td>
                     <td><?=$datum['last_name'];?></td>
                      <td><?=$datum['first_name'];?></td>
                       <td><?=$datum['middle_name'];?></td>
                       <td><?=$datum['sex'];?></td>
                        <td><?=$datum['address'];?></td>
                        <td>
                        <a href="<?=site_url('delete_data/'.$datum['stud_id'].'');?>">DELETE</a>
                        <a href="<?=site_url('edit/'.$datum['stud_id'].'');?>">UPDATE</a>
                       </td>
                  </tr>
                  <?php endforeach; ?>
                </table>
                <?php alert_message('status'); ?>
                <form action="<?=site_url('show_data');?>" method="post">
                  <label>Last Name</label>
                  <input type="text" name="last_name" class="form-control" required>
                  <label>First Name</label>
                  <input type="text" name="first_name" class="form-control" required>
                  <label>Middle Name</label>
                  <input type="text" name="middle_name" class="form-control" required>
                  <label>Sex</label>
                  <select name="sex" class="form-control">
                    <option value="male">MALE</option>
                    <option value="female">FEMALE</option>
                  </select>
                  <label>Address</label>
                  <input type="text" name="address" class="form-control" required>
                  <button type="submit" class="btn btn-primary mt-2">SAVE</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>