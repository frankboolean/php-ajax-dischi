$(document).ready(function(){

  $.ajax({

    url: "database.php",
    method: "GET",
    success: function(data){

    console.log(data);

    var template = Handlebars.compile($("#entry-template").html());
    // ciclo album

    for (var i=0; i < data.length;i ++){
      var album= data[i];
      console.log(album);


      var generato= template({
        title : album.title,
        poster: album.poster,
        author: album.author,
        year: album.year,

      });


      $(".container").append(generato);
    }

  },
  error: function(err){

  }




  });






});
