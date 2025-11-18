 <?php
 $sport = "boxing";
 echo "Jason's favorite sport is {$sport}.";
 ?>
<hr>
 <?php 
     $output = "This is one line.\nAnd this is another line. \r We can use a \t\t\t here. We we want to add \r Carriage Return";
    echo $output
 ?>
 <hr>
 <?php 
    $print = "Hello";
    print 'This string will ' . $print . ' exactly as it\'s \n \\t declared.';
 ?>
 <br>
 <?php 
    $cities = ["Dhaka"=>50000, "Cumilla"=>80000];
    
    //$cities['Dhaka'] =  50000;
    //$cities['Cumilla'] =  80000;
    echo "The population of of Dhaka is {$cities['Dhaka']}.";
 
 ?>