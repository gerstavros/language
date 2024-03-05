<?php
/**
 * Cpanel
 *
 * @package blesta
 * @subpackage blesta.language.cs_cz
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Cpanel.!error.configoptions[dedicated_ip].format'] = 'Vyhrazená IP musí být nastavena na hodnotu 0 nebo 1.';
$lang['Cpanel.!error.cpanel_password.matches'] = 'Heslo a potvrzovací heslo se neshodují.';
$lang['Cpanel.!error.cpanel_password.valid'] = 'Heslo musí mít alespoň 8 znaků.';
$lang['Cpanel.!error.cpanel_username.length'] = 'Uživatelské jméno musí mít délku 1 až 16 znaků.';
$lang['Cpanel.!error.cpanel_username.test'] = 'Uživatelské jméno nesmí začínat slovem "test".';
$lang['Cpanel.!error.cpanel_username.format'] = 'Uživatelské jméno může obsahovat pouze písmena a číslice a nesmí začínat číslicí.';
$lang['Cpanel.!error.cpanel_sub_domain.availability'] = 'Poskytnutá subdoména není k dispozici.';
$lang['Cpanel.!error.cpanel_sub_domain.format'] = 'Zadejte platný název subdomény, např. "site".';
$lang['Cpanel.!error.cpanel_domain.valid'] = 'Neplatný název domény.';
$lang['Cpanel.!error.cpanel_domain.format'] = 'Zadejte platný název domény, např. domain.com.';
$lang['Cpanel.!error.module_row.missing'] = 'Došlo k interní chybě. Řádek modulu není k dispozici.';
$lang['Cpanel.!error.api.internal'] = 'Došlo k interní chybě nebo server na požadavek neodpověděl.';
$lang['Cpanel.!error.meta[dedicated_ip].format'] = 'Vyhrazená IP musí být nastavena na hodnotu 0 nebo 1.';
$lang['Cpanel.!error.meta[package].empty'] = 'Je vyžadován balíček cPanel.';
$lang['Cpanel.!error.meta[account_limit].valid'] = 'Limit účtu musí být číslo.';
$lang['Cpanel.!error.meta[domains_list].valid'] = 'Musí být nastavena alespoň jedna dostupná doména a všechny musí představovat platný název hostitele.';
$lang['Cpanel.!error.meta[sub_domains].valid'] = 'Povolit subdomény musí být nastaveno na možnost povolit nebo zakázat.';
$lang['Cpanel.!error.meta[type].valid'] = 'Typ účtu musí být standardní nebo prodejní.';
$lang['Cpanel.!error.name_servers_count'] = 'Je třeba definovat alespoň 2 jmenné servery.';
$lang['Cpanel.!error.name_servers_valid'] = 'Jeden nebo více zadaných názvových serverů jsou neplatné.';
$lang['Cpanel.!error.account_limit_valid'] = 'Limit účtu musí zůstat prázdný (pro neomezený počet účtů) nebo musí být nastaven na nějakou celočíselnou hodnotu.';
$lang['Cpanel.!error.remote_key_valid_connection'] = 'Připojení k serveru se nepodařilo navázat. Zkontrolujte, zda jsou název hostitele, uživatelské jméno a token (nebo vzdálený klíč) správné.';
$lang['Cpanel.!error.remote_key_valid'] = 'Token (nebo vzdálený klíč) se zdá být neplatný.';
$lang['Cpanel.!error.user_name_valid'] = 'Uživatelské jméno se zdá být neplatné.';
$lang['Cpanel.!error.host_name_valid'] = 'Název hostitele se zdá být neplatný.';
$lang['Cpanel.!error.server_name_valid'] = 'Je třeba zadat označení serveru.';
$lang['Cpanel.service_field.tooltip.password'] = 'Heslo můžete nechat prázdné, aby se vygenerovalo automaticky.';
$lang['Cpanel.service_field.tooltip.username'] = 'Uživatelské jméno můžete nechat prázdné, aby se vygenerovalo automaticky.';
$lang['Cpanel.package_fields.tooltip.domains_list'] = 'Zadejte seznam CSV domén, které budou k dispozici pro poskytování subdomén, např. "domain1.com,domain2.com,domain3.com".';
$lang['Cpanel.service_info.option_login'] = 'Přihlášení';
$lang['Cpanel.service_info.options'] = 'Možnosti';
$lang['Cpanel.service_info.server'] = 'Server';
$lang['Cpanel.service_info.password'] = 'Heslo';
$lang['Cpanel.service_info.username'] = 'Uživatelské jméno';
$lang['Cpanel.tab_client_stats.usage_unlimited'] = '(%1$s MB/∞)';
$lang['Cpanel.tab_client_stats.usage'] = '(%1$s MB/%2$s MB)';
$lang['Cpanel.tab_client_stats.disk_title'] = 'Využití disku';
$lang['Cpanel.tab_client_stats.bandwidth_title'] = 'Využití šířky pásma (měsíc k datu)';
$lang['Cpanel.tab_client_stats.info.ip'] = 'IP adresa';
$lang['Cpanel.tab_client_stats.info.domain'] = 'Doména';
$lang['Cpanel.tab_client_stats.info_heading.value'] = 'Hodnota';
$lang['Cpanel.tab_client_stats.info_heading.field'] = 'Pole';
$lang['Cpanel.tab_client_stats.info_title'] = 'Informace';
$lang['Cpanel.tab_client_actions.field_password_submit'] = 'Aktualizace hesla';
$lang['Cpanel.tab_client_actions.field_cpanel_confirm_password'] = 'Potvrzení hesla';
$lang['Cpanel.tab_client_actions.field_cpanel_password'] = 'Heslo';
$lang['Cpanel.tab_client_actions.change_password'] = 'Změna hesla';
$lang['Cpanel.tab_stats.disk_unlimited'] = 'neomezené';
$lang['Cpanel.tab_stats.disk_value'] = '%1$s MB';
$lang['Cpanel.tab_stats.disk_heading.limit'] = 'Limit';
$lang['Cpanel.tab_stats.disk_heading.used'] = 'Použité';
$lang['Cpanel.tab_stats.disk_title'] = 'Disk';
$lang['Cpanel.tab_stats.bandwidth_unlimited'] = 'neomezené';
$lang['Cpanel.tab_stats.bandwidth_value'] = '%1$s MB';
$lang['Cpanel.tab_stats.bandwidth_heading.limit'] = 'Limit';
$lang['Cpanel.tab_stats.bandwidth_heading.used'] = 'Použité';
$lang['Cpanel.tab_stats.bandwidth_title'] = 'Šířka pásma';
$lang['Cpanel.tab_stats.info.ip'] = 'IP adresa';
$lang['Cpanel.tab_stats.info.domain'] = 'Doména';
$lang['Cpanel.tab_stats.info_heading.value'] = 'Hodnota';
$lang['Cpanel.tab_stats.info_heading.field'] = 'Pole';
$lang['Cpanel.tab_stats.info_title'] = 'Informace';
$lang['Cpanel.service_field.text_generate_password'] = 'Generování hesla';
$lang['Cpanel.service_field.confirm_password'] = 'Potvrzení hesla';
$lang['Cpanel.service_field.password'] = 'Heslo';
$lang['Cpanel.service_field.username'] = 'Uživatelské jméno';
$lang['Cpanel.service_field.sub_domain'] = 'Subdoména';
$lang['Cpanel.service_field.domain'] = 'Doména';
$lang['Cpanel.package_fields.dedicated_ip_yes'] = 'Ano';
$lang['Cpanel.package_fields.dedicated_ip_no'] = 'Ne';
$lang['Cpanel.package_fields.domains_list'] = 'Seznam dostupných domén';
$lang['Cpanel.package_fields.sub_domains_disable'] = 'Zakázat';
$lang['Cpanel.package_fields.sub_domains_enable'] = 'Povolit';
$lang['Cpanel.package_fields.sub_domains'] = 'Povolení prodeje subdomén';
$lang['Cpanel.package_fields.dedicated_ip'] = 'Vyhrazená IP';
$lang['Cpanel.package_fields.account_limit'] = 'Limit účtu';
$lang['Cpanel.package_fields.acl_default'] = 'Výchozí';
$lang['Cpanel.package_fields.acl'] = 'Seznam řízení přístupu';
$lang['Cpanel.package_fields.package'] = 'Balíček cPanel';
$lang['Cpanel.package_fields.type_reseller'] = 'Prodejce';
$lang['Cpanel.package_fields.type_standard'] = 'Standardní';
$lang['Cpanel.package_fields.type'] = 'Typ účtu';
$lang['Cpanel.row_meta.account_limit'] = 'Limit účtu';
$lang['Cpanel.row_meta.use_ssl'] = 'Při připojování k rozhraní API používejte protokol SSL (doporučeno).';
$lang['Cpanel.row_meta.key'] = 'Token (nebo vzdálený klíč)';
$lang['Cpanel.row_meta.user_name'] = 'Uživatelské jméno';
$lang['Cpanel.row_meta.host_name'] = 'Hostitelské jméno';
$lang['Cpanel.row_meta.server_name'] = 'Označení serveru';
$lang['Cpanel.edit_row.add_btn'] = 'Upravit server';
$lang['Cpanel.edit_row.remove_name_server'] = 'Odstranění adresy';
$lang['Cpanel.edit_row.name_server'] = 'Name server %1$s';
$lang['Cpanel.edit_row.name_server_host_col'] = 'Hostitelské jméno';
$lang['Cpanel.edit_row.name_server_col'] = 'Jmenný server';
$lang['Cpanel.edit_row.name_server_btn'] = 'Přidání dalšího jmenného serveru';
$lang['Cpanel.edit_row.notes_title'] = 'Poznámky';
$lang['Cpanel.edit_row.name_servers_title'] = 'Jmenné servery';
$lang['Cpanel.edit_row.basic_title'] = 'Základní nastavení';
$lang['Cpanel.edit_row.box_title'] = 'Upravit server cPanel';
$lang['Cpanel.add_row.add_btn'] = 'Přidat server';
$lang['Cpanel.add_row.remove_name_server'] = 'Odstranění adresy';
$lang['Cpanel.add_row.name_server'] = 'Name server %1$s';
$lang['Cpanel.add_row.name_server_host_col'] = 'Hostitelské jméno';
$lang['Cpanel.add_row.name_server_col'] = 'Jmenný server';
$lang['Cpanel.add_row.name_server_btn'] = 'Přidání dalšího jmenného serveru';
$lang['Cpanel.add_row.notes_title'] = 'Poznámky';
$lang['Cpanel.add_row.name_servers_title'] = 'Jmenné servery';
$lang['Cpanel.add_row.basic_title'] = 'Základní nastavení';
$lang['Cpanel.add_row.box_title'] = 'Přidání serveru cPanel';
$lang['Cpanel.order_options.roundrobin'] = 'Rovnoměrné rozdělení mezi servery';
$lang['Cpanel.order_options.first'] = 'První nenaplněný server';
$lang['Cpanel.manage.module_groups_no_results'] = 'Neexistují žádné skupiny serverů.';
$lang['Cpanel.manage.module_rows_no_results'] = 'Neexistují žádné servery.';
$lang['Cpanel.manage.module_groups.confirm_delete'] = 'Opravdu chcete tuto skupinu serverů odstranit?';
$lang['Cpanel.manage.module_rows.confirm_delete'] = 'Opravdu chcete tento server odstranit?';
$lang['Cpanel.manage.module_groups.delete'] = 'Odstranit';
$lang['Cpanel.manage.module_rows.delete'] = 'Odstranit';
$lang['Cpanel.manage.module_groups.edit'] = 'Upravit';
$lang['Cpanel.manage.module_rows.edit'] = 'Upravit';
$lang['Cpanel.manage.module_rows.count_server_group'] = '%1$s / %2$s (%3$s k dispozici)';
$lang['Cpanel.manage.module_rows.count'] = '%1$s / %2$s';
$lang['Cpanel.manage.module_groups_heading.options'] = 'Možnosti';
$lang['Cpanel.manage.module_groups_heading.servers'] = 'Počet serverů';
$lang['Cpanel.manage.module_groups_heading.name'] = 'Název skupiny';
$lang['Cpanel.manage.module_rows_heading.options'] = 'Možnosti';
$lang['Cpanel.manage.module_rows_heading.accounts'] = 'Účty';
$lang['Cpanel.manage.module_rows_heading.hostname'] = 'Hostitelské jméno';
$lang['Cpanel.manage.module_rows_heading.name'] = 'Označení serveru';
$lang['Cpanel.manage.module_groups_title'] = 'Skupiny serverů';
$lang['Cpanel.manage.module_rows_title'] = 'Servery';
$lang['Cpanel.add_module_group'] = 'Přidání skupiny serverů';
$lang['Cpanel.add_module_row'] = 'Přidat server';
$lang['Cpanel.tab_client_actions'] = 'Akce';
$lang['Cpanel.tab_client_stats'] = 'Statistiky';
$lang['Cpanel.tab_stats'] = 'Statistiky';
$lang['Cpanel.module_group'] = 'Skupina serverů';
$lang['Cpanel.module_row_plural'] = 'Servery';
$lang['Cpanel.module_row'] = 'Server';
$lang['Cpanel.description'] = 'cPanel a WHM jsou přední webhostingovou platformou již více než 20 let. Důvěřují jim celosvětoví technologičtí partneři Wordpress, CloudLinux, Lighstpeed a další.';
$lang['Cpanel.name'] = 'cPanel';

