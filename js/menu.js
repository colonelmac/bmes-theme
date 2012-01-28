/**
 * Author: Derrick McMillen
 * Email: colonelmac@gmail.com
 */

var nodes = Y.all('.children'); 

nodes.each(function(n) {

	var node = n.get('parentElement').get('children')._nodes[0];
	node.href = '#';
	node.style.cursor = 'default';
	node.click = function(e) {
	
		e.preventDefault(); 
	};
});
