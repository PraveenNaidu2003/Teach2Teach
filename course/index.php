<?php

require_once("../config.php");
require_once($CFG->dirroot. '/course/lib.php');

$categoryid = optional_param('categoryid', 0, PARAM_INT); // Category id
$site = get_site();

if ($CFG->forcelogin) {
    require_login();
}

$heading = $site->fullname;
if ($categoryid) {
    $category = core_course_category::get($categoryid); // This will validate access.
    $PAGE->set_category_by_id($categoryid);
    $PAGE->set_url(new moodle_url('/course/index.php', array('categoryid' => $categoryid)));
    $PAGE->set_pagetype('course-index-category');
    $heading = $category->get_formatted_name();
} else if ($category = core_course_category::user_top()) {
    // Check if there is only one top-level category, if so use that.
    $categoryid = $category->id;
    $PAGE->set_url('/course/index.php');
    if ($category->is_uservisible() && $categoryid) {
        $PAGE->set_category_by_id($categoryid);
        $PAGE->set_context($category->get_context());
        if (!core_course_category::is_simple_site()) {
            $PAGE->set_url(new moodle_url('/course/index.php', array('categoryid' => $categoryid)));
            $heading = $category->get_formatted_name();
        }
    } else {
        $PAGE->set_context(context_system::instance());
    }
    $PAGE->set_pagetype('course-index-category');
} else {
    throw new moodle_exception('cannotviewcategory');
}

$PAGE->set_pagelayout('coursecategory');
$PAGE->set_primary_active_tab('home');
$PAGE->add_body_class('limitedwidth');
$courserenderer = $PAGE->get_renderer('core', 'course');

$PAGE->set_heading($heading);
$content = $courserenderer->course_category($categoryid);

$PAGE->set_secondary_active_tab('categorymain');

echo $OUTPUT->header();
echo $OUTPUT->skip_link_target();
echo $content;

// Trigger event, course category viewed.
$eventparams = array('context' => $PAGE->context, 'objectid' => $categoryid);
$event = \core\event\course_category_viewed::create($eventparams);
$event->trigger();

echo $OUTPUT->footer();
