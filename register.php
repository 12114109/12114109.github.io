<?php
/**TODO: MYSQL REAL ESCAPE ALL VARIABLES PASSED TO THIS PAGE FROM USER */
/**TODO: REDIRECT TO INDEX PAGE IF ONE OF VARIABLES IS EMPTY */
define("SECRET","@7sfekjsdngjkfshsgj#GFJHddsgjfshjkfhjk!");
$SALT1 = "skjdghjdhskdgsshkgdhkgdkj";
$SALT2 = "isdjghgsjdk8795njrgh9734h";

require "db_config.php";
require "functions.php";

$user = $_POST['user'];
global $connection;
switch ($user) {

    case "attendent":

        if (!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['name']) && !empty($_POST['lastname']
                && !empty($POST['email'] && !empty($_POST['status'])))
            && !empty($_POST['passwordRepeated']) && !empty($_POST['username'])) {
            /** Checking if email is in correct format, if not, redirect to index page */
            if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
                header("Location:index.php?link=news&regStat=emailErr");
                exit();
            }

            $userName = mysqli_real_escape_string($connection, trim($_POST['username']));
            $userName = preg_replace('/\s+/', '', $userName);
            $email = mysqli_real_escape_string($connection, trim($_POST['email']));
            $email = preg_replace('/\s+/', '', $email);


            /** Get list of all users in our databases, and check if username or email is taken */
            $sqlCheck = "SELECT username, email FROM attendent";
            $checkedResult = mysqli_query($connection, $sqlCheck) or die(mysqli_error($connection));
            if (mysqli_num_rows($checkedResult) > 0) {
                while ($singleUser = mysqli_fetch_array($checkedResult, MYSQLI_ASSOC)) {
                    if ($singleUser['username'] == $userName) {
                        header("Location:index.php?link=news&regStat=userTaken");
                        exit();
                    }
                    if ($singleUser['email'] == $email) {
                        header("Location:index.php?link=news&regStat=emailTaken");
                        exit();
                    }
                }
            }

            /** Retriving user's data and triming all whitespaces */
            $name = mysqli_real_escape_string($connection, trim($_POST['name']));
            $name = preg_replace('/\s+/', '', $name);
            $lastName = mysqli_real_escape_string($connection, trim($_POST['lastname']));
            $lastName = preg_replace('/\s+/', '', $lastName);
            $pass = mysqli_real_escape_string($connection, trim($_POST['password']));
            $pass = preg_replace('/\s+/', '', $pass);
            $passRe = mysqli_real_escape_string($connection, trim($_POST['passwordrepeated']));
            $passRe = preg_replace('/\s+/', '', $passRe);
            /**logo & date*/
            $status = preg_replace('/\s+/', '',trim($_POST['status']));
            $status = preg_replace('/\s+/', '', $status);
            $education= preg_replace('/\s+/', '',trim($_POST['education']));
            $education = preg_replace('/\s+/', '', $education);
            $description = preg_replace('/\s+/', '',trim($_POST['description']));
            $description = preg_replace('/\s+/', '', $description);
            $birthday = $status = preg_replace('/\s+/', '',trim($_POST['birthday']));


            /** If passwords don't match, redirect to index page */
            if ($pass != $passRe) {
                header("Location:index.php?link=news&regStat=passErr");
                exit();
            }

            /**** Inserting user into table of users */
            $code = create_code(40);
            $fan = 'fan';
            $password_temp = $SALT1 . $pass . $SALT2;
            $insertUserSQL = "INSERT INTO attendant
                        (name, lastname, username, email, password, code, active, description, education, birthday, status) 
                        VALUES ('$name', '$lastName', '$userName', '$email', md5('$password_temp'), '$code',0, $description, $education, $birthday,$status)";

            $res = mysqli_query($connection, $insertUserSQL) or die(mysqli_error($connection));

            /***** Sending him a confirmation email */
            $header = "From: WEBMASTER <usavrsime@gmail.com>\n";
            $header .= "X-Sender: usavrsime@gmail.com\n";
            $header .= "Content-Type: text/html; charset=UTF-8\n";
            $message = "Korisniče $userName";
            $message .= "\n\n da biste aktivirali nalog, kliknite na link: http://localhost/spartak-master/active.php?&code=$code";
            $to = $email;
            $subject = "Registracija na Usavrsi.me";
            mail($to, $subject, $message, $header);


            header("Location:index.php?link=news&regStat=success");

        } else
            echo "Molimo popunite sva obavezna polja";
}