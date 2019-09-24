<!DOCTYPE html>
<html>
<head>
  <title>WIP</title>
</head>
<body>
  <h1>
    List
  </h1>
    <?php

    $files = glob('/var/www/okju96.xyz/public_html/posts/*.html');

    usort($files, function($a, $b) {return filemtime($a) < filemtime($b);});

          foreach($files as $file) {
            $file_name = substr($file, 38);
            $file = substr($file, 31);
    ?>

        <div class="files">
          <div>
          <a href="<?php print "$file"; ?>">

    <?php
            print $file_name . "\n";
    ?>

          </a>
          </div><!--
      --><div>
            <p>
    <?php
            print "last modified " . date ("F d Y". filemtime($file));
    ?>
            </p>
          </div>
      </div>
    <?php
      }
    ?>

</body>
</html>
