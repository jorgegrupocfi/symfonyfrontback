<?php

namespace My\RecipesBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class Recipe {
	
	private $id;
	protected $name;
	protected $difficulty;
	protected $description;
	protected $author;
	protected $ingredients;
	
	public function __construct(Author $author, $name, $difficulty, $description) {
		
		$this->author = $author;
		$this->name = $name;
		$this->description = $description;
		$this->difficulty = $difficulty;
		$this->ingredients = new ArrayCollection();
	}

	public function add(Ingredient $ingredient){
		$this->ingredients[] = $ingredient;
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
     * @return Recipe
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
     * Set difficulty
     *
     * @param string $difficulty
     *
     * @return Recipe
     */
    public function setDifficulty($difficulty)
    {
        $this->difficulty = $difficulty;

        return $this;
    }

    /**
     * Get difficulty
     *
     * @return string
     */
    public function getDifficulty()
    {
        return $this->difficulty;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Recipe
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set author
     *
     * @param \My\RecipesBundle\Entity\Author $author
     *
     * @return Recipe
     */
    public function setAuthor(\My\RecipesBundle\Entity\Author $author = null)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return \My\RecipesBundle\Entity\Author
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Add ingredient
     *
     * @param \My\RecipesBundle\Entity\Ingredient $ingredient
     *
     * @return Recipe
     */
    public function addIngredient(\My\RecipesBundle\Entity\Ingredient $ingredient)
    {
        $this->ingredients[] = $ingredient;

        return $this;
    }

    /**
     * Remove ingredient
     *
     * @param \My\RecipesBundle\Entity\Ingredient $ingredient
     */
    public function removeIngredient(\My\RecipesBundle\Entity\Ingredient $ingredient)
    {
        $this->ingredients->removeElement($ingredient);
    }

    /**
     * Get ingredients
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIngredients()
    {
        return $this->ingredients;
    }
}
