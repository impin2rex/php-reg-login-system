// SWAP ICON ON CLICK
// Source: https://stackoverflow.com/a/34254979/751570
$('.dark-toggle').on('click',function(){
	if ($(this).find('i').text() == 'brightness_4'){
			$(this).find('i').text('brightness_high');
	} else {
			$(this).find('i').text('brightness_4');
	}
});

document.addEventListener('DOMContentLoaded', (event) => {
  ((localStorage.getItem('mode') || 'dark') === 'dark') ? document.querySelector('body').classList.add('dark') : document.querySelector('body').classList.remove('dark')
})	