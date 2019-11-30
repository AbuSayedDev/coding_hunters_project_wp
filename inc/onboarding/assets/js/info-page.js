
;(function($) {

	$('.codinghunters-tab-nav a').on('click',function (e) {
		e.preventDefault();
		$(this).addClass('active').siblings().removeClass('active');
	});

	$('.codinghunters-tab-nav .begin').on('click',function (e) {		
		$('.codinghunters-tab-wrapper .begin').addClass('show').siblings().removeClass('show');
	});	
	$('.codinghunters-tab-nav .actions, .codinghunters-tab .actions').on('click',function (e) {		
		e.preventDefault();
		$('.codinghunters-tab-wrapper .actions').addClass('show').siblings().removeClass('show');

		$('.codinghunters-tab-nav a.actions').addClass('active').siblings().removeClass('active');

	});	
	$('.codinghunters-tab-nav .support').on('click',function (e) {		
		$('.codinghunters-tab-wrapper .support').addClass('show').siblings().removeClass('show');
	});	
	$('.codinghunters-tab-nav .table').on('click',function (e) {		
		$('.codinghunters-tab-wrapper .table').addClass('show').siblings().removeClass('show');
	});	

	$('.codinghunters-tab-nav .changelog').on('click',function (e) {		
		$('.codinghunters-tab-wrapper .changelog').addClass('show').siblings().removeClass('show');
	});		


	$('.codinghunters-tab-wrapper .install-now').on('click',function (e) {	
		$(this).replaceWith('<p style="color:#23d423;font-style:italic;font-size:14px;">Plugin installed and active!</p>');
	});	
	$('.codinghunters-tab-wrapper .install-now.importer-install').on('click',function (e) {	
		$('.importer-button').show();
	});	


})(jQuery);
