

<form method="POST" action="">
    <input type="text" value=" <?php
     foreach ($item as  $item) {
        echo $item['libelle'];
     }
            
    ?>" name="libelle">
    <button type="submit" name="activer" class="btn btn-primary">Activer</button>
</form>