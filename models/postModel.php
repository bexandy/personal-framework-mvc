<?php

/**
*
*/
class postModel extends Model
{

  function __construct()
  {
    parent::__construct();
  }

  public function getPosts()
  {
/*
    $post =array( array(
      'id' => 1,
      'titulo' => 'Titulo Post',
      'cuerpo' => 'Cuerpo Post'
      ));
    return $post;
*/
    $post = $this->_db->query("SELECT * FROM posts");
    return $post->fetchall();
  }

  public function getPost($id)
  {
    $id = (int) $id;
    $post = $this->_db->query("SELECT * FROM posts WHERE id = $id");
    return $post->fetch();
  }


  public function insertarPost($titulo, $cuerpo, $imagen)
  {
    // $titulo y $cuerpo deben ser filtrados
    // El metodo prepare previene la inyeccion sql ya que elimina automaticamente las comillas en las consultas
    $this->_db->prepare("INSERT INTO posts VALUES (null, :titulo, :cuerpo, :imagen)")
    ->execute(
      array(
        ":titulo" => $titulo,
        ":cuerpo" => $cuerpo,
        ":imagen" => $imagen
        )
      );
  }

  public function editarPost($id, $titulo, $cuerpo)
  {
    $id = (int) $id;

    $this->_db->prepare("UPDATE posts SET titulo = :titulo, cuerpo = :cuerpo WHERE id = :id")
    ->execute(
      array(
        ":id" => $id,
        ":titulo" => $titulo,
        ":cuerpo" => $cuerpo
        )
      );
  }

  public function eliminarPost($id)
  {
    $id = (int) $id;
    $this->_db->query("DELETE FROM posts WHERE id = $id");
  }

}
?>
