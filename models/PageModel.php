<?php

class PageModel
{
    public function getContent($page) {
        $content = '';

        if ($page === 'homepage') {
            $content = "<h1>Hi</h1><div>I'm in the homepage</div>";
        } elseif ($page === 'folder1') {
            $content = "<h1>Hi</h1><div>I'm in folder1</div>";
        } elseif ($page === 'folder2') {
            $content = "<h1>Hi</h1><div>I'm in folder2</div>";
        }

        return $content;
    }
}