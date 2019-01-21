function onChangeInputVal(e) {

    var query = $('#taskOption').val();
    console.log(query);


    if(query != document.querySelector("<option>")) {
        $('#resultat').removeClass('hidden');
        findTravelsWithQuery(query);
    } else {
        $('#resultat').addClass('hidden');
    }   
}


function onClickRecupCity {
    var cityId = $(this).data('Continents');
    console.log(cityId);
    displayContinents(cityId);
    $('#taskOption').val();
    $('#resultat').addClass('hidden');
}

$('#taskOption').on('click', onChangeInputVal);
$(document).on('click', '#continent-list li', displayContinents);