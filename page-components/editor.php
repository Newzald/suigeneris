<?php
$posttags = get_the_tags();
if ($posttags) {
    foreach($posttags as $tag) {
        $position = $tag->name . ' ';
        break;
    }
}
?>
<div class="col-sm-6">
    <div class="card border-dark">
        <div class="card-header"><?php if ($position){echo $position;} ?></div>
        <div class="card-body">
            <h5 class="card-title"><?php the_title(); ?></h5>
            <p class="card-text"><?php the_content(); ?></p>
      </div>
    </div>
</div>