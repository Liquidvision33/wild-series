<?php

namespace App\Controller;

use App\Entity\Program;
use App\Repository\CategoryRepository;
use App\Repository\ProgramRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EpisodeController extends AbstractController
{

    #[Route('/program/{program_id}/comment/{comment_id}', name: 'program_show_comment')]
    #[Entity('program', options: ['mapping' => ['program_id' => 'id']])]
    #[Entity('comment', options: ['mapping' => ['comment_id' => 'id']])]

    public function showProgramComment(Program $program, Comment $comment): Response
    {
        return $this->render('comment.html.twig', [
            'program' => $program,
            'comment' => $comment,
        ]);
    }
}