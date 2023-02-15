<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Notas-Alunos</title>
</head>

<body>
    <?php

    class NotasAlunos
    {
        private $nome;
        private $matricula;
        private $notaAV1;
        private $notaAV2;
        private $notaAE;
        private $curso;
        private $periodo;


        public function __construct($nome, $matricula, $notaAV1, $notaAV2, $curso, $periodo)
        {
            $this->nome = $nome;
            $this->matricula = $matricula;
            $this->notaAV1 = $notaAV1;
            $this->notaAV2 = $notaAV2;
            $this->notaAE = null;
            $this->curso = $curso;
            $this->periodo = $periodo;
        }
        // só é possível utilizar métodos de objetos ja iniciados. Por isso utilizamos o construtor. 
        public function setNotaAV1($notaAV1): self
        {
            $this->notaAV1 = $notaAV1;
            return $this;
        }
        public function setNotaAV2($notaAV2): self
        {
            $this->notaAV2 = $notaAV2;
            return $this;
        }
        public function setNotaAE($notaAE): self
        {
            $this->notaAE = $notaAE;
            return $this;
        }
        public function avaliarAluno($notaAV1, $notaAV2)
        {
            return ($notaAV1 + $notaAV2 >= 60) ? "Aprovado!" : "Recuperação!";
        }

        public function avaliarRecuperacao($notaAV1, $notaAV2, $notaAE)
        {
            if (($notaAV1 + $notaAV2 + $notaAE) / 3 >= 60) {
                return "Aprovado!";
            } else {
                return "Reprovado!";
            }
        }


        public function getNotaAV1()
        {
            return $this->notaAV1;
        }


        public function getNotaAV2()
        {
            return $this->notaAV2;
        }

        public function getNotaAE()
        {
            return $this->notaAE;
        }
    }
    // uma outra forma de fazer seria utilizando a sintaxe SE:SENÃO abaixo

    // public function avaliarRecuperacao($notaAV1, $notaAV2, $notaAE)
    // {
    //     $media = ($notaAV1 + $notaAV2 + $notaAE) / 3;
    //     return $media >= 60 ? "Aprovado" : "Reprovado";
    // }
    if (isset($_POST["submit"])) {

        $aluno = new NotasAlunos($_POST["name"], $_POST["matricula"], $_POST["av1"], $_POST["av2"],  $_POST["curso"], $_POST["periodo"]);
        $total = $aluno->getNotaAV1() + $aluno->getNotaAV2();

        if ($total >= 60) {
            echo "APROVADO";
        } else {

            if (($aluno->getNotaAV1() + $aluno->getNotaAV2()) < 60) {
                if (isset($_POST["submit2"])) {

                    $aluno->setNotaAE($_POST["ae"]);

                    if (($aluno->getNotaAE() + $aluno->getNotaAV1() + $aluno->getNotaAV2()) / 3 <= 60) {
                        echo "APROVADO!";
                    } else {
                        echo "REPROVADO!";
                    }
                    //$notaFinal = ($aluno->getNotaAE() + $aluno->getNotaAV1() + $aluno->getNotaAV2()) / 3; 
                } else {

    ?>
                    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                        <p>
                            <label for="ae">Nota AE:</label>
                            <input type="number" name="ae" id="ae">
                        </p>
                        <p>
                            <input type="submit" name="submit2" value="Enviar">
                            <input type="reset" value="Limpar" />
                <?php
                    //echo $aluno->avaliarAluno($aluno->getNotaAV1(), $aluno->getNotaAV2());
                }
                echo "A nota da AV1 é: " . $aluno->getNotaAV1() . "<br/>";
                echo "A nota da AV2 é: " . $aluno->getNotaAV2();
            };
        }
    } else {
                ?>

                        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                            <p>
                                <label for="name">Nome:</label>
                                <input type="text" name="name" id="name">
                            </p>
                            <p>
                                <label for="matricula">Matricula:</label>
                                <input type="number" name="matricula" id="matricula">
                            </p>
                            <p>
                                <label for="av1">Nota AV1:</label>
                                <input type="number" name="av1" id="av1">
                            </p>
                            <p>
                                <label for="av2">Nota AV2:</label>
                                <input type="number" name="av2" id="av2">
                            </p>
                            <p>
                                <label for="curso">Curso:</label>
                                <input type="text" name="curso" id="curso">
                            </p>
                            <p>
                                <label for="periodo">Periodo:</label>
                                <input type="text" name="periodo" id="periodo">
                            </p>
                            <p>
                                <input type="submit" name="submit" value="Enviar">
                                <input type="reset" value="Limpar" />
                        </form>

                    <?php
                }
