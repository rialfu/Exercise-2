<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="design.css">
    <title>Document</title>
</head>
<body>
<div id="background"><!-- Main background -->

<div id="result"></div>
    
<div id="main">
    <div id="first-rows">
        <button class="del-bg" id="delete">Del</button>
        <button value="%" class="btn-style operator opera-bg fall-back">%</button>
        <button value="+" class="btn-style opera-bg value align operator">+</button>
    </div>
        
    <div class="rows">
        <button value="7" class="btn-style num-bg num first-child">7</button>
        <button value="8" class="btn-style num-bg num">8</button>
        <button value="9" class="btn-style num-bg num">9</button>
        <button value="-" class="btn-style opera-bg operator">-</button>
    </div>
        
    <div class="rows">
        <button value="4" class="btn-style num-bg num first-child">4</button>
        <button value="5" class="btn-style num-bg num">5</button>
        <button value="6" class="btn-style num-bg num">6</button>
        <button value="*" class="btn-style opera-bg operator">x</button>
    </div>
        
    <div class="rows">
        <button value="1" class="btn-style num-bg num first-child">1</button>
        <button value="2" class="btn-style num-bg num">2</button>
        <button value="3" class="btn-style num-bg num">3</button>
        <button value="/" class="btn-style opera-bg operator">/</button>
    </div>
        
    <div class="rows">
        <button value="0" class="num-bg zero" id="delete">0</button>
        <button value="." class="btn-style num-bg period fall-back">.</button>
        <button value="=" id="equal" class="eqn align">=</button>
    </div>
        
</div>
              
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="cal.js"></script>
</body>
</html>