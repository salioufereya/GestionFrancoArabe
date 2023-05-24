

<form method="POST" action="">
    <input type="text" value=" <?php
     foreach ($item as  $item) {
        echo $item['libelle'];
     }
            
    ?>" name="libelle">
    <button type="submit" name="edit">modifier</button>
</form>