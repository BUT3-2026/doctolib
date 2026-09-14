  <header>
    <h1><?= $title?></h1>
  </header>
  <ul>

    <li><b>Liens vers les pages statiques de l'application</b></li>
      <ul>
        <li><a href='test/'>Une page statique</a></li>
      </ul>

    <li><b>Liens vers des pages dynamiques simples de consultation de la BDD (tables sans clés étrangères)</b>
      <ul>
        <li>
            <a href="patients">Affichage de la liste des patients de la BDD</a>
        </li>
        <li> 
          ...
        </li>
      </ul>
    </li>

  	
     <li><b>Liens vers des pages dynamiques plus complexes de consultation de la BDD (tables avec clés étrangères)</b>
      <ul>
        <li>
          <a href="praticiens/specialite/44">Affichage de la liste des praticiens d'une spécialté donnée</a>
        </li>
        <li>
          ...
        </li>
      </ul>
    </li>