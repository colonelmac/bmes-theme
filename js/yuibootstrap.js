/**
 * Author: Derrick McMillen
 * Email: colonelmac@gmail.com
 */

// bootstrap all scripts
Y = YUI().use('node', 'event', function() { 
	
	Y.on('domready', function() {
	
		var src = "./wp-content/themes/bmes/js/",
			scripts = ['menu']; // add your javascript files here
		
		for(var i in scripts) {
		
			var s = document.createElement('script'); 
			s.src = src + scripts[i] + '.js'; 
			
			document.querySelector('body').appendChild(s); 	
		}
	});
}); 