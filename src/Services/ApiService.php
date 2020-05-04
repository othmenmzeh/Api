<?php


namespace App\Services;


use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;

class ApiService
{
    private $params;

    /**
     * @var Serializer
     */
    protected $serializer;

    /**
     * @required
     * @param SerializerInterface $serializer
     */
    public function setSerializer(SerializerInterface $serializer): void
    {
        $this->serializer = $serializer;
    }

    /**
     * @required
     * @param ParameterBagInterface $parameterBag
     */
    public function setParameterBag(ParameterBagInterface $parameterBag): void
    {
        $this->params = $parameterBag;
    }

    /**
     * @return array
     * function used to generate header
     */
    public function generateHeader()
    {
        $username = $this->params->get('authApi')['login'];            // The username used to authenticate
        $password = $this->params->get('authApi')['pass'];                // The password used to authenticate
        $nonce = "";                    // The nonce
        $chars = "012345678912AAAA";
        for ($i = 0; $i < 32; $i++) {
            $nonce .= $chars[rand(0, 15)];
        }
        $nonce64 = base64_encode($nonce);
        $date = gmdate('c');
        $date = substr($date, 0, 19) . "Z";
        $digest = base64_encode(sha1($nonce . $date . $password, true));

        return [sprintf('X-WSSE:UsernameToken Username="%s", PasswordDigest="%s", Nonce="%s", Created="%s"', $username, $digest, $nonce64, $date)];
    }

    /**
     * @return string
     * function used to generate Url with endpoint
     */
    public function generateUrl($endpoint)
    {
        return $url = $this->params->get('authApi')['url'] . '/' . $endpoint . '/';
    }


}