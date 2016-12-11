<?php

if(isset($_POST['req_google'])){
header('Location: http://www.google.fr/#q='.$_POST['req_google']);
}

if(isset($_POST['req_google_df'])){
header('Location: https://fr.linkedin.com/'.$_POST['req_google_df']);
}

if(isset($_POST['req_youtube'])){
header('Location: https://www.youtube.com/results?search_query='.$_POST['req_youtube']);
}

if(isset($_POST['req_trad_fr_en'])){
header('Location: http://www.linguee.fr/francais-anglais/search?query='.$_POST['req_trad_fr_en']);
}

if(isset($_POST['req_trad_en_fr'])){
header('Location: http://www.linguee.fr/anglais-francais/search?query='.$_POST['req_trad_en_fr']);
}

	include ('inc/header.php');

$fic = dirname(__FILE__)."/todo.txt";

#Update de la note

if(isset($_POST['notes'])){
$fp = fopen($fic, 'w');
fwrite($fp, $_POST['notes']);
fclose($fp);
}

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Page d'accueil
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
	  <div class="row">

	      <div class="col-md-2">
              <!-- TO DO List -->
              <div class="box box-success">
                <div class="box-header">
                  <i class="ion ion-clipboard"></i>
                  <h3 class="box-title">ToDo List</h3>
                </div><!-- /.box-header -->
                        <form id='formtodo' method='POST' action=''>
                <div class="box-body">
                        <?php
                                echo "<textarea class='form-control' rows='8' name='notes' style='font-weight:bold'>".mb_convert_encoding(file_get_contents($fic),'HTML-ENTITIES', 'UTF-8')."</textarea>"
                        ?>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix no-border">
                  <button type="submit" class="btn btn-success pull-right btn-sm"><i class="fa fa-floppy-o"></i></button>
                        </form>
                </div>
              </div><!-- /.box -->
             </div>


	    <div class="col-md-2">
	      <div class="box box-primary">
		<div class="box-header with-border">
                  <i class="fa fa-search"></i>
		  <h3 class="box-title">Recherches</h3>
		</div><!-- /.box-header -->
		<div class="box-body">

                        <form id='formtodo' method='POST' action=''>
                  <div class="input-group input-group-sm">
                    <input type="text" class="form-control" name="req_google">
                    <span class="input-group-btn">
                      <button class="btn btn-primary btn-flat" type="button"><i class="fa fa-google"></i></button>
                    </span>
                  </div><!-- /input-group -->
			</form>
				<br />
                        <form id='form2' method='POST' action=''>
                  <div class="input-group input-group-sm">
                    <input type="text" class="form-control" name="req_google_df" placeholder="Linkedin ">
                    <span class="input-group-btn">
                      <button class="btn btn-primary btn-flat" type="button"><i class="fa fa-google"></i></button>
                    </span>
                  </div><!-- /input-group -->
			</form>
				<br />
                        <form id='form3' method='POST' action=''>
                  <div class="input-group input-group-sm">
                    <input type="text" class="form-control" name="req_youtube" placeholder="YouTube">
                    <span class="input-group-btn">
                      <button class="btn btn-danger btn-flat" type="button"><i class="fa fa-youtube"></i></button>
                    </span>
                  </div><!-- /input-group -->
			</form>
				<br />
                        <form id='form4' method='POST' action=''>
                  <div class="input-group input-group-sm">
                    <input type="text" class="form-control" name="req_trad_fr_en" placeholder="Français > Anglais">
                    <span class="input-group-btn">
                      <button class="btn btn-primary btn-flat" type="button"><i class="fa fa-flag"></i></button>
                    </span>
                  </div><!-- /input-group -->
			</form>
				<br />
                        <form id='form5' method='POST' action=''>
                  <div class="input-group input-group-sm">
                    <input type="text" class="form-control" name="req_trad_en_fr" placeholder="Anglais > Français">
                    <span class="input-group-btn">
                      <button class="btn btn-primary btn-flat" type="button"><i class="fa fa-flag"></i></button>
                    </span>
                  </div><!-- /input-group -->
			</form>

		</div><!-- /.box-body -->
	      </div><!-- /.box -->
	    </div>


	    <div class="col-md-4">
			<center><img src='inc/images/agathe_gabriel.JPG' /></center>
	    </div>


	    <div class="col-md-4">
	      <div class="box box-info">
		<div class="box-header with-border">
                  <i class="fa fa-home"></i>
		  <h3 class="box-title">Ma page d'accueil</h3>
		</div><!-- /.box-header -->
		<div class="box-body">
		   <center>
			<a class="btn btn-app" href='http://gabrielsagnard.fr/'>
				<i class="fa"><img src='inc/images/gl.ico' width='16px' /></i>Mon site perso'
	                </a>
			<a class="btn btn-app" href='http://raspbian-france.fr/'>
				<i class="fa"><img src='inc/images/raspfr.ico' width='16px' /></i>Site Raspbian France
	                </a>
			<a class="btn btn-app" href='http://numerique-26.fr'>
				<i class="fa"><img src='inc/images/blog.png' width='16px' /></i>Mon blog
	                </a>
	      <a class="btn btn-app" href='http://gabriel-sagnard.fr'>
				<i class="fa"><img src='inc/images/gl.ico' width='16px' /></i>Mon site pro'
	                </a>
	      <a class="btn btn-app" href='http://gsagnard.ddns.net/test/dokuwiki/doku.php'>
				<i class="fa"><img src='inc/images/Wikipedia-icon.png' width='16px' /></i>Mon Wiki
	                </a>
		   </center>
		</div><!-- /.box-body -->
	      </div><!-- /.box -->
	    </div>


	    <!--<div class="clearfix"></div>-->


	    <div class="col-md-4">

	    </div>


	    <div class="col-md-2">
	      <div class="box box-danger">
		<div class="box-header with-border">
                  <i class="fa fa-envelope-o"></i>
		  <h3 class="box-title">Mails</h3>
		</div><!-- /.box-header -->
		<div class="box-body">
		   <center>
			<a class="btn btn-app" href='https://accounts.google.com/ServiceLogin?service=mail&passive=true&rm=false&continue=https://mail.google.com/mail/&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1'>
				<i class="fa fa-envelope-o"></i>Gmail
	                </a>
			<a class="btn btn-app" href='https://login.live.com/login.srf?wa=wsignin1.0&rpsnv=12&ct=1468581273&rver=6.4.6456.0&wp=MBI_SSL&wreply=https%3a%2f%2foutlook.live.com%2fowa%2f&lc=1036&id=292841&mkt=fr-fr&cbcxt=out&fl=wld'>
				<i class="fa fa-envelope"></i>Hotmail
	                </a>
	       <a class="btn btn-app" href='https://zimmail.ladrome.fr/'>
				<i class="fa fa-envelope"></i>Zimmail
	       </a>
		   </center>
		</div><!-- /.box-body -->
	      </div><!-- /.box -->
	    </div>


	    <div class="col-md-2">
	      <div class="box box-danger">
		<div class="box-header with-border">
                  <i class="fa fa-dollar"></i>
		  <h3 class="box-title">Banques</h3>
		</div><!-- /.box-header -->
		<div class="box-body">
		   <center>
			<a class="btn btn-app" href='https://www.caisse-epargne.fr/particuliers'>
					<i class="fa"><img src='inc/images/caisse_épargne.png' width='16px' /></i>Caisse d'épargne
	                </a>
			<a class="btn btn-app" href='https://www.credit-agricole.fr/'>
					<i class="fa"><img src='inc/images/Logo-Credit-Agricole.jpg' width='16px' /></i>Crédit Agricole
	                </a>
		   </center>
		</div><!-- /.box-body -->
	      </div><!-- /.box -->
	    </div>


	    <div class="clearfix"></div>
		<br /><br />

	    <div class="col-md-12">
	      <div class="box">
		<div class="box-header with-border">
                  <i class="fa fa-external-link"></i>
		  <h3 class="box-title">Mes Liens</h3>
		</div><!-- /.box-header -->
		<div class="box-body">
		   <center>
			<a class="btn btn-app" href='http://www.leboncoin.fr'>
				<i class="fa"><img src='inc/images/lbc.ico' width='16px' /></i>Leboncoin
	                </a>
			<a class="btn btn-app" href='http://www.basketsession.com/'>
				<i class="fa"><img src='inc/images/basket.jpeg' width='16px' /></i>Basket Session
	                </a>
			<a class="btn btn-app" href='http://www.pihomeserver.fr/'>
				<i class="fa"><img src='inc/images/pihome.png' width='16px' /></i>Pihomeserver
	                </a>
			<a class="btn btn-app" href='https://twitter.com/#!/'>
				<i class="fa"><img src='inc/images/Logo_OpenClassrooms.png' width='16px' /></i>Openclassrooms
	                </a>
			<a class="btn btn-app" href='http://www.hostinger.fr/'>
				<i class="fa"><img src='inc/images/logo-hostinger-fr.png' width='16px' /></i> Hostinger
	                </a>
			<a class="btn btn-app" href='http://www.asos.com'>
				<i class="fa"><img src='inc/images/asos-logo.png' width='16px' /></i>Asos
	                </a>
			<a class="btn btn-app" href='http://www.sofoot.com/'>
				<i class="fa"><img src='inc/images/sofoot.png' width='16px' /></i>So Foot
	                </a>
	      <a class="btn btn-app" href='https://wiki.manjaro.org/index.php?title=Page_Principale'>
				<i class="fa"><img src='inc/images/manjaro.png' width='16px' /></i>Wiki Manjaro
	                </a>
		   </center>
		</div><!-- /.box-body -->
	      </div><!-- /.box -->
	    </div>

     <div class="col-md-12">
	      <div class="box">
		<div class="box-header with-border">
                  <i class="fa fa-external-link"></i>
		  <h3 class="box-title">Liens classiques</h3>
		</div><!-- /.box-header -->
		<div class="box-body">
		   <center>
			<a class="btn btn-app" href='https://www.amazon.fr'>
				<i class="fa fa-amazon"></i> Amazon
	                </a>
			<a class="btn btn-app" href='https://www.tripadvisor.fr/'>
						<i class="fa fa-tripadvisor"></i> Tripadvisor
	                </a>
			<a class="btn btn-app" href='http://codepen.io/'>
			         <i class="fa fa-codepen"></i> Code Pen
	                </a>
			<a class="btn btn-app" href='https://github.com/'>
				<i class="fa fa-github-alt"></i> Github
	                </a>
			<a class="btn btn-app" href='http://www.apple.com/fr/'>
				<i class="fa fa-apple"></i> Apple
	                </a>
			<a class="btn btn-app" href='https://forum.ubuntu-fr.org/'>
			   <i class="fa fa-linux"></i> Linux
	                </a>
			<a class="btn btn-app" href='https://framasoft.org/'>
				<i class="fa fa-opencart"></i> Framasoft
	                </a>
		   </center>
		</div><!-- /.box-body -->
	      </div><!-- /.box -->
	    </div>

	  </div><!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!--Validation du formulaire avec ctrl+s-->
	<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
	<script>
		$(window).keypress(function(event) {
		    if (!(event.which == 115 && event.ctrlKey) && !(event.which == 19)) return true;
		    //alert("Ctrl-S pressed");
		document.forms["formtodo"].submit();
		    event.preventDefault();
		    return false;
		});
	</script>
<?php
	include ('inc/footer.php');
?>
