// Smooth scrolling for anchor links
document.addEventListener("DOMContentLoaded", function () {
    const links = document.querySelectorAll('a[href^="#"]');

    links.forEach((link) => {
        link.addEventListener("click", function (e) {
            e.preventDefault();

            const targetId = this.getAttribute("href");
            const targetElement = document.querySelector(targetId);

            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: "smooth",
                    block: "start",
                });

                // Close mobile menu if open
                if (window.innerWidth < 768) {
                    const alpineData =
                        document.querySelector("[x-data]").__x.$data;
                    if (alpineData && alpineData.mobileMenuOpen !== undefined) {
                        alpineData.mobileMenuOpen = false;
                    }
                }
            }
        });
    });

    // Dark mode preference
    const darkModePreference =
        localStorage.getItem("darkMode") === "true" ||
        (!localStorage.getItem("darkMode") &&
            window.matchMedia("(prefers-color-scheme: dark)").matches);

    if (darkModePreference) {
        document.querySelector("[x-data]").__x.$data.darkMode = true;
    }

    // Watch for dark mode changes
    document.querySelector("[x-data]").$watch("darkMode", (value) => {
        localStorage.setItem("darkMode", value);
    });
});
