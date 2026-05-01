<?php

interface Postable {
    public function getSummary(): string;
}

abstract class Idea implements Postable {
    
    public function __construct(protected string $title) {
        if (empty($title)) throw new Exception("Title empty!");
    }

    abstract public function getType(): string;

    public function getSummary(): string {
        return "{$this->getType()}: {$this->title}";
    }
}


class TextIdea extends Idea {
    public function getType(): string { return "Text"; }
}

class VideoIdea extends Idea {
    public function getType(): string { return "Video"; }
}


try {
    $ideas = [
        new TextIdea("Laracasts"),
        new VideoIdea("PHP")
    ];

    foreach ($ideas as $idea) {
        echo "[LOG]: Adding...<br>";
        echo $idea->getSummary() . "<br>";
    }
} catch (Exception $e) {
    echo $e->getMessage();
}