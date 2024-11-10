document.getElementById('ajax-button').addEventListener('click', function () {
    const data = {
        action: 'custom_ajax_action' // Tells WordPress which action to execute on the server
    };

    fetch(ajax_object.ajax_url, {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: new URLSearchParams(data)
    })
    .then(response => response.json())
    .then(result => {
        document.getElementById('ajax-response').textContent = result.message;
    })
    .catch(error => console.error('Error:', error));
});
