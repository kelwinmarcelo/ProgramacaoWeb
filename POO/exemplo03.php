<?php

declare(strict_types=1);

class Documento
{
    private int $numero;

    public function getNumero(): int
    {
        return $this->numero;
    }

    public function setNumero(string $numero): void
    {
        if (!self::validarCPF($numero)) {
            throw new Exception("CPF informado não é válido");
        }

        $this->numero = (int) $numero;
    }

    public static function validarCPF(string $cpf): bool
    {
        if ($cpf === '') {
            return false;
        }

        $cpf = preg_match('/[0-9]/', $cpf) ? $cpf : '0';
        $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);

        if (strlen($cpf) !== 11) {
            return false;
        }

        if (in_array($cpf, [
            '00000000000',
            '11111111111',
            '22222222222',
            '33333333333',
            '44444444444',
            '55555555555',
            '66666666666',
            '77777777777',
            '88888888888',
            '99999999999',
        ], true)) {
            return false;
        }

        for ($t = 9; $t < 11; $t++) {
            $d = 0;
            for ($c = 0; $c < $t; $c++) {
                $d += $cpf[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf[$c] !== (string) $d) {
                return false;
            }
        }

        return true;
    }//O método estático validarCPF valida se o CPF é válido ou não. Ele faz isso verificando o comprimento do CPF (deve ser 11 caracteres), e então verificando se o CPF está na lista de CPFs inválidos (00000000000, 11111111111, 22222222222, etc.). Finalmente, ele valida o CPF usando o algoritmo de validação de CPF. Se todas as verificações passarem, o método retorna true, indicando que o CPF é válido. Caso contrário, o método retorna false, indicando que o CPF não é válido.
}

$cpf = new Documento();
$cpf->setNumero('132165464');

var_dump($cpf->getNumero());
