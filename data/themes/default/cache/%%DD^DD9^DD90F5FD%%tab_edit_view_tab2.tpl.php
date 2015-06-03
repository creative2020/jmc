<?php /* Smarty version 2.6.18, created on 2010-09-18 09:39:48
         compiled from /var/www/vhosts/freshaircreatives.com/subdomains/beta7/httpdocs/data/themes/default/admin/forms/tab_edit_view_tab2.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'upper', '/var/www/vhosts/freshaircreatives.com/subdomains/beta7/httpdocs/data/themes/default/admin/forms/tab_edit_view_tab2.tpl', 22, false),)), $this); ?>
            <div style="float:right">
              <?php echo $this->_tpl_vars['assign_rows_to_tabs_html']; ?>

              <input type="button" id="assign_fields_button" value="<?php echo $this->_tpl_vars['LANG']['word_assign']; ?>
" onclick="view_ns.assign_field_tabs()" />
            </div>

            <div class="pad_bottom">
              <input type="checkbox" name="may_edit_submissions" id="cmes" value="yes"
                onchange="view_ns.toggle_editable_fields(this.checked)"
              <?php if ($this->_tpl_vars['view_info']['may_edit_submissions'] == 'yes'): ?>checked<?php endif; ?> />
              <label for="cmes"><?php echo $this->_tpl_vars['LANG']['phrase_allow_fields_edited']; ?>
</label>
            </div>

            <table id="view_fields_table" class="list_table" width="100%" cellpadding="0" cellspacing="1">
            <tbody><tr style="height: 20px;">
              <th width="40"><?php echo $this->_tpl_vars['LANG']['word_order']; ?>
</th>
              <th width="60"><?php echo $this->_tpl_vars['LANG']['word_column']; ?>
</th>
              <th width="60"><?php echo $this->_tpl_vars['LANG']['word_sortable']; ?>
</th>
              <th width="60"><?php echo $this->_tpl_vars['LANG']['word_editable']; ?>
</th>
              <th width="60"><?php echo $this->_tpl_vars['LANG']['word_searchable']; ?>
</th>
              <th width="200"><?php echo $this->_tpl_vars['LANG']['phrase_display_text']; ?>
</th>
              <th><?php echo $this->_tpl_vars['LANG']['word_tab']; ?>
</th>
              <th width="60" class="del"><?php echo ((is_array($_tmp=$this->_tpl_vars['LANG']['word_remove'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
</th>
            </tr>

                        <?php $this->assign('tabindex_increment', 1000); ?>

            <?php $_from = $this->_tpl_vars['view_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['row'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['row']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['field']):
        $this->_foreach['row']['iteration']++;
?>
              <?php $this->assign('field_id', $this->_tpl_vars['field']['field_id']); ?>
              <?php $this->assign('index', ($this->_foreach['row']['iteration']-1)); ?>
              <?php $this->assign('count', $this->_foreach['row']['iteration']); ?>

              <?php $this->assign('col1_tabindex', $this->_tpl_vars['tabindex_increment']+$this->_tpl_vars['count']); ?>
              <?php $this->assign('col2_tabindex', $this->_tpl_vars['tabindex_increment']*2+$this->_tpl_vars['count']); ?>
              <?php $this->assign('col3_tabindex', $this->_tpl_vars['tabindex_increment']*3+$this->_tpl_vars['count']); ?>
              <?php $this->assign('col4_tabindex', $this->_tpl_vars['tabindex_increment']*4+$this->_tpl_vars['count']); ?>
              <?php $this->assign('col5_tabindex', $this->_tpl_vars['tabindex_increment']*5+$this->_tpl_vars['count']); ?>
              <?php $this->assign('col6_tabindex', $this->_tpl_vars['tabindex_increment']*6+$this->_tpl_vars['count']); ?>

              <tr id="field_row_<?php echo $this->_tpl_vars['field_id']; ?>
">
                <td class="greyCell" align="center">
                  <input type="text" name="field_<?php echo $this->_tpl_vars['field_id']; ?>
_order" id="field_<?php echo $this->_tpl_vars['field_id']; ?>
_order" style="width: 30px;" value="<?php echo $this->_tpl_vars['count']; ?>
" tabindex="<?php echo $this->_tpl_vars['col1_tabindex']; ?>
" />
                </td>
                <td align="center">
                  <input type="checkbox" name="field_<?php echo $this->_tpl_vars['field_id']; ?>
_is_column" id="field_<?php echo $this->_tpl_vars['field_id']; ?>
_is_column" onclick="view_ns.toggle_sortable_field(<?php echo $this->_tpl_vars['field_id']; ?>
, this.checked)"
									  <?php if ($this->_tpl_vars['field']['is_column'] == 'yes'): ?>checked<?php endif; ?> tabindex="<?php echo $this->_tpl_vars['col2_tabindex']; ?>
" />
                </td>
                <td align="center">
                  <div id="sortable_<?php echo $this->_tpl_vars['field_id']; ?>
" <?php if ($this->_tpl_vars['field']['is_column'] == 'no'): ?>style="display: none;"<?php endif; ?>>
                    <input type="checkbox" name="field_<?php echo $this->_tpl_vars['field_id']; ?>
_is_sortable" <?php if ($this->_tpl_vars['field']['is_sortable'] == 'yes'): ?>checked<?php endif; ?> tabindex="<?php echo $this->_tpl_vars['col3_tabindex']; ?>
" />
                  </div>
                </td>
                <td align="center">
                                    <?php if ($this->_tpl_vars['field']['col_name'] != 'submission_id' && $this->_tpl_vars['field']['col_name'] != 'last_modified_date'): ?>
                    <input type="checkbox" name="field_<?php echo $this->_tpl_vars['field_id']; ?>
_is_editable" id="field_<?php echo $this->_tpl_vars['field_id']; ?>
_is_editable" <?php if ($this->_tpl_vars['field']['is_editable'] == 'yes'): ?>checked<?php endif; ?>
                      <?php if ($this->_tpl_vars['view_info']['may_edit_submissions'] == 'no'): ?>disabled<?php endif; ?> tabindex="<?php echo $this->_tpl_vars['col4_tabindex']; ?>
" />
                  <?php endif; ?>
                </td>
                <td align="center">
                  <input type="checkbox" name="field_<?php echo $this->_tpl_vars['field_id']; ?>
_is_searchable" <?php if ($this->_tpl_vars['field']['is_searchable'] == 'yes'): ?>checked<?php endif; ?> tabindex="<?php echo $this->_tpl_vars['col5_tabindex']; ?>
" />
                </td>
                <td class="pad_left_small"><?php echo $this->_tpl_vars['field']['field_title']; ?>
</td>
                <td>
                  <select name="field_<?php echo $this->_tpl_vars['field_id']; ?>
_tab" id="field_<?php echo $this->_tpl_vars['field_id']; ?>
_tab" tabindex="<?php echo $this->_tpl_vars['col6_tabindex']; ?>
">
                    <?php $_from = $this->_tpl_vars['view_tabs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['tab_row'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['tab_row']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['view_tab']):
        $this->_foreach['tab_row']['iteration']++;
?>
                      <?php $this->assign('counter', $this->_foreach['tab_row']['iteration']); ?>

                                            <?php if ($this->_tpl_vars['view_tab']['tab_label']): ?>
                        <option value="<?php echo $this->_tpl_vars['counter']; ?>
"<?php if ($this->_tpl_vars['counter'] == $this->_tpl_vars['field']['tab_number']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['view_tab']['tab_label']; ?>
</option>
                      <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?>
                    <?php if (! $this->_tpl_vars['has_tabs']): ?><option value=""><?php echo $this->_tpl_vars['LANG']['validation_no_tabs_defined']; ?>
</option><?php endif; ?>
                  </select>
                </td>
                <td class="del"><a href="#" onclick="return view_ns.remove_view_field(<?php echo $this->_tpl_vars['field_id']; ?>
)"><?php echo ((is_array($_tmp=$this->_tpl_vars['LANG']['word_remove'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
</a></td>
              </tr>
            <?php endforeach; endif; unset($_from); ?>
            </tbody></table>

                        <script type="text/javascript">
            <?php $_from = $this->_tpl_vars['view_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['row'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['row']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['field']):
        $this->_foreach['row']['iteration']++;
?>
              view_ns.field_ids.push(<?php echo $this->_tpl_vars['field']['field_id']; ?>
);
            <?php endforeach; endif; unset($_from); ?>
            </script>

            <input type="hidden" name="field_ids" id="field_ids" value="" />

            <div class="pad_top_large">
              <div style="float:left" class="pad_right">
              <select id="available_fields" multiple size="5">
                  <?php echo $this->_tpl_vars['available_fields']; ?>

                </select>
              </div>

              <div class="pad_bottom_large">
                <input type="button" id="add_field_button" value="<?php echo $this->_tpl_vars['LANG']['phrase_add_field_sp']; ?>
" <?php if ($this->_tpl_vars['no_available_fields']): ?>disabled style="color: #999999"<?php endif; ?>
                  onclick="view_ns.add_view_fields('available_fields');" />
              </div>

              <input type="button" id="add_field_button" value="<?php echo $this->_tpl_vars['LANG']['phrase_select_all']; ?>
" onclick="ft.select_all_multi_dropdown_options('available_fields');" /><br />
              <input type="button" id="add_field_button" value="<?php echo $this->_tpl_vars['LANG']['phrase_unselect_all']; ?>
" onclick="ft.unselect_all_multi_dropdown_options('available_fields');" />
            </div>
