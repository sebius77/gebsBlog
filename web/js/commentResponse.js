jQuery(document).ready(function($) {

    $('.reply').click(function(e) {
        e.preventDefault();
        var form = $('#form-comment');
        var $this = $(this);
        var parent_id = $this.data('id');
        var comment = $('#comment-' + parent_id);

        $('#parent_id').val(parent_id);
        comment.after(form);


    })

});