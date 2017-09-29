<?php

namespace Renan\Entity;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Entidade que representa uma pessoa
 *
 * @author Renan Delmonico <renandelmonico@gmail.com>
 */
class Pessoa
{
    /**
     * @Assert\NotBlank()
     */
    public $nome;

    /**
     * @Assert\Type(
     *     type="integer",
     *     message="The value {{ value }} is not a valid {{ type }}."
     * )
     */
    public $idade;

    /**
     * @Assert\NotNull()
     */
    public $sexo;
}
