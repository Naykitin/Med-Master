$(window).scroll(function() {
let height = $(window).scrollTop();
if(height > 100){
$('to-top').addClass('to-top-fixed');
} else{
$('to-top').removeClass('to-top-fixed');
}
});
