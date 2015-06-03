<?php /* Smarty version 2.6.18, created on 2010-09-18 09:39:48
         compiled from /var/www/vhosts/freshaircreatives.com/subdomains/beta7/httpdocs/data/themes/default/admin/forms/tab_edit_view_tab3.tpl */ ?>
            <div class="pad_bottom">
              <?php echo $this->_tpl_vars['LANG']['text_edit_tab_summary']; ?>

            </div>

            <table cellspacing="0" cellpadding="0">
            <tr>
              <td>

                <table class="list_table" cellpadding="0" cellspacing="1" id="tab_options_table" style="width: 250px;">
                  <tr>
                    <th width="40"><?php echo $this->_tpl_vars['LANG']['word_tab']; ?>
</th>
                    <th><?php echo $this->_tpl_vars['LANG']['phrase_tab_label']; ?>
</th>
                  </tr>
                  <tr>
                    <td align="center" class="bold">1</td>
                    <td><input type="text" name="tab_label1" id="tab_label1" class="tab_label" value="<?php echo $this->_tpl_vars['view_tabs'][1]['tab_label']; ?>
" style="width:98%" maxlength="50" /></td>
                  </tr>
                  <tr>
                    <td align="center" class="bold">2</td>
                    <td><input type="text" name="tab_label2" id="tab_label2" class="tab_label" value="<?php echo $this->_tpl_vars['view_tabs'][2]['tab_label']; ?>
" style="width:98%" maxlength="50" /></td>
                  </tr>
                  <tr>
                    <td align="center" class="bold">3</td>
                    <td><input type="text" name="tab_label3" id="tab_label3" class="tab_label" value="<?php echo $this->_tpl_vars['view_tabs'][3]['tab_label']; ?>
" style="width:98%" maxlength="50" /></td>
                  </tr>
                  <tr>
                    <td align="center" class="bold">4</td>
                    <td><input type="text" name="tab_label4" id="tab_label4" class="tab_label" value="<?php echo $this->_tpl_vars['view_tabs'][4]['tab_label']; ?>
" style="width:98%" maxlength="50" /></td>
                  </tr>
                  <tr>
                    <td align="center" class="bold">5</td>
                    <td><input type="text" name="tab_label5" id="tab_label5" class="tab_label" value="<?php echo $this->_tpl_vars['view_tabs'][5]['tab_label']; ?>
" style="width:98%" maxlength="50" /></td>
                  </tr>
                  <tr>
                    <td align="center" class="bold">6</td>
                    <td><input type="text" name="tab_label6" id="tab_label6" class="tab_label" value="<?php echo $this->_tpl_vars['view_tabs'][6]['tab_label']; ?>
" style="width:98%" maxlength="50" /></td>
                  </tr>
                </table>
              </td>
              <td width="10"> </td>
              <td valign="top"><input type="button" value="<?php echo $this->_tpl_vars['LANG']['phrase_remove_tabs']; ?>
" onclick="view_ns.remove_tabs()" /></td>
            </tr>
            </table>