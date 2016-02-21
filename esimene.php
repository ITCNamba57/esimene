<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
      <html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
  <head>
    <meta name="My Page" content="praktika I244"/>
    <title>My page</title>
    <link rel="stylesheet" type="text/css" href="mystyle.css"/>
  </head>
  <body>
    
    <h1>My Page</h1>
    <p>Hello world!</p>

    <p>
      <img id="blocks" onclick="changeImage()" src="abc-blocks.jpg" alt="blocks" />
    </p>
    <p>Click image to change it!</p>

    <script type="text/javascript">
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
    echo "I am PHP counter!<br/>";

    $file = 'counter.txt';
    
    

    $current = file_get_contents($file);
    $current = $current + 1;
    file_put_contents($file, $current);

    echo "Counter is: " . $current;
    
    ?>
    </p>
    
    
    <p>
 <a href="http://validator.w3.org/check?uri=referer">
  <img id ="logo" src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" />
 </a>
</p>

  </body>
</html>
