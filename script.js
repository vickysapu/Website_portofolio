const bubbleContainer = document.querySelector('.nav-bubbles');

function createBubble() {
    const bubble = document.createElement('div');
    const size = Math.random() * 50 + 10; 
    const position = Math.random() * 100; 
    const duration = Math.random() * 5 + 5; 

    bubble.classList.add('bubble');
    bubble.style.width = `${size}px`;
    bubble.style.height = `${size}px`;
    bubble.style.left = `${position}%`;
    bubble.style.animationDuration = `${duration}s`;

    bubbleContainer.appendChild(bubble);

    bubble.addEventListener('animationend', () => {
        bubble.remove();
    });
}

setInterval(createBubble, 500);
