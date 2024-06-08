<?php
// Interfaces
/*
An interface is a blueprint for a class that defines a set of methods that the implementing class must provide. Interfaces allow you to specify what methods a class should implement without dictating how these methods should be implemented. This provides a way to achieve abstraction and ensures that different classes can adhere to a certain contract, promoting a consistent API.
*/

// interface
interface ContentInterface
{
    public function display();

    public function edit();
}

// implementation of the interface
class Article implements ContentInterface
{
    private $title;
    private $content;

    public function __construct($title, $content)
    {
        $this->title = $title;
        $this->content = $content;
    }

    public function display()
    {
        echo "<h2>{$this->title}</h2>";
        echo "<p>{$this->title}</p>";
    }

    public function edit()
    {
        echo "Editing the article '{$this->title}'";
    }
}

class Video implements ContentInterface
{
    private $title;
    private $url;

    public function __construct($title, $url)
    {
        $this->title = $title;
        $this->url = $url;
    }

    public function display()
    {
        echo "<h2>{$this->title}</h2>";
        echo "<iframe src='{$this->url}'></iframe>";
    }

    public function edit()
    {
        echo "Editing the video '{$this->title}'";
    }
}

$article = new Article('Hello from Article', 'Some dummy text');
$article->display();
$article->edit();

echo '<hr>';

$video = new Video('Hello from Video', 'https://youtu.be/s2SBaMKlX9I?si=b1ugc__W0RvYRuVD');
$video->display();
$video->edit();
