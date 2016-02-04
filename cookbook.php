<?php
include("classes/recipe.php");
include("classes/recipecollection.php");
include("recipes.php");

$cookbook = new RecipeCollection("Favorite Recipes");

$cookbook->addRecipe($recipe1);
$cookbook->addRecipe($recipe2);

$meal_plan = new RecipeCollection();
$meal_plan->addRecipe($recipe1);

echo "<h1>".$cookbook->getTitle()."</h1>";
echo "<p>This collection contains the following " . $cookbook->getRecipeCount() . " recipes:</p>";
echo $cookbook->getRecipeList($cookbook->getRecipes());

foreach ($cookbook->getRecipes() as $recipe) {
    echo $recipe->displayRecipe();
}


echo "<h1>Shopping List</h1>";
echo $cookbook->shoppingList();

