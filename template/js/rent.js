$(function(){
	var i = 1;
	$("#member_search").autocomplete({
		   source: function(request, response) {				   
				$.ajax({ url: '../member/get_members',
				data: { code_or_name: $("#member_search").val()},
				dataType: "json",
				type: "POST",
				success: function(data){ 
				    response(data);
				},
				});}, 			
		   close : function(event,ui){					
					book_list();
					},
		   select : function(event, ui){
					$("#member").val(ui.item.id);
				}
		});			  
		
	$("#title").autocomplete({
		source: function(request, response) {
				$.ajax({ url: '../book/get_book',
				data: { code_or_title: $("#title").val()},
				dataType: "json",
				type: "POST",
				success: function(data){ 
				response(data);
				},
				});},				
				select: function(event, ui){
					$("#book").val(ui.item.book);
					$("#book_code").val(ui.item.isbn);
					}
			  });				  
	});

