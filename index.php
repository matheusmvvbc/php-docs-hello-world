<?php
echo '
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Papagaio Dançante</title>
    <style>
        body {
            background: #f0f8ff;
            font-family: monospace;
            font-size: 18px;
            text-align: center;
            padding-top: 50px;
        }
        pre {
            display: inline-block;
            background: #fff;
            padding: 20px;
            border: 2px dashed #00aa00;
            border-radius: 10px;
        }
    </style>
</head>
<body>

<pre id="parrot"></pre>

<script>
const frames = [
`         \\
         (o>
     \\\\_//)
      \\_/_)
     ~(_)~ 
   DANCIN’ PARROT!`,

`         //
         (o>
     \\\\_//)   ♪ ♫
      \\_/_)
     ~(_)~   ♫ ♪
   DANCIN’ PARROT!`
];

let currentFrame = 0;
const parrot = document.getElementById("parrot");

setInterval(() => {
    parrot.textContent = frames[currentFrame];
    currentFrame = (currentFrame + 1) % frames.length;
}, 500);
</script>

</body>
</html>
';
?>

