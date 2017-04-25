onOff = true;
function toggleSideMenu() {
	var sideMenu = document.getElementById('side-menu'),
 		trigger = document.getElementById('side-menu-trigger');

	if (onOff === true) {
		sideMenu.style.marginLeft = 0;
		trigger.style.marginLeft = '19.8vw';
		trigger.style.backgroundColor = '#006F79';
		onOff = false;
	}
	else{
		sideMenu.style.marginLeft = '-20vw';
		trigger.style.marginLeft = 0;
		trigger.style.backgroundColor = '#74B7C0';
		onOff = true;
	} 
}

( function ( document, window, index ) {
	var inputs = document.querySelectorAll( '.inputfile' );
	Array.prototype.forEach.call( inputs, function( input )
	{
		var label	 = input.nextElementSibling,
			labelVal = label.innerHTML;

		input.addEventListener( 'change', function( e ) {
			
			var fileName = '';
			if( this.files && this.files.length > 1 ) {
				fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
			}
				
			else {
				fileName = e.target.value.split( '\\' ).pop();
			}

			if( fileName ) {
				label.querySelector( 'span' ).innerHTML = fileName;
			}
			else {
				label.innerHTML = labelVal;
			}
		});
	});
} ( document, window, 0 ));

var projCoverInput = document.getElementById('proj_cover');

function changeLabelText() {
    var projCoverInputValue = projCoverInput.value;
    console.log(projCoverInputValue);
    var fileNameStart = projCoverInputValue.lastIndexOf('\\'); 
    projCoverInputValue = projCoverInputValue.substr(fileNameStart + 1);
    console.log(projCoverInputValue);
  
    if (projCoverInputValue !== '') {
        document.getElementById('proj_cover_upload').innerHTML = projCoverInputValue; 
    }
}

projCoverInput.addEventListener('change',changeLabelText,false);

function searchTitle(value) {
	var titles = document.getElementsByClassName('proj-card-title'),
		cards = document.getElementsByClassName('proj-card');
		keywords = document.getElementsByClassName('keyword');
		dates = document.getElementsByClassName('upload-date');
	patt = new RegExp(value, 'i');
	for (var i = 0; i < cards.length; i++) {
		if (patt.test(titles[i].innerHTML) || patt.test(keywords[i].innerHTML) || patt.test(dates[i].innerHTML)) {
			cards[i].style.display = 'block';
		}
		else {
			cards[i].style.display = 'none';
		}
		console.log(value);
	}
	
}

function closeWelcome () {
	document.getElementById('close').parentElement.parentElement.style.display = 'none';
}