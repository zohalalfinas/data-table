<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Document</title>
</head>
<body>
<div class="container mt-5">
<table class="table mydatatable" id="">
  <thead class="thead-dark">
    <tr>
      <th scope="col">first name</th>
      <th scope="col">last name</th>
      <th scope="col">email</th>
      <th scope="col">job title</th>
    </tr>

    
  </thead>
  <tbody>
  <?php
    include 'config.php';
    $employee = mysqli_query($connect, "select * from employees");
    while ($row = mysqli_fetch_array($employee)) {
      echo " <tr>
      <td>".$row['firstName']."</td>
      <td>".$row['lastName']."</td>
      <td>".$row['email']."</td>
      <td>".$row['jobTitle']."</td>
      </tr>
      ";
    }
    ?>
  </tbody>
</table>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script >
    $(document).ready( function () {
    $('.mydatatable').DataTable();
} );
</script>
</html>