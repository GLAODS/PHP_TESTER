// scripts.js 파일 업데이트

document.addEventListener('DOMContentLoaded', function() {
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
