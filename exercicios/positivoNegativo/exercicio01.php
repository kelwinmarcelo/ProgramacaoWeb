<!-- 1) - Crie um algoritmo que receba um número digitado pelo usuário e verifique se esse valor é positivo, negativo ou igual a zero. A saída deve ser: "Valor Positivo", "Valor Negativo" ou "Igual a Zero".
-->
<!-- <html>

<head>
    <title>EXERCICIO 01
    </title>
</head>

<body>
    <form name="f_cad" method="get" action="">
        <label>Nome: </label><br />
        <input type="text" name="f_nome" size="40" maxlength="30" /><br><br />

        <input type="submit" value="Enviar" />
        <input type="reset" value="Limpar" />
    </form>
</body>

</html> -->
<?php

$numero = $_GET["f_num"];

if ($numero > 0) {
    echo "O número " . $numero . " é POSITIVO!";
} else if ($numero < 0) {
    echo "O número " . $numero . " é NEGATIVO!";
} else {
    echo "O número " . $numero . " é neutro";
}
