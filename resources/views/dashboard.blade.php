<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <div class="container mx-auto mt-10">
        <div class="max-w-md mx-auto bg-white p-8 border border-gray-300">
            <h2 class="text-2xl font-bold mb-4 text-center">Dashboard</h2>

            <p>Selamat datang, <strong>{{ $username }}</strong>!</p>

            <a href="/logout" class="bg-red-500 text-white py-2 px-4 rounded block text-center mt-4">Logout</a>
        </div>
    </div>

</body>
</html>
