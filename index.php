<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
      integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script   src="https://code.jquery.com/jquery-3.6.0.min.js"   
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="   crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
  </head>
  <body>
    <div class="content">
      <h1>Student Management</h1>
      <table id="course_table" class="table table-striped">
        <thead bgcolor="#6cd8fe">
          <tr class="table-primary">
              <th width="30%">ID</th>
              <th width="50%">Course Name</th>
              <th width="30%">Number of Students</th>
              <th scope="col" width="5%">Edit</th>
              <th scope="col" width="5%">Delete</th>
          </tr>
        </thead>
      </table>
      <button type="button" id="add_button" data-toggle="modal" data-target="#userModal" class="btn btn-success">Add Course</button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" 
    crossorigin="anonymous"></script>
  </body>
</html>

<div id="userModal" class="modal fade">
  <div class="modal-dialog">
    <form method="post" id="course_form" enctype="multipart/form-data">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4 class="modal-title">Add Course</h4>
        </div>
        <div class="modal-body">
          <label>Enter Course Name</label>
          <input type="text" name="course" id="course" class="form-control"/><br>
          <label>Enter Number of Students</label>
          <input type="text" name="students" id="students" class="form-control"/><br>
        </div>
        <div class="modal-footer">
          <input type="hidden" name="course_id" id="course_id"/>
          <input type="hidden" name="operation" id="operation"/>
          <input type="submit" name="action" id="action" class="btn btn-primary" value="Add" />
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </form>
  </div>
</div>