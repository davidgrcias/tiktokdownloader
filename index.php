<?php require 'tiktokdownloader.php'; ?>
<html>
  <head>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>
  </head>
  <body>
    <form action="" method="post">
      <input type="text" name="tiktok-url" value="">
      <button type="submit" name="button">Convert</button>
    </form>
    <?php
    if(isset($_POST["tiktok-url"])){
      $check = check($_POST['tiktok-url']);
      $contentURL = contentURL($check[1]);
    }
        ?>
        <script type="text/javascript">
            $('body').append("<a id = 'wmarked_link'></a>");
            $.get('index.php?url=<?php echo $contentURL; ?>').done(function(data){
              $('#wmarked_link').attr('href', data);
              $('#wmarked_link').attr('download', data);
              $('#wmarked_link').text("Download");
            })
        </script>
  </body>
</html>
