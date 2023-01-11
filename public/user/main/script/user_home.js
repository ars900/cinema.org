$.each($(".seats_parent").children(), function( index, value ) {
    /** Select and lock seats booked by other users  **/
    if($(value).hasClass("otherBooked")){
        $(value).removeClass("seat");
        $(value).attr("data-bs-target","#infoBooking");
    }

    /** Reserved seats with possibility to cancel  **/
    else if($(value).hasClass("booked")){
        $(value).attr("data-bs-target","#toCancellationReservation");
        $(value).hover(function(){
            $(this).css({"background": "red", "color": "white", "transition": "0.3s ease-out"});
        }, function(){
            $(this).css({"background": "", "color": "", "transition": "0.3s ease-out"});
        });
    }
});

/** Modal window call to confirm seat reservation **/

$(".seat").click(function (){
    $("#book").attr("data-user_id",$(this).attr('data-user_id'));
    $("#book").attr("data-film_id",$(this).attr('data-film_id'));
    $("#book").attr("data-row",$(this).parent().prev().text());
    $("#book").attr("data-seat",$(this).attr("data-seat"));
})

/** Booking confirmation **/

$("#book").click(function (){
    var thiss = $(this);

    $.ajax({
        url: 'http://cinema.org/film/seatStatus',
        method: 'post',
        data: {user_id:$(this).attr("data-user_id"),film_id:$(this).attr("data-film_id"),row:$(this).attr("data-row"),seat:$(this).attr("data-seat")},
    }).done(function (res) {
        if(res == 1){

            /**  Reserved seats are subject to cancellation  **/

            $.each($(".seats_parent").children(), function( index, value ) {
                if($(value).attr("data-user_id") == $(thiss).attr("data-user_id") && $(value).attr("data-film_id") == $(thiss).attr("data-film_id") && $(value).parent().prev().text() == $(thiss).attr("data-row") && $(value).attr("data-seat") == $(thiss).attr("data-seat")){
                    $(value).addClass("booked");
                    $(value).attr("data-bs-target","#toCancellationReservation");
                    $(value).hover(function(){
                        $(this).css({"background": "red", "color": "white", "transition": "0.3s ease-out"});
                    }, function(){
                        $(this).css({"background": "", "color": "", "transition": "0.3s ease-out"});
                    });
                }
            });
        }
    })
})

/** The event is counted using document since class booked was added asynchronously **/
/** Call a modal window to confirm the cancellation **/

$(document).on("click",".booked",function() {
    $("#cancelReservation").attr("data-user_id",$(this).attr('data-user_id'));
    $("#cancelReservation").attr("data-film_id",$(this).attr('data-film_id'));
    $("#cancelReservation").attr("data-row",$(this).parent().prev().text());
    $("#cancelReservation").attr("data-seat",$(this).attr("data-seat"));
});

/** Cancellation of booking **/

$("#cancelReservation").click(function (){
    var thiss = $(this);

    $.ajax({
        url: 'http://cinema.org/film/seatStatus',
        method: 'post',
        data: {key:"remove",user_id:$(this).attr("data-user_id"),film_id:$(this).attr("data-film_id"),row:$(this).attr("data-row"),seat:$(this).attr("data-seat")},
    }).done(function (res) {
        if(res == 1){

            /** Restoring the default settings after cancellation **/

            $.each($(".seats_parent").children(), function( index, value ) {
                if($(value).attr("data-user_id") == $(thiss).attr("data-user_id") && $(value).attr("data-film_id") == $(thiss).attr("data-film_id") && $(value).parent().prev().text() == $(thiss).attr("data-row") && $(value).attr("data-seat") == $(thiss).attr("data-seat")){
                    $(value).removeClass("booked");
                    $(value).attr("data-bs-target","#toBooking");
                    $(value).hover(function(){
                        $(this).css({"background": "green", "color": "white", "transition": "0.3s ease-out"});
                    }, function(){
                        $(this).css({"background": "", "color": "", "transition": "0.3s ease-out"});
                    });
                }
            });
        }
    })
})




















































	

