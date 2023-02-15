<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Formulário de Empregado da Faculdade</title>
</head>

<body>

    <?php

    class EmpregadoFaculdade
    {
        private string $nome;
        private $salario;
        private $horasAula;

        public function getNome(): string
        {
            return $this->nome;
        }
        function getGastos()
        {
            $bonus = 40 * $this->horasAula;
            return $this->salario + $bonus;
        }
        function getInfo()
        {
            return "Nome: " . $this->nome . " com salario " . $this->getGastos();
        }


        public function __construct(string $nome, $salario, $horasAula)
        {
            $this->nome = $nome;
            $this->salario = $salario;
            $this->horasAula = $horasAula;
        }
        //!!!!!!!! Não é obrigatório ter um método construtor em uma classe, mas ele é útil porque permite inicializar as propriedades do objeto assim que ele é criado. Sem um construtor, as propriedades precisariam ser inicializadas manualmente antes de serem usadas. O construtor também permite passar parâmetros para a instanciação do objeto, o que pode ser útil para personalizar suas propriedades. Além disso, ele pode ser usado para realizar qualquer outra operação necessária no momento da criação do objeto, como abrir conexões de banco de dados, registrar logs, etc. Em resumo, o construtor é uma forma conveniente de garantir que um objeto seja criado de maneira correta e pronta para uso.!!!!!!!!!!!!!!

    }
    if (isset($_POST["submit"])) {
        $empregado = new EmpregadoFaculdade($_POST["name"], $_POST["salary"], $_POST["lectureHours"]);
        echo $empregado->getInfo();

        // O formulário HTML tem três campos: nome, salario e horasAula. Quando o formulário é enviado, o PHP verifica se o botão submit foi pressionado usando o isset($_POST["submit"]). Se sim, ele cria um novo objeto EmpregadoFaculdade com os dados enviados pelo formulario
    } else {
    ?>

        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
            <p>
                <label for="name">Nome:</label>
                <input type="text" name="name" id="name">
            </p>
            <p>
                <label for="salary">Salário:</label>
                <input type="number" name="salary" id="salary">
            </p>
            <p>
                <label for="lectureHours">Horas de Aula:</label>
                <input type="number" name="lectureHours" id="lectureHours">
            </p>
            <p>
                <input type="submit" name="submit" value="Enviar">
            </p>
        </form>

    <?php
    }
    ?>

</body>

</html>