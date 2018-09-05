$(function(){
	$('.user-dropdown-select').click(function(event) {
	  event.preventDefault();
	  $(this)
	    .next('.user-dropdown')
	    .slideToggle('400');
	  $(this).toggleClass('user-dropdown-select-active');
	});

	$('.user-dropdown-item-link').click(function(event) {
	  event.preventDefault();

	  var selectValue = $(this).html();
	  var selectDataId = $(this).attr('data-id');

	  $('.user-dropdown-select')
	    .html(selectValue)
	    .toggleClass('user-dropdown-select-active')
	    .next('.user-dropdown')
	    .slideToggle('400');

	  $('select[name="user-select"]')
	    .removeAttr('selected')
	    .find('option[value="' + selectDataId + '"]')
	    .prop('selected', true);
	});
	$('.single-item').slick({
      arrows: true,
      dots: true,
      slidesToShow: 1,
      slidesToScroll: 1
    });
    $(document).ready(function(){
	$('.popup-with-form').magnificPopup({
       type: 'inline',
       focus: '#name'
    });
    $(document).ready(function(){
	    var trigger = $('.mobilem'),
	    menu = $('header .bottom-header .container nav');
	    trigger.on('click',function(){
	    $(this).toggleClass('open');
	    menu.removeClass('hiddden');
	    menu.toggleClass('open');
	  });
	});
	$(document).ready(function(){
	    var triggerb = $('.mobile-user-btn');
	    var triggerc = $('header.home .top-header .container .data-btn .close-btn');
	    menub = $('header.home .top-header .container .data-btn');
	    menuo = $('.overlow-bg');
	    triggerb.on('click',function(){
		    menuo.toggleClass('open');
		    menub.toggleClass('open');
		});
	   	triggerc.on('click',function(){
		    menuo.removeClass('open');
		    menub.removeClass('open');
		});
	});
    $(".content nav").on("click","a", function (event) {
	        event.preventDefault();
	        var id  = $(this).attr('href'),
	            top = $(id).offset().top;
	        $('body,html').animate({scrollTop: top}, 1500);
	    });
	});
    $(document).ready(function(){ 
	    $( "#slider-range" ).slider({
	      range: true,
	      min: 0,
	      max: 10000,
	      values: [ 0, 3000],
	      slide: function( event, ui ) {
	        $( ".price #min" ).val(ui.values[ 0 ] + " руб");
	        $( ".price #max" ).val( ui.values[ 1 ] + " руб" );
	      }
	    });
	    $( ".price #min" ).val($( "#slider-range" ).slider( "values", 0 ) + " руб");
	   	$( ".price #max" ).val($( "#slider-range" ).slider( "values", 1 )  + " руб");
	   	
	   	$( "#slider-age" ).slider({
	      range: true,
	      min: 0,
	      max: 100,
	      values: [ 1, 100 ],
	      slide: function( event, ui ) {
	        $( ".age #min" ).val(ui.values[ 0 ] + " лет");
	        $( ".age #max" ).val( ui.values[ 1 ] + " лет" );
	      }
	    });
	    $( ".age #min" ).val($( "#slider-age" ).slider( "values", 0 ) + " лет");
	   	$( ".age #max" ).val($( "#slider-age" ).slider( "values", 1 )  + " лет");
	  });
    $(document).ready(function(){
		$(".select").selecter();
		$('#calendar').fullCalendar({
            header: {
                left: 'prev',
                center: 'title',
                right: 'next'
            },
            locale: 'ru',
			monthNames: ['Январь','Февраль','Март','Апрель','Май','οюнь','οюль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
			monthNamesShort: ['Янв.','Фев.','Март','Апр.','Май','Июнь','Июль','Авг.','Сент.','Окт.','Ноя.','Дек.'],
			dayNames: ["Воскресенье","Понедельник","Вторник","Среда","Четверг","Пятница","Суббота"],
			dayNamesShort: ["Вс.","Пн.","Вт.","Ср.","Чт.","Пт.","Сб."],
            defaultDate: '2016-01-12',
            defaultView: 'agendaWeek',
            editable: true,
            allDaySlot: false,
            minTime: "07:00:00",
        	maxTime: "21:00:00",
            eventLimit: true,
            events: [
            {
                title: 'All Day Event',
                start: '2016-01-01'
            },
            {
                title: 'Long Event',
                start: '2016-01-07',
                end: '2016-01-10'
            },
            {
                id: 999,
                title: 'Repeating Event',
                start: '2016-01-09T16:00:00'
            },
            {
                id: 999,
                title: 'Repeating Event',
                start: '2016-01-16T16:00:00'
            },
            {
                title: 'Conference',
                start: '2016-01-11',
                end: '2016-01-13'
            },
            {
                title: 'Meeting',
                start: '2016-01-12T10:30:00',
                end: '2016-01-12T12:30:00'
            },
            {
                title: 'Lunch',
                start: '2016-01-12T12:00:00'
            },
            {
                title: 'Meeting',
                start: '2016-01-12T14:30:00'
            },
            {
                title: 'Happy Hour',
                start: '2016-01-12T17:30:00'
            },
            {
                title: 'Dinner',
                start: '2016-01-12T20:00:00'
            },
            {
                title: 'Birthday Party',
                start: '2016-01-13T07:00:00'
            },
            {
                title: 'Click for Google',
                url: 'http://google.com/',
                start: '2016-01-28'
            }
        ],

            dayClick: function (date, jsEvent, view) {
                alert("Day Clicked");
            },
            eventClick: function (event) {
                alert('event');
            }
        });
	});

});
