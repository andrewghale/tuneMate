    <div class="header-wrapper">
        <div class="footer">
            <p>&copy; <?php echo date("Y"); ?> tuneMate</p>
            <p class="lastmod">
                <?php
                    // outputs 'Last modified: August 7 2019 20:43:59 (London)'

                    echo "Page last modified: "
                    // getlastmod(returns when page was last modified)
                    . date ("d.m.Y H:i:s", getlastmod())
                    . " (";
                    $date = new DateTime(null, new DateTimeZone('Europe/London'));
                    $tz = $date->getTimezone();
                    $text = ($tz->getName());
                    //trim first half of timezone name and the slash
                    $trimmed = ltrim($text, "Europe/");
                    echo ($trimmed)
                    . ")"
                    ;
                ?>
            </p>
            <a class="github-link" target="_blank" href="https://github.com/andrewghale">
            <div class="social">
                <img src="img/github-white.svg" alt="github logo" />
                    <p>Github</p>
                </div>
            </a>
        </div>
    </div>
    <script src="js/app.js"></script>
</body>
</html>