<h1> 영택쿤풀싸롱 </h1>
<div>
  <div class="span4"></div>
  <div class="span4">
    <?php echo validation_errors(); ?>
    <!--
    get 방식 - localhost/courtwork/account/register?email=weweew@nave.rcom&nickanme=ewwewe&~~~~~ / SELECT
    post 방식 - localhost/courtwork/account/register (데이터가 숨겨있음) -> 중요한 데이터들 / INSERT UPDATE DELETsE
    -->
    <form class="form-horizontal" action="<?php echo BASEURL ?>account/signin" method="post">
      <div class="control-group">
        <label class="control-label" for="inputEmail">이메일</label>
        <div class="controls">
          <input type="text" id="email" name="email" value="<?php echo set_value('email'); ?>" placeholder="이메일">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="password">비밀번호</label>
        <div class="controls">
          <input type="password" id="password" name="password" value="<?php echo set_value('password'); ?>"   placeholder="비밀번호">
        </div>
      </div>

      <div class="control-group">
        <label class="control-label"></label>
        <div class="controls">
          <input type="submit" class="btn btn-primary" value="로그인" />
        </div>
      </div>
    </form>
  </div>
  <div class="span4"></div>
</div>