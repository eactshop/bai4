<div class="content">
    <div class="content-left">
        <img class="content-img" src="/images/anh-dep-viet-nam-15.jpg" alt="">
    </div>
    <div class="content-right">
        <?php
switch ($page) {
    case 'register':
        include 'register.php';
        break;
    case 'calculate':
        include 'calculate.php';
        break;
    case 'contact':
        include 'contact.php';
        break;
    case 'drawtable':
        include 'drawtable.php';
        break;
    case 'sum':
        include 'sum.php';
        break;
}
?>
    </div>
</div>