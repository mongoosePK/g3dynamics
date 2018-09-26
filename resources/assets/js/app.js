$( document ).ready(function() {

    $('.add-new-gallery-image').on('click', function(){
        window.location.href = '/admin/gallery/create';
    });
	
    var target = $('#g3slider');

    target.sliderPro({
        width: '100%',
        height: '100%',
        slideAnimationDuration: 900,
        arrows: false,
        buttons: false,
        visibleSize: '100%',
        forceSize: 'fullWidth',
        slideDistance: 0,
        imageScaleMode: 'contain',
        autoHeight: true,
        init: function() {
            if (!target.find(".sp-slide").first().hasClass('sp-selected')) {
                target.find(".sp-slide").first().addClass('sp-selected');
                // return;
            }
        }
    });

    var target2 = $('#g3partners');
    target2.sliderPro({
        height: '100px',
        slideAnimationDuration: 900,
        arrows: false,
        buttons: false,
        visibleSize: '100%',
        forceSize: 'fullWidth',
        slideDistance: 0,
        imageScaleMode: 'contain',
        autoHeight: false,
        init: function() {
            if (!target2.find(".sp-slide").first().hasClass('sp-selected')) {
                target2.find(".sp-slide").first().addClass('sp-selected');
                // return;
            }
        }
    });

});

$(function(){
    $('.fold-table tr.view').on('click', function(){
        $(this).toggleClass('open').next('.fold').toggleClass('open');
    });

    $('.qa-tab').on('click', function(){
        var url = window.location.protocol + "//" + window.location.host + "/q-and-a";
        $('.qa-container').load(url);
    });

    $('.aar-link').on('click', function(e){
        e.preventDefault();
        var slug = $(this).attr('href');
        var pdf_object = '<object data="/files/'+ slug +'" type="application/pdf" width="100%" height="100%" class="pdf-container"></object>';
        $('.aar-source').html(pdf_object);
    });

    $('.past-comp-m1').on('change', function(){
        if ($(this).val() === 'Yes') {
            $('.pastcomp_m1').show();
        } else {
            $('.pastcomp_m1').hide();
            $('input[name=member1_pastyears]').val(0);
        }
    });

    $('.past-comp-m2').on('change', function(){
        if ($(this).val() === 'Yes') {
            $('.pastcomp_m2').show();
        } else {
            $('.pastcomp_m2').hide();
            $('input[name=member2_pastyears]').val(0);
        }
    });
});