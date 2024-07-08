
        document.addEventListener('DOMContentLoaded', function() {
            const accordions = document.querySelectorAll('.accordion');
            let delay = 0;

            accordions.forEach((accordion, index) => {
                setTimeout(() => {
                    accordion.classList.add('open');
                }, delay);

                delay += 2000; // delay for each accordion opening
            });

            accordions.forEach(accordion => {
                accordion.addEventListener('click', function() {
                    if (accordion.classList.contains('open')) {
                        accordion.classList.remove('open');
                    } else {
                        accordions.forEach(acc => acc.classList.remove('open'));
                        accordion.classList.add('open');
                    }
                });
            });
        });
    