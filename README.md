# 📘 Resultados dos Exercícios de PHP

Este projeto contém uma série de exercícios básicos em PHP, com exemplos práticos de lógica de programação, estruturas condicionais, loops e arrays.

---

## 🧮 Exercícios Básicos

### 1. Soma
```php
$num1 = 10;
$num2 = 20;
$soma = $num1 + $num2;

echo "A soma de $num1 e $num2 é: $soma";
```

### 2. Média
```php
$nota1 = 8.5;
$nota2 = 7.0;
$nota3 = 9.0;

$media = ($nota1 + $nota2 + $nota3) / 3;

echo number_format($media, 2);
```

### 3. Metros para Centímetros
```php
$metros = 2.5;
$centimetros = $metros * 100;

echo "$metros metros equivalem a $centimetros centímetros.";
```

### 4. Área do Retângulo
```php
$base = 5.0;
$altura = 3.0;

$area = $base * $altura;

echo $area;
```

---

## 🔍 Estruturas Condicionais

### 5. Positivo ou Negativo
```php
$numero = -5;

if ($numero > 0) {
    echo "Positivo";
} elseif ($numero < 0) {
    echo "Negativo";
} else {
    echo "Zero";
}
```

### 6. Maioridade
```php
$idade = 20;

if ($idade >= 18) {
    echo "Maior de idade";
} else {
    echo "Menor de idade";
}
```

### 7. Aprovação
```php
$mediaFinal = 7.5;

if ($mediaFinal >= 6) {
    echo "Aprovado";
} else {
    echo "Reprovado";
}
```

### 8. Maior de Dois
```php
$num1 = 15;
$num2 = 25;

if ($num1 > $num2) {
    echo $num1;
} elseif ($num2 > $num1) {
    echo $num2;
} else {
    echo "Iguais";
}
```

### 9. Dia da Semana
```php
$dia = 3;

switch ($dia) {
    case 1: echo "Domingo"; break;
    case 2: echo "Segunda"; break;
    case 3: echo "Terça"; break;
    case 4: echo "Quarta"; break;
    case 5: echo "Quinta"; break;
    case 6: echo "Sexta"; break;
    case 7: echo "Sábado"; break;
}
```

### 10. Vogal ou Consoante
```php
$letra = 'A';

if (in_array(strtolower($letra), ['a','e','i','o','u'])) {
    echo "Vogal";
} else {
    echo "Consoante";
}
```

### 11. Status do Pedido
```php
$status = "em_preparacao";

switch ($status) {
    case "aguardando": echo "Aguardando"; break;
    case "em_preparacao": echo "Preparando"; break;
    case "enviado": echo "Enviado"; break;
    case "concluido": echo "Concluído"; break;
}
```

---

## 🔁 Estruturas de Repetição

### 12. Contagem 1-10
```php
for ($i = 1; $i <= 10; $i++) {
    echo $i;
}
```

### 13. Números Pares
```php
for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 == 0) {
        echo $i;
    }
}
```

### 14. Tabuada
```php
$num = 5;

for ($i = 1; $i <= 10; $i++) {
    echo "$num x $i = " . ($num * $i);
}
```

### 15. Contagem Regressiva
```php
$i = 10;

while ($i >= 1) {
    echo $i;
    $i--;
}
```

### 16. Soma até 100
```php
$soma = 0;

for ($i = 1; $i <= 100; $i++) {
    $soma += $i;
}

echo $soma;
```

### 17. Sorteio Simples
```php
$tentativas = 0;

do {
    $num = rand(1,10);
    $tentativas++;
} while ($num != 5);

echo $tentativas;
```

---

## 📦 Arrays

### 18. Lista de Frutas
```php
$frutas = ["Maçã", "Banana", "Laranja", "Uva", "Abacaxi"];

foreach ($frutas as $fruta) {
    echo $fruta;
}
```

### 19. Soma de Array
```php
$numeros = [2,4,6,8,10];

echo array_sum($numeros);
```

### 20. Array Associativo
```php
$aluno = [
    "nome" => "João",
    "idade" => 22,
    "curso" => "Engenharia"
];

echo $aluno["nome"];
echo $aluno["idade"];
echo $aluno["curso"];
```

---

## 🚀 Objetivo

Praticar conceitos fundamentais de PHP:

- Variáveis
- Operadores
- Condicionais
- Loops
- Arrays

---

## 📌 Observação

Todos os códigos podem ser executados em qualquer ambiente com PHP instalado.
