<?php
 namespace Composer\BuscadorHttp;

//  use GuzzleHttp\ClientInterface;
//  use Symfony\Component\DomCrawler\Crawler;
 
    class Conversor{
        
        private static $url = "http://economia.awesomeapi.com.br/json/last/USD-BRL"; 
        
        public function __construct(){
            
        }
        
        public function verificarAcesso(){
            // $client = new GuzzleHttp\Client();
            // $resposta = $client->request('GET',self::$url);
            $resposta = "Testando a classe";
            print($resposta);
        }
        
        public function mostrarValor($moeda){
            // $client = new GuzzleHttp\Client();
            // $resposta = $client->request('GET',$url);
        }

        public function ConverterValor($moeda,$valor){

        }

    }
?>