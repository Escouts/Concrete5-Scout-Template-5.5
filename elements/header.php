<?php   defined('C5_EXECUTE') or die(_("Access Denied.")); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/2000/REC-xhtml1-20000126/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
	
<link rel="stylesheet" media="screen" type="text/css" href="<?php  echo $this->getStyleSheet('main.css')?>" />
<link rel="stylesheet" media="screen" type="text/css" href="<?php  echo $this->getStyleSheet('typography.css')?>" />

<?php   Loader::element('header_required'); ?>

</head>
<body>
			
<div id="page">
	<div id="header">
		<div id="headerin" class="full">
			<div id="logo" class="center"><img src="<?=$this->getThemePath()?>/images/escoutweb.gif"></div>
			<div id="top-right" class="right">
			<?php  
			$a = new GlobalArea('Top Right');
			$a->display($c);
			?></div>
		</div>
		<div id="nav-out"<?php   if ($c->isEditMode()) { ?>style="margin-bottom: 40px; "<?php   } ?>>
		<div id="nav" class="full">
			<?php  
			$a = new GlobalArea('Header Nav');
			$a->display($c);
			?>
		</div>
		</div>
	</div>		

	<div id="header-area" class="full">
		<?php  			
		$ah = new Area('Header');
		$ah->display($c);			
		?>	
	</div>