<?php foreach ($elementsForDisplay as $setName => $setElements): ?>
<div class="element-set">
    <?php if ($showElementSetHeadings): ?>
    <h2><?php echo html_escape(__($setName)); ?></h2>
    <?php endif; ?>
    <?php foreach ($setElements as $elementName => $elementInfo): ?>
    <dl id="<?php echo text_to_id(html_escape("$setName $elementName")); ?>" class="element">
        <dt><?php echo html_escape(__($elementName)); ?></dt>
        <?php foreach ($elementInfo['texts'] as $text): ?>
            <dd class="element-text"><?php echo $text; ?></dd>
        <?php endforeach; ?>
    </dl><!-- end element -->
    <?php endforeach; ?>
</div><!-- end element-set -->
<?php endforeach;
