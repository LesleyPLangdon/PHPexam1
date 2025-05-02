<?php

// Mini-Challenge 1: Generate a Character Name
function generateCharacterName() {
    $name = readline("Enter a name for your character: ");
    $adjective = readline("Enter an adjective for your character: ");
    $suffixes = ["The Great", "The Magnificent", "The Bold", "The Terrible", "The Invincible"];
    $suffix = $suffixes[array_rand($suffixes)];
    return $adjective . " " . $name . " " . $suffix;
}

// Mini-Challenge 2: Choose a Setting
function chooseSetting() {
    echo "Choose your setting:\n";
    echo "1. Abandoned Shopping Mall\n";
    echo "2. Secret Moon Base\n";
    echo "3. DMV Waiting Room\n";
    echo "4. Haunted Ice Cream Truck\n";
    echo "5. Corporate Cloud Server Room\n";
    echo "6. Giant Hamster Wheel Arena\n";
    
    $choice = readline("Enter the number of your chosen setting: ");
    
    switch ($choice) {
        case "1":
            return "Abandoned Shopping Mall";
        case "2":
            return "Secret Moon Base";
        case "3":
            return "DMV Waiting Room";
        case "4":
            return "Haunted Ice Cream Truck";
        case "5":
            return "Corporate Cloud Server Room";
        case "6":
            return "Giant Hamster Wheel Arena";
        default:
            return "Mystery Location (Unknown Coordinates)";
    }
}

// Mini-Challenge 3: Pick a Key Object or Prop
function chooseProp() {
    echo "Pick a key object or prop for your movie:\n";
    echo "1. Sentient Fidget Spinner\n";
    echo "2. Flaming Briefcase\n";
    echo "3. Interdimensional Remote\n";
    echo "4. Rotisserie Chicken of Destiny\n";
    echo "5. Ancient Flip Phone\n";
    echo "6. Unstoppable Bubble Wand\n";
    
    $choice = readline("Enter the number of your chosen prop: ");
    
    switch ($choice) {
        case "1":
            return "Sentient Fidget Spinner";
        case "2":
            return "Flaming Briefcase";
        case "3":
            return "Interdimensional Remote";
        case "4":
            return "Rotisserie Chicken of Destiny";
        case "5":
            return "Ancient Flip Phone";
        case "6":
            return "Unstoppable Bubble Wand";
        default:
            return "Mysterious Object of Unknown Purpose";
    }
}

// Mini-Challenge 4: Roll for Traits
function generateTraits() {
    $action = rand(6, 88);
    $romance = rand(27, 50);
    $weirdness = rand(0, 14);

    echo "Action Level: $action\n";
    echo "Romance Level: $romance\n";
    echo "Weirdness Level: $weirdness\n";
    
    return [$action, $romance, $weirdness];
}

// Mini-Challenge 5: Assign a Genre
function assignGenre($action, $romance, $weirdness, $object) {
    if ($action > 70 && $weirdness < 5) {
        return "Explosive Action Thriller";
    } elseif ($romance > 40 && $object == "Flaming Briefcase") {
        return "Time-Travel Romance";
    } elseif ($weirdness > 10) {
        return "Absurdist Comedy";
    } elseif ($action < 20 && $romance < 30 && $object == "Ancient Flip Phone") {
        return "Quiet Indie Drama";
    } elseif ($object == "Interdimensional Remote" || $weirdness > 8) {
        return "Retro Sci-Fi Adventure";
    } else {
        return "Genre-Bending Experimental Film";
    }
}

// Mini-Challenge 6: Assign a Plot Twist
function assignPlotTwist($weirdness, $object) {
    if ($weirdness > 12) {
        return "It was all a simulation created by sentient vending machines.";
    }

    $random = rand(1, 5);
    switch ($random) {
        case 1:
            return "A duplicate version of the hero appears from another dimension.";
        case 2:
            return "Everyone is suddenly allergic to electricity.";
        case 3:
            return "The object turns out to be an ancient alien artifact.";
        case 4:
            return "It all takes place inside a snow globe.";
        case 5:
        default:
            return "The villain is revealed to be a future version of the main character.";
    }
}

// Mini-Challenge 7: Add a Sidekick
function assignSidekick() {
    $creature = readline("Choose a creature type for your sidekick (e.g., dragon, sloth, unicorn): ");
    
    $random = rand(1, 5);
    switch ($random) {
        case 1:
            $role = "a grumpy but lovable companion.";
            break;
        case 2:
            $role = "a wise old mentor with cryptic advice.";
            break;
        case 3:
            $role = "an enthusiastic sidekick who loves food.";
            break;
        case 4:
            $role = "a quiet observer who knows everything.";
            break;
        case 5:
        default:
            $role = "a fierce protector who is always ready for battle.";
            break;
    }

    return "Your sidekick is a $creature, $role";
}

// Mini-Challenge 8: Generate a Ridiculous Movie Title
function generateMovieTitle() {
    $adjective = readline("Enter an adjective for your movie title (e.g., Exploding, Sleepy): ");
    $noun = readline("Enter a noun for your movie title (e.g., Toaster, Marshmallow): ");
    
    $format = rand(1, 5);
    
    switch ($format) {
        case 1:
            $title = "The $adjective $noun";
            break;
        case 2:
            $title = "$adjective $noun: A Reckoning";
            break;
        case 3:
            $title = "Return of the $adjective $noun";
            break;
        case 4:
            $title = "Revenge of the $adjective $noun";
            break;
        case 5:
        default:
            $title = "$adjective $noun vs. The World";
            break;
    }

    return $title;
}

// Main Script to Run All Functions and Generate the Movie Plot
$characterName = generateCharacterName();
$setting = chooseSetting();
$prop = chooseProp();
list($action, $romance, $weirdness) = generateTraits();
$genre = assignGenre($action, $romance, $weirdness, $prop);
$plotTwist = assignPlotTwist($weirdness, $prop);
$sidekick = assignSidekick();
$movieTitle = generateMovieTitle();

// Final Movie Pitch
echo "\n🎬 Ridiculous Movie Pitch:\n";
echo "Title: $movieTitle\n";
echo "Character: $characterName\n";
echo "Setting: $setting\n";
echo "Key Object: $prop\n";
echo "Genre: $genre\n";
echo "Plot Twist: $plotTwist\n";
echo "Sidekick: $sidekick\n";

?>
