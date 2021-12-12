<div class="main">
    <div class="topbar">
        <div class="toggle" onclick="menuToggle()"></div>
        <div class="user">
            <span><?= $_SESSION['user']->name ?></span>
            <img src="<?="http://www.gravatar.com/avatar.php?gravatar_id="
            . md5(strtolower(trim($_SESSION['user']->email))) ?>" alt="Avatar">
        </div>
    </div>