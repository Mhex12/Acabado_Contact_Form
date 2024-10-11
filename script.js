document.querySelector('form').addEventListener('submit', function(event) {
    const age = document.getElementById('age').value;
    if (age < 1) {
        alert("Age cannot be less than 1");
        event.preventDefault(); // Stop the form from submitting
    }
});
