<?php
require_once(__DIR__.'/../../config.php');
require_once($CFG->dirroot.'/local/message/classes/form/edit.php');

$PAGE->set_url(new moodle_url('/local/message/manage.php'));

$PAGE->set_context(\context_system::instance());
$PAGE->set_title("Manage Message");



//

$mform = new edit();

echo $OUTPUT->header();

$mform->display();

echo $OUTPUT->footer();