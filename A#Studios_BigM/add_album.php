<?php

require_once('connect.php');

echo <<<_END
   <form action="add_album.php" method="post">
   <pre>
      ADD ALBUM:         <input type="text" name="cat_number"/>
                         <input type="text" name="alb_name"/>
                         <input type="text" name="release_date"/>
                         <input type="text" name="cover_art_url"/>
                         <input type="text" name="version"/>
                         <select name="artist_name">
_END;

echo <<<_END
                         <input type="text" name="genre_name"/>
                         <input type="submit" value="Search!">
   </pre>
   </form>
   <a href="basic_search.php">Return to Basic Search</a>
_END;
