<?php
$user = elgg_get_logged_in_user_entity();
echo '<div class="panel-heading">';
echo '<h3 class="mrgn-tp-sm" style="border-bottom:0px;">'.$user->name.'</h3>';
echo '</div>';


if($user->job){
    $content .= '<div style="font-size:22px;"><strong>'.$user->job.'</strong></div>';
}
$content .=  '<div>'.$user->department.'</div>';
if($user->location){
    $content .= '<div>'.$user->location.'</div>';
}
if($user->phone){
    $content .= '<div><span class="fa fa-phone fa-lg mrgn-rght-sm" style="width:16px;"></span>'.$user->phone.'</div>';
}
if($user->mobile){
    $content .= '<div><span class="fa fa-mobile fa-lg mrgn-rght-sm" style="width:16px;"></span>'.$user->mobile.'</div>';
}
$content .= '<div><span class="fa fa-envelope  mrgn-rght-sm" style="width:16px;"></span>'.$user->email.'</div>';


echo '<div class="panel-body">';
echo elgg_view_image_block(elgg_view_entity_icon($user, 'medium', array('use_link' => false, 'use_hover' => false, 'class' => 'pro-avatar', 'force_size' => true,)), $content);
echo '</div>';

echo '<script src="'.elgg_get_site_url().'mod/GC_profileStrength/views/default/widgets/profile_completness/js/circliful.min.js"></script>';
echo '<link rel="stylesheet" href="'.elgg_get_site_url().'mod/GC_profileStrength/views/default/widgets/profile_completness/css/circliful.css">';
