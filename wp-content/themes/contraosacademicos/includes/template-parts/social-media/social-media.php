<?php
$redes = get_field_object('redes_sociais','mjv_options');
?>
<div class="mjv-social-midias">
    <ul class="midias-items">
        <?php if($redes) : foreach ($redes['value'] as $key => $value) : ?>
        <li class="midias-item">
            <a href="<?php echo $value; ?>" target="_blank" rel="noopener noreferrer" class="midias-link">
              <i class="icon mjv-icon-social-media-<?php echo $key; ?>"></i>
            </a>
        </li>
        <?php endforeach; endif; ?>
    </ul>
</div>
