<?php
/*
  Name:
  Date:
*/

/*
Ridiculous Movie Title & Summary Generator (Completed Version)
- Uses user input, random values, arrays, conditionals, and logic
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

// 🧪 Mini-Challenge 1: Roll for Traits
function rollTraits() {
    echo "Hit Enter to roll Action (range: 6-88)..."; readline();
    $action = rand(6, 88);
    echo "Hit Enter to roll Romance (range: 1-36)..."; readline();
    $romance = rand(1, 36);
    echo "Hit Enter to roll Weirdness (range: 1-42)..."; readline();
    $weirdness = rand(1, 42);

    return ["Action" => $action, "Romance" => $romance, "Weirdness" => $weirdness];
}

// 🧪 Mini-Challenge 2: Assign Genre Based on Traits
function assignGenre($traits) {
    $action = $traits["Action"];
    $romance = $traits["Romance"];
    $weirdness = $traits["Weirdness"];

    if ($action > 80) {
        return "Action";
    } elseif ($romance > 30 && $action < 40) {
        return "Rom-Com";
    } elseif ($weirdness > 35 && $romance < 15) {
        return "Absurdist Horror";
    } elseif ($action >= 30 && $action <= 60 && $romance >= 10 && $romance <= 25 && $weirdness >= 10 && $weirdness <= 25) {
        return "Slice of Life Documentary";
    } else {
        return "Experimental Indie Film";
    }
}

// 🧪 Mini-Challenge 3: Choose a Setting
function chooseSetting() {
    $settings = ["Space Diner", "Underwater Castle", "Haunted Library", "Cyberpunk City", "Post-Apocalyptic Farm"];
    return $settings[array_rand($settings)];


    echo "Choose a setting for your movie:\n\n";
for ($i = 0; $i < count($settings); $i++) {
    echo ($i + 1) . ". " . $settings[$i] . "\n";
}

// Step 3: Prompt the user to make a selection
echo "\nEnter the number of your chosen setting: ";
$choice = trim(fgets(STDIN));

// Step 4: Determine which setting was chosen or use a default
if (is_numeric($choice) && $choice >= 1 && $choice <= count($settings)) {
    $selectedSetting = $settings[$choice - 1];
} else {
    $selectedSetting = "Mysterious Unknown Location"; // default fallback
}
}

// 🧪 Mini-Challenge 4: Add a Plot Twist
function getPlotTwist() {
    $twists = [
        "Time travel is involved",
        "Aliens crash the party",
        "Everyone is a clone",
        "The hero is actually a villain",
        "A musical number saves the day"
    ];
    return $twists[array_rand($twists)];
}

// 🧪 Mini-Challenge 5: Choose a Sidekick
function getSidekick($genre) {
    switch ($genre) {
        case "Action":
            return "grizzled veteran with a jetpack";
        case "Rom-Com":
            return "ex who won’t leave";
        case "Absurdist Horror":
            return "hallucinated talking banana";
        case "Slice of Life Documentary":
            return "nosy neighbor with a drone";
        default:
            return "sarcastic AI toaster";
    }
}

// 🧪 Mini-Challenge 6: Generate a Title
function generateTitle($genre, $setting, $traits) {
    $words1 = ["Unbelievable", "Revenge", "Chronicles", "Legend", "Echo"];
    $words2 = ["Madness", "Rebellion", "Rescue", "Apocalypse", "Whispers"];
    $part1 = $words1[array_rand($words1)];
    $part2 = $words2[array_rand($words2)];
    return "$part1 $part2 of the $genre in the $setting";
}

// 🧪 Mini-Challenge 7: Print Full Summary
function printSummary($movie) {
    echo "\n🎬 MOVIE SUMMARY 🎬\n";
    echo "Title: {$movie["title"]}\n";
    echo "Starring: {$movie["hero"]}\n";
    echo "Genre: {$movie["genre"]}\n";
    echo "Setting: {$movie["setting"]}\n";
    echo "Sidekick: {$movie["sidekick"]}\n";
    echo "Twist: {$movie["twist"]}\n";
    echo "Traits: Action ({$movie["traits"]["Action"]}), Romance ({$movie["traits"]["Romance"]}), Weirdness ({$movie["traits"]["Weirdness"]})\n\n";

    if ($movie["tone"] == "epic") {
        echo "An epic journey where destiny is written in the stars and battles rage for eternity.\n";
    } elseif ($movie["tone"] == "silly") {
        echo "A laugh-out-loud romp through a world where nothing makes sense and everything explodes confetti.\n";
    } elseif ($movie["tone"] == "dark") {
        echo "A shadowy tale of betrayal, loss, and redemption in a world that forgot how to hope.\n";
    } else {
        echo "A unique story that defies categorization, just like your movie!\n";
    }
}

// 📽️ Main Program Flow
$movie["traits"] = rollTraits();
$movie["genre"] = assignGenre($movie["traits"]);
$movie["setting"] = chooseSetting();
$movie["twist"] = getPlotTwist();
$movie["sidekick"] = getSidekick($movie["genre"]);
$movie["title"] = generateTitle($movie["genre"], $movie["setting"], $movie["traits"]);
printSummary($movie);
?>

