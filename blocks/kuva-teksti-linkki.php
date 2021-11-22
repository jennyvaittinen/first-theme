<?php 
/**
 * Name: Kuva-teksti-linkki
 * Author: Jenny Vaittinen
 * Date: 2021/11/22
 *  */ 
?>

<style>
    .block-tall {
        margin: 40px 0;
    }
    .block-tall .col-4 img {
        width:100%;
        display: block;
    }
    .block-tall .image-col {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .block-tall .text-link p {
        font-size: 20px;
        line-height: 1.7;
    }
    .block-tall .text-link p:last-child {
        margin: 0;
    }
    .block-tall h2 {
        margin-bottom: 30px;
        font-size: 34px;
    }
    .block-tall img {
        width: 100%;
        max-width: 400px;
        margin: auto;
    }
    .block-tall a {
        margin-top: 2rem;
    }

    a.button.green-button {
        color: white;
    }

    @media screen and (max-width: 991px) {
        .block-tall {
            margin: 30px 0;
        }
        .block-tall h2 {
            margin: 20px 0;
            font-size: 30px;
        }
        .block-tall .text-link p {
            font-size: 18px;
        }
        .block-tall a {
            margin: 20px auto;
        }
    }
</style>

<section class="block-tall">
    <div class="row justify-content-center">
        <?php $image = get_field("kuva");
        $asemointi = get_field("asemointi");

        if($asemointi == 'left') { ?>
            <div class="<?php if (get_field('leveys') == "levea") { echo "col-lg-5"; } else { echo "col-lg-4"; } ?> image-col">
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
            </div>
            <div class="<?php if (get_field('leveys') == "levea") { echo "col-lg-7"; } else { echo "col-lg-6"; } ?> text-link">
                <?php if (get_field('otsikko')) { ?>
                    <h2><?php the_field("otsikko") ?></h2>
                <?php } 
                the_field("teksti");
                $linkki = get_field("linkki");
                if ($linkki) { ?>
                    <a class="button green-button" href="<?php echo $linkki["url"]; ?>" target="_blank"><?php echo $linkki["title"]; ?></a>
                <?php } ?>
            </div>
        <?php } else { ?>
            <div class="<?php if (get_field('leveys') == "levea") { echo "col-lg-7"; } else { echo "col-lg-6"; } ?> text-link">
                <?php if (get_field('otsikko')) { ?>
                    <h2><?php the_field("otsikko") ?></h2>
                <?php } 
                the_field("teksti"); 
                $linkki = get_field("linkki");
                if ($linkki) { ?>
                    <a class="button green-button" href="<?php echo $linkki["url"]; ?>" target="_blank"><?php echo $linkki["title"]; ?></a>
                <?php } ?>
            </div>
            <div class="<?php if (get_field('leveys') == "levea") { echo "col-lg-5"; } else { echo "col-lg-4"; } ?> image-col">
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
            </div> 
        <?php } ?>
    </div>
</section> 
