(function($) {
    $("#close-comments").on("click", function(event) {
      event.preventDefault();
      $.ajax({
        method: "get",
        url: red_vars.rest_url + "wp/v2/posts?filter[posts_per_page]=1&filter[orderby]=rand",
        data: {
          action: "red_comment_ajax",
          security: red_vars.comment_nonce,
        }
      }).done(function(response) {
        // let pickedPost = (Math.floor(Math.random() * response.length)) ///some number;
        // console.log(response[pickedPost].title);
        // console.log(response[pickedPost].excerpt);
        // console.log(response.length);
         console.log(response[0].content.rendered);
         console.log(response[0].title.rendered);
         console.log(response[0]);
         console.log(response);
         console.log(response[0]._qod_quote_source);
        
       

// 
        
        $('.quote-wrapper').empty();
        $('.author').empty();
        $('.quote-wrapper').append(response[0].content.rendered);
        $('.author').append(response[0].title.rendered);
       
       

        


      });
    });
  })(jQuery);