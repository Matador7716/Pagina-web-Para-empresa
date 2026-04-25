<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora - El barrio - Nogales</title>
    <link rel="stylesheet" href="calc_style.css">
    <!-- Google Fonts for a modern look -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="calculator-container">
        <header>
            <h1>El barrio - Nogales</h1>
            <div class="mode-selector">
                <button id="btn-basic" class="active">Básica</button>
                <button id="btn-scientific">Científica</button>
            </div>
        </header>

        <div id="calculator" class="calculator basic-mode">
            <div class="display">
                <div id="previous-operand" class="previous-operand"></div>
                <div id="current-operand" class="current-operand">0</div>
            </div>

            <div class="buttons">
                <!-- Scientific Buttons (Hidden in basic mode) -->
                <button class="scientific-btn" data-action="sin">sin</button>
                <button class="scientific-btn" data-action="cos">cos</button>
                <button class="scientific-btn" data-action="tan">tan</button>
                <button class="scientific-btn" data-action="log">log</button>
                <button class="scientific-btn" data-action="ln">ln</button>
                <button class="scientific-btn" data-action="sqrt">√</button>
                <button class="scientific-btn" data-action="pow">x²</button>
                <button class="scientific-btn" data-action="pi">π</button>
                <button class="scientific-btn" data-action="exp">exp</button>
                <button class="scientific-btn" data-action="factorial">n!</button>

                <!-- Basic Buttons -->
                <button class="btn-clear span-two" data-action="all-clear">AC</button>
                <button class="btn-delete" data-action="delete">DEL</button>
                <button class="btn-operator" data-action="divide">÷</button>

                <button data-number>1</button>
                <button data-number>2</button>
                <button data-number>3</button>
                <button class="btn-operator" data-action="multiply">×</button>

                <button data-number>4</button>
                <button data-number>5</button>
                <button data-number>6</button>
                <button class="btn-operator" data-action="subtract">-</button>

                <button data-number>7</button>
                <button data-number>8</button>
                <button data-number>9</button>
                <button class="btn-operator" data-action="add">+</button>

                <button data-number>.</button>
                <button data-number>0</button>
                <button class="btn-equals span-two" data-action="equals">=</button>
            </div>
        </div>
    </div>

    <script src="calc_script.js"></script>
</body>
</html>
