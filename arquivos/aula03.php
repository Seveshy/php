<?php

    $link = "https://www.google.com/url?sa=i&source=images&cd=&cad=rja&uact=8&ved=2ahUKEwjk2_zF5rnhAhUDA9QKHbmBBM0QjRx6BAgBEAU&url=https%3A%2F%2Fnationalinterest.org%2Fblog%2Fbuzz%2Fnavy-set-deploy-3-littoral-combat-ships-they-cant-fight-anyone-41707&psig=AOvVaw2jS14g_NbX5Gv0OHnHELah&ust=1554582845853410";

    $content = file_get_contents($link);

    $parse = parse_url($link);

    $basename = basename($parse["path"]);

    $file = fopen($basename, "w+");

    fwrite($file, $content);

    fclose($file);
?>