<?php
require "db_config.php";
?>

<link href="css/intstructor.css" rel="stylesheet">
<section id="contact">
			<div class="section-content">
                <br><br><br><br>
				<h3>Zakaži svoje predavanje:</h3>
                <?php
                if(isset($_GET['success']) && $_GET['success']==1){
                echo 'Uspešan unos predavanja!';
                }
                ?>
			</div>
			<div class="contact-section col-lg-12">
			<div class="container">
				<form action="insertLesson.php" method="post">
					<div class="col-md-12 col-lg-12">
			  			<div class="form-group">
			  				<label for="title">Naziv</label>
					    	<input type="text" class="form-control" id="title" name="title" placeholder="Unesi naziv predavanja">
				  		</div>
				  		<div class="form-group">
					    	<label for="time">Datum i vreme</label>
					    	<input type="date" name="date" class="form-control" id="date" placeholder="Unesi datum i vreme">
					    	<input type="time" name="time" class="form-control" id="time" placeholder="Unesi datum i vreme">
					  	</div>

                        <div class="form-group">
                            <label for="type">Tip predavanja</label>
                            <input class="radio" type="radio" name="type" value="0"> Predavanje
                            <input class="radio" type="radio" name="type" value="1"> Kurs
                        </div>

                        <label for="topic_register">Izaberi temu predavanja</label>
                    <select name="topic" required  id="topic_register" class="form-control">
                      <option selected="" value="">Izaberite iz liste</option>

                    <?php
                            require "db_config.php";
                            $query = "SELECT id_topic, name FROM topic";
                            $result = mysqli_query($connection, $query);

                            if (!$result)
                            {
                            echo '<option>DB error</option>';
                            }
                            else
                            {
                            foreach ($result as $row)
                            {
                            $rowid = $row['id_topic'];
                            $rowname = $row['name'];
                            echo "<option value='".$rowid."'>".$rowname."</option>";

                            }
                            }
                       ?>
			  		</div>
                    <br><br><br>
			  		<div class="col-md-6">
			  			<div class="form-group">
			  				<label for ="description">Opis</label>
			  			 	<textarea  class="form-control" id="description" name="description" placeholder="Unesi opis"></textarea>
                            <input type="submit" value="Postavi predavanje">
			  			</div>

					</div>
				</form>
			</div>
          </div>
    <hr>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

    <div class="offset-lg-3 col-lg-6">
        <h1 class="jumbotron iTitle">Moja Predavanja</h1>
        <?php
        $id = $_SESSION['id_user'];

        $sql = "SELECT id_lesson, title, time, type, code, l.description FROM lesson l
                JOIN instructor i ON i.id_instructor=l.instructor_id
                WHERE i.id_instructor='$id'
                ORDER BY time";
        $result = mysqli_query($connection,$sql) or die(mysqli_error($connection));

        if (mysqli_num_rows($result)>0) {
            while ($record = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                if($record['type']==0){
                    $type = "predavanje";
                } else {
                    $type = "kurs";
                }

                echo '
                <a class="lesson" href="index.php?link=lesson&id='.$record['id_lesson'].'">
                <div class="jumbotron iDesc">
                    <h3 class="text-center">'.$record['title'].'</h3>
                    <p>'.$record['time'].'</p>
                    <p>Tip: '.$type.'</p>
                    <p>Kod: '.$record['code'].'</p>
                    <p>'.$record['description'].'</p>
                </div>
                </a>
                ';
            }
        }

        ?>

    </div>

</div>


		</section>