<html lang="en">
<head>
    <link rel="stylesheet" href="css/fastyles.css">
</head>
<body>

    <div class="fab-container">
        <div class="fab fab-icon-holder" id="menuList">
            <img src="icons/question.svg" class="f-icons" alt="">
        </div>

        <ul class="fab-options" id="ulList">
            <li>
                <span class="fab-label">Whatsapp</span>
                <a href="https://wa.me/+2348033826713">
                <div class="fab-icon-holder">
                    <img src="icons/whatsapp.svg" class="f-icons" alt="">
                </div>
                </a>
            </li>
            <li>
                <span class="fab-label">Facebook</span>
                <a href="https://web.facebook.com/ExcellentDigitalExpress/">
                <div class="fab-icon-holder">
                    <img src="icons/facebook.svg" class="f-icons" alt="">
                </div>
                </a>
            </li>
            <li>
                <span class="fab-label">LinkedIn</span>
                <a href="https://www.linkedin.com/">
                <div class="fab-icon-holder">
                    <img src="icons/linkedin.svg" class="f-icons" alt="">
                </div>
                </a>
            </li>
            <li>
                <span class="fab-label">Instagram</span>
                <a href="https://www.instagram.com/">
                <div class="fab-icon-holder">
                    <img src="icons/instagram.svg" class="f-icons" alt="">
                </div>
                </a>
            </li>
        </ul>
    </div>

    <script src="js/jquery.min.js"></script>
    <script>
        $('#menuList').click(function() {
            $('#ulList').toggleClass("show");
        })
        
    </script>
</body>
</html>