<?php include('_inc/header.inc.php');?>

    <div  xmlns="http://www.w3.org/1999/html">
        <div id="slider" class="nivoSlider"> 
            <img src="images/banner1.jpg" data-thumb="images/banner1.jpg" alt="" /> 
            <img src="images/banner2.jpg" data-thumb="images/banner2.png" alt="" />
        </div>
        <div class="teste-hmtl">
            <h1>TESTE DE HTML E CSS</h1>
            <p> Quesitos de Avaliação:</p>
            <ul>
                <li>Organização do Código (quanto mais limpo melhor);</li>
                <li>Nível de Detalhismo (quanto mais identico melhor);</li>
                <li>Tempo de desenvolvimento (Seja sincero quanto ao tempo gasto).</li>
            </ul>
            <div class="img-teste">
                <a href="#"><img src="<?php echo URL_BASE ?>/images/foto-teste.jpg" alt="" class="img-responsive"></a>
            </div>
        </div>
        <br>
        <br>
        <div class="box-destaque">
            <h1>BOX DESTAQUE</h1>
            <span class="img-01">
                <img src="<?php echo URL_BASE ?>/images/box1.jpg" alt="" class="img1">
                <a href="https://www.idealtrends.com.br/" target="_blank"><p class="C1">Click Aqui 01</p></a>
            </span>
            <span class="img-02">
               <img src="<?php echo URL_BASE ?>/images/box2.jpg" alt="" class="img2">
                <a href="https://www.idealtrends.com.br/" target="_blank"><p class="C2">Click Aqui 02</p></a>
            </span>
            <span class="img-03">
                <img src="<?php echo URL_BASE ?>/images/box3.jpg" alt="" class="img3">
                <a href="https://www.idealtrends.com.br/" target="_blank"><p class="C3">Click Aqui 03</p></a>
            </span>
             <span class="img-04">
                 <img src="<?php echo URL_BASE ?>/images/box4.jpg" alt="" class="img4">
                 <a href="https://www.idealtrends.com.br/" target="_blank"><p class="C4">Click Aqui 04</p></a>
             </span>
        </div>
    </div>

<?php include('_inc/footer.inc.php'); ?>