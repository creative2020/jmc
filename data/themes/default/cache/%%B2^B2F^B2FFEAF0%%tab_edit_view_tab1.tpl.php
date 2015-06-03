<?php /* Smarty version 2.6.18, created on 2010-09-29 15:46:02
         compiled from /hsphere/local/home/mcclelland/johnmcclelland.com/data/themes/default/admin/forms/tab_edit_view_tab1.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'form_fields_dropdown', '/hsphere/local/home/mcclelland/johnmcclelland.com/data/themes/default/admin/forms/tab_edit_view_tab1.tpl', 20, false),)), $this); ?>

            <table cellpadding="1" cellspacing="1" width="100%">
            <tr>
              <td class="pad_left"><?php echo $this->_tpl_vars['LANG']['phrase_view_name']; ?>
</td>
              <td>
                <input type="text" maxlength="100" style="width: 300px;" name="view_name" value="<?php echo $this->_tpl_vars['view_info']['view_name']; ?>
" />
              </td>
            </tr>
            <tr>
              <td class="pad_left" width="125"><?php echo $this->_tpl_vars['LANG']['phrase_submissions_per_page']; ?>
</td>
              <td><input type="text" size="3" name="num_submissions_per_page" value="<?php echo $this->_tpl_vars['view_info']['num_submissions_per_page']; ?>
" /></td>
            </tr>
            <tr>
              <td class="pad_left"><?php echo $this->_tpl_vars['LANG']['phrase_default_sort_order']; ?>
</td>
              <td>

                <table cellpadding="0" cellspacing="0">
                <tr>
                  <td>
                    <?php echo smarty_function_form_fields_dropdown(array('name_id' => 'default_sort_field','form_id' => $this->_tpl_vars['form_id'],'view_id' => $this->_tpl_vars['view_id'],'default' => $this->_tpl_vars['view_info']['default_sort_field']), $this);?>

                  </td>
                  <td>
                    <select name="default_sort_field_order">
                      <option value="asc" <?php if ($this->_tpl_vars['view_info']['default_sort_field_order'] == 'asc'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['LANG']['word_asc']; ?>
</option>
                      <option value="desc" <?php if ($this->_tpl_vars['view_info']['default_sort_field_order'] == 'desc'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['LANG']['word_desc']; ?>
</option>
                    </select>
                  </td>
                </tr>
                </table>

              </td>
            </tr>
            <tr>
              <td class="pad_left" width="160" valign="top"><?php echo $this->_tpl_vars['LANG']['word_access']; ?>
</td>
              <td>

                <table cellspacing="1" cellpadding="0" >
                <tr>
                  <td>
                    <input type="radio" name="access_type" id="at1" value="admin" <?php if ($this->_tpl_vars['view_info']['access_type'] == 'admin'): ?>checked<?php endif; ?>
                      onclick="page_ns.toggle_view_type(this.value)" />
                      <label for="at1"><?php echo $this->_tpl_vars['LANG']['phrase_admin_only']; ?>
</label>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div style="float:right;margin-left: 20px">
                      <input type="button" id="client_omit_list_button"
                        value="Manage Client Omit List<?php if ($this->_tpl_vars['view_info']['access_type'] == 'public'): ?> (<?php echo $this->_tpl_vars['num_clients_on_omit_list']; ?>
)<?php endif; ?>"
                        onclick="window.location='edit.php?page=public_view_omit_list&form_id=<?php echo $this->_tpl_vars['form_id']; ?>
&view_id=<?php echo $this->_tpl_vars['view_id']; ?>
'"
                        <?php if ($this->_tpl_vars['view_info']['access_type'] != 'public'): ?>disabled<?php endif; ?> /><br />
                    </div>

                    <input type="radio" name="access_type" id="at2" value="public" <?php if ($this->_tpl_vars['view_info']['access_type'] == 'public'): ?>checked<?php endif; ?>
                      onclick="page_ns.toggle_view_type(this.value)" />
                      <label for="at2"><?php echo $this->_tpl_vars['LANG']['word_public']; ?>
 <span class="light_grey"><?php echo $this->_tpl_vars['LANG']['phrase_all_clients_have_access']; ?>
</span></label>
                  </td>
                </tr>
                <tr>
                  <td>
                    <input type="radio" name="access_type" id="at3" value="private" <?php if ($this->_tpl_vars['view_info']['access_type'] == 'private'): ?>checked<?php endif; ?>
                      onclick="page_ns.toggle_view_type(this.value)" />
                      <label for="at3"><?php echo $this->_tpl_vars['LANG']['word_private']; ?>
 <span class="light_grey"><?php echo $this->_tpl_vars['LANG']['phrase_only_specific_clients_have_access']; ?>
</span></label>
                  </td>
                </tr>
                </table>

                <div id="custom_clients" <?php if ($this->_tpl_vars['view_info']['access_type'] != 'private'): ?>style="display:none"<?php endif; ?> class="margin_top">

                  <table cellpadding="1" cellspacing="0" class="list_table">
                  <tr>
                    <td class="medium_grey pad_left_small"><?php echo $this->_tpl_vars['LANG']['phrase_available_clients']; ?>
</td>
                    <td></td>
                    <td class="medium_grey pad_left_small"><?php echo $this->_tpl_vars['LANG']['phrase_selected_clients']; ?>
</td>
                  </tr>
                  <tr>
                    <td>

                      <select name="available_user_ids[]" multiple size="4" style="width: 180px">
                        <?php echo $this->_tpl_vars['available_users']; ?>

                      </select>

                    </td>
                    <td align="center" valign="center" width="100">
                      <input type="button" value="<?php echo $this->_tpl_vars['LANG']['word_add_uc_rightarrow']; ?>
"
                        onclick="ft.move_options(this.form['available_user_ids[]'], this.form['selected_user_ids[]']);" /><br />
                      <input type="button" value="<?php echo $this->_tpl_vars['LANG']['word_remove_uc_leftarrow']; ?>
"
                        onclick="ft.move_options(this.form['selected_user_ids[]'], this.form['available_user_ids[]']);" />
                    </td>
                    <td>
                      <select name="selected_user_ids[]" multiple size="4" style="width: 180px">
                        <?php echo $this->_tpl_vars['selected_users']; ?>

                      </select>
                    </td>
                  </tr>
                  </table>

                </div>

              </td>
            </tr>
            <tr>
              <td class="pad_left"><?php echo $this->_tpl_vars['LANG']['phrase_may_add_submissions']; ?>
</td>
              <td valign="top">
                <input type="radio" name="may_add_submissions" value="yes" id="cmas1"
                  <?php if ($this->_tpl_vars['view_info']['may_add_submissions'] == 'yes'): ?>checked<?php endif; ?> />
                  <label for="cmas1"><?php echo $this->_tpl_vars['LANG']['word_yes']; ?>
</label>
                <input type="radio" name="may_add_submissions" value="no" id="cmas2"
                  <?php if ($this->_tpl_vars['view_info']['may_add_submissions'] == 'no'): ?>checked<?php endif; ?> />
                  <label for="cmas2"><?php echo $this->_tpl_vars['LANG']['word_no']; ?>
</label>
              </td>
            </tr>
            <tr>
              <td class="pad_left"><?php echo $this->_tpl_vars['LANG']['phrase_may_delete_view_submissions']; ?>
</td>
              <td valign="top">
                <input type="radio" name="may_delete_submissions" value="yes" id="cmds1"
                  <?php if ($this->_tpl_vars['view_info']['may_delete_submissions'] == 'yes'): ?>checked<?php endif; ?> />
                  <label for="cmds1"><?php echo $this->_tpl_vars['LANG']['word_yes']; ?>
</label>
                <input type="radio" name="may_delete_submissions" value="no" id="cmds2"
                  <?php if ($this->_tpl_vars['view_info']['may_delete_submissions'] == 'no'): ?>checked<?php endif; ?> />
                  <label for="cmds2"><?php echo $this->_tpl_vars['LANG']['word_no']; ?>
</label>
              </td>
            </tr>
            </table>