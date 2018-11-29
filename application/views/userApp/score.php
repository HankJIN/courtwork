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
                    <h2 class="margin-bottom-10">MyPage</h2>

      </header>

    </main>

    <?php include_once $_SERVER["DOCUMENT_ROOT"]."/inc/footer.php";?>
