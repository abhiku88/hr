



<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <div class="container table-responsive py-5"> 
        <table class="table table-bordered table-hover">
          <thead class="thead-dark" style="background-color: #000; color: #f1f1f1;">
            <tr>
              <th scope="col">id</th>
              <th scope="col">Name</th>
              <th scope="col">Degree</th>
              <th scope="col">Profile</th>
              <th scope="col">Phone No</th>
              <th scope="col">Email</th>
              <th scope="col">Resume</th>
             
            </tr>
          </thead>
          <tbody>

          <?php

        include 'dbconnect.php';
        $selectquery = "select * from user";
        $query = mysqli_query($conn,$selectquery);

        $nums = mysqli_num_rows($query);
        echo $nums;
        while($res = mysqli_fetch_array($query)){
        //echo $res['refer'] . "<br>";
        ?>
            <tr>
              <td><?php  echo $res['id'];  ?></td>
              <td><?php  echo $res['name'];  ?></td>
              <td><?php  echo $res['degree']; ?></td>
              <td><?php  echo $res['profile'];?></td>
              <td><?php  echo $res['phone_no'];?></td>
              <td><?php  echo $res['email'];?></td>
              <td><a href="resumes/<?php  echo $res['upload_resume'];?>">See resume</a></td>
             
            </tr>

            <?php
}
?>
            <!-- <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>




            
            <tr>
              <th scope="row">3</th>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
             <tr>
              <th scope="row">4</th>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr> -->
            
          </tbody>
        </table>
        </div>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>