$(document).ready(function () {
    $('#commande_ordonance').change(function () {
        if ($(this).is(":checked")) {
            $('#commande_description').hide();
        } else {
            $('#commande_description').show();
        }
    });
});