<?php
include './fetch.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Student Pagination UI</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-blue-100 p-6 min-h-screen">

  <div class="max-w-4xl mx-auto bg-white p-6 rounded shadow">
    <h2 class="text-2xl font-bold text-center text-blue-600 mb-6">Student List</h2>
    <?php
    if ($data):
    ?>
      <!-- Table -->
      <table class="w-full table-auto border-collapse">
        <thead class="bg-blue-50 text-blue-700">
          <tr>
            <th class="border px-4 py-2 text-left">ID</th>
            <th class="border px-4 py-2 text-left">Name</th>
            <th class="border px-4 py-2 text-left">Email</th>
            <th class="border px-4 py-2 text-left">Phone</th>
            <th class="border px-4 py-2 text-left">City</th>
            <th class="border px-4 py-2 text-left"><a href='./insert.php'>Add Student</a></th>
            <th class="border px-4 py-2">Action</th>

          </tr>
        </thead>
        <tbody class="text-gray-700">
          <!-- Sample static rows (ye PHP se replace honge) -->
          <?php
          foreach ($data as $rows):

          ?>
            <tr>
              <td class="border px-4 py-2"><?= htmlentities($rows['id']); ?></td>
              <td class="border px-4 py-2"><?= htmlentities($rows['name']); ?> </td>
              <td class="border px-4 py-2"><?= htmlentities($rows['email']); ?></td>
              <td class="border px-4 py-2"><?= htmlentities($rows['phone']); ?></td>
              <td class="border px-4 py-2"><?= htmlentities($rows['city']); ?></td>
              <td class="border px-4 py-2"><a href='./insert.php'>Add Student</a></td>
              <td class="border px-4 py-2">
              
                <a href="?delete=<?= $rows['id'] ?>"

                  class="text-red-600 hover:underline">
                  Delete
                </a>
              </td>

              </td>

            </tr>
          <?php
          endforeach; ?>
          <!-- More rows here... -->
        </tbody>
      </table>


  </div>
<?php
    endif; ?>
<div class="mt-6 flex justify-center items-center space-x-2">
  <!-- Previous Button -->
  <?php if ($page > 1): ?>
    <a href="?page=<?= $page - 1 ?>" class="px-3 py-1 bg-gray-200 rounded">Previous</a>
  <?php endif; ?>

  <!-- Page Numbers -->
  <?php for ($i = 1; $i <= $total_pages; $i++): ?>
    <a href="?page=<?= $i ?>"
      class="px-3 py-1 rounded 
              <?= $i == $page ? 'bg-blue-600 text-white' : 'bg-blue-100 text-blue-700 hover:bg-blue-200' ?>">
      <?= $i ?>
    </a>
  <?php endfor; ?>

  <!-- Next Button -->
  <?php if ($page < $total_pages): ?>
    <a href="?page=<?= $page + 1 ?>" class="px-3 py-1 bg-gray-200 rounded">Next</a>
  <?php endif; ?>
</div>

</div>
</body>

</html>