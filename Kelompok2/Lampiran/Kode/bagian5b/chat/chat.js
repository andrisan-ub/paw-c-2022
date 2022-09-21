<script>
const chat = document.querySelector('#chat');
const message = document.querySelector('#message');
const baseUrl = 'http://paw-c-2022.test/Kelompok2/Lampiran/Kode/bagian5b/chat';

function readChat() {
    fetch(`${baseUrl}/chat-read.php`)
        .then(res => res.text())
        .then(res => {
            chat.value = res;
        });

    setTimeout(readChat, 1000);
};

readChat();

message.addEventListener('keyup', e => {
    if (e.keyCode === 13) {
        fetch(`${baseUrl}/chat-write.php`, {
            method: 'post',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: `text=${message.value}`
        });

    message.value = '';
    }
});
</script>