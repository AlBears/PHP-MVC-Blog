<?php



class PageController extends BaseController {

	public function getShowHomePage(){
		//include(__DIR__."/../views/home.php");
		echo $this->twig->render('home.html');
	}
	public function getShowPostPage() {
		echo $this->twig->render('post.html');
	}
	public function getShowPostsPage() {
		echo $this->twig->render('posts.html');
	}
	public function getBaseTest() 
	{ 
		try { 
		$conn = new PDO("mysql:host=localhost; dbname=blog", "root", "root");
	} catch (PDOException $pe){
		die("Connection error: ".$pe->getMessage());
	}
		echo "It works";
	}
}