document.getElementById('bookingForm').addEventListener('submit', function(event) {
  // Get values
  const name = document.getElementById('name').value.trim();
  const phone = document.getElementById('phone').value.trim();
  const carType = document.getElementById('car_type').value;
  const pickupDate = document.getElementById('pickup_date').value;
  const pickupLocation = document.getElementById('pickup_location').value.trim();

  // Get error spans
  const nameError = document.getElementById('nameError');
  const phoneError = document.getElementById('phoneError');
  const carTypeError = document.getElementById('carTypeError');
  const dateError = document.getElementById('dateError');
  const locationError = document.getElementById('locationError');

  // Clear previous errors
  nameError.textContent = "";
  phoneError.textContent = "";
  carTypeError.textContent = "";
  dateError.textContent = "";
  locationError.textContent = "";

  let hasError = false;

  // Name validation (at least 3 chars)
  if (name.length < 3) {
    nameError.textContent = "Name must be at least 3 characters.";
    hasError = true;
  }

  // Phone validation (Bangladeshi: starts with 01, 11 digits)
  if (!/^01[0-9]{9}$/.test(phone)) {
    phoneError.textContent = "Enter a valid Bangladeshi phone (e.g., 01XXXXXXXXX)";
    hasError = true;
  }

  // Car type required
  if (carType === "") {
    carTypeError.textContent = "Please select a car type.";
    hasError = true;
  }

  // Pickup date required
  if (pickupDate === "") {
    dateError.textContent = "Please select a pickup date.";
    hasError = true;
  }

  // Pickup location required
  if (pickupLocation.length < 2) {
    locationError.textContent = "Enter a valid pickup location.";
    hasError = true;
  }

  if (hasError) {
    event.preventDefault();
  }
});
