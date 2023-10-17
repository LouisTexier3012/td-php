<head>
    <meta charset="utf-8" />
</head>
<form method="post" action="../Controleur/routeur.php">
    <fieldset>
        <legend>Mon formulaire :</legend>
        <p>
            <label for="immat_id">Immatriculation</label> :
            <input type="text" placeholder="256AB34" name="immatriculation" id="immat_id" required/>
            <label for="marque_id">marque</label> :
            <input type="text" placeholder="Tesla" name="marque" id="marque_id" required/>
            <label for="model_id">model</label> :
            <input type="text" placeholder="model S" name="model" id="model_id"/>
            <label for="couleur_id">couleur</label> :
            <input type="color" placeholder="#FF0000" name="couleur" id="couleur_id"/>
            <label for="nbsiege_id">nombre de siège</label> :
            <input type="number" placeholder="5" name="nbsiege" id="nbsiege_id"/>
            <input type='hidden' name='action' value='creerDepuisFormulaire'>

        </p>
        <p>
            <input type="submit" value="Envoyer" />
        </p>
    </fieldset>
</form>