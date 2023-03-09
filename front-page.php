<?php
get_header();
$fields = get_field_objects();

get_template_part('partials/section','about', [
    'title' => $fields['name_sc1']['value'],
    'desc' => $fields['text_sc1']['value']
]);
get_template_part('partials/section','casino', [
    'title' => $fields['name_block_casino']['value'],
    'casino' => $fields['add_casino']['value']
]);
get_template_part('partials/section','faq', [
    'title' => $fields['title_sc3']['value'],
    'text' => $fields['text_sc3']['value'],
    'image' => $fields['image_faq']['value'],
    'faq' => $fields['add_faq']['value']
]);
get_template_part('partials/section','seotext', [
    'text' => $fields['seo_block']['value']
]);

get_footer();
