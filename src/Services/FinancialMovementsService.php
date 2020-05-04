<?php


namespace App\Services;


use App\Model\FinancialMovement;
use Symfony\Component\HttpClient\HttpClient;

class FinancialMovementsService extends ApiService
{

    public function getfinancialMovements($endpoint)
    {
        $header = $this->generateHeader();
        $client = HttpClient::create();
        $response = $client->request('GET', $this->generateUrl($endpoint), ['headers' => $header]);
        $object = $this->serializer->deserialize($response->getContent(), FinancialMovement::class . '[][]', 'json');
        return ($object);

    }

    public function getfinancialMovement($endpoint, $id)
    {
        $header = $this->generateHeader();
        $client = HttpClient::create();
        $response = $client->request('GET', $this->generateUrl($endpoint) . '-' . $id, ['headers' => $header]);
        $object = $this->serializer->deserialize($response->getContent(), FinancialMovement::class . '[]', 'json');
        return ($object);

    }
}