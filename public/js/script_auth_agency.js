document.addEventListener("DOMContentLoaded", function () {
    const switchButtons = document.querySelectorAll(".switch span");
    const forms = document.querySelectorAll(".form-container-box form");

    // Initial state
    switchButtons[0].classList.add("active");
    forms[0].style.display = "block";

    // Switch function
    switchButtons.forEach((button, index) => {
        button.addEventListener("click", () => {
            // Hide all forms
            forms.forEach((form) => (form.style.display = "none"));
            // Remove active class from all buttons
            switchButtons.forEach((btn) => btn.classList.remove("active"));
            // Show the selected form and mark the button as active
            forms[index].style.display = "block";
            switchButtons[index].classList.add("active");
        });
    });
});