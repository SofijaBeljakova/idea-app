<!DOCTYPE html>
<html>
<head>
    <title>Site</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-green-50 flex items-center justify-center h-screen">
    <div class="text-center p-10 bg-white shadow-lg rounded-lg">
        <h1 class="text-4xl font-bold text-green-600">Site working</h1>
        <p class="text-gray-500 mt-4 text-xl">
            Time: {{ now()->format('H:i:s') }}
        </p>
    </div>
</body>
</html>