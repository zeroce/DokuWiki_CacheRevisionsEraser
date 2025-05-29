<?php
/**
 * Traditional Chinese language file
 *
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     你的名字 <your@email.com>
 */

$lang['encoding']                      = 'utf-8';
$lang['direction']                     = 'ltr';
$lang['utf8supportrequired']           = false;
$lang['language']                      = '繁體中文'; // 僅用於除錯
$lang['menu']                          = 'Erase cache/revisions';
$lang['title']                         = '快取/歷史版本清理器';
$lang['desc']                          = '清除wiki的快取和/或舊的歷史版本';
$lang['successcache']                  = '操作成功';
$lang['successrevisions']              = '操作成功';
$lang['failedcache']                   = '操作出錯，請檢查檔案權限。';
$lang['failedrevisions']               = '操作出錯，請檢查檔案權限。';
$lang['deletefile']                    = '已刪除檔案';
$lang['deletefileerr']                 = '無法刪除檔案';
$lang['deletedir']                     = '已移除目錄';
$lang['deletedirerr']                  = '無法移除目錄';
$lang['erasecachebtn']                 = '開始（清除快取）';
$lang['eraserevisionsbtn']             = '開始（清除歷史版本）';
$lang['askcache']                      = '你確定要繼續嗎？';
$lang['askrevisions']                  = '你確定要繼續嗎？';
$lang['cachedesc']                     = '[[ 快取選項 ]]';
$lang['revisionsdesc']                 = '[[ 歷史版本選項 ]]';
$lang['revisionswarn']                 = '注意：一旦歷史版本被清除，將無法恢復。';
$lang['backbtn']                       = '返回';
$lang['cachedisabled']                 = '清除所有快取已被停用';
$lang['revisdisabled']                 = '清除所有歷史版本已被停用';
$lang['extdesc_repo']                  = '.repo 檔案（缓存插件仓库信息的序列化数据檔案）';
$lang['extdesc_gz']                    = '.gz 檔案（其他檔案的压缩檔案件）';
$lang['extdesc_i']                     = '.i 檔案（反向連結及其他）';
$lang['extdesc_xhtml']                 = '.xhtml 檔案（頁面的快取HTML）';
$lang['extdesc_js']                    = '.js 檔案（快取的Javascript）';
$lang['extdesc_css']                   = '.css 檔案（快取的CSS樣式表）';
$lang['extdesc_mediaP']                = '.media.* 檔案（快取的媒體檔案）';
$lang['extdesc_UNK']                   = '所有其他未知格式';
$lang['delindexingdesc']               = '索引搜尋檔案（不建議）';
$lang['delmetadesc']                   = '歷史版本中繼資料（meta/*）';
$lang['deloldlockdesc']                = '舊的遺失頁面鎖（*.lock）';
$lang['lockexpirein']                  = '鎖將在以下時間後過期';
$lang['seconds']                       = '秒';
$lang['version']                       = '版本';
$lang['delrevisdesc']                  = '歷史版本檔案（attic/*）';
$lang['pathclasserror']                = '無法偵測路徑類型';
$lang['analyze_confmissingfailed']     = '錯誤：缺少或不相容的設定檔';
$lang['analyze_confrevisionfailed']    = '錯誤：設定檔不相容';
$lang['analyze_cachedirfailed']        = '錯誤：外掛無法取得快取目錄<br />請用除錯器檢查 cachedir 變數';
$lang['analyze_revisdirfailed']        = '錯誤：外掛無法取得歷史版本目錄<br />請用除錯器檢查 revisdir 變數';
$lang['analyze_pagesdirfailed']        = '錯誤：外掛無法取得頁面目錄<br />請用除錯器檢查 pagesdir 變數';
$lang['analyze_metadirfailed']         = '錯誤：外掛無法取得中繼資料目錄<br />請用除錯器檢查 metadir 變數';
$lang['analyze_locksdirfailed']        = '錯誤：外掛無法取得鎖目錄<br />請用除錯器檢查 locksdir 變數';
$lang['analyze_checkreadme']           = '請查閱 readme.txt 檔案或外掛官網取得更多資訊';
$lang['analyze_creatingdefconfs']      = '正在建立設定檔...';
$lang['analyze_creatingdefconfs_x']    = '失敗（外掛目錄不允許寫入）';
$lang['analyze_creatingdefconfs_o']    = '成功（請重新分析）';
$lang['yesbtn']                        = '是';
$lang['nobtn']                         = '否';
$lang['reanalyzebtn']                  = '重新分析';
$lang['cache_word']                    = '快取';
$lang['lock_word']                     = '鎖';
$lang['meta_word']                     = '中繼資料';
$lang['oldrevis_word']                 = '歷史版本';
$lang['delxcacheclass']                = '顯示快取類型';
$lang['delxrevisclass']                = '顯示歷史版本類型';
$lang['delxdebugmode']                 = '除錯模式';
$lang['delxverbose']                   = '清理時的報告等級';
$lang['wordb_enable']                  = '啟用';
$lang['wordb_option']                  = '選項';
$lang['wordb_optiondesc']              = '選項說明';
$lang['wordb_allowuserchag']           = '允許更改';
$lang['wordb_checkedasdef']            = '預設勾選';
$lang['createconfbtn']                 = '建立 config.php';
$lang['searchyounewversionurl']        = '造訪快取與歷史版本清理器官網（新視窗開啟）';
$lang['outputinfo_text']               = '報告：';
$lang['outputinfo_lvl0']               = '靜默';
$lang['outputinfo_lvl1']               = '僅檔案名稱';
$lang['outputinfo_lvl2']               = '全部';
$lang['numfilesdel']                   = '已刪除檔案數：';
$lang['numdirsdel']                    = '已刪除目錄數：';
$lang['cfgdesc_menusort']              = '在管理選單中的位置（預設：67）';

?>