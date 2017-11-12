<link href="css/attendant.css" rel="stylesheet">
<div class="container">
<br><br><br><br>
    <h1 style="text-align: center">Bodovi sa predavanja</h1>
    <?php
require "db_config.php";


    $id = $_SESSION['id_user'];
    $topicsOutput["topics"] = array();

    $sql = "SELECT DISTINCT t.id_topic, t.name, t.logo FROM topic t
            JOIN lesson l ON l.topic_id=t.id_topic
            JOIN attendance a ON a.lesson_id=l.id_lesson
            WHERE a.attendant_id='$id'";

    $result = mysqli_query($connection,$sql) or die(mysqli_error($connection));

    if (mysqli_num_rows($result)>0) {
        while($record = mysqli_fetch_array($result,MYSQLI_ASSOC)){
            $topics = array();
            $topics["id_topic"] = $record["id_topic"];
            $topics["name"] = $record["name"];
            $topics["logo"] = $record["logo"];

            array_push($topicsOutput["topics"], $topics);
        }
    } else {
        $topicsOutput["topics"] = "";
    }

    if(!empty($topicsOutput["topics"])) {
    $count = count($topicsOutput["topics"]);
    for ($i=0; $i<$count; $i++){
        $idTopic = $topicsOutput["topics"][$i]["id_topic"];
        $sql = "SELECT sum(a.points) as attendance FROM topic t
            JOIN lesson l ON l.topic_id=t.id_topic
            JOIN attendance a ON a.lesson_id=l.id_lesson
            WHERE a.attendant_id='$id' AND l.topic_id='$idTopic'";
        $result = mysqli_query($connection,$sql) or die(mysqli_error($connection));

        if (mysqli_num_rows($result)>0) {
            while ($record = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                $topicsOutput["topics"][$i]["attendance"] = $record["attendance"];
            }
        }
    }

    for($i=0; $i<$count;$i++){
        echo '
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb30">
            <div>
                <div class="tutor-img">
                    <img src="'.$topicsOutput["topics"][$i]["logo"].'">
                </div>
                <div class="tutor-content">
                    <h5 class="tutor-title">'.$topicsOutput["topics"][$i]["name"].'</h5>
                    <p>Bodova: '.$topicsOutput["topics"][$i]["attendance"].'</p>
                </div>
            </div>
        </div>';
    }
    } else {
        echo 'Nemate bodova sa predavanja.';
    }

?>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt30">
            </div></div>
</div>