<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Mail</title>
    <style>
        .mail-container {
            background-color: orangered;

        }
        .mail-container h1 {
            font-family: impact;
        }
        .mail-container img {
            width: 200px;
            height: 100px;
            margin: auto;
        }
    </style>
</head>
<body>

    <div class="mail-container">
        <h1>{{ $mail_info['title'] }}</h1>
        <p>{{ $mail_info['content'] }}</p>
        <h2>{{ $mail_info['name'] }}</h2>
        <h4>{{ $mail_info['cell'] }}</h4>
        <img src="https://www.bellybelly.com.au/wp-content/uploads/2013/10/when-do-babies-start-talking.jpg" alt="">
    </div>

</body>
</html>
