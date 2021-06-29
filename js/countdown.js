// Lantern Wedding Theme
// Version : v1.0

// Count down
(function($) {
	"use strict";
	setInterval(function(){
        var curYear = (new Date()).getFullYear();
        var newYear = (new Date()).getFullYear()+1;
		var brithday = new Date("7/8/" + curYear);  //brithday
        
        //Get today's date
        var todaysDate = new Date();
        
        //Call setHours to take the time out of the comparison
        if(brithday.setHours(0,0,0,0) <= todaysDate.setHours(0,0,0,0)) {
            //If birthday has pass
            var future = new Date("Aug 7 " + newYear + " 00:00:00 GMT+0800");  //date to count down
        } else {
            //If birthday has not pass
            var future = new Date("Aug 7 " + curYear + " 00:00:00 GMT+0800");  //date to count down
        }
		
		var now = new Date();
		var difference = Math.floor((future.getTime() - now.getTime()) / 1000);

		var seconds = fixIntegers(difference % 60);
		difference = Math.floor(difference / 60);

		var minutes = fixIntegers(difference % 60);
		difference = Math.floor(difference / 60);

		var hours = fixIntegers(difference % 24);
		difference = Math.floor(difference / 24);


		var days = difference;

		$("#seconds").text(seconds);
		$("#minutes").text(minutes);
		$("#hours").text(hours);
		$("#days").text(days);

	}, 1000);

	function fixIntegers(integer)
	{
		if (integer < 0)
			integer = 0;
		if (integer < 10)
			return "0" + integer;
		return "" + integer;
	}
})(jQuery);
