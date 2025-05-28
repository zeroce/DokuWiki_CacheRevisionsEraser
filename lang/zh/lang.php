<?php
/**
 * Chinese language file
 *
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     你的名字 <your@email.com>
 */

$lang['encoding']                      = 'utf-8';
$lang['direction']                     = 'ltr';
$lang['utf8supportrequired']           = false;
$lang['language']                      = '简体中文'; // 仅用于调试
$lang['menu']                          = 'Erase cache/revisions';
$lang['title']                         = '缓存/历史版本清理器';
$lang['desc']                          = '清除wiki的缓存和/或旧的历史版本';
$lang['successcache']                  = '操作成功';
$lang['successrevisions']              = '操作成功';
$lang['failedcache']                   = '操作出错，请检查文件权限。';
$lang['failedrevisions']               = '操作出错，请检查文件权限。';
$lang['deletefile']                    = '已删除文件';
$lang['deletefileerr']                 = '无法删除文件';
$lang['deletedir']                     = '已移除目录';
$lang['deletedirerr']                  = '无法移除目录';
$lang['erasecachebtn']                 = '开始（清除缓存）';
$lang['eraserevisionsbtn']             = '开始（清除历史版本）';
$lang['askcache']                      = '你确定要继续吗？';
$lang['askrevisions']                  = '你确定要继续吗？';
$lang['cachedesc']                     = '[[ 缓存选项 ]]';
$lang['revisionsdesc']                 = '[[ 历史版本选项 ]]';
$lang['revisionswarn']                 = '注意：一旦历史版本被清除，将无法恢复。';
$lang['backbtn']                       = '返回';
$lang['cachedisabled']                 = '清除所有缓存已被禁用';
$lang['revisdisabled']                 = '清除所有历史版本已被禁用';
$lang['extdesc_i']                     = '.i 文件（反向链接及其他）';
$lang['extdesc_xhtml']                 = '.xhtml 文件（页面的缓存HTML）';
$lang['extdesc_js']                    = '.js 文件（缓存的Javascript）';
$lang['extdesc_css']                   = '.css 文件（缓存的CSS样式表）';
$lang['extdesc_mediaP']                = '.media.* 文件（缓存的媒体文件）';
$lang['extdesc_UNK']                   = '所有其他未知格式';
$lang['delindexingdesc']               = '索引搜索文件（不推荐）';
$lang['delmetadesc']                   = '历史版本元数据（meta/*）';
$lang['deloldlockdesc']                = '旧的丢失页面锁（*.lock）';
$lang['lockexpirein']                  = '锁将在以下时间后过期';
$lang['seconds']                       = '秒';
$lang['version']                       = '版本';
$lang['delrevisdesc']                  = '历史版本文件（attic/*）';
$lang['pathclasserror']                = '无法检测路径类型';
$lang['analyze_confmissingfailed']     = '错误：缺少或不兼容的配置文件';
$lang['analyze_confrevisionfailed']    = '错误：配置文件不兼容';
$lang['analyze_cachedirfailed']        = '错误：插件无法获取缓存目录<br />请用调试器检查 cachedir 变量';
$lang['analyze_revisdirfailed']        = '错误：插件无法获取历史版本目录<br />请用调试器检查 revisdir 变量';
$lang['analyze_pagesdirfailed']        = '错误：插件无法获取页面目录<br />请用调试器检查 pagesdir 变量';
$lang['analyze_metadirfailed']         = '错误：插件无法获取元数据目录<br />请用调试器检查 metadir 变量';
$lang['analyze_locksdirfailed']        = '错误：插件无法获取锁目录<br />请用调试器检查 locksdir 变量';
$lang['analyze_checkreadme']           = '请查阅 readme.txt 文件或插件官网获取更多信息';
$lang['analyze_creatingdefconfs']      = '正在创建配置文件...';
$lang['analyze_creatingdefconfs_x']    = '失败（插件目录不允许写入）';
$lang['analyze_creatingdefconfs_o']    = '成功（请重新分析）';
$lang['yesbtn']                        = '是';
$lang['nobtn']                         = '否';
$lang['reanalyzebtn']                  = '重新分析';
$lang['cache_word']                    = '缓存';
$lang['lock_word']                     = '锁';
$lang['meta_word']                     = '元数据';
$lang['oldrevis_word']                 = '历史版本';
$lang['delxcacheclass']                = '显示缓存类型';
$lang['delxrevisclass']                = '显示历史版本类型';
$lang['delxdebugmode']                 = '调试模式';
$lang['delxverbose']                   = '清理时的报告级别';
$lang['wordb_enable']                  = '启用';
$lang['wordb_option']                  = '选项';
$lang['wordb_optiondesc']              = '选项说明';
$lang['wordb_allowuserchag']           = '允许更改';
$lang['wordb_checkedasdef']            = '默认勾选';
$lang['createconfbtn']                 = '创建 config.php';
$lang['searchyounewversionurl']        = '访问缓存与历史版本清理器官网（新窗口打开）';
$lang['outputinfo_text']               = '报告：';
$lang['outputinfo_lvl0']               = '静默';
$lang['outputinfo_lvl1']               = '仅文件名';
$lang['outputinfo_lvl2']               = '全部';
$lang['numfilesdel']                   = '已删除文件数：';
$lang['numdirsdel']                    = '已删除目录数：';
$lang['cfgdesc_menusort']              = '在管理菜单中的位置（默认：67）';

?>