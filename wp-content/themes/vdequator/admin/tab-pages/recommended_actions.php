<?php
$vdequator_actions = $this->recommended_actions;
$vdequator_actions_todo = get_option('vdequator_recommended_actions', false);
?>
<div id="recommended_actions" class="vdequator-tab-pane panel-close">
    <div class="action-list">
        <?php if ($vdequator_actions): foreach ($vdequator_actions as $key => $vdequator_actionValue): ?>
                <div class="action" id="<?php echo esc_attr($vdequator_actionValue['id']); ?>">
                    <div class="recommended_box col-md-6 col-sm-6 col-xs-12">
                        <img width="772" height="180" src="<?php echo esc_url(VDEQUATOR_TEMPLATE_DIR_URI) . '/images/' . str_replace(' ', '-', strtolower($vdequator_actionValue['title'])) . '.png'; ?>">
                        <div class="action-inner">
                            <h3 class="action-title"><?php echo esc_html($vdequator_actionValue['title']); ?></h3>
                            <div class="action-desc"><?php echo esc_html($vdequator_actionValue['desc']); ?></div>
                            <?php echo wp_kses_post($vdequator_actionValue['link']); ?>
                            <div class="action-watch">
                                <?php if (!$vdequator_actionValue['is_done']): ?>
                                    <?php if (!isset($vdequator_actions_todo[$vdequator_actionValue['id']]) || !$vdequator_actions_todo[$vdequator_actionValue['id']]): ?>
                                        <span class="dashicons dashicons-visibility"></span>
                                    <?php else: ?>
                                        <span class="dashicons dashicons-hidden"></span>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <span class="dashicons dashicons-yes"></span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach;
        endif; ?>
    </div>
</div>