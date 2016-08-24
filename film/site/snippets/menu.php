<nav role="navigation">	  
	<nav class="menuicon" >
        <li>
		<a class="donate" href="<?php echo url() ?>">
      <img src="<?php echo url('assets/images/donate.png') ?>" alt="" />
    </a>
		</li>
		 <li>
		<a class="contact" href="mailto:silviomilone@gmail.com" ?>
      <img src="<?php echo url('assets/images/contact.png') ?>" alt="" />
    </a>
		</li>
         <li class="parent">
			 
      <img src="<?php echo url('assets/images/plus.png') ?>" alt="" />			  
			 
<ul class="submenuicon">
		  <li>
		  <a class="facebook" href="https://www.facebook.com/Silvio.Milone">
          <img src="<?php echo url('assets/images/facebook.png') ?>" alt="" />
          </a>
		  </li>
		<li>
		  <a class="linkedin" href="https://fr.linkedin.com/in/silvio-milone-9a6025120">
          <img src="<?php echo url('assets/images/linkedin.png') ?>" alt="" />
          </a>
		  </li>
</ul>
		</li>
	</nav>
	<nav class="nav-1 nav-collapse">


  <ul class="menu cf">
	
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
