<?php
  $referentes = array();
  $obras = array();
  foreach ($subjectRelations as $subjectRelation){
    $subject_relation = $subjectRelation['relation_text'];
    if ($subject_relation == 'dcterms:references'){
      $id = $subjectRelation['object_item_id'];
      $item = get_record_by_id('item', $id);
      array_push($referentes, $item);
    }
  }
  foreach ($objectRelations as $objectRelation){
    $object_relation = $objectRelation['relation_text'];
    if($object_relation == 'dcterms:references'){
      $id = $objectRelation['subject_item_id'];
      $item = get_record_by_id('item', $id);
      array_push($obras, $item);
    }
  }
?>

<?php if($referentes): ?>
<div class="referentes">
  <h2>Referentes</h2>
  <ul>
    <?php foreach($referentes as $referente): ?>
      <?php $itemTitle = metadata($referente, array('Dublin Core', 'Title'))?>
      <?php $itemFile = $referente->getFile(); ?>
      <li>
        <?php if($itemFile): ?>
          <a href=" <?php echo url('items/show/' . $referente->id ); ?> "> <?php echo file_markup($itemFile, array('imageSize' => 'square_thumbnail', 'linkToFile'=>false)); ?>  </a>
        <?php endif; ?>
        <p><?php echo $itemTitle; ?></p>
      </li>

    <?php endforeach ?>
  </ul>
</div>
<?php endif; ?>


<?php if($obras): ?>
<div class="referentes">
  <h2>Obras</h2>
  <ul>
    <?php foreach($obras as $obra): ?>
      <?php $itemTitle = metadata($obra, array('Dublin Core', 'Title'))?>
      <?php $itemFile = $obra->getFile(); ?>
      <li>
        <?php if($itemFile): ?>
          <a href=" <?php echo url('items/show/' . $obra->id ); ?> "> <?php echo file_markup($itemFile, array('imageSize' => 'square_thumbnail', 'linkToFile'=>false)); ?>  </a>
      <?php endif; ?>
        <p><?php echo $itemTitle; ?></p>
      </li>

    <?php endforeach ?>
  </ul>
</div>
<?php endif; ?>
