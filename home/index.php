<?PHP
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);

//ini_set("session.cookie_lifetime","7200");
//ini_set("session.gc_maxlifetime","7200");

session_start();

include_once "../clases/fun_aux_menu.php";
include_once "../clases/fechas.php";

//Comprobamos los usuarios
$conn = pg_pconnect("host=localhost port=5432 dbname=tienda user=jonathan password=jonathan");

$result = pg_query($conn, "SELECT * FROM usuarios WHERE dni='". $_SESSION['dni'] ."' AND pass='". $_SESSION['pass'] ."'");
if (!$result) {
  echo "Ocurrió un error.\n";
  exit;
}

$row = pg_fetch_row($result);
if ($row[0] == ''){
	 print("<script>document.location.href='../index.html'</script>");
}


?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Panel de Gestión</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <link rel="shortcut icon" href="../assets/favicon.ico">
    <link rel="stylesheet" href="../assets/css/basic.css">
    <link rel="stylesheet" href="../assets/css/general.css">
    <link rel="stylesheet" href="../assets/css/theme.css" class="style-theme">
    
  </head>
  <body class="l-header-sticky-1">
    
    <!--SECTION-->
    <section class="l-main-container has-header-1">

      <section class="l-container">
        
        <?PHP imprimir_cabeza("panel") ?>

        <div class="l-page-header" align="center">
          <h2 class="l-page-title"><span>PANEL DE GESTIÓN</span></h2>
          <h2 class="l-page-title">Buenas <?PHP echo "$row[1]" ?> </h2>
          <!--BREADCRUMB-->
          <ul class="breadcrumb t-breadcrumb-page">
          </ul>
        </div>

<?PHP

$result = pg_query($conn, "SELECT * FROM productos");
if (!$result) {
  echo "Ocurrió un error.\n";
  exit;
}

print("<table class='table table-striped'>
<thead>
 <tr>
  <th>PRODUCTOS</th>
  <th>PRECIO</th>
 </tr>
</thead>
<tbody>");

while ($row = pg_fetch_row($result)) {
  echo "<tr><td> $row[1]</td>  <td>Precio: $row[2] </td></tr>";
}


print("</tbody>
</table>");


?>






      </section>

    </section>
    <!-- ===== JS =====-->
    <!-- jQuery -->
    <script src="../assets/js/basic/jquery.min.js"></script>
    <script src="../assets/js/basic/jquery-migrate.min.js"></script>
    <script src="../assets/js/shared/jquery-ui.min.js"></script>
    <script src="../assets/js/shared/jquery.ui.touch-punch.min.js"></script>
    <!-- General-->
    <script src="../assets/js/basic/modernizr.min.js"></script>
    <script src="../assets/js/basic/bootstrap.min.js"></script>
    <script src="../assets/js/shared/jquery.asonWidget.js"></script>
    <script src="../assets/js/plugins/plugins.js"></script>
    <script src="../assets/js/general.js"></script>
    <script src="../assets/js/plugins/pageprogressbar/pace.min.js"></script>
    <script src="../assets/js/shared/classie.js"></script>
    <script src="../assets/js/shared/jquery.cookie.min.js"></script>
    <script src="../assets/js/shared/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/charts/c3/c3.min.js"></script>
    <script src="../assets/js/plugins/charts/c3/d3.v3.min.js"></script>
    <script src="../assets/js/plugins/charts/other/jquery.sparkline.min.js"></script>
    <script src="../assets/js/plugins/forms/elements/jquery.bootstrap-touchspin.min.js"></script>
    <script src="../assets/js/plugins/forms/elements/jquery.checkBo.min.js"></script>
    <script src="../assets/js/plugins/forms/elements/jquery.switchery.min.js"></script>
    <script src="../assets/js/plugins/tooltip/jquery.tooltipster.min.js"></script>
    <script src="../assets/js/calls/dashboard.2.js"></script>
    <script src="../assets/js/calls/part.header.1.js"></script>
    <script src="../assets/js/calls/part.sidebar.2.js"></script>
    <script src="../assets/js/calls/part.theme.setting.js"></script>
    
    <script src="../assets/js/plugins/accordions/jquery.collapse.js"></script>
    <script src="../assets/js/plugins/accordions/jquery.collapse_storage.js"></script>
    <script src="../assets/js/plugins/accordions/jquery.collapse_cookie_storage.js"></script>
    <script src="../assets/js/plugins/accordions/jquery.collapsible.min.js"></script>
    <script src="../assets/js/calls/ui.accordions.js"></script>
  </body>
</html>
