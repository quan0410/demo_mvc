<?php
require_once('controllers/base_controller.php');
require_once('models/post.php');

class PostsController extends BaseController
{
  function __construct()
  {
    $this->folder = 'posts';
  }

  public function show()
  {
    $posts = Post::show();
    $data = array('posts' => $posts);
    $this->render('show', $data);
  }
  public function read()
  {
    $post = post::read($_GET['id']);
    $data = array('posts' => $post);
    $this->render('read', $data);

  }
  public function create()
    {
        $this->render('create');
        if (isset($_POST['create'])) {
            Post::create($_POST['title'], $_POST['content']);
            echo "<script language='javascript'>alert('Thêm thành công!');window.location='index.php?controller=posts';</script>";
        } 
        elseif (isset($_POST['cancel']))
            header('Location: index.php?controller=posts');
    }
    public function delete()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $this->render('delete');
            if (isset($_POST['delete'])) {
                echo $id;
                Post::delete($id);
                echo "<script language='javascript'>alert('Xóa thành công!');window.location='index.php?controller=posts';</script>";
            } 
            elseif(isset($_POST['cancel']))
                header('Location: index.php?controller=posts');
        }
    }
   
}