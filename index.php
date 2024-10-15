<?php
include "head.php";
include "navigation.php";
include "about.php";
include "passion.php";
include "interest.php";
include "people.php";
include "contact.php";
include "footer.php";
?>

<?php

if (isset($_POST["Name"])) {
    $name =  $_POST["Name"];
    $email = $_POST["Email"];
    $message = $_POST["Message"];

    $insertquery = "INSERT INTO messages(name, email, message) 
    VALUES ('$name', '$email', '$message') ";
    executeQuery($insertquery);
}
?>

<body>

    <script>
        var taboptions = document.getElementsByClassName("tab-options");
        var tabdetails = document.getElementsByClassName("tab-details");

        function opentab(tabname) {
            for (taboption of taboptions) {
                taboption.classList.remove("active-link");

            }
            for (tabdetail of tabdetails) {
                tabdetail.classList.remove("active-tab");

            }
            event.currentTarget.classList.add("active-link");
            document.getElementById(tabname).classList.add("active-tab");
        }


        const showDivs = document.getElementById("content-extension");
        const showDivs1 = document.getElementById("content-extension1");
        const showDivs2 = document.getElementById("content-extension2");
        const showDivs3 = document.getElementById("content-extension3");
        const showDivs4 = document.getElementById("content-extension4");
        const showDivs5 = document.getElementById("content-extension5");

        function seeMore() {
            if (showDivs.style.display = 'none') {
                showDivs.style.display = 'block';
            }
            if (showDivs1.style.display = 'none') {
                showDivs1.style.display = 'block';
            }
            if (showDivs2.style.display = 'none') {
                showDivs2.style.display = 'block';
            }
            if (showDivs3.style.display = 'none') {
                showDivs3.style.display = 'block';
            }
            if (showDivs4.style.display = 'none') {
                showDivs4.style.display = 'block';
            }
            if (showDivs5.style.display = 'none') {
                showDivs5.style.display = 'block';
            }

        }

        function seeLess() {
            if (showDivs.style.display != 'none') {
                showDivs.style.display = 'none';
            }
            if (showDivs1.style.display != 'none') {
                showDivs1.style.display = 'none';
            }
            if (showDivs2.style.display != 'none') {
                showDivs2.style.display = 'none';
            }
            if (showDivs3.style.display != 'none') {
                showDivs3.style.display = 'none';
            }
            if (showDivs4.style.display != 'none') {
                showDivs4.style.display = 'none';
            }
            if (showDivs5.style.display != 'none') {
                showDivs5.style.display = 'none';
            }
        }

        const seeBtn = document.getElementById("shw-btn");
        const hideBtn = document.getElementById("hd-btn");

        function changeBtn1() {
            if (seeBtn.style.display = 'block') {
                seeBtn.style.display = 'none';
                hideBtn.style.display = 'block';
            }
        }

        function changeBtn2() {
            if (hideBtn.style.display = 'block') {
                hideBtn.style.display = 'none';
                seeBtn.style.display = 'block';
            }
        }
    </script>

    <script>
        const sideMenu = document.getElementById("side-menu");

        function openMenu() {
            sideMenu.style.right = "0";
        }

        function closeMenu() {
            sideMenu.style.right = "-200px";
        }
    </script>

</body>

</html>