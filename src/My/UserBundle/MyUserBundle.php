<?php

namespace My\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class MyUserBundle extends Bundle
{
	
	//declare bundle as a child of the FOSUserBundle so we can override the parent bundle's templates
	public function getParent()
	{
		return 'FOSUserBundle';
	}
	
}
