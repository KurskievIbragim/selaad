$(document).ready(function() {
    var token = $('meta[name="csrf-token"]').attr('content');

    $('#show-all-poesy').on('click', function(e) {
        e.preventDefault();
        resetFilters();
    });

    function resetFilters() {
        // Здесь вы можете добавить логику сброса всех активных фильтров на вашей странице
        // Например, убрать классы активности у кнопок фильтров или сбросить значения в полях фильтра
        // После этого вы можете отобразить все посты на странице
        $('.filter-button').removeClass('active');
        $('#search-input').val('');
        showAllPoesy();
    }

    function showAllPoesy() {
        $.ajax({
            url: "{{ route('admin.poesy.index') }}",
            method: 'GET',
            data: {
                _token: token,
            },
            success: function(data) {
                // Handle success response
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    }

    $('#poesy-authors-dropdown').on('click', 'a', function(e) {
        e.preventDefault();
        var authorId = $(this).data('id');
        filterPoesy(authorId, token);
    });

    function filterPoesy(authorId, token) {
        $.ajax({
            url: "{{ route('admin.poesy.filter') }}",
            type: 'POST',
            data: {
                _token: token,
                author_id: authorId
            },
            success: function(response) {
                $('#poesy-container').html(response);
            },
            error: function(xhr) {
                console.log(xhr.responseText);
            }
        });
    }
});
