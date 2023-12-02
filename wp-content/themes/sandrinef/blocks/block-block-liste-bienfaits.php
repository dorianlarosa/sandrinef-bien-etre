<div class="block">
    <?php $list = preg_split("/\r\n|\n|\r/",block_value('liste-bienfaits')); ?>
    <ul class="list-bienfaits">
        <?php foreach ($list as $key => $value) : ?>
            <li class="list-bienfaits__item"><?php echo $value; ?></li>
        <?php endforeach; ?>
    </ul>
</div>