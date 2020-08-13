$(function() {
	var $wd = $( window ),
		$he = $( '#header' ),
		$fl = $( '#flag' ),
		$ml = $( '#menu li' ),
		$bh = ( $.browser.webkit ) ? $( 'body' ) : $( 'html' ),
		clr = [
			['how'		, 'red'],
			['why'		, 'turquoise'],
			['what'		, 'purple'],
			['start'	, '']						
		];
	$wd.bind( 
		'scroll.x',
		function()
		{
			var st = $bh.scrollTop(),
				fn = (st > 350) ? 'addClass' : 'removeClass';
			$he[fn]( 'fixed' );

			var fx = false;
			for ( var a = 0, l = clr.length; a < l; a++ )
			{
				var c = clr[ a ];
				if ( st > $( '#' + c[ 0 ]).offset().top - $wd.height() + 250 )
				{
					if ( !$fl.hasClass( c[ 1 ] ) )
					{
						$fl.removeAttr( 'class' );
						$fl.addClass( c[ 1 ] );
			
						$ml.removeClass( 'selected' );
						$( 'a[href*=#' + c[ 0 ] + ']' ).parent().addClass( 'selected' );
					}
					fx = true;
					break;
				}
			}
			if ( !fx )
			{
				$mi.removeClass( 'selected' );
				$fl.removeAttr( 'class' );
			}
							
		}
	).trigger( 'scroll.x' );


	var $ma = $( '#menu a, p.next a' );
	$ma.bind(
		'click.x',
		function()
		{
			$bh.animate({
				'scrollTop': $( $( this ).attr( 'href' ) ).offset().top
			}, 1000);
			return false;
		}
	);
});