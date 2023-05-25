<?php

require_once 'models/PageModel.php';

class PageController
{
    public function home() {
        $model = new PageModel();
        $content = $model->getContent('homepage');
        require_once 'views/view.php';
    }

    public function folder1() {
        $model = new PageModel();
        $content = $model->getContent('folder1');
        require_once 'views/view.php';
    }

    public function folder2() {
        $model = new PageModel();
        $content = $model->getContent('folder2');
        require_once 'views/view.php';
    }
}