<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>JavaScript</h1>
    <ul>
    <script type="text/javascript">
      list = new Array("최", "김", "한","하");
      i=0;
      while(i<list.length){
        document.write("<li>"+list[i]+"</li>");
        i= i+1;
      }
    </script>
    </ul>
    <h1>php</h1>
    <ul>
    <?php
      $list = array("최","김","한","하");
      $i=0;
      while($i<count($list)){
        echo "<li>".$list[$i]."</li>";
        $i = $i + 1;
      }
     ?>
     </ul>
  </body>
</html>
