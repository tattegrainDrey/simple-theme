<footer>
    <div class="min">Propriété de Tattegrain. © Tous droits réservés.</div>
</footer>
<?php wp_footer(); ?>
</body>

<script>
    function magnifier() {
        let ham = document.getElementById('hamburger');
        let  mag = document.getElementById('search');
        if (ham.style.display == "flex") {
            ham.style.display = "none";
            mag.style.display = "flex";
        }
        else {
            mag.style.display == "flex" ? mag.style.display = "none" : mag.style.display = "flex";
        }
    }
    function hamburger() {
        let ham = document.getElementById('hamburger');
        let  mag = document.getElementById('search');
        if (mag.style.display == "flex") {
            mag.style.display = "none";
            ham.style.display = "flex";
        }
        else {
            ham.style.display == "flex" ? ham.style.display = "none" : ham.style.display = "flex";
        }
    }
</script>

</html>
