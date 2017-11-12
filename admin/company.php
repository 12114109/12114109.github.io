<?php require("../db_config.php"); ?>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container">
  <hr class="star-primary">
  <h4 class="text-center">Lista kompanija</h4>
    <hr class="star-primary">
<table class="table table-striped">
  <thead class="thead-inverse">
    <tr>
      <th>#</th>
      <th>Ime kompanije</th>
      <th>Korisničko ime</th>
      <th>Email</th>
      <th>Aktivacija</th>
    </tr>
  </thead>
  <tbody>


  <?php

    $query = "SELECT id_company,name,username,active,email FROM company ORDER BY id_company DESC";
    $result = mysqli_query($connection,$query);


    if (!$result) {

      echo "
      <tr>
      <th scope='row'>1</th>
      <td>DB error</td>
      <td>DB error</td>
      <td>DB error</td>
      <td>DB error</td>
    </tr>

      ";
    }
    else
    {
      foreach ($result as $key) {

        $id_company = $key['id_company'];
        $name = $key['name'];
        $username = $key['username'];
        $email = $key['email'];
        $active = $key['active'];

        if ($active==1)
        {

          $active = "<button class='btn btn-lg btn-block btn-secondary'>Kompanija aktivirana</button>";
        }
        else
        {
          $active = "<a class='btn btn-success btn-lg btn-block' href='activate_company.php?link=activate&id=".$id_company."'> Aktivacija " . $name . " </a>";
          $active .= "<a class='btn btn-danger btn-lg btn-block' href='delete_company.php?link=delete&id=".$id_company."'> Obriši " . $name . " </a>";
        }

         echo "
      <tr>
      <th scope='row'>".$id_company."</th>
      <td>".$name."</td>
      <td>".$username."</td>
      <td>".$email."</td>
      <td>".$active."</td>
    </tr>
      ";

      }
    }

  ?>
  
  </tbody>
</table>
</div>

