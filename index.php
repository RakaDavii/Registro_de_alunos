<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script>
    <link rel="stylesheet" href="Style.css">
    <title>Registro de aluno</title>
</head>
<body>
    <div class= "centralizar">
        <div class="opcao">
            <h1>REGISTRO DE ALUNO</h1>
            <br>
            <form id="select" action="index.php" method="POST">
                <select name="metodo" id="metodo">
                    <option value="">Selecione a opção</option>
                    <option value="div1">Incluir Materia</option>
                    <option value="div2">Exibir</option>
                    <option value="div3">Editar</option>
                </select>
        </div>
            <div id="opcao" class="selecionar">
                <!--conteúdo para adicionar informações do aluno-->
                <div id="div1" class="incluir">
                    <br>
                    Nome do Aluno: <input type="text" name="aluno" id="aluno" placeholder="*Davi Felipe*">
                    <br><br>
                    Nome da Materia: <input type="text" name="materia" id="materia" placeholder="*Desevolvimento web*">
                    <br><br>
                    Sigla: <input type="text" name="sigla" id="sigla" placeholder="*3DAW*">
                    <br><br>
                    Carga Horaria: <input type="number" name="horas" id="horas">
                    <br><br>
                </div>

                <div id="div2" class="exibir">
                <input type="file" name="arquivos">
                <br><br>
                </div>
                <input type="submit" value="Concluir">
            </form>

        <!--Ler as informções do Aluno-->

                <div id="div2" class="exibir">    
                    <table>
                    <tr>
                    <th>Nome</th>
                    <th>Materia<th>
                    <th>Sigla<th>
                    <th>Horas</th>
                    </tr>
                    </table>
                </div>
            </div>    
    </div>

    <?php
        error_reporting(0);
        $metodo = $_POST["metodo"];
        /* O metodo 1 é para inserir as informações */
        if ($metodo == 1) {
        
            $mensagem = "";
            

            if ($_SERVER['REQUEST_METHOD'] == 'POST') /* informa o servidor que o metodo que esta sendo atribuido é tipo POST */{
                
                /* Atribuindo os valores aos parametros */
                $aluno = $_POST["aluno"];
                $materia = $_POST["materia"];
                $sigla = $_POST["sigla"];
                $horas = $_POST["horas"];
                $mensagem = "";
                /* Final */

               echo "nome: " . $aluno . " materia: " . $materia . " sigla: " . $sigla . " horas: " . $horas; /*Exibição dos valores*/

                $arquivo = 'disciplinas.txt';/* Recebendo arquivo */
                $arquivoDis = fopen($arquivo,"a+"/*"a+" é utilizado para quando quiser fazer uma alteração no arquivo, se ele não existe é criado */) or die ("Problema ao criar arquivo"); /* abrir o arquivo */
                
                $linha = $aluno . ";" . $materia . ";" . $sigla . ";" . $horas . "\n";/*Gravação em arquivo*/

                fwrite($arquivoDis,$linha);/*Ecrevendo dentro do arquivo*/
                fclose($arquivoDis);/*fechando o arquivo*/ 
            }
        }


        /* O metodo 2 é para exibir as infomações ja escritas */ 
        if ($metodo == 2) {
            
            $aluno = "";
            $materia = "";
            $sigla = "";
            $horas = "";

            $arquivo = 'disciplinas.txt';/* Recebendo arquivo */
            $arquivoDis = fopen($arquivo,"r") or die ("Problema ao criar arquivo");/* abrir o arquivo */

            $i = 0;

            $linha[] = fgets($arquivoDis);

            while (!feof($arquivoDis)) {
                # code...
            }
        }

    ?>

</body>
</html>