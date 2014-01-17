    <div class='box'>
    <h4>All modules</h4>
    <p>All CrZ modules.</p>
    <ul>
    <?php foreach($modules as $module): ?>
      <li><a href='<?=create_url("module/view/{$module['name']}")?>'><?=$module['name']?></a></li>
    <?php endforeach; ?>
    </ul>
    </div>


    <div class='box'>
    <h4>CrZ core</h4>
    <p>CrZ core modules.</p>
    <ul>
    <?php foreach($modules as $module): ?>
      <?php if($module['isCrZCore']): ?>
      <li><a href='<?=create_url("module/view/{$module['name']}")?>'><?=$module['name']?></a></li>
      <?php endif; ?>
    <?php endforeach; ?>
    </ul>
    </div>


    <div class='box'>
    <h4>CrZ CMF</h4>
    <p>CrZ Content Management Framework (CMF) modules.</p>
    <ul>
    <?php foreach($modules as $module): ?>
      <?php if($module['isCrZCMF']): ?>
      <li><a href='<?=create_url("module/view/{$module['name']}")?>'><?=$module['name']?></a></li>
      <?php endif; ?>
    <?php endforeach; ?>
    </ul>
    </div>


    <div class='box'>
    <h4>Models</h4>
    <p>A class is considered a model if its name starts with CM.</p>
    <ul>
    <?php foreach($modules as $module): ?>
      <?php if($module['isModel']): ?>
      <li><a href='<?=create_url("module/view/{$module['name']}")?>'><?=$module['name']?></a></li>
      <?php endif; ?>
    <?php endforeach; ?>
    </ul>
    </div>


    <div class='box'>
    <h4>Controllers</h4>
    <p>Implements interface <code>IController</code>.</p>
    <ul>
    <?php foreach($modules as $module): ?>
      <?php if($module['isController']): ?>
      <li><a href='<?=create_url("module/view/{$module['name']}")?>'><?=$module['name']?></a></li>
      <?php endif; ?>
    <?php endforeach; ?>
    </ul>
    </div>


    <div class='box'>
<h4>Manageable module</h4>
<p>Implements interface <code>IModule</code>.</p>
<ul>
<?php foreach($modules as $module): ?>
<?php if($module['isManageable']): ?>
<li><a href='<?=create_url("module/view/{$module['name']}")?>'><?=$module['name']?></a></li>
<?php endif; ?>
<?php endforeach; ?>
</ul>
</div>


    <div class='box'>
    <h4>More modules</h4>
    <p>Modules that does not implement any specific CrZ interface.</p>
    <ul>
    <?php foreach($modules as $module): ?>
      <?php if(!($module['isController'] || $module['isCrZCore'] || $module['isCrZCMF'])): ?>
      <li><?=$module['name']?></li>
      <?php endif; ?>
    <?php endforeach; ?>
    </ul>
    </div>