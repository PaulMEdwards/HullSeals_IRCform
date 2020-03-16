<?php
  $n = $_GET['nick'];
  if (isset($n)) {
    header("Location: https://client.hullseals.space:8443/repair.html?nick=" . $n);
    exit();
  } else {
    header("Location: ./index.html");
    exit();
  }
?>