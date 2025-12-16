document.addEventListener('DOMContentLoaded', () => {
    const contactForm = document.getElementById('contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const formData = new FormData(contactForm);
            fetch('submit_contact.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                alert(data);
                contactForm.reset();
            });
        });
    }

    const cardCarousel = document.querySelector('.card-carousel');
    if (cardCarousel) {
        let scrollAmount = 0;
        const scrollStep = 250; // Should match the width of a card
        setInterval(() => {
            if (scrollAmount < cardCarousel.scrollWidth - cardCarousel.clientWidth) {
                scrollAmount += scrollStep;
            } else {
                scrollAmount = 0;
            }
            cardCarousel.scrollTo({
                left: scrollAmount,
                behavior: 'smooth'
            });
        }, 2000);
    }

    const commentCarousel = document.querySelector('.comment-carousel');
    if (commentCarousel) {
        let scrollAmount = 0;
        const scrollStep = commentCarousel.clientWidth;
        setInterval(() => {
            if (scrollAmount < commentCarousel.scrollWidth - commentCarousel.clientWidth) {
                scrollAmount += scrollStep;
            } else {
                scrollAmount = 0;
            }
            commentCarousel.scrollTo({
                left: scrollAmount,
                behavior: 'smooth'
            });
        }, 2000);
    }
});
