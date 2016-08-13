<?php



class PageController extends BaseController {

	public function getShowHomePage(){
		//include(__DIR__."/../views/home.php");
		$posts = Posts::all();

		echo $this->twig->render('home.html', ['posts'=>$posts]);
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