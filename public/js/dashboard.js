document.addEventListener("DOMContentLoaded", function() {
    const progressCircle = document.getElementById("progress-circle");
    const progressValue = document.getElementById("progress-value");

    const percentage = 75; // Adjust this value as needed

    const radius = 45;
    const circumference = 2 * Math.PI * radius;
    const offset = circumference - (percentage / 100) * circumference;

    progressCircle.style.strokeDashoffset = offset;
    progressValue.textContent = `${percentage}%`;
});
