    <div class="header-wrapper">
        <div class="footer">
            <p>&copy;<?php echo date("Y"); ?> tuneMate</p>
            <p class="lastmod">
                <?php
                    // outputs e.g. 'Last modified: August 7 2019 20:43:59.'
                    echo "Last modified: " . date ("F d Y H:i:s.", getlastmod());
                ?>
            </p>
            <div class="social">
                <img src="img/github-white.svg" alt="github logo" />
                <a class="github-link" href="https://github.com/andrewghale">
                    <p>Github</p>
                </a>
            </div>
        </div>
    </div>
    <script src="js/app.js"></script>
</body>
</html>