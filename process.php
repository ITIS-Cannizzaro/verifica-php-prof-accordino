<?php
        if(isset($_POST["nome"]) & isset($_POST["voto"]))
        {

                $studenti = json_decode(file_get_contents('data.json'), true);
                $studente["nome"] = $_POST["nome"];
                $studente["voto"] = $_POST["voto"];
                array_push($studenti, $studente);
                file_put_contents('data.json', json_encode($studenti));
                header("Location: index.php");
        }
?>
