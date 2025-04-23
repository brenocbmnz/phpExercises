<!-- Reservation Modal -->
<div id="reservationModal" class="fixed inset-0 z-50 overflow-y-auto hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
  <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
    <!-- Background overlay -->
    <div id="modalOverlay" class="fixed inset-0 bg-green-500 bg-opacity-75 transition-opacity"></div>

    <!-- Modal panel -->
    <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
      <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
        <div class="sm:flex sm:items-start">
          <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full">
            <h3 class="text-2xl leading-6 font-bold text-gray-900 mb-6" id="modal-title">
              Make a Reservation
            </h3>
            
            <!-- Reservation Form -->
            <form action="#" method="POST" class="space-y-6">
              <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                <input type="text" name="name" id="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500" placeholder="Your name">
              </div>

              <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500" placeholder="your@email.com">
              </div>
              
              <div>
                <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                <input type="tel" name="phone" id="phone" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500" placeholder="Your phone number">
              </div>

              <div class="grid grid-cols-2 gap-6">
                <div>
                  <label for="date" class="block text-sm font-medium text-gray-700">Date</label>
                  <input type="date" name="date" id="date" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500">
                </div>
                
                <div>
                  <label for="time" class="block text-sm font-medium text-gray-700">Time</label>
                  <select id="time" name="time" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500">
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
                <select id="guests" name="guests" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500">
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
                <textarea id="message" name="message" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500" placeholder="Any special requests or dietary requirements?"></textarea>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
        <button type="button" id="submitReservation" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-green-600 text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 sm:ml-3 sm:w-auto sm:text-sm">
          Request Reservation
        </button>
        <button type="button" id="closeModal" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
          Cancel
        </button>
      </div>
    </div>
  </div>
</div>

<!-- Modal JavaScript -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('reservationModal');
    const overlay = document.getElementById('modalOverlay');
    const openButtons = [
      document.getElementById('reservationButton'), 
      document.getElementById('mobileReservationButton')
    ];
    const closeButton = document.getElementById('closeModal');
    const submitButton = document.getElementById('submitReservation');
    
    // Open modal
    openButtons.forEach(button => {
      if (button) {
        button.addEventListener('click', () => {
          modal.classList.remove('hidden');
        });
      }
    });
    
    // Close modal
    function closeModal() {
      modal.classList.add('hidden');
    }
    
    if (closeButton) {
      closeButton.addEventListener('click', closeModal);
    }
    
    if (overlay) {
      overlay.addEventListener('click', closeModal);
    }
    
    // Submit form
    if (submitButton) {
      submitButton.addEventListener('click', function() {
        // Here you would normally handle form submission via AJAX
        alert('Thank you! Your reservation request has been submitted. We will contact you to confirm.');
        closeModal();
      });
    }
    
    // Close on escape key
    document.addEventListener('keydown', function(event) {
      if (event.key === 'Escape' && !modal.classList.contains('hidden')) {
        closeModal();
      }
    });
  });
</script>
