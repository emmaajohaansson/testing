<?php
  require 'vendor/autoload.php';

  use Monolog\Logger;
  use Monolog\Handler\StreamHandler;

  $log = new Logger('Laboration 1');
  $log->pushHandler(new StreamHandler('greetings.log', Logger::INFO));

  //echo "Hello World!";

  /*var_dump($argv);

  $name = $argv[1];
  $log->info("Hello " . $name . "! What a wonderful name!");*/

  $name = $_GET['name'];
  $log->info($name);
?>
<!DOCTYPE html>
  <html>
    <head>
    <link rel="stylesheet" type="text/css" href="background.css">
    <title>Testing, testing</title>
    </head>
    <body>
      <?php
        echo "Hello, " . $name;
      ?>
    </body>
  </html>
