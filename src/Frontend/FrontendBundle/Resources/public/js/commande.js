$(document).ready(function () {
    $('#historique_commande_ordonance').change(function () {
        if ($(this).is(":checked")) {
            $('#historique_commande_description').hide();
        } else {
            $('#historique_commande_description').show();
        }
    });
});