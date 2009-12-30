<?php 
    require_once('install.php');
    global $install;
    
    $header = $install->_include_html_header();
    print $header;
 ?>
<body>
<div id="ushahidi_login_container">
    <div id="ushahidi_login_logo"><img src="../media/img/admin/logo_login.gif" /></div>
    <div id="ushahidi_login" class="clearfix">
    <form method="POST" name="frm_install" action="process.php" style="line-height: 100%; margin-top: 0; margin-bottom: 0;">  
    	<?php if ($form->num_errors > 0 ) { ?>
       		<div class="feedback error"><a class="btn-close" href="#">x</a>
           		<p><?php echo Kohana::lang('installer.error_summary');?>:</p>
	   				<ul id="error-list">
                    	<?php
	   				    	print ( $form->error('htaccess_perm') == "" ) ? '' : 
							"<li>".$form->error('htaccess_perm')."</li>";
							
							print ( $form->error('config_folder_perm') == "" ) ? '' : 
							"<li>".$form->error('config_folder_perm')."</li>";
							
							print ( $form->error('config_file_perm') == "" ) ? '' : 
							"<li>".$form->error('config_file_perm')."</li>";
							
							print ( $form->error('cache_perm') == "" ) ? '' : 
							"<li>".$form->error('cache_perm')."</li>";
							
							print ( $form->error('logs_perm') == "" ) ? '' : 
							"<li>".$form->error('logs_perm')."</li>";
							
							print ( $form->error('uploads_perm') == "" ) ? '' : 
							"<li>".$form->error('uploads_perm')."</li>";
							
	   				    ?>
					</ul>
			</div>
    	<?php } ?>
    <div class="feedback info"> 
    	<p><?php echo Kohana::lang('installer.summary.text_1');?>.</p>
    	<p><?php echo Kohana::lang('installer.summary.text_2');?></p>
            <ul>
                <li>application/config/config.php</li>
                <li>application/config</li>
                <li>application/cache</li>
                <li>application/logs</li>
                <li>media/uploads</li>
                <li>.htaccess</li>
            </ul> 
    </div>
		
	<p><?php echo Kohana::lang('installer.summary.text_3');?>.</p>
	<div class="two-col tc-left">
        <h3>Database <a href="http://wiki.ushahidi.com/doku.php?id=a_brief_word_on_databases" target="_blank">what's this?</a></h3>
        <ol>	
            <li>Database name</li>
            <li>Database username</li>
            <li>Database password</li>
            <li>Database host</li>
        </ol>
        
        <h3>General</h3>
        <ol>	
            <li>Site name &amp; tagline</li>
            <li>Site Email Address</li>
        </ol>
    </div>
    <div class="two-col tc-right last">
    	<h3>Mail Server</h3>
        <ol>
            <li>Site alert email address</li>
            <li>Mail Server Username</li>
            <li>Mail Server Password</li>
            <li>Mail Server Port</li>
            <li>Mail Server Host</li>
            <li>Mail Server Type</li>
        </ol>
        <h3>Map</h3>
        <ol>	
            <li>Map Provider</li>
            <li>API Key</li>
        </ol>
	</div>	
	
    
    
	
	<p><a class="button" href="index.php">&larr; <?php echo Kohana::lang('ui_main.go_back');?></a>&nbsp;&nbsp;
	<input type="submit" id="advanced_perm_pre_check" name="advanced_perm_pre_check" value="Let's get started!" class="button"  /></p>
	</div>
	</form>
</div>
</body>
</html>
