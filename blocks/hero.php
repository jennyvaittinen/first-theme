<?php 
/**
 * Name: Hero
 * Author: Jenny Vaittinen
 * Date: 2021/11/04
 *  */ 
?>

<style>
    #hero {
        height: 500px;
        width: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        text-align: center;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 2rem 0;
    }



    .hero-text {
        color: #fff;
        font-size: 3rem;
        font-weight: 700;
        margin: 0 auto;

    }
</style>
</div>
</div>
</div>
<section id="hero" style="background-image:  linear-gradient(
      rgba(0, 0, 0, 0.3),
      rgba(0, 0, 0, 0.3)
    ), url('<?php the_field("kuva"); ?>')">
    <span class="hero-text"><?php echo $text; ?> </span>

</section>
<div class="container">
    <div class="row">
    <div class="col-10 offset-lg-1">