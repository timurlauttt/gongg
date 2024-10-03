document.getElementById('status-form').addEventListener('submit', function(e) {
    e.preventDefault(); // Prevent the form from submitting normally
    
    const token = document.getElementById('token').value; // Get the token input
    const statusResult = document.getElementById('status-result'); // Reference to the result div

    // Simulate an API call or a response from the backend with token validation
    // You can replace this with an actual fetch call to your server
    setTimeout(() => {
        let mockResponse = "Status Perbaikan: Selesai"; // This would be your actual status from the server
        statusResult.textContent = mockResponse; // Update the div with the response
        statusResult.classList.remove('hidden'); // Show the result
    }, 1000); // Simulating a delay for response
});