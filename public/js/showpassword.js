        // Get references to the password input and the togglePassword button
        const passwordInput = document.getElementById("password");
        const togglePasswordButton = document.getElementById("togglePassword");

        // Initialize a variable to track the password visibility state
        let passwordVisible = false;

        // Add an event listener to the button
        togglePasswordButton.addEventListener("click", function () {
            // Toggle the password visibility state
            passwordVisible = !passwordVisible;

            // Update the password input type based on the visibility state
            passwordInput.type = passwordVisible ? "text" : "password";

            // Update the button text based on the visibility state
            togglePasswordButton.textContent = passwordVisible ? "Hide" : "Show";
        });