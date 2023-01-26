<?php

class TimelineWidget extends \Elementor\Widget_Base
{
    public function __construct($data = [], $args = null)
    {
        // lets enqueue the scripts and styles
        wp_enqueue_style('elementor-timeline', plugins_url('assets/css/main.css', __DIR__));
        wp_enqueue_script('elementor-timeline', plugins_url('assets/js/main.js', __DIR__), ['jquery'], '1.0', true);

        parent::__construct($data, $args);
    }

    // outout the name for the widget
    public function get_name()
    {
        return 'timeline';
    }
    // output the title for the widget
    public function get_title()
    {
        // escape any possible HTML and also add to translation incase that exists
        return esc_html__('Timeline', 'elementor-timeline');
    }
    // output the icon for the widget
    public function get_icon()
    {
        return 'eicon-code';
    }
    // output the categories for the widget
    public function get_categories()
    {
        return ['general'];
    }
    // output the keywords for the widget
    public function get_keywords()
    {
        return ['timeline', 'elementor', 'custom'];
    }

    protected function register_controls()
    {
        // Content Tab Start

        $this->start_controls_section(
            'section_title',
            [
                'label' => esc_html__('Title', 'elementor-timeline'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => esc_html__('Time Line Items', 'elementor-timeline'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'type',
                        'label' => esc_html__('Type', 'elementor-timeline'),
                        'type' => \Elementor\Controls_Manager::SELECT,
                        'default' => 'item',
                        'options' => [
                            'item' => esc_html__('Item', 'elementor-timeline'),
                            'quote' => esc_html__('Quote', 'elementor-timeline'),
                            'image' => esc_html__('Image', 'elementor-timeline'),
                            'vimeo' => esc_html__('Vimeo', 'elementor-timeline'),
                        ],
                    ],
                    [
                        'name' => 'Text',
                        'label' => esc_html__('Text', 'elementor-timeline'),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__('Text', 'elementor-timeline'),
                        'placeholder' => esc_html__('Enter your title', 'elementor-timeline'),
                        'condition' => [
                            'type' => 'item',
                            'type' => 'quote',
                        ],
                    ],
                    [
                        'name' => 'image',
                        'label' => esc_html__('Image', 'elementor-timeline'),
                        'type' => \Elementor\Controls_Manager::MEDIA,
                        'default' => esc_html__('Image', 'elementor-timeline'),
                        'condition' => [
                            'type' => 'image',
                        ],
                    ],
                    [
                        'name' => 'vimeo',
                        'label' => esc_html__('Vimeo', 'elementor-timeline'),
                        'type' => \Elementor\Controls_Manager::URL,
                        'default' => esc_html__('Vimeo', 'elementor-timeline'),
                        'condition' => [
                            'type' => 'vimeo',
                        ],
                    ],
                ]
            ]
        );

        $this->end_controls_section();

        // Content Tab End


        // Style Tab Start

        $this->start_controls_section(
            'section_title_style',
            [
                'label' => esc_html__('Title', 'elementor-timeline'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label' => esc_html__('Text Color', 'elementor-timeline'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hello-world' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

        // Style Tab End
    }

    // proteced render property this is where the widget is outputted to the page
    protected function render()
    {
        $settings = $this->get_settings_for_display();
?>
        <div class="Timeline" id="Timeline">
            <div class="Timeline-line">
                <div class="Timeline-line-menu"></div>
            </div>

            <?php
                // echo "<pre>";
                // print_r($settings);
                // echo "</pre>";
                // die;
            ?>

            <?php foreach($settings as $setting) { ?>
            <div class="Timeline-item">
                <div class="Timeline-item-inner">
                    <div class="Timeline-item-index"></div>
                    <div class="Timeline-item-top">
                        <div class="Timeline-item-top-type">
                            <i></i> <span>Item</span>
                        </div>

                    </div>
                    <div class="Timeline-item-content">
                        <div class="Timeline-item-content-title">
                            Lorem ipsum dolor sit amet, consectetur adipisicing.
                        </div>
                        <div class="Timeline-item-content-body"></div>
                    </div>

                </div>
            </div>
            <?php } ?>

            <!-- <div class="Timeline-item Timeline-item--quote">
                <div class="Timeline-item-inner">
                    <div class="Timeline-item-index"></div>
                    <div class="Timeline-item-top">
                        <div class="Timeline-item-top-type">
                            <i></i> <span>Quote</span>
                        </div>

                    </div>
                    <div class="Timeline-item-content">
                        <div class="Timeline-item-content-title">
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                            </blockquote>
                        </div>
                        <div class="Timeline-item-content-body"></div>
                    </div>

                </div>
            </div> -->

            <!-- <div class="Timeline-item Timeline-item--image">
                <div class="Timeline-item-inner">
                    <div class="Timeline-item-index"></div>
                    <div class="Timeline-item-top">
                        <div class="Timeline-item-top-type">
                            <i></i> <span>Image</span>
                        </div>

                    </div>
                    <div class="Timeline-item-content">
                        <div class="Timeline-item-content-title">
                            Lorem ipsum dolor sit amet, consectetur adipisicing.
                        </div>
                        <div class="Timeline-item-content-body">
                            <img src="http://fakeimg.pl/350x200/ddd/FFF/?text=Hola">
                        </div>
                    </div>

                </div>
            </div> -->

            <!-- <div class="Timeline-item">
                <div class="Timeline-item-inner">
                    <div class="Timeline-item-index"></div>
                    <div class="Timeline-item-top">
                        <div class="Timeline-item-top-type">
                            <i></i> <span>Video</span>
                        </div>

                    </div>
                    <div class="Timeline-item-content">
                        <div class="Timeline-item-content-body">
                            <iframe src="//player.vimeo.com/video/112719694?title=0&byline=0&portrait=0" width="100%" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>

                </div>
            </div> -->

            <!-- <div class="Timeline-item">
                <div class="Timeline-item-inner">
                    <div class="Timeline-item-index"></div>
                    <div class="Timeline-item-top">
                        <div class="Timeline-item-top-type">
                            <i></i> <span>Item</span>
                        </div>

                    </div>
                    <div class="Timeline-item-content">
                        <div class="Timeline-item-content-title">
                            Lorem ipsum dolor sit amet, consectetur adipisicing.
                        </div>
                        <div class="Timeline-item-content-body"></div>
                    </div>

                </div>
            </div> -->

            <!-- <div class="Timeline-item Timeline-item--quote">
                <div class="Timeline-item-inner">
                    <div class="Timeline-item-index"></div>
                    <div class="Timeline-item-top">
                        <div class="Timeline-item-top-type">
                            <i></i> <span>Quote</span>
                        </div>

                    </div>
                    <div class="Timeline-item-content">
                        <div class="Timeline-item-content-title">
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum inventore quas deserunt, reprehenderit est doloribus praesentium minima sequi repudiandae libero!</p>
                            </blockquote>
                        </div>
                        <div class="Timeline-item-content-body"></div>
                    </div>

                </div>
            </div> -->

            <!-- <div class="Timeline-item">
                <div class="Timeline-item-inner">
                    <div class="Timeline-item-index"></div>
                    <div class="Timeline-item-top">
                        <div class="Timeline-item-top-type">
                            <i></i> <span>Item</span>
                        </div>

                    </div>
                    <div class="Timeline-item-content">
                        <div class="Timeline-item-content-title">
                            Lorem ipsum dolor sit amet, consectetur adipisicing.
                        </div>
                        <div class="Timeline-item-content-body"></div>
                    </div>

                </div>
            </div> -->

            <!-- <div class="Timeline-item">
                <div class="Timeline-item-inner">
                    <div class="Timeline-item-index"></div>
                    <div class="Timeline-item-top">
                        <div class="Timeline-item-top-type">
                            <i></i> <span>Item</span>
                        </div>

                    </div>
                    <div class="Timeline-item-content">
                        <div class="Timeline-item-content-title">
                            Lorem ipsum dolor sit amet, consectetur adipisicing.
                        </div>
                        <div class="Timeline-item-content-body"></div>
                    </div>

                </div>
            </div> -->

            <!-- <div class="Timeline-item Timeline-item--image">
                <div class="Timeline-item-inner">
                    <div class="Timeline-item-index"></div>
                    <div class="Timeline-item-top">
                        <div class="Timeline-item-top-type">
                            <i></i> <span>Image</span>
                        </div>

                    </div>
                    <div class="Timeline-item-content">
                        <div class="Timeline-item-content-title">
                            Lorem ipsum dolor sit amet, consectetur adipisicing.
                        </div>
                        <div class="Timeline-item-content-body">
                            <img src="http://fakeimg.pl/350x100/ddd/FFF/?text=Chao">
                        </div>
                    </div>

                </div>
            </div> -->

            <!-- <div class="Timeline-item Timeline-item--image">
                <div class="Timeline-item-inner">
                    <div class="Timeline-item-index"></div>
                    <div class="Timeline-item-top">
                        <div class="Timeline-item-top-type">
                            <i></i> <span>Image</span>
                        </div>

                    </div>
                    <div class="Timeline-item-content">
                        <div class="Timeline-item-content-title">
                            Lorem ipsum dolor sit amet, consectetur adipisicing.
                        </div>
                        <div class="Timeline-item-content-body">
                            <img src="http://placekitten.com/350/208">
                        </div>
                    </div>

                </div>
            </div> -->

        </div>
<?php
    }
}
