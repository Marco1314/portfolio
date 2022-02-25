<?php function textimage($txt,$img, $headlineType, $top, $headline) {?>
    <?php if($top == "Ja" && $headline) { ?><<?php echo $headlineType ?> class="textimage__headline" style="margin-top:100px; margin-bottom:0px;"><?php echo $headline ?></<?php echo $headlineType ?>><?php } ?>
    <div class="textimage">
        <div class="textimage__imageContainer">
            <img src="<?php echo $img; ?>" alt="" class="textimage__image">
        </div>
        <div class="textimage__textContainer"><p class="textimage__text"><?php if($top != "Ja"){ ?> <<?php echo $headlineType ?>><?php echo $headline ?></<?php echo $headlineType ?>/> <?php } ?><?php echo $txt; ?></p></div>
    </div>
<?php } ?>  