const faqButtons = document.querySelectorAll('.faq-question button');

    faqButtons.forEach(button => {
        button.addEventListener('click', () => {
            const faqQuestion = button.closest('.faq-question');
            const faqAnswer = faqQuestion.querySelector('p');
            const icon = button.querySelector('.fa-chevron-down');

            faqButtons.forEach(otherButton => {
                if (otherButton !== button) {
                    const otherFaqQuestion = otherButton.closest('.faq-question');
                    otherFaqQuestion.querySelector('p').classList.remove('show');
                    otherFaqQuestion.querySelector('.fa-chevron-down').classList.remove('rotate');
                }
            });

            faqAnswer.classList.toggle('show'); 
            icon.classList.toggle('rotate');
        });
    });