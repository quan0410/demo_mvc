<?php
class Post
{
  public $id;
  public $title;
  public $content;

  function __construct($id, $title, $content)
  {
    $this->id = $id;
    $this->title = $title;
    $this->content = $content;
  }

  public static function show()
  {
    $list = [];
    $db = DB::getConnect();
    $req = $db->query('SELECT * FROM posts ORDER BY id DESC');
    foreach ($req->fetchAll() as $item) {
      $list[] = new Post($item['id'], $item['title'], $item['content']);
    }
    return $list;
  }
  public static function read($id)
    {
        $db = DB::getConnect();
        $req = $db->prepare('SELECT * FROM posts WHERE id = :id');
        $req->execute(array('id' => $id));
        // echo json_encode(array('id' => $id));

        $item = $req->fetch();
        if (isset($item['id'])) {
            return new Post($item['id'], $item['title'], $item['content']);
        }
        return null;
    }
    public static function create($title, $content)
    {
        $db = DB::getConnect();
        $req = $db->query("INSERT INTO posts (title, content) VALUES ('". $title . "','" . $content . "')");
        return null;
    }
    public static function delete($id)
    {
        $db = DB::getConnect();
        $req = $db->query("DELETE FROM posts WHERE id = '".$id."'");
        return null;
    }
        
}