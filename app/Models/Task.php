<?php

namespace Models;

use DB;

class Task
{
    public $id;

    public $user;

    public $email;

    public $text;

    public $image;

    public function __construct($id, $user, $email, $text, $image)
    {
        $this->id = $id;
        $this->user = $user;
        $this->email = $email;
        $this->text = $text;
        $this->image = $image;
    }

    public static function all()
    {
        $db = DB::getInstance();

        $array = [];

        $req = $db->query('SELECT * FROM posts');

        foreach($req->fetchAll() as $task) {
            $array[] = new Task($task['id'], $task['user'], $task['email'], $task['text'], $task['image']);
        }

        return $array;
    }

    public static function find($id)
    {
        $db = DB::getInstance();

        $id = intval($id);

        $req = $db->prepare('SELECT * FROM tasks WHERE id = :id');

        $req->execute(array('id' => $id));
        $task = $req->fetch();

        return new Task($task['id'], $task['user'], $task['email'], $task['text'], $task['image']);
    }

}