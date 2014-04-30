<?php

namespace VieilleSardine\CommandeBundle\Controller;

use VieilleSardine\CommandeBundle\Entity\Lignes;
use VieilleSardine\ProduitBundle\Entity\Produit;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CommandeController extends Controller
{
     public function indexAction()
    {
        return $this->render('VieilleSardineCommandeBundle:Commande:IHMCommandeVPC.html.twig');
    }
    
    // Méthode qui créer le formulaire utilisé pour ajouter un produit à la commande
    public function CreerFormVPCAction(Request $request)
    {
      
        $UneLigne = new Lignes();
        $form = $this->createFormBuilder($UneLigne)
            ->add('idProduit', 'text')
            ->add('quantite', 'number')
            ->add('Ajouter', 'submit')
            ->getForm();
        
         $form->handleRequest($request);

        return $this->render('VieilleSardineCommandeBundle:Commande:IHMCommandeVPC.html.twig', array('form' => 
            $form->createView(),
        ));
            
        
    }

    public function menuVPC(){
        return $this->render('VieilleSardineCommandeBundle:Commande:IHMserviceVPC.html.twig'); //afficher la vue
    }

     public function infoCommandeSimpleAction(){
       $repo = $this->getDoctrine()->getManager()->getRepository("VeilleSardineUserBundle:Client");
       $clients = $repo->findAll();
       var_dump($clients);
        return $this->render('VieilleSardineCommandeBundle:Commande:IHMinfosCommandeSimple.html.twig', array('resultat' => $toto));
    }

     public function confirmationCommandeAction(){
        return $this->render('VieilleSardineCommandeBundle:Commande:IHMconfirmationCommande.html.twig');
    }
    
    public function getInfoClient(){
        
    }


    // Méthode pour retrouver les attributs d'un produit
    public function getInfoProduitAction($id)
    {
    $produit = $this->getDoctrine()
        ->getRepository('ProduitBundle:Produit')
        ->find($id);

    if (!$produit) {
        throw $this->createNotFoundException(
            'Aucun produit trouvé pour cet id : '.$id
        );
    }

    
}
}
