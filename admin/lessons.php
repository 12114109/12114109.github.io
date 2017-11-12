<?php require("../db_config.php"); ?>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container">
  <hr class="star-primary">
  <h4 class="text-center">Lista predavanja</h4>
    <hr class="star-primary">

    <div class="card-deck">

  <?php
  $query = "SELECT l.title,l.time,l.id_lesson,l.classroom,i.name,i.lastname,i.email,t.logo,l.active FROM lesson l JOIN instructor i on i.id_instructor = l.instructor_id JOIN topic t on l.topic_id = t.id_topic";
  $result = mysqli_query($connection,$query);

  if(!$result)
  {
    echo "DB error";
  }
  else
  {
    foreach ($result as $key) {
      
      $title = $key['title'];
      $time = $key['time'];
      $id_lesson = $key['id_lesson'];
      $email = $key['email'];
      $name = $key['name'];
      $lastname = $key['lastname'];
      $logo = $key['logo'];
      if($logo=="" || $logo==null)
      {
        $logo = "../img/category_logo/default.jpg"; 
      }
      $active = $key['active'];



    echo '<div class="col-lg-4">';
    echo '<img class="card-img-top" src="../'.$logo.'" alt="Card image cap">';
    echo '<div class="card-block">';
    echo  '<h4 class="card-title text-center">'.$title.'</h4>';
    echo  '<p class="card-text"><b>Vreme odžavanja: '. $time .'<br>Predavač: '.$name .' ' . $lastname .'</b></p>';
    if($active!="1")
    {
    echo "<a href='activate_lesson.php?link=activate&id=".$id_lesson."' class='btn btn-lg btn-block btn-info'>Odobri ".$title."</a>";
    echo "<a href='delete_lesson.php?link=delete&id=".$id_lesson."' class='btn btn-lg btn-block btn-danger'>Odbij ".$title."</a>";
    }
    else
    {
      echo "<button disabled href='?href=link=lesson' class='btn btn-lg btn-block btn-secondary'>".$title." je odobren</button>";
    }
    
    echo "</div>";
    echo '<div class="card-footer">';
    echo '<small class="text-muted"><br>Kontakt email: ' .$email. '</small>';
    echo '</div>';
    echo '</div>';


    }
  }


  ?>

 


</div>


  
  
</div>

