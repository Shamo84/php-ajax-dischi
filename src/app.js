const $ = require("jquery");
const Handlebars = require("handlebars");

$(document).ready(function functionName() {
  $.ajax({
    url: "http://localhost:81/php-ajax-dischi/server.php",
    method: "GET",
    success: function(risposta) {
      var source = $("#entry-template").html();
      var template = Handlebars.compile(source);
      for (var i in risposta) {
      var context = {
        poster: risposta[i].poster,
        title: risposta[i].title,
        author: risposta[i].author,
        genre: risposta[i].genre,
        year: risposta[i].year
      };
      var html = template(context);
      $(".container").append(html);
      }
      $(".disco").each(function() {
        $var = $(this).children("h3").text();
        $(".authors.hidden").children("option").attr("value", $var);
        $(".authors.hidden").children("option").text($var);
        $clone = $(".authors.hidden").children("option").clone();
        $(".select").append($clone);
      });
    },
    error: function() {
      console.log("errore");
    }
  });

  $(".select").change(function() {
    $val = $(this).val();
    $(".container").html("");
    $.ajax({
      url: "http://localhost:81/php-ajax-dischi/server.php",
      method: "GET",
      data: {
        author: $val
      },
      success: function(risposta) {
        var source = $("#entry-template").html();
        var template = Handlebars.compile(source);
        for (var i in risposta) {
        var context = {
          poster: risposta[i].poster,
          title: risposta[i].title,
          author: risposta[i].author,
          genre: risposta[i].genre,
          year: risposta[i].year
        };
        var html = template(context);
        $(".container").append(html);
        }
      },
      error: function() {
        console.log("errore");
      }
    });
  });
});
