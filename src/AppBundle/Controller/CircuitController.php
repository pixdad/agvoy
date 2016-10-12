<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Circuit;


/**
 * Circuit controller.
 */
class CircuitController extends Controller
{
    /**
     * Lists all Circuit entities.
     *
     * @Route("/circuit/", name="circuit_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $circuits = $em->getRepository('AppBundle:Circuit')->findAll();

        return $this->render('AppBundle:circuit:index.html.twig', array(
            'circuits' => $circuits,
        ));
    }

    /**
     * Finds and displays a Circuit entity.
     *
     * @Route("/circuit/{id}", name="circuit_show", requirements={
	 *              "id": "\d+"
	 *     })
     * @Method("GET")
     */
    public function showAction(Circuit $circuit)
    {
        return $this->render('AppBundle:circuit:show.html.twig', array(
            'circuit' => $circuit,
        ));
    }


    /**
     * Lists all Circuit entities.
     *
     * @Route("api/circuit/", name="circuit_index_json")
     * @Method("GET")
     */
    public function apiIndexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $circuits = $em->getRepository('AppBundle:Circuit')->findAll();

        return new JsonResponse($circuits);
    }

    /**
     * @Route("api/circuit/{id}", name="circuit_show_json", requirements={"id": "\d+"} )
     * @Method("GET")
     */
    public function apiShowAction(Circuit $circuit)
    {
        $serializer = $this->get('serializer');
        $jsonContent = $serializer->serialize($circuit, 'json');
        return new Response($jsonContent);
    }

}
