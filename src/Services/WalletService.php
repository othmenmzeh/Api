<?php


namespace App\Services;


use App\Model\Wallet;
use Symfony\Component\HttpClient\HttpClient;

class WalletService extends ApiService
{

    public function getWallets($endpoint)
    {
        $header = $this->generateHeader();
        $client = HttpClient::create();
        $response = $client->request('GET', $this->generateUrl($endpoint), ['headers' => $header]);
        $object = $this->serializer->deserialize($response->getContent(), Wallet::class . '[][]', 'json');
        return ($object);

    }

    public function getWallet($endpoint, $id)
    {
        $header = $this->generateHeader();
        $client = HttpClient::create();
        $response = $client->request('GET', $this->generateUrl($endpoint) . '-' . $id, ['headers' => $header]);
        $object = $this->serializer->deserialize($response->getContent(), Wallet::class . '[]', 'json');
        return ($object);
    }

}