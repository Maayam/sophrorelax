<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Page;
use AppBundle\Form\PageType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class PageController extends Controller
{
    /**
     * @Route("/list")
     */
    public function listAction()
    {
    	$pageList = $this->findPages();

        return $this->render('admin/listPage.html.twig', array(
        	"pages" => $pageList
        ));
    }

    /**
     * @Route("/add")
     */
    public function addAction(Request $request)
    {
    	$isAdmin = true;

    	if($isAdmin){
	        $page = new Page();

	        //build the form
	        $form = $this->createFormBuilder($page)
		        ->add('name', TextType::class )
		        ->add('weight', NumberType::class )
		        ->add('content', TextareaType::class )
	            ->add('save', SubmitType::class, array('label' => 'Enregistrer la Page'))
	            ->getForm();

	        //handling the submit request
		    $form->handleRequest($request);

		    if ($form->isSubmitted() && $form->isValid()) {
		        // $form->getData() holds the submitted values
		        // but, the original `$page` variable has also been updated

		        $page = $form->getData();

		        // ... perform some action, such as saving the page to the database
		        // for example, if Plot is a Doctrine entity, save it!
		        $em = $this->getDoctrine()->getManager();
		        $em->persist($page);
		        $em->flush(); //just like in debug_testCreateAction
		        
		        return $this->redirect("/list");
		    } //end if fom submited
		    else{
		        return $this->render('admin/addPage.html.twig', array(
		            'form' => $form->createView(),
				));
		    }
    	} //end if Admin
    } //end addAction

    /**
     * @Route("/edit/{pageId}", defaults={"pageId" = false})
     */
    public function editAction($pageId, Request $request)
    {

    	$page = $this->getDoctrine()
        ->getRepository('AppBundle:Page')
        ->find($pageId);

    	$isAdmin = true;

    	if($isAdmin){

	        //build the form
	        $form = $this->createFormBuilder($page)
		        ->add('name', TextType::class )
		        ->add('weight', NumberType::class )
		        ->add('content', TextareaType::class )
	            ->add('save', SubmitType::class, array('label' => 'Enregistrer la Page'))
	            ->getForm();

	        //handling the submit request
		    $form->handleRequest($request);
		    if ($form->isSubmitted() && $form->isValid()) {
		        // $form->getData() holds the submitted values
		        // but, the original `$page` variable has also been updated

		        $page = $form->getData();

		        // ... perform some action, such as saving the page to the database
		        // for example, if Plot is a Doctrine entity, save it!
			    $em = $this->getDoctrine()->getManager();
			    $em->flush();
		        
		        return $this->redirect("/list");
		    } //end if fom submited
		    else{
		        return $this->render('admin/editPage.html.twig', array(
		            'form' => $form->createView(),
				));
		    }
    	} //end if Admin


    	if($pageId == false){
    		return $this->render("page/error.html.twig", array("message" => "Erreur, cette page n'éxiste pas"));
    	}
    	else{
		    $em = $this->getDoctrine()->getManager();
		    $page = $em->getRepository('AppBundle:Page')->find($pageId);

		    if (!$page) {
		        throw $this->createNotFoundException(
		            'No product found for id '.$pageId
		        );
		    }

		    $page->setName('New product name!');
		    $em->flush();
	        return $this->render('admin/editPage.html.twig', array(
	        	"page" => $page
	        ));
    	}

    }

     /**
     * @Route("/delete/{pageId}", defaults={"pageId" = false})
     */
    public function deleteAction($pageId)
    {
    	if($pageId == false){
    		return $this->render("page/error.html.twig", array("message" => "Erreur, cette page n'éxiste pas"));
    	}
    	else{
    		$page = $this->deletePage($pageId);

    		$this->addFlash(
	            'notice',
	            'Your page was deleted.'
        	);

	        return $this->redirect("/list");
    	}
    }


    /**
     * @Route("/{name}", defaults={"name" = false})
     */
    public function landAction($name)
    {

    	$menuItems = $this->findPageList();

    	if($name == false){
    		$name = $menuItems[0]['name'];
    	}

    	$page = $this->findPageByName($name);
    	// return new JsonResponse($page['photoUrl']);
    	$content = htmlspecialchars_decode($page['content']);

    	$data =  array(
	        	"name" => $name,
	        	"menuItems" => $menuItems,
	        	"content" => $content,
	        	"photoUrl" => $page['photoUrl']
	        );

    	if( $name == "Contact"){
	        return $this->render('page/contact.html.twig', $data);
    	}

        return $this->render('base.html.twig', $data);
    }

	private function findpage($id) {
	//returns all plots which match with a name
		$em = $this->getDoctrine()->getManager();

		$query = $em->createQuery(
			'SELECT page.id, page.name, page.content
			FROM AppBundle\Entity\Page page
			WHERE page.id = :id'
		)->setParameters(array('id' => $id));

		$page = $query->getResult();
		return $page[0];
	}

	private function findPages() {
	//returns all plots which match with a name
		$em = $this->getDoctrine()->getManager();

		$query = $em->createQuery(
			'SELECT page.id, page.name, page.content, page.weight
			FROM AppBundle\Entity\Page page
			ORDER BY page.weight'
		);

		$pages = $query->getResult();
		return $pages;
	}

	private function findPageList() {
	//returns all plots which match with a name
		$em = $this->getDoctrine()->getManager();

		$query = $em->createQuery(
			'SELECT page.name
			FROM AppBundle\Entity\Page page
			ORDER BY page.weight'
		);

		$pages = $query->getResult();
		return $pages;
	}

	private function findPageByName($name) {
	//returns all plots which match with a name
		$em = $this->getDoctrine()->getManager();

		$query = $em->createQuery(
			'SELECT page.name, page.content, page.photoUrl
			FROM AppBundle\Entity\Page page
			WHERE page.name = :name'
		)->setParameters(array('name' => $name));;

		$content = $query->getResult();
		return $content[0];
	}

	private function deletePage($id) {
	//returns all plots which match with a name
		$em = $this->getDoctrine()->getManager();

		$query = $em->createQuery(
			'DELETE AppBundle\Entity\Page page
			WHERE page.id = :id'
		)->setParameters(array('id' => $id));

		$page = $query->getResult();
		return $page;
	}
}
