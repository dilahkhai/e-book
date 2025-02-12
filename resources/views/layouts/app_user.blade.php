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

            function validateCode() {
                const validCode = "12345";
                const inputCode = document.getElementById("codeInput").value;
                const captchaInput = document.getElementById("captchaInput").value;
                const captchaCorrect = document.getElementById("captchaText").getAttribute("data-captcha");
                
                if (inputCode !== validCode) {
                    alert("Please insert the valid code");
                    return;
                }
                if (captchaInput !== captchaCorrect) {
                    alert("Captcha salah, coba lagi");
                    generateCaptcha();
                    return;
                }
                
                document.getElementById("downloadSection").style.display = "block";
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