<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>titolo | Blog</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" media="screen,projection" type="text/css" href="css/reset.css" />
<link rel="stylesheet" media="screen,projection" type="text/css" href="css/main.css" />
<!--[if lte IE 6]><link rel="stylesheet" media="screen,projection" type="text/css" href="css/main-ie6.css" /><![endif]-->
<link rel="stylesheet" media="screen,projection" type="text/css" href="css/style.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="{{ asset('js/myfunctions.js')}}"></script>
</head>
<body>
<div id="main">
  <!-- Header -->
  <div id="header" class="box">
    <p id="logo"><a href="{{route('home')}}"><img src="design/logo.gif" alt="" /></a></p>
    <hr class="noscreen" />
    <!-- Navigation -->
    @include('layouts/navbar')
  </div>
  <!-- form -->

  <div id="form" class="noscreen">

            {{ Form::open(array('route' => array('search.users.proces', 'class' => 'contact-form'), 'id' => 'searchuser','method' => 'put')) }}
            <div  class="box-01">
            <p class="nomt"><strong>Name:</strong>
                {{ Form::label('', ' ', ['class' => 'label-input']) }}
                {{ Form::text('name', '', ['class' => 'input', 'id' => 'name']) }}

                <strong>Cognome:</strong>
                {{ Form::label('', ' ', ['class' => 'label-input']) }}
                {{ Form::text('surname', '',['class' => 'input', 'id' => 'surname']) }}
                
                <strong>Username:</strong>
                {{ Form::label('', ' ', ['class' => 'label-input']) }}
                {{ Form::text('username', '', ['class' => 'input', 'id' => 'username']) }}
              
                {{ Form::submit('CERCA ', ['class' => 'input-submit', 'id' => 'sub-btn']) }}
                
            </div>

            {{ Form::close() }}

            </div>
            
  <!-- end form -->
  <!-- /header -->
  <hr class="noscreen" />
  <!-- Promo -->
  <div id="promo">
    <p id="slogan"><img src="design/slogan.gif" alt="" /></p>
    <ul id="slider">
      <li><img src="design/slider-01.jpg" alt="" /></li>
      <li><img src="design/slider-02.jpg" alt="" /></li>
      <li><img src="design/slider-03.jpg" alt="" /></li>
    </ul>
  </div>
  <!-- /promo -->

  <hr class="noscreen" />
  
  
  <!-- Three columns -->
  <div class="cols3">
    <div class="cols3-content box">
      <!-- Column -->
      <div class="col">
        <h2><a href="#">Iscriviti</a></h2>
        <p class="smaller"><strong>Iscriversi è semplice, bastano 2 minuti .</strong> Segui le nostre istruzioni. Ti accompagnamo passo passo</p>
        <ul>
          <li><a href="{{route('register')}}">registrati</a></li>
        </ul>
        <ul>
          <p class="smaller">Per iscriverti basta inserire: nome, cognome e un indirizzo email valido. Potrai scegliere username e password, che utilizerai per accedere in fututro</p>
        </ul>
      </div>
      <!-- /col -->
      <!-- Column -->
      <div class="col">
        <h2><a href="#">Vivi la tua libertà</a></h2>
        <p class="smaller"><strong>Crea il tuo blog, riempilo di nuove idee .</strong> Una volta iscritto, potrai subito creare il tuo blog. Inserire nuovi post e </p>
        <ul>
          <p class="smaller">Appena registrato, potrei creare il tuo primo. Scegliendo un titolo e gli argomenti che tratterà</p>
          <p class="smaller">Puoi creare diversi blog, dalla tua area riservata potrai iniziare un altro blog</p>
          <p class="smaller">Personalizza i tuoi blog </p>
        </ul>
      </div>
      <!-- /col -->
      <!-- Column -->
      <div class="col last">
        <h2><a href="#">Condividi</a></h2>
        <p class="smaller"><strong>Cerca i tuoi amici e condividi con loro le tue idee.</strong> Potrai cercare i tuoi amici, condividere con loro i tuoi blog e leggere i loro post</p>
        <ul>
          <li><a href="{{ route('search.users.index') }}">Cerca i tuoi amici</a></li>
          </ul><ul>
          <p class="smaller">Utilizza la funzione di ricerca, per trovare i tuoi amici e condividi con loro i tuoi post</p>
        </ul>
      </div>
      <!-- /col -->
    </div>
    <!-- /cols3-content -->
    <div class="cols3-bottom"></div>
  </div>
  <div class="content box">
    <div class="content-in box">
  <h2>Condizioni e termini d&#39;uso </h2>
      <dl>
        <dt>Offerte e termini vincolanti</dt>
        <dd>Questo sito web è di proprietà e gestito da [nome dell'operatore del sito web]. I presenti Termini stabiliscono i termini e le condizioni in base ai quali è possibile utilizzare il nostro sito Web e i servizi da noi offerti. Questo sito offre ai visitatori di conoscere l'azinda creatrice, venire a conoscenza dei termini d'uso e in fine la possibilità di registrarsi. Accedendo o utilizzando il sito Web per il nostro servizio, l'utente accetta di aver letto, compreso e accettato di essere vincolato da questi Termini.</dd>
        <dt>Comportamento e contenuti</dt>
        <dd>Gli utenti abilitati al utilizzo dei servizi, messi a disposizione dal sito, devono mantenere un comportamento rispettoso e non offensivo , rispoetto a gli altri utenti. I contenuti dei vari blog e post, devono rispettare un liguaggio consono e rispettoso. I post inseriti, dovranno rispettare le argomentazioni descritte nel blog di apparteneza.</dd>
        <dt>Diritto di sospendere o cancellare l'account e servizi dell'utente</dt>
        <dd>Potremmo interrompere o sospendere in modo permanente o temporaneo l'accesso al servizio conp preavviso e responsabilità per qualsiasi motivo, incluso se, a nostra esclusiva decisione, violi qualsiasi disposizione dei presenti Termini o qualsiasi legge o regolamento applicabile. È possibile che venga richiesto di interrompere l'utilizzo del servizio/sito e che venga richiesta inoltre la cancellazione del proprio account e / o dei servizi in qualsiasi momento. </dd>
        <dt>Proprietà, offerta e termini vincolanti</dt>
        <dd>Il Servizio e tutti i materiali ivi contenuti o trasferiti, inclusi, a titolo esemplificativo, software, immagini, testo, grafica, loghi, brevetti, marchi, marchi di servizio, diritti d'autore, fotografie, audio, video, musica e tutti i Diritti di proprietà intellettuale relativi, sono di proprietà esclusiva di [Nome del proprietario del sito].</dd>
       <dt>Limitazione di responsabilità</dt>
        <dd>Nella misura massima consentita dalla legge applicabile, in nessun caso [il proprietario del sito web] può essere ritenuto responsabile di eventuali danni indiretti, punitivi, incidentali, speciali, consequenziali o esemplari, inclusi, senza limitazione, danni per perdita di profitti, avviamento, utilizzo, dati o altre perdite intangibili, derivanti da o relative all'uso o all'incapacità di utilizzare il servizio. </dd>
      </dl>
      <h2><b>//</b> <small>YOUR</small> <b>BLOG</b></h2>
      <div class="col50">
        <p><b>//</b> <small>YOUR</small> <b>BLOG</b> nasce come idea del azienda Comunication s.p.a. leader nel campo della comunicazione da più di 20 anni. Col crescere della piattoforma tecnologia del web, la Comunication s.p.a. ha deciso di progettare //yourBLOG, un sito che nasce per realizzare  i desideri e le esigense, di sempre più persone. Persone che sentono la necessità di condividere informazioni su vari temi. </p>
        <p><b>//</b> <small>YOUR</small> <b>BLOG</b> gestisce blog e post, creati dai vari utenti</p>
      </div>
      <!-- /col50 -->
      <div class="col50 f-right">
        <p class="small"><b>CONTATTI</b></p>
        <ul>
          <li>numero telefonico: 00 00000</li>
          <li>indirizzo: Roma, via garibaldi 27, 00153 </li>
          <li>email: comunicationspa@info.com</li>
        </ul>
      </div>
      <!-- /col50 -->
      <div class="fix"></div>
    </div>
    <!-- /content-in -->
    <div class="content-bottom"></div>
  </div>

  <!-- Footer -->
  <div id="footer" class="box">
    <!-- DON´T REMOVE THIS LINE -->
    <p class="f-right"><a href="http://www.nuviotemplates.com/">Free web templates</a> by <a href="http://www.qartin.cz/">Qartin</a>, sponsored by: <a href="http://www.grily-krby.cz/">Grily</a></p>
    <p class="f-left">&copy;&nbsp;2009 <a href="#">Your Company Inc.</a></p>
  </div>
  <!-- /footer -->
</div>
</div>
</div>
<!-- /main -->
</body>
</html>
