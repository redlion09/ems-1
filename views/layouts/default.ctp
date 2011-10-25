<?php
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.console.libs.templates.skel.views.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php __('CakePHP: the rapid development php framework:'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $scripts_for_layout;
                echo $javascript->link(array('jquery-1.6.4.min'));
	?>
</head>
<body>
        <div id="header">
            <div id="header-container">
                <div id="branding">
                </div>
                <?php 
                if(!$this->action == 'login'){
                    echo $this->element('navigation'); 
                }
                ?>
            </div>
                <h1><?php echo $this->Html->link(__('CakePHP: the rapid development php framework', true), 'http://cakephp.org'); ?></h1>
        </div>
	<div id="container">
		<div id="content" class="shadow">
                        <?php if($loggedIn): ?>
                            <div id="user-nav">
                                <?php echo sprintf("%s, %s %s [%s] %s", $userInfo['last_name'][0], $userInfo['first_name'][0], $userInfo['middle_name'][0], $this->Html->link($userInfo['username'][0], array('controller'=>'users','action'=>'profile')), $this->Html->link('logout', array('controller'=>'users','action'=>'logout'))); ?>
                            </div>
                        <?php endif; ?>
			<?php echo $this->Session->flash(); ?>

			<?php echo $content_for_layout; ?>

		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt'=> __('CakePHP: the rapid development php framework', true), 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>