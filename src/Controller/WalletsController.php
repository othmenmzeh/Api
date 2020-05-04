<?php

namespace App\Controller;

use App\Services\WalletService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class WalletsController extends AbstractController
{
    /**
     * @Route("/", name="wallets")
     */
    public function index(WalletService $walletsService)
    {
        $wallets = $walletsService->getWallets('wallets');
        return $this->render('wallets/index.html.twig', ['wallets' => $wallets["wallets"]]);
    }

    /**
     * @Route("/wallets/{id}", name="wallet")
     */
    public function show(WalletService $walletsService, $id)
    {
        $wallet = $walletsService->getWallet('wallets', $id);
        return $this->render('wallets/show.html.twig', ['wallet' => $wallet['wallet']]);
    }
}
