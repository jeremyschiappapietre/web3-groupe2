<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


use InfluxDB2\Client;
use InfluxDB2\Model\WritePrecision;
use InfluxDB2\Point;

class ClientController extends AbstractController
{
    /**
     * @Route("/temperature", name="temperature" , methods={"GET"})
     */
    public function getTemperature(): Response
    {
        $token = 'zX7HbmL8SOMyLsbNoBLCXReGPwDiezJupCDwsgXiJAnoO3h3TLnCRY4A0ycmd9xg1e7g_Dx7Pl_EFoUjMZg05A==';
        $org = 'carlo.berni@hetic.net';
        $bucket = 'mqtt';

        $client = new Client([
            "url" => "https://eu-central-1-1.aws.cloud2.influxdata.com",
            "token" => $token,
            "bucket" => $bucket,
        ]);
        
        $query = "from(bucket: \"mqtt\") |> range(start: -1h)|> filter(fn: (r) => r[\"_measurement\"] == \"Température\")
        |> filter(fn: (r) => r[\"_field\"] == \"data_value\")
        |> yield(name: \"mean\")";
        $tables = $client->createQueryApi()->query($query, $org);
            //  dump($tables);
        
        return $this->json($tables);
        // return $this->render('base.html.twig', [
        //     'tables' => $tables,
        // ]);


    }

    /**
     * @Route("/humidity", name="humidity" , methods={"GET"})
     */
    public function getHumidity(): Response
    {
        $token = 'zX7HbmL8SOMyLsbNoBLCXReGPwDiezJupCDwsgXiJAnoO3h3TLnCRY4A0ycmd9xg1e7g_Dx7Pl_EFoUjMZg05A==';
        $org = 'carlo.berni@hetic.net';
        $bucket = 'mqtt';

        $client = new Client([
            "url" => "https://eu-central-1-1.aws.cloud2.influxdata.com",
            "token" => $token,
            "bucket" => $bucket,
        ]);
        
        $query = "from(bucket: \"mqtt\") |> range(start: -1h)|> filter(fn: (r) => r[\"_measurement\"] == \"Humidité\")
        |> filter(fn: (r) => r[\"_field\"] == \"data_value\")
        |> yield(name: \"mean\")";
        $tables = $client->createQueryApi()->query($query, $org);
            //  dump($tables);
        
        return $this->json($tables);
        // return $this->render('base.html.twig', [
        //     'tables' => $tables,
        // ]);


    }

    /**
     * @Route("/brightness", name="brightness" , methods={"GET"})
     */
    public function getBrightness(): Response
    {
        $token = 'zX7HbmL8SOMyLsbNoBLCXReGPwDiezJupCDwsgXiJAnoO3h3TLnCRY4A0ycmd9xg1e7g_Dx7Pl_EFoUjMZg05A==';
        $org = 'carlo.berni@hetic.net';
        $bucket = 'mqtt';

        $client = new Client([
            "url" => "https://eu-central-1-1.aws.cloud2.influxdata.com",
            "token" => $token,
            "bucket" => $bucket,
        ]);
        
        $query = "from(bucket: \"mqtt\") |> range(start: -1h)|> filter(fn: (r) => r[\"_measurement\"] == \"Luminosité\")
        |> filter(fn: (r) => r[\"_field\"] == \"data_value\")
        |> yield(name: \"mean\")";
        $tables = $client->createQueryApi()->query($query, $org);
            //  dump($tables);
        
        return $this->json($tables);
        // return $this->render('base.html.twig', [
        //     'tables' => $tables,
        // ]);


    }
}
