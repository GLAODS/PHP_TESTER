// scripts.js 파일 업데이트

document.addEventListener('DOMContentLoaded', function() {
    // Smooth scrolling for anchor links
    const links = document.querySelectorAll('nav a');
    for (const link of links) {
        link.addEventListener('click', smoothScroll);
    }

    function smoothScroll(event) {
        const targetId = event.currentTarget.getAttribute('href');

        // Only handle internal links (those starting with '#')
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
            // For external links or other links, allow default action
            return;
        }
    }

    // Button click animation
    const buttons = document.querySelectorAll('form input[type="submit"]');
    buttons.forEach(button => {
        button.addEventListener('click', () => {
            button.classList.add('clicked');
            setTimeout(() => button.classList.remove('clicked'), 300);
        });
    });
});

// CSS에 추가할 버튼 클릭 애니메이션 스타일
const style = document.createElement('style');
style.innerHTML = `
    .clicked {
        transform: scale(0.95);
    }
`;
document.head.appendChild(style);
