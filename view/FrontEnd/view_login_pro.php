  
  <?php include_once ("view/FrontEnd/view_header.php") ?>
  
<main>
  
  <div class="container-box">
        <div class="left-side">
            <div class="switch">
                <span class="active">Se connecter</span>
                <span>S'inscrire</span>
            </div>

            <div class="form-container-box">
                <form id="login-form">
                    <h2>Nous sommes contents 
                    de vous revoir</h2>
                    <button class="btn-conx"><img src="asset/img/google.png" alt="" class="small-imagegoogle">Continuer avec Google</button>
                    <button class="btn-conx" id="btn-fb"><img src="asset/img/fb.png" alt="" class="small-imagegoogle">Continuer avec Facebook</button>
                    <button class="btn-conx" id="btn-ap"><img src="asset/img/appel.png" alt="" class="small-imageapple">Continuer avec Apple</button>
                    <p class="ou">ou</p>
                    <br>
                    <input type="email" placeholder="Email" class="btn-conx">
                    <input type="password" placeholder="Mot de passe" class="btn-conx">
                    <br>
                    <a href=""><p>Mot de passe oublié?</p></a>
                    <br>
                    <button id="email-signup" class="btn-resv">Se connecter</button>
                </form>
                <form id="email-form" style="display:none;">
                    <h2>Inscription par email</h2>
                    <input type="text" placeholder="Nom">
                    <input type="text" placeholder="Prénom">
                    <input type="email" placeholder="Email">
                    <input type="password" placeholder="Mot de passe">
                    <label>
                        <input type="checkbox"> J'accepte la politique de confidentialité et les conditions générales d'utilisation.
                    </label>
                    <label>
                        <input type="checkbox"> J'aimerais bénéficier des offres spéciales, promotions et nouvelles.
                    </label>
                    <button class="btn-resv">Continuer</button>
                </form>
            </div>
        </div>
        <div class="right-side">
            <img src="asset/img/log.jpg" alt="Image de côté droit" id="image-login">
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const switchButtons = document.querySelectorAll('.switch span');
            const forms = document.querySelectorAll('.form-container-box form');

            // Initial state
            switchButtons[0].classList.add('active');
            forms[0].style.display = 'block';

            // Switch function
            switchButtons.forEach((button, index) => {
                button.addEventListener('click', () => {
                    // Hide all forms
                    forms.forEach(form => form.style.display = 'none');
                    // Remove active class from all buttons
                    switchButtons.forEach(btn => btn.classList.remove('active'));
                    // Show the selected form and mark the button as active
                    forms[index].style.display = 'block';
                    switchButtons[index].classList.add('active');
                });
            });
        });
    </script>
</main>