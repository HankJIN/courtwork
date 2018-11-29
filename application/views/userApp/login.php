<? include_once $_SERVER["DOCUMENT_ROOT"]."/inc/header.php";?>

<script>
$(document).ready(function(){

  $(".jLogin").click(function(){
    loginReq();
  });

  $(".jJoin").click(function(){
    alert("가입 버튼");
  });

  function loginReq(){
    $.ajax({
      url : "http://localhost/route.php?cmd=WebMain.doWebLogin",
      async: true,
      cache: false,
      dataType: "json",
      data: {
        "email" : $(".jEmail").val(),
        "pwd" : $(".jPwd").val()
      },
      success: function (data){
          alert(data);
      }
    });
  }

});
</script>
    <!-- MAIN -->
    <main role="main">
      <!-- Content -->
      <header>
        <div class="carousel-default owl-carousel carousel-main carousel-nav-white background-dark text-center">
          <div class="item">
            <div class="line">
              <div class="margin">
                <!-- Contact Form -->
                <div class="margin-top-bottom-80">
                  <!-- Title -->

                  <div class="s-12 m-12 l-12">
                    <h2 class="margin-bottom-10">회원 로그인</h2>
                    <form name="contactForm" class="customform" method="post">
                      <div class="line">
                        <div class="margin">
                          <div class="s-12 m-12 l-12">
                            <input name="email" class="required email jEmail" placeholder="Your e-mail" title="Your e-mail" type="text" />
                            <p class="email-error form-error">Please enter your e-mail.</p>
                          </div>
                          <div class="s-12 m-12 l-12">
                            <input name="password" class="name jPwd" placeholder="Your name" title="Your name" type="text" />
                            <p class="name-error form-error">Please enter your name.</p>
                          </div>
                        </div>
                      </div>
                      <div class="s-12"><button class="s-12 submit-form button background-secondary text-white jLogin" type="button">로그인</button></div>
                      <div class="s-12"><button class="s-12 submit-form button background-primary text-white jJoin" type="button">회원가입</button></div>
                    </form>
                  </div>
                </div>


              </div>
            </div>
          </div>
        </div>
      </header>

    </main>

    <?php include_once $_SERVER["DOCUMENT_ROOT"]."/inc/footer.php";?>
