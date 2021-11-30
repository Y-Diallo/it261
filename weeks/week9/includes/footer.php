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
                <li>All Rights Reserved</li>
                <li><a href="../../index.php"></a>Web Design by Youssoupha</li>
                <li><a href="http://validator.w3.org/check?uri=referer">HTML Validation</a></li>
                <li><a href="http://jigsaw.w3.org/css-validator/check?uri=referer">CSS Validation</a></li> 
            </ul>
            </footer>
        </div>
    </body>
</html>