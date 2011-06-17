<?php
include '../../library/core/commonCore.php';

try {
    $filter = new commonCore();
} catch (Exception $e) {
    echo "error finding class, autoload function is not working?\n";
}


$desc = $filter->cleanUp($_POST['descA']);
$code = $filter->cleanUp($_POST['codeA']);

$data = "<div>".$desc."</div>";
$data .= "<div><pre class='sh_sh'>".$code."</pre></div>";

echo $data;

?>