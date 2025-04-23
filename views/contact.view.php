<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
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
        <!-- Contact Information -->
        <div>
          <h2 class="text-2xl font-bold text-gray-900 mb-6">Restaurant Information</h2>
          
          <div class="space-y-6">
            <div>
              <h3 class="text-lg font-medium text-indigo-600">Address</h3>
              <p class="mt-2 text-gray-600">
                <?= htmlspecialchars($contactInfo['address']) ?><br>
                <?= htmlspecialchars($contactInfo['city']) ?>, <?= htmlspecialchars($contactInfo['zip']) ?>
              </p>
            </div>
            
            <div>
              <h3 class="text-lg font-medium text-indigo-600">Contact</h3>
              <p class="mt-2 text-gray-600">
                Phone: <?= htmlspecialchars($contactInfo['phone']) ?><br>
                Email: <?= htmlspecialchars($contactInfo['email']) ?>
              </p>
            </div>
            
            <div>
              <h3 class="text-lg font-medium text-indigo-600">Hours</h3>
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

          <!-- Map Placeholder -->
          <div class="mt-8 bg-gray-200 rounded-lg h-64 flex items-center justify-center">
            <p class="text-gray-700">Map would be embedded here</p>
            <!-- In a real implementation, you would embed a Google Maps iframe or similar here -->
          </div>
        </div>

        <!-- Contact/Reservation Form -->
        <div class="mt-12 lg:mt-0">
          <h2 class="text-2xl font-bold text-gray-900 mb-6">Make a Reservation</h2>
          
          <form action="#" method="POST" class="space-y-6">
            <div>
              <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
              <input type="text" name="name" id="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" placeholder="Your name">
            </div>

            <div>
              <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
              <input type="email" name="email" id="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" placeholder="your@email.com">
            </div>
            
            <div>
              <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
              <input type="tel" name="phone" id="phone" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" placeholder="Your phone number">
            </div>

            <div class="grid grid-cols-2 gap-6">
              <div>
                <label for="date" class="block text-sm font-medium text-gray-700">Date</label>
                <input type="date" name="date" id="date" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
              </div>
              
              <div>
                <label for="time" class="block text-sm font-medium text-gray-700">Time</label>
                <select id="time" name="time" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                  <option value="">Select a time</option>
                  <option value="18:00">6:00 PM</option>
                  <option value="18:30">6:30 PM</option>
                  <option value="19:00">7:00 PM</option>
                  <option value="19:30">7:30 PM</option>
                  <option value="20:00">8:00 PM</option>
                  <option value="20:30">8:30 PM</option>
                  <option value="21:00">9:00 PM</option>
                </select>
              </div>
            </div>

            <div>
              <label for="guests" class="block text-sm font-medium text-gray-700">Number of Guests</label>
              <select id="guests" name="guests" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                <option value="1">1 person</option>
                <option value="2">2 people</option>
                <option value="3">3 people</option>
                <option value="4">4 people</option>
                <option value="5">5 people</option>
                <option value="6">6 people</option>
                <option value="7+">7+ people</option>
              </select>
            </div>
            
            <div>
              <label for="message" class="block text-sm font-medium text-gray-700">Special Requests</label>
              <textarea id="message" name="message" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" placeholder="Any special requests or dietary requirements?"></textarea>
            </div>
            
            <div>
              <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Request Reservation
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>

  <?php require 'views/partials/footer.php'; ?>
</div>

</body>
</html>
