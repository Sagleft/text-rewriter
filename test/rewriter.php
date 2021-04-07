<?php
    require_once __DIR__ . "/../src/Rewriter.php";

    $article = "Scientists have been leaving government posts since President Donald Trump took office in 2017, and those positions, by and large, have not been replaced. This shortage has led to insufficient regulation enforcement, limited data distribution, and a paucity of researchers, according to an analysis of public employee records by The Washington Post.";

    $rewriter = new TextTools\Rewriter();
    $article2 = $rewriter->Do($article);

    echo "before: " . PHP_EOL . $article . PHP_EOL;
    echo PHP_EOL;
    echo "after: " . PHP_EOL . $article2 . PHP_EOL;
