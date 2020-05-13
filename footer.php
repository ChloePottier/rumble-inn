<?php
/**
 * Footer file for the Rumble Inn theme
 * @package WordPress
 * @subpackage rumble-inn
 * @since 1.0
 * @version 1.0
 */
?>
<footer>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <!-- Menu burger -->
        <script>
            let burger = document.getElementById("burger");
            let navigation = document.getElementById("navigation");
            let burger1 = document.getElementById("burger1");
            let burger2 = document.getElementById("burger2");
            let burger3 = document.getElementById("burger3");
            burger.addEventListener("click", function() {
                navigation.classList.toggle("display-flex");
                burger.classList.toggle("bg-none");
                burger1.classList.toggle("isopen-burger1");
                burger2.classList.toggle("isopen-burger2");
                burger3.classList.toggle("isopen-burger3");
            });
        </script>
    </footer>
    <?php wp_footer(); ?>
</body>

    </html>