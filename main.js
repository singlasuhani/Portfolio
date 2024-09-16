
document.addEventListener("DOMContentLoaded", function() {
    const titles = ['Web Developer', 'Software Developer', 'Tech Enthusiast'];
    let count = 0;
    const jobTitleElement = document.getElementById('jobTitle');

    function changeTitle() {
        jobTitleElement.textContent = titles[count];
        count = (count + 1) % titles.length;
    }

    setInterval(changeTitle, 1000); // Changes the title every 3000 milliseconds (3 seconds)
});
