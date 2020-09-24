<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css"/>
</head>
<body>
    <?php
        require('header.php');
    ?>

    <div class="imgHeader">
        <img src="img/imgHeader.jpg">
    </div>

    <div class="headerCard">
        <h1>Titulo Titulo</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Nulla quo nostrum non enim qui mollitia odit error repellendus</p>
    </div>
    <div class="allCards">
        <div class="card">
            <img src="img/i1.png" alt="Avatar" >
            <div class="container">
                <h4><b>Backup</b></h4> 
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui amet iusto molestiae, sit</p> 
            </div>
        </div>
        <div class="card">
            <img src="img/i2.png" alt="Avatar" ">
            <div class="container">
                <h4><b>Reparo em Computador</b></h4> 
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui amet iusto molestiae, sit</p> 
            </div>
        </div>
        <div class="card">
            <img src="img/i3.png" alt="Avatar">
            
                <h4><b>Reparo em Celular</b></h4> 
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui amet iusto molestiae, sit</p> 
            
        </div>
        <div class="card">
            <img src="img/i4.png" alt="Avatar" >
            <div class="container">
                <h4><b>Soluções de Rede</b></h4> 
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui amet iusto molestiae, sit </p> 
            </div>
        </div>
    </div>

    <div class="allJumbotron">
        <section class="sectionLeft">
            <h2>Titulo Titulo</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam cumque dicta, eveniet maxime repellat, asperiores molestias, natus perferendis fugiat aut ipsum dignissimos saepe eos odit aliquid ab mollitia fugit! Nulla.</p>
            <ol>
                <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia velit</li>
                <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia velit</li>
                <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia velit</li>
            </ol>
        </section>
        <section class="sectionRight">
            <img src="img/imgJumbotron.jpg">
        </section>
    </div>

    <div class="headerCard">
        <h1>Titulo Titulo</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Nulla quo nostrum non enim qui mollitia odit error repellendus</p>
    </div>
    <div class="allCardsStaff">
        <div class="cardStaff">
            <img src="img/imgPerfil1.png" alt="imagem Staff" style="width:100%">
            <h3>Nome do Sujeito</h3>
            <p class="title">CEO</p>
            <p>Fatec São Paulo</p>
            <p><button>Contact</button></p>
        </div>
        <div class="cardStaff">
            <img src="img/imgPerfil2.png" alt="imagem Staff" style="width:100%">
            <h3>Nome do Sujeito</h3>
            <p class="title">Desenvolvedora</p>
            <p>Fatec São Paulo</p>
            <p><button>Contact</button></p>
        </div>
        <div class="cardStaff">
            <img src="img/imgPerfil1.png" alt="imagem Staff" style="width:100%">
            <h3>Nome do Sujeito</h3>
            <p class="title">CEO</p>
            <p>Fatec São Paulo</p>
            <p><button>Contact</button></p>
        </div>
        <div class="cardStaff">
            <img src="img/imgPerfil2.png" alt="imagem Staff" style="width:100%">
            <h3>Nome do Sujeito</h3>
            <p class="title">Desenvolvedora</p>
            <p>Fatec São Paulo</p>
            <p><button>Contact</button></p>
        </div>
    </div>

    
    <?php
        require('footer.php');
    ?>

    
</body>
</html>