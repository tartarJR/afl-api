$(document).ready(function () {
    $('#birth-date').datepicker({
        dateFormat: 'dd/mm/yy',
        monthNames: ["Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim", "Kasım", "Aralık"],
        dayNamesMin: ["Pa", "Pt", "Sl", "Ça", "Pe", "Cu", "Ct"]
    }).on('keypress paste', function (e) {
        e.preventDefault();
        return false;
    });
});