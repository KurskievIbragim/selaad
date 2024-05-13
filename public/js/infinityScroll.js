$(document).ready(function() {
    $('#more-words-button').on('click', function() {
        var nextPageUrl = $('#posts-container').data('next-page-url');

        if (nextPageUrl) {
            $.ajax({
                url: nextPageUrl,
                type: 'GET',
                success: function(response) {
                    $('#posts-container').append(response.view);
                    $('#posts-container').data('next-page-url', response.nextPageUrl);
                }
            });
        } else {
            // Вывести сообщение или выполнить другие действия, когда больше нет слов для загрузки
            console.log('Больше нет слов для загрузки!');
            // Можете также скрыть кнопку "Загрузить больше" или отключить обработчик события
            // $('#more-words-button').remove();
            // $('#more-words-button').off('click');
        }
    });
});
