
<!DOCTYPE html>

<html>
  <head>
    <title>dentaku.php2</title>
  </head>
  <body>

    <form name="form" action="dentaku2.php" method="post">
      <input type = "text" name = "txtA">

      <select name="selOpe" size=1>
        <option value = "＋">＋</option>
        <option value = "－">－</option>
        <option value = "×">×</option>
        <option value = "÷">÷</option>
      </select>

      <input type = "text" name = "txtB">

      <br>
      <input type = "submit" name ="Submit" value = "計算">
      <input type = "reset" value = "クリア">

    </form>

    <?php

    if (isset($_POST['Submit'])){
      $err_msg = "";
      $answer = "";
      $ope =$_POST['selOpe'];

      if (!isset($txta, $txtb, $ope)){
        $err_msg = '文字を入力してください';

      } elseif (!is_numeric($txta) || !is_numeric($txtb)){
        $err_msg ='数値を入力してください';
      }

      $txta = mb_convert_kana($_POST['txtA'],"n");
      $txtb = mb_convert_kana($_POST['txtB'],"n");

      switch ($ope) {
        case "＋":
          $answer = $txta + $txtb;
          break;
        case "－":
          $answer = $txta - $txtb;
          break;
        case "×":
          $answer = $txta * $txtb;
          break;
        case "÷":
          if ($txtb == 0){
            $err_msg = '0で割れないです';
            break;
            }
          $answer = $txta / $txtb;
          break;
        default:
          $err_msg ='計算できません';
          break;
        }

      if(!empty($err_msg)){
        print "$err_msg";
      }else{
        print to_html($txta . " " . $ope . " " . $txtb . " = " . $answer . "\n");
      }
    }

    function to_html($str, $charset = 'UTF-8'){
      return htmlspecialchars($str, ENT_QUOTES, $charset);
    }



    ?>
    <br />
    <br />

  </body>
</html>