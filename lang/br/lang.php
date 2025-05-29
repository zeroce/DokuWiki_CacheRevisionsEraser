<?php
/**
 * Brasil (Portuguese) language file
 *
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     JustBurn <justburner@armail.pt>
 */

$lang['encoding']                      = 'utf-8';
$lang['direction']                     = 'ltr';
$lang['utf8supportrequired']           = false;
$lang['language']                      = 'Brasil'; // Debug only, leave it untranslated
$lang['menu']                          = 'Eliminar cache/todas a revis�es';
$lang['title']                         = 'Eliminador da Cache/Revis�es';
$lang['desc']                          = 'Elimina Dokuwiki\'s Cache e/ou todas as revis�es';
$lang['successcache']                  = 'Opera��o eliminada com sucesso';
$lang['successrevisions']              = 'Opera��o eliminada com sucesso';
$lang['failedcache']                   = 'Ouve problemas durante a opera��o, verifique as permiss�es dos ficheiros.';
$lang['failedrevisions']               = 'Ouve problemas durante a opera��o, verifique as permiss�es dos ficheiros.';
$lang['deletefile']                    = 'Ficheiro eliminado';
$lang['deletefileerr']                 = 'Elimina��o do ficheiro falhado';
$lang['deletedir']                     = 'Diret�rio removido';
$lang['deletedirerr']                  = 'Elimina��o do diret�rio falhado';
$lang['erasecachebtn']                 = 'Iniciar (cache)';
$lang['eraserevisionsbtn']             = 'Iniciar (revis�es antigas)';
$lang['askcache']                      = 'Tem a certeza que quer prosseguir?';
$lang['askrevisions']                  = 'Tem a certeza que quer prosseguir?';
$lang['cachedesc']                     = '[[ Op��es da cache ]]';
$lang['revisionsdesc']                 = '[[ Op��es das revis�es antigas ]]';
$lang['revisionswarn']                 = 'NOTE: Quando todas a revis�es estiverem eliminadas; n�o existe maneira de as restaurar.';
$lang['backbtn']                       = 'Voltar atr�s';
$lang['cachedisabled']                 = 'Elimina��o de toda a cache foi desactivada';
$lang['revisdisabled']                 = 'Elimina��o de toda as revis�es antigas foi desactivada';
$lang['extdesc_repo']                  = 'Ficheiros .repo (ficheiros de dados serializados do reposit�rio de plugins da cache)';
$lang['extdesc_gz']                    = 'Ficheiros .gz (ficheiros comprimidos de outros ficheiros)';
$lang['extdesc_i']                     = 'Ficheiros .i (Backlinks e mais??)';
$lang['extdesc_xhtml']                 = 'Ficheiros .xhtml (forma HTML de uma p�gina wiki cachada)';
$lang['extdesc_js']                    = 'Ficheiros .js (Javascript cachado)';
$lang['extdesc_css']                   = 'Ficheiros .css (CSS-Sheet cachado)';
$lang['extdesc_mediaP']                = 'Ficheiros .media.* (ficheiros multimedia cachado)';
$lang['extdesc_UNK']                   = 'Todos os outros formatos desconhecidos';
$lang['delindexingdesc']               = 'Ficheiros Indexed-search (n�o recomendado)';
$lang['delmetadesc']                   = 'Hist�ria de revis�es antigas (meta/*)';
$lang['deloldlockdesc']                = 'Velhas trancas de p�ginas perdidas (*.lock)';
$lang['lockexpirein']                  = 'Tranca ir� expirar em';
$lang['seconds']                       = 'segundos';
$lang['version']                       = 'vers�o';
$lang['delrevisdesc']                  = 'Ficheiros da revis�es antigas (attic/*)';
$lang['pathclasserror']                = 'Impossivel detectar a classe do caminho';
$lang['analyze_confmissingfailed']     = 'ERRO: Ficheiro de configura��es em falta ou incompativel';
$lang['analyze_confrevisionfailed']    = 'ERRO: Ficheiro de configura��es incompativel';
$lang['analyze_cachedirfailed']        = 'ERRO: Plug-in falhou a obter o diret�rio da cache<br />Utilize o debugger para verificar a vari�vel cachedir';
$lang['analyze_revisdirfailed']        = 'ERRO: Plug-in falhou a obter o diret�rio das revis�es<br />Utilize o debugger para verificar a vari�vel revisdir';
$lang['analyze_pagesdirfailed']        = 'ERRO: Plug-in falhou a obter o diret�rio das p�ginas<br />Utilize o debugger para verificar a vari�vel pagesdir';
$lang['analyze_metadirfailed']         = 'ERRO: Plug-in falhou a obter o diret�rio meta<br />Utilize o debugger para verificar a vari�vel metadir';
$lang['analyze_locksdirfailed']        = 'ERRO: Plug-in falhou a obter o diret�rio de trancas<br />Utilize o debugger para verificar a vari�vel locksdir';
$lang['analyze_checkreadme']           = 'Por favor verifique readme.txt (Ingl�s) ou o site oficial do plug-in (Ingl�s) para mais informa��es sobre este erro';
$lang['analyze_creatingdefconfs']      = 'Criar ficheiro de configura��es...';
$lang['analyze_creatingdefconfs_x']    = 'falhou (Diret�rio C/R Erase plug-in n�o autoriza gravar)';
$lang['analyze_creatingdefconfs_o']    = 'sucesso (Por favor reanalize)';
$lang['yesbtn']                        = 'Sim';
$lang['nobtn']                         = 'N�o';
$lang['reanalyzebtn']                  = 'Reanalizar';
$lang['cache_word']                    = 'cache';
$lang['lock_word']                     = 'tranca';
$lang['meta_word']                     = 'meta';
$lang['oldrevis_word']                 = 'velhas revis.';
$lang['delxcacheclass']                = 'Mostrar classe da cache';
$lang['delxrevisclass']                = 'Mostrar classe das revis�es';
$lang['delxdebugmode']                 = 'Modo Debug';
$lang['delxverbose']                   = 'Saida de informa��o durante a limpeza';
$lang['wordb_enable']                  = 'Activar';
$lang['wordb_option']                  = 'Op��o';
$lang['wordb_optiondesc']              = 'Descri��o da op��o';
$lang['wordb_allowuserchag']           = 'Autorizar modifica��o';
$lang['wordb_checkedasdef']            = 'Ativo por defini��o';
$lang['createconfbtn']                 = 'Criar config.php';
$lang['searchyounewversionurl']        = 'Visitar o site Cache and Revisions Eraser (Abre nova janela)';
$lang['outputinfo_text']               = 'Relat�rio:';
$lang['outputinfo_lvl0']               = 'Silenciosa';
$lang['outputinfo_lvl1']               = 'Apenas os nomes dos ficheiros';
$lang['outputinfo_lvl2']               = 'Tudo';
$lang['numfilesdel']                   = 'Ficheiros eliminados:';
$lang['numdirsdel']                    = 'Diret�rios eliminados:';
$lang['cfgdesc_menusort']              = 'Posi��o do menu dentro lista de administra��o (Def: 67)';

?>
