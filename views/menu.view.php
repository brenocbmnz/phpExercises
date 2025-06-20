<!DOCTYPE html>
<html lang="en" class="h-full bg-green-50">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu - Viva</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full">

<div class="min-h-full">
  <?php require 'views/partials/header.php'; ?>

  <header class="bg-white shadow-sm">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900">Our Menu</h1>
    </div>
  </header>
  
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <div class="space-y-16">

        <section>
          <h2 class="text-2xl font-bold text-green-600 mb-6">Appetizers</h2>
          <div class="grid grid-cols-1 gap-6 lg:grid-cols-2">
            <?php foreach ($fullMenu['appetizers'] as $item): ?>
              <div class="border-b border-gray-200 pb-6">
                <div class="flex justify-between">
                  <h3 class="text-lg font-medium text-gray-900"><?= htmlspecialchars($item['name']) ?></h3>
                  <p class="text-lg font-medium text-green-600"><?= htmlspecialchars($item['price']) ?></p>
                </div>
                <p class="mt-2 text-gray-500"><?= htmlspecialchars($item['description']) ?></p>
              </div>
            <?php endforeach; ?>
          </div>
        </section>


        <section>
          <h2 class="text-2xl font-bold text-green-600 mb-6">Main Courses</h2>
          <div class="grid grid-cols-1 gap-6 lg:grid-cols-2">
            <?php foreach ($fullMenu['mains'] as $item): ?>
              <div class="border-b border-gray-200 pb-6">
                <div class="flex justify-between">
                  <h3 class="text-lg font-medium text-gray-900"><?= htmlspecialchars($item['name']) ?></h3>
                  <p class="text-lg font-medium text-green-600"><?= htmlspecialchars($item['price']) ?></p>
                </div>
                <p class="mt-2 text-gray-500"><?= htmlspecialchars($item['description']) ?></p>
              </div>
            <?php endforeach; ?>
          </div>
        </section>
        

        <section>
          <h2 class="text-2xl font-bold text-green-600 mb-6">Desserts</h2>
          <div class="grid grid-cols-1 gap-6 lg:grid-cols-2">
            <?php foreach ($fullMenu['desserts'] as $item): ?>
              <div class="border-b border-gray-200 pb-6">
                <div class="flex justify-between">
                  <h3 class="text-lg font-medium text-gray-900"><?= htmlspecialchars($item['name']) ?></h3>
                  <p class="text-lg font-medium text-green-600"><?= htmlspecialchars($item['price']) ?></p>
                </div>
                <p class="mt-2 text-gray-500"><?= htmlspecialchars($item['description']) ?></p>
              </div>
            <?php endforeach; ?>
          </div>
        </section>


        <section>
          <h2 class="text-2xl font-bold text-green-600 mb-6">Drinks</h2>
          <div class="grid grid-cols-1 gap-6 lg:grid-cols-2">
            <?php foreach ($fullMenu['drinks'] as $item): ?>
              <div class="border-b border-gray-200 pb-6">
                <div class="flex justify-between">
                  <h3 class="text-lg font-medium text-gray-900"><?= htmlspecialchars($item['name']) ?></h3>
                  <p class="text-lg font-medium text-green-600"><?= htmlspecialchars($item['price']) ?></p>
                </div>
                <p class="mt-2 text-gray-500"><?= htmlspecialchars($item['description']) ?></p>
              </div>
            <?php endforeach; ?>
          </div>
        </section>
      </div>

      <div class="mt-16 bg-green-50 rounded-md p-6">
        <h3 class="text-lg font-medium text-green-800">Chef's Note</h3>
        <p class="mt-2 text-green-700">
          All our dishes are prepared fresh to order. Please inform your server of any dietary restrictions or allergies.
          We use locally-sourced ingredients whenever possible to ensure the highest quality and freshness.
        </p>
      </div>
    </div>
  </main>

  <?php require 'views/partials/footer.php'; ?>
  <?php require 'views/partials/reservation-modal.php'; ?>
</div>

</body>
</html>
