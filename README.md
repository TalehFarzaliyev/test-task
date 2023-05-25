#MVC structure knowledge:
Create a very simple MVC structure by creating a bunch of files to be installed in a web root with this result:
You have to be able to browser these 3 links:
1) www.domain.it
2) www.domain.it/folder1/
3) www.domain.it/folder2/

With these contents:
1)<h1>Hi</h1><div>I'm in the homepage</div>
2)<h1>Hi</h1><div>I'm in folder1</div>
3)<h1>Hi</h1><div>I'm in folder2</div>

With these conditions:
- index.php as the only public file
- .htaccess and route.php to manage the routes
- PageController.php used as single Controller class of the 3 urls.
- view.php that contains html and contents shown above
