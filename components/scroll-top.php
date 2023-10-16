<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scroll-top</title>
    <!--------------------------- Remix Icon Link --------------------------->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--------------------------- CSS Link --------------------------->
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/scroll-top.css">
</head>
<body>
    <!--------------------------- scroll-top button --------------------------->
    <div class="scroll-top">
        <i class="ri-arrow-up-line"></i>
    </div>

    <!--------------------------- script --------------------------->
    <script>
        let scrollTop = document.querySelector(".scroll-top");
        let heroSection = document.querySelector(".main")
        scrollTop.addEventListener("click", function(e){
            heroSection.scrollIntoView({behavior : "smooth"})
        })
    </script>
</body>
</html>