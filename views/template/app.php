<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookWise</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-200">
    <?php require './views/components/header.php'; ?>

    <main class="max-w-screen-xl mx-auto flex flex-col items-center gap-16 py-4 px-8">
        <?php require "./views/{$view}.view.php"; ?>
    </main>

    <?php require './views/components/footer.php'; ?>
</body>
</html>