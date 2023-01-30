<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameDay</title>
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/kute.js@2.2.4/dist/kute.min.js"></script>
    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            max-height: fit-content;
            height: 100vh;
        }

        html {
            background-image: url("/img/ball.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 100%;
        }

        html::after {
            content: "";
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 100%;
            background-image: url("/img/wave.png");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body>
    <section style="position: relative;">
        <div class="container" style="flex: auto;">
            <div style="color: white;">
                <h1>Plan your Team. Plan your Game.</h1>
            </div>
        </div>
        <svg id="visual" viewBox="0 0 960 540" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
            <path id="wave1" d="M0 401L22.8 397.5C45.7 394 91.3 387 137 385.5C182.7 384 228.3 388 274 389.8C319.7 391.7 365.3 391.3 411.2 399.3C457 407.3 503 423.7 548.8 445.5C594.7 467.3 640.3 494.7 686 505.5C731.7 516.3 777.3 510.7 823 497C868.7 483.3 914.3 461.7 937.2 450.8L960 440L960 541L937.2 541C914.3 541 868.7 541 823 541C777.3 541 731.7 541 686 541C640.3 541 594.7 541 548.8 541C503 541 457 541 411.2 541C365.3 541 319.7 541 274 541C228.3 541 182.7 541 137 541C91.3 541 45.7 541 22.8 541L0 541Z" fill="#FFFFFF" stroke-linecap="round" stroke-linejoin="miter"></path>
            <path id="wave2" d="M0 424L22.8 441.5C45.7 459 91.3 494 137 509.7C182.7 525.3 228.3 521.7 274 506C319.7 490.3 365.3 462.7 411.2 455.3C457 448 503 461 548.8 473.3C594.7 485.7 640.3 497.3 686 498.8C731.7 500.3 777.3 491.7 823 475.5C868.7 459.3 914.3 435.7 937.2 423.8L960 412L960 541L937.2 541C914.3 541 868.7 541 823 541C777.3 541 731.7 541 686 541C640.3 541 594.7 541 548.8 541C503 541 457 541 411.2 541C365.3 541 319.7 541 274 541C228.3 541 182.7 541 137 541C91.3 541 45.7 541 22.8 541L0 541Z" fill="#FFFFFF" stroke-linecap="round" stroke-linejoin="miter" style="visibility: hidden;"></path>
            <path id="wave3" d="M0 377L22.8 388.7C45.7 400.3 91.3 423.7 137 426C182.7 428.3 228.3 409.7 274 411.2C319.7 412.7 365.3 434.3 411.2 457.5C457 480.7 503 505.3 548.8 516.8C594.7 528.3 640.3 526.7 686 513.2C731.7 499.7 777.3 474.3 823 451.2C868.7 428 914.3 407 937.2 396.5L960 386L960 541L937.2 541C914.3 541 868.7 541 823 541C777.3 541 731.7 541 686 541C640.3 541 594.7 541 548.8 541C503 541 457 541 411.2 541C365.3 541 319.7 541 274 541C228.3 541 182.7 541 137 541C91.3 541 45.7 541 22.8 541L0 541Z" fill="#FFFFFF" stroke-linecap="round" stroke-linejoin="miter" style="visibility: hidden;"></path>
        </svg>
        <script>
            var tween = KUTE.fromTo('#wave1', {
                path: '#wave2'
            }, {
                path: '#wave3'
            }, {
                repeat: 999,
                duration: 3000,
                yoyo: true
            }).start();
        </script>
    </section>

</body>

</html>