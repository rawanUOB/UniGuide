<!DOCTYPE html>
<html lang="en" data-theme="lofi">
<!-- blade is just HTML -->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ isset($title) ? $title . ' - UniGuide' : 'UniGuide' }}</title>
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
<link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen flex flex-col bg-base-200 font-sans">
<nav class="navbar bg-base-100 sticky top-0 z-50">
<div class="navbar-start">
<a href="/" class="btn btn-ghost text-xl">UniGude</a>
<div class="flex space-x-4">
        <a href="{{ route('home') }}"  class="btn btn-ghost px-3 py-2 font-medium text-gray-700 hover:text-gray-900 shadow-md">Home</a>
        <a href="{{ route('scholarships') }}" class="btn btn-ghost px-3 py-2 font-medium text-gray-700 hover:text-gray-900 shadow-md  ">Scholerships</a>
        <a href="{{ route('academic-tests') }}" class="btn btn-ghost px-3 py-2 font-medium text-gray-700 hover:text-gray-900 shadow-md">Academic test</a>
    </div>
</div>
<!--<nav class = "bg-white shadow-md">
<div class="navbar-center hidden lg:flex">
    <div class="flex space-x-4">
        <a class="btn btn-ghost px-3 py-2 font-medium text-gray-700 hover:text-gray-900 shadow-md">Home</a>
        <a class="btn btn-ghost px-3 py-2 font-medium text-gray-700 hover:text-gray-900 shadow-md ">Scholerships</a>
        <a class="btn btn-ghost px-3 py-2 font-medium text-gray-700 hover:text-gray-900 shadow-md">Academic test</a>
    </div>
</div>
</nav> -->

<div class="navbar-end gap-2">
<a href="#" class="btn btn-ghost btn-sm">Sign In</a>
<a href="#" class="btn btn-primary btn-sm">Sign Up</a>
</div>
</nav>
<main class="flex-1 container mx-auto px-4 py-8">
    {{ $slot }}
</main>

<footer class="footer footer-center p-5 bg-base-300 text-base-content text-xs">
    <div>
        <p>©contact info:</p>
    </div>
</footer>

<!-- the chatbot code -->
<div id="chatBot" class="fixed bottom-6 right-6 bg-green-600 p-4 rounded-full cursor-pointer hover:bg-green-700 shadow-lg">
    <img src="{{ asset('images/chatbot.jpg') }}" alt="Chatbot Icon" class="w-6 h-6">   
</div>

<div id="box" class="hidden fixed bottom-20 right-6 w-80 bg-white shadow-xl rounded-xl flex flex-col mb-2">
    <div class="bg-green-600 text-white p-3 rounded-t-xl">
        UniGuide Chatbot
    </div>
    <div id="content" class="p-3 h-64 overflow-y-auto text-sm text-gray-700">
        Hello! How can I assist you today?
    </div>

    <div class="flex border-t">
        <input id="user_input" type="text" placeholder="write your question here..." class="flex-1 p-2 outline-none">
        <button onclick="sendMessage()" class="bg-green-600 text-white px-4 cursor-pointer hover:bg-green-700">Send</button>
    </div>
</div>

<script>
document.getElementById('chatBot').onclick = () => {
    document.getElementById('box').classList.toggle('hidden');
}; 

function sendMessage() {
    let input = document.getElementById('user_input');
    let msg = input.value;

    if (!msg.trim()) 
        return;

    let message = document.getElementById('content');

    // Display the user's message in the chat box but make sure its secure (no XSS)
    let userBubble = document.createElement('div');
    userBubble.className = "bg-green-100 text-green-900  rounded-xl px-3 py-2 mb-2 max-w-[75%] ml-auto border-l-4 border-green-600";
    userBubble.textContent = "You: " +msg; // This will automatically escape any HTML tags in the message
    message.appendChild(userBubble);

    fetch('/chatbot', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({ message: msg })
    })
    .then(response => response.json())
    .then(data => {
        let message = document.getElementById('content');

        //the bot response
        let botBubble = document.createElement('div');
        botBubble.className = "bg-blue-100 text-blue-900 self-start rounded-xl px-3 py-2 mb-2 max-w-[75%] border-l-4 border-blue-600";
        botBubble.textContent = "UniGuideBot: " + data.answer; // This will automatically escape any HTML tags in the message
        message.appendChild(botBubble);
        message.scrollTop = message.scrollHeight; // Scroll to the bottom of the chat
    })

    input.value = '';
}

//so when the user presses enter it will send the message as well
document.getElementById('user_input').addEventListener('keypress', function(e) {
    if (e.key === 'Enter') {
        sendMessage();
    }
});
</script>
<!--end of chatbot code -->

</body> 
</html>