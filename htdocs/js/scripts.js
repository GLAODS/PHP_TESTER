document.addEventListener('DOMContentLoaded', function() {
    // Smooth scrolling for anchor links
    const links = document.querySelectorAll('nav a');
    for (const link of links) {
        link.addEventListener('click', smoothScroll);
    }

    function smoothScroll(event) {
        const targetId = event.currentTarget.getAttribute('href');

        // If the targetId starts with '#', it's an internal link
        if (targetId.startsWith('#')) {
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
            // For external links or links with relative paths
            window.location.href = targetId;
        }
    }
});
