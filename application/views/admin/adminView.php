<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url();?>public/js/jquery.min.js" ></script>
    <script src="<?php echo base_url();?>public/js/bootstrap.min.js" ></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>public/css/bootstrap.min.css">

    <title>Skwelahan</title>
  </head>
  <body>
    <!-- As a link -->
    <nav class="navbar navbar-light" style="background-color:#00D2D6;">
    <a class="navbar-brand" href="#">Egrade</a>
    <a class="navbar-brand" style="align:right;" href="#">Hello, <?php echo $this->session->userdata('LastName');?>!</a>
    <a class="nav-link" style="align:right;" href="<?php echo base_url('loginController/logout');?>">Log out</a>

    </nav>


        <!-- Button trigger modal -->
        
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Add
        </button>
        
    <br>
    <br>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo base_url('Admin/create')?>">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Section Name</label>
                        <input type="text" class="form-control" name="lastName" aria-describedby="emailHelp" placeholder="Enter last name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Yearlevel</label>
                        <input type="text" class="form-control" name="firstName" aria-describedby="emailHelp" placeholder="Enter first name">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Teachers Name</label>
                        <input type="text" class="form-control" name="teachersName" aria-describedby="emailHelp" placeholder="Enter first name">
                    </div>
                    <button type="submit" class="btn btn-primary" value="save">Submit</button>
                </form>
            </div>
            </div>
        </div>
        </div>


        <table class="table">
            <thead class="thead-dark" style="background-color:#060000;">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Section</th>
                <th scope="col">YeaLvl</th>
                <th scope="col">Teacher</th> 
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($result as $row) {?>
                <tr>
                <th scope="row"><?php echo $row->sec_id; ?></th>
                <td><?php echo $row->sec_name; ?></td>
                <td><?php echo $row->year_lvl; ?></td>
                <td><?php echo $row->teacher_lname; ?></td>
                <td><?php echo $row->date_added; ?></td>
                <td>                 
                </tr>
            </tbody>
        </table>
    </div>

</body>
</html>
<script src="<?php echo base_url();?>public/js/jquery.min.js" ></script>
<script src="<?php echo base_url();?>public/js/bootstrap.min.js" ></script>