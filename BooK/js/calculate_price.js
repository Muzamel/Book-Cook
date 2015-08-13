 function CalculatePrice (id,quantity) {
			var startP = parseInt (document.getElementById ("priceT"+id).innerHTML);
			var startQ = parseInt (document.getElementById ("quantityT"+id).value);
            if(startQ > quantity)
            {
                document.getElementById ("quantityT"+id).value = quantity;
                startQ = quantity;
            }
			var Bill = 0;
			if (!isNaN ( startP)&&!isNaN(startQ))
			{var Bill = startP * startQ}
		    document.getElementById ("TPrice"+id).value =  Bill;

		}


 function CalculateTotalBill(){

         var rowTotals = document.getElementsByClassName('row-total');
         var orderTotal = 0;
        {
            for(var i = 0; i < rowTotals.length; i++)
                if(!isNaN(parseFloat(rowTotals[i].value)) )
                orderTotal += parseFloat(rowTotals[i].value);
            }
     document.getElementById ("get_bill").value = orderTotal;

 }

 //
 //function check_order(){
 //    //alert();
 //    $.ajax ({
 //        url:''+base_url+'index.php/BulkRecipe_Controller/reserve_order ',
 //        type:'POST',
 //        data:{
 //
 //
 //           id:{ restaurant_id:$("#rest_times").val(),
 //            quantity:$("quantityT").val()
 //
 //
 //        },
 //
 //
 //            dataType:'string',
 //
 //        success:function(response){
 //            console.log(response)
 //
 //            //mydata = response['data'][0];
 //            //var obj = JSON.parse(response['data'][0]);
 //            //alert(mydata.available);
 //            //jQuery('#time_availability').html(response.obj);
 //            //if(mydata.available < $("#no_of_people").val())
 //            //{
 //            //    alert('Not Available')
 //            //}
 //        }
 //    });
 //}

