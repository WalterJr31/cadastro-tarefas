<!DOCTYPE html>
<html>

<head>
    <title>Cadastro de Tarefas</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
</head>

<body>
    <h2>Cadastro de Tarefas</h2>
    <form method="post">
        <label for="tarefa">Tarefa:</label>
        <input type="text" id="tarefa" name="tarefa"><br><br>
        <label for="responsavel">Responsável:</label>
        <input type="text" id="responsavel" name="responsavel"><br><br>
        <input type="submit" value="Cadastrar">
    </form>
    <br>
    <h3>Tarefas Cadastradas:</h3>
    <table>
        <tr>
            <th>Tarefa</th>
            <th>Responsável</th>
        </tr>
        <?php

    $tarefa = $_POST["tarefa"];
    $responsavel = $_POST["responsavel"];


    $arquivo = fopen("responsavel.txt", "a");

        fwrite($arquivo, $tarefa . "\t");
        fwrite($arquivo, $responsavel . "\n");
        fclose($arquivo);

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $tarefa = $_POST['tarefa'];
            $responsavel = $_POST['responsavel'];
            echo "<tr><td>$tarefa</td><td>$responsavel</td></tr>";
        }
        ?>
    </table>
</body>
