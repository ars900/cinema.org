$(document).ready(function() {
    table_html = $('#output_table').html();
})


$('#search').on('keyup',function() {
   $("#output_table").css('opacity','0');

    var value = $('#search').val();
    var urlroot = $(this).data('urlroot');

     if(value == ''){
         $('#output_table').html(table_html);
         $("#output_table").animate({
             opacity: 1
         },500)
         $('#search_list').animate({
            opacity: 0
         }, 500,function (){
             $('#search_list').removeClass('d-block');
         });

         $.each($('#output_table').children(), function (index, value) {
             if($(value).attr('data-id') == $('#output_table').attr('removed_str')){
                 $('#output_table').children()[index].remove();
             }
         })

         $(document).ready(function() {
             table_html = $('#output_table').html();
         })
    }
        else{
                $.ajax({
                    url: 'search',
                    method: 'post',
                    dataType: 'json',
                    data: {name:value},
                }).done(function (res) {

                        $("#output_table").empty();

                        if(res == 0){
                            if (!$('#search_list').hasClass('d-block')) {
                                $('#search_list').addClass('d-block');
                                $('#search_list').css('opacity', '0');
                                $('#search_list').animate({
                                    opacity: 1
                                }, 500);
                            }
                        }
                            else{
                                if ($('#search_list').hasClass('d-block')) {
                                    $('#search_list').animate({
                                        opacity: 0
                                    }, 500, function () {
                                        $('#search_list').removeClass('d-block')
                                    });
                                }



                                $.each(res, function (index, value) {

                                    if (value.film_name.length <= 10) {
                                        var film_name = value.film_name;
                                    } else {
                                        var film_name = value.film_name.trim();
                                        film_name = film_name.substr(0, 10);
                                        film_name = film_name + ' ... ';
                                    }

                                    if (value.film_director.length <= 10) {
                                        var film_director = value.film_director;
                                    } else {
                                        var film_director = value.film_director.trim();
                                        film_director = film_director.substr(0, 10);
                                        film_director = film_director + ' ... ';
                                    }

                                    if (value.film_desc.length <= 5) {
                                        var film_desc = value.film_desc;
                                    } else {
                                        var film_desc = value.film_desc.trim();
                                        film_desc = film_desc.substr(0, 8);
                                        film_desc = film_desc + ' ... ';
                                    }

                                    $("#output_table").append('<tr class="position-relative" data-id="' + value.id + '"><th scope="row">' + value.id + '</th><td>' + film_name + '</td><td>' + value.film_genre + '</td><td>' + value.film_country + '</td><td>' + value.film_date + '</td><td>' + film_director + '</td><td>' + value.film_duration + ' min</td><td><img src="' + urlroot + 'public/admin/main/films/' + value.film_img + '" width="50px" height="50px" /></td><td><video controls poster="' + urlroot + 'public/admin/main/films/' + value.film_img + '" width="50" height="50" src="' + urlroot + 'public/admin/main/videos/' + value.film_video + '"></video></td><td>' + film_desc + '</td><td class="row"><span class="text-center col"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="38" fill="currentColor" class="edit_film pointer bi bi-pen-fill" data-bs-toggle="modal" data-bs-target="#modalOpen" viewBox="0 0 16 16"><path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/></svg><div class="modal fade" id="modalOpen" data-bs-backdrop="static"data-bs-keyboard="false" tabIndex="-1" aria-labelledby="staticBackdropLabel"aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><h5 class="modal-title"id="staticBackdropLabel">Modal title</h5><button type="button" class="btn-close"data-bs-dismiss="modal" aria-label="Close"></button></div><div class="modal-body"><form id="edit_process" method="post" action="film_edit"encType="multipart/form-data"><div class="container"><div class="row row-cols-2"><div class="col-lg-6 mt-4"><div class="input-group mb-3"><span class="input-group-text">Film name</span><input type="text" name="film_name" value = "'+film_name+'" class="film_name_edit form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" /></div></div><div class="col-lg-6 mt-4"><select  class="film_date_edit form-select input_validate" name="film_date" aria-label="Default select example"><option selected="">'+value.film_date+'</option><option value="2022">2022</option><option value="2021">2021</option><option value="2020">2020</option><option value="2019">2019</option><option value="2018">2018</option><option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option></select></div><div class="col-lg-6 mt-4"><select class="film_country_edit form-select input_validate" name="film_country" aria-label="Default select example"><option selected="">'+value.film_country+'</option><option value="Russia">Russia</option><option value="USA">USA</option><option value="USSR">USSR</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Albania">Albania</option></select></div><div class="col-lg-6 mt-4"><select class="film_genre_edit form-select input_validate" name="film_genre" aria-label="Default select example"><option selected="">'+value.film_genre+'</option><option value="Action">Action</option><option value="Comedy">Comedy</option><option value="Drama">Drama</option><option value="Fantasy">Fantasy</option><option value="Horror">Horror</option><option value="Romance">Romance</option><option value="Thriller">Thriller</option></select></div></div><div class="row row-cols-2 mt-3"><div class="col-lg-6 mt-4"><div class="input-group mb-3"><span class="input-group-text">Film director</span><input type="text" name="film_director" value = "'+film_director+'" class="film_director_edit form-control input_validate" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" /></div></div><div class="col-lg-6 mt-4"><div class="input-group mb-3"><span class="input-group-text">Film duration</span><input type="number" name="film_duration" value = "'+value.film_duration+'" class="film_duration_edit form-control input_validate" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" /></div></div></div><div class="row"><div class="col-lg-12 mt-4"><div class="input-group"><span class="input-group-text">Film description</span><textarea class="film_desc_edit form-control input_validate"  name="film_desc" aria-label="With textarea">'+film_desc+'</textarea></div></div></div><div class="row mt-5"><div class="col-lg-6 position-relative"><div class="position-absolute" style="top:-24px;">Film img</div><div class="w-100" style="height:100px;"><img style="object-fit: fill;" src="'+urlroot+'public/admin/main/films/'+value.film_img+'" class="film_img_edit_path w-100 h-100" /></div><input name="film_img" class="film_img_edit position-relative form-control" type="file" /></div><div class="col-lg-6 position-relative"><div class="position-absolute" style="top:-24px;">Film video</div><div class="w-100" style="height:100px;"><video controls="" muted="" poster="'+urlroot+'public/admin/main/films/'+value.film_img+'" class="film_img_video_edit_path w-100 h-100" src="'+urlroot+'public/admin/main/videos/'+value.film_video+'"></video></div><input name="film_video" class="position-relative form-control" type="file" id="formFile" /></div></div></div><div class="modal-footer"><input type="hidden" name="film_id" id = "film_id_hidden" value="'+value.id+'"/><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button><button type="submit" id="film_edit" data-bs-dismiss="modal" class="btn btn-success">Edit</button></div></form></div></div></div></div></span><span class="text-center col"><svg style="color:red;" xmlns="http://www.w3.org/2000/svg" width="50" height="38" fill="currentColor" data-id="" class="delete_film pointer bi bi-x-circle" viewBox="0 0 16 16" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path><path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path></svg><div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabIndex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><h5 class="modal-title" id="staticBackdropLabel">Modal title</h5><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div><div class="modal-body"> Are you sure you want to delete this movie? </div><div class="modal-footer"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button><button type="button" data-bs-dismiss="modal" class="delete_film_modal btn btn-danger">Delete</button></div></div></div></div></span><div class="modal" tabIndex="-1"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><h5 class="modal-title">Modal title</h5><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div><div class="modal-body"><p>Modal body text goes here.</p></div><div class="modal-footer"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button><button type="button" class="btn btn-primary">Save changes</button></div></div></div></div></td></tr>');
                                })

                                $("#output_table").animate({
                                    opacity: 1
                                },500)
                            }

                })
        }
})


$(document).on('click', '.delete_film', function(){
    var thiss = $(this).closest('.position-relative');
    var id = $(thiss).data('id');

    $('.delete_film_modal').click(function (){
        $.ajax({
            url:'delete',
            method:'post',
            data:{id:id},
        }).done(function(res) {
            if(res == 1){
                $( thiss ).fadeOut( 500 ,function (){
                    $( thiss ).remove();

                    $(document).ready(function() {
                        $('#output_table').attr('removed_str',id);
                    })
                })
            }
        });
    })
})


$(document).on('click','.edit_film', function() {
    var id = $(this).closest('.position-relative').data('id');

    $.ajax({
        url: 'for_edit',
        type: 'POST',
        data:{id:id},
        dataType:'json',
    }).done(function(res) {
            $.each(res, function( index, value ) {
                if(index == 'film_img'){
                    $('.'+index+'_edit_path').attr('src',res.URLROOT+'public/admin/main/films/'+value);
                    $('.'+index+'_video_edit_path').attr('poster',res.URLROOT+'public/admin/main/films/'+value);
                }
                else if(index == 'film_video'){
                    $('.'+index+'_edit_path').attr('src',res.URLROOT+'public/admin/main/videos/'+value);
                }
                else if(index == 'id'){
                    $('#'+index+'_hidden').attr('value',value);
                }
                else{
                    if(index != ''){
                        $('.'+index+'_edit').val(value);
                    }
                }
            });
    });
})


$(".mc").click(function (){
    var modalshowlength =  $(".content-wrapper").children("div .modal-backdrop.fade.show").length;

    if($(this).attr("data-mc") == "show" && ($("#modalOpen").hasClass("show")) && ($("#modalOpen").hasClass("d-block")) && ($("#modalOpen").attr("aria-modal") == 'true') && ($("#modalOpen").attr("role") == 'dialog') && (modalshowlength == 1)){
        document.location.reload();
    }
})

$(".mc_second").click(function (){
    var modalshowlength =  $(".content-wrapper").children("div .modal-backdrop.fade.show").length;

    if($(".mc").attr("data-mc") == "show" && ($("#modalOpen").hasClass("show")) && ($("#modalOpen").hasClass("d-block")) && ($("#modalOpen").attr("aria-modal") == 'true') && ($("#modalOpen").attr("role") == 'dialog') && (modalshowlength == 1)){
        document.location.reload();
    }
})














    













	
	
