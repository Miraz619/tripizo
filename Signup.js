document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    const fields = [
        "fullname",
        "email",
        "phone",
        "dob",
        "permanent-address",
        "current-address",
        "password",
        "confirm-password",
        "profile-photo"
    ];

    function setError(input, message) {
        input.style.borderColor = "red";
        if (!input.nextElementSibling || !input.nextElementSibling.classList.contains("error-msg")) {
            const error = document.createElement("div");
            error.className = "error-msg";
            error.style.color = "red";
            error.style.fontSize = "0.9em";
            error.textContent = message;
            input.parentNode.insertBefore(error, input.nextSibling);
        } else {
            input.nextElementSibling.textContent = message;
        }
    }

    function clearError(input) {
        input.style.borderColor = "#d1d5db";
        if (input.nextElementSibling && input.nextElementSibling.classList.contains("error-msg")) {
            input.nextElementSibling.remove();
        }
    }

    form.addEventListener("submit", function (e) {
        let valid = true;

        // Clear previous errors
        fields.forEach(id => {
            const el = document.getElementById(id);
            if (el) clearError(el);
        });

        // Full Name
        const fullname = document.getElementById("fullname");
        if (!fullname.value.trim()) {
            setError(fullname, "Full name is required.");
            valid = false;
        }

        // Email
        const email = document.getElementById("email");
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!email.value.trim()) {
            setError(email, "Email is required.");
            valid = false;
        } else if (!emailPattern.test(email.value.trim())) {
            setError(email, "Enter a valid email address.");
            valid = false;
        }

        // Phone
        const phone = document.getElementById("phone");
        const phonePattern = /^\d{11}$/;
        if (!phone.value.trim()) {
            setError(phone, "Phone number is required.");
            valid = false;
        } else if (!phonePattern.test(phone.value.trim())) {
            setError(phone, "Enter a valid 11 digit phone number.");
            valid = false;
        }

        // Date of Birth
        const dob = document.getElementById("dob");
        if (!dob.value) {
            setError(dob, "Date of birth is required.");
            valid = false;
        }

        // Permanent Address
        const permanent = document.getElementById("permanent-address");
        if (!permanent.value.trim()) {
            setError(permanent, "Permanent address is required.");
            valid = false;
        }

        // Current Address
        const current = document.getElementById("current-address");
        if (!current.value.trim()) {
            setError(current, "Current/Temporary address is required.");
            valid = false;
        }

        // Password
        const password = document.getElementById("password");
        const confirmPassword = document.getElementById("confirm-password");
        const passwordPattern = /^(?=.*\d).{4,}$/;
        if (!password.value) {
            setError(password, "Password is required.");
            valid = false;
        } else if (!passwordPattern.test(password.value)) {
            setError(password, "Password must be at least 4 digits and contain at least one number.");
            valid = false;
        }

        // Confirm Password
        if (!confirmPassword.value) {
            setError(confirmPassword, "Please confirm your password.");
            valid = false;
        } else if (password.value !== confirmPassword.value) {
            setError(confirmPassword, "Passwords do not match.");
            valid = false;
        }

        // Profile Photo
        const photo = document.getElementById("profile-photo");
        if (!photo.files || photo.files.length === 0) {
            setError(photo, "Profile photo is required.");
            valid = false;
        }

        if (!valid) {
            e.preventDefault();
        }
    });
});