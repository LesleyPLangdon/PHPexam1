<?php
/*
    Name: 
    Date: 
*/
/*
Character Creator Starter Code
This program will help the user generate a quirky and creative character profile
Each section below is a mini-challenge that come together to form a complete character
*/
/*
// 🧠 Mini-Challenge: Assign a Career Based on Stats
// Create a function that chooses a career based on combinations of the user's stats and chosen item.
// Use if/else or switch statements to create funny or surprising career paths.
*/
function assignCareer($charisma, $focus, $weirdness, $item) {
    if ($charisma >= 8 && $item === "Rubber Duck") {
        return "Professional Motivational Dancer";
    }

    // TODO: Add at least 5 elseif conditions here

    else {
        return "Quantum Vibes Analyst"; // default
    }
}
/*
// 🧠 Mini-Challenge: Rolling for Character Stats
// Create a function that rolls a die for a given stat (like Charisma, Focus, or Weirdness).
// Use PHP's rand() function to simulate a dice roll.
*/
function rollDie($traitName, $sides) {
    
    // TODO: Roll a random number between 1 and $sides
    // TODO: Display the result and return it
}

// TODO: After the function, prompt the user to press Enter before each trait roll.

// $charisma = ;
// $focus = ;
// $weirdness = ;


/*
// 🧠 Mini-Challenge: Pick Your Signature Item
// Ask the user to choose from a list of items. Return the one they select.
// You can use readline() to get input from the user.
*/
function chooseItem() {
    // TODO: Display a list of signature items
    // TODO: Get user input (number or name)
    // TODO: Use a switch statement to return the selected item
}
// TODO: Echo the chosen item for testing. You will display the item in final output in a later step

/*
// 🧠 Mini-Challenge: Assign a Work Location
// Based on the signature item, assign the character a workplace.
// This function can be a simple if/else tree or a switch statement.
*/
function assignWorkLocation($item) {
    // TODO: Match items to imaginative workplace locations
    // Example: "Rubber Duck" => "Interdimensional Post Office"
    // TODO: Return the work location
}
// TODO: Echo the work location for testing. You will display the work location in final output in a later step


/*
// 🧠 Mini-Challenge: Design Your Character’s Outfit
// Ask the user for input: primary color, accent color, and a style.
// Combine these into a fun outfit description.
*/
function createOutfit() {
    // TODO: Prompt for primary color and accent color
    // TODO: Ask the user to choose a style from a list
    // TODO: Return a sentence describing the outfit
}
// TODO: Echo the primary color, accent color, and style for testing. You will display the complete outfit description in final output in a later step
/*
// 🧠 Mini-Challenge: Name Your Character
// Ask the user for a first name and an adjective.
// Choose a random suffix from a list to complete the name.
*/
function generateName() {
    // TODO: Get first name and adjective from the user
    // TODO: Create a list of funny suffixes
    // TODO: Choose one randomly and return the full name
}
// TODO: Echo the complete name including adjective, first name, and suffix

/*
// 🎉 Final Output Section
// Once all parts are completed, put them together to display the full character profile

The output section has been provided for you. Remove the opening and closing multi-line comment characters from the section below and test your program.
*/
/*   REMOVE THIS LINE 
// TODO: Roll stats
$charisma = rollDie("Charisma", 12);
$focus = rollDie("Focus", 10);
$weirdness = rollDie("Weirdness", 20);

// TODO: Generate name
$name = generateName();

// TODO: Choose item
$item = chooseItem();

// TODO: Assign career
$career = assignCareer($charisma, $focus, $weirdness, $item);

// TODO: Design outfit
$outfit = createOutfit();

// TODO: Assign work location
$workLocation = assignWorkLocation($item);

// TODO: Print the full profile

echo "\n--- Character Profile ---\n";
echo "Name: $name\n";
echo "Charisma: $charisma\n";
echo "Focus: $focus\n";
echo "Weirdness: $weirdness\n";
echo "Career: $career\n";
echo "Outfit: $outfit\n";
echo "Signature Item: $item\n";
echo "Work Location: $workLocation\n";

REMOVE THIS LINE */
?>
