<ul class="nav pull-right">
    <?php
    if($this->session->userdata('is_login')){
    ?>
        <li><a href="/index.php/auth/logout">로그아웃</a></li>
    <?php
    } else {
    ?>
        <li><a href="/index.php/auth/login">로그인</a></li>
        <li><a href="<?php echo BASEURL ?>account/register">회원가입</a></li>
    <?php
    }
    ?>
</ul>