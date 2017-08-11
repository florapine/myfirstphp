<?php include 'header.php'; ?>

    <div>
        <h1>Addition</h1>
        <h2>  
        <?php
            $numb1 = rand(1,10);
            $numb2 = rand(1,10);
        
            echo $numb1 . " + " . $numb2;
        ?>
        </h2> 
        <br/><br/>
        <p>
        <?php
        if(!$_POST["answer"] ) {} else {
            $correct_answer = $_POST["numb1"] + $_POST["numb2"];
            if($correct_answer == $_POST["answer"])
            echo "Correct!  " . $_POST["numb1"] . " + " . $_POST["numb2"] . " = " .  $_POST["answer"];
            else {
            echo "Incorrect!  " . $_POST["numb1"] . " + " . $_POST["numb2"] . " = " .  $correct_answer . " , not " . $_POST["answer"];}
             }
        ?></p>
        <br/><br/>
        <form method="post" action="/">
            <input name="numb1" type="hidden" value="<?php echo $numb1; ?>">
            <input name="numb2" type="hidden" value="<?php echo $numb2; ?>">
           Answer: <input type="text" name="answer"><br/><br/><button class="s">Submit</button>
            <button class="n">New Card</button>
            
        </form>
        <br/><br/>
        </div>
        
<?php include 'footer.php';  ?>

       </center>
    </body>
</html>