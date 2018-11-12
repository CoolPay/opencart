<?php
// Heading
$_['heading_title'] = 'CoolPay';

// Text
$_['text_extension']                 = 'Extensions';
$_['text_success']                   = 'Success: You have modified your CoolPay account details!';
$_['text_edit']                      = 'Edit CoolPay';
$_['text_CoolPay']                  = '<a target="_blank" href="https://www.coolpay.com"><img style="height: 30px;" src="view/image/extension/payment/logo.png" alt="CoolPay" title="CoolPay" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_enabled']                   = 'Enabled';
$_['text_disabled']                  = 'Disabled';
$_['text_panel_heading_api']         = 'API Settings';
$_['text_panel_heading_transaction'] = 'Transaction Settings';
$_['text_panel_heading_gateway']     = 'Gateway Settings';
$_['text_panel_heading_others']      = 'Other Settings';
$_['text_remote_cron']               = 'Remote CRON URL:';

// Entry
$_['entry_api_key']             = 'API Key';
$_['entry_private_key']         = 'Private Key';
$_['entry_test']                = 'Test mode';
$_['entry_total']               = 'Total';
$_['entry_order_status']        = 'Completed Status';
$_['entry_geo_zone']            = 'Geo Zone';
$_['entry_status']              = 'Status';
$_['entry_sort_order']          = 'Sort Order';
$_['entry_autofee']             = 'Autofee';
$_['entry_autocapture']         = 'Autocapture';
$_['entry_payment_methods']     = 'Payment methods';
$_['entry_text_on_statement']   = 'Text on statement';
$_['entry_branding_id']         = 'Branding ID';
$_['entry_order_number_prefix'] = 'Prefix order number';

// Help
$_['help_total']               = 'The checkout total the order must reach before this payment method becomes active';
$_['help_CoolPay_setup']      = '<a target="_blank" href="https://learn.CoolPay.net/helpdesk/en/articles/integrations/opencart/">Click here</a> to learn how to set up your CoolPay account.';
$_['help_test']                = 'Allow transactions with test card data';
$_['help_autocapture']         = 'Automatically capture a payment when it has been authorized';
$_['help_autofee']             = 'Automatically add payment fees to the transaction';
$_['help_branding_id']         = 'Leave empty if you have no customized branding.';
$_['help_text_on_statement']   = 'Text to be displayed on cardholder’s statement. Max 22 ASCII chars. Currently supported by Clearhaus only.';
$_['help_remote_cron']         = 'Use this URL to set up a CRON task via a web-based CRON service. Set it up to run at least once per day.';
$_['help_order_number_prefix'] = 'Type in a string, if you wish to prefix the order numbers sent to CoolPay. This is not changing the store behavior.';
$_['tab_setting']              = 'Settings';
$_['tab_recurring']            = 'Recurring payments';


// Error
$_['error_permission']      = 'Warning: You do not have permission to modify payment CoolPay!';
$_['error_api_key']         = 'API key required!';
$_['error_private_key']     = 'Private key required!';
$_['error_payment_methods'] = 'Payment methods is a required field!';
