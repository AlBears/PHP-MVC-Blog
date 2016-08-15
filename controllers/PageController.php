<?php



class PageController extends BaseController {

	public function route()
	{
		$posts = Posts::all();
		$categories = Categories::all();
		echo $this->twig->render('home.html', ['posts'=>$posts, 'categories'=>$categories]);
	}

	public function oneLevelRouting()
	{
		$uri = explode("/", $_SERVER['REQUEST_URI']);
		$route = $uri[1];
		$posts = Posts::all();
		$categories = Categories::all();
		if ($route === 'posts') { 
			echo $this->twig->render('posts.html', ['posts'=>$posts, 'categories'=>$categories]);
		} else if ($route === 'admin') {
			$categorizedPosts = Posts::join('categories', 'posts.category', '=','categories.id')
									->select('posts.*', 'categories.name')
									->get();
			echo $this->twig->render('admin/home.html', ['posts'=>$categorizedPosts, 'categories'=>$categories]);
		} else {
			echo $this->twig->render('generic.html', ['categories'=>$categories]);
		}
	}

	public function twoLevelsRouting() 
	{
		$uri = explode("/", $_SERVER['REQUEST_URI']);
		$route = $uri[1];
		$target = $uri[2];
		$categories = Categories::all();
		if ($route === 'post') { 
    		$posts = Posts::where('id', '=', $target)->get();
			echo $this->twig->render('post.html', ['posts'=>$posts, 'categories'=>$categories]);
		} else if ($route === 'category') {
			$posts = Posts::where('category', '=', $target)->get();
			echo $this->twig->render('posts.html',['posts'=>$posts, 'categories'=>$categories]);
		} else {
			echo $this->twig->render('generic.html', ['categories'=>$categories]);
		}
	}

}