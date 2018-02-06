<?php
/**
 * hollow theme for Moodle - Material-inspired theme based on bootstrap.
 *
 * DO NOT MODIFY THIS THEME!
 * COPY IT FIRST, THEN RENAME THE COPY AND MODIFY IT INSTEAD.
 *
 * For full information about creating Moodle themes, see:
 * http://docs.moodle.org/dev/Themes_2.0
 *
 * @package   theme_hollow
 * @author    Shaun Daubney
 * @copyright 2017 Newbury College
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {

	// Basic Heading.
    $name        = 'theme_hollow/basicheading';
    $heading     = get_string('basicheading', 'theme_hollow');
    $information = get_string('basicheadingdesc', 'theme_hollow');
    $setting     = new admin_setting_heading($name, $heading, $information);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Main colour setting.
    $name          = 'theme_hollow/maincolor';
    $title         = get_string('maincolor', 'theme_hollow');
    $description   = get_string('maincolordesc', 'theme_hollow');
    $default       = '#f98012';
    $previewconfig = NULL;
    $setting       = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Show site name along with small logo.
    $name        = 'theme_hollow/sitename';
    $title       = get_string('sitename', 'theme_hollow');
    $description = get_string('sitenamedesc', 'theme_hollow');
    $setting     = new admin_setting_configcheckbox($name, $title, $description, 0);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // General Alert setting.
    $name        = 'theme_hollow/generalalert';
    $title       = get_string('generalalert', 'theme_hollow');
    $description = get_string('generalalertdesc', 'theme_hollow');
    $default     = '';
    $setting     = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Custom CSS file.
    $name        = 'theme_hollow/customcss';
    $title       = get_string('customcss', 'theme_hollow');
    $description = get_string('customcssdesc', 'theme_hollow');
    $default     = '';
    $setting     = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Footer Options Heading.
    $name        = 'theme_hollow/footeroptheading';
    $heading     = get_string('footeroptheading', 'theme_hollow');
    $information = get_string('footeroptdesc', 'theme_hollow');
    $setting     = new admin_setting_heading($name, $heading, $information);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Copyright setting.
    $name        = 'theme_hollow/copyright';
    $title       = get_string('copyright', 'theme_hollow');
    $description = get_string('copyrightdesc', 'theme_hollow');
    $default     = '';
    $setting     = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Copyrightlink setting.
    $name        = 'theme_hollow/copyrightlink';
    $title       = get_string('copyrightlink', 'theme_hollow');
    $description = get_string('copyrightlinkdesc', 'theme_hollow');
    $default     = '';
    $setting     = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // CEOP.
    $name        = 'theme_hollow/ceop';
    $title       = get_string('ceop', 'theme_hollow');
    $description = get_string('ceopdesc', 'theme_hollow');
    $default     = '';
    $choices     = array(
        '' => get_string('ceopnone', 'theme_hollow'),
        'https://www.thinkuknow.org.au/site/how-report' => get_string('ceopaus', 'theme_hollow'),
        'https://www.ceop.police.uk/safety-centre/' => get_string('ceopuk', 'theme_hollow')
    );
    $setting     = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Custom footer setting.
    $name        = 'theme_hollow/customfooter';
    $title       = get_string('customfooter', 'theme_hollow');
    $description = get_string('customfooterdesc', 'theme_hollow');
    $default     = '';
    $setting     = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Disclaimer setting.
    $name        = 'theme_hollow/disclaimer';
    $title       = get_string('disclaimer', 'theme_hollow');
    $description = get_string('disclaimerdesc', 'theme_hollow');
    $default     = '';
    $setting     = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Social Icons Heading.
    $name        = 'theme_hollow/socialiconsheading';
    $heading     = get_string('socialiconsheading', 'theme_hollow');
    $information = get_string('socialiconsheadingdesc', 'theme_hollow');
    $setting     = new admin_setting_heading($name, $heading, $information);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Website url setting.
    $name        = 'theme_hollow/website';
    $title       = get_string('website', 'theme_hollow');
    $description = get_string('websitedesc', 'theme_hollow');
    $default     = '';
    $setting     = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Facebook url setting.
    $name        = 'theme_hollow/facebook';
    $title       = get_string('facebook', 'theme_hollow');
    $description = get_string('facebookdesc', 'theme_hollow');
    $default     = '';
    $setting     = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Twitter url setting.
    $name        = 'theme_hollow/twitter';
    $title       = get_string('twitter', 'theme_hollow');
    $description = get_string('twitterdesc', 'theme_hollow');
    $default     = '';
    $setting     = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Snapchat url setting.
    $name        = 'theme_hollow/snapchat';
    $title       = get_string('snapchat', 'theme_hollow');
    $description = get_string('snapchatdesc', 'theme_hollow');
    $default     = '';
    $setting     = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Google+ url setting.
    $name        = 'theme_hollow/googleplus';
    $title       = get_string('googleplus', 'theme_hollow');
    $description = get_string('googleplusdesc', 'theme_hollow');
    $default     = '';
    $setting     = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Flickr url setting.
    $name        = 'theme_hollow/flickr';
    $title       = get_string('flickr', 'theme_hollow');
    $description = get_string('flickrdesc', 'theme_hollow');
    $default     = '';
    $setting     = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Pinterest url setting.
    $name        = 'theme_hollow/pinterest';
    $title       = get_string('pinterest', 'theme_hollow');
    $description = get_string('pinterestdesc', 'theme_hollow');
    $default     = '';
    $setting     = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Instagram url setting.
    $name        = 'theme_hollow/instagram';
    $title       = get_string('instagram', 'theme_hollow');
    $description = get_string('instagramdesc', 'theme_hollow');
    $default     = '';
    $setting     = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // LinkedIn url setting.
    $name        = 'theme_hollow/linkedin';
    $title       = get_string('linkedin', 'theme_hollow');
    $description = get_string('linkedindesc', 'theme_hollow');
    $default     = '';
    $setting     = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Wikipedia url setting.
    $name        = 'theme_hollow/wikipedia';
    $title       = get_string('wikipedia', 'theme_hollow');
    $description = get_string('wikipediadesc', 'theme_hollow');
    $default     = '';
    $setting     = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // YouTube url setting.
    $name        = 'theme_hollow/youtube';
    $title       = get_string('youtube', 'theme_hollow');
    $description = get_string('youtubedesc', 'theme_hollow');
    $default     = '';
    $setting     = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Apple url setting.
    $name        = 'theme_hollow/apple';
    $title       = get_string('apple', 'theme_hollow');
    $description = get_string('appledesc', 'theme_hollow');
    $default     = '';
    $setting     = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Android url setting.
    $name        = 'theme_hollow/android';
    $title       = get_string('android', 'theme_hollow');
    $description = get_string('androiddesc', 'theme_hollow');
    $default     = '';
    $setting     = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
}