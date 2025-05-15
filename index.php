# PHPexam1
<?php
// 🧠 Mini-Challenge: Rolling for Character Stats
function rollDie($traitName, $sides) {
    // Prompt the user to roll the die
    readline("Press Enter to roll for $traitName...");
    // Generate a random number between 1 and the number of sides
    $roll = rand(1, $sides);
    // Display the result
    echo "You rolled a $roll for $traitName!\n";
    // Return the rolled value
    return $roll;
}

// 🧠 Mini-Challenge: Assign a Career Based on Stats
function assignCareer($charisma, $focus, $weirdness, $item) {
    if ($charisma >= 8 && $item === "Rubber Duck") {
        return "Professional Motivational Dancer";
    } elseif ($weirdness >= 15 && $focus <= 5) {
        return "Unlicensed Sky Philosopher";
    } elseif ($focus >= 9 && $charisma <= 4) {
        return "Flavor Chemist for Cartoon Foods";
    } elseif ($charisma >= 10 || $weirdness >= 18) {
        return "Freelance Vibes Consultant";
    } elseif ($focus >= 7 && $weirdness >= 12) {
        return "Spicy Data Wrangler";
    } elseif ($item === "Singing Cactus Keychain" && $charisma >= 6) {
        return "Wizard of Email Organization";
    } else {
        return "Quantum Vibes Analyst"; // default
    }
}

// 🧠 Mini-Challenge: Pick Your Signature Item
function chooseItem() {
    // Display item options
    echo "Choose your signature item:\n";
    echo "1. Rubber Duck\n";
    echo "2. Crystalized Snack Wrapper\n";
    echo "3. Pocket Lint Analyzer\n";
    echo "4. Experimental Glitter Pen\n";
    echo "5. Singing Cactus Keychain\n";
    echo "6. Emotional Support Binder Clip\n";

    // Prompt user for selection
    $choice = readline("Enter the number of your chosen item: ");

    // Determine item based on user input
    switch ($choice) {
        case "1":
            return "Rubber Duck";
        case "2":
            return "Crystalized Snack Wrapper";
        case "3":
            return "Pocket Lint Analyzer";
        case "4":
            return "Experimental Glitter Pen";
        case "5":
            return "Singing Cactus Keychain";
        case "6":
            return "Emotional Support Binder Clip";
        default:
            // Return a surprise item for invalid input
            return "Haunted Stapler";
    }
}
echo "\n--- Signature Item Selected: " . chooseItem() . " ---\n";

// 🧠 Mini-Challenge: Assign a Work Location
function assignWorkLocation($item) {
    if ($item === "Rubber Duck") {
        return "Interdimensional Post Office";
    } elseif ($item === "Crystalized Snack Wrapper") {
        return "Haunted Coworking Space";
    } elseif ($item === "Pocket Lint Analyzer") {
        return "Mall Fountain Management Office";
    } elseif ($item === "Experimental Glitter Pen") {
        return "Secret Basement of the Library";
    } elseif ($item === "Singing Cactus Keychain") {
        return "Sky-Level Vending Machine Repair";
    } else {
        return "Department of Unclaimed Sandwiches";
    }
}

// 🧠 Mini-Challenge: Design Your Character’s Outfit
function createOutfit() {
    // Prompt user for outfit details
    $primaryColor = readline("Enter a primary color: ");
    $accentColor = readline("Enter an accent color: ");

    // Display style options
    echo "Choose a style:\n";
    echo "1. Formal\n";
    echo "2. Casual\n";
    echo "3. Beachwear\n";
    echo "4. Western\n";
    echo "5. Cyberpunk\n";
    echo "6. Pirate Chic\n";

    // Prompt user for style selection
    $styleChoice = readline("Enter the number of your chosen style: ");

    // Determine style based on user input
    switch ($styleChoice) {
        case "1":
            $style = "formal";
            break;
        case "2":
            $style = "casual";
            break;
        case "3":
            $style = "beachwear";
            break;
        case "4":
            $style = "western";
            break;
        case "5":
            $style = "cyberpunk";
            break;
        case "6":
            $style = "pirate chic";
            break;
        default:
            $style = "mystery";
            break;
    }

    // Construct and return outfit description
    return "A $style outfit featuring a $primaryColor base with $accentColor accents.";
}

// 🧠 Mini-Challenge: Name Your Character
function generateName() {
    // Prompt user for name components
    $firstName = readline("Enter a first name: ");
    $adjective = readline("Enter an adjective to describe your character: ");

    // Define possible suffixes
    $suffixes = [
        "Disruptor",
        "Noodler",
        "Confused",
        "Chaotic Neutral",
        "Snack Hoarder",
        "Former Intern",
        "Prophesied",
        "Just Here for the Vibes"
    ];

    // Select a random suffix
    $suffix = $suffixes[array_rand($suffixes)];

    // Construct and return full name
    return "$adjective $firstName the $suffix";
}

// 🎉 Final Output: Present Your Character

// Roll for character stats
$charisma = rollDie("Charisma", 12);
$focus = rollDie("Focus", 10);
$weirdness = rollDie("Weirdness", 20);

// Generate character name
$name = generateName();

// Choose signature item
$item = chooseItem();

// Assign career based on stats and item
$career = assignCareer($charisma, $focus, $weirdness, $item);

// Design outfit
$outfit = createOutfit();

// Assign work location based on item
$workLocation = assignWorkLocation($item);

// Display character profile
echo "\n--- Character Profile ---\n";
echo "Name: $name\n";
echo "Charisma: $charisma\n";
echo "Focus: $focus\n";
echo "Weirdness: $weirdness\n";
echo "Career: $career\n";
echo "Outfit: $outfit\n";
echo "Signature Item: $item\n";
echo "Work Location: $workLocation\n";
?>

