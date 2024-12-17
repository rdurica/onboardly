<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

/**
 * HomepageController.
 *
 * @copyright Copyright (c) 2024, Robert Durica
 * @since     2024-12-16
 */
class HomepageController extends AbstractController
{
    #[Route('/')]
    public function index(): Response
    {
        return $this->render('homepage/index.html.twig');
    }
}
