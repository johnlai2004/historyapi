<?php 

?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Load More</title>
    <script>
      let page = 0;
      function loadMore(){
        page++;
        const li = document.createElement('li');
        li.innerHTML = '<a href="page.php?p='+page+'">Go to page</a>';
        document.querySelector('ol').append(li);
        history.replaceState({page: page}, 'Results', `?page=${page}`);
      };
    </script>
  </head>
  <body>
    <ol>
    <?php
    if(isset($_REQUEST['page']))
      for($c=0;$c<$_REQUEST['page'];$c++)
      echo '<li><a href="page.php?p='.$c.'">Go to page</a></li>';
    ?>
    </ol>
    <button type="button" onClick="loadMore();">Load More</button>
  </body>
</html>
