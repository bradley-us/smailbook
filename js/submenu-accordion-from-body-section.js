$(function() {
	var Accordion = function(el, multiple) {
		this.el = el || {};
		this.multiple = multiple || false;

		// Variables privadas
		var links = this.el.find('.link');
		// Evento
		links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
	}

	Accordion.prototype.dropdown = function(e) {
		var $el = e.data.el;
			$this = $(this),
			$next = $this.next();
        
        $next.slideToggle();
        $this.parent().toggleClass('open');
        
        if (!data.multiple) {
          $el.find('.submenu').not($next).slideUp().parent().removeClass('open'); 
        };
	}	

	var accordion = new Accordion($('#accordion'), false);
    
    
    
    
    
    
    
    
    
    
    
    var Accordion = function(el, multiple) {
		this.el = el || {};
		this.multiple = multiple || false;

		// Variables privadas
		var links = this.el.find('.link-box');
		// Evento
		links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
	}

	Accordion.prototype.dropdown = function(e) {
		var $el = e.data.el;
			$this = $(this),
			$next = $this.next();

		$next.slideToggle();
		$this.parent().toggleClass('open-box');

		if (!e.data.multiple) {
			$el.find('.submenu-accordion-from-body-section-box').not($next).slideUp().parent().removeClass('open-box');
		};
	}	

	var accordion = new Accordion($('#accordion-box'), false);
    
    
    
    
    
    
    
    
    
    
    
    var Accordion = function(el, multiple) {
		this.el = el || {};
		this.multiple = multiple || false;

		// Variables privadas
		var links = this.el.find('.link-box-1');
		// Evento
		links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
	}

	Accordion.prototype.dropdown = function(e) {
		var $el = e.data.el;
			$this = $(this),
			$next = $this.next();

		$next.slideToggle();
		$this.parent().toggleClass('open-box-1');

		if (!e.data.multiple) {
			$el.find('.submenu-accordion-from-body-section-box-1').not($next).slideUp().parent().removeClass('open-box-1');
		};
	}	

	var accordion = new Accordion($('#accordion-box-1'), false);
    
    
});