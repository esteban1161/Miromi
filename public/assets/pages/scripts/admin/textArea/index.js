function setTextareaHeight(textareas) {
    textareas.each(function () {
        var textarea = $(this);

        if ( !textarea.hasClass('autoHeightDone') ) {
            textarea.addClass('autoHeightDone');

            var extraHeight = parseInt(textarea.css('padding-top')) + parseInt(textarea.css('padding-bottom')), // to set total height - padding size
                h = textarea[0].scrollHeight - extraHeight;

            // init height
            textarea.height('auto').height(h);

            textarea.bind('keyup', function() {

                textarea.removeAttr('style'); // no funciona el height auto

                h = textarea.get(0).scrollHeight - extraHeight;

                textarea.height(h+'px'); // set new height
            });
        }
    })
}
$(function(){
    setTextareaHeight($('textarea'));
})