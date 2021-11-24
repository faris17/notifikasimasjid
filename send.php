<?php
  require __DIR__ . '/vendor/autoload.php';

  $options = array(
    'cluster' => 'mt1',
    'useTLS' => true
  );
  $pusher = new Pusher\Pusher(
    '2ab2c1aaf4c61cc5c990',
    'e7ead15fc8dd4bf1f5f4',
    '1302915',
    $options
  );

  $data['title'] = $_POST['title'];
  $data['message'] = $_POST['message'];
  $pusher->trigger('my-channel', 'my-event', $data);
?>
