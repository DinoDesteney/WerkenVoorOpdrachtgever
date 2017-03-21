<?php
/* Smarty version 3.1.31, created on 2017-03-21 13:11:07
  from "E:\xampp\htdocs\leerjaar2\WerkVoorOpdrachtGever\smarty-3.1.31\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58d1185bc7bcd8_80930054',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15b376741ca5da63527f7acefea43c20f9a49bb7' => 
    array (
      0 => 'E:\\xampp\\htdocs\\leerjaar2\\WerkVoorOpdrachtGever\\smarty-3.1.31\\templates\\index.tpl',
      1 => 1490096938,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../css/style.css' => 1,
    'file:head.tpl' => 1,
    'file:header.tpl' => 1,
    'file:body.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_58d1185bc7bcd8_80930054 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender('file:../css/style.css', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:body.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
