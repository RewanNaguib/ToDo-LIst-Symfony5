<?php

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TodoListController extends AbstractController
{
    /**
     * @Route("/gettodolist", name="add_task")
     */
    public function index()
    {
        return $this->render('todo_list/index.html.twig');
        // exit('this get all tasks');
    }


    /**
     * @Route("/createtodolist", name="create_task" , methods="POST")
     */
    public function create()
    {
        // return $this->render('todo_list/index.html.twig');
        exit('this create new task');
    }


    /**
     * @Route("/edittodolist/{id}", name="edit_task")
     */
    public function edit($id)
    {
        // return $this->render('todo_list/index.html.twig');
        exit('this edit task' . $id);
    }



    /**
     * @Route("/deletetodolist/{id}", name="delete_task")
     */
    public function delete($id)
    {
        // return $this->render('todo_list/index.html.twig');
        exit('this delete task' .$id);
    }
}
