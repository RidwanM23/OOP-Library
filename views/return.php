<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Return</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    
    <?php require 'assets/header.php'; ?>

 
    <header class="bg-blue-600 text-white text-center py-6">
        <h1 class="text-3xl font-bold">Book Return</h1>
    </header>

    <
    <?php if (!empty($_SESSION['success'])): ?>
        <div class="max-w-3xl mx-auto mt-6">
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">success!</strong>
                <span class="block sm:inline"><?= $_SESSION['success'] ?></span>
                <?php unset($_SESSION['success']); ?>
            </div>
        </div>
    <?php endif; ?>

    
    <?php if (!empty($_SESSION['fine'])): ?>
        <div class="max-w-3xl mx-auto mt-6">
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Charge</strong>
                <span class="block sm:inline"><?= $_SESSION['fine'] ?></span>
                <?php unset($_SESSION['fine']); ?>
            </div>
        </div>
    <?php endif; ?>

   
    <?php if (!empty($_SESSION['error'])): ?>
        <div class="max-w-3xl mx-auto mt-6">
            <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Error</strong>
                <span class="block sm:inline"><?= $_SESSION['error'] ?></span>
                <?php unset($_SESSION['error']); ?>
            </div>
        </div>
    <?php endif; ?>

    <div class="max-w-4xl mx-auto mt-10">
        <?php if (!empty($borrowings)): ?>
            <ul class="space-y-4">
                <?php foreach ($borrowings as $borrowing): ?>
                    <li class="bg-white shadow-md rounded-lg p-6">
                        <h2 class="text-xl font-bold mb-2"><?= $borrowing['title'] ?></h2>
                        <p><strong>Date Loan:</strong> <?= $borrowing['borrow_date'] ?></p>
                        <p><strong>Due Date:</strong> <?= $borrowing['due_date'] ?></p>

                        <div class="mt-4">
                            <a href="/return/returnBook?id=<?= $borrowing['id'] ?>" 
                               class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                                Return Book
                            </a>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p class="text-center text-gray-600 mt-10">There's no loaned book yet</p>
        <?php endif; ?>
    </div>

</body>
</html>
