<?php


function dd($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

$notes = [
    ['id' => 1, 'body' => 'Learn PHP Basics', 'user_id' => 1],
    ['id' => 2, 'body' => 'Master Laracasts', 'user_id' => 1],
    ['id' => 3, 'body' => 'Build something great', 'user_id' => 2],
];

$filteredNotes = array_filter($notes, function($note) {
    return $note['user_id'] === 1; 
});


$uri = $_SERVER['REQUEST_URI'];

$heading = "Home";
if ($uri === '/about') $heading = "About Us";
if ($uri === '/contact') $heading = "Contact";
if ($uri === '/notes') $heading = "My Notes";

?>


<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <title>PHP for Beginners</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full">
    <div class="min-h-full">
        <nav class="bg-gray-800 p-4">
            <div class="flex space-x-4 text-white">
                <a href="/" class="<?= $uri === '/' ? 'bg-gray-900 text-white' : 'text-gray-300' ?> px-3 py-2 rounded">Home</a>
                <a href="/notes" class="<?= $uri === '/notes' ? 'bg-gray-900 text-white' : 'text-gray-300' ?> px-3 py-2 rounded">Notes</a>
                <a href="/about" class="<?= $uri === '/about' ? 'bg-gray-900 text-white' : 'text-gray-300' ?> px-3 py-2 rounded">About</a>
            </div>
        </nav>

        <header class="bg-white shadow">
            <div class="mx-auto max-w-7xl px-4 py-6">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900"><?= $heading ?></h1>
            </div>
        </header>

        <main>
            <div class="mx-auto max-w-7xl py-6 px-8">
                <?php if ($uri === '/notes') : ?>
                    <ul class="list-disc">
                        <?php foreach ($filteredNotes as $note) : ?>
                            <li class="mb-2 text-blue-600 hover:underline">
                                <?= htmlspecialchars($note['body']) ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php else : ?>
                    <p>Welcome to the <?= $heading ?> page.</p>
                <?php endif; ?>
            </div>
        </main>
    </div>
</body>
</html>