<footer>
<ul>
                <li>Copyright &copy; <?php
                 $dateCurrent = idate('Y');
                 $dateCreated = 2021;
                 if($dateCurrent == $dateCreated) {
                    echo $dateCreated;
                 } else {
                    echo ''.$dateCreated.' - '.$dateCurrent.'    ';
                 }
                 ?></li>
                
                <li>All Rights Reserved </li>
                <li><a href="">Terms of use</a></li>
                <li><a href="../index.php">Portal page</a></li>
                <li> <a id="html-checker" href="#">Check HTML</a></li>
                <li><a id="css-checker" href="#">Check CSS</a></li>

                <script>
                    document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
                    document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
                </script>
            </ul>
            </footer>
        </div>
    </body>
</html>