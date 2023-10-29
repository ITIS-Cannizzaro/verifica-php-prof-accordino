<?php
        if(isset($_GET["index"]))
        {

                $studenti = json_decode(file_get_contents('data.json'), true);
                array_splice($studenti, $_GET["index"], 1);
                file_put_contents('data.json', json_encode($studenti));
                header("Location: index.php");
        }
?>
