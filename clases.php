<?php

class Post
{
    private string $title;
    private string $content;
    private $tags;
    private int $likes;
    public function __construct(string $title, string $content, int $likes, $tags = [])
    {
        $this->title = $title;
        $this->content = $content;
        $this->likes = $likes;
        $this->tags = $tags;
    }
    public function getTitle(): string
    {
        return $this->title;
    }
    public function getContent(): string
    {
        return $this->content;
    }
    public function getTags(): array
    {
        return $this->tags;
    }
    public function getLikes(): int
    {
        return $this->likes;
    }

}
class Tag
{
    private string $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    public function getName(): string
    {
        return $this->name;
    }

}
function obtenerPosts()
{
    $post = [new Post("Titulo del primer post", "Este es el comentario del primer post", 10, [new Tag("#Tecnologia"), new Tag("#Programacion"), new Tag("#HTML")]), new Post("Titulo del segundo post", "Este es el comentario del segundo post", 5, [new Tag("#Viajes"), new Tag("#Aventura"), new Tag("#Fotografia")]), new Post("Titulo del tercer post", "Este es el comentario del tercer post", 3, [new Tag("#Salud"), new Tag("#Bienestar"), new Tag("#Estilo de vida")])];

    return $post;
}

