<?php



class PageController extends BaseController {

	public function getShowHomePage()
	{
		$posts = Posts::all();
		$categories = Categories::all();
		echo $this->twig->render('home.html', ['posts'=>$posts, 'categories'=>$categories]);
	}

	public function getShowAllCategoriesPage()
	{
		$posts = Posts::all();
		$categories = Categories::all();
		echo $this->twig->render('posts.html', ['posts'=>$posts, 'categories'=>$categories]);
	}

	public function getShowPostPage() 
	{
		$uri = explode("/", $_SERVER['REQUEST_URI']);
    	$target = $uri[2];
    	$posts = Posts::where('id', '=', $target)->get();
    	$categories = Categories::all();
		echo $this->twig->render('post.html', ['posts'=>$posts, 'categories'=>$categories]);
	}

	public function getShowPostsPage() {
		$uri = explode("/", $_SERVER['REQUEST_URI']);
    	$target = $uri[2];
    	$posts = Posts::where('category', '=', $target)->get();
    	$categories = Categories::all();
		echo $this->twig->render('posts.html',['posts'=>$posts, 'categories'=>$categories]);
	}

	public function getBaseTest() 
	{ 
		$post = Posts::find(1);
		echo $post->title;
	}
}