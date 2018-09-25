<?php

namespace Themes\ThemeDefault\Blocks;

use Versatile\Pages\Blocks\AbstractHandler;

class TestimonialHandler extends AbstractHandler
{
    protected $name = 'testimonial';

    protected $codename = 'testimonial';

    public function form()
    {
        /**
         * Testimonial Block
         */
        return [
            'name' => __('versatile-pages::generic.testimonial'),
            'template' => 'v-theme::blocks.testimonial',
            'fields' => [
                'content' => [
                    'field' => 'content',
                    'display_name' => __('versatile-pages::generic.testimonial_content'),
                    'partial' => 'text_area',
                    'required' => 1,
                    'placeholder' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.',
                ],
                'title' => [
                    'field' => 'title',
                    'display_name' => __('versatile-pages::generic.person'),
                    'partial' => 'text',
                    'required' => 1,
                    'placeholder' => 'John Doe',
                ],
                'sub_title' => [
                    'field' => 'sub_title',
                    'display_name' => __('versatile-pages::generic.sub_text'),
                    'partial' => 'text',
                    'required' => 0,
                    'placeholder' => 'Founder &amp; CEO',
                ],
                'br_1' => [
                    'field' => 'br_1',
                    'display_name' => __('versatile-pages::generic.line_break'),
                    'partial' => 'break',
                ],
                'image' => [
                    'field' => 'image',
                    'display_name' => __('versatile-pages::generic.image'),
                    'partial' => 'image',
                    'required' => 0,
                ],
                'br_2' => [
                    'field' => 'br_2',
                    'display_name' => __('versatile-pages::generic.line_break'),
                    'partial' => 'break',
                ],
                'spaces' => $this->spacesField(),
                'animate' => $this->animationsField(),
            ],
        ];
    }
}
