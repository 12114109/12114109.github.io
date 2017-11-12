<?php
require "db_config.php";
?>
<link href="css/intstructor.css" rel="stylesheet">
<br><br><br><br>
<div class="offset-lg-3 col-lg-6">
        <h1 class="jumbotron iTitle">Posetioci predavanja</h1>
        <?php
        $id = $_SESSION['id_user'];

        $sql = "SELECT atte.points, att.name, att.lastname, att.email,att.status, att.description, l.title FROM attendant att
                JOIN attendance atte ON att.id_attendant=atte.attendant_id
                JOIN lesson l ON atte.lesson_id=l.id_lesson
                JOIN instructor i ON i.id_instructor=l.instructor_id
                JOIN company c ON c.id_company=i.company_id
                WHERE c.id_company='$id' or c.name='Freelance'
                ORDER BY atte.points desc";


        $result = mysqli_query($connection,$sql) or die(mysqli_error($connection));

        if (mysqli_num_rows($result)>0) {
            while ($record = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

               echo '
                <div class="jumbotron iDesc">
                    <h1>Broj poena: '.$record['points'].'</h1>
                     <p>Prisustvovao: '.$record['title'].'</p>
                    <h3>'.$record['name'].'</h3>
                    <h3>'.$record['lastname'].'</h3>
                    <p>email: '.$record['email'].'</p>
                    <p>Status: '.$record['status'].'</p>
                    <p>'.$record['description'].'</p>
                   
                </div>
                </a>
                ';
            }
        }

        ?>

</div>
