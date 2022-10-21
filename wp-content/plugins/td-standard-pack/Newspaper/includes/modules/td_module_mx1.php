<?php

class td_module_mx1 extends td_module {

    function __construct($post, $module_atts = array()) {
        //run the parrent constructor
        parent::__construct($post, $module_atts);
    }

    function render() {
        ob_start();
        $title_length = $this->get_shortcode_att('mx1_tl');
        $modified_date = $this->get_shortcode_att('show_modified_date');
        $time_ago = $this->get_shortcode_att('time_ago');
        $time_ago_add_txt = $this->get_shortcode_att('time_ago_add_txt');
        ?>

        <div class="<?php echo $this->get_module_classes();?>">
            <?php echo $this->get_image('td_356x220');?>

            <div class="td-module-meta-info">
                <?php echo $this->get_title($title_length);?>
                <div class="td-editor-date">
                    <?php if (td_util::get_option('tds_category_module_mx1') == 'yes') { echo $this->get_category(); }?>
                    <span class="td-author-date">
                        <?php echo $this->get_author();?>
                        <?php echo $this->get_date($modified_date, false, $time_ago, $time_ago_add_txt);?>
                    </span>
                </div>
            </div>

        </div>

        <?php return ob_get_clean();
    }
}