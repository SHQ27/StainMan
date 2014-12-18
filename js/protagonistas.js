var protagonistas = function() {

    var self = this;
    
    this.init = function() {
        self.setListeners();
    }

    this.setListeners = function() {
    	self.setGreyscaleBehaviour();
    }

    this.setGreyscaleBehaviour = function () {
    	$('.cast-img').click(function() {
	    	$('.no-greyscale').removeClass('no-greyscale');
	    	$(this).addClass('no-greyscale');
    	})
    }

    this.init();
}

$(document).ready(function(){ protagonistas() });
