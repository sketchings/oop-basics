<?php

$recipe1 = new Recipe("Belgium Waffles");

$recipe1->setIngredients([
    [
        "ingredient" => "egg",
        "amount" => "1",
        "measure" => null
    ],
    [
        "ingredient" => "sugar",
        "amount" => "1/2",
        "measure" => "Cup"
    ]
]);
$recipe1->addIngredient("melted butter","1","Cup");
$recipe1->addIngredient("vanilla","2","tsp");
$recipe1->addIngredient("baking powder","1","Tbs");
$recipe1->addIngredient("flour","2","Cups");
$recipe1->addIngredient("milk","1 1/2","Cups");

$recipe1->addInstruction("Separate eggs. Whip egg whites until stiff peaks form. Set asside.");
$recipe1->addInstruction("Melt butter. Combine the rest of the ingredients except milk and mix well. Slowly add milk until combined.");
$recipe1->addInstruction("Fold in egg whites. Follow instructions on waffle maker or add 1/2 cup of batter to waffle iron and cook for 4 minutes.");

$recipe1->setYield("4 one cup servings");
$recipe1->setTags("breakfast");

$recipe2 = new Recipe("Italian Lemon Chicken");

$recipe2->addIngredient("Pasta, boiled","1","lbs");
$recipe2->addIngredient("Chicken Breast","2","lbs");
$recipe2->addIngredient("olive oil","1/2","Cup");
$recipe2->addIngredient("chopped garlic","2","Tbls");
$recipe2->addIngredient("lemon juice","1/4","Cup");
$recipe2->addIngredient("sugar","1/2","tsp");
$recipe2->addIngredient("parsley","2","tsp");
$recipe2->addIngredient("oregano","2","tsp");
$recipe2->addIngredient("basil","1","Tbls");
$recipe2->addIngredient("parmesian cheese to taste");

$recipe2->addInstruction("In a large skillet on medium high heat, saute garlic in olive oil for 3 minutes. Cut chicken into bite sized pieces.");
$recipe2->addInstruction("Add additional ingredients to sauce pan and cover for 5 minutes or untill chicken is almost completely white.");
$recipe2->addInstruction("Remove lid and cook until reduced to a thick sauce.");
$recipe2->addInstruction("Serve over pasta with ".$recipe2->getLastIngredient());

$recipe2->setYield("6 Servings");
$recipe2->setTags(["Main Dish", "Dinner"]);
