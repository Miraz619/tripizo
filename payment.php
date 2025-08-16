<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Complete Payment | Tripizo</title>
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
<style>
  .guideline-step { display: flex; align-items: start; gap: 8px; margin-bottom: 6px; }
  .guideline-step span { font-weight: bold; }
</style>
</head>
<body class="bg-gray-100 font-sans">

       <?php include 'nav.php'; ?>

<!-- PAGE HEADER -->
<div class="py-8 bg-gradient-to-r from-green-600 to-blue-600">
  <div class="max-w-6xl mx-auto px-4">
    <div class="text-center text-white">
      <i class="fas fa-credit-card text-4xl mb-4"></i>
      <h1 class="text-3xl font-bold mb-2">Complete Your Advance Payment</h1>
      <p class="text-green-100">Secure your booking with an advancepayment</p>
    </div>
  </div>
</div>

<!-- MAIN CONTENT -->
<div class="max-w-6xl mx-auto px-4 py-10 grid grid-cols-1 lg:grid-cols-2 gap-8">
  
  <!-- LEFT COLUMN - FORM ONLY -->
  <div>
    <div class="bg-white p-6 rounded-xl shadow-lg">
      <h2 class="text-2xl font-bold text-gray-800 mb-6"><i class="fas fa-user-edit mr-2"></i>Booking Details</h2>
      <form id="bookingForm" class="space-y-4">
        <div>
          <label class="block font-semibold text-gray-700">Full Name *</label>
          <input type="text" id="fullName" required class="w-full px-3 py-2 border rounded focus:border-blue-500" placeholder="Enter your full name">
        </div>
        <div>
          <label class="block font-semibold text-gray-700">Contact Number *</label>
          <input type="tel" id="contactNumber" required class="w-full px-3 py-2 border rounded focus:border-blue-500" placeholder="Enter your phone number">
        </div>
        <div>
          <label class="block font-semibold text-gray-700">Trip ID *</label>
          <input type="text" id="tripId" required class="w-full px-3 py-2 border rounded focus:border-blue-500" placeholder="Enter your Trip ID">
        </div>
      </form>
    </div>
  </div>

  <!-- RIGHT COLUMN - PAYMENT METHODS -->
  <div class="space-y-6">
    <!-- bKash -->
    <div class="bg-white rounded-lg shadow p-6 border hover:border-pink-500 cursor-pointer" onclick="selectPaymentMethod('bkash')">
      <div class="flex items-center mb-4">
        <div class="w-12 h-12 bg-pink-500 rounded-lg flex items-center justify-center mr-4">
          <i class="fab fa-btc text-white text-xl"></i>
        </div>
        <div>
          <h3 class="font-bold text-lg">bKash</h3>
          <p class="text-sm text-gray-500">Most popular mobile banking</p>
        </div>
      </div>
      <div id="bkash_details" class="hidden bg-pink-50 p-4 rounded">
        <p class="font-bold text-pink-800 mb-2">Payment Instructions</p>
        <div class="guideline-step"><span>1.</span> Dial *247#</div>
        <div class="guideline-step"><span>2.</span> Select "Send Money"</div>
        <div class="guideline-step"><span>3.</span> Merchant: <strong>01885478700</strong></div>
        <div class="guideline-step"><span>4.</span> Enter amount</div>
        <div class="guideline-step"><span>5.</span> Enter PIN</div>
        <input type="text" id="bkash_trx" placeholder="Transaction ID" class="w-full px-3 py-2 mt-3 border rounded focus:border-pink-500">
        <button onclick="confirmPayment('bkash')" class="mt-3 w-full bg-pink-500 text-white py-2 rounded font-bold hover:bg-pink-600">Confirm</button>
      </div>
    </div>

    <!-- Nagad -->
    <div class="bg-white rounded-lg shadow p-6 border hover:border-orange-500 cursor-pointer" onclick="selectPaymentMethod('nagad')">
      <div class="flex items-center mb-4">
        <div class="w-12 h-12 bg-orange-500 rounded-lg flex items-center justify-center mr-4">
          <i class="fas fa-mobile-alt text-white text-xl"></i>
        </div>
        <div>
          <h3 class="font-bold text-lg">Nagad</h3>
          <p class="text-sm text-gray-500">Digital financial service</p>
        </div>
      </div>
      <div id="nagad_details" class="hidden bg-orange-50 p-4 rounded">
        <p class="font-bold text-orange-800 mb-2">Payment Instructions</p>
        <div class="guideline-step"><span>1.</span> Dial *167#</div>
        <div class="guideline-step"><span>2.</span> Select "Send Money"</div>
        <div class="guideline-step"><span>3.</span> Merchant: <strong>01885478700</strong></div>
        <div class="guideline-step"><span>4.</span> Enter amount</div>
        <div class="guideline-step"><span>5.</span> Enter PIN</div>
        <input type="text" id="nagad_trx" placeholder="Transaction ID" class="w-full px-3 py-2 mt-3 border rounded focus:border-orange-500">
        <button onclick="confirmPayment('nagad')" class="mt-3 w-full bg-orange-500 text-white py-2 rounded font-bold hover:bg-orange-600">Confirm</button>
      </div>
    </div>

    <!-- Rocket -->
    <div class="bg-white rounded-lg shadow p-6 border hover:border-purple-500 cursor-pointer" onclick="selectPaymentMethod('rocket')">
      <div class="flex items-center mb-4">
        <div class="w-12 h-12 bg-purple-500 rounded-lg flex items-center justify-center mr-4">
          <i class="fas fa-rocket text-white text-xl"></i>
        </div>
        <div>
          <h3 class="font-bold text-lg">Rocket</h3>
          <p class="text-sm text-gray-500">DBBL Mobile Banking</p>
        </div>
      </div>
      <div id="rocket_details" class="hidden bg-purple-50 p-4 rounded">
        <p class="font-bold text-purple-800 mb-2">Payment Instructions</p>
        <div class="guideline-step"><span>1.</span> Dial *322#</div>
        <div class="guideline-step"><span>2.</span> Select "Send Money"</div>
        <div class="guideline-step"><span>3.</span> Merchant: <strong>018854787001</strong></div>
        <div class="guideline-step"><span>4.</span> Enter amount</div>
        <div class="guideline-step"><span>5.</span> Enter PIN</div>
        <input type="text" id="rocket_trx" placeholder="Transaction ID" class="w-full px-3 py-2 mt-3 border rounded focus:border-purple-500">
        <button onclick="confirmPayment('rocket')" class="mt-3 w-full bg-purple-500 text-white py-2 rounded font-bold hover:bg-purple-600">Confirm</button>
      </div>
    </div>

    <!-- Bank -->
    <div class="bg-white rounded-lg shadow p-6 border hover:border-blue-500 cursor-pointer" onclick="selectPaymentMethod('bank')">
      <div class="flex items-center mb-4">
        <div class="w-12 h-12 bg-blue-500 rounded-lg flex items-center justify-center mr-4">
          <i class="fas fa-university text-white text-xl"></i>
        </div>
        <div>
          <h3 class="font-bold text-lg">Bank Transfer</h3>
          <p class="text-sm text-gray-500">Direct bank transfer</p>
        </div>
      </div>
      <div id="bank_details" class="hidden bg-blue-50 p-4 rounded">
        <p class="font-bold text-blue-800 mb-2">Transfer Details</p>
        <p><strong>Bank:</strong> DBBL</p>
        <p><strong>Acc Name:</strong> Tripizo Car Rental Service</p>
        <p><strong>Acc No:</strong> 1234567890123</p>
        <input type="text" id="bank_ref" placeholder="Transaction Reference" class="w-full px-3 py-2 mt-3 border rounded focus:border-blue-500">
        <button onclick="confirmPayment('bank')" class="mt-3 w-full bg-blue-500 text-white py-2 rounded font-bold hover:bg-blue-600">Confirm</button>
      </div>
    </div>
  </div>
</div>

<script>
function selectPaymentMethod(method) {
  document.querySelectorAll('[id$="_details"]').forEach(el => el.classList.add('hidden'));
  document.getElementById(method + '_details').classList.remove('hidden');
}

function confirmPayment(method) {
  alert(method.toUpperCase() + " payment confirmed!");
}
</script>

</body>
</html>
