document.addEventListener('DOMContentLoaded', function() {
    // Smooth scrolling for anchor links
    const links = document.querySelectorAll('nav a');
    for (const link of links) {
        link.addEventListener('click', smoothScroll);
    }

    function smoothScroll(event) {
        const targetId = event.currentTarget.getAttribute('href');

        // Check if the link is an internal anchor link (i.e., starts with '#')
        if (targetId && targetId.startsWith('#')) {
            event.preventDefault();
            const targetElement = document.querySelector(targetId);

            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            } else {
                console.warn(`Element with ID ${targetId} not found.`);
            }
        } else {
            // Allow the default action for non-anchor links
            return;
        }
    }
});
