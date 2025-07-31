// Function to load HTML content
async function loadHTML(url, elementId) {
    try {
        const response = await fetch(url);
        const html = await response.text();
        document.getElementById(elementId).innerHTML = html;
        
        // Re-initialize hamburger menu after header is loaded
        if (elementId === 'header-container') {
            // Wait a bit for DOM to be ready, then initialize hamburger menu
            setTimeout(() => {
                initializeHamburgerMenu();
            }, 50);
        }
    } catch (error) {
        console.error(`Error loading ${url}:`, error);
    }
}

// Initialize hamburger menu functionality using jQuery (to match common.js)
function initializeHamburgerMenu() {
    const $hamburger = $('.hamburger');
    const $menuDropdown = $('.menu-dropdown');
    const $body = $('body');
    
    if ($hamburger.length && $menuDropdown.length) {
        // Remove any existing event handlers to prevent duplicates
        $hamburger.off('click');
        
        // Add click event for hamburger
        $hamburger.on('click', function() {
            $body.toggleClass('body--static');
            $menuDropdown.toggleClass('menu-dropdown--active');
        });
        
        // Close menu when clicking on menu links (both main-menu and screen__link)
        $('.main-menu__link, .screen__link').off('click').on('click', function() {
            $body.removeClass('body--static');
            $menuDropdown.removeClass('menu-dropdown--active');
        });
        
        // Close menu when clicking on close button
        $('.screen__close').off('click').on('click', function() {
            $body.removeClass('body--static');
            $menuDropdown.removeClass('menu-dropdown--active');
        });
        
        // Close menu when clicking outside
        $(document).off('click.hamburger').on('click.hamburger', function(event) {
            if (!$(event.target).closest('.hamburger').length && !$(event.target).closest('.menu-dropdown').length) {
                $body.removeClass('body--static');
                $menuDropdown.removeClass('menu-dropdown--active');
            }
        });
        
        console.log('Hamburger menu initialized successfully');
    } else {
        console.log('Hamburger elements not found');
    }
}

// Load header and footer when the page loads
document.addEventListener('DOMContentLoaded', () => {
    loadHTML('header.html', 'header-container');
    loadHTML('footer.html', 'footer-container');
    
    // Fallback initialization in case header is already present
    setTimeout(() => {
        initializeHamburgerMenu();
    }, 200);
}); 