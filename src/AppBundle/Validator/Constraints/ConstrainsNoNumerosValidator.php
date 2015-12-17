<?php

namespace AppBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class ConstrainsNoNumerosValidator extends ConstraintValidator
{
	public function validate($value, Constraint $constraint)
	{
		if (!preg_match('/^[a-zA-Z ]+$/', $value, $matches) && !empty($value) ) {
			// If you're using the new 2.5 validation API (you probably are!)
			$this->context->buildViolation($constraint->message)
			->setParameter('%string%', $value)
			->addViolation();
		}
	}
}