<?php

/**
 * Name: Projektit
 * Author: Jenny Vaittinen
 * Date: 2021/11/22
 *  */
?>
<style>
    .personnel-block {
        margin: 3rem 0;
    }
    .person img {
        width: 100%;
        display: block;
    }
    .person ul {
        padding: 0;
    }
    .info {
        margin: 1rem 0 3rem 0;
        list-style: none;
    }
    @media (max-width: 991px) {
        .person img {
            width: 80%;
            margin: auto;
        }
        .person ul {
            text-align: center;
        }
    }
</style>
<section class="personnel-block" id="henkilosto">
    <h2 class="pb-5"><?php the_field("otsikko") ?></h2>
    <div class="row">
        <?php if (have_rows("henkilo")) {
            while (have_rows("henkilo")) {
                the_row();
                $image = get_sub_field("kuva"); 
                $link = get_sub_field("linkki") ?>
                <div class="col-lg-3 col-sm-6 person">
                   <a href="<?php echo $link ?>"> <img src="<?php echo $image['url']; ?>">
                    <ul class="info">
                        <li><strong><?php the_sub_field("nimi"); ?> </strong></li>
                        <li><?php the_sub_field("titteli"); ?></li>
                        <li><?php the_sub_field("sposti"); ?></li>
                        <li><?php the_sub_field("puhelin"); ?></li>
                    </ul>
                </div>
            <?php }
        } ?>
    </div>
</section>