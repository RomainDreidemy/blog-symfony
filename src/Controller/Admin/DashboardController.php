<?php

namespace App\Controller\Admin;

use App\Entity\Picture;
use App\Entity\Post;
use App\Entity\Tag;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
         $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
         return $this->redirect($adminUrlGenerator->setController(PostCrudController::class)->generateUrl());
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Romain Dreidemy');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToCrud('Articles', 'fas fa-newspaper', Post::class);
        yield MenuItem::linkToCrud('Étiquettes', 'fas fa-tags', Tag::class);
        yield MenuItem::linkToCrud('Images', 'fas fa-images', Picture::class);
    }
}
