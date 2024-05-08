<footer>
    <div class="footer-links">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
        <a href="<?php echo esc_url( home_url( '/about-us' ) ); ?>">About Us</a>
        <a href="<?php echo esc_url( home_url( '/category/products' ) ); ?>">Products</a>
    </div>
    <p>Copyright 2024 E.K.</p>
</footer>
</div>

<dialog id="single-post">
    <button id="close">Close</button>
    <article class="single" id="modal-content"></article>
</dialog>

<?php wp_footer(); ?>

</body>

</html>