<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class LuckyController extends AbstractController
{
    /**
     * @Route("/lucky/number")
     */
    public function number()
    {
        $request = Request::createFromGlobals();
        $od = $request->query->get('od');
        $do = $request->query->get('do');

        if(!$od) {
            $od = 0;
        }
        if(!$do) {
            $do = 100;
        }

        $number = \random_int($od,$do);


        return $this->render('lucky/number.html.twig',[
            'number' => $number,
            'od' => $od,
            'do' => $do,
        ]);

        return new Response(
            '<html><body>Szczęśliwy numer: '.$number.'</body></html>'
        );
    }
}
