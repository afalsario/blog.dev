<!DOCTYPE HTML>
<html>
<head>
    <title></title>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<link rel="stylesheet" href="/whack-a-mole/css/whack.css">
</head>
<body>
    <h1>Laser Time</h1>
    <button id="gameOn">Bring on the pain!</button>
    <br>
    Timer: <span id="timer">60</span>
    <br>
    Pulses: <span id="score"></span>
    <br>

    <audio id="laser" preload="auto">
        <source src="/whack-a-mole/sound/laser.wav" type="audio/wav">
    </audio>

    <audio id="cryo" preload="auto">
        <source src="/whack-a-mole/sound/cryo.wav" type="audio/wav">
    </audio>

    <div id="box">
        <div class='box'>
            <img class='mole' src="/whack-a-mole/img/hair.png">
        </div>
        <div class='box'>
            <img class='mole' src="/whack-a-mole/img/hair.png">
        </div>
        <div class='box'>
            <img class='mole' src="/whack-a-mole/img/hair.png">
        </div>
        <div class='box' class='left-middle'>
            <img class='mole' src="/whack-a-mole/img/hair.png">
        </div>
        <div class='box'>
            <img class='mole' src="/whack-a-mole/img/hair.png">
        </div>
        <div class='box'>
            <img class='mole' src="/whack-a-mole/img/hair.png">
        </div>
        <div class='box' class="left-bottom">
            <img class='mole' src="/whack-a-mole/img/hair.png">
        </div>
        <div class='box'>
            <img class='mole' src="/whack-a-mole/img/hair.png">
        </div>
        <div class='box'>
            <img class='mole' src="/whack-a-mole/img/hair.png">
        </div>
    </div>

<script src="/whack-a-mole/js/whack.js"></script>

</body>
</html>
