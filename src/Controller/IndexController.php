<?php


namespace App\Controller;


use App\HystrixAppBundle\Contracts\RepositoryInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class IndexController extends AbstractController
{
    public function __construct(
        RepositoryInterface $repository
    ) { }

    public function __invoke(): Response
    {
        return new Response("hi");
    }
}