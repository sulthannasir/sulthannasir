<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan CSS dan JavaScript</title>

<link href="style01.css" rel="stylesheet">

    <style>
        
    </style>
</head>
<body>


    <div class="rTengah">
    <div class="kartu-profile">
        <h1>Muhammad Sulthan Nasir</h1>
        <P>webprograming</p>

        <button id="btnDetail" onclick="detail()" class="btn-detail">info detail</button>
        </div>
    </div>
    <div class="rTengah">
        <div class="info-detail" id="infobox">
            <button onclick="tutupDetail()" class="btn-close">&times;</button>
        informasi detail sulthannasir
        </div>
    </div>
    <script>
        function detail(){
            //alert("informasi detail muhammad sulthan nasir");
            var info = document.getElementById("infobox");
            var btnDetail = document.getElementById("btnDetail");

            if(info.style.display === "none" || info.style.display === ""){
                info.style.display = "block";
                btnDetail.style.display = "none";
            }else{
                info.style.display = "none";
            }
        }
    </script>

</body>
</html>