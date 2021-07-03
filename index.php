<?php
use app\basis\router;
use app\lib\database;
session_start();
if (!isset($_SESSION["admin"])){
  require ($_SERVER["DOCUMENT_ROOT"] . "/app/layouts/user/header.php");
  require ($_SERVER["DOCUMENT_ROOT"] . "/app/layouts/user/header-menu.php");
}
?>

<main class="shop-page">

<?php
  require ($_SERVER["DOCUMENT_ROOT"] . "/app/layouts/user/user-text.php");
?>

  <section class="shop container">
  <?php
    require ($_SERVER["DOCUMENT_ROOT"] . "/app/layouts/user/user-selection.php");
    require ($_SERVER["DOCUMENT_ROOT"] . "/app/layouts/user/user-gallery.php");
  ?>
  </section>
  <?php
    if (false){
      require ($_SERVER["DOCUMENT_ROOT"] . "/app/layouts/user/user-order.php");
    };
    if (false){
      require ($_SERVER["DOCUMENT_ROOT"] . "/app/layouts/user/successful-order.php");
    }
  ?>


</main>
<?php
require ($_SERVER["DOCUMENT_ROOT"] . "/app/layouts/user/footer.php");
?>
