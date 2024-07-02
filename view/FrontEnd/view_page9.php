

<?php include_once ("view/FrontEnd/view_header.php") ?>

<main>
<div class="code">
        <div class="verification-code">
            <h2>Veuillez saisir le code qui vous a été envoyé</h2>
            <div class="code-inputs">
                <input type="text" maxlength="1">
                <input type="text" maxlength="1">
                <input type="text" maxlength="1">
                <input type="text" maxlength="1">
                <input type="text" maxlength="1">
            </div>
            <button class="submit-button" disabled>Suivant</button>
            <div class="resend-code">
                Vous n'avez pas reçu le code ? <a href="#">Renvoyer</a>
            </div>
        </div>
    </div>

</main>
<?php include_once ("view/FrontEnd/view_footer.php") ?>