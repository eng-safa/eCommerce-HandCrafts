var toTop =$("#scroll-top");

$(window).scroll(function()
{
   $(this).scrollTop()>=500 ?toTop.show():toTop.hide();
});

toTop.click(function()
{
    $("html.body").animate({scrollTop:0},600);
});


