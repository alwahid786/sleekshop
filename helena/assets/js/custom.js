$(document).ready(function(){
  $(".search-bt").click(function(){
    $(".search-wrapper").addClass("active")   
  });  
});
$(document).ready(function(){
   $(".close-bt").click(function(){
    $(".search-wrapper").removeClass("active")   
  }); 
});
function myFunction(x) {
  x.classList.toggle("change");
}
jQuery('#product-slider').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        575:{
            items:2
        },
        768:{
            items:3
        },
        980:{
            items:4
        }
    }
});
jQuery('#best-seller-slider').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        575:{
            items:2
        },
        768:{
            items:3
        },
        980:{
            items:4
        }
    }
});
// ...................Quantity js start...................
$(document).ready(function(){

    //-- Click on QUANTITY
    $(".btn-minus").on("click",function(){
        var now = $(".quantity-btn input").val();
        if ($.isNumeric(now)){
            if (parseInt(now) -1 > 0){ now--;}
            $(".quantity-btn input").val(now);
        }else{
            $(".quantity-btn input").val("1");
        }
    })            
    $(".btn-plus").on("click",function(){
        var now = $(".quantity-btn input").val();
        if ($.isNumeric(now)){
            $(".quantity-btn input").val(parseInt(now)+1);
        }else{
            $(".quantity-btn input").val("1");
        }
    })                        
}) 

// ...................sidebar js start...................
$(document).ready(function(){
  $("#cart-option").click(function(){
    $("#cart-sidebar").addClass("active");
  });
  $("#cart-close").click(function(){
    $("#cart-sidebar").removeClass("active");
  });
});
//...................our story image height ...................
$(document).ready(function(){
    h_image = $(".ourstory-layout .image-wrapper").height();
    h_content = $(".ourstory-layout .content-wrapper").height();
    w_width = $('.ourstory-layout').width();
    if(h_image < h_content && w_width > 960){
        $(".ourstory-layout .image-wrapper").height(h_content + 60);
    }
});
