<!DOCTYPE html>
<html lang="ro">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>static/css/StefanStyle1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Etape</title>
  </head>
  <body>
   <nav class="menu">   
          <div id="siglafii">
            <img id="fii" src="<?php echo BASE_URL; ?>static/images/fiialb.png" alt="fii">
          </div>
                 <a href="<?php echo BASE_URL; ?>acatismprof" >Acasă</a>
                <a href="<?php echo BASE_URL; ?>proiecte_profesori" >Proiecte</a>
                <a href="<?php echo BASE_URL; ?>etape_profesori" class="active" >Etape</a>
                <a href="<?php echo BASE_URL; ?>contact" >Contact</a>
                 <a href="<?php echo BASE_URL; ?>logout">Logout</a>
           <div id="siglauniv">
          <img id="univ" src="<?php echo BASE_URL; ?>static/images/UNIV1.png" alt="universitate">
          </div>
    </nav>
     <div class="content">
        <div class="jumbotron">
            <h1>Bolota Stefan</h1>
            <p>Student in anul II la grupa A3 la licenta </p>
          </div>
        </div>
   <div class="grid-container">
      <div class="Etapa1 active_project">
        <h1>Depistarea bibliografiei-schitarea planului</h1>
        <ol>
            <li>cursul cu bibliografia orientativa</li>
            <li>profesorul conducator si rolul sau</li>
            <li> investigatia personala</li>
        </ol>
          <div class="overlay1">
      <div class="text1">Deadline: 30 Aprilie 2019</div>
      </div>
      </div>
      <div class="Etapa2 active_project"> 
       <h1>Informarea si documentarea</h1>
        <ol>
            <li> întocmirea fisierului propriu de documentare</li>
            <li>clasificarea informatiei</li>
            <li> ierarhizarea informatiei</li>
            <li>    încadrarea în context</li>
            <li>formarea unei competente informational-documentare</li>
        </ol>
          <div class="overlay2">
      <div class="text1">Deadline: 30 Aprilie 2019</div>
      </div>
      </div>
      <div class="Etapa3 work_in_progress">
       <h1> Intocmirea planului detaliat al lucrarii </h1>
        <ol>
            <li>planul se face într-o faza avansata a informarii si documentarii</li>
            <li>cautarea unui model existent</li>
            <li>stabilirea structurii generale a planului (introducere, cuprins/tratare, concluzii/încheiere)</li>
            <li>examinarea critica a datelor cunoscute</li>
        </ol>
          <div class="overlay3">
      <div class="text1">Deadline: 30 Aprilie 2019</div>
      </div>
    </div>
      <div class="Etapa4 not_working">
       <h1>Elaborarea primei forme a lucrarii</h1>
       <ol>
       		<li>alegerea metodelor de lucru si formularea lor</li>
       		<li>redactarea propriu-zisa în prima forma</li>
       		<li>dezvoltarea aplicatiei</li>
       </ol>
       <div class="overlay4">
      <div class="text1">Deadline: 30 Aprilie 2019</div>
      </div>
    </div>
     <div class="Etapa5 not_working">
       <h1>Elaborarea finala a întregii lucrari</h1>
       <ol>
       		<li>întocmirea foii de titlu</li>
       		<li>cuprinsul</li>
       		<li>prezentarea externa</li>
       </ol>
       <div class="overlay5">
      <div class="text1">Deadline: 30 Aprilie 2019</div>
      </div>
    </div>
     </div>
    <div class="container">
        <h1>Progresul proiectului</h1>
          <ul class="progressbar">
          	 <li class="active">Schitarea planulu</li>
            <li class="active">Info si documentarea</li>
            <li class="working">Intocmirea planului</li>
            <li>Elaborarea initiala</li>
             <li>Elaborarea finala</li>
          </ul>
    </div>
    <h1>Zona de tracking</h1>
    <div class='git'>
    
        <?php
        if(isset($commit))
        {
            for ($i=0; $i < count($commit); $i++) { 
                if($i%3==0)
                {
                    echo "<div class='row'>";
                    echo " <div class='column'>
                    <div class='card'>
                    <h3>Commit ".($i+1)."</h3>
                    <p clas='textcommit'>Name: <span>".$commit[$i]->autor."</span></p>
                    <p clas='textcommit'>Data: <span>".$commit[$i]->data."</span></p>
                    <p clas='textcommit'>Mesaj commit: <span>".$commit[$i]->mesaj."</span></p>
                    <a clas='link' href=".$commit[$i]->link.">Link</a>
                    <p clas='textcommit'>Total: <span id='total'>".$commit[$i]->status->total."</span></p>
                    <p clas='textcommit'>Sterse: <span id='delete'>".$commit[$i]->status->deletions."</span></p>
                    <p clas='textcommit'>Adaugate: <span id='add'>".$commit[$i]->status->additions."</span></p>
                    </div>
                    </div>";
                 }
                 else if($i%3==2)
                 {
                    echo " <div class='column'>
                    <div class='card'>
                    <h3>Commit ".($i+1)."</h3>
                    <p clas='textcommit'>Name: <span>".$commit[$i]->autor."</span></p>
                    <p clas='textcommit'>Data: <span>".$commit[$i]->data."</span></p>
                    <p clas='textcommit'>Mesaj commit: <span>".$commit[$i]->mesaj."</span></p>
                    <a clas='link' href=".$commit[$i]->link.">Link</a>
                    <p clas='textcommit'>Total: <span id='total'>".$commit[$i]->status->total."</span></p>
                    <p clas='textcommit'>Sterse: <span id='delete'>".$commit[$i]->status->deletions."</span></p>
                    <p clas='textcommit'>Adaugate: <span id='add'>".$commit[$i]->status->additions."</span></p>
                    </div>
                    </div></div>";
                 }
                 else{
                    echo " <div class='column'>
                    <div class='card'>
                    <h3>Commit ".($i+1)."</h3>
                    <p clas='textcommit'>Name: <span >".$commit[$i]->autor."</span></p>
                    <p clas='textcommit'>Data: <span>".$commit[$i]->data."</span></p>
                    <p clas='textcommit'>Mesaj commit: <span>".$commit[$i]->mesaj."</span></p>
                    <a clas='link' href=".$commit[$i]->link.">Link</a>
                    <p clas='textcommit'>Total: <span id='total'>".$commit[$i]->status->total."</span></p>
                    <p clas='textcommit'>Sterse: <span id='delete'>".$commit[$i]->status->deletions."</span></p>
                    <p clas='textcommit'>Adaugate: <span id='add'>".$commit[$i]->status->additions."</span></p>
                    </div>
                    </div>";
                 }
            }
        }
            
        ?>
	</div>
</div>
    <h1>Zona editare etape</h1>
    <div class="edit-etape">
    	<h1 class="titlu">Alege etapa</h1>
    	<h1 class="titlu1">Modifica continut</h1>
    	<textarea class="textarea"></textarea>
    	<button class="buton-edit">Modifica</button>
    	 <select class="dropdown">
		    <option value="0">Selecteaza etapa:</option>
		    <option value="1">Schitarea planulu</option>
		    <option value="2">Informarea si documentarea</option>
		    <option value="3">Intocmirea planului</option>
		    <option value="4">Elaborarea initiala</option>
		    <option value="5">Elaborarea finala</option>
		  </select>
    </div>
	
	
  </body>
</html>