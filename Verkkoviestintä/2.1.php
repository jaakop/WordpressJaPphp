<!DOCTYPE html>
<html>
  <head>
    <title>Palkkalaskuri</title>
  </head>
  <body>
    <form method="post">
      Nimi: <input type="text" name="nimi"><br>
      Tuntipalkka: <input type="text" name="tuntipalkka"> <br>
      Tuntimäärä: <input type="text" name="tuntimaara"> <br>
      Veroprosentti: <input type="text" name="veroprosentti"> <br>
      <input type="submit" value="Lähetä">
    </form>
    <?php
    if(isset($_POST["tuntipalkka"])&&isset($_POST["tuntimaara"])&&isset($_POST["veroprosentti"])&&isset($_POST["nimi"])){
    $tuntipalkka = $_POST["tuntipalkka"];
    $tuntienmaara = $_POST["tuntimaara"];
    $veroprosentti = $_POST["veroprosentti"];
    $kokonaispalkka= $tuntipalkka * $tuntienmaara;
    echo "Nimesi: " . $_POST["nimi"] . "<br>";
    echo "Bruttopalkka: " . $kokonaispalkka . "<br>";
    echo "Nettopalkka: " . $kokonaispalkka*(1-($veroprosentti/100));
}
    ?>
  </body>
</html