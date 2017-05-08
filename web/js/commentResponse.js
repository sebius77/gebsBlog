jQuery(document).ready(function($) {

    $('.reply').click(function(e) {
        e.preventDefault();
        var form = $('#form-comment');
        var $this = $(this);
        var parent_id = $this.data('id');
        var parent_level = $this.data('level');
        var comment = $('#comment-' + parent_id);

        // On incrémente de 1 le niveau pour la réponse au commentaire
        parent_level += 1;

        $('#parent_level').val(parent_level);

        $('#parent_id').val(parent_id);
        form.find('h4').text('Votre réponse');
        comment.after(form);

})

});