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

    <title>Skwelahan(Add Sec)</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">BNHS Portal </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      <li class="nav-item">
        <a class="nav-link" href="#">change password</a>
      </li>
    </ul>
    <span class="navbar-text">
      <a class="nav-link" href="<?php echo base_url('loginController/logout');?>">Log out as<?php echo $this->session->userdata('LastName');?> </a>
    </span>
  </div>
</nav>
<form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
      <a class="btn btn-primary" href="<?php echo base_url('Admin/viewSubject')?>">
        Goto subject
        </a>
        <a class="btn btn-primary" href="<?php echo base_url('Admin/viewAssign')?>">
        Assign a student now
        </a>
        <!-- Button trigger modal -->
        
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Add Section
        </button>
        
    <br>
    <br>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Section</h5>
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
                    <select name="teachers" id="teachers" class="form-control input-lg">
                    <option >Assign Teacher </option>
                    <?php
                    foreach($users as $x)
                    {
                        echo '<option value="'.$x->LastName.','.$x->FirstName. '">'.$x->LastName.','.$x->FirstName. '</option>';
                    }
                        ?>
                    </select>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Added By</label>
                        <input type="text" class="form-control" name="addby" aria-describedby="emailHelp" value="<?php echo $this->session->userdata('LastName');?>">
                    </div>
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
                <th scope="col">AddedBy</th>
                <th scope="col">DateAdded</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($result as $row) {?>
                <tr>
                <th scope="row"><?php echo $row->sec_id; ?></th>
                <td><?php echo $row->sec_name; ?></td>
                <td><?php echo $row->year_lvl; ?></td>
                <td><?php echo $row->teachersName; ?></td>
                <td><?php echo $row->addedBy; ?></td>
                <td><?php echo $row->date_added; ?></td>
                <td> <a class="btn btn-primary" href="">Edit</a>  | 
                   <a  class="btn btn-danger" href="<?php echo base_url('Admin/delete')?>/<?php echo $row->sec_id;?>">Delete</a> </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</body>
</html>