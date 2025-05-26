// Function to load HTML content
async function loadHTML(url, elementId) {
    try {
        const response = await fetch(url);
        const html = await response.text();
        document.getElementById(elementId).innerHTML = html;
    } catch (error) {
        console.error(`Error loading ${url}:`, error);
    }
}

// Load header and footer when the page loads
document.addEventListener('DOMContentLoaded', () => {
    loadHTML('header.html', 'header-container');
    loadHTML('footer.html', 'footer-container');
}); 