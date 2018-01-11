/**
 * 
 */

function showRegistraintsModal(techTalksEmail,citizenHackEmail,hungamaEmail){
	
	if(techTalksEmail!=''){
		$('#techtalksButton').show();
	}else {
		$('#techtalksButton').hide();
	}
	
	if(citizenHackEmail!=''){
		$('#citizenhackButton').show();
	}else {
		$('#citizenhackButton').hide();
	}
	
	if(hungamaEmail!=''){
		$('#hungamaButton').show();
	}else {
		$('#hungamaButton').hide();
	}
	$('#editModal').modal('show');
}