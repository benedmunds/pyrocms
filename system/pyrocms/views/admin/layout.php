<!DOCTYPE html>
<html>
<head>
	<title><?php echo lang('cp_admin_title').' - '.$template['title'];?></title>
	<?php echo $template['partials']['metadata']; ?>
</head>

<body>
<div id="page-wrapper">
	<section id="sidebar">
<?php echo $template['partials']['header']; ?>
<?php echo $template['partials']['navigation']; ?>
		<div id="lang-select">
		<form action="<?php echo current_url(); ?>" id="change_language" method="get">
				<select name="lang" onchange="this.form.submit();">
					<option value="">-- Select Language --</option>
			<?php foreach($this->config->item('supported_languages') as $key => $lang): ?>
		    		<option value="<?php echo $key; ?>" <?php echo CURRENT_LANGUAGE == $key ? 'selected="selected"' : ''; ?>>
						<?php echo $lang['name']; ?>
					</option>
        	<?php endforeach; ?>
	        	</select>

		</form>
		</div>
		
		<footer>
			Copyright &copy; 2010 PyroCMS<br />
			Version <?php echo CMS_VERSION; ?><br />
			Rendered in {elapsed_time} sec. using {memory_usage}.
		</footer>
	</section>
	<section id="content-wrapper">
		<header id="page-header">
			<h1><?php echo $module_data['name'] ? anchor('admin/' . strtolower($module_data['name']), $module_data['name']) : lang('cp_admin_home_title'); ?></h1>
			<p><?php echo $module_data['description'] ? $module_data['description'] : ''; ?></p>
		</header>

			<?php if(!empty($template['partials']['shortcuts'])): ?>
				<?php echo $template['partials']['shortcuts']; ?>
			<?php endif; ?>
			
			<?php $this->load->view('admin/partials/notices') ?>

		<div id="content">
			<?php echo $template['body']; ?>
		</div>
	</section>
</div>
</body>
</html>
