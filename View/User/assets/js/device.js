
$(document).ready(function(){
    $('#myBtn').click(function(){
        $('#myModal').modal()
    })

    var owl = $('.owl-carousel');
    owl.owlCarousel({
        loop:true,
        nav:true,
        margin:10,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },            
            960:{
                items:5
            },
            1000:{
                items:4
            }
        }
    });

    $('#btnSave').click(function(){
        window.location.href = "./Login.html";
    })

});

