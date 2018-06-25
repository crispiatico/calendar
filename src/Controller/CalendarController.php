<?php
namespace App\Controller;
use App\Entity\Evento;
use App\Entity\Teacher;
use App\Entity\Topic;
use App\Entity\Type;
use App\Entity\Place;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;



class CalendarController extends Controller
{
    public function index(
      $header = 1,
      $topic1 = "",
      $topic2 = "",
      $place1 = "",
      $place2 = "",
      $teacher = "",
      $weight = "",
      $type = "",
      Request $request)
    {
//      $header = 1; // show form information*/
      /***  teacher  ***/
      $teacherall = $this->getDoctrine()
        ->getRepository(Teacher::class)
        ->findAll();
      foreach ($teacherall as $singleteacher) {
        $id = $singleteacher->getId();
        $teacherselect[''] = "";
        if($singleteacher->getActive()) {$teacherselect[$singleteacher->getName()] = $id;}
      }
      /***  place  ***/
      $placeall = $this->getDoctrine()
          ->getRepository(Place::class)
          ->findAll();
      foreach ($placeall as $singleplace) {
        $id = $singleplace->getId();
        $placeselect[''] = "";
        if($singleplace->getActive()) {
          $placename = $singleplace->getName()." [".$singleplace->getCountry()."]";
          $placeselect[$placename] = $id;
        }
      }
      /***  topic  ****/
      $topicall = $this->getDoctrine()
        ->getRepository(Topic::class)
        ->findAll();
      foreach ($topicall as $singletopic) {
        $id = $singletopic->getId();
        $topicselect[''] = "";
        if($singletopic->getActive()) {$topicselect[$singletopic->getName()] = $id;}
      }
      /***  coursetype  ****/
      $coursetypeall = $this->getDoctrine()
        ->getRepository(Type::class)
        ->findAll();
      foreach ($coursetypeall as $singlecoursetype) {
        $id = $singlecoursetype->getId();
        $coursetypeselect[''] = "";
        $coursetypeselect[$singlecoursetype->getCoursetype()] = $id;
      }
      /***  type  ****/
      $typeall = $this->getDoctrine()
          ->getRepository(Type::class)
          ->findAll();
      foreach ($typeall as $singletype) {
        $id = $singletype->getId();
        $typeselect[''] = "";
        $typeselect[$singletype->getCoursetype()] = $id;
      }
      $date = date('Y,m,d');
      $form = $this->createFormBuilder()
        ->add('argomento', ChoiceType::class, array('choices' => $topicselect, 'required'   => false,))
        ->add('tipo', ChoiceType::class, array('choices' => $typeselect, 'required'   => false,))
        ->add('citta', ChoiceType::class, array('choices' => $placeselect, 'required'   => false, 'label' => "Città",))
        ->add('maestro', ChoiceType::class, array('choices' => $teacherselect, 'required'   => false,))
        ->add('cerca', SubmitType::class)
        ->getForm();
      $form->handleRequest($request);
/*
a	first topic
a1	second argument (optional)
l	place where the course takes place
l2	second place where the course takes place (optional)
m	teacher
p	weight
t	type
/[topic1]/[topic2]/[place1]/[place2]/[teacher]/[weight]/[type]/
*/
      if ($header == 0) {
        $parametri = array(
          'argomento' => $topic1,
          'argomento2' => $topic2,
          'tipo' => "",
          'citta' => $place1,
          'citta2' => $place2,
          'maestro' => $teacher,
          'peso' => $weight,
          'tipo' => $type,
        );
        /*
        echo "<h1>qui</h1>";
        print_r($parametri);
        */
        $event = $this->getDoctrine()
          ->getRepository(Evento::class)
          ->findByDateAndSearch($date, $parametri);
      } elseif ($form->isSubmitted()) {
        $ricevuto = $form->getData();
        /*
        print_r($ricevuto);
        */
        $event = $this->getDoctrine()
          ->getRepository(Evento::class)
          ->findByDateAndSearch($date, $ricevuto);
      } else {
        $event = $this->getDoctrine()
          ->getRepository(Evento::class)
          ->findByDate($date);
/*          ->findAll(); */
      }
      foreach ($event as $singleevent) {
/***  teacher  ***/
        $idteacher = $singleevent->getTeacher();
        $teacher = $this->getDoctrine()
          ->getRepository(Teacher::class)
          ->find($idteacher);
        $singleevent->setTeacher($teacher->getName());
/***  place  ***/
        $idplace = $singleevent->getPlace();
        $place = $this->getDoctrine()
          ->getRepository(Place::class)
          ->find($idplace);
        $place1 = $place->getAddress() . " - " . $place->getCity() . " (" . $place->getCountry() . ")";
        $singleevent->setPlace($place1);
        $singleevent->setPlacename($place->getName());
/***  topic  ****/
        $idtopic = $singleevent->getTopic();
/*        $idcoursetype = $singleevent->getCourse(); */
        $topic = $this->getDoctrine()
          ->getRepository(Topic::class)
          ->find($idtopic);
        $singleevent->setTopic($topic->getName());
        $singleevent->setGallery($topic->getGallery());
/***  coursetype  ****/
        $idcoursetype = $singleevent->getCoursetype();
        $coursetype = $this->getDoctrine()
          ->getRepository(Type::class)
          ->find($idcoursetype);
        $singleevent->setCoursetype($coursetype->getCoursetype());
      }
//      $eventsfound = ($event);
      (!$event) ? $eventsfound=0 : $eventsfound=1 ;
      return $this->render('calendarioeventi.html.twig',
        array('event' => $event,
        'eventsfound' => $eventsfound,
        'header' => $header,
        'form' => $form->createView()
      ));
    }


    public function oneevent ($idevent){
    $oneevent = $this->getDoctrine()
      ->getRepository(Evento::class)
      ->find($idevent);
    $teacher = $this->getDoctrine()
        ->getRepository(Teacher::class)
        ->find($oneevent->getTeacher());
    $oneevent->setTeacher($teacher->getName());
    $place = $this->getDoctrine()
        ->getRepository(Place::class)
        ->find($oneevent->getPlace());
    $oneevent->setPlacename($place->getName());
    $place = $place->getCity() . " (" . $place->getCountry() . ")";
    $oneevent->setPlace($place);
    return $this->render('oneevent.html.twig',
    array('oneevent' => $oneevent, 'header' => '1'));
    }


    public function printcalendar (){
      $date = date('Y,m,d');

      $topicnames = $this->getDoctrine()
        ->getRepository(Evento::class)
        ->findByDateTopic($date);
      foreach ($topicnames as $singletopicname) {
        $idtopic = $singletopicname['topic'];
        $topic = $this->getDoctrine()
          ->getRepository(Topic::class)
          ->find($idtopic);
        $name = $topic->getName();
        $topis[$idtopic] = $name;
      }

      $event = $this->getDoctrine()
        ->getRepository(Evento::class)
        ->findByDate($date);
      foreach ($event as $singleevent) {
/***  teacher  ***/
        $idteacher = $singleevent->getTeacher();
        $teacher = $this->getDoctrine()
          ->getRepository(Teacher::class)
          ->find($idteacher);
        $singleevent->setTeacher($teacher->getName());
/***  place  ***/
        $idplace = $singleevent->getPlace();
        $place = $this->getDoctrine()
          ->getRepository(Place::class)
          ->find($idplace);
        $place1 = $place->getAddress() . " - " . $place->getCity() . " (" . $place->getCountry() . ")";
        $singleevent->setPlace($place1);
        $singleevent->setPlacename($place->getName());
/***  topic  ****/
        $idtopic = $singleevent->getTopic();
/*        $idcoursetype = $singleevent->getCourse(); */
        $topic = $this->getDoctrine()
          ->getRepository(Topic::class)
          ->find($idtopic);
        $singleevent->setTopic($topic->getName());
        $singleevent->setGallery($topic->getGallery());
/***  coursetype  ****/
        $idcoursetype = $singleevent->getCoursetype();
        $coursetype = $this->getDoctrine()
          ->getRepository(Type::class)
          ->find($idcoursetype);
        $singleevent->setCoursetype($coursetype->getCoursetype());
      }

      $topic = $this->getDoctrine()
        ->getRepository(Evento::class)
        ->findByDateTopic($date);


      return $this->render('printcalendar.html.twig',
        array('event' => $event));
    }

}
