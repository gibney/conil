<?php
/*
Basic table.php file for testing
1. Create table.yml in site/bluepints/blocks directory
2. Create table.php in snippets/blocks directory
3. Add the block into the template where it is to be used:
fields:
  blocks:
    fieldsets:
      - heading
      - text
      - list
      - line
      - table
      - image
      - gallery
      - video
      - code
      - markdown
It will then appear as an option in the Panel.
*/
$rows = $block->rows()->toStructure();
if ($rows->isNotEmpty()) :
?>
    <table class="block-table">
        <tr>
            <th>Description</th>
            <th>Price</th>
        </tr>
        <?php foreach ($rows as $row) : ?>
            <tr>
                <td><?= $row->description()->html() ?></td>
                <td><?= number_format($row->price()->toFloat(), 2, null, '.') ?></td>
            </tr>
        <?php endforeach ?>
    </table>
<?php endif; ?>