<?php /* Smarty version 2.6.18, created on 2010-09-29 15:46:02
         compiled from /hsphere/local/home/mcclelland/johnmcclelland.com/data/themes/default/admin/forms/tab_edit_view.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'upper', '/hsphere/local/home/mcclelland/johnmcclelland.com/data/themes/default/admin/forms/tab_edit_view.tpl', 7, false),array('function', 'ft_include', '/hsphere/local/home/mcclelland/johnmcclelland.com/data/themes/default/admin/forms/tab_edit_view.tpl', 10, false),)), $this); ?>
    <div class="previous_page_icon">
      <a href="edit.php?page=views"><img src="<?php echo $this->_tpl_vars['images_url']; ?>
/up.jpg" title="<?php echo $this->_tpl_vars['LANG']['phrase_previous_page']; ?>
" alt="<?php echo $this->_tpl_vars['LANG']['phrase_previous_page']; ?>
" border="0" /></a>
    </div>

    <div class="underline margin_top_large">
      <div style="float:right; padding-right: 20px; margin-top: -4px;"><?php echo $this->_tpl_vars['previous_view_link']; ?>
 &nbsp; <?php echo $this->_tpl_vars['next_view_link']; ?>
</div>
      <span class="subtitle"><?php echo ((is_array($_tmp=$this->_tpl_vars['LANG']['phrase_edit_view'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
:</span> <span class="green"><?php echo $this->_tpl_vars['view_info']['view_name']; ?>
</span>
    </div>

    <?php echo smarty_function_ft_include(array('file' => 'messages.tpl'), $this);?>


    <form method="post" id="edit_view_form" action="<?php echo $this->_tpl_vars['same_page']; ?>
" onsubmit="return view_ns.process_form(this)">
      <input type="hidden" name="view_id" value="<?php echo $this->_tpl_vars['view_id']; ?>
" />

      <div class="inner_tab_set">
        <div style="position:relative; height:20px">
          <div style="left:0%; width:25%;" id="inner_tab1" <?php if ($this->_tpl_vars['edit_view_tab'] == 1): ?>class="inner_tab_selected"<?php else: ?>class="inner_tab_unselected"<?php endif; ?>>
            <a href="#" onclick="return ft.change_inner_tab(1, 4, 'edit_view_tab')"><?php echo $this->_tpl_vars['LANG']['word_main']; ?>
</a>
          </div>
          <div style="left:25%; width:25%" id="inner_tab2" <?php if ($this->_tpl_vars['edit_view_tab'] == 2): ?>class="inner_tab_selected"<?php else: ?>class="inner_tab_unselected"<?php endif; ?>>
            <a href="#" onclick="return ft.change_inner_tab(2, 4, 'edit_view_tab')"><?php echo $this->_tpl_vars['LANG']['word_fields']; ?>
</a>
          </div>
          <div style="left:50%; width:25%" id="inner_tab3" <?php if ($this->_tpl_vars['edit_view_tab'] == 3): ?>class="inner_tab_selected"<?php else: ?>class="inner_tab_unselected"<?php endif; ?>>
            <a href="#" onclick="return ft.change_inner_tab(3, 4, 'edit_view_tab')"><?php echo $this->_tpl_vars['LANG']['word_tabs']; ?>
</a>
          </div>
          <div style="left:75%; width:25%;" id="inner_tab4" <?php if ($this->_tpl_vars['edit_view_tab'] == 4): ?>class="inner_tab_selected"<?php else: ?>class="inner_tab_unselected"<?php endif; ?>>
            <a href="#" onclick="return ft.change_inner_tab(4, 4, 'edit_view_tab')"><?php echo $this->_tpl_vars['LANG']['word_filters']; ?>
</a>
          </div>
        </div>

        <div class="inner_tab_content">
          <div id="inner_tab_content1" <?php if ($this->_tpl_vars['edit_view_tab'] != 1): ?>style="display:none"<?php endif; ?>>
            <?php echo smarty_function_ft_include(array('file' => "admin/forms/tab_edit_view_tab1.tpl"), $this);?>

          </div>

          <div id="inner_tab_content2" <?php if ($this->_tpl_vars['edit_view_tab'] != 2): ?>style="display:none"<?php endif; ?>>
            <?php echo smarty_function_ft_include(array('file' => "admin/forms/tab_edit_view_tab2.tpl"), $this);?>

          </div>

          <div id="inner_tab_content3" <?php if ($this->_tpl_vars['edit_view_tab'] != 3): ?>style="display:none"<?php endif; ?>>
            <?php echo smarty_function_ft_include(array('file' => "admin/forms/tab_edit_view_tab3.tpl"), $this);?>

          </div>

          <div id="inner_tab_content4" <?php if ($this->_tpl_vars['edit_view_tab'] != 4): ?>style="display:none"<?php endif; ?>>
            <?php echo smarty_function_ft_include(array('file' => "admin/forms/tab_edit_view_tab4.tpl"), $this);?>

          </div>
        </div>

      </div>

      <p>
        <input type="submit" name="update_view" value="<?php echo $this->_tpl_vars['LANG']['phrase_update_view']; ?>
" />
      </p>

    </form>