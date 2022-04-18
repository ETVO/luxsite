<?php

/**
 * Cards
 * 
 * @package luxsite
 */

?>

<div class="cards">
    <div class="inner container-fluid">
        <?php foreach ($servicos as $i => $servico) : ?>
            <div class="block text-center" data-aos="fade-down" data-aos-delay="<?php echo $i * 2; ?>00"> 
                <div class="icon">
                    <span class="bi bi-<?php echo $servico['icon'] ?>" style="color: <?php echo $servico['color'] ?>"></span>
                </div>
                <h4 class="title fs-5"><?php echo $servico['title']; ?></h4>
                <div class="text">
                    <?php echo $servico['short_desc']; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>