<!DOCTYPE html>
<html lang="en" class="h-full bg-green-50">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Viva</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full">

<div class="min-h-full">
  <?php require 'views/partials/header.php'; ?>

  <header class="bg-white shadow-sm">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900">Contact Us</h1>
    </div>
  </header>
  
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <div class="lg:grid lg:grid-cols-2 lg:gap-8">
        <div>
          <h2 class="text-2xl font-bold text-gray-900 mb-6">Restaurant Information</h2>
          
          <div class="space-y-6">
            <div>
              <h3 class="text-lg font-medium text-green-600">Address</h3>
              <p class="mt-2 text-gray-600">
                <?= htmlspecialchars($contactInfo['address']) ?><br>
                <?= htmlspecialchars($contactInfo['city']) ?>, <?= htmlspecialchars($contactInfo['zip']) ?>
              </p>
            </div>
            
            <div>
              <h3 class="text-lg font-medium text-green-600">Contact</h3>
              <p class="mt-2 text-gray-600">
                Phone: <?= htmlspecialchars($contactInfo['phone']) ?><br>
                Email: <?= htmlspecialchars($contactInfo['email']) ?>
              </p>
            </div>
            
            <div>
              <h3 class="text-lg font-medium text-green-600">Hours</h3>
              <dl class="mt-2 text-gray-600">
                <?php foreach ($contactInfo['hours'] as $day => $hours): ?>
                  <div class="grid grid-cols-2 gap-1">
                    <dt class="font-medium"><?= htmlspecialchars($day) ?>:</dt>
                    <dd><?= htmlspecialchars($hours) ?></dd>
                  </div>
                <?php endforeach; ?>
              </dl>
            </div>
          </div>
        </div>

        <div class="mt-12 lg:mt-0">
          <div class="bg-gray-200 rounded-lg h-64 flex items-center justify-center mb-6">
            <p class="text-gray-700">Map would be embedded here</p>
  
          </div>
          
          <div class="bg-white shadow rounded-lg p-6">
            <h3 class="text-lg font-medium text-gray-900 mb-4">Get in Touch</h3>
            <p class="text-gray-600 mb-4">
              Have questions or feedback? Reach out to us directly:
            </p>
            <div class="flex items-center mb-4">
              <svg class="h-5 w-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
              </svg>
              <span><?= htmlspecialchars($contactInfo['phone']) ?></span>
            </div>
            <div class="flex items-center">
              <svg class="h-5 w-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
              </svg>
              <span><?= htmlspecialchars($contactInfo['email']) ?></span>
            </div>
            <div class="mt-6">
              <button type="button" id="contactReservationButton" class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                Make a Reservation
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <?php require 'views/partials/footer.php'; ?>
  <?php require 'views/partials/reservation-modal.php'; ?>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const contactReservationBtn = document.getElementById('contactReservationButton');
    if (contactReservationBtn) {
      contactReservationBtn.addEventListener('click', function() {
        const modal = document.getElementById('reservationModal');
        modal.classList.remove('hidden');
      });
    }
  });
</script>

</body>
</html>
