<?php
/**
 * Created by PhpStorm.
 * User: шипиловд
 * Date: 20.02.2020
 * Time: 16:08
 */

namespace Controllers;


use Core\_Abstracts\Controller;
use Core\_Interfaces\ControllerInterface;
use Klein\Request;
use Klein\Response;
use Models\Posts;

class PostsController extends Controller
{
    function index(){
        $posts = Posts::select('*');

        return $this->render('index',[
            'posts' => $posts,
            'title' => 'Main'
        ]);
    }

    public function view(Request $request, Response $response){
       $post = Posts::get("*", [
           'id' => $request->param('id')
       ]);

        if($post === null)
            return $response->code(404);

        $this->render('post', [
           'post' => $post
        ]);
    }

    public function create(){
        $this->render('form', [
            'title' => 'Create new post'
        ]);
    }

    public function insert(Request $request, Response $response){
        $title = $request->param('title');
        $content = $request->param('content');

        $res = Posts::insert([
            'title' => $title,
            'content' => $content
        ]);

        if($res === false){
            throw new \Exception('Post error');
        }

        return $response->redirect('/');
    }

    public function update(Request $request, Response $response){

        $post = Posts::get('*',[
            'id' => $request->param('id')
        ]);

        if(!$post) return $response->code(404);

        $this->render('form', [
            'title' => 'update',
            'post' => $post,
            'action' => 'update'
        ]);
    }

    public function edit(Request $request, Response $response){
        $id = $request->param('id');
        $res = Posts::update([
            'title' =>$request->param('title'),
            'content' =>$request->param('content')
        ], [
            'id' => $id
        ]);

        if($res === false){
            throw new \Exception('Post error');
        }

        return $response->redirect("/post?id=$id");
    }

    public function delete(Request $request, Response $response){
        $res = Posts::delete([
            'id' =>$request->param('id')
        ]);

        if($res === false){
            throw new \Exception('Delete error');
        }

        return $response->redirect("/");
    }
}