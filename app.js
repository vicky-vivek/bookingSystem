$(document).ready(function(){
	
$('.accordion').click(function(){
		var busid = $(this).attr("id");
		//console.log(this);
		$.ajax({
			url:'controller.php?fetch='+busid,
			type:'GET',
			success:function(response){
			var arr = response.split(",");
			//console.log(this);
			if(arr.length == 6){
				$(busid).attr("disabled", "disabled");
				$(busid).html('Sold Out');
				$(".panel").hide();
			}else{
			for(var i=0;i<arr.length;i++){
				//console.log(this);
				$('#'+busid+'~.panel').find(':input[value="'+arr[i].trim()+'"] + .checkmark').css("background-color" , "red");
				$('#'+busid+'~.panel').find(':input[value="'+arr[i].trim()+'"]').attr("disabled", "disabled");
			}
		  }
		}
	});
});		



var ck = [];

    $(document).on('change',':checkbox',function(){
		var i=0;
		$(':checkbox:checked').each(function(){
          if($(this).val() != "selectAll"){
          ck[i++] = $(this).val();
      		}
        });

	});



	$(".book" , this).click(function(e){
		e.preventDefault();
		var datastring = JSON.stringify(ck);
		var id = $(this);
		//console.log(ck);
		var busid = $(this).siblings(":button").attr('id');
		//console.log(busid);
		if(datastring == "[]"){
			alert("No seats selected");
		}else{
		$.ajax({
			url:'controller.php?book=book',
			type:'POST',
			dataType: 'json',
			data: { data:datastring , bus_id:busid },
			success:function(response){
			if(response == "ok"){	
			alert("seats booked successfully");
			$(".panel").hide();
			$(id).attr("hidden",true);
			
		  	 }
			}
		});
		}
	});



	function booking_history(){
		$.ajax({
			url:'controller.php?history=history',
			type:'GET',
			success:function(response){
			var data = JSON.parse(response);	
			$("#book_history").html('');
			$("#book_history").html('<th>Transaction Id</th>\
									  <th>Bus Name</th>\
									  <th>Booked Seat</th>\
									  <th>Book Time</th>\
									  <th>Status</th>\
									  <th>Action</th>');
			var arr =$.map(data , function(obj , i){
				$("#book_history").append('<tr><td>'+obj.tran_id+'</td><td>'+obj.bus_name+'</td><td>'+obj.booked_seat+'</td><td>'+obj.book_time+'</td><td>'+obj.status+'</td><td><button class="btn btn-danger btn-sm cancel">Cancel</button></td></tr>');
			});
			
		  	 
			}
		});


	}
	
	booking_history();

var can  =  function cancel(){   setTimeout(function(){
		$(document).find('.cancel').on('click', function(e){
		e.preventDefault();
		var tid = $(this).closest("tr").find('td:eq(0)').text();
		var busname = $(this).closest("tr").find('td:eq(1)').text();
		var bookedseat = $(this).closest("tr").find('td:eq(2)').text();
		var booktime = $(this).closest("tr").find('td:eq(3)').text();
		var arr = bookedseat.split(",");
		//console.log(arr);
		$("#tid").text(tid);
		$("#busname").text(busname);
		$("#bookseat").html('');
		if(arr.length > 1){
			$("#bookseat").html('<input type="checkbox"  id="selectAll" value="selectAll"/>Select All <br />');
		}	for(var i=0;i < arr.length;i++ ){
				$("#bookseat").append('<input type="checkbox" name="checkbox[]" value="'+arr[i]+'"/>'+arr[i]+'<br />');
			   }
	    
		$("#myModal").modal('show');
	});
    }, 500)}

can();

	
	$(document).on('change', '#selectAll', function() {
	    if(this.checked) {
	      $(":checkbox").prop('checked', true);
	    }else{
	      $(":checkbox").prop('checked', false);
	    }
	});


	$(document).on('click', '#editcancel', function(e) {
		e.preventDefault();
		var ck = [];
		var i=0;
		$(':checkbox:checked').each(function(){
          if($(this).val() != "selectAll")
          ck[i++] = $(this).val();
        });
		var datastring = JSON.stringify(ck);
		var tid = $("#tid").text();
		//console.log(datastring +tid);
		if(datastring == "[]"){
			alert("No seats selected");
		}else{
		$.ajax({
			url:'controller.php',
			type:'POST',
			dataType: 'json',
			data: { canceldata:datastring , tid:tid },
			success:function(response){
				console.log(response);
				$("#myModal").modal('hide');
			}
		});
		}
		booking_history();
		can();
	});


	$("#bookseat").on('change','[name="checkbox[]"]',function(){
		var l =  $('[name="checkbox[]"]:checked').length;
		var d = $('[name="checkbox[]"]').length;	
			//console.log(l+"  "+d);
		if(l == d){
			$("#selectAll").prop('checked',true);
		}else{
			$("#selectAll").prop('checked',false);
		}
		
	});


});