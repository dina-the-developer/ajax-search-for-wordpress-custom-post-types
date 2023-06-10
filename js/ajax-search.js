// ajax-search.js
jQuery(function ($) {
  // Search form submission and AJAX request
  $('form.search-form').on('submit', function (e) {
    e.preventDefault();
    var $form = $(this);
    var $resultsContainer = $('.search-results');

    $.ajax({
      url: ajaxurl, // WordPress AJAX URL
      type: 'POST',
      data: {
        action: 'ajax_search', // AJAX action hook
        search_query: $form.find('input.search-input').val(), // Search query value
      },
      beforeSend: function () {
        // Display loading spinner or any other indication
        $resultsContainer.html('Searching...');
      },
      success: function (response) {
        // Display search results
        $resultsContainer.html(response);
      },
      error: function () {
        $resultsContainer.html('Error occurred. Please try again.');
      },
    });
  });
});