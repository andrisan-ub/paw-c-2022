<script>
const chat = document.querySelector(‘#chat’);
const message = document.querySelector(‘#message’);
const baseUrl = ‘http://localhost/chat’;

function readChat() {
fetch(`${baseUrl}/chat-read.php`)
.then(res => res.text())
.then(res => {
chat.value = res;
});

setTimeout(readChat, 1000);
};

readChat();
const button = document.querySelector(‘#greet’);

button.addEventListener(‘click’

, () => {

const name = document.querySelector(‘#name’).value;
const url = ‘http://localhost/ajax/ajax.php’;

fetch(url, {
method: ‘post’
,

headers: {
‘Content-Type’: ‘application/x-www-form-urlencoded’
,

},
body: `name=${name}`
})
.then(res => res.text())
.then(res => {
alert(res);
});
});
</script>