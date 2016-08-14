<?php



class PageController extends BaseController {

	public function getShowHomePage()
	{
		$posts = Posts::all();
		$categories = Categories::all();
		echo $this->twig->render('home.html', ['posts'=>$posts, 'categories'=>$categories]);
	}

	public function getShowPostPage() {
		echo $this->twig->render('post.html');
	}

	public function getShowPostsPage() {
		echo $this->twig->render('posts.html');
	}

	public function getBaseTest() 
	{ 
		$post = Posts::find(1);
		echo $post->title;
	}
}