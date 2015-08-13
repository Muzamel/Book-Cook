



function get_time(){
    $.ajax({
        url: ''+base_url+'index.php/Booking_Controller/get_time',
        type:'POST',
        data: {id: $("#rest_times").val()},
        dataType: 'json',



        success: function(response)
        {
            
            $('#times').append(response.data);
        }});
}
function check_reserve(){
    //alert();
    $.ajax({
        url:''+base_url+'index.php/Booking_Controller/check_reservation',
        type:'POST',
        data:{restaurant_id:$("#rest_times").val(),
            people:$("#noPeople").val(),
            start_time:$("#start_time").val(),
            end_time:$("#end_time").val()
        },
        dataType:'json',
                
        success:function(response){

//if(response && response != ''){
            //for (i = 0; i < response.data.length; i++) {
                var rid = response.data['capa'];
                var tCapacity = response.data['capacity'];
                var exc = response.data['warning'];
            $("#capacity").html("");
            if(rid && rid != ''){
               $("#capacity").append("<li class='alert alert-success success'>Hurray You can Do reservation </li>");
               // var rname = response.data[i]['recipe_name'];
                $(".warning").hide();
                //$('#myTab').append("<li dataarr='" + rid + "'><a href='#'>" + rname + "</a></li");
           // }
}else{
    $("#capacity").append("<li class='alert alert-warning warning'> "+exc+"</li>");
                $(".success").hide();
}

            //mydata = response['data'][0];
            //var obj = JSON.parse(response['data'][0]);
            //alert(mydata.available);
            //jQuery('#time_availability').html(response.obj);
            //if(mydata.available < $("#no_of_people").val())
            //{
            //    alert('Not Available')
            //}
        }
    });
}


function table_booking(){


    $.ajax({
        url:'<?php echo base_url();?>index.php/booking_controller/reserve_table',
        type:'POST',
        data:{restaurant_id:$("#rest_times").val(),
            noPeople:$("#noPeople").val(),
            date: $("#res_date"),
            start_time:$("#start_time").val(),
            end_time:$("#end_time").val()
        },
        dataType:'string',

        success:function(response){
        console.log(response);
            //return false;
        }
    });

}







    function get_recipes(id) {
        
        
        

        $.ajax({
            type: "POST",
            url: '' + base_url + 'index.php/cooking_controller/get_recipe/' + id,
            // data: {date: $("#restaurent_select").val()},
            dataType: "json",
            success: function (recipe) {
                var recepies = '';
                $('#myTab').html("");
                for (i = 0; i < recipe.data.length; i++) {
                    var rid = recipe.data[i]['recipe_id'];

                    var rname = recipe.data[i]['recipe_name'];
                    $('#myTab').append("<li dataarr='" + rid + "'><a href='#'>" + rname + "</a></li");
                }
                $('#myTab li').unbind("click");
                $('#myTab li').click(function () {
                    item = $(this).attr('dataarr');
                    $.ajax({
                        type: "POST",
                        url: '' + base_url + 'index.php/cooking_controller/get_ingredients/' + item,
                        dataType: "json",
                        success: function (ingredient) {

                            var ingredients = '';
                            $('#Tab2').html("");// not repetation
                            for (i = 0; i < ingredient.data.length; i++) {
                                var ingid = ingredient.data[i]['ingredient_id'];
                                var ingName = ingredient.data[i]['ingredient_name'];
                                var recid = ingredient.data[i]['recipe_id'];
                                var recName = ingredient.data[i]['recipe_name'];
                                $('#Tab2').append("<li dataarr='" + ingid + "'><a href='#'>" + ingName + "</a></li");
                                //$('#procedures_data').append('<tr><td>"' + desc + '"</td><td>"' + ingq + '"</td><td>"' + estimate + '"</td><td>"' + ingName + '"</td><td>"' + recName + '"</td><td>"' + cookTask + '"</td><td>"' + unName + '"</td></tr>');
                            }


                            $('#Tab2 li').unbind("click");
                            $('#Tab2 li').click(function () {

                                proc = $(this).attr('dataarr');
                                $.ajax({
                                    type: "POST",
                                    url: '' + base_url + 'index.php/cooking_controller/get_procedures/' + proc,
                                    dataType: "json",
                                    success: function (procedure) {

                                        var procedures = '';
                                        $('#procedures_data').html("");
                                        for (i = 0; i < procedure.data.length; i++) {
                                            var ingid = procedure.data[i]['ingredient_id'];
                                            var desc = procedure.data[i]['description'];
                                            // var ingName = procedure.data[i]['ingredient_name'];
                                            // var ingq = procedure.data[i]['ingredient_quantity'];
                                            var estimate = procedure.data[i]['estimate'];
                                            var cookTask = procedure.data[i]['cooking_task_name'];
//                            var recName = procedure.data[i]['recipe_name'];
                                            var unName = procedure.data[i]['unit_name'];

                                            //$('#ingTab').append("<li dataarr='" + ingid + "'><input  value=" + ingname + "></li");

//  $('#procedures_data').append('<tr><td><input value="' + desc + '"></td><td><input value="' + cookTask + '"></td><td><input value="' + estimate + '"></td><td><input value="' + unName + '"></td></tr>');
                                            $('#procedures').show();
                                            $('#add_button').show();

                                            $('#procedures_new').append('<a class="btn list-group-item "><input class="form-control" value="' + desc + '"></a><a class="btn list-group-item "><input class="form-control" value="' + cookTask + '"></a>\n\
<a class="btn list-group-item "><input  class="form-control estima" readonly="readonly" value="' + estimate + '"></a>\n\
<a class="btn list-group-item "><input class="form-control" value="' + unName + '"></a>');


                                        }
                                    }


                                });
                                $('#estimate').click(function () {

                                    $('.estima').removeAttrai('readonly');

                                });

                            });

                        }

                    });

                })
            }
        });
    }




/*
 $.ajax({
 type: "POST",
 url: '' + base_url + 'index.php/cooking_controller/get_ingredients/' + item,
 dataType: "json",
 success: function (ingredient) {

 var ingredients = '';

 for (i = 0; i < ingredient.data.length; i++) {
 var ingid = ingredient.data[i]['ingredient_id'];
 var desc = ingredient.data[i]['description'];
 var ingName = ingredient.data[i]['ingredient_name'];
 var ingq = ingredient.data[i]['ingredient_quantity'];
 var estimate = ingredient.data[i]['estimate'];
 var cookTask = ingredient.data[i]['cooking_task_name'];
 var recName = ingredient.data[i]['recipe_name'];
 var unName = ingredient.data[i]['unit_name'];
 var ingname = ingredient.data[i]['ingredient_name'];
 $('#ingTab').append("<li dataarr='" + ingid + "'><input  value=" + ingname + "></li");
 $('#procedures_data').append('<tr><td>"' + desc + '"</td><td>"' + ingq + '"</td><td>"' + estimate + '"</td><td>"' + ingName + '"</td><td>"' + recName + '"</td><td>"' + cookTask + '"</td><td>"' + unName + '"</td></tr>');
 }
 }

 });*/




//var total_number = 0;
//
//function show_recipe_in_bar(id){
//alert(id);
// total_number++;
// $.ajax({
//            type: "POST",
//            url: '' + base_url + 'index.php/cooking_controller/show_recipe/'+ id + '/'+ total_number,
//           // data: {date: $("#restaurent_select").val()},
//            dataType: "html",
//            success: function (recipe) {
//            // alert(recipe);
//           //console.log(recipe);
////                 var recepies = '';
////    //
////    //            for (i = 0; i = recipe.data.length; i++) {
////                for (i = 0; i < recipe.data.length; i++) {
////    //                console.log(recipe.data[i]['recipe_name']);
////                    recepies += '<div class="col-lg-1 " id="recipe"> <input  id="abc"> ';
////                    recepies += recipe.data[i]['recipe_name'];
////                 recepies += recipe.data[i]['recipe_id'];
////                    recepies += ' </div>';
////                }
//                $('#purchase_entry_holder').html(recipe);
//            }
//        });
//
//
//}
