<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>PHP in the Cloud</title>
    <meta charset='utf-8'>
    <link href='resources/stylesheets/comstrap.min.css' rel='stylesheet'>
  </head>
  <body>
    <div class='container'>

      <div class='row' style='margin-top:2em;margin-bottom:1em'>
        <div class='col-xs-12'>
          <img alt='Ruby' src='resources/images/php.svg' style='height:3em'>
        </div>
      </div>

      <div class='row' style='margin-top:1em;margin-bottom:1em'>
        <div class='col-xs-12'>
          <h1>This is PHP in the Cloud!</h1>
          <p class='lead'>Congratulations! You successfully pushed a PHP App into the Cloud.</p>
        </div>
      </div>

      <div class='row' style='margin-top:1em;margin-bottom:1em'>
        <div class='col-xs-12'>
          <div class='alert alert-info'>
            <p>
              <strong>Getting Started</strong>
            </p>
            <br>
            <ul>
              <li>
                To push your own source code, either upload it as a ZIP file to the portal or use the
                <a href='https://github.com/cloudfoundry/cli#downloads'>cf CLI</a>
                instead.
              </li>
              <li>
                <a href='https://docs.developer.swisscom.com/tutorial-php/'>This tutorial</a>
                will get you started on the whole process.
              </li>
            </ul>
          </div>
        </div>
      </div>

      <?php if ($_ENV){ ?>
        <div class='row' style='margin-top:1em;margin-bottom:1em'>
          <div class='col-xs-12'>
            <h3>Environment Variables</h3>
            <pre><?php foreach($_ENV  as $key => $value){ ?><p style="margin-bottom:0.1em"><strong><?=$key; ?>:</strong><span class="text-danger"> <?=$value; ?></span></p><?php } ?></pre>
          </div>
        </div>
      <?php } ?>

      <?php if ($_REQUEST){ ?>
        <div class='row' style='margin-top:1em;margin-bottom:1em'>
          <div class='col-xs-12'>
            <h3>Request Parameters</h3>
            <pre><?php foreach($_REQUEST  as $key => $value){ ?><p style="margin-bottom:0.1em"><strong><?=$key; ?>:</strong><span class="text-danger"> <?=$value; ?></span></p><?php } ?></pre>
          </div>
        </div>
      <?php } ?>

    </div>
  </body>
</html>

