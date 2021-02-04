<?php
if ($ADMIN->fulltree) {
    $settings->add(new admin_setting_configcheckbox(
        'local_message/showcourses',
        get_string('showcourses', 'local_message'),
        get_string('showcoursesdesc', 'local_message'),
        0
    ));
    $settings->add(new admin_setting_configtext('local_message/adminuser', 
                   'Administration user id:',
                   'User who can edit the academic schdedule', 2));
}
