function toggleDarkMode() {
    const body = document.body;
    body.classList.toggle('dark-mode');

    const headings = document.querySelectorAll('h2, h3');
    headings.forEach((heading) => {
        heading.classList.toggle('dark-mode-text');
    });
}
function showPopup() {
    alert("Coming Soon");
}


function closePopup() {
    const popup = document.getElementById('comingSoonPopup');
    popup.style.display = 'none';
}

const darkModeToggle = document.getElementById('darkModeToggle');
if (darkModeToggle) {
    darkModeToggle.addEventListener('click', toggleDarkMode);
}

const guildWakerLink = document.getElementById('guildWakerLink');
if (guildWakerLink) {
    guildWakerLink.addEventListener('click', function (event) {
        event.preventDefault();
        showPopup();
    });
}