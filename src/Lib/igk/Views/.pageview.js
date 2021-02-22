"use strict";
(function(){
var pageview = []; 
igk.ready(function(){
	$igk("#pageview").each_all(function(){
		var i = 0;
		var max = this.select(">div").getCount()-1;	 
		igk.appendProperties(this, {
			movenext: function(){
				i = Math.min(i+1, max);
				this.setCss({
					"transform": "translate("+(-100 * i)+"%, 0)"
				});
			},
			moveback: function(){
				i = Math.max(i-1, 0);
				this.setCss({
					"transform": "translate("+(-100 * i)+"%, 0)"
				});
			}
		});
	});
});
})();