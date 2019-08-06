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
        
        let $qodsource = response[0]._qod_quote_source;
         
         
        $('.quote-wrapper').empty();
        $('.author').empty();
        $('.qod-source').empty();
        $('.quote-wrapper').append(response[0].content.rendered);
        
       
        let p = '<p>' + response[0]._qod_quote_source + '</p>';
        let urlLink = '<a href="' + response[0]._qod_quote_source_url + '">';
        let url = response[0]._qod_quote_source_url;


        if ($qodsource.length > 1) {
          $('.author').append('- ' + response[0].title.rendered + ' . ');
        } else { 
          $('.author').append('- ' + response[0].title.rendered);
        }

        if (url.length > 1) {
          $('.qod-source').append(urlLink + p + '</a>');
        } else { 
          $('.qod-source').append(p);
        }

        history.pushState(response, null, "/project5/quotesondev/" + response[0].slug);
       

      });
    });
    

    

    $('#submit-button').on("click", function(event) {

      const $author = $('#author-name').val();
      const $quote = $('#submit-quote').val();
      const $findQuote = $('#find-quote').val();
      const $quoteSource = $('#quote-source').val();
      event.preventDefault();
      $.ajax({
        method: "post",
        url: red_vars.rest_url + "wp/v2/posts",
        beforeSend: function (xhr) {
          xhr.setRequestHeader("X-WP-Nonce", red_vars.wpapi_nonce);
        },
      
          data: {
          title: $author,
          content: $quote,
          _qod_quote_source: $findQuote,
          _qod_quote_source_url: $quoteSource,
          post_status: "pending"
        }
      }).success(function() {
        alert("Quote sucessfully submitted to database");
        $('#quote-submit-form')[0].reset();
        
  
      }).fail(function () {
        alert("Quote submission unsuccessful");
        $('#quote-submit-form')[0].reset();
  

      });
    });
    
    
    $('#menu-item-260').prepend('Brought to you by ');




  })(jQuery);