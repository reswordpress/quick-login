=== Quick Login ===
Contributors: andreiigna
Tags: login, sign in, twitter, google, facebook, linkedin, oauth, register
Requires at least: 4
Tested up to: 5.2
Requires PHP: 5.6
Stable tag: trunk
License: GPL-3.0-or-later
License URI: https://www.gnu.org/licenses/gpl-3.0.html

Enable login with social accounts! Supports Twitter, Facebook, Google, WordPress.com and LinkedIn

== Description ==

**Quick Login** lets your visitors register and login with a single click! Adds login with Facebook, Google, Twitter, LinkedIn and WordPress.com on Login page, Register page, Comment forms and WooCommerce Checkout.

Faster login or register will increase percent of logged in users and conversion on your site, especially helpful on e-commerce sites where the checkout should be as simple as possible.

= Included Providers =

The plugin is easy to set up, each provider has detailed instructions on how to enable it. These OAuth providers are available:

* Twitter
* Google
* Facebook
* WordPress.com
* LinkedIn

= Flexible placement =

Login buttons can be added on any page one can think of:

* Login form
* Register form
* WooCommerce pages: My account, Login, Register and Checkout
* Comment form
* Any page, with `[quick-login]` shortcode


= Other Features =

* Button style options - Choose the style of login buttons for your site
  * Icons
  * Buttons with icon & text
* Link / Unlink provider - Button on Users' profile page to link/unlink login provider

Social accounts are linked to a WordPress user account, and every account can be accessed with and without social account.
Newly created accounts are assigned the default User Role defined in WordPress Settings, usually the role being `Subscriber`.

> Be aware that Quick Login requires the PHP version to be at least 5.6

== Frequently Asked Questions ==

= How to enable login providers? =

All login providers are available on “WP Admin -> Settings -> Quick Login” page.
Each provider has detailed instructions for set up, including info on how to create or edit specific integrations and adding the cutom codes on your site.

= How to embed login buttons on a page, article or widget? =

Quick Login can add buttons on Login, Register, Comment and WooCommerce pages through plugin options.
Login buttons can be added in pages, articles or widgets with `[quick-login]` shortcode. There are more details on how to embed this shortcode in “WP Admin -> Settings -> Quick Login -> Embed section” on your site.

= How the log in or register process works? =

When a site visitor clicks on a Quick Login button, ex: `Sign in with Google`, the following process takes place:

* User is redirected to Google to authorise your website to read account info
* If authorised, user is sent back to your WordPress site
* If Google account is already linked to WordPress user, the WordPress user is logged in
* If Google account is not linked to a WordPress user AND the email matches a WordPress user, the Google account is linked to WordPress user and the user is logged in
* If Google account is not linked AND email doesn't match a WordPress user, a new WordPress is registered with details (username, email, name) from Google account

The process is similar for the other providers, except in the case when the provider (ex: Pinterest, Instagram) doesn't allow the WordPress site to read user's email. In this case, the user can't be authenticated on website and needs to Log in or Register first, then link the provider account in User Edit page.

= Quick Login doesn't work, with errors on pages or logins not showing up =

Because of newer functionality & security in PHP, this plugin requires the PHP version to be at least 5.6.
If the website server already has PHP >= 5.6 and the plugin still doesn't work, please send a support request either on WordPress support forum or [plugin GitHub page](https://github.com/LayeredStudio/quick-login)

== Screenshots ==

1. Login form with Quick Login buttons
2. WooCommerce Checkout with Quick Login buttons
3. Main settings page: Set-up and enable providers, control style & placement
4. Link / Unlink providers on User profile page
5. Provider set-up page, with detailed instructions

== Changelog ==

= 1.2.1 - 15 May 2019 =
* Fixed - If specified, properly set Domain for Google G Suite

= 1.2 - 13 May 2019 =
* Updated - LinkedIn provider to use v2 API and scope

= 1.1 - 22 April 2019 =
* Updated - Compatibility with WordPress 5.2
* Updated - Blacklist common bad usernames (admin, office, mail, etc) when creating new accounts
* Updated - When creating a new account, name is converted to username

= 1.0 - 28 Feb 2019 =
* Added - Support for Google G Suite domain. [Thanks Jeffrey](https://github.com/LayeredStudio/quick-login/pull/2)
* Updated - Register user with built-in WordPress functions. [Thanks Jeffrey](https://github.com/LayeredStudio/quick-login/pull/1)
* Updated - Register user through WooCommerce functions, when installed

= 0.8 - 3 Feb 2019 =
* Updated - Facebook integration to use latest Facebook Graph API & fields

= 0.7 - 12 January 2019 =
* Added - Filter users in WP Admin by the linked provider

= 0.6 - 10 January 2019 =
* Updated - Security & functionality updates for login providers
* Updated - Do not allow registration for users without email address

= 0.5 - 23 July 2018 =
* Added - LinkedIn provider
* Updated - Show info & scope for each connected provider

= 0.4 - 29 May 2018 =
* Updated - Display connected providers on Users list page
* Fixed - Login form in comments only if user is logged out

= 0.3 - 11 May 2018 =
* Added - Link / Unlink accounts from User edit page & WooCommerce account page
* Added - More WP hooks

= 0.2 - 9 May 2018 =
* Added - Users' conected providers on Users page

= 0.1 =
* Plugin release. Includes Twitter, Google, Facebook and WordPress.com providers
