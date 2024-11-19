let activeLink = null;

// Handle clicks on sidebar links
document.querySelectorAll('.myLink').forEach(link => {
  link.addEventListener('click', function(e) {
    e.preventDefault(); // Prevent the default link behavior

    // Remove the "clicked" class from all links
    document.querySelectorAll('.myLink').forEach(link => link.classList.remove('clicked'));

    // Add the "clicked" class to the clicked link
    this.classList.add('clicked');
    activeLink = this; // Store the clicked link

    // Scroll smoothly to the corresponding section
    document.querySelector(this.getAttribute('href')).scrollIntoView({
      behavior: 'smooth',
    });
  });
});

// Function to check if an element is in the viewport
function isInView(element) {
  const rect = element.getBoundingClientRect();
  return rect.top >= 0 && rect.bottom <= window.innerHeight; // Checks if the element is fully in view
}

// Handle scroll events
window.addEventListener('scroll', function() {
  // Loop through all sections to see which one is in view
  document.querySelectorAll('.section').forEach(section => {
    const link = document.querySelector(`[href="#${section.id}"]`);

    // If the section is in the viewport, add the "inView" class to its link
    if (isInView(section)) {
      link.classList.add('inView'); // Add the "inView" class to the link
    } else {
      link.classList.remove('inView'); // Remove the "inView" class if the section is out of view
    }
  });

  // Make sure that only the clicked link stays highlighted
  if (activeLink) {
    // Get the section corresponding to the active link
    const activeSection = document.querySelector(activeLink.getAttribute('href'));

    // If the section for the clicked link is still in view, keep the "clicked" class
    if (isInView(activeSection)) {
      activeLink.classList.add('clicked');
    } else {
      activeLink.classList.remove('clicked');
    }
  }
});
