<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Application</title>
    <link rel="stylesheet" href="./css/app.css" />
</head>
<body>
    <div class="app">
         <img src="{{ URL::to('/assets/logo.jpg')}}" class="logo">
         <input type="text" name="username" id="username" placeholder="Enter Username..." />
        <div class="messaging">
        <div id="messages"></div>
        <form id="message_form">
            <input type="text" name="message" id="message_input" placeholder="Message..." class="message-input"/>
            <button type="submit" id="message_send">Send</button>
        </form>
        <div>
    </div>
    <script src="./js/app.js"></script>
</body>
</html>
