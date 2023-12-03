// script.js - JavaScript to handle form submission and redirection
document.getElementById('registrationForm').addEventListener('submit', function(event) {
  event.preventDefault(); // Prevent form submission

  const firstName = document.getElementById('firstName').value;
  const lastName = document.getElementById('lastName').value;
  const email = document.getElementById('email').value;

  // Store data in localStorage (or you can send it to a server using AJAX/fetch)
  localStorage.setItem('firstName', firstName);
  localStorage.setItem('lastName', lastName);
  localStorage.setItem('email', email);

  window.location.href = 'index.html'; // Redirect to homepage after registration
});
