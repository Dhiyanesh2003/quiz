<?php
    $usernamee=$_POST['usernamee'];
    $hackid=$_POST['hackid'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "master_sql";

    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO `id` (`id`) VALUES ('".$_POST["id1"]."'), ('".$_POST["id2"]."');";

    if ($conn->query($sql) === TRUE) {
        
    } 
    else {
        header("location: index.html");
        exit(0);
    }

    $conn->close();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500&display=swap");

            * {
                box-sizing: border-box;
            }
            body {
                background-color: #b8c6db;
                background-image: linear-gradient(315deg, #b8c6db 0%, #f5f7f7 100%);
                background-attachment: fixed;
                font-family: "Poppins", sans-serif;
                display: flex;
                align-items: center;
                justify-content: center;
                height: 100vh;
                margin: 0;
            }
            .quiz-container {
                background-color: #fff;
                border-radius: 10px;
                box-shadow: 0 0 10px 2px rgba(100, 100, 100, 0.1);
                width: 600px;
            }
            .quiz-header {
                padding: 4rem;
            }
            h2 {
                padding: 1rem;
                text-align: center;
                margin: 0;
            }

            ul {
                list-style-type: none;
                padding: 0;
            }
            ul li {
                font-size: 1.2rem;
                margin: 1rem 0;
            }
            ul li label {
                cursor: pointer;
            }
            a {
                background-color: #03cae4;
                color: #fff;
                border: none;
                display: block;
                width: 100%;
                cursor: pointer;
                font-size: 1.5rem;
                font-family: inherit;
                padding: 1.3rem;
                border-bottom-left-radius: 10px;
                border-bottom-right-radius: 10px;
                text-align: center;
            }
            a:hover {
                cursor: pointer;
                background-color: #00e1ff;
            }
            #done {
                background-color: #03cae4;
                color: #fff;
                border: none;
                width: 100%;
                cursor: pointer;
                font-size: 1.5rem;
                font-family: inherit;
                padding: 1.3rem;
                border-bottom-left-radius: 10px;
                border-bottom-right-radius: 10px;
                text-align: center;
                display: none;
            }
            button:hover {
                cursor: pointer;
                background-color: #00e1ff;
            }
            #quiz_2,
            #quiz_3,
            #quiz_4,
            #quiz_5,
            #quiz_6,
            #quiz_7,
            #quiz_8,
            #quiz_9,
            #quiz_10,
            #quiz_11,
            #quiz_12,
            #quiz_13,
            #quiz_14,
            #quiz_15,
            #quiz_16,
            #quiz_17,
            #quiz_18,
            #quiz_19,
            #quiz_20 {
                display: none;
            }
            #demo {
                position: absolute;
                right: 20;
                bottom: 20;
            }
            .timer {
                text-align: left;
            }

        </style>
        <title>Master SQL</title>
    </head>
    <body>
        <h1 id="demo"></h1>
        <form id="formid" action="result.php" method="post" name="form" enctype="multipart/form-data">
        <?php
            //MySQL connection

            $servername = "localhost";
            $username = "root";
            $passwordd = "";
            $dbname = "master_sql";

            // Create connection
            $conn = new mysqli($servername, $username, $passwordd, $dbname);

            // Check connection
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }

            // echo "<input type='text' value=".$setno." name='setno' required hidden>";
            echo "<input type='text' value=".$hackid." name='hackid' required hidden>";
            echo "<input type='text' value=".$usernamee." name='usernamee' required  hidden>";

            $sql = "SELECT * FROM mark where hackid='".$hackid."';";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    if($row['hackid']==$hackid){
                        header("Location: index.html");
                        exit();
                    }
                }
            }

            $sql = "SELECT * FROM question where setno = 1;";
            $result = $conn->query($sql);

            $count=1;
            $countt=1;

            echo "
                <div class='timerr'>
                    <h3 id='timer'></h3>
                </div>
            ";

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "
                    <div class='quiz-container' id='quiz_".$count."'>
                        <div class='quiz-header'>
                            <h2 id='question'>".$row['qno'].") ".$row['quest']."</h2>
                            <ul>
                                <li>
                                <input type='radio' name='".$count."' id='".$countt."' value='a' class='answer' >
                                <label for='".$countt."' id='a_text'>".$row['a']."</label>
                                </li>
                    ";
                    $countt+=1;
                    echo "            
                                <li>
                                <input type='radio' name='".$count."' id='".$countt."' value='b' class='answer'>
                                <label for='".$countt."' id='b_text'>".$row['b']."</label>
                                </li>
                    ";
                    $countt+=1;
                    echo "                 
                                <li>
                                <input type='radio' name='".$count."' id='".$countt."' value='c' class='answer' >
                                <label for='".$countt."' id='c_text'>".$row['c']."</label>
                                </li>
                    ";
                    $countt+=1;
                    echo "     
            
                                <li>
                                <input type='radio' name='".$count."' id='".$countt."' value='d' class='answer' >
                                <label for='".$countt."' id='d_text'>".$row['d']."</label>
                                </li>
                    ";
                    $countt+=1;
                    echo "     
                            </ul>
                        </div>
                    ";
                    if($count==20){
                        echo "<button id='done' onclick='quiz_".$count."()'>Submit</button>";
                    }
                    else{
                        echo "<a id='submit' onclick='quiz_".$count."()'>Save and Continue</a>";
                    }
                    echo "
                    </div>
                    ";
                    $count+=1;
                }
            }
            else{
                echo "<p>error -- ".$sql."</p>x";
            }

            $conn->close();

        ?>
        </div>
    </form>
    <br>
    <script>
        function quiz_1(){
            document.getElementById('quiz_1').style.display="none";
            document.getElementById('quiz_2').style.display="block";
        }
        function quiz_2(){
            document.getElementById('quiz_2').style.display="none";
            document.getElementById('quiz_3').style.display="block";
        }
        function quiz_3(){
            document.getElementById('quiz_3').style.display="none";
            document.getElementById('quiz_4').style.display="block";
        }
        function quiz_4(){
            document.getElementById('quiz_4').style.display="none";
            document.getElementById('quiz_5').style.display="block";
        }
        function quiz_5(){
            document.getElementById('quiz_5').style.display="none";
            document.getElementById('quiz_6').style.display="block";
        }
        function quiz_6(){
            document.getElementById('quiz_6').style.display="none";
            document.getElementById('quiz_7').style.display="block";
        }
        function quiz_7(){
            document.getElementById('quiz_7').style.display="none";
            document.getElementById('quiz_8').style.display="block";
        }
        function quiz_8(){
            document.getElementById('quiz_8').style.display="none";
            document.getElementById('quiz_9').style.display="block";
        }
        function quiz_9(){
            document.getElementById('quiz_9').style.display="none";
            document.getElementById('quiz_10').style.display="block";
        }
        function quiz_10(){
            document.getElementById('quiz_10').style.display="none";
            document.getElementById('quiz_11').style.display="block";
        }
        function quiz_11(){
            document.getElementById('quiz_11').style.display="none";
            document.getElementById('quiz_12').style.display="block";
        }
        function quiz_12(){
            document.getElementById('quiz_12').style.display="none";
            document.getElementById('quiz_13').style.display="block";
        }
        function quiz_13(){
            document.getElementById('quiz_13').style.display="none";
            document.getElementById('quiz_14').style.display="block";
        }
        function quiz_14(){
            document.getElementById('quiz_14').style.display="none";
            document.getElementById('quiz_15').style.display="block";
        }
        function quiz_15(){
            document.getElementById('quiz_15').style.display="none";
            document.getElementById('quiz_16').style.display="block";
        }
        function quiz_16(){
            document.getElementById('quiz_16').style.display="none";
            document.getElementById('quiz_17').style.display="block";
        }
        function quiz_17(){
            document.getElementById('quiz_17').style.display="none";
            document.getElementById('quiz_18').style.display="block";
        }
        function quiz_18(){
            document.getElementById('quiz_18').style.display="none";
            document.getElementById('quiz_19').style.display="block";
        }
        function quiz_19(){
            document.getElementById('quiz_19').style.display="none";
            document.getElementById('quiz_20').style.display="block";
            document.getElementById('done').style.display="block";
        }

        setTimeout(function() {
            document.getElementById('formid').submit();
        }, 1200000);
        window.onload = function() {
            timer();
        };
        function timer(){
            const printNumbersForEvery2Sec = ()=>{
                i=1200;
                for(i = 0; i < 1200; i++) {
                    setTimeout( () =>{
                    console.log(i);
                    mins=parseInt(i/60);
                    secs=i%60;
                    document.getElementById("timer").innerHTML = "Test Duration : "+mins+" mins and "+secs+" secs";
                    i--;
                    }, i * 1000)
                }
            }
            printNumbersForEvery2Sec(1);
        }
    </script>
    </body>
</html>