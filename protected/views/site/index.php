<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h2 align="center">Bienvenidos al Sistema de Salud Control del Dengue  <i><?php echo CHtml::encode(Yii::app()->name ); ?></i></h2>

<br><br>
<!-- <p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>-->
	
<?php
    $this->widget('bootstrap.widgets.TbCarousel', array(
    'items'=>array(
    array(
    'image'=>'images/cartel-dengue.jpg',    

    ),
    array(
    'image'=>'images/tiramonitos.jpg',    
    /*'label'=>'Second Thumbnail label',
    'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. ' .
    'Donec id elit non mi porta gravida at eget metus. ' .
    'Nullam id dolor id nibh ultricies vehicula ut id elit.'*/),
    array(
    'image'=>'images/elsiglo_riberensesanteloscasosdedengue1_22022013.JPG',
    ),
    ),
    ));

?>

	
