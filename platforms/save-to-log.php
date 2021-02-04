<?php
  $log_file_name = 'mylog.log'; // Change to the log file name
  $message = $_POST['message']. '*  '.
  $_POST['message2']. '*  '. 
  $_POST['message3']. '*  '.
  $_POST['message4']. '*  '.
  $_POST['message5']. '*  '.
  $_POST['message6']. '*  '.
  $_POST['message7']. '*  '.
  $_POST['message8']. '*  '.
  $_POST['message9']. '*  '.
  $_POST['message10']. '*  ';
    file_put_contents('mylog.log', '');
  file_put_contents($log_file_name, $message, FILE_APPEND);
  header('Location: /headlines.html'); // redirect back to the main site
  
