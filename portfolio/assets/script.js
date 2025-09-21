document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    const form = e.target;
    const formData = new FormData(form);
    fetch('contact.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById('formMessage').innerText = data;
        form.reset();
    })
    .catch(() => {
        document.getElementById('formMessage').innerText = 'Error sending message.';
    });
});