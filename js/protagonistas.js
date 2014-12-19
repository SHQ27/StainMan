var protagonistas = function() {

    var self = this;
    
    this.init = function() {
        self.setListeners();
    }

    this.setListeners = function() {
    	self.setGreyscaleBehaviour();
    }

    this.setGreyscaleBehaviour = function () {
    	$('.cast-img').click(function(event) {
	    	$('.no-greyscale').removeClass('no-greyscale');
	    	$(this).addClass('no-greyscale');
            actorName = event.target.id;
            if ( $('#' + actorName + '-info').is(":hidden") ) {
                $('.actor-info-container').fadeOut();   
                $('#' + actorName + '-info').fadeIn();
            };
    	})
    }

    this.init();
}
