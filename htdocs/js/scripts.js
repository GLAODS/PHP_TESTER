document.addEventListener('DOMContentLoaded', function() {
    // Smooth scrolling for anchor links
    const links = document.querySelectorAll('nav a');
    for (const link of links) {
        link.addEventListener('click', smoothScroll);
    }

    function smoothScroll(event) {
        event.preventDefault();
        const targetId = event.currentTarget.getAttribute('href') === "#" ? 'header' : event.currentTarget.getAttribute('href');
        const targetElement = document.querySelector(targetId);
        targetElement.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    }
});
