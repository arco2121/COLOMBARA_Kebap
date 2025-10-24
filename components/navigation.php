<?php
$current = basename($_SERVER['PHP_SELF']);
?>
<nav>
    <a class="<?php if($current === 'index.php') echo "active" ?>" href="./">Home</a>
    <a class="<?php if($current === 'pag1.php') echo "active" ?>" href="./pag1">Pag1</a>
    <a class="<?php if($current === 'pag2.php') echo "active" ?>"href="./pag2">Pag2</a>
</nav>
