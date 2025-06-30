// Di resources/js/app.js
import "./contact";

document.addEventListener("DOMContentLoaded", function () {
    const contactForm = document.getElementById("contactForm");

    if (contactForm) {
        contactForm.addEventListener("submit", function (e) {
            e.preventDefault();

            // Get form data
            const formData = new FormData(contactForm);
            const data = Object.fromEntries(formData.entries());

            // Here you can add AJAX request to your backend
            console.log("Form submitted:", data);

            // Show success message (you can replace this with actual form submission)
            alert("Thank you for your message! I will get back to you soon.");

            // Reset form
            contactForm.reset();
        });
    }
});
