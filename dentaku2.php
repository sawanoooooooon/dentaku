
<!DOCTYPE html>

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

      <input type = "text" name = "txtB">  =  ?

      <br>
      <input type = "submit" value = "計算">
      <input type = "reset" value = "クリア">

    </form>

    <?php
    //var_dump(isset($_POST['txtA'], $_POST['txtB'], $_POST['selOpe']));
    //var_dump(is_numeric($_POST['txtA']));

    $err_msg = "";


    //if (isset($_POST['txtA'], $_POST['txtB'], $_POST['selOpe']) && is_numeric($_POST['txtA']) && is_numeric($_POST['txtB']) && ($_POST['txtB'])!= 0){
    if (!isset($_POST['txtA'], $_POST['txtB'], $_POST['selOpe'])){
      $err_msg = '文字を入力してください';

    } elseif (!is_numeric($_POST['txtA']) && !is_numeric($_POST['txtB'])){
      $err_msg ='数値を入力してください';

    } elseif (($_POST['selOpe']) == "÷" && ($_POST['txtB']) == 0){
      $err_msg ='0で割れないです';
    }

    if(!empty($err_msg)){
      print e("$err_msg");

    }else{
      $a = $_POST['txtA'];
      $b = $_POST['txtB'];
      $ope = $_POST['selOpe'];

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

      print e($a . " " . $ope . " " . $b . " = " . $answer . "\n");
    }

    function e($str, $charset = 'UTF-8'){
      return htmlspecialchars($str, ENT_QUOTES, $charset);
    }

    ?>
    <br />
    <br />

  </body>
</html>