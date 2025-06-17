<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <div class ="container">
        <div class="card">
            <h1>Tiger</h1>
            <p>This is the desvription 1</p>
            <img src="https://static.vecteezy.com/system/resources/thumbnails/036/324/708/small/ai-generated-picture-of-a-tiger-walking-in-the-forest-photo.jpg">
        </div>
        <div class="card">
            <h1>Bird</h1>
            <p>This is the description 2</p>
            <img src="https://cdn.pixabay.com/photo/2024/05/26/10/15/bird-8788491_1280.jpg">
        </div>
        <script>
            const card = document.querySelectorAll(".card");
            card.forEach(id=>{
                id.addEventListener("click",()=>{
                    alert(id.children[1].innerText);
            })
            })
        </script>
   
</body>
</html>