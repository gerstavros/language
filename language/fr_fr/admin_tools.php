<?php
/**
 * Admin Tools
 *
 * @package blesta
 * @subpackage blesta.language.fr_fr
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminTools.!success.currency_converted'] = '%1$s = %2$s';
$lang['AdminTools.!success.collation_updated'] = 'La collation de la base de données a été mise à jour avec succès.';
$lang['AdminTools.!success.max_updated'] = 'Le maximum de la tentative de renouvellement a été mis à jour avec succès.';
$lang['AdminTools.!success.dequeue'] = 'Le service a été supprimé avec succès de la file d\'attente de renouvellement.';
$lang['AdminTools.getlognames.text_module'] = 'Module';
$lang['AdminTools.getlognames.text_messenger'] = 'Messager';
$lang['AdminTools.getlognames.text_gateway'] = 'Passerelle';
$lang['AdminTools.getlognames.text_email'] = 'Courriel';
$lang['AdminTools.getlognames.text_users'] = 'Connexion des utilisateurs';
$lang['AdminTools.getlognames.text_contacts'] = 'Contacts';
$lang['AdminTools.getlognames.text_client_settings'] = 'Paramètres du client';
$lang['AdminTools.getlognames.text_accountaccess'] = 'Accès au compte';
$lang['AdminTools.getlognames.text_transactions'] = 'Transactions';
$lang['AdminTools.getlognames.text_cron'] = 'Cron';
$lang['AdminTools.getlognames.text_invoice_delivery'] = 'Livraison de la facture';
$lang['AdminTools.convertcurrency.page_title'] = 'Outils Convertir la monnaie';
$lang['AdminTools.convertcurrency.boxtitle_currency'] = 'Convertir la monnaie';
$lang['AdminTools.convertcurrency.field_amount'] = 'Montant';
$lang['AdminTools.convertcurrency.field_from'] = 'De';
$lang['AdminTools.convertcurrency.field_to'] = 'Pour';
$lang['AdminTools.convertcurrency.field_currencysubmit'] = 'Convertir la monnaie';
$lang['AdminTools.utilities.page_title'] = 'Outils Utilitaires';
$lang['AdminTools.utilities.boxtitle_utilities'] = 'Utilitaires';
$lang['AdminTools.utilities.heading_utility'] = 'Utilité';
$lang['AdminTools.utilities.heading_description'] = 'Description';
$lang['AdminTools.utilities.heading_options'] = 'Options';
$lang['AdminTools.utilities.update_collation'] = 'Mise à jour de la collation de la base de données';
$lang['AdminTools.utilities.field_update_to_utf8mb4'] = 'Mise à jour vers utf8mb4';
$lang['AdminTools.utilities.text_update_to_utf8mb4'] = 'Mettez à jour le jeu de caractères et la collation de votre base de données, de vos tables et de vos colonnes avec la valeur utf8mb4 afin de prendre en charge les caractères de 4 octets tels que les emojis.  Cette opération peut prendre plusieurs minutes.';
$lang['AdminTools.utilities.text_update_to_utf8mb4_requirements'] = 'Veuillez mettre à jour MySQL vers la version 5.7+ ou MariaDB vers la version 10.2.2+ pour prendre en charge les caractères utf8mb4 tels que les emojis.';
$lang['AdminTools.utilities.text_update_to_utf8mb4_supported'] = 'La base de données supporte déjà utf8mb4.';
$lang['AdminTools.utilities.text_update_to_utf8mb4_config'] = 'Pour insérer et récupérer des caractères utf8mb4, mettez à jour votre fichier de configuration blesta.php en utilisant \'charset_query\' => "SET NAMES \'utf8mb4\'".';
$lang['AdminTools.logs.page_title'] = 'Outils Logs';
$lang['AdminTools.logs.boxtitle_logs'] = 'Journaux';
$lang['AdminTools.renewals.page_title'] = 'File d\'attente de renouvellement';
$lang['AdminTools.renewals.boxtitle_renewals'] = 'File d\'attente pour le renouvellement des services';
$lang['AdminTools.renewals.heading_client'] = 'Client';
$lang['AdminTools.renewals.heading_service_id'] = 'ID du service';
$lang['AdminTools.renewals.heading_failed_attempts'] = 'Tentatives infructueuses';
$lang['AdminTools.renewals.heading_maximum_attempts'] = 'Tentatives maximales';
$lang['AdminTools.renewals.heading_invoice'] = 'Facture';
$lang['AdminTools.renewals.heading_options'] = 'Options';
$lang['AdminTools.renewals.confirm_dequeue'] = 'Êtes-vous sûr de vouloir retirer ce service de la file d\'attente de renouvellement ?';
$lang['AdminTools.renewals.option_view'] = 'Voir la facture';
$lang['AdminTools.renewals.option_dequeue'] = 'Dequeue';
$lang['AdminTools.renewals.option_change_max'] = 'Changement Maximum';
$lang['AdminTools.renewals.no_results'] = 'Aucun service n\'est actuellement en attente de renouvellement.';
$lang['AdminTools.change_max_attempts.boxtitle_change_max_attempts'] = 'Modifier le nombre maximum de tentatives';
$lang['AdminTools.change_max_attempts.field_max_attempts'] = 'Tentatives maximales';
$lang['AdminTools.change_max_attempts.field_cancel'] = 'Annuler';
$lang['AdminTools.change_max_attempts.btn_save'] = 'Économiser';
$lang['AdminTools.logmodule.page_title'] = 'Outils Logs';
$lang['AdminTools.logmodule.text_name'] = 'Nom';
$lang['AdminTools.logmodule.text_staffname'] = 'Personnel';
$lang['AdminTools.logmodule.text_date'] = 'Date';
$lang['AdminTools.logmodule.no_results'] = 'Il n\'y a pas de journal des modules.';
$lang['AdminTools.moduleloglist.text_direction'] = 'Direction';
$lang['AdminTools.moduleloglist.text_data'] = 'Données';
$lang['AdminTools.moduleloglist.text_date'] = 'Date';
$lang['AdminTools.moduleloglist.text_status'] = 'Statut';
$lang['AdminTools.moduleloglist.text_input'] = 'Entrée';
$lang['AdminTools.moduleloglist.text_output'] = 'Sortie';
$lang['AdminTools.moduleloglist.text_error'] = 'Erreur';
$lang['AdminTools.moduleloglist.text_success'] = 'Succès';
$lang['AdminTools.moduleloglist.no_results'] = 'Il n\'y a pas de données pour ce protocole de module.';
$lang['AdminTools.logmessenger.page_title'] = 'Outils Logs';
$lang['AdminTools.logmessenger.text_name'] = 'Nom';
$lang['AdminTools.logmessenger.text_recipient'] = 'Bénéficiaire';
$lang['AdminTools.logmessenger.text_date'] = 'Date';
$lang['AdminTools.logmessenger.no_results'] = 'Il n\'y a pas de journal de bord.';
$lang['AdminTools.messengerloglist.text_direction'] = 'Direction';
$lang['AdminTools.messengerloglist.text_data'] = 'Données';
$lang['AdminTools.messengerloglist.text_date'] = 'Date';
$lang['AdminTools.messengerloglist.text_status'] = 'Statut';
$lang['AdminTools.messengerloglist.text_input'] = 'Entrée';
$lang['AdminTools.messengerloglist.text_output'] = 'Sortie';
$lang['AdminTools.messengerloglist.text_error'] = 'Erreur';
$lang['AdminTools.messengerloglist.text_success'] = 'Succès';
$lang['AdminTools.messengerloglist.no_results'] = 'Il n\'y a pas de données pour ce journal de bord.';
$lang['AdminTools.loggateway.page_title'] = 'Outils Logs';
$lang['AdminTools.loggateway.text_name'] = 'Nom';
$lang['AdminTools.loggateway.text_staffname'] = 'Personnel';
$lang['AdminTools.loggateway.text_date'] = 'Date';
$lang['AdminTools.loggateway.no_results'] = 'Il n\'y a pas de journal de passerelle.';
$lang['AdminTools.gatewayloglist.text_direction'] = 'Direction';
$lang['AdminTools.gatewayloglist.text_data'] = 'Données';
$lang['AdminTools.gatewayloglist.text_date'] = 'Date';
$lang['AdminTools.gatewayloglist.text_status'] = 'Statut';
$lang['AdminTools.gatewayloglist.text_input'] = 'Entrée';
$lang['AdminTools.gatewayloglist.text_output'] = 'Sortie';
$lang['AdminTools.gatewayloglist.text_error'] = 'Erreur';
$lang['AdminTools.gatewayloglist.text_success'] = 'Succès';
$lang['AdminTools.gatewayloglist.no_results'] = 'Il n\'y a pas de données pour ce journal de passerelle.';
$lang['AdminTools.logemail.page_title'] = 'Outils Logs';
$lang['AdminTools.logemail.text_date'] = 'Date';
$lang['AdminTools.logemail.text_subject'] = 'Sujet';
$lang['AdminTools.logemail.text_summary'] = 'Résumé';
$lang['AdminTools.logemail.text_status'] = 'Statut';
$lang['AdminTools.logemail.text_to'] = 'Pour';
$lang['AdminTools.logemail.text_cc'] = 'CC';
$lang['AdminTools.logemail.text_from'] = 'De';
$lang['AdminTools.logemail.text_resend'] = 'Renvoyer';
$lang['AdminTools.logemail.text_sent'] = 'Envoyé';
$lang['AdminTools.logemail.text_unsent'] = 'Sans objet';
$lang['AdminTools.logemail.no_results'] = 'Il n\'y a pas de journal des courriels.';
$lang['AdminTools.logusers.page_title'] = 'Outils Logs';
$lang['AdminTools.logusers.text_name'] = 'Nom';
$lang['AdminTools.logusers.text_username'] = 'Nom d\'utilisateur';
$lang['AdminTools.logusers.text_type'] = 'Type';
$lang['AdminTools.logusers.text_result'] = 'Résultat';
$lang['AdminTools.logusers.text_ipaddress'] = 'Adresse IP';
$lang['AdminTools.logusers.text_date'] = 'Date';
$lang['AdminTools.logusers.text_staff'] = 'Personnel';
$lang['AdminTools.logusers.text_client'] = 'Client';
$lang['AdminTools.logusers.text_contact'] = 'Contact';
$lang['AdminTools.logusers.text_success'] = 'Succès';
$lang['AdminTools.logusers.text_failure'] = 'Échec';
$lang['AdminTools.logusers.text_location'] = 'Localisation';
$lang['AdminTools.logusers.no_results'] = 'Il n\'y a pas de journal de connexion des utilisateurs.';
$lang['AdminTools.logcontacts.page_title'] = 'Outils Logs';
$lang['AdminTools.logcontacts.text_name'] = 'Nom';
$lang['AdminTools.logcontacts.text_date'] = 'Date';
$lang['AdminTools.logcontacts.text_field'] = 'Champ d\'application';
$lang['AdminTools.logcontacts.text_previous'] = 'Valeur précédente';
$lang['AdminTools.logcontacts.text_new'] = 'Nouvelle valeur';
$lang['AdminTools.logcontacts.no_results'] = 'Il n\'y a pas de registre des contacts.';
$lang['AdminTools.logclientsettings.page_title'] = 'Outils Logs';
$lang['AdminTools.logclientsettings.text_client'] = 'Client';
$lang['AdminTools.logclientsettings.text_user'] = 'Exécuté par';
$lang['AdminTools.logclientsettings.text_ip_address'] = 'Adresse IP';
$lang['AdminTools.logclientsettings.text_date'] = 'Date';
$lang['AdminTools.logclientsettings.text_field'] = 'Champ d\'application';
$lang['AdminTools.logclientsettings.text_previous'] = 'Valeur précédente';
$lang['AdminTools.logclientsettings.text_new'] = 'Nouvelle valeur';
$lang['AdminTools.logclientsettings.no_results'] = 'Il n\'y a pas de journal des paramètres du client.';
$lang['AdminTools.logtransactions.page_title'] = 'Outils Logs';
$lang['AdminTools.logtransactions.text_client_name'] = 'Client';
$lang['AdminTools.logtransactions.text_staff_name'] = 'Personnel';
$lang['AdminTools.logtransactions.text_date'] = 'Date';
$lang['AdminTools.logtransactions.text_field'] = 'Champ d\'application';
$lang['AdminTools.logtransactions.text_previous'] = 'Valeur précédente';
$lang['AdminTools.logtransactions.text_new'] = 'Nouvelle valeur';
$lang['AdminTools.logtransactions.no_results'] = 'Il n\'y a pas de journal des transactions.';
$lang['AdminTools.logaccountaccess.page_title'] = 'Outils Logs';
$lang['AdminTools.logaccountaccess.name'] = 'Personnel';
$lang['AdminTools.logaccountaccess.type'] = 'Type';
$lang['AdminTools.logaccountaccess.date'] = 'Date';
$lang['AdminTools.logaccountaccess.text_cc'] = 'Carte de crédit';
$lang['AdminTools.logaccountaccess.text_ach'] = 'ACH';
$lang['AdminTools.logaccountaccess.no_results'] = 'Il n\'y a pas de journal d\'accès au compte.';
$lang['AdminTools.accountaccess.name'] = 'Nom';
$lang['AdminTools.accountaccess.type'] = 'Type';
$lang['AdminTools.accountaccess.last4'] = 'Les 4 derniers';
$lang['AdminTools.accountaccess.type_cc'] = '%1$s - %2$s';
$lang['AdminTools.accountaccess.type_ach'] = '%1$s - %2$s';
$lang['AdminTools.accountaccess.no_results'] = 'Il n\'y a pas de détails de compte pour cet enregistrement.';
$lang['AdminTools.logcron.page_title'] = 'Outils Logs';
$lang['AdminTools.logcron.task'] = 'Tâche';
$lang['AdminTools.logcron.start_date'] = 'Date de début';
$lang['AdminTools.logcron.end_date'] = 'Date de fin';
$lang['AdminTools.logcron.output'] = 'Sortie';
$lang['AdminTools.logcron.no_output'] = 'Aucun résultat n\'a été enregistré pour ce journal.';
$lang['AdminTools.logcron.no_results'] = 'Il n\'y a pas de journaux cron.';
$lang['AdminTools.loginvoicedelivery.page_title'] = 'Outils Logs';
$lang['AdminTools.loginvoicedelivery.invoice_id_code'] = 'Facture #';
$lang['AdminTools.loginvoicedelivery.first_name'] = 'Client';
$lang['AdminTools.loginvoicedelivery.method'] = 'Méthode de livraison';
$lang['AdminTools.loginvoicedelivery.date_sent'] = 'Date d\'envoi';
$lang['AdminTools.loginvoicedelivery.no_results'] = 'Il n\'existe pas de registre des livraisons de factures.';
$lang['AdminTools.!success.rule_removed'] = 'La règle a été supprimée avec succès.';
$lang['AdminTools.!success.rule_added'] = 'La règle a été ajoutée avec succès.';
$lang['AdminTools.!tooltip.rule'] = 'Il peut s\'agir d\'une adresse électronique (par exemple joe@example.com), d\'un caractère de remplacement (par exemple *@exemple.com), d\'une adresse IP (ipv4 ou ipv6) ou d\'une règle CIDR (par exemple 192.168.0.0/24 ou 2001:db8:1234::/48).';
$lang['AdminTools.renewals.heading_date_renews'] = 'Date de renouvellement';
$lang['AdminTools.renewals.heading_date_next_attempt'] = 'Prochaine tentative';
$lang['AdminTools.blacklist.boxtitle_blacklist'] = 'Liste noire';
$lang['AdminTools.blacklist.heading_rule'] = 'Règle';
$lang['AdminTools.blacklist.heading_type'] = 'Type';
$lang['AdminTools.blacklist.heading_list'] = 'Liste';
$lang['AdminTools.blacklist.heading_note'] = 'Note';
$lang['AdminTools.blacklist.heading_options'] = 'Options';
$lang['AdminTools.blacklist.text_type_ip'] = 'Adresse IP';
$lang['AdminTools.blacklist.text_type_email'] = 'Adresse électronique';
$lang['AdminTools.blacklist.text_system'] = 'Système';
$lang['AdminTools.blacklist.option_delete'] = 'Supprimer';
$lang['AdminTools.blacklist.modal_delete'] = 'Êtes-vous sûr de vouloir supprimer cette règle ?';
$lang['AdminTools.blacklist.no_results'] = 'Il n\'y a pas de règles de liste noire.';
$lang['AdminTools.blacklistadd.boxtitle_addrule'] = 'Ajouter une règle';
$lang['AdminTools.blacklistadd.field_rule'] = 'Règle';
$lang['AdminTools.blacklistadd.field_type'] = 'Type';
$lang['AdminTools.blacklistadd.field_note'] = 'Note';
$lang['AdminTools.blacklistadd.field_submit'] = 'Ajouter une règle';

