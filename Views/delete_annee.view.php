

<form method="POST" action="">
    <input type="text" value=" <?php
     foreach ($item as  $item) {
        echo $item['libelle'];
     }
           
    ?>" name="libelle" disabled>
    <button type="submit" name="delete" class="btn btn-danger">Supprimer</button>
</form>