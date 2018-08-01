function init()
{
	
	

	$('#btnHTML').click(
		function()
		{
			$.ajax({
				url: "table.php", 
				success: function(result)
				{
		        	//Resultado
		    	}
			});
		}
		);
	$('#btnJSON').click(
		function()
		{
			$.ajax({
				url: "json.php", 
				success: function(result)
				{
		        	//Resultado
		    	}
			});
		}
		);

}

$(init);