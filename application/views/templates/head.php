
<script type="text/javascript" src="http://code.jquery.com/jquery-1.5.min.js"></script>

<script type="text/javascript" src="http://code.jquery.com/mobile/1.0a3/jquery.mobile-1.0a3.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
	function init()
	{
		var selVal = $('#type_select').val();
		$('input[name=type]').val(selVal);
	}
	function bindEvents()
	{
		$('#type_select').live("change", function(){ workoutForm.addTypeField($(this)); });
	}

	
	var workoutForm = {
		addTypeField: function($obj)
		{
			var selVal = $obj.val();
			if(selVal != 'other')
			{
				$('input[name=type]').hide();
				$('input[name=type]').val(selVal);
			}
			else
			{
				$('input[name=type]').val('');
				$('input[name=type]').show();
			}
		}
	}
	
	$('body').live('pageshow', function (event, ui) {
	init();
	bindEvents();		
	});
	

});
</script>
<link rel="stylesheet"  href="http://code.jquery.com/mobile/1.0a3/jquery.mobile-1.0a3.min.css" />
<link rel="stylesheet" href="/css/style.css" type="text/css" media="screen, projection" />

