document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("signupForm");
    const fields = [
        "full_name",
        "email",
        "phone_number",
        "dob",
        "permanent_address",
        "current_address",
        "password",
        "confirm_password",
       
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

      
        fields.forEach(id => {
            const el = document.getElementById(id);
            if (el) clearError(el);
        });

       
        const fullName = document.getElementById("full_name");
        if (!fullName.value.trim()) {
            setError(fullName, "Full name is required.");
            valid = false;
        }

        
        const email = document.getElementById("email");
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!email.value.trim()) {
            setError(email, "Email is required.");
            valid = false;
        } else if (!emailPattern.test(email.value.trim())) {
            setError(email, "Enter a valid email address.");
            valid = false;
        }

       
        const phone = document.getElementById("phone_number");
        const phonePattern = /^\d{11}$/;
        if (!phone.value.trim()) {
            setError(phone, "Phone number is required.");
            valid = false;
        } else if (!phonePattern.test(phone.value.trim())) {
            setError(phone, "Enter a valid 11 digit phone number.");
            valid = false;
        }

     
        const dob = document.getElementById("dob");
        if (!dob.value) {
            setError(dob, "Date of birth is required.");
            valid = false;
        }

     
        const permanent = document.getElementById("permanent_address");
        if (!permanent.value.trim()) {
            setError(permanent, "Permanent address is required.");
            valid = false;
        }

        const current = document.getElementById("current_address");
        if (!current.value.trim()) {
            setError(current, "Current/Temporary address is required.");
            valid = false;
        }

       
        const password = document.getElementById("password");
        const confirmPassword = document.getElementById("confirm_password");
        const passwordPattern = /^(?=.*\d).{4,}$/;
        if (!password.value) {
            setError(password, "Password is required.");
            valid = false;
        } else if (!passwordPattern.test(password.value)) {
            setError(password, "Password must be at least 4 digits and contain at least one number.");
            valid = false;
        }

        
        if (!confirmPassword.value) {
            setError(confirmPassword, "Please confirm your password.");
            valid = false;
        } else if (password.value !== confirmPassword.value) {
            setError(confirmPassword, "Passwords do not match.");
            valid = false;
        }

        if (!valid) {
            
            e.preventDefault();
        }
    });
});