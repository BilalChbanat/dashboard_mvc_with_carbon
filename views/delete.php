<?php
$title = "Supprimer Team";
ob_start();
?>
<p>Are you  sure that you want to delete this Team ?</p>
<a class="btn btn-danger" href="id=<?php echo $id ?>">Done</a>
<a class="btn btn-warning" href="../public/index.php">Cancle</a>
<?php
$content = ob_get_clean();
include_once '../views/layout.php';