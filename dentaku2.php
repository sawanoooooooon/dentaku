


<html>
  <head>
    <title>dentaku.php2</title>
  </head>
  <body>

  <form name="form1" action="dentaku2.php" method="post">
      <input type = "text" name = "txtA">　

      <select name="selOpe" size=1>
        <option value = "＋">＋</option>
        <option value = "－">－</option>
        <option value = "×">×</option>
        <option value = "÷">÷</option>
      </select>　

      <input type = "text" name = "txtB">　=　?　
      
      <br>
      <input type = "submit" value = "計算">
      <input type = "reset" value = "クリア">

    </form>
    
    <?php
    //var_dump(isset($_POST['txtA'], $_POST['txtB'], $_POST['selOpe']));
    //var_dump(is_numeric($_POST['txtA']));
      function e($str, $charset = 'UTF-8'){
        return htmlspecialchars($str, ENT_QUOTES, $charset);
      }


      if (isset($_POST['txtA'], $_POST['txtB'], $_POST['selOpe']) && is_numeric($_POST['txtA']) && is_numeric($_POST['txtB'])) {
        
        


          $a = e($_POST['txtA']);
          $b = e($_POST['txtB']);
          $ope = e($_POST['selOpe']);

          

              switch ($ope) {
                case "＋":
                  $answer = $a + $b;
                  break;
                case "－":
                  $answer = $a - $b;
                  break;
                case "×":
                  $answer = $a * $b;
                  break;
                case "÷":
                  $answer = $a / $b;
                  break;
                default:
                  break;
              }

              
              print ($a." ".$ope." ".$b." = ".$answer."\n");
            

        }else{
          print '入力した文字は不正';
          }
      

        ?>
    <br />
    <br />
    
  </body>
</html>