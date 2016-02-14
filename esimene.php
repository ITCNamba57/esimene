<html>
  <head>
    <title>My page</title>
    <link rel="stylesheet" type="text/css" href="mystyle.css">
  </head>
  <body>
    <H1>My Page</H1>
    <p>Hello world!</p>

    <p>
      <img id="blocks" onclick="changeImage()" src="abc-blocks.jpg">
    </p>
    <p>Click image to change it!</p>

    <script>
    function changeImage() {
        var image = document.getElementById('blocks');
        if (image.src.match("abc-blocks")) {
            image.src = "xyz-blocks.jpg";
        } else {
            image.src = "abc-blocks.jpg";
        }
    }
    </script>
    <p>
    <?php
    echo "I am PHP counter!<br>";

    $file = 'counter.txt';
    
    

    $current = file_get_contents($file);
    $current = $current + 1;
    file_put_contents($file, $current);

    echo "Counter is: " . $current;
    
    ?>
    </p>
    

  </body>
</html>
