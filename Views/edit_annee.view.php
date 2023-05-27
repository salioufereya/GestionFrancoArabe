

<form method="POST" action="">
    <input type="text" value=" <?php
     foreach ($item as  $item) {
        echo $item['libelle'];
     }
            
    ?>" name="libelle">
    <button type="submit" name="edit" class="btn btn-primary">modifier</button>
</form>