<?php

$questionSet =[
   [
       'question' => 'Which command should you use to initialize a new git repository?',
       'options' => [
           'git init', 'git bash', 'git install', 'git start'
       ]
   ],
   [
       'question' => 'Git commit -m < ? >, ? is for...',
       'options' => [
           'comment','repo url','file name to be committed','None'
       ]
   ],
   [
       'question' => 'Git is a Version Control System...',
       'options' => [
           'True','False'
       ]
   ],
   [
       'question' => 'Who is known as the father of PHP?',
       'options' => [
           'William Makepiece','Rasmus Lerdorf ','Drek Kolkevi','List Barely
           '
       ]
   ],
];


?>
<?php 
foreach($questionSet as $key => $question){


?>
<h5> <?php  echo ++$key.' ' . $question['question']; ?> </h5>
<?php
foreach($question ['options'] as $key1 => $mcq){


?>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    <?php echo $mcq ?>
  </label>
</div>
<?php } ?>
<?php } ?>
