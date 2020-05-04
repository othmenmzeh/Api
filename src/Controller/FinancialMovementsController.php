<?php

namespace App\Controller;

use App\Services\FinancialMovementsService;
use App\Services\WalletService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FinancialMovementsController extends AbstractController
{

    /**
     * @Route("/financialMovements", name="financialMovements")
     */
    public function index(FinancialMovementsService $financialMovementsService)
    {
        $financialMovements = $financialMovementsService->getfinancialMovements('financialMovements');


        return $this->render('financial_movements/index.html.twig', ['financialMovements' => $financialMovements["financialMovements"]]);
    }

    /**
     * @Route("/financialMovements/{id}", name="financialMovement")
     */
    public function show(FinancialMovementsService $financialMovementsService, $id)
    {
        $financialMovement = $financialMovementsService->getfinancialMovement('financialMovements', $id);

        return $this->render('financial_movements/show.html.twig', ['financialMovement' => $financialMovement["financialMovement"]]);
    }
}
