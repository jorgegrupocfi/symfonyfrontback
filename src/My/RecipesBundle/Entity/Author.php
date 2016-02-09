<?php

namespace My\RecipesBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use AppBundle\Validator\Constraints as AuthorAssert;

class Author {
	
	private $id;
	
	/**
	 * @Assert\NotBlank()
	 * @AuthorAssert\ConstrainsNoNumeros
	 * )
	 */
	protected $name;
	
	/**
	 * @Assert\NotBlank(
	 * 		message="El apellido del autor no puede estar vacío."
	 * )
	 */
	protected $surname;
	
	protected $recipes;
	
	public function __construct($name = NULL, $surname = NULL) {
		$this->name = $name;
		$this->surname = $surname;
	}
	
	public function getRecipes() {
		return $this->recipes;
	}
	
    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Author
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set surname
     *
     * @param string $surname
     *
     * @return Author
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }
    
    /**
     * Get name + surname
     *
     * @return string
     */
    
    public function getNombreApellidos()
    {
    	return $this->name . ' ' . $this->surname;
    }
    
    /**
     * Add recipe
     *
     * @param \My\RecipesBundle\Entity\Recipe $recipe
     *
     * @return Author
     */
    public function addRecipe(\My\RecipesBundle\Entity\Recipe $recipe)
    {
        $this->recipes[] = $recipe;

        return $this;
    }

    /**
     * Remove recipe
     *
     * @param \My\RecipesBundle\Entity\Recipe $recipe
     */
    public function removeRecipe(\My\RecipesBundle\Entity\Recipe $recipe)
    {
        $this->recipes->removeElement($recipe);
    }
}
