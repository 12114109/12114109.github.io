<?php require("../db_config.php"); ?>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container">
  <hr class="star-primary">
  <h4 class="text-center">Lista predavača</h4>
    <hr class="star-primary">
<table class="table table-striped">
  <thead class="thead-inverse">
    <tr>
      <th>#</th>
      <th>Korisničko ime</th>
      <th>Ime i prezime </th>
      <th>Ime kompanije</th>
      <th>Email</th>
      <th>Aktivacija</th>
    </tr>
  </thead>
  <tbody>


  <?php

    $query = "SELECT i.username, i.name, i.email, i.lastname, c.name as company_name, i.id_instructor,i.active FROM instructor i  JOIN company c on i.company_id=c.id_company ORDER BY i.id_instructor DESC";

    $result = mysqli_query($connection,$query);


    if (!$result) {

      echo "
      <tr>
      <th scope='row'>1</th>
      <td>DB error</td>
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

        $id_instructor = $key['id_instructor'];
        $name = $key['name'];
        $lastname = $key['lastname'];
        $username = $key['username'];
        $email = $key['email'];
        $company_name = $key['company_name'];
        $active = $key['active'];

        if ($active==1)
        {

          $active = "<button class='btn btn-lg btn-block btn-secondary'>Korisnik aktiviran</button>";
        }
        else
        {
          $active = "<a class='btn btn-success btn-lg btn-block' href='activate_instructor.php?link=activate&id=".$id_instructor."'> Aktiviraj " . $name . " </a>";
          $active .= "<a class='btn btn-danger btn-lg btn-block' href='delete_instructor.php?link=delete&id=".$id_instructor."'> Obriši " . $name . " </a>";
        }

         echo "
      <tr>
      <th scope='row'>".$id_instructor."</th>
      <td>".$username."</td>
      <td>".$name . " " . $lastname . "</td>
      <td>".$company_name."</td>
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

