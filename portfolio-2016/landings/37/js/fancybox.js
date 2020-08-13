jQuery(document).ready(function() {
	jQuery("a.modalbox").fancybox({
		'titlePosition'	: 'inside',
		'padding':0
	});
	
	jQuery("a.gallery").fancybox({
		'titlePosition'	: 'inside',
		'padding':7
	});
});

jQuery(document).ready(function() {
	jQuery(".various").fancybox({
		maxWidth	: 800,
		maxHeight	: 400,
		fitToView	: false,
		width		: '70%',
		height		: '70%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none',
		padding:0
	});
});