<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TodoListController extends AbstractController
{
    /**
     * @Route("/todolist", name="todo_list")
     */
    public function index(): Response
    {
        return $this->render('todo_list/index.html.twig');
    }
}
