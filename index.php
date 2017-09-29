<?php
include 'vendor/autoload.php';

\Doctrine\Common\Annotations\AnnotationRegistry::registerLoader(function ($className) {
    return class_exists($className);
});

$Validator = \Symfony\Component\Validator\Validation::createValidatorBuilder()->enableAnnotationMapping()
                                                                              ->getValidator();

echo (new Renan\Inicio($Validator))->run();
