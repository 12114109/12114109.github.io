<link href="css/intstructor.css" rel="stylesheet">
<?php
require ("db_config.php");
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "SELECT l.id_lesson, l.title FROM lesson l
            WHERE l.id_lesson='$id'";

    $result = mysqli_query($connection,$sql) or die(mysqli_error($connection));
echo'<br><br><br><br><br><br>';
    if (mysqli_num_rows($result)>0) {
        while ($record = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

            echo '<h1 class="text-center">Naziv predavanja: '.$record["title"].' </h1>' ;
        }
    } else {
        echo 'Nema upisanih prisustva.';
    }

    $attendanceSql = "SELECT a.points, att.name, att.lastname, a.attendant_id FROM attendance a
                      JOIN attendant att ON att.id_attendant=a.attendant_id
                      WHERE a.lesson_id='$id' and a.points<2";
    $result = mysqli_query($connection,$attendanceSql) or die(mysqli_error($connection));
echo'<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">';
    if (mysqli_num_rows($result)>0) {
        while ($record = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $userId=$record['attendant_id'];
            echo '
                <div class="jumbotron text-center iDesc col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <p>Ime: '.$record['name'].'</p>
                    <p>Prezime: '.$record['lastname'].'</p>
                    <p>Poeni: '.$record['points'].'</p>
                    <a href="addPoint.php?id='.$id.'&userId='.$userId.'"><button class="btn btn-round">Dodaj poen</button></a>
                </div>
                ';
        }
    } else {
        echo '
        <div class="jumbotron text-center iDesc col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <p>Nema upisanih prisustva.</p>
        </div>
        ';
    }
echo'</div>';
}