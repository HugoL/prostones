<?php
/* @var $this MaterialController */
/* @var $dataProvider CActiveDataProvider */

/*$this->breadcrumbs=array(
    'Presupuesto',
    );*/

/*$this->menu=array(
    array('label'=>'Create Material', 'url'=>array('create')),
    array('label'=>'Manage Material', 'url'=>array('admin')),
    );*/

$this->pageTitle= 'Presupuesto online - Mármol, Granito '. Yii::app()->name . 'Marmoles y Granitos';
Yii::app()->clientScript->registerMetaTag("Presupuesto online a medida de mármoles y granitos.", 'description');
Yii::app()->clientScript->registerMetaTag("Presupuesto,  Marmol , Granito ,Barato, Precio, Oferta, Baldosa, Rodapie, Pulido, Flameado, Abujardado, Mármol proston, Marmolistas", 'keywords');
    ?>





    <h1>Presupuesto</h1>

    <?php
//Galeria de imágenes
    $imageArray = array(
        array(Yii::app()->request->baseUrl.Yii::app()->params['images'].'image1.jpg', 'alt'=>'first image is missing', 'htmlOptions'=>array('title'=>'First image')),
        array(Yii::app()->request->baseUrl.Yii::app()->params['images'].'image2.jpg', 'htmlOptions'=>array('title'=>'Second image')),
     );?>

    <?php $form=$this->beginWidget('CActiveForm', array(
            'id'=>'valorpieza-form',
            'action'=>Yii::app()->createUrl('presupuesto/index'),
            'enableAjaxValidation'=>true,
    )); ?>

<div class="row">
         
    <div class="span8 panel">   <!-- DIV CENTRAL -->

        <div id="inicio" class="span12" ><!--BOTON INICIO-->
            <?php if(Yii::app()->user->hasFlash('success')):?>
            <div class="alert alert-success">
                <?php echo Yii::app()->user->getFlash('success'); ?>
            </div>
            <?php endif; ?>

            <?php if(Yii::app()->user->hasFlash('danger')):?>
            <div class="alert alert-error">
                <?php echo Yii::app()->user->getFlash('danger'); ?>
            </div>
            <?php endif; ?>
                    <a href="#"> 
                    <div class="span2 offset3 ini">
                        <li align="center"> Añadir pieza </li>
                    </div></a>
                    <div class="span9">
                        Haga click en <strong>Añadir pieza</strong> para presupuestar un material  sin compromiso alguno. Podrá seleccionar los materiales que necesite y analizar el presupuesto en el pdf que le daremos.
                        <br>
                    </div>
        </div>

                
        <div class="span12 row" id="material" ><!-- PASO 1 MATERIAL-->
                    <div class="span2 pasos" >
                        <div class="span6 titulopcion">Material
                        </div>

                       <div class="span6" id="pregunta1">
                            <img alt="Pregunta - www.proston.es" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>iconos/pregunta.png"/>
                        </div> 
                        <div class="span6" id="ok1">
                           <img alt="Ok- www.proston.es"  src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>iconos/ok.png"/>
                        </div> 

                       <div class="span12">
                        <p id="titulopaso">Paso 1</p>
                       </div>
                    </div>

                    <div class="cuadropresu span10">

                        <div class="span12">
                            Seleccione el <strong>material</strong>.
                        </div>

                        <div class="span12">
                            <div class=" span6 bordepresu">
                                <?php if( !empty($materiales) ):?> 

                                    <ul>   
                                        <?php foreach ( $materiales as $key => $material ): ?>
                                           <a href="#" id="material<?php echo $material->id; ?>" onclick="vermaterial(<?php echo $material->id; ?>);">   
                                            <li class="span4 offset1 color<?php echo $material->id; ?>">
                                                <?php echo $material->nombre; ?>
                                            </li>
                                        </a>
                                        <?php //echo CHtml::link($material->nombre,array('presupuesto/index/idMaterial/'.$material->id),array('class'=>'thumbnail mate','rel'=>'tooltip','data-title'=>'Tooltip')); ?>


                                        <?php endforeach; ?>

                                     </ul>
                                <?php endif; ?>
                            </div>

                            <div class="span6 textogris">
                              <p>- Tambien trabajamos con Calizas, Travertinos... Indiquenos que desea, próximamente estarán disponibles online.

                            </div>

                        </div>

                        <div class="clearfix">&nbsp;</div>    


                        <div class="span12" id="tipos">

                            <?php if( !empty($tipos) ): ?>
                                <div class="ejemplo span12">
                                   <div class="clearfix"></div>

                                        <?php foreach ( $tipos as $key => $tipo ): ?>  
                                        <div class="span2  ejemplo_img tipos tipo<?php echo $tipo->id_material; ?> ti<?php echo $tipo->id; ?>" id="<?php echo $tipo->id; ?>">
                                            <a href="#"><img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['imagenes']."ancha/".$tipo->imagen; ?>"alt="<?php echo $tipo->nombre; ?>"  /></a>
                                            <div class="ejemplo_img_cont cont<?php echo $tipo->id; ?>">
                                               <?php echo $tipo->nombre; ?>
                                            </div>
                                        </div>
                                        <?php endforeach; ?>
                                </div>
                                <div class="clearfix">&nbsp;</div>
                            <?php endif; ?>
                        </div>

                    </div>     
        </div><!--FIN PASO 1-->


        <div class="span12 row" id="tipo_piezas"> <!-- PASO 2 TIPO DE PIEZA: Baldosa, rodapie...; tamaños y precios-->

                    <div class="span2 pasos" >
                        <div class="span6 titulopcion">Formato<br>
                        </div>

                        <div class="span6" id="pregunta2">
                            <img  alt="Pregunta - www.proston.es" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>iconos/pregunta.png"/>
                        </div> 
                        <div class="span6" id="ok2">
                            <img alt="Ok - www.proston.es" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>iconos/ok.png"/>
                        </div> 

                        <div class="span12">
                            <p id="titulopaso">Paso 2</p>
                        </div>
                    </div>


                    
                    <div class="cuadropresu span10">
                        <div class="span12">
                            Seleccione el <strong>formato de pieza</strong> y el <strong>tamaño</strong>.
                        </div>
                        <div class="span12">
                        <div class="span4 pa">
                            <?php if( !empty($piezas) ): ?>
                                <?php echo CHtml::activeDropDownList($valorpieza, 'id_pieza', CHtml::listData($piezas,'id', 'nombre'),
                                array('class'=>'piezas','prompt'=>'Selecciona formato'));?>
                            <?php endif; ?>

                        </div>

                        

                        <div id="tamanos" class="span4"></div>

                        <!-- tamaños -->
                        
                        <div id="preciounitario" class="span3"></div>

                        <!--precio unitario-->
                        </div>
                    </div>
        </div><!-- FIN PASO 2-->        


        <div class="span12" id="terminaciones"><!--PASO 3-->

            <div class="span2 pasos" >
                <div class="span6 titulopcion">Acabado</div>

                <div class="span6" id="pregunta3">
                    <img alt="Pregunta - www.proston.es" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>iconos/pregunta.png"/>
                </div> 
                <div class="span6" id="ok3">
                    <img alt="Ok- www.proston.es" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>iconos/ok.png"/>
                </div> 

                <div class="span12">
                     <p id="titulopaso"><strong>Paso 3</strong></p>
                </div>
            </div>



    
            <div class="cuadropresu span10">

                <div class="span12">
                    Seleccione la <strong>terminacion</strong> de la pieza.
                </div>


               
                <div id="term" class="span12 "><!--Se completa con AJAX-->  
                            
                </div>
                    
      
      
                


    

            </div>
        </div><!--FIN PASO 3-->


        <div class="span12" id="destino" ><!--PASO 4-->

            <div class="span2 pasos" >
                <div class="span6 titulopcion">Destino
                </div>

                <div class="span6" id="pregunta4">
                    <img alt="Pregunta - www.proston.es"src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>iconos/pregunta.png"/>
                </div> 
                <div class="span6" id="ok4">
                    <img alt="Ok - www.proston.es" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>iconos/ok.png"/>
                </div> 

                <div class="span12">
                  <p id="titulopaso">Paso 4</p>
                </div>
            </div>



    
            <div class="cuadropresu span10">
                <div class="span12">
                    Seleccione el destino del material.
                 </div>
                <div class="span5">
                    <div class="span12">
                        <div class="span12 pa" id="destino2">
                          <?php echo CHtml::activeDropDownList($valorpieza, 'destino', CHtml::listData(Provincia::model()->findAll(array('order'=>'nombre ASC')), 'id', 'nombre'),array('empty'=>'Selecciona destino'));?>
                        </div>
                    </div>
                </div>

                <div class="span6 textogris">
                    <p>Proston envia sus materiales a todo el territorio nacional. El transporte es opcional. Usted puede recoger el material en origen sin coste alguno.</p>
                </div>
            </div>
        </div><!--FIN PASO 4-->


        <div class="span12" id="cantidad"><!--PASO 5-->
            <div class="span2 pasos" >
                <div class="span6 titulopcion">Cantidad</div>

                <div class="span6" id="pregunta4">
                    <img alt="Pregunta - www.proston.es" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>iconos/pregunta.png"/>
                </div> 
                <div class="span6" id="ok4">
                    <img alt="ok- www.proston.es"src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>iconos/ok.png"/>
                </div> 

                <div class="span12">
                    <p id="titulopaso">Paso 5</p>
                </div>
            </div>



    
            <div class="cuadropresu span10">
                <div class="span12">
                    Seleccione la cantidad de material.
                </div>
                <div class="span12">
                    <div class="span6">
                        <div class="span12 po">
                            <?php echo $form->errorSummary($valorpieza); ?>
                            <?php /*echo $form->labelEx($valorpieza,'cantidad');*/ ?> 
                            <?php echo $form->textField($valorpieza,'cantidad'); ?>
                            <?php echo $form->error($valorpieza,'cantidad'); ?>
                            <span id="medida"></span>
                        </div>
                    </div>

                    <div class="span6" id="boton" >
                        <div class="row">
                            <?php echo $form->hiddenField($valorpieza,'id_material',array('value'=>'0')); ?>
                            <?php echo $form->hiddenField($valorpieza,'id_tipo',array('value'=>'0')); ?>
                            <?php //echo $form->hiddenField($valorpieza,'id_tamano',array('value'=>'0')); ?>
                            <?php echo $form->hiddenField($valorpieza,'precio',array('value'=>'0')); ?>
                            <?php echo $form->hiddenField($valorpieza,'id_terminacion',array('value'=>'0')); ?>
                            <?php echo $form->hiddenField($valorpieza,'id_terminacion_arista',array('value'=>'0')); ?>
                            <?php echo $form->hiddenField($valorpieza,'id_terminacion_canto',array('value'=>'0')); ?>
                            <?php //echo $form->hiddenField($valorpieza,'id_pieza',array('value'=>'0')); ?>
                            <?php //Si el presupuesto ya está creado y se están añadiendo piezas, pongo el id del presupuesto
                            if( isset($presupuesto) ):
                                $idPresupuesto = $presupuesto->id;
                            else:
                            $idPresupuesto = 0;
                            endif;
                            echo $form->hiddenField($valorpieza,'id_presupuesto',array('value'=>$idPresupuesto)); ?>
                        </div>

                        <div class="row buttons">
                            <?php echo CHtml::submitButton($valorpieza->isNewRecord ? 'Añadir al presupuesto' : 'Añadir al presupuesto'); ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php $this->endWidget(); ?>
        </div><!--FIN PASO 5-->

    </div><!--FIN DIV CENTRAL-->

    <div class="span4"><!--DIV LATERAL - LISTA DE PIEZAS EN EL PRESUPUESTO-->

        

                
        <div id="piezasguardadas" class="span12"><!-- piezas guardadas -->
            <strong>Tu presupuesto:</strong>
            <?php if( isset($presupuesto) && $presupuesto->id != 0 ):
            $criteria=new CDbCriteria;                      
            $criteria->compare('id_presupuesto',$presupuesto->id);  
            $criteria->select = '*';
            $piezas = Valorpieza::model()->findAll($criteria);  
            $i = 1;?>

            <?php foreach ($piezas as $key => $pieza): ?>

            <div class="well span11">
                <div class="clearfix"></div> 
                <span id="azul">Constulta <?php echo $i ; $i = $i + 1;?>     </span>
                <div class="span12 cuadropedido">
                    <div class="span12"><font><strong>Material</strong></font></div>

                    <div class="span12">
                        <div class="span2">
                            <img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/mini/<?php echo $pieza->tipo->imagen; ?> "/>
                            <strong><font size="3"><?php echo str_replace(".",",",$pieza->tamanoreal); ?></font><?php if( $pieza->id_pieza == 1 ){echo "m<sup>2</sup>";}else{echo "m.";}?></strong>
                       
                        </div>
                        <div class="span10 matpresu">

                            <p><font size="3"><?php echo $pieza->tipo->nombre; ?>. <?php if( $pieza->tamano->id == 14 || $pieza->tamano->id == 15 ){echo '';}else{echo $pieza->numeropiezas;}?> <?php echo $pieza->pieza->nombre; ?>s de <?php echo $pieza->tamano->nombre; ?>. </font> </p>
                            
                            <table style="float:right">
                                <tr><td align="right" colspan="2"><em><font size="2">Descripción</font></em></td><td align="right" style="padding-right:5px"><em>Precio</em></td></tr>

                                <tr>
                                    <td align="right" colspan="2">

                                    <?php echo str_replace(".",",",$pieza->tamanoreal); ?> <?php if( $pieza->id_pieza == 1 ){echo "m<sup>2</sup>";}else{echo "m.";}?>
                                     a  
                                    <?php echo $pieza->preciounitario; ?> €/<?php if( $pieza->id_pieza == 1 ){echo "m<sup>2</sup>";}else{echo "m.";}?>
                                    </td>
                                    <td align="right" style="padding-right:5px">
                                     <?php
                                     $prema = round($pieza->tamanoreal * $pieza->preciounitario,2);
                                    $prema2 =number_format((float)$prema, 2, '.', '');
                                    echo str_replace(".",",",$prema2) . " € "; 

                                    
                                    ?>
                                    </td>
                                </tr>

                                <tr>
                                    <td align="right" colspan="2" >
                                        <em>Cara:</em> <?php echo $pieza->terminacion->nombre; ?>.
                                        <?php echo $pieza->terminacion->precio; ?> €/m<sup>2</sup>
                                    </td>
                                    <td align="right" style="padding-right:5px">
                                        <?php if( $pieza->id_pieza == 1 ){
                                            $termcara = round($pieza->terminacion->precio * $pieza->tamanoreal,2);
                                            $termcara2 =number_format((float)$termcara, 2, '.', '');
                                            echo str_replace(".",",",$termcara2) . " € ";
                                        }else{
                                            $termcara = round($pieza->terminacion->precio * $pieza->tamanoreal * $pieza->tamano->tamanopieza,2);
                                            $termcara2 =number_format((float)$termcara, 2, '.', '');
                                            echo str_replace(".",",",$termcara2) . " € "; 
                                        } ?>

                                                                    
                                    </td>
                                </tr>


                                 <tr>
                                    <td align="right" colspan="2" >
                                        <em>Canto</em> 
                                        <!--crear que si es largo libre no salga el tamaño-->
                                        <?php  if( $pieza->id_tipo_canto== 2 ){
                                            echo ' de ' . $pieza->tamano->cantocorto * 100 . 'cm.';

                                         }else{ echo ' de ' . $pieza->tamano->cantolargo * 100 . 'cm. ';
                                         } ?>
                                        <?php if( $pieza->id_pieza == 1 ){
                                         echo $pieza->terminacioncanto->nombre . ".";  
                                         }else{

                                            if( $pieza->terminacion->id == 32 ||  $pieza->terminacion->id == 17){
                                                echo "Pulido";
                                            }else{
                                                echo "Apomazado";
                                            }        

                                        }  ?> 
                                         <?php if( $pieza->id_pieza == 1 ){
                                         echo $pieza->terminacioncanto->precio . " €/m" ;
                                         }else{
                                         echo "";
                                        }  ?> 
                                    </td>

                                    <td align="right"  style="padding-right:5px">
                                             
                                         <?php if( $pieza->id_pieza == 1 ){

                                                    if( $pieza->id_tipo_canto== 2 ){
                                                        
                                                        $longitudcanto = $pieza->tamano->cantocorto;
                                                    }else{
                                                        $longitudcanto = $pieza->tamano->cantolargo;
                                                    }
                                            $termcanto = round($pieza->terminacioncanto->precio * $pieza->numeropiezas * $longitudcanto,2);
                                            $termcanto2 =number_format((float)$termcanto, 2, '.', '');
                                            echo str_replace(".",",",$termcanto2) . " € ";  


                                        }else{

                                              if( $pieza->id_tipo_canto== 2 ){
                                                        $longitudcanto = $pieza->tamano->cantocorto;
                                                    }else{
                                                        $longitudcanto = $pieza->tamano->cantolargo;

                                                    }
                                            $termcanto = round($pieza->terminacioncanto->precio * $pieza->numeropiezas * $longitudcanto,2);   


                                            echo "0 € ";
                                        }  ?> 
                                    </td>
                                </tr>

                                <tr>

                                    <td align="right" colspan="2" >
                                    <em>Arista:</em>
                                        <?php if( $pieza->id_pieza == 1 ){
                                         echo $pieza->terminacionarista->nombre . ".";  
                                         }else{
                                            echo "Bisel 1,5 mm";       

                                        }  ?> 
                                         <?php if( $pieza->id_pieza == 1 ){
                                         echo $pieza->terminacionarista->precio . " €/m<sup>2</sup>" ;
                                         }else{
                                         echo "";
                                        }  ?> 
                                    </td>

                                    <td align="right" style="padding-right:5px">
                                    <?php

                                        $termarista = round($pieza->terminacionarista->precio * $pieza->tamanoreal,2);
                                        $termarista2 =number_format((float)$termarista, 2, '.', '');
                                            
                                        
                                        ?>                      

                                        <?php if( $pieza->id_pieza == 1 ){
                                            echo str_replace(".",",",$termarista2) . " € ";  
                                        }else{
                                            echo "0 € ";
                                        } ?>
                                    </td>
                                </tr>


                               
                                <tr>
                                    <td align="right" colspan="2" >
                                       <strong> Precio material:</strong>
                                    </td>
                                    <td align="right" style="padding-right:5px; " >
                                    <strong>
                                        
                                        <?php $preciomat = round( $prema + $termcara + $termarista + $termcanto,2)?>
                                        <?php echo str_replace(".",",",$preciomat); ?> €
                                    </strong>
                                    </td>
                                </tr>
                            </table>
                                                           
                        </div>
                    </div>

                </div>


                <div class="span12" style="background-color:white; padding:5px; border:1px solid #134263; margin-bottom:10px;">
                <strong>Transporte</strong> (opcional)<br>
                    <table align="right">
                        <tr>
                            <td>
                                
                    Peso: <?php echo $pieza->peso; ?> Kg. De <?php echo $pieza->tipo->provincia->nombre ?>  a <?php echo $pieza->provincia->nombre; ?>. <?php echo $pieza->pales ?> pales.
                            </td>
                        <tr>
                         <tr>
                            <td align="right">
                            <strong>Precio transporte:
                          <?php
                            $pretrans = round($pieza->preciotransporte,2);
                           $pretrans2 =number_format((float)$pretrans, 2, '.', '');
                            echo str_replace(".",",",$pretrans2) . " € ";
                         ?>
                            </td>
                        <tr>

                    </table>
                                    
                </div>

                <div class="span12" align="right" style="background-color:white; padding:5px; border:1px solid #134263; margin-bottom:10px;">
                    <table align="right">
                        <tr>
                            <td align="right">

                     Material + transporte:
                      <?php $prematrans = round($preciomat + $pieza->preciotransporte ,2);
                           $prematrans2 =number_format((float)$prematrans, 2, '.', '');
                            echo str_replace(".",",",$prematrans2) . " € ";
                     ?></td>
                     </tr>

                        <tr>
                            <td align="right">
                     IVA:21%: <?php 
                            $preiva = round((21 * $prematrans / 100),2);
                           $preiva2 = number_format((float)$preiva, 2, '.', '');
                            echo str_replace(".",",",$preiva2) . " € ";
                            ?>
                        </td>
                        </tr>

                        <tr>
                            <td align="right">
                     <font size="3"><strong> Total: <?php $pretot = round($prematrans + $preiva,2);
                           $pretot2 =number_format((float)$pretot, 2, '.', '');
                            echo str_replace(".",",",$pretot2) . " € ";

                     ?></strong></font>
                     </td>
                     </tr>
                     </table>
                </div>
                <div class="clearfix"></div>
            </div>

            <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <?php if (isset($presupuesto) ): ?>
        <div class="span11">
        <strong>Finalizar presupuesto</strong><br>
        <p>Introduzca su nombre y su email. Le enviaremos un Pdf del presupuesto a su email. El teléfono es opcional, incluyalo si quiere que nos pongamos en contacto más rapidamente.</p></div>
        <div class="span4">
            

             <?php $form2=$this->beginWidget('CActiveForm', array(
            'id'=>'presupuesto-form',
            'action'=>Yii::app()->createUrl('presupuesto/generar/id/'.$presupuesto->id),
            'htmlOptions'=>array('target'=>'_blank'),
            'enableAjaxValidation'=>true,
            )); ?>

            <?php echo $form2->hiddenField($presupuesto,'id',array('value'=>$presupuesto->id)); ?>
            <?php echo $form2->labelEx($presupuesto,'email');
            echo $form2->textField($presupuesto,'email'); ?>

            <?php echo $form2->labelEx($presupuesto,'nombre');
            echo $form2->textField($presupuesto,'nombre'); ?>
            <?php echo $form2->labelEx($presupuesto,'telefono');
            echo $form2->textField($presupuesto,'telefono'); ?>
              <?php echo $form2->labelEx($presupuesto,'informacion adicional');
            echo $form2->textField($presupuesto,'informacion_adicional'); ?>


            <div id="botonpresu">
            <?php echo CHtml::submitButton('Generar Presupuesto'); ?>
            </div>
            <?php $this->endWidget(); ?>
            <?php endif; ?>
        </div>
    </div><!-- FIN LISTA DE PIEZAS EN EL PRESUPUESTO-->

</div><!-- /row -->

<div class="clearfix">&nbsp;</div>    
<!--SCRIPTS -->

<script type="text/javascript"> 
    $(document).ready(function(){
        $(".ejemplo_img").mouseenter(function() {
            $(".ejemplo_img_cont", this).stop().animate({ top:'51px' },{ queue:false, duration:300 });
        });
        $(".ejemplo_img").mouseleave(function() {
            $(".ejemplo_img_cont", this).stop().animate({ top:'70px' },{ queue:false, duration:300 });
        });
    });
</script>

<?php $url_action = CHtml::normalizeUrl(array('/presupuesto/ajaxTamanos')); ?>
<?php Yii::app()->getClientScript()->registerScript("tamano_precio",
    "
    $('#Valorpieza_id_pieza').change(function(){

        idtipo = $('#Valorpieza_id_tipo').val();
        idpieza = $('#Valorpieza_id_pieza').val();
        $.ajax({
            url: '$url_action', type: 'post', 
            data: { id_tipo: idtipo, id_pieza: idpieza },
            success: function(response){
                $('#tamanos').html(response);
            },
            error: function(e){
                $('#tamanos').html(e.responseText);
            }
        });

        $('#terminaciones').hide();
        $('#destino').hide();
        $('#cantidad').hide();
        $('#preciounitario').hide();
        $('#Valorpieza_id_tamano').val('');
        $('#Valorpieza_id_terminacion').val('');
        $('#tamanos').show('slow');
        $('.optiontamano').attr('style','display:none');
        $('.tamano'+$('#Valorpieza_id_pieza').val()).attr('style','display:block');
        if( $('#Valorpieza_id_pieza').val() == 1 ){
            $('#medida').html('m2.');
        }else{
            $('#medida').html('m.');
        }
        });  
    ",CClientScript::POS_LOAD)  ?>
<script>
$(document).ready(function($){

  /*  $.each($("[id^='Valorpieza_']"), function(index, obj){
        obj.value = "";
    });*/

    $("#Valorpieza_cantidad").val(" ");
    $("#Valorpieza_id_pieza").val("");
    $("#Valorpieza_id_tamano").val("");
    $("#Valorpieza_id_terminacion").val("");
    $("#Valorpieza_destino2").val("");
    $("#inicio").click(function(){
        $("#inicio").hide();
        $("#material").show('slow');

        //$(document).scrollTop( $("#piezas").offset().top );  
        //$("#Valorpieza_id_pieza").value("1");        
    });




    $(".tipos").fadeOut();
    $(".tipos").click(function(){
        $("#Valorpieza_id_tipo").val($(this).attr("id"));

         if(parseInt($("#Valorpieza_id_material").val()) == 2){
            $(".tipo2").attr("style","display:block; border:1px solid black;");
            $(".ejemplo_img_cont").attr("style","top: 70px;");
            $(".cont"+$(this).attr("id")).attr("style","top: 51px!important;");
            $(".ti"+$(this).attr("id")).attr("style","display:block; border-left:3px solid black; border-right:3px solid black;border-top:2px solid black;");
        }else{
              $(".tipo4").attr("style","display:block; border:1px solid black;");
            $(".ejemplo_img_cont").attr("style","top: 70px;");
            $(".cont"+$(this).attr("id")).attr("style","top: 51px!important;");
            $(".ti"+$(this).attr("id")).attr("style","display:block; border-left:3px solid black; border-right:3px solid black;");
        }
        
        


        $("#tipo_piezas").show('slow');
        $("#pregunta1").attr('style','display:none');
        $("#ok1").attr('style','display:block');
        //id="<?php echo $tipo->id; ?>
        //$(".tipos, .id").attr("style","border:1 px solid black;");
        $("#Valorpieza_id_pieza").val("");
        $("#Valorpieza_id_tamano").val("");
        $('#terminaciones').hide();
        $('#destino').hide();
        $('#cantidad').hide();
        $('#preuni').hide();
        //$(document).scrollTop( $("#tipo_piezas")().offset().top);
        //$('html, body').animate({scrollTop: $('#tipo_piezas').offset().top -70 }, 'slow');
        // $('#tipo_piezas').scrollView();
        //$("#Valorpieza_id_pieza").value("1");        
    });

    $("#destino").change(function(){
        $("#pregunta4").attr('style','display:none');
        $("#ok4").attr('style','display:block');
        $("#cantidad").show('slow');
        //console.log("cambio de destino");
        $("#Valorpieza_cantidad").display = "block";
        //$("#Valorpieza_cantidad").attr("iplaceholder","0");
        $("#Valorpieza_cantidad").keyup(function(){
        if(parseInt($("#Valorpieza_cantidad").val()) >0){
            $("#boton").show('slow');    
        }else{
            $("#boton").fadeOut('slow');
        }
        });
    });

  
    

});
</script>

<script type="text/javascript">

    function vermaterial( idmaterial ){
       $("#Valorpieza_id_material").val(idmaterial);

        if(parseInt($("#Valorpieza_id_material").val()) == 2){
            $(".color2").attr("style","background-color:#134263;color:white;");
            $(".color4").attr("style","background-color:white;color:black;");
        }else{
             $(".color4").attr("style","background-color:#134263;color:white;");
            $(".color2").attr("style","background-color:white;color:black");
        }

        

       $(".tipos").show('slow');
       $(".tipos").attr("style","display:none;");
       $(".tipo"+idmaterial).attr("style","display:block; border:1px solid black;");
       $('#tipo_piezas').hide();
        $('#terminaciones').hide();
        $('#destino').hide();
        $('#cantidad').hide();
        $('#preuni').hide();
        $("#Valorpieza_cantidad").val(" ");
        $("#Valorpieza_id_pieza").val("");
        $("#Valorpieza_id_tamano").val("");
        $("#Valorpieza_id_terminacion").val("");
   }
</script>
