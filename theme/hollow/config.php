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

$THEME->name = 'hollow';
$THEME->doctype = 'html5';
$THEME->parents = array('bootstrapbase','clean');
$THEME->sheets = array('hollow','blockicons','settings');
$THEME->yuicssmodules = array();
$THEME->enable_dock = true;
$THEME->editor_sheets = array();
$THEME->rendererfactory = 'theme_overridden_renderer_factory';
$THEME->csspostprocess = 'theme_hollow_process_css';