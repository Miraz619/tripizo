    <?php include 'nav.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Service Details | Tripizo</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>
<body class="bg-gray-100 font-sans">

 

  <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-2xl p-8 md:p-12 mt-10 mb-20">

 
    <section class="mb-10">
      <h2 class="text-2xl font-bold text-orange-500 mb-3">Why Choose Tripizo?</h2>
      <p class="text-gray-700">
        Tripizo is Bangladesh’s trusted car rental platform, specializing in <span class="font-semibold text-orange-500">chauffeur-driven vehicles</span> for your comfort and safety.
        Every ride comes with a professional, background-checked driver—no self-driving, no hassles. Enjoy reliable, clean cars, transparent pricing, and 24/7 support, wherever you go.
      </p>
    </section>


    <section class="mb-10">
      <h2 class="text-2xl font-bold text-orange-500 mb-3">How Our Rental System Works</h2>
      <div class="flex flex-col md:flex-row md:items-center gap-6 text-gray-700">
        <div class="flex items-center"><span class="bg-orange-100 text-orange-500 rounded-full px-4 py-2 font-bold mr-2">1</span> Search Cars</div>
        <i class="fa fa-arrow-right text-gray-400 md:mx-3 hidden md:inline"></i>
        <div class="flex items-center"><span class="bg-orange-100 text-orange-500 rounded-full px-4 py-2 font-bold mr-2">2</span> Book Online</div>
        <i class="fa fa-arrow-right text-gray-400 md:mx-3 hidden md:inline"></i>
        <div class="flex items-center"><span class="bg-orange-100 text-orange-500 rounded-full px-4 py-2 font-bold mr-2">3</span> Get Picked Up</div>
        <i class="fa fa-arrow-right text-gray-400 md:mx-3 hidden md:inline"></i>
        <div class="flex items-center"><span class="bg-orange-100 text-orange-500 rounded-full px-4 py-2 font-bold mr-2">4</span> Ride with Our Driver</div>
        <i class="fa fa-arrow-right text-gray-400 md:mx-3 hidden md:inline"></i>
        <div class="flex items-center"><span class="bg-orange-100 text-orange-500 rounded-full px-4 py-2 font-bold mr-2">5</span> Drop-off & Payment</div>
      </div>
      <div class="text-gray-500 mt-3 text-sm">
        <i class="fas fa-info-circle text-orange-400"></i>
        <span>All rentals are chauffeur-driven. Driving yourself is not permitted as per company policy.</span>
      </div>
    </section>


    <section class="mb-10">
      <h2 class="text-2xl font-bold text-orange-500 mb-3">Rental Policies</h2>
      <ul class="list-disc list-inside text-gray-700 space-y-2">
        <li>
          <span class="font-semibold">Chauffeur Only:</span>
          All cars come with a professional Tripizo driver. Customers cannot drive rented vehicles themselves.
        </li>
        <li><span class="font-semibold">Requirements:</span> Provide pickup details and valid contact info; no license needed for passengers.</li>
        <li><span class="font-semibold">Payment Methods:</span> Cash, bKash, Nagad, Card—pay at pickup or online.</li>
        <li><span class="font-semibold">Deposit:</span> Usually not required for local rides; select cases may apply.</li>
        <li><span class="font-semibold">Insurance:</span> All vehicles and drivers are covered by Tripizo insurance.</li>
        <li><span class="font-semibold">Cancellations:</span> Free up to 12 hours before pickup. Contact support for last-minute changes.</li>
      </ul>
    </section>

 
    <section class="mb-10">
      <h2 class="text-2xl font-bold text-orange-500 mb-3">Service Coverage</h2>
      <p class="text-gray-700 mb-2">Tripizo offers chauffeur-driven rentals in all major cities and airports in Bangladesh, including:</p>
      <ul class="flex flex-wrap gap-3 text-gray-800">
        <li class="bg-orange-100 rounded px-3 py-1">Dhaka</li>
        <li class="bg-orange-100 rounded px-3 py-1">Chittagong</li>
        <li class="bg-orange-100 rounded px-3 py-1">Sylhet</li>
        <li class="bg-orange-100 rounded px-3 py-1">Khulna</li>
        <li class="bg-orange-100 rounded px-3 py-1">Rajshahi</li>
        <li class="bg-orange-100 rounded px-3 py-1">Barisal</li>
        <li class="bg-orange-100 rounded px-3 py-1">Cox's Bazar</li>
        <li class="bg-orange-100 rounded px-3 py-1">...and more</li>
      </ul>
    </section>

   

  

  </div>


  <section class="py-16 bg-white">
  <div class="max-w-2xl mx-auto px-4">
    <h2 class="text-4xl font-bold text-center mb-10 text-gray-800">Frequently Asked Questions</h2>
    <div id="faq" class="space-y-4">
     
      <div class="bg-white rounded shadow p-4">
        <button onclick="toggleFaq(1)" class="flex items-center w-full text-left focus:outline-none">
          <span id="icon1" class="text-pink-600 text-xl mr-4"><i class="fas fa-minus-circle"></i></span>
          <span class="font-bold text-lg text-gray-800">What is the Minimum Booking time?</span>
        </button>
        <div id="answer1" class="mt-2 ml-9 text-gray-600 text-base block">
          120 mins required to start the service.
        </div>
      </div>
     
      <div class="bg-white rounded shadow p-4">
        <button onclick="toggleFaq(2)" class="flex items-center w-full text-left focus:outline-none">
          <span id="icon2" class="text-pink-600 text-xl mr-4"><i class="fas fa-plus-circle"></i></span>
          <span class="font-bold text-lg text-gray-800">Is it possible to choose a specific car model?</span>
        </button>
        <div id="answer2" class="mt-2 ml-9 text-gray-600 text-base hidden">
          Yes, you can request a specific car model based on availability.
        </div>
      </div>
     
      <div class="bg-white rounded shadow p-4">
        <button onclick="toggleFaq(3)" class="flex items-center w-full text-left focus:outline-none">
          <span id="icon3" class="text-pink-600 text-xl mr-4"><i class="fas fa-plus-circle"></i></span>
          <span class="font-bold text-lg text-gray-800">Is it possible to have any special car model requirements?</span>
        </button>
        <div id="answer3" class="mt-2 ml-9 text-gray-600 text-base hidden">
          Special requests can be made during booking and we’ll do our best to accommodate them.
        </div>
      </div>
      
      <div class="bg-white rounded shadow p-4">
        <button onclick="toggleFaq(4)" class="flex items-center w-full text-left focus:outline-none">
          <span id="icon4" class="text-pink-600 text-xl mr-4"><i class="fas fa-plus-circle"></i></span>
          <span class="font-bold text-lg text-gray-800">Is the service price fixed?</span>
        </button>
        <div id="answer4" class="mt-2 ml-9 text-gray-600 text-base hidden">
          Prices are fixed for each service but may vary for special requests.
        </div>
      </div>
     
      <div class="bg-white rounded shadow p-4">
        <button onclick="toggleFaq(5)" class="flex items-center w-full text-left focus:outline-none">
          <span id="icon5" class="text-pink-600 text-xl mr-4"><i class="fas fa-plus-circle"></i></span>
          <span class="font-bold text-lg text-gray-800">What is included in this service?</span>
        </button>
        <div id="answer5" class="mt-2 ml-9 text-gray-600 text-base hidden">
          The service includes car rental, driver, and fuel costs unless otherwise specified.
        </div>
      </div>
     
      <div class="bg-white rounded shadow p-4">
        <button onclick="toggleFaq(6)" class="flex items-center w-full text-left focus:outline-none">
          <span id="icon6" class="text-pink-600 text-xl mr-4"><i class="fas fa-plus-circle"></i></span>
          <span class="font-bold text-lg text-gray-800">What is excluded from this Inside City Service?</span>
        </button>
        <div id="answer6" class="mt-2 ml-9 text-gray-600 text-base hidden">
          Toll charges, parking fees, and extra hours are not included in the base service.
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  function toggleFaq(n) {
    for (let i = 1; i <= 6; i++) {
      if (i === n) {
        let ans = document.getElementById('answer' + i);
        let icon = document.getElementById('icon' + i).children[0];
        if (ans.classList.contains('hidden')) {
          ans.classList.remove('hidden');
          icon.classList.remove('fa-plus-circle');
          icon.classList.add('fa-minus-circle');
        } else {
          ans.classList.add('hidden');
          icon.classList.remove('fa-minus-circle');
          icon.classList.add('fa-plus-circle');
        }
      } else {
        document.getElementById('answer' + i).classList.add('hidden');
        let otherIcon = document.getElementById('icon' + i).children[0];
        otherIcon.classList.remove('fa-minus-circle');
        otherIcon.classList.add('fa-plus-circle');
      }
    }
  }
</script>


  <footer class="bg-gray-900 text-gray-200 py-12">
  <div class="max-w-6xl mx-auto px-4">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
    
      <div>
        <h2 class="text-2xl font-bold mb-4 text-orange-400">Tripizo</h2>
        <p class="text-gray-400">We are best at providing reliable and affordable car rentals for your journey.</p>
      </div>
   
      <div>
        <h2 class="text-2xl font-bold mb-4 text-orange-400">Useful Links</h2>
        <ul class="space-y-2">
          <li><a href="#" class="hover:text-orange-400 transition-colors">Home</a></li>
          <li><a href="#" class="hover:text-orange-400 transition-colors">Vehicles</a></li>
          <li><a href="#" class="hover:text-orange-400 transition-colors">About Us</a></li>
          <li><a href="#" class="hover:text-orange-400 transition-colors">Contact</a></li>
        </ul>
      </div>
    
      <div>
        <h2 class="text-2xl font-bold mb-4 text-orange-400">Contact</h2>
        <ul class="space-y-2">
          <li><i class="fas fa-phone-alt mr-2 text-orange-400"></i> 01642008569</li>
          <li><i class="fab fa-whatsapp mr-2 text-green-400"></i> 01642008569</li>
          <li><i class="fas fa-envelope mr-2 text-blue-400"></i> tirpizo32@gmail.com</li>
        </ul>
      </div>
    </div>
 
    <div class="flex justify-center space-x-6">
      <a href="#" class="text-gray-400 hover:text-orange-400 text-2xl transition-colors"><i class="fab fa-facebook-f"></i></a>
      <a href="#" class="text-gray-400 hover:text-orange-400 text-2xl transition-colors"><i class="fab fa-instagram"></i></a>
      <a href="#" class="text-gray-400 hover:text-orange-400 text-2xl transition-colors"><i class="fab fa-x-twitter"></i></a>
      <a href="#" class="text-gray-400 hover:text-orange-400 text-2xl transition-colors"><i class="fab fa-linkedin-in"></i></a>
    </div>
  </div>
</footer>
</body>
</html>

