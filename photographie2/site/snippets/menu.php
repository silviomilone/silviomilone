<nav role="navigation">

  <ul class="menu cf">
	 <li>
		 <h2>
			 <a href="<?php echo url() ?>" alt="home">PHOTOGRAPHIE</a>
		</h2>
	</li>
    <?php foreach($pages->visible() as $p): ?>
    <li>
      <a  class="<?php e($p->isOpen(), ' active ') ?>" href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>

      <?php if($p->hasVisibleChildren()): ?>
      <ul class="submenu">
        <?php foreach($p->children()->visible() as $p): ?>
        <li>
          <a href="<?php echo $p->url() ?>"  class="<?php e($p->isOpen(), ' active ') ?>" ><?php echo $p->title()->html() ?></a>
        </li>
        <?php endforeach ?>
      </ul>
      <?php endif ?>

    </li>
    <?php endforeach ?>
  </ul>

</nav>
