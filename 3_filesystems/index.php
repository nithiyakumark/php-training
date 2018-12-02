<?php
   
    // echo  __DIR__.'<br/>';
    //  print_r($books);
   
?> 
<ul>
    <?php
     $bookJson = file_get_contents('books.json');
     $books = json_decode($bookJson,TRUE);
     var_dump($books);
        foreach ($books as $value):
        ?>
            <li>
                <a href="?title=<?php echo $value['title']?>">
                <?php echo printableTitle($book); ?>
                </a>
            </li>
        <?php
        endforeach;
    ?>
</ul>