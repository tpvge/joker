<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/style.css'])
    <title>Document</title>
</head>
<body>
    <div class="main">
        <div class="container">
            <div class="title">
                <h2>Добро пожаловать!</h2>
            </div>
            <div class="block">
                <div class="apps">
                    <div class="app">
                        <h3>Joker</h3>
                        <img src="\img\joker.png" alt="">
                    </div>
                    <div class="block--button">
                        <a href="/newGame/{id}">Новая игра</a>
                        <a href="">Подключиться</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>