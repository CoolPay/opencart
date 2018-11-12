/*********************************************************************************
 *
 * This is the official CoolPay plugin for Opencart 3+
 * The plugin is developed for Quickpay by Perfect Solution ApS (http://perfect-solution.dk)
 *
 * This plugin only supports the v10+ manager.
 *
 * Limited plugin support is offered by CoolPay support.
 *
 *********************************************************************************/

1. Upload the content upload folder to the root of your OpenCart install. It is important to merge the folders and not replace them.
2. Navigate to your OpenCart administration page.
3. On your left, click the "Extensions" -> "Extensions" -> "Payments"
4. Find the Coolpay modules of your choice in the list and click the green install icon.
5. Click the blue button to edit the module.
6. Type in your merchant information and press save.
7. You are good to go.


/*********************************************************************************
 *
 * Recurring profiles (Subscriptions).
 *
 * Requirements: Cronjob support
 *
 *********************************************************************************/

The main module called "QuickPay" supports recurring payment profiles. Since OpenCart does not have a built in recurring payment trigger mechanism,
it is important to setup a cronjob if the recurring payments should be captured properly. Go the "CoolPay" module settings by clicking the
blue pencil button to the right.
Select the "Recurring payments" tab and copy the URL in the "Remote CRON URL" input field. It is advised that the cronjob is run at least once a day,
but once an hour is recommended.
