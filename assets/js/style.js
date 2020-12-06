
// Scroll down hide funtion
$(document).ready(function(){
    // jQuery methods go here...
    var lastScrollTop = 0;
    var navbar = document.getElementById("navbar");
    navbar.style.top="-80px";
    window.addEventListener("scroll",function()
    {
        var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        if (scrollTop > lastScrollTop)
        {
            navbar.style.top="0px";
        }
        else
        {
            navbar.style.top="-80px";
        }
        lasScrollTop = scrollTop;
    });
    if (true)
        console.log('you are awesome')
    else
        console.log('use jade')
  });


