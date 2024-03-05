<?php
/**
 * Admin Company Emails
 *
 * @package blesta
 * @subpackage blesta.language.da_dk
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminCompanyEmails.!success.edittemplate_updated'] = 'Indstillingerne for e-mailskabelonen blev opdateret!';
$lang['AdminCompanyEmails.!success.editsignature_updated'] = 'E-mail-signaturen er blevet opdateret!';
$lang['AdminCompanyEmails.!success.addsignature_created'] = 'E-mail-signaturen er blevet oprettet!';
$lang['AdminCompanyEmails.!success.deletesignature_deleted'] = 'E-mail-signaturen er blevet slettet!';
$lang['AdminCompanyEmails.!success.mail_updated'] = 'Mail-indstillingerne er blevet opdateret!';
$lang['AdminCompanyEmails.!success.smtp_test'] = 'SMTP-forbindelsen var vellykket!';
$lang['AdminCompanyEmails.!success.sendmail_test'] = 'Sendmail-forbindelsen var vellykket!';
$lang['AdminCompanyEmails.!tooltip.from_name'] = 'Dette er det brugervenlige navn på den e-mailadresse, der vises af modtagerens mailklient.';
$lang['AdminCompanyEmails.!tooltip.from'] = 'Dette er den e-mailadresse, som denne besked skal vises fra.';
$lang['AdminCompanyEmails.!tooltip.subject'] = 'Dette er emnet for meddelelsen. E-mailemner kan bruge tags.';
$lang['AdminCompanyEmails.!tooltip.email_signature_id'] = 'Beskeden tilføjes den valgte signatur.';
$lang['AdminCompanyEmails.!tooltip.include_attachments'] = 'Hvis der sendes vedhæftede filer med denne e-mailskabelon, vil du ikke længere vedhæfte dem til e-mails, hvis du fjerner markeringen i denne indstilling.';
$lang['AdminCompanyEmails.!tooltip.status'] = 'Ingen e-mails vil blive sendt med denne skabelon, medmindre denne indstilling er aktiveret.';
$lang['AdminCompanyEmails.!tooltip.html_email'] = 'Markér for at tillade, at e-mails med HTML-indhold leveres. En almindelig tekstversion af e-mails vil altid blive sendt.';
$lang['AdminCompanyEmails.!tooltip.mail_delivery'] = 'SMTP bruger en konfigureret SMTP-server til levering af e-mail, mens Sendmail vil forsøge at sende e-mail gennem Sendmail-binæren på systemet. SMTP er generelt hurtigere, mere sikker og mere pålidelig, så det er den anbefalede løsning.';
$lang['AdminCompanyEmails.!tooltip.sendmail_path'] = 'Den sendmail-kommando, der skal køres, inklusive sti og flag.';
$lang['AdminCompanyEmails.!tooltip.sendmail_from'] = 'Dette er kun til test af send mail-kommandoen og vil blive brugt til at sende en test-e-mail til en tilfældig engangs-e-mail-adresse.';
$lang['AdminCompanyEmails.!tooltip.smtp_host'] = 'Indstil det værtsnavn, der bruges til at kommunikere med SMTP-serveren.';
$lang['AdminCompanyEmails.!tooltip.smtp_port'] = 'Indstil den port, der bruges til at kommunikere med SMTP-serveren.';
$lang['AdminCompanyEmails.!tooltip.smtp_user'] = 'Indstil den SMTP-brugerkonto, der skal sendes mails igennem.';
$lang['AdminCompanyEmails.!tooltip.smtp_password'] = 'Indstil adgangskoden til SMTP-brugerkontoen.';
$lang['AdminCompanyEmails.!tooltip.smtp_from'] = 'Fra-adressen, der skal bruges, når indstillingerne testes.';
$lang['AdminCompanyEmails.!tooltip.smtp_to'] = 'Dette er kun til test af send mail-kommandoen og vil blive brugt til at sende en test-e-mail til den angivne e-mailadresse (eller en tilfældig engangsadresse).';
$lang['AdminCompanyEmails.!tooltip.submitmail'] = 'Opdater indstillinger';
$lang['AdminCompanyEmails.!cancel.field.cancel'] = 'Annuller';
$lang['AdminCompanyEmails.templates.page_title'] = 'Indstillinger > Virksomhed > E-mails > E-mail-skabeloner';
$lang['AdminCompanyEmails.templates.boxtitle_templates'] = 'E-mail-skabeloner';
$lang['AdminCompanyEmails.templates.heading_client'] = 'E-mails fra kunder';
$lang['AdminCompanyEmails.templates.heading_staff'] = 'E-mails til personalet';
$lang['AdminCompanyEmails.templates.heading_shared'] = 'Delte e-mails';
$lang['AdminCompanyEmails.templates.heading_plugins'] = 'Plugin-e-mails';
$lang['AdminCompanyEmails.templates.text_name'] = 'Navn';
$lang['AdminCompanyEmails.templates.text_plugin'] = 'Plugin';
$lang['AdminCompanyEmails.templates.text_description'] = 'Beskrivelse';
$lang['AdminCompanyEmails.templates.text_options'] = 'Valgmuligheder';
$lang['AdminCompanyEmails.templates.option_edit'] = 'Rediger';
$lang['AdminCompanyEmails.templates.no_results'] = 'Der findes ingen skabeloner af denne type.';
$lang['AdminCompanyEmails.templates.field_templatesubmit'] = 'Opdatering';
$lang['AdminCompanyEmails.templates.payment_cc_approved_name'] = 'Godkendt betaling (kreditkort)';
$lang['AdminCompanyEmails.templates.payment_cc_approved_desc'] = 'Meddelelse sendt efter en vellykket kreditkortbetaling er godkendt.';
$lang['AdminCompanyEmails.templates.payment_cc_declined_name'] = 'Betaling afvist (kreditkort)';
$lang['AdminCompanyEmails.templates.payment_cc_declined_desc'] = 'Meddelelse sendt efter et afvist forsøg på betaling med kreditkort.';
$lang['AdminCompanyEmails.templates.payment_cc_error_name'] = 'Betalingsfejl (kreditkort)';
$lang['AdminCompanyEmails.templates.payment_cc_error_desc'] = 'Meddelelse, der sendes, når et forsøg på kreditkortbetaling resulterer i en fejl.';
$lang['AdminCompanyEmails.templates.payment_ach_approved_name'] = 'Godkendt betaling (ACH)';
$lang['AdminCompanyEmails.templates.payment_ach_approved_desc'] = 'Meddelelse sendt efter en vellykket ACH-betaling er godkendt.';
$lang['AdminCompanyEmails.templates.payment_ach_declined_name'] = 'Betaling afvist (ACH)';
$lang['AdminCompanyEmails.templates.payment_ach_declined_desc'] = 'Meddelelse sendt efter et ACH-betalingsforsøg er blevet afvist.';
$lang['AdminCompanyEmails.templates.payment_ach_error_name'] = 'Betalingsfejl (ACH)';
$lang['AdminCompanyEmails.templates.payment_ach_error_desc'] = 'Meddelelse sendt efter et ACH-betalingsforsøg resulterer i en fejl.';
$lang['AdminCompanyEmails.templates.payment_manual_approved_name'] = 'Modtaget betaling (manuel indtastning)';
$lang['AdminCompanyEmails.templates.payment_manual_approved_desc'] = 'Meddelelse sendt efter en betaling er registreret manuelt.';
$lang['AdminCompanyEmails.templates.payment_nonmerchant_approved_name'] = 'Modtaget betaling (ikke-forhandler)';
$lang['AdminCompanyEmails.templates.payment_nonmerchant_approved_desc'] = 'Meddelelse sendt efter en betaling er modtaget fra en non-merchant gateway.';
$lang['AdminCompanyEmails.templates.credit_card_expiration_name'] = 'Kreditkortets udløb';
$lang['AdminCompanyEmails.templates.credit_card_expiration_desc'] = 'Meddelelse, der sendes, når et aktivt kreditkort er ved at udløbe.';
$lang['AdminCompanyEmails.templates.invoice_delivery_unpaid_name'] = 'Levering af faktura (ubetalt)';
$lang['AdminCompanyEmails.templates.invoice_delivery_unpaid_desc'] = 'Meddelelse, der indeholder en PDF-kopi af en ubetalt faktura.';
$lang['AdminCompanyEmails.templates.invoice_delivery_paid_name'] = 'Levering af faktura (betalt)';
$lang['AdminCompanyEmails.templates.invoice_delivery_paid_desc'] = 'Meddelelse, der indeholder en PDF-kopi af en betalt faktura.';
$lang['AdminCompanyEmails.templates.invoice_notice_first_name'] = 'Faktura-meddelelse (1.)';
$lang['AdminCompanyEmails.templates.invoice_notice_first_desc'] = 'Første fakturameddelelse, enten en påmindelse om at betale eller en forsinket meddelelse.';
$lang['AdminCompanyEmails.templates.invoice_notice_second_name'] = 'Faktura-meddelelse (2.)';
$lang['AdminCompanyEmails.templates.invoice_notice_second_desc'] = 'Anden fakturapåmindelse, enten en påmindelse om at betale eller en påmindelse om at betale for sent.';
$lang['AdminCompanyEmails.templates.invoice_notice_third_name'] = 'Faktura-meddelelse (3.)';
$lang['AdminCompanyEmails.templates.invoice_notice_third_desc'] = 'Tredje fakturameddelelse, enten en påmindelse om at betale eller en forsinket meddelelse.';
$lang['AdminCompanyEmails.templates.reset_password_name'] = 'Nulstilling af adgangskode';
$lang['AdminCompanyEmails.templates.reset_password_desc'] = 'E-mail med nulstilling af adgangskode, der indeholder et link til at ændre kontoens adgangskode.';
$lang['AdminCompanyEmails.templates.forgot_username_name'] = 'Glemt brugernavn';
$lang['AdminCompanyEmails.templates.forgot_username_desc'] = 'E-mail om gendannelse af brugernavn, der indeholder det registrerede brugernavn for kontoen.';
$lang['AdminCompanyEmails.templates.service_cancellation_name'] = 'Annullering af service';
$lang['AdminCompanyEmails.templates.service_cancellation_desc'] = 'Meddelelse om aflysning af service, sendes når en service aflyses.';
$lang['AdminCompanyEmails.templates.service_scheduled_cancellation_name'] = 'Planlagt aflysning af service';
$lang['AdminCompanyEmails.templates.service_scheduled_cancellation_desc'] = 'Meddelelse om planlagt aflysning af tjeneste, sendes når en tjeneste er planlagt til aflysning.';
$lang['AdminCompanyEmails.templates.service_suspension_name'] = 'Suspension af service';
$lang['AdminCompanyEmails.templates.service_suspension_desc'] = 'Meddelelse om suspenderet tjeneste, der sendes, når en tjeneste automatisk suspenderes.';
$lang['AdminCompanyEmails.templates.service_unsuspension_name'] = 'Tjeneste Ophævelse af suspension';
$lang['AdminCompanyEmails.templates.service_unsuspension_desc'] = 'Service unsuspended notice, sendes, når en service automatisk er blevet afbrudt.';
$lang['AdminCompanyEmails.templates.account_management_invite_name'] = 'Invitation til kontoadministration';
$lang['AdminCompanyEmails.templates.account_management_invite_desc'] = 'Meddelelse, der sendes, når en bruger har inviteret dig til at administrere sin konto.';
$lang['AdminCompanyEmails.templates.account_welcome_name'] = 'Registrering af konto';
$lang['AdminCompanyEmails.templates.account_welcome_desc'] = 'Velkomstmeddelelse sendt til nye kontoregistreringer.';
$lang['AdminCompanyEmails.templates.report_ar_name'] = 'Rapport over gamle fakturaer';
$lang['AdminCompanyEmails.templates.report_ar_desc'] = 'Tredive, tres og halvfems dages rapporter over gamle fakturaer, leveres en gang om måneden.';
$lang['AdminCompanyEmails.templates.report_tax_liability_name'] = 'Rapport om skattepligt';
$lang['AdminCompanyEmails.templates.report_tax_liability_desc'] = 'En månedlig skatteforpligtelsesrapport, genereret for den foregående måned.';
$lang['AdminCompanyEmails.templates.report_invoice_creation_name'] = 'Rapport om oprettelse af faktura';
$lang['AdminCompanyEmails.templates.report_invoice_creation_desc'] = 'En daglig rapport over fakturaer, der er genereret den foregående dag.';
$lang['AdminCompanyEmails.templates.service_suspension_error_name'] = 'Fejl i ophængning';
$lang['AdminCompanyEmails.templates.service_suspension_error_desc'] = 'Meddelelse sendt efter et mislykket forsøg på at suspendere en tjeneste.';
$lang['AdminCompanyEmails.templates.service_unsuspension_error_name'] = 'Fejl i ophængning';
$lang['AdminCompanyEmails.templates.service_unsuspension_error_desc'] = 'Meddelelse sendt efter et mislykket forsøg på at ophæve en service.';
$lang['AdminCompanyEmails.templates.service_cancel_error_name'] = 'Annulleringsfejl';
$lang['AdminCompanyEmails.templates.service_cancel_error_desc'] = 'Meddelelse sendt efter et mislykket forsøg på at annullere en tjeneste.';
$lang['AdminCompanyEmails.templates.service_creation_error_name'] = 'Oprettelsesfejl';
$lang['AdminCompanyEmails.templates.service_creation_error_desc'] = 'Meddelelse sendt efter et mislykket forsøg på at provisionere en tjeneste.';
$lang['AdminCompanyEmails.templates.service_renewal_error_name'] = 'Fornyelsesfejl';
$lang['AdminCompanyEmails.templates.service_renewal_error_desc'] = 'Meddelelse sendt efter et mislykket forsøg på at forny en tjeneste.';
$lang['AdminCompanyEmails.templates.auto_debit_pending_name'] = 'Auto-Debit afventer';
$lang['AdminCompanyEmails.templates.auto_debit_pending_desc'] = 'Meddelelse sendt, der indikerer, at en automatisk betaling snart vil blive forsøgt.';
$lang['AdminCompanyEmails.templates.staff_reset_password_name'] = 'Nulstilling af adgangskode';
$lang['AdminCompanyEmails.templates.staff_reset_password_desc'] = 'E-mail med nulstilling af adgangskode, der indeholder et link til at ændre kontoens adgangskode.';
$lang['AdminCompanyEmails.templates.service_creation_name'] = 'Oprettelse af tjenester';
$lang['AdminCompanyEmails.templates.service_creation_desc'] = 'Meddelelse om oprettelse af tjeneste, sendes når en tjeneste er blevet oprettet.';
$lang['AdminCompanyEmails.templates.verify_email_name'] = 'Bekræftelse af e-mail';
$lang['AdminCompanyEmails.templates.verify_email_desc'] = 'E-mailbekræftelseslink, der sendes, når der oprettes et nyt login, eller en kunde ændrer sin e-mailadresse.';
$lang['AdminCompanyEmails.templates.quotation_delivery_name'] = 'Levering af tilbud';
$lang['AdminCompanyEmails.templates.quotation_delivery_desc'] = 'Meddelelse, der indeholder en PDF-kopi af et tilbud.';
$lang['AdminCompanyEmails.templates.staff_quotation_approved_name'] = 'Citat Godkendelse';
$lang['AdminCompanyEmails.templates.staff_quotation_approved_desc'] = 'Meddelelse sendt efter et tilbud er blevet godkendt af kunden.';
$lang['AdminCompanyEmails.edittemplate.page_title'] = 'Indstillinger > Virksomhed > E-mails > Rediger e-mail-skabelon';
$lang['AdminCompanyEmails.edittemplate.boxtitle_edittemplate'] = 'Rediger e-mail-skabelon %1$s';
$lang['AdminCompanyEmails.edittemplate.text_none'] = 'Ingen';
$lang['AdminCompanyEmails.edittemplate.field.status'] = 'Aktiveret';
$lang['AdminCompanyEmails.edittemplate.field.from_name'] = 'Fra navn';
$lang['AdminCompanyEmails.edittemplate.field.from'] = 'Fra e-mail';
$lang['AdminCompanyEmails.edittemplate.field.subject'] = 'Emne';
$lang['AdminCompanyEmails.edittemplate.field.tags'] = 'Tilgængelige tags';
$lang['AdminCompanyEmails.edittemplate.field.text'] = 'Tekst';
$lang['AdminCompanyEmails.edittemplate.field.html'] = 'HTML';
$lang['AdminCompanyEmails.edittemplate.field.email_signature_id'] = 'Underskrift';
$lang['AdminCompanyEmails.edittemplate.field.include_attachments'] = 'Medtag eventuelle vedhæftede filer';
$lang['AdminCompanyEmails.edittemplate.field.edittemplatesubmit'] = 'Opdater skabelon';
$lang['AdminCompanyEmails.signatures.page_title'] = 'Indstillinger > Virksomhed > E-mails > Signaturer';
$lang['AdminCompanyEmails.signatures.boxtitle_signatures'] = 'Underskrifter';
$lang['AdminCompanyEmails.signatures.categorylink_newsignature'] = 'Ny underskrift';
$lang['AdminCompanyEmails.signatures.no_results'] = 'Der er ingen e-mail-signaturer.';
$lang['AdminCompanyEmails.signatures.text_name'] = 'Navn';
$lang['AdminCompanyEmails.signatures.text_description'] = 'Beskrivelse';
$lang['AdminCompanyEmails.signatures.text_options'] = 'Valgmuligheder';
$lang['AdminCompanyEmails.signatures.option_edit'] = 'Rediger';
$lang['AdminCompanyEmails.signatures.option_delete'] = 'Slet';
$lang['AdminCompanyEmails.signatures.confirm_delete'] = 'Er du sikker på, at du vil slette denne e-mail-signatur?';
$lang['AdminCompanyEmails.addsignature.page_title'] = 'Indstillinger > Virksomhed > E-mails > Tilføj signatur';
$lang['AdminCompanyEmails.addsignature.boxtitle_addsignature'] = 'Tilføj underskrift';
$lang['AdminCompanyEmails.addsignature.field_name'] = 'Navn';
$lang['AdminCompanyEmails.addsignature.field_text'] = 'Tekst';
$lang['AdminCompanyEmails.addsignature.field_html'] = 'HTML';
$lang['AdminCompanyEmails.addsignature.field_addsignaturesubmit'] = 'Opret signatur';
$lang['AdminCompanyEmails.addsignature.text_signatures'] = 'Signaturer bruges til e-mail-skabeloner, hvilket gør det lettere at ændre e-mail-signaturer i store mængder.';
$lang['AdminCompanyEmails.editsignature.page_title'] = 'Indstillinger > Firma > E-mails > Rediger signatur';
$lang['AdminCompanyEmails.editsignature.boxtitle_editsignature'] = 'Rediger underskrift';
$lang['AdminCompanyEmails.editsignature.field_name'] = 'Navn';
$lang['AdminCompanyEmails.editsignature.field_text'] = 'Tekst';
$lang['AdminCompanyEmails.editsignature.field_html'] = 'HTML';
$lang['AdminCompanyEmails.editsignature.field_editsignaturesubmit'] = 'Opdater underskrift';
$lang['AdminCompanyEmails.mail.page_title'] = 'Indstillinger > Virksomhed > E-mails > Mailindstillinger';
$lang['AdminCompanyEmails.mail.boxtitle_mail'] = 'Mail-indstillinger';
$lang['AdminCompanyEmails.mail.text_section'] = 'Dette afsnit styrer, hvordan e-mail leveres fra Blesta. Sendmail er den simpleste leveringsmetode, men SMTP er generelt hurtigere og mere pålidelig.';
$lang['AdminCompanyEmails.mail.field.sendmail_path'] = 'Sendmail-sti';
$lang['AdminCompanyEmails.mail.field.sendmail_from'] = 'Sendmail Test Fra-adresse';
$lang['AdminCompanyEmails.mail.field.html_email'] = 'Aktivér HTML';
$lang['AdminCompanyEmails.mail.field.mail_delivery'] = 'Leveringsmetode';
$lang['AdminCompanyEmails.mail.field.test'] = 'Test disse indstillinger';
$lang['AdminCompanyEmails.mail.field.smtp_host'] = 'SMTP-vært';
$lang['AdminCompanyEmails.mail.field.smtp_port'] = 'SMTP-port';
$lang['AdminCompanyEmails.mail.field.smtp_user'] = 'SMTP-bruger';
$lang['AdminCompanyEmails.mail.field.smtp_password'] = 'SMTP-adgangskode';
$lang['AdminCompanyEmails.mail.field.smtp_from'] = 'Test fra-adresse';
$lang['AdminCompanyEmails.mail.field.smtp_to'] = 'Test til adresse';
$lang['AdminCompanyEmails.mail.field.submitmail'] = 'Opdater indstillinger';
$lang['AdminCompanyEmails.mail.text_optional'] = 'Valgfri';
$lang['AdminCompanyEmails.getRequiredMethods.sendmail'] = 'Sendmail';
$lang['AdminCompanyEmails.getRequiredMethods.smtp'] = 'SMTP';
$lang['AdminCompanyEmails.getsmtpsecurityoptions.none'] = 'Ingen';
$lang['AdminCompanyEmails.getsmtpsecurityoptions.ssl'] = 'SSL';
$lang['AdminCompanyEmails.getsmtpsecurityoptions.tls'] = 'TLS';
$lang['AdminCompanyEmails.gettemplateactions.update_from_email'] = 'Opdater "Fra e-mail"';
$lang['AdminCompanyEmails.gettemplateactions.update_from_name'] = 'Opdater "Fra navn"';

