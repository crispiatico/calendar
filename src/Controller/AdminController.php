<?php
namespace App\Controller;
use App\Entity\Evento;
use App\Entity\Teacher;
use App\Entity\Topic;
use App\Entity\Type;
use App\Entity\Place;
use App\Entity\User;
use App\Entity\Usertype;
use App\Entity\Booking;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\DateType;


class GalleryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('gallery', FileType::class, array('label' => 'icona'))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Topic::class,
        ));
    }
}


class AdminController extends Controller
{

  public function currentuser()
  {
    return $this->getUser()->getUsername();
  }

  public function usertype(Request $request)
  {
    $usertype = new Usertype();
    $form = $this->createFormBuilder($usertype);
    $form->add('usertype', TextType::class, array('required'   => true, 'label' => 'Tipo di utente '));
    $form->add('save', SubmitType::class, array('label'=> 'Invia'));
    $form = $form->getForm();
    $form->handleRequest($request);
    if ($form->isSubmitted() &&  $form->isValid()) {
      $usertype = $form->getData();
      $em = $this->getDoctrine()->getManager();
      $em->persist($usertype);
      $em->flush();
      return $this->redirectToRoute('usertypeall');
    }
    $username = $this->currentuser();
    return $this->render('usertype.html.twig', array('form' => $form->createView(), 'username' => $username));
  }

  public function usertypemodify($id, Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $type = $em->getRepository(Usertype::class)->find($id);
    if (!$type)
    {
      throw $this->createNotFoundException('Nessun tipo di utente trovato per questo id '.$id);
    } else {
      $form = $this->createFormBuilder();
      $form->add("usertype", TextType::class, array( 'data' => $type->getUsertype(), 'label' => 'Tipo di utente '));
      $form->add('save', SubmitType::class, array('label' => 'Invia'));
      $form->add("id", HiddenType::class, array( 'data' => $type->getId()));
      $form = $form->getForm();
      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid()) {
        $form = $form->getData();
        $usertypeedit = $em->getRepository(Usertype::class)->find($form['id']);
        $usertypeedit->setUsertype($form['usertype']);
        $em->flush();
        return $this->redirectToRoute('usertypeall');
      }
    }
    $username = $this->currentuser();
    return $this->render('usertypemodify.html.twig', array('type' => $type, 'form' => $form->createView(), 'username' => $username));
  }

  public function userprofile($usermodifyed, Request $request)
  {
    $currentuser = $this->getUser();
    $id = $currentuser->getId();
    $em = $this->getDoctrine()->getManager();
    $user = $em->getRepository(User::class)->find($id);
    $userprofile = $user->getUsername();
    if (!$user)
    {
      throw $this->createNotFoundException('Nessun Maestro trovato per questo id '.$id);
    } else {
      $form = $this->createFormBuilder();
      $form->add("username", TextType::class, array( 'data' => $userprofile, 'label' => 'Utente '));
      $form->add("email", TextType::class, array( 'data' => $user->getEmail(), 'label' => 'Email '));
      $form->add("newpassword", TextType::class, array('label' => 'Nuova Password','required'   => false));
      $form->add('save', SubmitType::class, array('label' => 'Invia'));
      $form->add("id", HiddenType::class, array( 'data' => $id));
      $form = $form->getForm();
      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid()) {
/* [JANHU] testare che la mail non sia in uso altrimenti va in errore*/
        $form = $form->getData();
        $useredit = $em->getRepository(User::class)->find($form['id']);
        $useredit->setUsername($form['username']);
        $useredit->setEmail($form['email']);
        if (!empty($form['newpassword'])) $useredit->setPassword($form['newpassword']);
        $em->flush();
        return $this->redirectToRoute('usermodifyed');
      }
    }
    $username = $this->currentuser();
    return $this->render('userprofile.html.twig',
    array(
      'userprofile' => $userprofile,
      'user' => $user,
      'form' => $form->createView(),
      'username' => $username,
      'usermodifyed' => $usermodifyed
    ));
  }

  public function editusertype(Request $request, $id)
  {
    $em = $this->getDoctrine()->getManager();
    $query = $this->getDoctrine()->getRepository(Usertype::class)->find($id);
    $form = $this->createFormBuilder();
    $form->add('usertype', TextType::class, array('label' => 'Inserisci i dati' ,'required' => true, 'data' => $query->getUsertype()));
    $form->add('id', HiddenType::class, array('data' => $id));
    $form->add('save', SubmitType::class, array('label'=> 'Modifica'));
    $form = $form->getForm();
    $form->handleRequest($request);
    if ($form->isSubmitted() &&  $form->isValid())
    {
      $formedit = $form->getData();
      $editusertype = $em->getRepository(Usertype::class)->find($id);
      $editusertype->setUsertype($formedit['usertype']);
      $em->flush();
      return $this->redirectToRoute('viewusertype');
    }
    $username = $this->currentuser();
    return $this->render('usertype.html.twig', array('form' => $form->createView(), 'username' => $username));
  }

  public function removeusertype(Request $request, $id)
  {
    $em = $this->getDoctrine()->getManager();
    $query = $this->getDoctrine()->getRepository(Usertype::class)->find($id);
    $em->remove($query);
    $em->flush();
    return $this->redirectToRoute('usertypeall');
  }

  public function viewusertype(Request $request)
  {
    $showusertype = $this->getDoctrine()->getRepository(Usertype::class)->findAll();
    $username = $this->currentuser();
    return $this->render('viewusertype.html.twig', array('viewusertype' => $showusertype, 'username' => $username ));
  }

  public function index(Request $request){
    $username = $this->currentuser();
    return $this->render('dashboard.html.twig', array('username' => $username));
  }

  public function allevent(Request $request)
  {
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
      /*
      $coursetypeall = $this->getDoctrine()
        ->getRepository(Type::class)
        ->findAll();
      foreach ($coursetypeall as $singlecoursetype) {
        $id = $singlecoursetype->getId();
        $coursetypeselect[''] = "";
        $coursetypeselect[$singlecoursetype->getCoursetype()] = $id;
      }
      */
      /***  type  ****/
      $typeall = $this->getDoctrine()
        ->getRepository(Type::class)
        ->findAll();
      foreach ($typeall as $singletype) {
        $id = $singletype->getId();
        $typeselect[''] = "";
        $typeselect[$singletype->getCoursetype()] = $id;
      }
      /***  period  ****/
      $period = array('futuro' => "futuro", 'passato' => "passato");
      $order = array('crescente' => "ASC", 'descrescente' => "DESC");
      $date = date('Y,m,d');
      $form = $this->createFormBuilder()
        ->add('argomento', ChoiceType::class, array('choices' => $topicselect, 'required'   => false,))
        ->add('tipo', ChoiceType::class, array('choices' => $typeselect, 'required'   => false,))
        ->add('citta', ChoiceType::class, array('choices' => $placeselect, 'required'   => false, 'label' => "Città",))
        ->add('maestro', ChoiceType::class, array('choices' => $teacherselect, 'required'   => false,))
        ->add('periodo', ChoiceType::class, array('choices' => $period, 'required'   => false,))
        ->add('ordine', ChoiceType::class, array('choices' => $order, 'required'   => false,))
        ->add('cerca', SubmitType::class)
        ->getForm();
      $form->handleRequest($request);
      if ($form->isSubmitted()) {
        $ricevuto = $form->getData();
        $event = $this->getDoctrine()
          ->getRepository(Evento::class)
          ->findByDateAndSearch($date, $ricevuto);
      } else {
        $event = $this->getDoctrine()
          ->getRepository(Evento::class)
          ->findByDateBooking($date);
      }
      foreach ($event as $singleevent) {
        /***  booking  ***/
        $id = $singleevent->getId();
        $bookingall = $this->getDoctrine()
          ->getRepository(Booking::class)
          ->findBy(['event' => $id]);
        /***  booking number ***/
        $singleevent->setBooking(0);
        $singleevent->setDelete(1);
        if (!empty($bookingall)) {
            $singleevent->setBooking(1+$singleevent->getBooking());
            $singleevent->setDelete(0); // you cann't delete if there are booking
        }
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
        $singleevent->setPlacename($place->getName());
        /*      $place = $place->getAddress() . " - " . $place->getCity() . " (" . $place->getCountry() . ")"; */
        $place = $place->getCity() . " (" . $place->getCountry() . ")";
        $singleevent->setPlace($place);
        /***  topic  ****/
        $idtopic = $singleevent->getTopic();
        $topic = $this->getDoctrine()
          ->getRepository(Topic::class)
          ->find($idtopic);
        $singleevent->setTopic($topic->getName());
        /***  coursetype  ****/
        $idcoursetype = $singleevent->getCoursetype();
        $coursetype = $this->getDoctrine()
          ->getRepository(Type::class)
          ->find($idcoursetype);
        $singleevent->setCoursetype($coursetype->getCoursetype());
        /***  topic.gallery  ****/
        $singleevent->setGallery($topic->getGallery());
        /***  topic.weight  ****/
        $singleevent->setWeight($topic->getWeight());
      }
    $username = $this->currentuser();
    (!$event) ? $eventsfound=0 : $eventsfound=1 ;
    return $this->render('allevent.html.twig',
      array('event' => $event,
      'username' => $username,
      'form' => $form->createView()
      ));
  }

  public function eventnew(Request $request)
  {
    $event = new Evento();
    $event->setTitle('Titolo ');
    $teacherall = $this->getDoctrine()
      ->getRepository(Teacher::class)
      ->findAll();
    foreach ($teacherall as $singleteacher) {
      $id = $singleteacher->getId();
      $teacherselect[''] = "";
      if($singleteacher->getActive()) {$teacherselect[$singleteacher->getName()] = $id;}
    }
    $topicall = $this->getDoctrine()
      ->getRepository(Topic::class)
      ->findAll();
    foreach ($topicall as $singletopic) {
      $id = $singletopic->getId();
      $topicselect[''] = "";
      if($singletopic->getActive()) {$topicselect[$singletopic->getName()] = $id;}
    }
    $typeall = $this->getDoctrine()
        ->getRepository(Type::class)
        ->findAll();
    foreach ($typeall as $singletype) {
      $id = $singletype->getId();
      $typeselect[''] = "";
      $typeselect[$singletype->getCoursetype()] = $id;
    }
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
    $today = date('Y-m-d H:i:s');
    $form = $this->createFormBuilder($event);
    $form->add("title", TextType::class, array('required'   => true, 'label' => 'Titolo'));
    $form->add("topic", ChoiceType::class, array('required'   => true, 'choices'  => $topicselect, 'label' => 'Argomento'));
    $form->add("coursetype", ChoiceType::class, array('required'   => true, 'choices'  => $typeselect, 'label' => 'Tipo di corso'));
    $form->add("teacher", ChoiceType::class, array('required'   => true, 'choices'  => $teacherselect, 'label' => 'Maestro'));
    $form->add("place", ChoiceType::class, array('required'   => true, 'choices'  => $placeselect, 'label' => 'Luogo'));
    $form->add("start", DateTimeType::class, array(
      'widget' => 'single_text',
      'format' => 'yyyy-MM-dd HH:mm',
      'html5' => false,
      'required'   => true,
      'data' => $event->getCurrentdate(),
      'label' => 'Dal'));
//    $form->add("start", DateTimeType::class, array('required'   => true, 'label' => 'Dal', 'data' => $event->getCurrentdate()));
    $form->add("end", DateTimeType::class, array('required'   => true, 'label' => 'Al', 'data' => $event->getCurrentdate()));
    $form->add("body", TextareaType::class, array('required'   => true, 'label' => 'Testo'));
    $form->add("active", CheckboxType::class, array('data' => true, 'label' => 'Attivo', 'required'   => false));
    $form->add('save', SubmitType::class, array('label' => 'Invia'));
    $form = $form->getForm();
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
        $event = $form->getData();
        $date = date('Y-m-d H:i:s');
        $event->setDate(new \DateTime());
        $em = $this->getDoctrine()->getManager();
        $em->persist($event);
        $em->flush();
        return $this->redirectToRoute('eventall');
    }
    $username = $this->currentuser();
    return $this->render('event.html.twig',
    array('form' => $form->createView(),
    'username' => $username ));
  }

  public function bookingall(Request $request, $id){
    $singleevent = $this->getDoctrine()
      ->getRepository(Evento::class)
      ->findById($id);
    $event = $singleevent[0];
    /***  teacher  ***/
    $teacher = $this->getDoctrine()
      ->getRepository(Teacher::class)
      ->find($event->getTeacher());
    $event->setTeacher($teacher->getName());
    /***  place  ***/
    $place = $this->getDoctrine()
      ->getRepository(Place::class)
      ->find($event->getPlace());
    $event->setPlace($place->getName());
    /***  topic  ****/
    $topic = $this->getDoctrine()
      ->getRepository(Topic::class)
      ->find($event->getTopic());
    $event->setTopic($topic->getName());
    /***  coursetype  ****/
    $coursetype = $this->getDoctrine()
      ->getRepository(Type::class)
      ->find($event->getCoursetype());
    $event->setCoursetype($coursetype->getCoursetype());
    /***  booking  ****/
    $bookingall = $this->getDoctrine()
      ->getRepository(Booking::class)
      ->findByEvent($id);
    (!$bookingall) ? $bookingsfound=0 : $bookingsfound=1 ;
    foreach ($bookingall as $bookingsingle) {
      /***  admin  ***/
      $user = $this->getDoctrine()
        ->getRepository(User::class)
        ->find($bookingsingle->getAdmin());
      $bookingsingle->setAdmin($user->getUsername());
      $usertype = $this->getDoctrine()
        ->getRepository(Usertype::class)
        ->find($bookingsingle->getUsertype());
      $bookingsingle->setUsertype($usertype->getUsertype());
    }
    $username = $this->currentuser();
    return $this->render('allbooking.html.twig',
      array(
        'singleevent' => $event,
        'bookingsfound' => $bookingsfound,
        'booking' => $bookingall,
        'username' => $username));
  }

  public function bookingprint(Request $request, $id){
    $singleevent = $this->getDoctrine()
      ->getRepository(Evento::class)
      ->findById($id);
    $event = $singleevent[0];
    /***  teacher  ***/
    $teacher = $this->getDoctrine()
      ->getRepository(Teacher::class)
      ->find($event->getTeacher());
    $event->setTeacher($teacher->getName());
    /***  place  ***/
    $place = $this->getDoctrine()
      ->getRepository(Place::class)
      ->find($event->getPlace());
    $event->setPlace($place->getName());
    /***  topic  ****/
    $topic = $this->getDoctrine()
      ->getRepository(Topic::class)
      ->find($event->getTopic());
    $event->setTopic($topic->getName());
    /***  coursetype  ****/
    $coursetype = $this->getDoctrine()
      ->getRepository(Type::class)
      ->find($event->getCoursetype());
    $event->setCoursetype($coursetype->getCoursetype());
    /***  booking  ****/
    $bookingall = $this->getDoctrine()
      ->getRepository(Booking::class)
      ->findByEvent($id);
    foreach ($bookingall as $bookingsingle) {
      /***  admin  ***/
      $user = $this->getDoctrine()
        ->getRepository(User::class)
        ->find($bookingsingle->getAdmin());
      $bookingsingle->setAdmin($user->getUsername());
      $usertype = $this->getDoctrine()
        ->getRepository(Usertype::class)
        ->find($bookingsingle->getUsertype());
      $bookingsingle->setUsertype($usertype->getUsertype());
    }
    return $this->render('printbooking.html.twig',
      array(
        'singleevent' => $event,
        'booking' => $bookingall));
  }

  public function bookingnew(Request $request, $id)
  {
    $event = $this->getDoctrine()
      ->getRepository(Evento::class)
      ->findById($id);
    $singleevent = $event[0];

    $usertypeall = $this->getDoctrine()
      ->getRepository(Usertype::class)
      ->findByOrder();
    foreach ($usertypeall as $singleusertype) {
      $usertypeid = $singleusertype->getId();
      $usertypeselect[''] = "";
      $usertypeselect[$singleusertype->getUsertype()] = $usertypeid;
    }
    $booking = new Booking();
    $form = $this->createFormBuilder($booking);
    $form->add("event", HiddenType::class, array( 'data' => $id));
    $form->add("name", TextType::class, array('required'   => true, 'label' => "Nome "));
    $form->add("usertype", ChoiceType::class, array('required'   => true, 'choices'  => $usertypeselect, 'label' => 'Tipo di utente'));
    $form->add("phone", TextType::class, array('required'   => false, 'label' => "Telefono "));
    $form->add("email", TextType::class, array('required'   => false, 'label' => "Email "));
    $form->add("comefrom", TextType::class, array('required'   => false, 'label' => "Da "));
    $form->add("arrivale", DateTimeType::class, array('required'   => false, 'label' => 'Arriva'));
    $form->add("departure", DateTimeType::class, array('required'   => false, 'label' => 'Riparte'));
    $form->add("deposit", TextType::class, array('required'   => false, 'label' => 'Acconto'));
    $form->add("note", TextareaType::class, array('required'   => false, 'label' => 'Note'));
    $form->add('save', SubmitType::class, array('label' => 'Invia'));
    $form = $form->getForm();
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid())
      {
        $currentuser = $this->getUser();
        $booking = $form->getData();
        $booking->setCreated(new \DateTime());
        $booking->setAdmin($currentuser->getId());
        $em = $this->getDoctrine()->getManager();
        $em->persist($booking);
        $em->flush();
        return $this->redirectToRoute('booking', array('id' => $booking->getEvent()));
      }
    $username = $this->currentuser();
    return $this->render('bookingnew.html.twig',
    array('form' => $form->createView(),
      'singleevent' => $singleevent,
      'username' => $username ));
  }

  public function bookingmodify($id, Request $request){
    $usertypeall = $this->getDoctrine()
      ->getRepository(Usertype::class)
      ->findByOrder();
    foreach ($usertypeall as $singleusertype) {
      $usertypeid = $singleusertype->getId();
      $usertypeselect[''] = "";
      $usertypeselect[$singleusertype->getUsertype()] = $usertypeid;
    }
    $em = $this->getDoctrine()->getManager();
    $booking = $em->getRepository(Booking::class)->find($id);

    $event = $this->getDoctrine()
        ->getRepository(Evento::class)
        ->findById($booking->getEvent());
    //  print_r($event);echo "<hr>";
    $singleevent = $event[0];
    $form = $this->createFormBuilder();
    $form->add("event", HiddenType::class, array( 'data' => $id));
    $form->add("name", TextType::class, array('required' => true, 'label' => "Nome ", 'data' => $booking->getName()));
    $form->add("usertype", ChoiceType::class,
    array('required' => true, 'label' => 'Tipo di utente', 'choices'  => $usertypeselect, 'data' => $booking->getUsertype()));
    $form->add("phone", TextType::class, array('required' => false, 'label' => "Telefono ", 'data' => $booking->getPhone()));
    $form->add("email", TextType::class, array('required' => false, 'label' => "Email ", 'data' => $booking->getEmail()));
    $form->add("comefrom", TextType::class, array('required' => false, 'label' => "Da ", 'data' => $booking->getComefrom()));
    $form->add("arrivale", DateTimeType::class, array('required' => false, 'label' => 'Arriva', 'data' => $booking->getArrivale()));
    $form->add("departure", DateTimeType::class, array('required' => false, 'label' => 'Riparte', 'data' => $booking->getDeparture()));
    $form->add("deposit", TextType::class, array('required' => false, 'label' => 'Acconto', 'data' => $booking->getDeposit()));
    $form->add("note", TextareaType::class, array('required' => false, 'label' => 'Note', 'data' => $booking->getNote()));
    $form->add("id", HiddenType::class, array('data' => $booking->getId()));
    $form->add("event", HiddenType::class, array('data' => $booking->getEvent()));
    $form->add('save', SubmitType::class, array('label' => 'Invia'));
    $form = $form->getForm();
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid())
      {
        $currentuser = $this->getUser();
        $form = $form->getData();
        $bookingedit = $em->getRepository(Booking::class)->find($form['id']);
        $bookingedit->setName($form['name']);
        $bookingedit->setPhone($form['phone']);
        $bookingedit->setEmail($form['email']);
        $bookingedit->setComefrom($form['comefrom']);
        $bookingedit->setArrivale($form['arrivale']);
        $bookingedit->setDeparture($form['departure']);
        $bookingedit->setNote($form['note']);
        $bookingedit->setDeposit($form['deposit']);
        $bookingedit->setUsertype($form['usertype']);
        $bookingedit->setAdmin($currentuser->getId());
        $bookingedit->setCreated(new \DateTime());
        $em->flush();
        return $this->redirectToRoute('booking', array('id' => $form['event']));
      }
    $username = $this->currentuser();
    return $this->render('bookingmodify.html.twig',
    array('form' => $form->createView(),
      'singleevent' => $singleevent,
      'username' => $username ));
  }

  private function generateUniqueFileName()
  {
    return md5(uniqid());
  }
  public function alltype()
  {
    $eventall = $this->getDoctrine()
      ->getRepository(Evento::class)
      ->findAll();
    $typeall = $this->getDoctrine()
      ->getRepository(Type::class)
      ->findByOrder();

    foreach ($typeall as $typesingle) {
      $typesingle->setDelete(1);
      $id = $typesingle->getId();
      foreach ($eventall as $singleevent) {
        $idtype = $singleevent->getCoursetype();
        if ($id == $idtype) {
          /* type in uso non lo cancello */
          $typesingle->setDelete(0);
        }
      }
    }
    $username = $this->currentuser();
    return $this->render('alltype.html.twig', array('type' => $typeall, 'username' => $username));
  }

  public function allteacher()
  {
    $eventall = $this->getDoctrine()
      ->getRepository(Evento::class)
      ->findAll();
    $teacherall = $this->getDoctrine()
      ->getRepository(Teacher::class)
      ->findByOrder();
    foreach ($teacherall as $teachersingle) {
      $teachersingle->setDelete(1);
      $id = $teachersingle->getId();
      foreach ($eventall as $singleevent) {
        $idteacher = $singleevent->getTeacher();
        if ($id == $idteacher) {
          /* teacher in uso non lo cancello */
          $teachersingle->setDelete(0);
        }
      }
    }
    $username = $this->currentuser();
    return $this->render('allteacher.html.twig', array('teacher' => $teacherall, 'username' => $username));
  }

  public function alluser()
  {
    $userall = $this->getDoctrine()
      ->getRepository(User::class)
      ->findByOrder();
    $bookingall = $this->getDoctrine()
      ->getRepository(Booking::class)
      ->findAll();
    foreach ($userall as $usersingle) {
      $usersingle->setDelete(1);
      $id = $usersingle->getId();
      foreach ($bookingall as $bookingsingle) {
        $admin = $bookingsingle->getAdmin();
        if ($id == $admin) {
          /* admin in uso non lo cancello */
          $usersingle->setDelete(0);
        }
      }
    }
    $username = $this->currentuser();
    return $this->render('alluser.html.twig', array('user' => $userall, 'username' => $username));
  }

  public function allusertype()
  {
    $bookingall = $this->getDoctrine()
      ->getRepository(Booking::class)
      ->findAll();
    $usertypeall = $this->getDoctrine()
      ->getRepository(Usertype::class)
      ->findByOrder();
    foreach ($usertypeall as $usertypesingle) {
      $usertypesingle->setDelete(1);
      $id = $usertypesingle->getId();
      foreach ($bookingall as $bookingsingle) {
        $idusertype = $bookingsingle->getUsertype();
        if ($id == $idusertype) {
          /* idusertype in uso non lo cancello */
          $usertypesingle->setDelete(0);
        }
      }
    }
    $username = $this->currentuser();
    return $this->render('allusertype.html.twig', array('usertype' => $usertypeall, 'username' => $username));
  }

  public function alltopic()
  {
    $eventall = $this->getDoctrine()
      ->getRepository(Evento::class)
      ->findAll();
    $topicall = $this->getDoctrine()
      ->getRepository(Topic::class)
      ->findByOrder();
    foreach ($topicall as $topicsingle) {
      $topicsingle->setDelete(1);
      $id = $topicsingle->getId();
      foreach ($eventall as $singleevent) {
        $idtopic = $singleevent->getTopic();
        if ($id == $idtopic) {
          /* topic in uso non lo cancello */
          $topicsingle->setDelete(0);
        }
      }
    }
    $username = $this->currentuser();
    return $this->render('alltopic.html.twig', array('topic' => $topicall, 'username' => $username));
  }
  public function allplace()
  {
    $eventall = $this->getDoctrine()
      ->getRepository(Evento::class)
      ->findAll();
    $placeall = $this->getDoctrine()
      ->getRepository(Place::class)
      ->findByOrder();
      foreach ($placeall as $placesingle) {
        $placesingle->setDelete(1);
        $id = $placesingle->getId();
        foreach ($eventall as $singleevent) {
          $idplace = $singleevent->getPlace();
          if ($id == $idplace) {
            /* place in uso non lo cancello */
            $placesingle->setDelete(0);
          }
        }
      }
    $username = $this->currentuser();
    return $this->render('allplace.html.twig', array('place' => $placeall, 'username' => $username));
  }

  public function eventmodify(Request $request, $idedit)
  {
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
    $em = $this->getDoctrine()->getManager();
    $event = $em->getRepository(Evento::class)->find($idedit);
    $form = $this->createFormBuilder();
    $form->add("title", TextType::class, array('required'   => true, 'label' => 'Titolo', 'data' => $event->getTitle()));
    $id = $event->getTopic();
    $form->add("topic", ChoiceType::class, array('required'   => true, 'label' => 'Argomento', 'choices'  => $topicselect, 'data' => $event->getTopic() ));
    $form->add("coursetype", ChoiceType::class,
    array('required'   => true, 'label' => 'Tipo di corso', 'choices'  => $coursetypeselect, 'data' => $event->getCoursetype() ));
    $form->add("teacher", ChoiceType::class, array('required'   => true, 'label' => 'Maestro', 'choices'  => $teacherselect, 'data' => $event->getTeacher() ));
    $form->add("place", ChoiceType::class, array('required'   => true, 'label' => 'Luogo', 'choices'  => $placeselect, 'data' => $event->getPlace() ));
    $form->add("start", DateTimeType::class, array('required'   => true, 'label' => 'Dal', 'data' => $event->getStart()));
    $form->add("end", DateTimeType::class, array('required'   => true, 'label' => 'Al', 'data' => $event->getEnd()));
    $form->add("id", HiddenType::class, array('data' => $event->getId()));
    $form->add("body", TextareaType::class, array('required'   => true, 'label' => 'Testo', 'data' => $event->getBody() ));
    $form->add("attivo", CheckboxType::class, array('data' => $event->getActive(), 'required'   => false, 'label' => 'attivo '));
    $form->add('save', SubmitType::class, array('label' => 'Invia'));
    $form = $form->getForm();
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
      $event = $form->getData();
      $form = $form->getData();
      $eventedit = $em->getRepository(Evento::class)->find($form['id']);
      $eventedit->setTitle($form['title']);
      $eventedit->setTopic($form['topic']);
      $eventedit->setCoursetype($form['coursetype']);
      $eventedit->setTeacher($form['teacher']);
      $eventedit->setPlace($form['place']);
      $eventedit->setStart($form['start']);
      $eventedit->setEnd($form['end']);
      $eventedit = $em->getRepository(Evento::class)->find($form['id']);
      $eventedit->setBody($form['body']);
      if (empty($form['attivo'])) $form['attivo'] = 0;
      $eventedit->setActive($form['attivo']);
      $em->flush();
      //$event = $em->getRepository(Evento::class)->find($form['id']);
      return $this->redirectToRoute('eventall');
      }
    $username = $this->currentuser();
    return $this->render('eventmodify.html.twig', array('form' => $form->createView(), 'username' => $username));
  }

  public function eventduplicate(Request $request, $idedit)
  {
    $event = new Evento();
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
    $em = $this->getDoctrine()->getManager();
    $oldevent = $em->getRepository(Evento::class)->find($idedit);
    $form = $this->createFormBuilder($event);
    $form->add("title", TextType::class, array('required'   => true, 'label' => 'Titolo', 'data' => $oldevent->getTitle()));
    $id = $oldevent->getTopic();
    $form->add("topic", ChoiceType::class, array('required'   => true, 'label' => 'Argomento', 'choices'  => $topicselect, 'data' => $oldevent->getTopic() ));
    $form->add("coursetype", ChoiceType::class,
    array('required'   => true, 'label' => 'Tipo di corso', 'choices'  => $coursetypeselect, 'data' => $oldevent->getCoursetype() ));
    $form->add("teacher", ChoiceType::class, array('required'   => true, 'label' => 'Maestro', 'choices'  => $teacherselect, 'data' => $oldevent->getTeacher() ));
    $form->add("place", ChoiceType::class, array('required'   => true, 'label' => 'Luogo', 'choices'  => $placeselect, 'data' => $oldevent->getPlace() ));
    $form->add("start", DateTimeType::class, array('required'   => true, 'label' => 'Dal', 'data' => $oldevent->getCurrentdate()));
    $form->add("end", DateTimeType::class, array('required'   => true, 'label' => 'Al', 'data' => $oldevent->getCurrentdate()));
    $form->add("id", HiddenType::class, array('data' => $oldevent->getId()));
    $form->add("body", TextareaType::class, array('required'   => true, 'label' => 'Testo', 'data' => $oldevent->getBody() ));
    $form->add("active", CheckboxType::class, array('data' => $oldevent->getActive(), 'required'   => false, 'label' => 'attivo '));
    $form->add('save', SubmitType::class, array('label' => 'Invia'));
    $form = $form->getForm();
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
      $event = new Evento();
      $event = $form->getData();
      $event->setDate(new \DateTime());
      $em = $this->getDoctrine()->getManager();
      $em->persist($event);
      $em->flush();
      return $this->redirectToRoute('eventall');
      }
    $username = $this->currentuser();
    return $this->render('eventduplicate.html.twig', array('form' => $form->createView(), 'username' => $username));
    }

/*
  public function eventedit(Request $request, $idedit)
  {
    $teacherall = $this->getDoctrine()
      ->getRepository(Teacher::class)
      ->findAll();
    $topicall = $this->getDoctrine()
      ->getRepository(Topic::class)
      ->findAll();
    $typeall = $this->getDoctrine()
        ->getRepository(Type::class)
        ->findAll();
    $placeall = $this->getDoctrine()
        ->getRepository(Place::class)
        ->findAll();
    foreach ($teacherall as $singleteacher) {
      $id = $singleteacher->getId();
      $teacherselect[''] = "";
      $teacherselect[$singleteacher->getName()] = $id;
    }
    foreach ($topicall as $singletopic) {
      $id = $singletopic->getId();
      $topicselect[''] = "";
      $topicselect[$singletopic->getName()] = $id;
    }
    foreach ($typeall as $singletype) {
      $id = $singletype->getId();
      $typeselect[''] = "";
      $typeselect[$singletype->getCoursetype()] = $id;
    }
    foreach ($placeall as $singleplace) {
      $id = $singleplace->getId();
      $placeselect[''] = "";
      $placeselect[$singleplace->getName()] = $id;
    }
    $em = $this->getDoctrine()->getManager();
    $event = $em->getRepository(Evento::class)->find($idedit);
    $form = $this->createFormBuilder();
    $form->add("id", HiddenType::class, array('data' => $event->getId()));
    $form->add("title", TextType::class, array('required'   => true, 'data' => $event->getTitle()));
    $form->add("start", DateTimeType::class, array('required'   => true));
    $form->add("end", DateTimeType::class, array('required'   => true));
    $form->add("teacher", ChoiceType::class, array('required'   => true, 'choices'  => $teacherselect));
    $form->add("place", ChoiceType::class, array('required'   => true, 'choices'  => $placeselect));
    $form->add("course", ChoiceType::class, array('required'   => true, 'choices'  => $typeselect));
    $form->add("topic", ChoiceType::class, array('required'   => true, 'choices'  => $topicselect));
    $form->add('save', SubmitType::class, array('label' => 'Invia'));
    $form = $form->getForm();
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
        $event = $form->getData();
        $form = $form->getData();
        $eventedit = $em->getRepository(Evento::class)->find($form['id']);
        if (empty($form['attivo'])) $form['attivo'] = 0;
        //$eventedit->setActive($form['attivo']);
        $eventedit->setTitle($form['title']);
        $eventedit->setStart($form['start']);
        $eventedit->setEnd($form['end']);
        $eventedit->setTeacher($form['teacher']);
        $eventedit->setPlace($form['place']);
        $eventedit->setTopic($form['topic']);
        $em->flush();
        //$event = $em->getRepository(Evento::class)->find($form['id']);
        return $this->redirectToRoute('admin');
      }
    return $this->render('editevent.html.twig', array('form' => $form->createView()));
  }
  */
  public function topic(Request $request)
  {
    $topic = new Topic();
    $topic->setActive('Attivo ');
    $topic->setName('Nome ');
    $form = $this->createFormBuilder($topic);
    $form->add("name", TextType::class, array('required'   => true, 'label' => 'Nome'));
    $form->add("gallery", FileType::class, array('required'   => true, 'label' => 'Icona'));
    $form->add("weight", TextType::class, array('required'   => true, 'label' => 'Peso', 'data' => '0'));
    $form->add("active", CheckboxType::class, array('data' => true, 'label' => 'Attivo', 'required'   => false));
    $form->add('save', SubmitType::class, array('label' => 'Invia'));
    $form = $form->getForm();
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
        $topic = $form->getData();
        print_r($topic);
        $file = $topic->getGallery();

        $fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();

        $file->move(
          $this->getParameter('gallery_directory'),
          $fileName
        );

            // updates the 'brochure' property to store the PDF file name
            // instead of its contents
            $topic->setGallery($fileName);
        $em = $this->getDoctrine()->getManager();
        $em->persist($topic);
        $em->flush();
        //return $this->redirectToRoute('topicall');
    }
    $username = $this->currentuser();
    return $this->render('topicnew.html.twig', array('form' => $form->createView(), 'username' => $username));
  }
  public function place(Request $request)
  {
    $place = new Place();
    $place->setActive('Attivo ');
    $place->setName('Nome ');
    $place->setAddress('Indirizzo ');
    $place->setCity('Città ');
    $place->setCountry('Provincia ');
    $form = $this->createFormBuilder($place);
    $form->add("name", TextType::class, array('required'   => true, 'label' => 'Luogo '));
    $form->add("address", TextType::class, array('required'   => true, 'label' => 'Indirizzo '));
    $form->add("city", TextType::class, array('required'   => true, 'label' => 'Città '));
    $form->add("country", TextType::class, array('required'   => true, 'label' => 'Provincia '));
    $form->add("active", CheckboxType::class, array('data' => true, 'required'   => false, 'label' => 'Attivo '));
    $form->add('save', SubmitType::class, array('label' => 'Invia'));
    $form = $form->getForm();
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
        $place = $form->getData();
        $em = $this->getDoctrine()->getManager();
        $em->persist($place);
        $em->flush();
        return $this->redirectToRoute('placeall');
    }
    $username = $this->currentuser();
    return $this->render('place.html.twig', array('form' => $form->createView(), 'username' => $username));
  }

  public function placemodify($id, Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $place = $em->getRepository(Place::class)->find($id);
    if (!$place)
    {
      throw $this->createNotFoundException('Nessun luogo trovato per questo id '.$id);
    } else {
      $form = $this->createFormBuilder();
      $form->add("name", TextType::class, array( 'data' => $place->getName(), 'label' => 'Luogo '));
      $form->add("address", TextType::class, array( 'data' => $place->getAddress(), 'label' => 'Indirizzo '));
      $form->add("city", TextType::class, array( 'data' => $place->getCity(), 'label' => 'Città '));
      $form->add("country", TextType::class, array( 'data' => $place->getCountry(), 'label' => 'Provincia '));
      $form->add("attivo", CheckboxType::class, array('data' => $place->getActive(), 'required'   => false, 'label' => 'attivo '));
      $form->add('save', SubmitType::class, array('label' => 'Invia'));
      $form->add("id", HiddenType::class, array( 'data' => $place->getId()));
      $form = $form->getForm();
      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid()) {
        $form = $form->getData();
        $placeedit = $em->getRepository(Place::class)->find($form['id']);
        $placeedit->setName($form['name']);
        $placeedit->setAddress($form['address']);
        $placeedit->setCity($form['city']);
        $placeedit->setCountry($form['country']);
        if (empty($form['attivo'])) $form['attivo'] = 0;
        $placeedit->setActive($form['attivo']);
        $em->flush();
        return $this->redirectToRoute('placeall');
      }
    }
    $username = $this->currentuser();
    return $this->render('placemodify.html.twig', array('place' => $place, 'form' => $form->createView(), 'username' => $username));
  }

  public function teacher(Request $request)
  {
    $teacher = new Teacher();
    $teacher->setActive('Attivo ');
    $teacher->setName('Nome ');
    $form = $this->createFormBuilder($teacher);
    $form->add("name", TextType::class, array('required'   => true, 'label' => "Nome "));
    $form->add("active", CheckboxType::class, array('data' => true, 'required'   => false, 'label' => 'Attivo '));
    $form->add('save', SubmitType::class, array('label' => 'Invia'));
    $form = $form->getForm();
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
        $teacher = $form->getData();
        $em = $this->getDoctrine()->getManager();
        $em->persist($teacher);
        $em->flush();
        return $this->redirectToRoute('teacherall');
    }
    $username = $this->currentuser();
    return $this->render('teacher.html.twig', array('form' => $form->createView(), 'username' => $username));
  }
  public function type(Request $request)
  {
    $type = new Type();
    $type->setActive('Attivo ');
    $type->setCoursetype('Nome ');
    $form = $this->createFormBuilder($type);
    $form->add("coursetype", TextType::class, array('required'   => true, 'label' => 'Tipo di corso '));
    $form->add("active", CheckboxType::class, array('data' => true, 'required'   => false, 'label' => 'Attivo '));
    $form->add('save', SubmitType::class, array('label' => 'Invia'));
    $form = $form->getForm();
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
        $teacher = $form->getData();
        $em = $this->getDoctrine()->getManager();
        $em->persist($teacher);
        $em->flush();
        return $this->redirectToRoute('typeall');
    }
    $username = $this->currentuser();
    return $this->render('type.html.twig', array('form' => $form->createView(), 'username' => $username));
  }
  public function recoverpassword(Request $request)
  {
    $form = $this->createFormBuilder()
        ->add('email', EmailType::class)
        ->add('send', SubmitType::class, array('label' => 'Invia'))
        ->getForm();
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
        $data = $form->getData();
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(User::class)->findAll();
        foreach ($user as $usersingle) {
          $mail = $usersingle->getEmail();
          if (strtolower($mail) == strtolower($data['email'])) {
            $recoverurl = bin2hex(openssl_random_pseudo_bytes(8));
            $usersingle->setRecoverpasswordlink($recoverurl);
            $em->flush();
            $response = $this->forward('App\Controller\MailController::recoverpassword', array(
              'mail' => $mail, 'recoverurl' => $recoverurl
            ));
          }
        }
    }
    $username = $this->currentuser();
    return $this->render('recoverpassword.html.twig', array('form' => $form->createView(), 'username' => $username));
  }

  public function user(Request $request)
  {
    $type = new User();
    $type->setUsername('Nome ');
    $type->setPassword('Password ');
    $form = $this->createFormBuilder($type);
    $form->add("username", TextType::class, array('required'   => true, 'label' => 'Utente '));
    $form->add("email", TextType::class, array('required'   => true, 'label' => 'Email '));
    $form->add("password", TextType::class, array('required'   => true, 'label' => 'Password '));
    $form->add("is_active", CheckboxType::class, array('data' => true, 'required'   => false, 'label' => 'Attivo '));
    $form->add("roles", HiddenType::class, array( 'data' => 'ROLE_ADMIN'));
    $form->add("save", SubmitType::class, array('label' => 'Invia'));
    $form = $form->getForm();
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
        $user = $form->getData();
        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();
        $name = $user->getUsername();
        $mail = $user->getEmail();
        $response = $this->forward('App\Controller\MailController::welcomeuser', array(
          'name'  => $name, 'mail' => $mail
        ));
        return $this->redirectToRoute('userall');
    }
    $username = $this->currentuser();
    return $this->render('user.html.twig', array('form' => $form->createView(), 'username' => $username));
  }

  public function usermodify($id, Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $user = $em->getRepository(User::class)->find($id);
    if (!$user)
    {
      throw $this->createNotFoundException('Nessun Maestro trovato per questo id '.$id);
    } else {
      $form = $this->createFormBuilder();
      $form->add("username", TextType::class, array( 'data' => $user->getUsername(), 'label' => 'Utente '));
      $form->add("email", TextType::class, array( 'data' => $user->getEmail(), 'label' => 'Email '));
      $form->add("newpassword", TextType::class, array('label' => 'Nuova Password','required'   => false));
      $form->add("isactive", CheckboxType::class, array('data' => $user->getisActive(), 'required'   => false, 'label' => 'attivo '));
      $form->add('save', SubmitType::class, array('label' => 'Invia'));
      $form->add("id", HiddenType::class, array( 'data' => $user->getId()));
      $form = $form->getForm();
      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid()) {
        /* [JANHU] testare che la mail non sia in uso altrimenti va in errore*/
        $form = $form->getData();
        $useredit = $em->getRepository(User::class)->find($form['id']);
        $useredit->setUsername($form['username']);
        $useredit->setEmail($form['email']);
        if (!empty($form['newpassword'])) $useredit->setPassword($form['newpassword']);
        if (empty($form['isactive'])) $form['isactive'] = 0;
        $useredit->setisActive($form['isactive']);
        $em->flush();
        return $this->redirectToRoute('userall');
      }
    }
    $username = $this->currentuser();
    return $this->render('usermodify.html.twig', array('user' => $user, 'forms' => $form->createView(), 'username' => $username));
  }


  public function useredit(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $user = $em->getRepository(User::class)->findAll();
    foreach ($user as $usersingle) {
        $form = $this->createFormBuilder();
        $form->add("is_active", CheckboxType::class, array('data' => true, 'required'   => false));
        $form->add("username", TextType::class, array('data' => $usersingle->getUsername(), 'required'   => true));
        $form->add("password", TextType::class, array('data' => $usersingle->getPassword(), 'required'   => true));
        $form->add("email", TextType::class, array('data' => $usersingle->getEmail(), 'required'   => true));
        $form->add('save', SubmitType::class, array('label' => 'Invia'));
        $form->add("id", HiddenType::class, array( 'data' => $usersingle->getId()));
        $form = $form->getForm();
        $forms[] = $form->createView();
    }
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
        $form = $form->getData();
        $useredit = $em->getRepository(User::class)->find($form['id']);
        if (empty($form['is_active'])) $form['is_active'] = 0;
        $useredit->setisActive($form['is_active']);
        $useredit->setUsername($form['username']);
        $useredit->setPassword($form['password']);
        $useredit->setEmail($form['email']);
        $useredit->setRoles();
        $em->flush();
        return $this->redirectToRoute('topicedit');
      }
    $username = $this->currentuser();
    return $this->render('useredit.html.twig', array('user' => $user, 'forms' => $forms, 'username' => $username));
  }

  public function topicmodify($id, Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $topic = $em->getRepository(Topic::class)->find($id);
    if (!$topic)
      {
        throw $this->createNotFoundException('Nessun argomento trovato per questo id '.$id);
      } else {
        $form = $this->createFormBuilder();
        $form->add("name", TextType::class, array('data' => $topic->getName(), 'required'   => false, 'label' => 'Nome '));
        $form->add("weight", TextType::class, array('required'   => true, 'label' => 'Peso ', 'data' => $topic->getWeight() ));
        $form->add("image", TextType::class, array('required'   => true, 'label' => 'Icona ', 'data' => $topic->getGallery()));
        $form->add("attivo", CheckboxType::class, array('data' => $topic->getActive(), 'required'   => false, 'label' => 'attivo '));
        $form->add('save', SubmitType::class, array('label' => 'Invia'));
        $form->add("id", HiddenType::class, array( 'data' => $topic->getId()));
        $form = $form->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
          $form = $form->getData();
          $topicedit = $em->getRepository(Topic::class)->find($form['id']);
          if (empty($form['attivo'])) $form['attivo'] = 0;
          $topicedit->setActive($form['attivo']);
          $topicedit->setWeight($form['weight']);
          $topicedit->setName($form['name']);
          $topicedit->setGallery($form['image']);
          $em->flush();
          return $this->redirectToRoute('topicall');
        }
      $username = $this->currentuser();
      return $this->render('topicmodify.html.twig', array('topic' => $topic, 'forms' => $form->createView(), 'username' => $username));
      }
  }

  public function topicedit(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $topic = $em->getRepository(Topic::class)->findAll();
    foreach ($topic as $topicsingle) {
        $form = $this->createFormBuilder();
        $form->add("name", TextType::class, array('data' => $topicsingle->getName(), 'required'   => false, 'label' => 'Nome '));
        $form->add("image", TextType::class, array('required'   => true, 'data' => $topicsingle->getGallery()));
        $form->add("attivo", CheckboxType::class, array('data' => $topicsingle->getActive(), 'required'   => false, 'label' => $topicsingle->getName()));
        $form->add('save', SubmitType::class, array('label' => 'Invia'));
        $form->add("id", HiddenType::class, array( 'data' => $topicsingle->getId()));
        $form = $form->getForm();
        $forms[] = $form->createView();
    }
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
        $form = $form->getData();
        $topicedit = $em->getRepository(Topic::class)->find($form['id']);
        if (empty($form['attivo'])) $form['attivo'] = 0;
        $topicedit->setName($form['name']);
        $topicedit->setImage($form['image']);
        $topicedit->setActive($form['attivo']);
        $em->flush();
        return $this->redirectToRoute('topicall');
      }
    $username = $this->currentuser();
    return $this->render('topicedit.html.twig', array('topic' => $topic, 'forms' => $forms, 'username' => $username));
  }
  public function placeedit(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $place = $em->getRepository(Place::class)->findAll();
    foreach ($place as $placesingle) {
        $form = $this->createFormBuilder();
        $form->add("attivo", CheckboxType::class, array('data' => $placesingle->getActive(), 'required'   => false, 'label' => $placesingle->getName()));
        $form->add("name", TextType::class, array('required'   => true, 'data' => $placesingle->getName(), 'label' => 'Nome'));
        $form->add("indirizzo", TextType::class, array('required'   => true, 'data' => $placesingle->getAddress(), 'label' => 'Indirizzo'));
        $form->add("citta", TextType::class, array('required'   => true, 'data' => $placesingle->getCity(), 'label' => 'Città'));
        $form->add("provincia", TextType::class, array('required'   => true, 'data' => $placesingle->getCountry(), 'label' => 'Provincia'));
        $form->add("id", HiddenType::class, array( 'data' => $placesingle->getId()));
        $form->add('save', SubmitType::class, array('label' => 'Invia'));
        $form = $form->getForm();
        $forms[] = $form->createView();
    }
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
        $form = $form->getData();
        $placeedit = $em->getRepository(Place::class)->find($form['id']);
        if (empty($form['attivo'])) $form['attivo'] = 0;
        $placeedit->setActive($form['attivo']);
        $placeedit->setName($form['name']);
        $placeedit->setAddress($form['indirizzo']);
        $placeedit->setCity($form['citta']);
        $placeedit->setCountry($form['provincia']);
        $em->flush();
        return $this->redirectToRoute('placeedit');
      }
    $i = 0;
    $username = $this->currentuser();
    return $this->render('placeedit.html.twig', array('place' => $place, 'forms' => $forms, 'i' => $i, 'username' => $username));
  }
  public function teacheredit(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $teacher = $em->getRepository(Teacher::class)->findAll();
    foreach ($teacher as $teachersingle) {
        $form = $this->createFormBuilder();
        $form->add("attivo", CheckboxType::class, array('data' => $teachersingle->getActive(), 'required'   => false, 'label' => $teachersingle->getName()));
        $form->add("id", HiddenType::class, array( 'data' => $teachersingle->getId()));
        $form->add("name", TextType::class, array( 'data' => $teachersingle->getName(), 'label' => 'Nome '));
        $form->add('save', SubmitType::class, array('label' => 'Invia'));
        $form = $form->getForm();
        $forms[] = $form->createView();
    }
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
        $form = $form->getData();
        $teacheredit = $em->getRepository(Teacher::class)->find($form['id']);
        if (empty($form['attivo'])) $form['attivo'] = 0;
        $teacheredit->setActive($form['attivo']);
        $teacheredit->setName($form['name']);
        $em->flush();
        return $this->redirectToRoute('teacheredit');
      }
    $username = $this->currentuser();
    return $this->render('teacheredit.html.twig', array('forms' => $forms, 'username' => $username));
  }

  public function teachermodify($id, Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $teacher = $em->getRepository(Teacher::class)->find($id);
    if (!$teacher)
    {
      throw $this->createNotFoundException('Nessun Maestro trovato per questo id '.$id);
    } else {
      $form = $this->createFormBuilder();
      $form->add("name", TextType::class, array( 'data' => $teacher->getName(), 'label' => 'Nome '));
      $form->add("attivo", CheckboxType::class, array('data' => $teacher->getActive(), 'required'   => false, 'label' => 'attivo '));
      $form->add('save', SubmitType::class, array('label' => 'Invia'));
      $form->add("id", HiddenType::class, array( 'data' => $teacher->getId()));
      $form = $form->getForm();
      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid()) {
        $form = $form->getData();
        $teacheredit = $em->getRepository(Teacher::class)->find($form['id']);
        if (empty($form['attivo'])) $form['attivo'] = 0;
        $teacheredit->setActive($form['attivo']);
        $teacheredit->setName($form['name']);
        $em->flush();
        return $this->redirectToRoute('teacherall');
      }
    }
    $username = $this->currentuser();
    return $this->render('teachermodify.html.twig', array('teacher' => $teacher, 'forms' => $form->createView(), 'username' => $username));
  }

  public function typeedit(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $type = $em->getRepository(Type::class)->findAll();
    $form = $this->createFormBuilder();
    foreach ($type as $typesingle) {
        $form = $this->createFormBuilder();
        $form->add("attivo", CheckboxType::class, array('data' => true, 'required'   => false, 'label' => $typesingle->getCoursetype()));
        $form->add("coursetype", TextType::class, array( 'data' => $typesingle->getCoursetype(), 'label' => 'Nome '));
        $form->add("id", HiddenType::class, array( 'data' => $typesingle->getId()));
        $form->add('save', SubmitType::class, array('label' => 'Invia'));
        $form = $form->getForm();
        $forms[] = $form->createView();
    }
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
        $form = $form->getData();
        $typeedit = $em->getRepository(Type::class)->find($form['id']);
        if (empty($form['attivo'])) $form['attivo'] = 0;
        $typeedit->setActive($form['attivo']);
        $typeedit->setCoursetype($form['coursetype']);
        $em->flush();
        return $this->redirectToRoute('typeedit');
      }
    $username = $this->currentuser();
    return $this->render('typeedit.html.twig', array('forms' => $forms, 'username' => $username));
  }

  public function typemodify($id, Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $type = $em->getRepository(Type::class)->find($id);
    if (!$type)
    {
      throw $this->createNotFoundException('Nessun tipo di corso trovato per questo id '.$id);
    } else {
      $form = $this->createFormBuilder();
      $form->add("coursetype", TextType::class, array( 'data' => $type->getCoursetype(), 'label' => 'Tipo di corso '));
      /*
      $form->add("attivo", CheckboxType::class, array('data' => $type->getActive(), 'required'   => false, 'label' => 'attivo '));
      */
      $form->add('save', SubmitType::class, array('label' => 'Invia'));
      $form->add("id", HiddenType::class, array( 'data' => $type->getId()));
      $form = $form->getForm();
      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid()) {
        $form = $form->getData();
        $typeedit = $em->getRepository(Type::class)->find($form['id']);
        /*
        if (empty($form['attivo'])) $form['attivo'] = 0;
        $typeedit->setActive($form['attivo']);
        */
        $typeedit->setCoursetype($form['coursetype']);
        $em->flush();
        return $this->redirectToRoute('typeall');
      }
    }
    $username = $this->currentuser();
    return $this->render('typemodify.html.twig', array('type' => $type, 'form' => $form->createView(), 'username' => $username));
  }

  public function removeevent($id)
  {
    $em = $this->getDoctrine()->getManager();
    $event = $em->getRepository(Evento::class)->find($id);
    if (!$event) {
        throw $this->createNotFoundException(
            'No article found for id '.$id
        );
    }
    else {
      $em->remove($event);
      $em->flush();
    }
    return $this->redirectToRoute('eventall');
  }
  public function removeplace($id)
  {
    $em = $this->getDoctrine()->getManager();
    $place = $em->getRepository(Place::class)->find($id);
    if (!$place) {
        throw $this->createNotFoundException(
            'No article found for id '.$id
        );
    }
    else {
      $em->remove($place);
      $em->flush();
    }
    return $this->redirectToRoute('placeall');
  }
  public function removeteacher($id)
  {
    $em = $this->getDoctrine()->getManager();
    $teacher = $em->getRepository(Teacher::class)->find($id);
    if (!$teacher) {
        throw $this->createNotFoundException(
            'No article found for id '.$id
        );
    }
    else {
      $em->remove($teacher);
      $em->flush();
    }
    return $this->redirectToRoute('teacherall');
  }
  public function removetopic($id)
  {
    $em = $this->getDoctrine()->getManager();
    $topic = $em->getRepository(Topic::class)->find($id);
    if (!$topic) {
        throw $this->createNotFoundException(
            'No article found for id '.$id
        );
    }
    else {
      $em->remove($topic);
      $em->flush();
    }
    return $this->redirectToRoute('topicall');
  }
  public function removetype($id)
  {
    $em = $this->getDoctrine()->getManager();
    $type = $em->getRepository(Type::class)->find($id);
    if (!$type) {
        throw $this->createNotFoundException(
            'No article found for id '.$id
        );
    }
    else {
      $em->remove($type);
      $em->flush();
    }
    return $this->redirectToRoute('typeall');
  }
  public function removeuser($id)
  {
    $em = $this->getDoctrine()->getManager();
    $user = $em->getRepository(User::class)->find($id);
    if (!$user) {
        throw $this->createNotFoundException(
            'No article found for id '.$id
        );
    }
    else {
      $em->remove($user);
      $em->flush();
    }
    return $this->redirectToRoute('userall');
  }

  public function bookingremove($id)
  {
    $em = $this->getDoctrine()->getManager();
    $booking = $em->getRepository(Booking::class)->find($id);
    $event = $booking->getEvent();
    if (!$booking) {
        throw $this->createNotFoundException(
            'Nessuna prenotazione trovata per id '.$id
        );
    } else {
      $em->remove($booking);
      $em->flush();
    }
    return $this->redirectToRoute('booking', array('id' => $event));
  }

  public function changepassword($keyurl, Request $request, \Swift_Mailer $mailer)
  {
      $em = $this->getDoctrine()->getManager();
      $user = $em->getRepository(User::class)->findOneBy(array('recoverpasswordlink' => $keyurl));
      if (!$user) {
          throw $this->createNotFoundException('No user found ');
      }
      else {
        $form = $this->createFormBuilder()
            ->add('newpassword', TextType::class)
            ->add('confirmpassword', TextType::class)
            ->add('send', SubmitType::class)
            ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $em = $this->getDoctrine()->getManager();
            if ($data['newpassword'] == $data['confirmpassword']) {
                $user->setPassword($data['newpassword']);
                $em->flush();
            } else echo "Le password non coincidono";
        }
      }
      $username = $this->currentuser();
      return $this->render('newpassword.html.twig', array('form' => $form->createView(), 'username' => $username));
  }


  public function icone()
  {
    return $this->render('icone.html.twig');
  }

}
