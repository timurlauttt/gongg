// Show the modal when the reserve button is clicked
document.getElementById('reserve-btn').onclick = function() {
    // Generate or set the tracking number dynamically here
    const trackingNumber = 'TRK-' + Math.floor(Math.random() * 1000000);
    document.getElementById('tracking-number').innerText = trackingNumber;

    // Display the modal
    document.getElementById('modal').style.display = 'flex';
};

// Close the modal
document.getElementById('close-modal').onclick = function() {
    document.getElementById('modal').style.display = 'none';
};
