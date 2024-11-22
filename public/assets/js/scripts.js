
document.addEventListener("DOMContentLoaded", () => {
    const sidebarLinks = document.querySelectorAll(".sidebar .nav-link");
    const sections = document.querySelectorAll("section");

    // Smooth scrolling on link click
    sidebarLinks.forEach((link) => {
        link.addEventListener("click", (event) => {
            event.preventDefault(); // Prevent default anchor behavior

            const targetId = link.getAttribute("href").substring(1); // Get the target ID

            // Handle "Top" link separately
            if (targetId === "") {
                // Scroll to the top of the page
                window.scrollTo({
                    top: 0,
                    behavior: "smooth",
                });

                // Update active class immediately
                sidebarLinks.forEach((lnk) => lnk.classList.remove("active"));
                link.classList.add("active");
                return;
            }

            const targetSection = document.getElementById(targetId);
            if (targetSection) {
                const offsetTop = targetSection.offsetTop - 70; // Adjust for navbar
                window.scrollTo({
                    top: offsetTop,
                    behavior: "smooth",
                });

                // Update active class immediately
                sidebarLinks.forEach((lnk) => lnk.classList.remove("active"));
                link.classList.add("active");
            }
        });
    });

    // Highlight the active link on scroll
    const highlightActiveLink = () => {
        let currentSection = "";

        sections.forEach((section) => {
            const sectionTop = section.offsetTop - 80; // Adjust for navbar height
            const sectionBottom = sectionTop + section.offsetHeight;

            if (window.scrollY >= sectionTop && window.scrollY < sectionBottom) {
                currentSection = section.getAttribute("id");
            }
        });

        sidebarLinks.forEach((link) => {
            link.classList.remove("active");

            // Highlight the link corresponding to the current section
            if (link.getAttribute("href") === `#${currentSection}`) {
                link.classList.add("active");
            }

            // Special case for "Top" link
            if (!currentSection && link.getAttribute("href") === "#") {
                link.classList.add("active");
            }
        });
    };

    // Trigger highlight on scroll
    window.addEventListener("scroll", highlightActiveLink);

    // Initial highlight on page load
    highlightActiveLink();
});
