<?php

namespace App\Http\Controllers;

use App\Mail\ContactanosMailable1;
use App\Mail\ContactanosMailable2;
use Illuminate\Http\Request;
use App\Mail\ContactenosMailable;
use App\Models\File;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;

use PHPMailer\PHPMailer\PHPMailer;

require 'phpmailer/PHPMailer.php';
require 'phpmailer/Exception.php';

class Pages extends Controller
{
    
    public function set_locale($lang){
        App::setLocale($lang);
        return redirect()->route('inicio');
    }
    public function index()
   {
       // dd(App::getLocale(), Cookie::get('lang'));
        return view('inicio');
    }
    public function aboutus()
    {
        return view('nosotros');
    }
    public function rudylaguna()
    {
        return view('Rudy');
    }
    public function vivianasanchez()
    {
        return view('Viviana');
    }
    public function sergiovillegas()
    {
        return view('Sergio');
    }
    public function alvaroorozco()
    {
        return view('Alvaro');
    }
    public function katherine()
    {
        return view('Katy');
    }
    public function geneolarte()
    {
        return view('Gene');
    }

    public function services()
    
    {
        return view('servicios');
    }
    public function contacto()
    
    {
        return view('contacto');
    } 
    
    public function archivos()
    {
        
    /**Verificando si existe el archivo */
        /*if(file_exists(public_path('css/'))){
            dd('Si existe el Archivo');
        }else{
            dd('No existe el Archivo.');
        }
    
        if(File::exists(public_path('fotos/1.jpg'))){
            dd('Si existe el Archivo');
        }else{
            dd('No existe el Archivo');
        }
        */
        /*$ruta = public_path('upload/imgs');
        //isDirectory () tomará un argumento como ruta de carpeta y devolverá true si la carpeta existe o false.
        if(!File::isDirectory($ruta)){
        //makeDirectory () tomará cuatro argumentos para crear una carpeta con permiso
        File::makeDirectory($ruta, 0777, true, true);
        }
        dd('Directorio Creado');
    */
    
    
    /**Crear directorio 
        $path = public_path().'/images';
        File::makeDirectory($path, 0777, true, true);
    /**/ 
        $files = File::paginate(20);
        return view('driveccd.archivos')->with(['files' => $files]);
    }
    public function fotos()
    {
        $fotos = File::paginate(20);
        return view('driveccd.fotos')->with(['fotos' => $fotos]);
    }
    public function videos()
    {
        $videos= File::paginate(20);
        return view('driveccd.videos')->with(['videos' => $videos]);
    }
//$image_one->getClientOriginalName()
    /* Enviar Contacto */
    public function store(Request $request){

        /* $correo =new ContactenosMailable($request->all());
        Mail::to('administracion@competitividadccd.com')->send($correo);
        return 'Mensaje Enviado'; */
        
        /* variables del formulario */
        $name = $_POST['name'];
        $mail = $_POST['mail'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        /* no coloca nombres */
        if(empty(trim($name))) $name = 'Anonymous';

        /* cuerpo del correo */
        $body = <<<HTML
            <h1>Información de Contacto</h1>
            <h2>De: $name  , $mail</h2>
            <h2>Mensaje:</h2>
            <p>$message</p> 
        HTML;

        /* PHPMailer */
        $mailer = new PHPMailer();
        $mailer->CharSet = 'UTF-8';
        $mailer->Encoding = 'base64';
        $mailer->setFrom($mail, "$name");
        $mailer->addAddress('melissa.sanchez@competitividadccd.com', 'Administración CCD');
        $mailer->Subject = "CCD WEB: $subject";
        $mailer->msgHTML($body);
        $mailer->AltBody = strip_tags($body);

        if ($name == "" || $mail == "" || $subject == "" || $message == "") {
            echo'<script type="text/javascript">
                alert("No te creas mosca!©™®");
                window.location.href = "/contacto";
                </script>';
        } else {
            $res = $mailer->send();
        }

        /* correo enviado o no enviado */
        if($res){
            echo'<script type="text/javascript">
                alert("Información enviada correctamente, muy pronto tendrá una respuesta!");
                window.location.href = "/contacto";
                </script>';
        } else {
            echo'<script type="text/javascript">
                alert("No se pudo enviar su información, vuelva a intentarlo");
                window.location.href = "/contacto";
                </script>';
}

    }
    /* Enviar CV */
    public function store1(Request $request){
        $request->validate([
            'file' => 'required'
        ]);

        /* $file = $request->file('file');
        $correo1 = new ContactanosMailable1($request->all());
        $correo1->attach($file->getRealPath(), [
            'as' => $file->getClientOriginalName(),
            'mime' => $file->getMimeType()
        ]);

        Mail::to('CarlosAvalosch02@gmail.com')->send($correo1);
        return redirect()->back()->with('success', 'CV enviado...'); */

        /* variables del formulario */
        $cvname = $_POST['name'];
        $cvmail = $_POST['mail'];
        $cvfile = $_FILES['file'];

        /* no coloca nombres */
        if(empty(trim($cvname))) $cvname = 'Anonymous';

        /* cuerpo del correo */
        $body = <<<HTML
            <h1>Información de Postulante</h1>
            <h2><b>Nombre: </b> $cvname</h2>
            <h2><b>Correo: </b> $cvmail</h2>
            <p>Documento:</p>
        HTML;

        /* PHPMailer */
        $mailer = new PHPMailer();
        $mailer->CharSet = 'UTF-8';
        $mailer->Encoding = 'base64';
        $mailer->setFrom($cvmail, "$cvname");
        $mailer->addAddress('melissa.sanchez@competitividadccd.com', 'Administración CCD');
        $mailer->Subject = "CV enviado desde CCD WEB";
        $mailer->msgHTML($body);
        $mailer->AltBody = strip_tags($body);
        $mailer->addAttachment($cvfile['tmp_name'], $cvfile['name']);

        if ($cvname == "" || $cvmail = "") {
            echo'<script type="text/javascript">
                alert("No te creas mosca!©™®");
                window.location.href = "/trabaja_con_nosotros";
                </script>';
        } else {
            $res = $mailer->send();
        }

        /* correo enviado o no enviado */
        if($res){
            echo'<script type="text/javascript">
                alert("Muchas gracias por Postular, pronto revisaremos tu CV");
                window.location.href = "/trabaja_con_nosotros";
                </script>';
        } else {
            echo'<script type="text/javascript">
                alert("No se pudo enviar su CV, vuelva a intentarlo");
                window.location.href = "/trabaja_con_nosotros";
                </script>';
        }
    }

    public function store2(Request $request){
        $request->validate([
            'file' => 'required'
        ]);
        $file = $request->file('file');
        $correo2 = new ContactanosMailable2($request->all());
        $correo2->attach($file->getRealPath(), [
            'as' => $file->getClientOriginalName(),
            'mime' => $file->getMimeType()
        ]);
        
        Mail::to('CarlosAvalosch02@gmail.com')->send($correo2);
        return redirect()->back()->with('success', 'Documento Enviado Exitosamente');
    }
    public function mesadeparte(){
        return view('mesadeparte');
    }
    public function servicio_competitividad()
      
    {
        return view('servicio_competitividad');
    }
    public function servicio_estudios()
      
    {
        return view('servicio_estudios');
    }
    public function servicio_gestion()
      
    {
        return view('servicio_gestion');
    }
    public function servicio_inversiones()
      
    {
        return view('servicio_inversiones');
    }
    public function servicio_legal()
      
    {
        return view('servicio_legal');
    }
    public function servicio_tech()
      
    {
        return view('servicio_tech');
    }
    public function empleos()
      
    {
        return view('empleos');
    }
    public function experiencia()
      
    {
        return view('experiencia');
    }
    public function login()
      
    {
        return view('login');
    }
    //-------
    public function visionmision()
      
    {
        return view('visionmision');
    }
    public function publicaciones()
      
    {
        return view('publicaciones');
    }
    public function noticias()
      
    {
        return view('noticias');
    }

    public function qrverificado()
      
    {
        return view('qrverificado');
    }
}   
