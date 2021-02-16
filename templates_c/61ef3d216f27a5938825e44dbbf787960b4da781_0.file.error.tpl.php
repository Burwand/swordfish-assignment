<?php
/* Smarty version 3.1.38, created on 2021-02-16 07:49:22
  from '/var/www/html/Swordfish/templates/error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_602b790225a221_40118668',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61ef3d216f27a5938825e44dbbf787960b4da781' => 
    array (
      0 => '/var/www/html/Swordfish/templates/error.tpl',
      1 => 1613461533,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./layout/header.tpl' => 1,
    'file:./layout/navbar.tpl' => 1,
    'file:./layout/footer.tpl' => 1,
  ),
),false)) {
function content_602b790225a221_40118668 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:./layout/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main role="main" class="container">



</main>

<?php $_smarty_tpl->_subTemplateRender("file:./layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
