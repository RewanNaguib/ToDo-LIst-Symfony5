<?php

namespace App\Controller;

use App\Entity\Task;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TodoListController extends AbstractController
{
    /**
     * @Route("/todolist", name="getall_tasks")
     */
    public function index()
    {
        $tasks = $this->getDoctrine()->getRepository(Task::class)->findBy([],["id"=>"DESC"]);
        return $this->render('todo_list/index.html.twig',['tasks'=>$tasks]);
        
    }


    /**
     * @Route("/createtodolist", name="create_task" , methods="POST")
     */
    public function create(Request $request)
    {
      $title = trim($request->request->get("task-title"));

      if(empty($title))
        {  
            return $this->redirectToRoute('getall_tasks');
        }
 

    else 
        {
            $entityManager = $this->getDoctrine()->getManager();
            $task = new Task();
            $task->setTitle($title);
            $entityManager->persist($task);
            $entityManager->flush();
            return $this->redirectToRoute('getall_tasks');
        }
      
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
