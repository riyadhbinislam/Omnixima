</main>
<footer id="footer_area">
    <div class="container">
        <?php
        if (is_active_sidebar( 'sidebar-2' )){?>
            <aside><?php dynamic_sidebar( 'sidebar-2' ); ?></aside>
        <?php } ?>
    </div>
</footer>


<?php wp_footer(); ?>
</body>
</html>