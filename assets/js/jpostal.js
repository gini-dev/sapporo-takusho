$(function () {
    $('#zip1').jpostal({
        click : '#btn',
        postcode : [
            '#zip1',
            '#zip2'
        ],
        address : {
            '#address1' : '%3',
            '#address2' : '%4%5'
        }
    });
});