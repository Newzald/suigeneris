/**
 * Created by Ian on 3/23/17.
 */
$(function () {
    $('[data-toggle="popover"]').popover()

    $('.popover-dismiss').popover({
        trigger: 'focus'
    })
});