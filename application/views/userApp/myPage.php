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
                    <h2 class="margin-bottom-10">My page</h2>

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
