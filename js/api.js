$.ajax({
  url: "http://localhost/offres.php",
  type: "GET",
  datatype:"json"
})
.done(displayContinents)
.fail(function(error){
  console.log("fail");
});

function displayContinents(response)
{
    console.log(response);
    var rep = JSON.parse(response);
    console.log(rep);

var Europe = <?php echo json_encode($query); ?>;
var Amerique = <?php echo json_encode($query2); ?>;
var Oceanie = <?php echo json_encode($query3); ?>;
var Asie = <?php echo json_encode($query4); ?>;
var Afrique = <?php echo json_encode($query5); ?>;

    $('#continent-list').append('<p>'+rep.Continents+'</p>');

        $('#continent-list').empty();
        $('#Europe').val(Europe);
        $('#Amerique').val(Amerique);
        $('#Oceanie').val(Oceanie);
        $('#Asie').val(Asie);
        $('#Afrique').val(Afrique);

       for (var i = 0; i < length ; i++) {
        $('#continent-list').append('<li data-hollidays="'+rep.travels[i].Villes+'">'+rep.travels[i].Contenu+'">'+rep.travels[i].Prix+'"</li>');
    }
}
