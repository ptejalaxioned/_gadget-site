(function ($, w, d) {
  $(d).ready(function () {
    var ajaxurl = ajax_object.ajaxurl;
    $(document).on('click', '.filter-list li', function () {
      var className = this.children[0].className.split(' ')[1];
      var data = `${className}`;
      $.ajax({
        url: ajaxurl,
        type: 'POST',
        dataType: 'json',
        data: {
          action: 'filter_posts_by_category',
          data: data,
        },
        success: function (response) {
          console.log('Response:', response);
          $('.item-list').empty();
          response.forEach(function (item) {
            var $li = $('<li class="items"></li>');
            var $figure = $('<figure></figure>');
            var $link = $('<a></a>').attr('href', item.permalink);
            var $img = $('<img>')
              .attr('src', item.thumbnail)
              .attr('alt', item.title);
            $link.append($img);
            $figure.append($link);
            $li.append($figure);
            $li.text(item.name);
            var $nameSpan = $('<span class="item-name"></span>').text(
              item.title
            );
            var $priceSpan = $('<span class="item-price"></span>').text(
              item.price
            );
            $li.append($nameSpan).append($priceSpan);
            $('.item-list').append($li);
          });
        },
        error: function (xhr, status, error) {
          console.error('AJAX Error:', error);
          console.log(xhr.responseText);
        },
      });
    });
  });
  $(w).on('load', function () {
    console.log('Page fully loaded');
  });
})(jQuery, window, document);
