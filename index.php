<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro elettronico</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <h1>Registro elettronico</h1>

    <form action="process.php" method="post">
        <div class="input-group">
            <label for="student_name">Nome dello studente:</label>
            <input type="text" name="nome" required>
        </div>

        <div class="input-group">
            <label for="voto">Voto:</label>
            <input type="number" name="voto" id="voto" min="2" max="10" required>
        </div>

        <button type="submit">Inserisci Dati</button>
    </form>

    <h2>Lista degli Studenti e Voti</h2>

    <?php
    
    if(file_exists('data.json'))
    {
        $studenti = json_decode(file_get_contents('data.json'), true);
        ?>
        <table>
        <tr>
            <th>Nome e cognome</th>
            <th>Voto</th>
            <th>Link eliminazione</th>
        </tr>

        <?php
        for($i = 0; $i < count($studenti); $i++)
        {


            echo "<tr>";
            echo '<td>' . $studenti[$i]["nome"] .'</td>';
            echo '<td>' . $studenti[$i]["voto"] .'</td>';
            echo '<td> <a href="delete.php?index='. $i . '"> Elimina </a></td>';
            echo "</tr>";

        }
        echo "</table>";

    }

    // Visualizzare qui gli studenti e i voti in una tabella

    ?>
</body>

</html>