<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud laravel</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    {{-- <link rel="stylesheet" href="./assets/css/bootstrap.min.css"> --}}
</head>
<body>
    <div class="container">
      <div class= "row my-5">
        <div class= "col-md-12">
        <h2>School_Teachers</h2>
      {{-- <a href="subject.php" class= "btn btn-sm btn-dark float-end ml-3">Subjects</a> --}}
      <a href="create.php" class= "btn btn-sm btn-danger float-end ml-3">Create New</a>
    <table class="table mt-5 table-bordered table-hover">
  <thead>
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">CNIC</th>
      <th scope="col">Designation</th>
      <th scope="col">Salary</th>
      <th scope="col">Joining_Date</th>
      <th scope="col">Gender</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
   </tbody>
</table>
        </div>
      </div>
    </div>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    {{-- <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/jquery.min.js"></script> --}}
</body>
</html>
