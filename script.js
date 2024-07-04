/* script.js */
document.addEventListener('DOMContentLoaded', function() {
    let isScrolling = false;
    const itemHeight = window.innerHeight; // Height of one item (viewport height)

    window.addEventListener('wheel', function(event) {
        event.preventDefault(); // Prevent the default scrolling behavior

        if (!isScrolling) {
            isScrolling = true;

            const step = event.deltaY > 0 ? itemHeight : -itemHeight;

            window.scrollBy({
                top: step,
                behavior: 'smooth'
            });

            setTimeout(() => {
                isScrolling = false;
            }, 500); // Adjust this delay to match the duration of the smooth scroll
        }
    });
});

// ______________________________________________________________________________

/* script.js */
document.addEventListener('DOMContentLoaded', function() {
    const breadcrumb = document.getElementById('breadcrumb');
    const path = window.location.pathname.split('/').filter(segment => segment);

    // Add 'Home' link
    const homeItem = document.createElement('li');
    homeItem.classList.add('breadcrumb-item');
    const homeLink = document.createElement('a');
    homeLink.href = '/';
    homeLink.textContent = 'Home';
    homeItem.appendChild(homeLink);
    breadcrumb.appendChild(homeItem);

    // Add other breadcrumb items based on the path
    let currentPath = '/';
    path.forEach((segment, index) => {
        currentPath += `${segment}/`;

        const item = document.createElement('li');
        item.classList.add('breadcrumb-item');
        
        if (index === path.length - 1) {
            item.classList.add('active');
            item.setAttribute('aria-current', 'page');
            item.textContent = segment.replace(/-/g, ' '); // Replace hyphens with spaces for better readability
        } else {
            const link = document.createElement('a');
            link.href = currentPath;
            link.textContent = segment.replace(/-/g, ' ');
            item.appendChild(link);
        }

        breadcrumb.appendChild(item);
    });
});

