<?php function head(){
    ?>
    <link rel="stylesheet" href="css/styleT.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <?php
}
?>
<?php
function navbar($flag){
?>
    <ul class="nav navbar-nav">
        <li <?php if($flag==1) echo "class='active'";?>><a href="indexT.php"><i class="fa fa-home" aria-hidden="true"></i>首頁</a></li>
<li <?php if($flag==2) echo "class='active'";?>><a href="vita.php"><i class="fa fa-address-card" aria-hidden="true"></i>簡歷</a></li>
<li <?php if($flag==3) echo "class='active'";?>><a href="academic.html">學術</a></li>
<li><a href="#">著作</a></li>
<li><a href="#">學生</a></li>
<li><a href="#">常用連結</a></li>
</ul>
    <ul class="nav navbar-nav navbar-right">
        <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
<?php
}
?>
