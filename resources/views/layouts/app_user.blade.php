<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>E-book Download</title>
        
        <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://flowbite-admin-dashboard.vercel.app//app.css">
        <meta name="theme-color" content="#ffffff">

        <script>
            function generateCaptcha() {
                let captcha = Math.random().toString(36).substring(2, 8).toUpperCase();
                document.getElementById("captchaText").innerText = captcha;
                document.getElementById("captchaText").setAttribute("data-captcha", captcha);
            }

            function validateCode(event) {
                event.preventDefault();

                const captchaInput = document.getElementById("captchaInput").value;
                const captchaCorrect = document.getElementById("captchaText").getAttribute("data-captcha");
                const resultMessage = document.getElementById("resultMessage");
                const submitButton = document.getElementById("submitButton");
                
                if (captchaInput === "") {
                    resultMessage.innerText = "Please enter the captcha";
                    resultMessage.style.color = "orange";
                    submitButton.disabled = true;  
                } else if (captchaInput !== captchaCorrect) {
                    resultMessage.innerText = "Sorry, you input the wrong captcha";
                    resultMessage.style.color = "red";
                    submitButton.disabled = true;
                    generateCaptcha();
                } else {
                    resultMessage.innerText = "Good Job!  Click the button to get the e-book";
                    resultMessage.style.color = "green";
                    submitButton.disabled = false;
                }
                
            }
            
            window.onload = generateCaptcha;
        </script>
        
    </head>
    <body>
        @yield('main')

    
        <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    
</html>