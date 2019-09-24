<!DOCTYPE html>
<html>
<head>
  <meta type="description" content="This blog is a template page. Please change literally everything." />
  <title>Blog Testing</title>
  <style>
  <?php include_once("style.css"); ?>
  </style>
</head>
<body>
  <section>
  <h1>
    Blog Post Testing
  </h1>
    <div class="blogfeed">
    <?php
    $files = glob('/var/www/okju96.xyz/public_html/posts/*.html');
    usort($files, function($a, $b) {return filemtime($a) < filemtime($b);});
          foreach($files as $file) {
            $file_name = substr($file, 38);
            $file = substr($file, 31);
    ?>

        <div>
          <div>
            <p>
              <a href="<?php print "$file"; ?>">
                <?php print $file_name . "\n"; ?>
              </a>
            </p>
        </div>
      </div>
    <?php
      }
    ?>
    </div>
  </section>
</body>
</html>
