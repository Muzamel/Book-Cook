<?php include '/include/header.php'; ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Book & Cook Home </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/navbar.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>






    <script src="<?php echo base_url(); ?>js/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="<?php echo base_url(); ?>js/respond/1.4.2/respond.min.js"></script>
    <script src="<?php echo base_url(); ?>/js/jquery.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>js/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>js/my_functions.js"></script>

</head>



<header>

    <div class="well" style="background-color: tomato">

        <div class="container" >
            <h1 style="color:white;" herf="<?php echo base_url(); ?>index.php/cooking_controller/customize">Book&Cook </h1>


        </div>
    </div>
</header>



<body>

<div class="container">

    <div class="container">
        <form action="">
            <div class="row">




                <div class="col-lg-1 pager">
                    <select  class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <option> Country  </option>
                        <option> Pakistan </option>

                    </select>
                </div>

                <div class="col-lg-2 pager">
                    <select  class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <option> Province  </option>
                        <option> Punjab </option>
                        <option> KPK</option>
                        <option> Sindh </option>


                    </select>
                </div>



                <div class="col-lg-1 pager">
                    <select  class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <option> City  </option>
                        <option> Lahore </option>
                        <option> Karachi </option>
                        <option>  Peshwer </option>


                    </select>
                </div>

                <div class="col-lg-2 pager">
                    <select  class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <option> Area </option>
                        <option> Mall Road </option>
                        <option> Model Town </option>
                        <option> Ichraa </option>


                    </select>
                </div>

            </div>
        </form>

    </div>

</div>


<form action="" method="post" >
    <div class="container">
        <div class="row" id="add_checkbox">
            <!--                <div class="col-lg-5 pager">
                                <input type="text" id="restaurent_select" name="restaurent_select" class="form-control" placeholder="Where? City, address, neighborhood,restaurant name... ">
                            </div>-->


            <select name="restaurent" style="height: 35px; width: 110px; margin-left: 10px; border-width: 2px; border-style:  solid; border-color:  tomato; border-radius: 10px;" id="restaurant" onchange="get_recipes(this.value)">

                <?php foreach ($result as $row) { ?>

                    <option  value="<?php echo $row->restaurant_id; ?>"><?php echo $row->restaurant_name; ?></option>
                <?php } ?>
            </select>

        </div>

        <div class="col-lg-3 " style="color:white; font-size: 30px; font-weight: bold; margin-left: 35px; margin-top: 25px; "> Recipes </div>
        <br>
    </div>

    <br>



</form>
<!--get recipes against against restaurant's-->
<div class="container" style=" color:tomato; font-size: 30px; font-weight: bold; margin-left: 35px; margin-top: 25px;">
    <ul class="nav nav-tabs list" id="myTab"> </ul>

</div>

<div class="container" style=" color:tomato; font-size: 30px; font-weight: bold; margin-left: 35px; margin-top: 25px;">
    <ul class="nav nav-tabs list" id="Tab2"> </ul>

</div>

<div >

    <div class="navbar">
        <ul>
            <li>Oil</li>
            <li> Salat</li>
            <li>  bandghobi </li>
            <li> mirch</li>



        </ul>
    </div>
    <div class="navleft">




        <table width="200" border="1">


            <div class="list-group col-lg-6" id="procedures" style="display: none;">
                <a href="#" class="btn list-group-item" id="desc_li">Description </a>
                <a href="#" class="btn list-group-item " id="c_task">Cooking Task</a>
                <a href="#" class="btn list-group-item " id="estimate">Estimate</a>
                <a href="#" class="btn list-group-item " id="u_name">Unit name</a>
            </div>

            <div class="list-group col-lg-6" id="procedures_new">

            </div>

            <a href="#" class="btn btn-primary" id="add_button" style="display: none;">Add Record</a>

            <tbody id="procedures_data">

            </tbody>
        </table>

    </div>



</div>

<script type="text/javascript">
    $(document).ready(function () {


        $('#res_recipe').on('click', '#abc', function () {

            $.ajax({
                type: "POST",
                url: '' + base_url + 'index.php/cooking_controller/get_ingredients/',
                data: {date: $("#recipe").val()},
                dataType: "json",
                success: function (recipe) {
                    //            console.log(recipe.data);
                    var recepies = '';
                    //
                    //            for (i = 0; i = recipe.data.length; i++) {
                    for (i = 0; i < recipe.data.length; i++) {
                        //                console.log(recipe.data[i]['recipe_name']);
                        recepies += '<div class="col-lg-1 pager"> <button id="abc" class="btn btn-warning"> ';
                        recepies += recipe.data[i]['ingredient_name'];
                        recepies += '  </button> </div>';
                    }
                    $('#ingredients').html(recepies);
                }
            });

        });
    });
</script>

<script type="text/javascript">
    var total_number = 0;

    function show_recipe_in_bar(id) {
        //alert(id);
        var $tbl = $("#purchase_entry_holder");
        var $chk = $("#rec_chk input:checkbox");
        if ($chk.prop('checked', true)) {



            total_number++;
            $.ajax({
                url: '<?= base_url(); ?>index.php/cooking_controller/show_recipe/' + id + '/' + total_number,
                type: 'POST',
                // data: {date: $("#restaurent_select").val()},
                dataType: 'html',
                success: function (recipe) {
                    // alert(recipe);
                    //console.log(recipe);
//                 var recepies = '';
//    //            
//    //            for (i = 0; i = recipe.data.length; i++) {
//                for (i = 0; i < recipe.data.length; i++) {
//    //                console.log(recipe.data[i]['recipe_name']); 
//                    recepies += '<div class="col-lg-1 " id="recipe"> <input  id="abc"> ';
//                    recepies += recipe.data[i]['recipe_name'];// isko value mein dalna hoga text field k
//                 recepies += recipe.data[i]['recipe_id'];
//                    recepies += ' </div>';
//                }
                    $('#purchase_entry_holder').append(recipe);
                }
            });
        } else {

            $chk.click(function () {
                var colToHide = $tbl.find("." + $(this).attr("name"));
                $(colToHide).toggle();
            });
        }

    }
</script>

<script type="text/javascript">

    $(document).ready(function () {
        var url = '<?= base_url(); ?>index.php/cooking_controller/get_recipe';
        $.getJSON(url,
            function (json) {
                //alert(json);
                var tr;
                for (var i = 0; i < json.length; i++) {
                    tr = $('<tr/>');
                    tr.append("<td>" + json[i].recipe_name + "</td>");
                    tr.append("<td>" + json[i].recipe_id + "</td>");
                    $('table').append(tr);
                }
            });
    });
</script>

</body>

</html>
