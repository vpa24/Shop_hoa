<?php
/* Smarty version 3.1.30, created on 2017-12-17 12:05:00
  from "C:\wamp64\www\shop_hoa-masterrr\views\chi_tiet_hoa\v_thong_tin_hoa.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a365d6c4e28e4_68395268',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40f8167caf2fb495206296cd10f0300f6171d18a' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-masterrr\\views\\chi_tiet_hoa\\v_thong_tin_hoa.tpl',
      1 => 1513453820,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a365d6c4e28e4_68395268 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="short-description hidden-xs">
    <div class="magic-category clearfix">
        <div class="block-title-tabs clearfix">
            <ul class="magictabs">
                <li class="item active loaded">
                    <span class="title" data-toggle="tab" href="#menu1">Thông tin chi tiết</span>
                </li>
                <li class="item" >
                    <span class="title" data-toggle="tab" href="#menu2">Thông tin kỹ thuật</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="tab-content">
        <div id="menu1" class="tab-pane fade in active">
            <p><?php echo $_smarty_tpl->tpl_vars['hoa']->value->NoiDung;?>
</p>
        </div>
        <div id="menu2" class="tab-pane fade in">
            <div class="box-collateral box-additional active">
                <table class="data-table" id="product-attribute-specs-table">
                    <colgroup>
                        <col width="25%"><col>
                    </colgroup>
                    <tbody>
                        <tr class="first odd">
                            <th class="label">Vật liệu hoa</th>
                            <td class="data"><?php echo $_smarty_tpl->tpl_vars['hoa']->value->ThanhPhan;?>
</td>
                        </tr>
                        <tr class="even">
                            <th class="label">Loại hoa</th>
                            <td class="data"><?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenLoai;?>
</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php }
}
