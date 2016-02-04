<?php
class Recipe {
    private $title = "";
    private $ingredients = array();
    private $instructions = array();
    private $yield = "";
    private $tags = array();

    public function __construct($title)
    {
        $this->setTitle($title);
    }


    public function getTitle()
    {
        return $this->title;
    }
    public function setTitle($title)
    {
        $this->title = mb_convert_case($title, MB_CASE_TITLE, "UTF-8");
    }


    public function getIngredientCount()
    {
        return count($this->getIngredientsArray());
    }
    public function getLastIngredient()
    {
        return $this->getIngredientsArray()[$this->getIngredientCount()-1]["ingredient"];
    }
    function getIngredients()
    {
        return $this->getIngredientsArray();
    }
    public function getIngredientsParagraphs()
    {
        $output = "";
        foreach ($this->ingredients as $i) {
            var_dump($i);
            $output .= "<p>" . $i["amount"] . " " . $i["measure"] . " " .$i["ingredient"] ."</p>";
        }
        return $output;
    }
    public function getIngredientsList()
    {
        $output = "<ul>";
        foreach ($this->ingredients as $i) {
            $output .= "<li>" . $i["amount"] . " " . $i["measure"] . " " . $i["ingredient"] ."</li>";
        }
        $output .= "</ul>";
        return $output;
    }
    public function getIngredientsArray()
    {
        return $this->ingredients;
    }
    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;
    }
    public function addIngredient($ingredient, $amount = null, $measure = null)
    {
        $this->ingredients[] = array(
            "amount" => $amount,
            "measure" => $measure,
            "ingredient" => ucwords($ingredient)
        );
    }


    public function getInstructions()
    {
        return $this->getInstructionsArray();
    }
    public function getInstructionsParagraphs()
    {
        return "<p>" . implode("</p><p>",$this->instructions) . "</p>";
    }
    public function getInstructionsList()
    {
        return "<ol><li>" . implode("</li><li>",$this->instructions) . "</li></ol>";
    }
    public function getInstructionsArray()
    {
        return $this->instructions;
    }
    public function setInstructions($instructions)
    {
        $this->instructions = $instructions;
    }
    public function addInstruction($instruction)
    {
        $this->instructions[] = $instruction;
    }


    public function getYield()
    {
        return $this->yield;
    }
    public function setYield($yield)
    {
        $this->yield = $yield;
    }


    public function getTags()
    {
        return $this->getTagsArray();
    }
    public function getTagsString()
    {
        return implode(",",$this->tags);
    }
    public function getTagsList()
    {
        return "<ol><li>" . implode("</li><li>",$this->tags) . "</li></ol>";
    }
    public function getTagsArray()
    {
        return $this->tags;
    }
    public function setTags($tags)
    {
        if (is_array($tags)) {
            $this->tags = $tags;
        } else {
            $this->tags = explode(",",ucwords($tags));
        }
    }
    public function addTag($tags)
    {
        $this->tags[] = $tags;
    }


    public function displayRecipe()
    {
        $output = "<h2>" . $this->getTitle() ."</h2>";
        $output .= "<p><em>" . $this->getTagsString() . "</em></p>";
        $output .= $this->getIngredientsList();
        $output .= $this->getInstructionsParagraphs();
        $output .= "<p>Yield: <em>" . $this->getYield() . "</em></p>";
        return $output;
    }
}
