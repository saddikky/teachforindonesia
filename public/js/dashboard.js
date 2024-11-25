document.addEventListener("DOMContentLoaded", function() {
    const progressCircle = document.getElementById("progress-circle");
    const progressValue = document.getElementById("progress-value");

    // Check if the comserve value is set properly
    const comserve = window.userComserve || 0; // Default to 0 if undefined

    // Set the max value for community service hours
    const maxComserve = 30;

    // Set the radius of the circle
    const radius = 70; // Radius of the circle (adjust according to your design)
    const circumference = 2 * Math.PI * radius; // Calculate the circumference

    // Set the stroke-dasharray and initial stroke-dashoffset
    progressCircle.style.strokeDasharray = circumference; // Set the dasharray to the circumference
    progressCircle.style.strokeDashoffset = circumference; // Start with no progress

    // Check if comserve is 0
    if (comserve === 0) {
        // Display "0/30" and set progress to 0%
        progressValue.textContent = `0/${maxComserve}`;
        progressCircle.style.strokeDashoffset = circumference; // Full circle (no progress)
    } else {
        // Otherwise, calculate the percentage and update the circle
        const percentage = (comserve / maxComserve) * 100; // Calculate percentage
        const offset = circumference - (percentage / 100) * circumference; // Calculate the offset

        // Apply the stroke offset to show the progress
        progressCircle.style.strokeDashoffset = offset;

        // Update the text in the center of the circle with "comserve/30"
        progressValue.textContent = `${comserve}/${maxComserve}`;
    }
});