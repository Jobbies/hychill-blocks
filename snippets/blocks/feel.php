<?php if ($block->text()->isNotEmpty()): ?>
  <div class="grid grid-cols-3 w-full">
    <div><?= $block->text() ?></div>
    <div><?= $block->text() ?></div>
    <div><?= $block->text() ?></div>
  </div>
<?php endif; ?>
