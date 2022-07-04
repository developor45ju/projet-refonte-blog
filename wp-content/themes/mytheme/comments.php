<div class="comments" id="comments">
    <?php
        $args = array(
            'status' => 'approve'
        );
        echo "<hr />";
        if (have_comments()) {
            foreach ($comments as $comment) {
                echo '<h2>' . $comment->comment_author . '</h2>';
                echo '<p>' . $comment->comment_content . '</p>';
            }
        } else {
            echo 'Pas de commentaires trouvés<br />';
        }
    ?>
    <?php comment_form(array(
        "fields" => array(
            "author" => "<div class='groupe-info'><label for='author'>Nom: <span aria-required='true'>*</span> <input type='text' name='author' class='form-commentaire-champ' id='author' value='' /></label>",
            "email" => "<label for='email'>E-mail: <span aria-required='true'>*</span> <input type='email' name='email' class='form-commentaire-champ' id='email' value='' /></label></div>",
            "cookies" => "<div class='casse-cocher'><label for='cookies'>Enregistrer mes informations dans le navigateur lors de mon prochain commentaire <input type='checkbox' name='cookies' class='cookies' id='cookies' value='false' /></label></div>"
        ),
        "comment_field" => "<div class='group-info'><label for='comment'>Commentaire: <span aria-required='true'>*</span> <textarea row='10' name='comment' class='champ-commentaire' id='comment'></textarea></label></div>",
        "comment_notes_before" => "<p class='info-utilisation-email'><i><span class='important'>Pour information</span>, votre mail ne sera pas publié</i></p>",
        "comment_notes_after" => "<p class='message-soutenir'>Merci de bien vouloir laissez un commentaire</p>",
        "class_form" => "form-commentaires",
        "submit_button" => "<input type='submit' class='button-envoyé' id='button-submit' value='Envoyer' />",
    )); ?>
</div>