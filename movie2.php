<?php
/*
    Name:
    Date:
*/

/*
Ridiculous Movie Title & Summary Generator
Generates a quirky movie title and plot summary using user input, random values,
arrays, conditionals, and logic.
*/

$movie = [
    "hero" => "Unknown",
    "tone" => "unspecified",
    "traits" => [],
    "genre" => "Undefined",
    "setting" => "Nowhere",
    "twist" => "Nothing happens",
    "sidekick" => "no one",
    "title" => "Untitled"
];

// 🧠 Get User Input
$movie["hero"] = readline("Enter your hero's name: ");
$movie["tone"] = strtolower(readline("Choose a tone (epic, silly, dark): "));

// 🧠 Mini-Challenge 1: Roll for Traits with Narrative Prompts
function rollTraits() {
    echo "\nLet's roll your movie's character traits. Each one is based on a pop culture reference.\n";

    // 🎬 Action Level
    echo "\nThe action movie genre spans wildly different subgenres — from espionage thrillers to sci-fi blockbusters.";
    echo "\nThere were 6 James Bond films starring the best Bond (Sean Connery, of course).";
    echo "\nMeanwhile, a DeLorean had to hit 88 mph to send Marty McFly *Back to the Future*.";
    readline("\nHit Enter to roll your movie's Action Level (between 6 and 88): ");
    $action = rand(6, 88);
    echo "🎬 Action Level: $action\n";

    // 💘 Romance Level
    echo "\nRomance can be complicated. Just ask the characters in *27 Dresses* and *50 First Dates*.";
    echo "\nThese two films also give us our range: from 27 to 50.";
    readline("\nHit Enter to roll your movie's Romance Level (between 27 and 50): ");
    $romance = rand(27, 50);
    echo "💘 Romance Level: $romance\n";

    // 🌀 Weirdness Level
    echo "\nWeirdness is hard to quantify — unless you're *Weird Al* Yankovic.";
    echo "\nHe's released 14 studio albums, and that’s our top-tier weirdness.";
    readline("\nHit Enter to roll your movie's Weirdness Level (between 0 and 14): ");
    $weirdness = rand(0, 14);
    echo "🌀 Weirdness Level: $weirdness\n";

    return [
        "Action" => $action,
        "Romance" => $romance,
        "Weirdness" => $weirdness
    ];
}


// 🧠 Mini-Challenge 2: Determine Genre
function assignGenre($traits) {
    $action = $traits["Action"];
    $romance = $traits["Romance"];
    $weirdness = $traits["Weirdness"];

    if ($weirdness >= 10) {
        return "Fantasy";
    } elseif ($romance >= 45 && $action < 30) {
        return "Rom-Com";
    } elseif ($action >= 70) {
        return "Action";
    } elseif ($weirdness >= 7 && $romance < 30) {
        return "Conspiracy Thriller";
    } else {
        return "Slice of Life Documentary";
    }
}

// 🧠 Mini-Challenge 3: Choose a Setting
function chooseSetting() {
    $settings = ["Space Diner", "Underwater Castle", "Mini Golf Course", "Haunted Library", "Floating School Bus"];

    echo "Choose your setting:\n";
    for ($i = 0; $i < count($settings); $i++) {
        echo ($i + 1) . ". " . $settings[$i] . "\n";
    }

    $choice = (int)readline("Enter the number: ");
    return $settings[$choice - 1] ?? "The Abyss of Bad Choices";
}

// 🧠 Mini-Challenge 4: Add a Plot Twist
function getPlotTwist() {
    $twists = ["Everyone is secretly a ghost", "Time travel is involved", "Aliens crash the party", "It was all a dream", "The villain is a chicken"];

    echo "Possible plot twists:\n";
    foreach ($twists as $twist) {
        echo "- $twist\n";
    }

    return $twists[array_rand($twists)];
}

// 🧠 Mini-Challenge 5: Choose a Sidekick
function getSidekick($genre) {
    switch ($genre) {
        case "Fantasy":
            return "a sarcastic dragon";
        case "Action":
            return "a retired stunt double";
        case "Conspiracy Thriller":
            return "a talking briefcase";
        case "Rom-Com":
            return "an ex who won’t leave";
        default:
            return "a confused squirrel";
    }
}

// 🧠 Mini-Challenge 6: Generate Movie Title
function generateTitle($genre, $setting, $traits) {
    $adjectives = ["Incredible", "Unbelievable", "Terrifying", "Unexpected", "Legendary"];
    $nouns = ["Journey", "Mistake", "Adventure", "Revenge", "Love Story"];

    return "{$adjectives[array_rand($adjectives)]} {$nouns[array_rand($nouns)]} of the $genre in the $setting";
}

// 🧠 Mini-Challenge 7: Output Full Summary
function printSummary($movie) {
    echo "\n--- 📝 Movie Summary ---\n";
    echo "🎬 Title: {$movie['title']}\n";
    echo "🎭 Genre: {$movie['genre']}\n";
    echo "📍 Setting: {$movie['setting']}\n";
    echo "🦸 Hero: {$movie['hero']}\n";
    echo "💥 Traits:\n";
    foreach ($movie['traits'] as $trait => $value) {
        echo "   - $trait: $value\n";
    }
    echo "🌀 Plot Twist: {$movie['twist']}\n";
    echo "🧍 Sidekick: {$movie['sidekick']}\n";

    echo "\n📖 Summary:\n";

    if ($movie["tone"] === "epic") {
        echo "In the {$movie['setting']}, the legendary {$movie['hero']} must conquer fears and embrace their destiny.\n";
        echo "With {$movie['sidekick']} at their side and {$movie['twist']} in their path, it's a tale of glory that spans galaxies.\n";
    } elseif ($movie["tone"] === "silly") {
        echo "{$movie['hero']} stumbles into the {$movie['setting']} and things spiral fast.\n";
        echo "Between {$movie['twist']} and {$movie['sidekick']}, this movie might just be the weirdest comedy ever made.\n";
    } elseif ($movie["tone"] === "dark") {
        echo "Beneath the surface of the {$movie['setting']} lies a secret known only to {$movie['hero']}.\n";
        echo "{$movie['twist']} changes everything, and not even {$movie['sidekick']} can stop what’s coming.\n";
    } else {
        echo "{$movie['hero']} goes on a walk. They do not pick a tone. They do not follow directions.\n";
        echo "In the {$movie['setting']}, with {$movie['sidekick']} by their side, they explore the meaning of mediocrity.\n";
        echo "A movie only a film student could love. This is... *{$movie['title']}*.\n";
        return;
    }

    echo "This is... *{$movie['title']}*.\n";
}

// 🎉 Final Program Flow
$movie["traits"] = rollTraits();
$movie["genre"] = assignGenre($movie["traits"]);
$movie["setting"] = chooseSetting();
$movie["twist"] = getPlotTwist();
$movie["sidekick"] = getSidekick($movie["genre"]);
$movie["title"] = generateTitle($movie["genre"], $movie["setting"], $movie["traits"]);

printSummary($movie);
?>
