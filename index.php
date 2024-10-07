<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Red Social</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <header>
        <h1>Mi Blog</h1>
    </header>
        <aside>
            <nav>
                <a href="">Inicio</a>
                <a href="">Sobre mi</a>
                <a href="">Blog</a>
                <a href="">Contacto</a>
            </nav>
        </aside>

    <main>
        <section>

            <?php 
                require_once ("clases.php");
                $listar = obtenerPosts();                
                foreach($listar as $post) {
                    echo "<article>";
                    echo "<h2>{$post->getTitle()}</h2>";
                    echo "<p>{$post->getContent()}</p>";
                    echo "<span class='negrita'>Tags:</span>";
                    foreach($post->getTags() as $tag) {
                        echo "<span class='fondotag'>{$tag->getName()}  </span>";
                    }
                    echo "<p class='negrita'>Likes: {$post->getLikes()}  Me gusta</p>";
                    echo "</article>";

                }


            
            ?>

        </section>
    </main>

</body>

</html>