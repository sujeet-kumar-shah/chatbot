<?php
if (isset($_GET['message'])) {
    $message = $_GET['message'];

    switch ($message) {
        case 'Hello':
        case 'hi':
          case 'hey':


            $response = 'Hi sciastra there!. How may I help you?';
            break;
        case 'How are you?':
            $response = 'I am doing well, thank you.';
            break;
            case 'tell me about course':
              $response = 'We have many courses related to college entrance exams at SCIastra. For more information, please visit our website: <a href="https://www.sciastra.com/courses/">https://www.sciastra.com/courses/</a>';
              break;
              case 'application form deadline':
                $response = 'The application form deadlines for various exams are as follows:<br>';
                $response .= '- Exam A: January 31<br>';
                $response .= '- Exam B: February 15<br>';
                $response .= '- Exam C: March 10<br>';
                $response .= ' for more information visite our website and see in important massage  <a href="https://www.sciastra.com/">https://www.sciastra.com/</a>';
                break;
            case 'study material':
              case 'study material for exam':
                case 'free study material':
                $response = 'yes we are provide you many study material in free you can visite our website and download it  <a href="https://www.sciastra.com/materials/">https://www.sciastra.com/materials/</a>';
                $response.='<br> or you can read on our blog <a href="https://www.sciastra.com/blog/">https://www.sciastra.com/blog/</a>';
                break;
                case 'contact us':

                  $response = 'for more informtion <br> or contact us <a href="mailto:example@gmail.com">Send Email</a>';
                  break;
                  case'fee':
                    case'fee structor':
                      case 'course fees':
                        case 'cource fee':
                          $response='We have many courses related to college entrance exams at SCIastra. For more information, please visit our website: <a href="https://www.sciastra.com/courses/">https://www.sciastra.com/courses/</a>';
                            $response.='<br>and you can see our course and fee structor ,fee of each courses';
                            break;
        default:
            $response = "I'm sorry, I didn't understand your message. ";
            $response .= '<br> or contact us <a href="mailto:example@gmail.com">Send Email</a>  ';
             $response.='<br>you can visite on our website <a href="https://www.sciastra.com/">https://www.sciastra.com/</a> ';}
          
    if (!empty($message)) {
        echo $response;
    }
} else {
    $servername = "localhost";
    $username = "root";
    $password = "";
    
    $conn = new mysqli($servername, $username, $password);
    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        include('index.html');
    }
}
?>