<?php

namespace AppBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class ConstrainsNoNumeros extends Constraint
{
	public $message = 'Este campo solo puede contener letras y espacios.';
}