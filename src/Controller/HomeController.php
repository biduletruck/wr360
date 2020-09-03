<?php

namespace App\Controller;

use App\Entity\Order;
use App\Entity\User;
use PhpOffice\PhpSpreadsheet\Reader\BaseReader;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use PhpOffice\PhpSpreadsheet\Reader\Csv as ReaderCsv;
use PhpOffice\PhpSpreadsheet\Reader\Ods as ReaderOds;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx as ReaderXlsx;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index()
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/addwr", name="add_wr")
     */
    public function addConseillers()
    {

        $reader = new ReaderXlsx();
        $em = $this->getDoctrine()->getManager();

        $spreadsheet = $reader->load('wr360.xlsx');
        $sheetData = $spreadsheet->getActiveSheet()->toArray();

        if (!empty($sheetData)) {
            for ($i=1; $i<count($sheetData); $i++) {

                $order = new Order();
                $order
                    ->setOrderNumber($sheetData[$i][0])
                    ->setDeviationType($sheetData[$i][1])
                    ->setReasonCode($sheetData[$i][2])
                    ->setCreationDate(new \DateTime($sheetData[$i][3]))
                    ->setModificationDate(new \DateTime($sheetData[$i][4]))
                    ->setDeviationDate(new \DateTime($sheetData[$i][5]))
                    ->setStore($sheetData[$i][6])
                    ->setCountry($sheetData[$i][7])
                    ->setUserId($sheetData[$i][8])
                    ->setOrderType($sheetData[$i][9])
                ;
//                dd($order);
                $em->persist($order);
            }
        }
        $em->flush();
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
