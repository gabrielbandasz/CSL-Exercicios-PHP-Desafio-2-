<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados dos Exercícios de PHP</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            line-height: 1.6;
            background-color: #f8f9fa;
            color: #212529;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
            overflow: hidden; /* Para conter o box-shadow */
        }
        h1 {
            background-color: #007bff;
            color: white;
            padding: 20px;
            margin: 0;
            text-align: center;
        }
        .exercicio {
            padding: 20px;
            border-bottom: 1px solid #dee2e6;
        }
        .exercicio:last-child {
            border-bottom: none;
        }
        .exercicio h3 {
            margin-top: 0;
            color: #0056b3;
            border-bottom: 2px solid #007bff;
            padding-bottom: 5px;
        }
        .resultado {
            background-color: #e9f5ff;
            border: 1px solid #b3d7ff;
            padding: 10px 15px;
            border-radius: 4px;
            margin-top: 10px;
        }
        .resultado strong {
            color: #004a99;
        }
        code {
            background-color: #e8e8e8;
            padding: 2px 5px;
            border-radius: 3px;
        }
        ul, ol {
            padding-left: 20px;
        }
    </style>
</head>
<body>


    <div class="container">
        <h1>Resultados dos Exercícios de PHP</h1>


        <?php
        // Bloco de código PHP começa aqui
        // ----------------------------------------------------
        //1.Soma: Defina duas variáveis com números inteiros e exiba a soma.
    echo "<div class='exercicio'><h3>Exercício 1 - Soma</h3><div class='resultado'>";
    $num1 = 10;
    $num2 = 20;
    $soma = $num1 + $num2;
    echo "A soma de $num1 e $num2 é: $soma";
    echo "</div></div>";
             // ----------------------------------------------------
        

        // ----------------------------------------------------
           //2.Média: Defina três variáveis com notas e calcule a média aritmética.
    echo "<div class='exercicio'><h3>Exercício 2 - Média</h3><div class='resultado'>";
    $nota1 = 8.5;
    $nota2 = 7.0;
    $nota3 = 9.0;
    $media = ($nota1 + $nota2 + $nota3) / 3;
    echo "A média das notas é: " . number_format($media, 2);
    echo "</div></div>";
         
        // ----------------------------------------------------
           //3.Metros para Centímetros: Defina uma variável com um valor em metros e
    //exiba o correspondente em centímetros.
    echo "<div class='exercicio'><h3>Exercício 3 - Metros para Centímetros</h3><div class='resultado'>";
    $metros = 2.5;
    $centimetros = $metros * 100;
    echo "$metros metros equivalem a $centimetros centímetros.";
    echo "</div></div>";

    //4.Área do Retângulo: Defina variáveis para a base e a altura de um retângulo e calcule sua área.
    echo "<div class='exercicio'><h3>Exercício 4 - Área do Retângulo</h3><div class='resultado'>";
    $base = 5.0;
    $altura = 3.0;
    $area = $base * $altura;
    echo "A área do retângulo com base $base e altura $altura é: $area";
    echo "</div></div>";

    //5. Positivo ou Negativo: Defina uma variável com um número e verifique se ele é positivo, negativo ou zero.
    echo "<div class='exercicio'><h3>Exercício 5 - Positivo ou Negativo</h3><div class='resultado'>";
    $numero = -5;
    if ($numero > 0) {
        echo "O número $numero é positivo.";
    } else if ($numero < 0) {
        echo "O número $numero é negativo.";
    } else {
        echo "O número $numero é zero.";
    }
    echo "</div></div>";

    //6.Maioridade: Defina uma variável com a idade de uma pessoa e verifique se ela é maior de idade (18 anos ou mais).
    echo "<div class='exercicio'><h3>Exercício 6 - Maioridade</h3><div class='resultado'>";
    $idade = 20;
    if ($idade >= 18) {
        echo "A pessoa é maior de idade.";
    } else {
        echo "A pessoa é menor de idade.";
    }
    echo "</div></div>";
     
    //7. Aprovação: Defina uma variável com a média final de um aluno e verifique se ele está "Aprovado" (média >= 6.0) ou "Reprovado". 
    echo "<div class='exercicio'><h3>Exercício 7 - Aprovação</h3><div class='resultado'>";
    $mediaFinal = 7.5;
    if ($mediaFinal >= 6.0) {
        echo "O aluno está Aprovado.";
    } else {
        echo "O aluno está Reprovado.";
    }
    echo "</div></div>";

    //8.Maior de Dois: Defina duas variáveis com números diferentes e indique qual deles é o maior.
    echo "<div class='exercicio'><h3>Exercício 8 - Maior de Dois</h3><div class='resultado'>";
    $num1 = 15;
    $num2 = 25;
    if ($num1 > $num2) {
        echo "O número $num1 é maior que $num2.";
    } elseif ($num2 > $num1) {
        echo "O número $num2 é maior que $num1.";
    } else {
        echo "Os números são iguais.";
    }
    echo "</div></div>";

    //9.Dia da Semana: Defina uma variável com um número de 1 a 7 e exiba o nome do dia da semana correspondente (1 = Domingo, 2 = Segunda, etc.). 
    echo "<div class='exercicio'><h3>Exercício 9 - Dia da Semana</h3><div class='resultado'>";
    $dia = 3;
    switch ($dia) {
        case 1:
        echo "Domingo";
        break;
        case 2:
        echo "Segunda-feira";
        break;
        case 3:
        echo "Terça-feira";
        break;
        case 4:
        echo "Quarta-feira";
        break;
        case 5:
        echo "Quinta-feira";
        break;
        case 6:
        echo "Sexta-feira";
        break;
        case 7:
        echo "Sábado";
        break;
        default:
        echo "Número inválido. Por favor, insira um número de 1 a 7.";
    }
    echo "</div></div>";

    //10.Vogal ou Consoante: Defina uma variável com uma única letra e verifique se é uma vogal ou consoante (use strtolower para facilitar).
    echo "<div class='exercicio'><h3>Exercício 10 - Vogal ou Consoante</h3><div class='resultado'>";
    $letra = 'A';
    $letraMinuscula = strtolower($letra);
    if (in_array($letraMinuscula, ['a', 'e', 'i', 'o', 'u'])) {
        echo "A letra '$letra' é uma vogal.";
    } else {
        echo "A letra '$letra' é uma consoante.";
    }
    echo "</div></div>";

    //11.Status do Pedido: Defina uma variável com um status (ex: "aguardando", "em_preparacao", "enviado", "concluido") e mostre uma mensagem amigável para cada status.
    echo "<div class='exercicio'><h3>Exercício 11 - Status do Pedido</h3><div class='resultado'>";
    $statusPedido = "em_preparacao";
    switch ($statusPedido) {
        case "aguardando":
        echo "Seu pedido está aguardando confirmação.";
        break;
        case "em_preparacao":
        echo "Seu pedido está em preparação.";
        break;
        case "enviado":
        echo "Seu pedido foi enviado.";
        break;
        case "concluido":
        echo "Seu pedido foi concluído. Obrigado!";
        break;
        default:
        echo "Status do pedido desconhecido.";
    }
    echo "</div></div>";

    //12. Contagem 1-10: Exiba os números de 1 a 10.
    echo "<div class='exercicio'><h3>Exercício 12 - Contagem 1-10</h3><div class='resultado'>";
    for ($i = 1; $i <= 10; $i++) {
        echo $i . " ";
    }
    echo "</div></div>";

    //13. Pares de 1 a 20: Exiba apenas os números pares de 1 a 20. 
    echo "<div class='exercicio'><h3>Exercício 13 - Pares de 1 a 20</h3><div class='resultado'>";
    for ($i = 1; $i <= 20; $i++) {
        if ($i % 2 == 0) {
        echo $i . " ";
        }
    }
    echo "</div></div>";

    //14.Tabuada: Defina uma variável com um número (ex: 7) e exiba a tabuada desse número (de 1 a 10).
    echo "<div class='exercicio'><h3>Exercício 14 - Tabuada</h3><div class='resultado'>";
    $numeroTabuada = 5;
    echo "Tabuada do $numeroTabuada:<br>";
    for ($i = 1; $i <= 10; $i++) {
        echo "$numeroTabuada x $i = " . ($numeroTabuada * $i) . "<br>";
    }
    echo "</div></div>";

//15. Contagem Regressiva: Faça uma contagem regressiva de 10 até 1.
echo "<div class='exercicio'><h3>Exercício 15 - Contagem Regressiva</h3><div class='resultado'>";
$contador = 10;
while ($contador >= 1) {
    echo $contador . " ";
    $contador--;
}
echo "</div></div>";

//16. Soma até 100: Calcule a soma de todos os números de 1 até 100.
echo "<div class='exercicio'><h3>Exercício 16 - Soma até 100</h3><div class='resultado'>";
$soma = 0;
$num = 1;
while ($num <= 100) {
    $soma += $num;
    $num++;
}
echo "A soma de 1 até 100 é: " . $soma;
echo "</div></div>";

// Sorteio Simples: Use rand(1, 10) dentro de um do-while até que o número sorteado seja 5. Conte e exiba quantas tentativas foram necessárias.
echo "<div class='exercicio'><h3>Exercício 17 - Sorteio Simples</h3><div class='resultado'>";
$tentativas = 0;
do {
    $sorteio = rand(1, 10);
    $tentativas++;
} while ($sorteio != 5);
echo "O número sorteado foi: $sorteio. Tentativas necessárias: $tentativas.";
echo "</div></div>";

//18. Lista de Frutas: Crie um array (vetor) com 5 nomes de frutas. Use um foreach para exibir cada fruta em um item de lista (<li>). 
echo "<div class='exercicio'><h3>Exercício 18 - Lista de Frutas</h3><div class='resultado'>";
$frutas = ["Maçã", "Banana", "Laranja", "Uva", "Abacaxi"];
echo "<ul>";
foreach ($frutas as $fruta) {
    echo "<li>$fruta</li>";
}
echo "</ul>";
echo "</div></div>";

//19.Soma de Array: Crie um array com 5 números. Calcule e exiba a soma total desses números.
echo "<div class='exercicio'><h3>Exercício 19 - Soma de Array</h3><div class='resultado'>";
$numeros = [2, 4, 6, 8, 10];
$somaTotal = array_sum($numeros);
echo "A soma total dos números é: $somaTotal";
echo "</div></div>";

//20.Array Associativo: Crie um array associativo para um "Aluno" contendo as chaves "nome", "idade" e "curso". Exiba as informações formatadas (ex: "Nome: [valor]").
echo "<div class='exercicio'><h3>Exercício 20 - Array Associativo</h3><div class='resultado'>";
$aluno = [
    "nome" => "João Silva",
    "idade" => 22,
    "curso" => "Engenharia de Software"
];
echo "Nome: " . $aluno["nome"] . "<br>";
echo "Idade: " . $aluno["idade"] . "<br>";
echo "Curso: " . $aluno["curso"];
echo "</div></div>";


        ?>
    </div>
    
</body>
</html>
