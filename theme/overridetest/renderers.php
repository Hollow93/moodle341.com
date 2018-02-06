<?php
require_once($CFG->dirroot . '/theme/aardvark/renderers.php');

class theme_overridetest_core_renderer extends core_renderer {

    public function heading($text, $level = 2, $classes = 'main', $id = null) {
        $content  = html_writer::start_tag('div', array('class'=>'headingcontainer'));
        $content .= html_writer::empty_tag('img', array('src'=>$this->pix_url('headingpic', 'theme'), 'alt'=>'', 'class'=>'headingimage'));
        $content .= parent::heading($text, $level, $classes, $id);
        $content .= html_writer::end_tag('div');
        return $content;
    }
}