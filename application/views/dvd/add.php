<?php echo validation_errors(); ?>
<?php echo form_open('index.php/dvd/add'); ?>

<div class="form-group">  
    <div class="container">
    <div class="col-xs-10">
        <input type="input" name="titre" class="form-control" placeholder="Titre" /><br />
    </div>
    </div>
</div>
<div class="form-group">
    <div class="container">
    <div class="col-xs-10">
        <input type="input" name="auteur" class="form-control" placeholder="Réalisateur"/><br />
    </div>
    </div>
</div>
<div class="form-group">
    <div class="container">
    <div class="col-xs-10">
        <input type="input" name="societe_edition" class="form-control" placeholder="Société de distrubution"/><br />
    </div>
    </div>
</div>
<div class="form-group">
    <div class="container">
    <div class="col-xs-10">
        <input <input type="number" min="1900" max="2099" step="1" name="annee_sortie" class="form-control" placeholder="Année de Sortie"/><br />
    </div>
    </div>
</div>
<div class="form-group">
    <div class="container">
    <div class="col-xs-10">
        <input type="input" name="fk_categorie" class="form-control" placeholder="Genre"/><br />
    </div>
    </div>   
</div>
<div class="form-group">
    <div class="container">
    <div class="col-xs-10">
        <input type="number" name="nbr_exemplaire" class="form-control" placeholder="Nombre d'exemplaire"/>
    </div>
    </div>
</div>
    <div class="col-xs-10">
        <input class="btn btn-primary"type='submit' name="submit"  value="Ajouter un dvd"/>
    </div>