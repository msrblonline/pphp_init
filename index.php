<!DOCTYPE html>
<html lang="en">
<head>
  <title>${{project_name}}</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta name="description" content="" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="resources/css/style.css" />
  <link rel="icon" href="resources/grapics/favicon.png">
</head>
<body>
  <div id="fadein"></div>
  <h1><?php echo 'hello world' ?></h1>
  <div id="cookie-notice" class="w-100 bg-dark text-white pt-3 px-4 pb-1 position-fixed" style="z-index: 1000; bottom: 0;">
    <div class="container p-2">
      <div class="row">
        <div class="col-sm-8 col-md-9">
          <p class="p-2">This website uses cookies so that we can provide you with the best website experience. By clicking “I Accept” you acknowledge the use of cookies and to our <a href="#"><u>Privacy Policy</u></a>.</p> 
        </div>
        <div class="col-sm-4 col-md-3">
          <a class="i-accept btn btn-primary m-2">I Accept</a>
        </div>
      </div>
    </div>
  </div>
  <!--[if IE]><div class="w-100 text-center bg-dark text-white pt-3 px-4 pb-1 position-fixed" style="z-index: 1000; bottom: 0;"><p onClick="parentNode.remove()">Please use a modern browser for a better browsing experience. <span class="float-right">X</span></p></div><![endif]-->
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="resources/js/javascript.js"></script>
</body>
</html>