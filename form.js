const messageForm = document.getElementById('message-form');

console.log({messageForm})

if (messageForm) {

  messageForm.addEventListener('submit', (e) => {
    e.preventDefault();

    fetch('/wp-admin/admin-ajax.php?action=send_message_form', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded'
      },
      body: new URLSearchParams(new FormData(messageForm))
    }).then(response => {

      return response.json();

    }).then(jsonResponse => {

      console.log({jsonResponse});

    });

  });
}
