$(function () {
    // $('.toast').toast('show');

// keydownでバブルが出るようにするイベント
$('.act').on('keydown' ,function() {
  $('.aaa').fadeIn();
})

//新規登録に誘導するためのイベント 
$('.newbtn').hover(function(){
  $('.fa-hand-point-right').animate({'margin-right':'-10'});
}, function() {
  $('.fa-hand-point-right').animate({'margin-right':'10'});
});


// sign in画面のリンクに飛ぶイベントもしくはalertを出すイベントRo
$('.submit').on('click', function(){
  // let userId = $('.error').val();
  if($('.name') != '' && $('.pass') != ''){
    alert("ご登録されていないアカウントになります。もう一度入力下さい。");
  } else {
      window.location.href = "/";
  }

})

// index.htmlのmaleを選択したときにfadeIn。
  $('[name="gender"]:radio').change( function(){
    if($('[id="male"]').prop('checked')) {
      $('.search').fadeIn();
      $('.search03').fadeOut();
    } else if($('[id=female]').prop('checked')){
      // $('.search02').fadeOut();
      $('.search03').fadeIn();
      $('.search').fadeOut();
    }
  });

    });  

    

