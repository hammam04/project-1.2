<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white p-8 rounded-lg shadow-lg w-96">
        <h2 class="text-2xl font-bold mb-6 text-center">Register</h2>
        <form action="/register" method="post">
            <div class="mb-4">
                <label for="username" class="block text-sm font-medium text-gray-700 mb-2">Username</label>
                <input type="text" id="username" name="username" class="w-full p-3 border rounded-lg" placeholder="Enter your username" required>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                <input type="email" id="email" name="email" class="w-full p-3 border rounded-lg" placeholder="Enter your email" required>
            </div>

            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                <input type="password" id="password" name="password" class="w-full p-3 border rounded-lg" placeholder="Enter your password" required>
            </div>

            <div class="mb-4">
                <label for="confirm_password" class="block text-sm font-medium text-gray-700 mb-2">Confirm Password</label>
                <input type="password" id="confirm_password" name="confirm_password" class="w-full p-3 border rounded-lg" placeholder="Confirm your password" required>
            </div>

            <button type="submit" class="w-full bg-green-500 text-white p-3 rounded-lg hover:bg-green-600">Register</button>
        </form>

        <p class="mt-6 text-sm text-center">Already have an account? <a href="/login" class="text-blue-500 hover:underline">Login here</a></p>
    </div>

</body>
</html>
