<?php
       if (isset($_POST['text1']) && !empty($_POST['text1']) && isset($_POST['text2']) && !empty($_POST['text2'])) {
                $text1 = $_POST['text1'];
                $text2 = $_POST['text2'];

                similar_text($text1, $text2, $result);
                $result_rounded = round($result);
                
                switch(true) {
                        case ($result_rounded == 100):
                                echo "<h1 class='red'>$result_rounded<span>%</span></h1>";
                                echo "<p class='red'>These are literally the same text.</p>";
                        break;
                        case ($result_rounded >= 85):
                                echo "<h1 class='orange'>$result_rounded<span>%</span></h1>";
                                echo "<p class='orange'>Serious Plagiarism detected: one of this text has been heavily plagiarized.</p>";
                        break;
                        case ($result_rounded >= 70):
                                echo "<h1 class='yellow'>$result_rounded<span>%</span></h1>";
                                echo "<p class='yellow'>Plagiarism detected: the similarities between these texts are too many for both to be considered authentic.</p>";
                        break;
                        case ($result_rounded >= 55):
                                echo "<h1 class='violet'>$result_rounded<span>%</span></h1>";
                                echo "<p class='violet'>Similar: as awfully similar as these texts are, we give the benefit of the doubt that they may just not be plagiarized.</p>";
                        break;
                        case ($result_rounded > 40):
                                echo "<h1 class='purple'>$result_rounded<span>%</span></h1>";
                                echo "<p class='purple'>Plagiarism undetected: these texts may have some similarities but there is certainly no issue of plagiarism.</p>";
                        break;
                        case ($result_rounded == 0):
                                echo "<h1 class='green'>$result_rounded<span>%</span></h1>";
                                echo "<p class='green'>These texts couldn't be any more different.</p>";
                        break;
                        default:
                                echo "<h1 class='blue'>$result_rounded<span>%</span></h1>";
                                echo "<p class='blue'>Plagiarism undetected: both texts are very authentic.</p>";
                        break;
                        
                }

        } else {
        echo "<p>Please enter both texts you wish to analyze</p>";
        }

        
        


?>