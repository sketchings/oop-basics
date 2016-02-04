<?php

class RecipeCollection {
    private $title = "";
    private $recipes = array();

    public function __construct($title = null)
    {
        if (!empty($title)){
            $this->title = ucwords($title);
        }
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getRecipes()
    {
        return $this->getRecipeArray();
    }
    public function getRecipeList($list = null)
    {
        if ($list == null) {
            $list = $this->recipes;
        }
        $output = "<ul>";
        foreach ($list as $r) {
            $output .= "<li>" . $r->getTitle(). " (".$r->getTagsString().")</li>";
        }
        $output .= "</ul>";
        return $output;
    }
    public function getRecipeArray()
    {
        return $this->recipes;
    }

    public function setRecipes($recipes)
    {
        if (is_array($recipes)) {
            $this->recipes = $recipes;
        } else {
            $this->recipes = explode(",",$recipes);
        }
    }
    public function addRecipe($recipe)
    {
        $this->recipes[] = $recipe;
    }

    public function getRecipeCount()
    {
        return count($this->recipes);
    }

    public function shoppingList(){
        $shopping_list = array();
        $output = "<ul>";
        foreach ($this->recipes as $recipe) {
            foreach ($recipe->getIngredientsArray() as $i) {
                $shopping_list[strtolower($i["ingredient"])][] = $i["amount"]." ".$i["measure"];
            }
        }
        ksort($shopping_list);
        foreach ($shopping_list as $i => $amount) {
            $output .= "<li>".ucwords($i).": ".implode(", ",$amount);
        }
        $output .= "</ul>";
        return $output;
    }
}