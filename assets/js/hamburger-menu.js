// $(function(){
//   'use strict';

//   $('.nav_toggle').on('click', function () {
//     $('.nav_toggle, .nav').toggleClass('show');
//     console.log(hehehe)
//   });

// });



$(function() {
  $('.btn-gNav').on("click", function(){
    console.log("success")
    $(this).toggleClass('open');
    $('#gNav').toggleClass('open');
  });

});

// メニューをクリックされたら、非表示にする
$(function() {
  $('.gNav-menu li a').on("click", function(){
    $('#gNav').removeClass('open');
  });
});