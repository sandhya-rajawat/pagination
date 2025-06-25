<!DOCTYPE html>
<html lang="en">

<head>
       <meta charset="UTF-8">
       <title>Insert Student</title>
       <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-blue-100 min-h-screen flex items-center justify-center p-6">

       <form action="insert.php" method="POST" class="bg-white p-6 rounded shadow-md w-full max-w-md space-y-4">
              <h2 class="text-xl font-bold text-center text-green-600">Add New Student</h2>

              <input type="text" name="name" placeholder="Full Name" required
                     class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500" />

              <input type="email" name="email" placeholder="Email" required
                     class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500" />
              <input type="text" name="city" placeholder="city" required
                     class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500" />

              <input type="text" name="phone" placeholder="Phone Number" required
                     class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500" />

              <button type="submit" name="submit"
                     class="bg-green-600 hover:bg-green-300 text-white px-4 py-2 rounded w-full">
                     Save Student
              </button>
       </form>

</body>

</html>