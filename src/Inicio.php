<?php

namespace Renan;

use Symfony\Component\Validator\Validator\RecursiveValidator;

/**
 * Essa classe mostra como validar uma entidade usando o Symfony
 *
 * @author Renan Delmonico <renandelmonico@gmail.com>
 */
class Inicio
{
    /**
     * Doctrine Validator
     *
     * @var RecursiveValidator
     */
    private $Validator;

    /**
     * Metodo construtor
     *
     * @param RecursiveValidator $Validator
     */
    public function __construct(RecursiveValidator $Validator)
    {
        $this->Validator = $Validator;
    }

    /**
     * Metodo de teste para validacao da entidade pessoa
     *
     * @return string
     */
    public function run():string
    {
        $Teste = new Entity\Pessoa;
        $Teste->nome = 'Renan';
        $Teste->idade = 22;
        //$Teste->sexo = 'M';

        $errors = $this->Validator->validate($Teste);

        if (count($errors)) {
            (string) $message;
            foreach ($errors as $error) {
                $message .= $error->getMessage() . '<br>';
            }

            return $message;
        }

        return 'OK!';
    }
}
