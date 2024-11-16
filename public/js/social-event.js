// social-event.js
document.addEventListener('DOMContentLoaded', function() {
    const tabs = document.querySelectorAll('.tab-item-link');
    const tabContents = document.querySelectorAll('.tab-content');

    // Function to show the active tab content
    function showTabContent(activeTab) {
        tabContents.forEach(content => {
            content.style.display = 'none'; // Hide all contents
            // content.style.visibility = 'hidden'; 
            console.log(content)
        });
        console.log(tabContents)
        const activeContent = document.querySelector(`.tab-content[data-tab="${activeTab}"]`);
        console.log(activeContent)
        if (activeContent) {
            activeContent.style.display = 'flex'; // Show the active tab content
        }
    }

    function hideTabContent(tabs) {
        tabs.forEach(tab => {
            tab.addEventListener('click', function() {
                tabs.forEach(t => {
                    t.classList.remove('tab-active'); // Remove active class from all tabs
                    t.classList.add('tab-inactive'); // Remove active class from all tabs
                });

                this.classList.remove('tab-inactive'); // Add active class to the clicked tab
                this.classList.add('tab-active'); // Add active class to the clicked tab

                const activeTab = this.getAttribute('data-tab');
                console.log(activeTab);
                showTabContent(activeTab);
            });
        });
    }

    // Set the default active tab and show its content
    const defaultTab = 'ongoing';
    document.querySelector(`.tab-item-link[data-tab="${defaultTab}"]`).classList.add('tab-active');
    hideTabContent(tabs);
    // showTabContent(defaultTab);
});