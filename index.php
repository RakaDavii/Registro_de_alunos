<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de aluno</title>
</head>
<body>
    <h1>Registro de aluno</h1>
    <form action="index.php" method="POST">
        <select name="metodo" id="metodo">
            <option value="1">Incluir Materia</option>
            <option value="2">Ler Materia</option>
        </select>
       
        <!--conteúdo para adicionar informações do aluno-->
        <br><br>
        Nome do Aluno: <input type="text" name="aluno" id="aluno" placeholder="*Davi Felipe*">
        <br><br>
        Nome da Materia: <input type="text" name="materia" id="materia" placeholder="*Desevolvimento web*">
        <br><br>
        Sigla: <input type="text" name="sigla" id="sigla" placeholder="*3DAW*">
        <br><br>
        Carga Horaria: <input type="number" name="horas" id="horas" placeholder="*23*">
        <br><br>
        <input type="submit" value="Concluir">

    </form>
    
    <!--Ler as informções do Aluno-->

    </table>
    <table>
    <tr>
    <th>Nome</th>
    <th>Materia<th>
    <th>Sigla<th>
    <th>Horas</th>
    </tr>

    <?php
        $metodo = $_POST["metodo"];
        error_reporting(0);

        if ($metodo == 1) {
        
            $mensagem = "";

            if ($_SERVER['REQUEST_METHOD'] == 'POST') /* informa o servidor que o metodo que esta sendo atribuido é tipo POST */{
                
                $aluno = $_POST["aluno"];
                $materia = $_POST["materia"];
                $sigla = $_POST["sigla"];
                $horas = $_POST["horas"];
                $mensagem = "";

                echo "nome: " . $aluno . "materia: " . $materia . "sigla: " . $sigla . "horas: " . $horas;

                $arquivo = 'disciplinas.txt';/* Recebendo arquivo */
                $arquivoDis = fopen($arquivo,"a+") or die ("Problema ao criar arquivo"); /* abrir o arquivo */
                
                $linha = "nome;materia;sigla;horas\n";
                $linha = $aluno . ";" . $materia . ";" . $sigla . ";" . $horas . "\n";

                fwrite($arquivoDis,$linha);
                fclose($arquivoDis);
            }
        }

        

    ?>

</body>
</html>