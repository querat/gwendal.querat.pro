<?php

// I don't like php but this is still better than copy pasting each table row ...'

function makeStarredTr($pathToIcon, $nameOfLanguage, $nbStars)
{

    echo "
    <tr style='border: none'>
        <td>
            <h4 class=\"ui header\">
                <img src=\"$pathToIcon\" class=\"ui tiny rounded image\" onmouseover='$(this).transition(\"jiggle\");' >
                    $nameOfLanguage
            </h4>
        </td>    
    ";

    $starsPrinted = 0;
    while ($starsPrinted < 5) {

        $starFilePath = ($starsPrinted < $nbStars) ? "res/star.png" : "res/star-blank.png";

        echo "
        <td class=\"td-noborder\">
            <img class=\"my-star image tiny\" src=\"$starFilePath\">
        </td>
        ";
        $starsPrinted++;
    }
    echo "
        </tr>
    ";
}

?>
<table class="ui centered unstackable basic table celled padded table">

    <tbody>
    <?php
    makeStarredTr("res/sudo.png", "Linux & Sysadmin", 5);
    makeStarredTr("res/cpp.png", "C/C++", 4);
    makeStarredTr("res/py.png", "Python", 4);
    makeStarredTr("res/webStack.png", "Frontend", 3);
    makeStarredTr("res/thatOneLanguage.jpg", "Java", 2);
    makeStarredTr("res/sql.png", "MySQL", 2);
    makeStarredTr("res/uk.jpg", "English", 4);
    ?>
    </tbody>
</table>