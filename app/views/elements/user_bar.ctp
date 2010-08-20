<?php echo $form->create('search',array('url'=>'/resources/search','type'=>'get')); ?>
<?php echo $form->input('Search1',array('name'=>'r','id'=>'q_id','label'=>'Search Resource/DOI/Publisher')); ?>
<?php echo $form->input('Search Contributors',array('name'=>'c')); ?>
<?php echo $form->end('Search'); ?>
<br /><br />
<?php echo $form->create('admin',array('url'=>array('controller'=>'pages','action'=>'index','admin'=>'true'))); ?>
<?php echo $form->input('credentials'); ?>
<?php echo $form->input('pw',array('type'=>'password')); ?>
<?php echo $form->end('login'); ?>