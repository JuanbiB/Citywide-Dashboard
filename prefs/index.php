<?php

require("config.php");
if (!logged_in()) {
  header("Location: ./login.php");
}

?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Citywide Dashboard Preferences</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
</head>
<body>
  <div id="app">APPLICATION CONTENT</div>

  <script>__REACT_DEVTOOLS_GLOBAL_HOOK__ = parent.__REACT_DEVTOOLS_GLOBAL_HOOK__</script>
  <script type="text/javascript" src="assets/app.js"></script>
</body>
</html>
