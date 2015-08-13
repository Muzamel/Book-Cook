

<script src="<?php echo base_url(); ?>js/jquery.js"></script>
<script src="<?php echo base_url(); ?>js/jquery-ui.js"></script>
<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>js/creative.js"></script>
<script src="<?php echo base_url(); ?>js/my_functions.js"></script>
<script src="<?php echo base_url(); ?>js/timepic.js"></script>

<script>

    $(function () {
        $("#date").datepicker({minDate: 0});
    });

    $(function () {
        $("#reserve_date").datepicker({minDate: 0});
    });


    $('#food_based_restaurant').blur(function () {
//alert();
        $.post('<?php echo site_url('booking_controller/get_restaurants'); ?>', {recipe_name: $('#food_based_restaurant').val()}, function (res) {
            var obj = jQuery.parseJSON(res);
            var div_data =
                     
                    "<div ><input type='radio' id='rest_idd' name='restaurant_id' value='" + obj.restaurant_id + "'>" + obj.restaurant_name + "</div>";
            $("#rest_name").html("");
            $(div_data).appendTo("#rest_name");
            $("#rest_name").css("display","inline");

//$('#'+total+'').val(obj.restaurant_id);
//$('#rest_name').html(obj.restaurant_name);
//$('#quantity'+total+'').focus();
        });
    });


    $("#rest_idd").onclick(function(){
    alert();
   
    });

    function check_slots() {

        $.ajax({
            url: '<?= base_url(); ?>index.php/Booking_Controller/get_data',
            type: 'POST',
            data: {date: $("#date").val(),
                people: $("#no_of_people").val(),
                start_time: $("#input_from").val(),
                end_time: $("#input_to").val()
            },
            dataType: 'json',
            success: function (response) {
                //console.log(response);
                //var obj=jQuery.parseJSON(response);
                $('#restdata').html("");
                if (response && response != '') {
                    // alert(response);
                    $.each(response, function (i, e) {

                        var div_data =
                                "<div ><input type='radio' value='" + e.restaurant_id + "'>" + e.restaurant_name + " " + e.address + "</div>";
                        $(div_data).appendTo("#restdata");
                        $("#alert").css("display", "inline");

                        $("#alert2").hide();
                        // $("#alert").show();
                        $("#restdata").show();

                    });
                } else {
                    $("#alert2").css("display", "inline");
                    $("#alert").hide();
                    $("#restdata").hide();
                }
            }
        });
    }


</script>


<script>
    $(function () {
        var availableTags = [
            '<?php
foreach ($results as $row1) {

    // print_r($row1);
    echo $row1['recipe_name'];
    // $row1['restaurant_id'];
    ?>'
                    ,
            '<?php } ?>'

        ];

        $("#food_based_restaurant").autocomplete({
            source: availableTags
        });
    });

    $('#tags').blur(function () {
        //alert();
        $.post('<?php echo base_url(); ?>index.php/booking_controller/get_contents', {name: $('#tags').val()}, function (res) {
            var obj = jQuery.parseJSON(res);
            $('#start_time').val(obj.start_time);
            $('#end_time').val(obj.end_time);

        });
    });




</script>




</body>
</html>