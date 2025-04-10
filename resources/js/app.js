import './bootstrap';

// Import interactive functions
import './interactive';

// Alpine.js is loaded from the CDN in the layout files
document.addEventListener('DOMContentLoaded', function() {
    // Check if Alpine is loaded
    if (typeof window.Alpine === 'undefined') {
        console.warn('Alpine.js is not loaded. Some features may not work properly.');
    }
});
