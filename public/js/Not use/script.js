
//------ Responsive Masonry
var $grid = $('.grid').masonry({
  itemSelector: '.grid-item',
  percentPosition: true,
  columnWidth: '.grid-sizer'
});
// layout Isotope after each image loads
$grid.imagesLoaded().progress( function() {
  $grid.masonry();
});
//------ Open, close menu content
var i = 0;
  function OpenMenu(x) {
      
      x.classList.toggle("change");
      if (i == 0) {
        //document.getElementById("menucontent").style.display = "block";
        //document.getElementById("menucontent").style.width = "100%";
        document.getElementById("menucontent").style.height = "100%";
        document.getElementById("menucontent").style.transform = "scale(1,1)";
        document.getElementById("menucontent").style.borderRadius = "0px";
        //document.getElementById("menucontent").style.animation = "zoomInDown 1s";
        //document.getElementById("menucontent").style.opacity = 1;
        document.getElementById("nav-desc").innerHTML = "Close";
        i++;
      }
      else {
        //$('#menucontent').removeClass('MyClass');
        //document.getElementById("menucontent").style.display = "none";
        //document.getElementById("menucontent").style.opacity = 0;
        //document.getElementById("menucontent").style.height = "0";
        //document.getElementById("menucontent").style.width = "0%";
        document.getElementById("menucontent").style.height = "0%";
        document.getElementById("menucontent").style.transform = "scale(0,1)"
        document.getElementById("menucontent").style.borderRadius = "0 0 30% 30%";
        //document.getElementById("menucontent").style.animation = "zoomOutDown 1s";
        document.getElementById("nav-desc").innerHTML = "Menu";
        i--;
      }
  }
//------ Open, close search bar
var j = 0;
  function OpenSearch() {
      //x.classList.toggle("change");
      if (j == 0) {
        document.getElementById("search-form").style.height = "100%";
        document.getElementById("search-form").style.opacity = 1;
        document.getElementById("fa-search").style.opacity = 0;
        document.getElementById("fa-remove").style.opacity = 1;
        document.getElementById("search-desc").innerHTML = "Close";
        j++;
      }
      else {
        document.getElementById("search-form").style.height = "0";
        document.getElementById("search-form").style.opacity = 0;
        document.getElementById("fa-search").style.opacity = 1;
        document.getElementById("fa-remove").style.opacity = 0;
        document.getElementById("search-desc").innerHTML = "Search";
        j--;
      }
  }
//------ Fixed nav menu bar
$(document).ready(function(){
     $(window).bind('scroll', function() {
     //var navHeight = $( window ).height() - 50;
       if ($(window).scrollTop() > 70) {
         $('.nav').addClass('fixed');
       }
       else {
         $('.nav').removeClass('fixed');
       }
    });
  });
//------ Back to Top
$(document).ready(function(){

  // hide #back-top first
  $("#return-to-top").hide();
  
  // fade in #back-top
  $(function () {
    $(window).scroll(function () {
      if ($(this).scrollTop() > 100) {
        $('#return-to-top').fadeIn();
      } else {
        $('#return-to-top').fadeOut();
      }
    });

    // scroll body to 0px on click
    $('#return-to-top').click(function () {
      $('body,html').animate({
        scrollTop: 0}, 500);
      return false;
    });
  });

});
// ---------- Tabs toggle
jQuery(function () {
    jQuery('.toggle-show').click(function () {
        var index = $(this).parent().index(),
            newTarget = jQuery('.toggle-content').eq(index);
        jQuery('.toggle-content').not(newTarget).slideUp('fast')
        newTarget.delay().slideToggle('fast')
        return false;
    })
});

// ---------- Smooth scroll link neo
$('a[href*="#"]:not([href="#"])').click(function() {
  if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
    if (target.length) {
      $('html, body').animate({
        scrollTop: target.offset().top
      }, 1000);
      return false;
    }
  }
});
//------ Slider
$(function() {
      $('#slides').slidesjs({
        width: 940,
        height: 528,
        navigation: false
      });
    });
//------ Tabs
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
//------ Scroll owl carousel
$(document).ready(function() {
  var owl = $('.owl-carousel');
  owl.owlCarousel({
    margin: 2,
    nav: true,
    dots: false,
    loop: false,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 2
      },
      1000: {
        items: 3
      }
    }
  })
})
// ------- Loading 
var Nanobar=function(){var a,b,c,d,e,f,g={width:"100%",height:"10px",zIndex:9999,top:"0"},h={width:0,height:"100%",clear:"both",transition:"height .3s"};return a=function(a,b){for(var c in b)a.style[c]=b[c];a.style["float"]="left"},d=function(){var a=this,b=this.width-this.here;.1>b&&-.1<b?(e.call(this,this.here),this.moving=!1,100==this.width&&(this.el.style.height=0,setTimeout(function(){a.cont.el.removeChild(a.el)},100))):(e.call(this,this.width-b/4),setTimeout(function(){a.go()},16))},e=function(a){this.width=a,this.el.style.width=this.width+"%"},f=function(){var a=new b(this);this.bars.unshift(a)},b=function(b){this.el=document.createElement("div"),this.el.style.backgroundColor=b.opts.bg,this.here=this.width=0,this.moving=!1,this.cont=b,a(this.el,h),b.el.appendChild(this.el)},b.prototype.go=function(a){a?(this.here=a,this.moving||(this.moving=!0,d.call(this))):this.moving&&d.call(this)},c=function(b){b=this.opts=b||{};var c;b.bg=b.bg||"#27a89f",this.bars=[],c=this.el=document.createElement("div"),a(this.el,g),b.id&&(c.id=b.id),c.style.position=b.target?"relative":"fixed",b.target?b.target.insertBefore(c,b.target.firstChild):document.getElementsByTagName("body")[0].appendChild(c),f.call(this)},c.prototype.go=function(a){this.bars[0].go(a),100==a&&f.call(this)},c}(),nanobar=new Nanobar;nanobar.go(30),nanobar.go(60),nanobar.go(100);
//]]>

