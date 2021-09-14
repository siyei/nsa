function mfx(codigo, mensaje, target){
	//--------------
	// 0 => Success
	// 1 => Danger
	// 2 => Info
	// 3 => Warning
	//--------------
	switch(codigo){
		case 0 : var alert = 'success'; var ico = "fa-check"; break;
		case 1 : var alert = 'danger'; 	var ico = "fa-exclamation-triangle"; break;
		case 2 : var alert = 'info'; 	var ico = "fa-info-circle"; break;
		case 3 : var alert = 'warning'; var ico = "fa-exclamation"; break;
	}
	var h = '<div class="alert alert-'+alert+'">'+
    			'<span><i class="fa '+ico+'"></i> '+mensaje+'</span>'+
			'</div>';
	$(target).css('display', 'block');	
	$(target).html(h);
	function deleteAlert(){
	  	$(target).fadeOut( "slow", function() {
    		$(target).html('');
  		});
	}
	setTimeout(deleteAlert, 2000);
}
