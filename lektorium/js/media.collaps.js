(function($){$.fn.collapsorz=function(options){var defaults={toggle:"> *",minimum:5,showText:"Show",hideText:"Hide",linkLocation:"after",defaultState:"collapsed",wrapLink:null};var options=$.extend(defaults,options);return this.each(function(){if($(options.toggle,this).length>options.minimum){var $obj=$(this);var $targets=$(options.toggle,this);if(options.defaultState=="collapsed"){$targets.filter(":gt("+(options.minimum-1)+")").hide()}var $toggler=$('<a href="#" class="toggler"></a>');if(options.linkLocation=="before"){$obj.before($toggler)}else{$obj.after($toggler)}if(options.wrapLink){$toggler.wrap(options.wrapLink)}if(options.defaultState=="expanded"){$obj.data("status","expanded");$toggler.addClass("expanded");$toggler.html(options.hideText)}else{$obj.data("status","collapsed");$toggler.addClass("collapsed");$toggler.html(options.showText)}$toggler.click(function(){if($obj.data("status")=="collapsed"){$targets.filter(":hidden").show();$toggler.html(options.hideText);$obj.data("status","expanded")}else if($obj.data("status")=="expanded"){$targets.filter(":gt("+(options.minimum-1)+")").hide();$toggler.html(options.showText);$obj.data("status","collapsed")}$(this).toggleClass("collapsed").toggleClass("expanded");return false})}})}})(jQuery);

jQuery(document).ready(function($) {
$("div.bef-checkboxes").collapsorz({
        minimum: 8
        , showText: "<i class='fi-arrow-down'></i> Показать все"
        , hideText: "<i class='fi-arrow-up'></i> Свернуть"
        , toggle: "div.form-type-bef-checkbox"
    });
$('#list').click(
    function(){
        $('div.picture').removeClass('small-4');
        $('div.picture').removeClass('columns');
        $('div.picture').addClass('hide');
        $('div.picture').addClass('hide');
        $('div.title').addClass('small-6');
        $('div.title').addClass('columns');
        $('div.body-desc').addClass('hide');
        $('div.info').removeClass('small-8');
        $('div.info').removeClass('columns');
        $('div.speaker-and-univer').removeClass('row');
        $('div.speaker').removeClass('small-5');
        $('div.speaker').addClass('small-3');
        $('div.speaker').addClass('push-3');
        $('div.university').removeClass('small-7');
        $('div.university').addClass('small-3');
        $('div.university').addClass('pull-3');

        $(this).addClass('active');
        $(this).removeClass('inactive');

        $('#thumb').removeClass('active');
        $('#thumb').addClass('inactive');


        return false;
    });

$('#thumb').click(
    function(){
        $('div.picture').addClass('small-4');
        $('div.picture').addClass('columns');
        $('div.picture').removeClass('hide');
        $('div.picture').removeClass('hide');
        $('div.title').removeClass('small-6');
        $('div.title').removeClass('columns');
        $('div.body-desc').removeClass('hide');
        $('div.info').addClass('small-8');
        $('div.info').addClass('columns');
        $('div.speaker-and-univer').addClass('row');
        $('div.speaker').addClass('small-5');
        $('div.speaker').removeClass('small-3');
        $('div.speaker').removeClass('push-3');
        $('div.university').addClass('small-7');
        $('div.university').removeClass('small-3');
        $('div.university').removeClass('pull-3');

        $(this).addClass('active');
        $(this).removeClass('inactive');

        $('#list').removeClass('active');
        $('#list').addClass('inactive');

        return false;
    });

});

