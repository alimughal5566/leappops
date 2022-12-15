<?php
include ("includes/head.php");
?>

    <!--text field overlay-->
    <div class="funnel-content funnel-contact-info-overlay">
        <div class="panel-aside">
            <div class="panel-aside__head">
                <div class="col-left">
                    <h4 class="panel-aside__title has-icon slider-icon">
                    <span>
                        <i class="ico ico-mail head-icon"></i>
                        Contact Info
                    </span>
                    </h4>
                </div>
                <div class="col-right">
                    <span title="Contact Info" class="ico-arrow-right back-ico"></span>
                </div>
            </div>
            <div class="panel-aside-wrap-overlay">
                <div class="panel-aside-holder">
                    <div class="panel-aside__body">
                        <!-- Tabs -->
                        <ul class="nav nav-tabs fb-tab" role="tablist">
                            <li class="nav-item fb-tab__item">
                                <a href="#step1" data-toggle="tab" role="tab" aria-controls="step 1" aria-selected="true" class="fb-tab__link active">
                                    1 step
                                </a>
                            </li>
                            <li class="nav-item fb-tab__item">
                                <a href="#step2" data-toggle="tab" role="tab" aria-controls="step 2" aria-selected="false" class="fb-tab__link">
                                    2 step
                                </a>
                            </li>
                            <li class="nav-item fb-tab__item">
                                <a href="#step3" data-toggle="tab" role="tab" aria-controls="step 3" aria-selected="false" class="fb-tab__link">
                                    3 step
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div id="step1" role="tabpanel" class="tab-pane fade show active">
                                <!-- Question -->
                                <div class="form-group" data-parent>
                                    <div class="fb-modal__row">
                                        <div class="fb-modal__option">Question</div>
                                        <div class="fb-modal__control fb-modal__control_middle">
                                            <span class="fb-tooltip">
                                                <span class="question-mark el-tooltip" title='<div class="overlay-tooltip">Tooltip Content</div>'>?</span>
                                            </span>
                                            <div class="fb-toggle">
                                                <input class="fb-field-label" data-opener type="checkbox" data-toggle="toggle" data-on="off" data-off="on" data-onstyle="off" data-offstyle="on" checked>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fb-modal__border-row" data-slide style="display: block">
                                        <div class="fb-form">
                                            <div class="fb-froala classic-editor__wrapper">
                                                <div class="fb-froala__init question-heading">Question</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Description -->
                                <div class="form-group" data-parent>
                                    <div class="fb-modal__row">
                                        <div class="fb-modal__option">Description</div>
                                        <div class="fb-modal__control">
                                            <div class="fb-toggle">
                                                <input class="fb-field-label" data-opener type="checkbox" data-toggle="toggle" data-on="off" data-off="on" data-onstyle="off" data-offstyle="on">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fb-modal__border-row" data-slide style="display: none">
                                        <div class="fb-form">
                                            <div class="fb-froala classic-editor__wrapper">
                                                <div class="fb-froala__init description-text">Description</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Field Label -->
                                <div class="form-group" data-parent>
                                    <div class="fb-modal__row">
                                        <div class="fb-modal__option">Field label</div>
                                        <div class="fb-modal__control">
                                            <div class="fb-toggle">
                                                <input class="fb-field-label" data-opener type="checkbox" data-toggle="toggle" data-on="off" data-off="on" data-onstyle="off" data-offstyle="on">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fb-modal__border-row" data-slide style="display: none">
                                        <div class="fb-form">
                                            <div class="fb-form__caption">
                                                <span class="fb-form__middle">Contact Info Field Label</span>
                                                <span class="fb-tooltip">
                                                    <span class="question-mark el-tooltip" title='<div class="overlay-tooltip">Tooltip Content</div>'>?</span>
                                                </span>
                                            </div>
                                            <div class="fb-form__group">
                                                <input type="text" class="form-control fb-form-control label-form-control" value="Contact Info">
                                                <span class="tag-box">
                                                    <i class="fa fa-tag"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Contact Form Setup -->
                                <div class="form-group" data-parent>
                                    <div class="fb-modal__row">
                                        <div class="fb-modal__option">
                                            Contact Form Setup
                                        </div>
                                        <div class="fb-modal__control">
                                            <div class="fb-modal__handler" data-handler>
                                                <i class="fa fa-chevron-down"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fb-modal__border-row" data-handler-slide style="display: none;">
                                        <div class="fb-options fb-modal_form-setup fb-options_drop-down contact-fields-wrap">
                                            <div class="fb-options__group-clone" style="display: block">
                                                <div class="grouping-label">input 1</div>
                                                <div class="fb-form__group">
                                                    <div class="input-type-step1-parent select2-parent">
                                                        <select name="input-type-step1" class="input-type-step1"></select>
                                                    </div>
                                                </div>
                                                <div class="fb-form__group">
                                                    <div class="contact-variation-step1-parent select2-parent">
                                                        <select name="contact-variation-step1" class="contact-variation-step1"></select>
                                                    </div>
                                                </div>
                                                <div class="fb-form__group first-name" style="display: block">
                                                    <input type="text" class="form-control" placeholder="First Name">
                                                </div>
                                                <div class="fb-form__group last-name" style="display: none">
                                                    <input type="text" class="form-control" placeholder="Last Name">
                                                </div>
                                                <div class="fb-form__group full-name" style="display: none">
                                                    <input type="text" class="form-control" placeholder="Full Name">
                                                </div>
                                            </div>
                                            <div class="fb-options__group-clone input2-field" style="display:none">
                                                <div class="grouping-label">input 2</div>
                                                <ul class="fb-form__list">
                                                    <li class="fb-form__item">
                                                        <div class="fb-form__input">
                                                            <div class="input-type1-step1-parent select2-parent">
                                                                <select name="input-type-step1" class="input-type1-step1"></select>
                                                            </div>
                                                        </div>
                                                        <div class="fb-form__control hide-button-2">
                                                            <span class="tag-box tag-box_lg">
                                                                <i class="ico ico-cross"></i>
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li class="fb-form__item">
                                                        <div class="fb-form__group email-field" style="display: block">
                                                            <input type="text" class="form-control" placeholder="Email Address">
                                                        </div>
                                                        <div class="fb-form__group name-field" style="display: none">
                                                            <input type="text" class="form-control" placeholder="Name">
                                                        </div>
                                                        <div class="fb-form__group number-field" style="display: none">
                                                            <input type="text" class="form-control" placeholder="Phone">
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="fb-options__group-clone input3-field" style="display: none">
                                                <div class="grouping-label">input 3</div>
                                                <ul class="fb-form__list">
                                                    <li class="fb-form__item">
                                                        <div class="fb-form__input">
                                                            <div class="input-type2-step1-parent select2-parent">
                                                                <select name="input-type-step1" class="input-type2-step1"></select>
                                                            </div>
                                                        </div>
                                                        <div class="fb-form__control hide-button-3">
                                                            <span class="tag-box tag-box_lg">
                                                                <i class="ico ico-cross"></i>
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li class="fb-form__item setting-wrap number-field" style="display: flex">
                                                        <input type="text" class="form-control" placeholder="Phone Number">
                                                        <div class="fb-form__control">
                                                            <a href="#advance-setting" data-toggle="modal" class="tag-box tag-box_lg el-tooltip" title='<div class="overlay-tooltip">Advance Settings</div>'>
                                                                <i class="ico ico-settings"></i>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="fb-form__item setting-wrap name-field" style="display: none">
                                                        <input type="text" class="form-control" placeholder="Name">
                                                    </li>
                                                    <li class="fb-form__item setting-wrap email-field" style="display: none">
                                                        <input type="text" class="form-control" placeholder="Email">
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="fb-modal__row_creat-group">
                                                <div class="fb-modal__row">
                                                    <a href="javascript:void();" class="lp-btn lp-btn_new-input button-primary add-input-button">
                                                    <span class="lp-btn__icon">
                                                        <i class="ico ico-plus"></i>
                                                    </span>
                                                        Add New Input
                                                    </a>
                                                    <a data-toggle="modal" href="#group-organize-pop" class="lp-btn lp-btn_new-input lp-btn_organize button-primary">
                                                    <span class="lp-btn__icon">
                                                        <i class="ico ico-dragging"></i>
                                                    </span>
                                                        Organize
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- CTA Button -->
                                <div class="form-group" data-parent>
                                    <div class="fb-modal__row">
                                        <div class="fb-modal__option">
                                            CTA Button
                                        </div>
                                        <div class="fb-modal__control">
                                            <div class="fb-modal__handler" data-handler>
                                                <i class="fa fa-chevron-down"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fb-modal__border-row" data-handler-slide style="display: none;">
                                        <div class="fb-form">
                                            <div class="fb-form__caption">
                                                <span class="fb-form__middle">Button Text</span>
                                                <span class="fb-tooltip">
                                                    <span class="question-mark el-tooltip" title='<div class="overlay-tooltip">Tooltip Content</div>'>?</span>
                                                </span>
                                            </div>
                                            <div class="fb-form__group">
                                                <input type="text" class="form-control fb-form-control btn-value-text" value="Next Step">
                                                <span class="tag-box">
                                                    <i class="fa fa-tag"></i>
                                                </span>
                                            </div>
                                            <div class="fb-modal__border-box fb-modal__border-box_pb-15">
                                                <div class="fb-modal__row">
                                                    <div class="fb-modal__option fb-modal__option_light">
                                                        <span class="fb-modal__middle">Font Size</span>
                                                    </div>
                                                    <div class="fb-modal__control">
                                                        <input id="question-contact-info-font-slider" class="form-control" type="text"/>
                                                        <input type="hidden" class="question-contact-info-font" value="18">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fb-modal__border-box fb-modal__border-box_plr0 fb-modal__border-box_plr0-top" data-parent>
                                                <div class="fb-modal__row">
                                                    <div class="fb-modal__option fb-modal__option_light">
                                                        <span class="fb-modal__middle">Button Icon</span>
                                                    </div>
                                                    <div class="fb-modal__control">
                                                        <div class="fb-toggle">
                                                            <input class="button-icon-opener fb-field-label" data-icon-opener type="checkbox" data-toggle="toggle" data-on="off" data-off="on" data-onstyle="off"  data-offstyle="on">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="button-icon-slide" data-icon-slide style="display: none">
                                                    <div class="fb-modal__border-row">
                                                        <div class="fb-modal__row icon-select-row">
                                                            <div class="icon-select">
                                                                <a href="#select-icon-modal" data-toggle="modal" class="select-icon-opener icon-select__wrapper">
                                                                <span class="icon-wrap">
                                                                    <i class="ico-start-rate"></i>
                                                                </span>
                                                                    <span class="text-icon-wrap">
                                                                <span class="icon-title">Icon:</span>
                                                                <span class="text-icon">Star</span>
                                                            </span>
                                                                </a>
                                                            </div>
                                                            <div class="icon-color">
                                                                <div id="question-contact-info-clr-icon" class="last-selected">
                                                                    <div class="last-selected__box" style="background: #ffffff"></div>
                                                                    <div class="last-selected__code">#ffffff</div>
                                                                </div>
                                                                <div class="color-box__panel-wrapper question-contact-info-icon-clr">
                                                                    <div class="color-box__panel-dropdown">
                                                                        <select class="color-picker-options">
                                                                            <option value="1">Color Selection:  Pick My Own</option>
                                                                            <option value="2">Color Selection:  Pull from Logo</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="color-picker-block">
                                                                        <div class="picker-block" id="question-contact-info-icon-clr">
                                                                        </div>
                                                                        <label class="color-box__label">Add custom color code</label>
                                                                        <div class="color-box__panel-rgb-wrapper">
                                                                            <div class="color-box__r">
                                                                                R: <input class="color-box__rgb" value="12"/>
                                                                            </div>
                                                                            <div class="color-box__g">
                                                                                G: <input class="color-box__rgb" value="205"/>
                                                                            </div>
                                                                            <div class="color-box__b">
                                                                                B: <input class="color-box__rgb" value="186"/>
                                                                            </div>
                                                                        </div>
                                                                        <div class="color-box__panel-hex-wrapper">
                                                                            <label class="color-box__hex-label">Hex code:</label>
                                                                            <input class="color-box__hex-block" value="#707d84" />
                                                                            <input type="hidden" id="contact-info-icon-clr-trigger" value="1">
                                                                        </div>
                                                                    </div>
                                                                    <div class="color-pull-block">
                                                                        <label class="color-box__label">Pulled colors</label>
                                                                        <ul class="color-box__list">
                                                                            <li class="color-box__item"></li>
                                                                            <li class="color-box__item red"></li>
                                                                            <li class="color-box__item green"></li>
                                                                            <li class="color-box__item black"></li>
                                                                            <li class="color-box__item blue"></li>
                                                                            <li class="color-box__item orange"></li>
                                                                            <li class="color-box__item yellow"></li>
                                                                            <li class="color-box__item parrot"></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="color-box__panel-pre-wrapper">
                                                                        <label class="color-box__label">Previously used colors</label>
                                                                        <ul class="color-box__list">
                                                                            <li class="color-box__item"></li>
                                                                            <li class="color-box__item"></li>
                                                                            <li class="color-box__item"></li>
                                                                            <li class="color-box__item"></li>
                                                                            <li class="color-box__item"></li>
                                                                            <li class="color-box__item"></li>
                                                                            <li class="color-box__item"></li>
                                                                            <li class="color-box__item"></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="fb-modal__row position-row">
                                                            <div class="fb-form__group">
                                                                <div class="question-contact-info-input-icon-parent select2-parent icon-parent">
                                                                    <select class="question-contact-info-icon-type"></select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="fb-modal__row">
                                                            <div class="fb-modal__option fb-modal__option_light">
                                                                <span class="fb-modal__middle">Icon Size</span>
                                                            </div>
                                                            <div class="fb-modal__control">
                                                                <input id="question-contact-info-icon-size-slider" class="form-control" type="text">
                                                                <input type="hidden" class="question-contact-info-icon-size" value="18">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fb-checkbox hide-checkbox">
                                                <input class="fb-checkbox__input hide-checkbox-field" type="checkbox" id="funnel-question-showonly-option-dropdown11">
                                                <label for="funnel-question-showonly-option-dropdown11" class="fb-checkbox__label">
                                                    <div class="fb-checkbox__box">
                                                        <div class="fb-checkbox__inner-box"></div>
                                                    </div>
                                                    <div class="fb-checkbox__caption">
                                                        Hide CTA button until the question is&nbsp;answered
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- security message -->
                                <div class="form-group" data-parent>
                                    <div class="fb-modal__row">
                                        <div class="fb-modal__option">Security Message</div>
                                        <div class="fb-modal__control">
                                            <div class="fb-toggle">
                                            <span class="fb-tooltip">
                                                <span class="question-mark el-tooltip" title='<div class="overlay-tooltip">Tooltip Content</div>'>?</span>
                                            </span>
                                                <input class="fb-field-label" data-opener type="checkbox" data-toggle="toggle" data-on="off" data-off="on" data-onstyle="off" data-offstyle="on">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fb-modal__border-row" data-slide style="display: none">
                                        <div class="fb-form__group-holder">
                                            <div class="question-contact-info-message-parent select2-parent message-parent">
                                                <select class="question-contact-info-message"></select>
                                            </div>
                                            <a href="#" class="edit-btn el-tooltip" title='<div class="security-tooltip">Edit Security Message</div>'><i class="ico-edit"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Additional -->
                                <div class="form-group" data-parent>
                                    <div class="fb-modal__row">
                                        <div class="fb-modal__option">Additional Content</div>
                                        <div class="fb-modal__control">
                                            <div class="fb-toggle">
                                                <input class="fb-field-label" data-opener type="checkbox" data-toggle="toggle" data-on="off" data-off="on" data-onstyle="off" data-offstyle="on">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fb-modal__border-row" data-slide style="display: none">
                                        <div class="fb-form">
                                            <div class="fb-froala classic-editor__wrapper">
                                                <div class="fb-froala__init"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fields detail -->
                                <div class="form-group" data-parent>
                                    <div class="fb-modal__row">
                                        <div class="fb-modal__option">
                                            Field Details
                                        </div>
                                        <div class="fb-modal__control">
                                            <div class="fb-modal__handler" data-handler>
                                                <i class="fa fa-chevron-down"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fb-modal__border-row" data-handler-slide style="display: none">
                                        <div class="fb-form">
                                            <div class="fb-form__caption">
                                                <span class="fb-form__middle">Unique Variable Name</span>
                                                <span class="fb-tooltip">
                                                    <span class="question-mark el-tooltip" title='<div class="overlay-tooltip">Tooltip Content</div>'>?</span>
                                                </span>
                                            </div>
                                            <div class="fb-form__group-holder">
                                                <div class="fb-form__group">
                                                    <input type="text" value="First_name" class="form-control fb-form-control">
                                                    <span class="tag-box">
                                                        <i class="ico-close-bracket"></i>
                                                    </span>
                                                </div>
                                                <a href="#" class="undo-btn el-tooltip" title='<div class="reset-tooltip">Reset to default</div>'><i class="ico-undo"></i></a>
                                            </div>
                                            <div class="fb-form__group-holder">
                                                <div class="fb-form__group">
                                                    <input type="text" value="Last_name" class="form-control fb-form-control">
                                                    <span class="tag-box">
                                                        <i class="ico-close-bracket"></i>
                                                    </span>
                                                </div>
                                                <a href="#" class="undo-btn el-tooltip" title='<div class="reset-tooltip">Reset to default</div>'><i class="ico-undo"></i></a>
                                            </div>
                                            <div class="fb-form__group-holder">
                                                <div class="fb-form__group">
                                                    <input type="email" value="Email_address" class="form-control fb-form-control">
                                                    <span class="tag-box">
                                                        <i class="ico-close-bracket"></i>
                                                    </span>
                                                </div>
                                                <a href="#" class="undo-btn el-tooltip" title='<div class="reset-tooltip">Reset to default</div>'><i class="ico-undo"></i></a>
                                            </div>
                                            <div class="fb-form__group-holder">
                                                <div class="fb-form__group">
                                                    <input type="tel" value="Phone_number" class="form-control fb-form-control">
                                                    <span class="tag-box">
                                                        <i class="ico-close-bracket"></i>
                                                    </span>
                                                </div>
                                                <a href="#" class="undo-btn el-tooltip" title='<div class="reset-tooltip">Reset to default</div>'><i class="ico-undo"></i></a>
                                            </div>
                                            <span class="zip-text">If you're not sure what you're doing, leave this as is!</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Settings -->
                                <div class="form-group" data-parent>
                                    <div class="tag-row">
                                        <div class="tag-row__title">Settings</div>
                                    </div>
                                    <div class="fb-modal__row" data-parent>
                                        <div class="fb-modal__option fb-modal__option_light">
                                            <span class="fb-modal__middle">Required</span>
                                            <span class="fb-tooltip">
                                        <span class="question-mark el-tooltip" title='<div class="overlay-tooltip">Tooltip Content</div>'>?</span>
                                    </span>
                                        </div>
                                        <div class="fb-modal__control">
                                            <div class="fb-toggle">
                                                <input data-parent type="checkbox" data-toggle="toggle" data-on="off" data-off="on" data-onstyle="off" data-offstyle="on">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fb-modal__row fb-modal__row_tb" data-parent>
                                        <div class="fb-modal__option fb-modal__option_light">
                                            <span class="fb-modal__middle">Auto-Cursor Focus</span>
                                            <span class="fb-tooltip">
                                        <span class="question-mark el-tooltip" title='<div class="overlay-tooltip">Tooltip Content</div>'>?</span>
                                    </span>
                                        </div>
                                        <div class="fb-modal__control">
                                            <div class="fb-toggle">
                                                <input data-parent type="checkbox" data-toggle="toggle" data-on="off" data-off="on" data-onstyle="off" data-offstyle="on">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="step2" role="tabpanel" class="tab-pane fade">
                                <!-- Edit Content Select -->
                                <div class="form-group" data-parent>
                                    <div class="fb-modal__border-row">
                                        <div class="edit-content-step2-parent select2-parent">
                                            <select name="edit-content-step2" class="edit-content-step2"></select>
                                        </div>
                                    </div>
                                </div>
                                <!-- Question -->
                                <div class="form-group" data-parent>
                                    <div class="fb-modal__row">
                                        <div class="fb-modal__option">Question</div>
                                        <div class="fb-modal__control fb-modal__control_middle">
                                            <span class="fb-tooltip">
                                                <span class="question-mark el-tooltip" title='<div class="overlay-tooltip">Tooltip Content</div>'>?</span>
                                            </span>
                                            <div class="fb-toggle">
                                                <input class="fb-field-label" data-opener type="checkbox" data-toggle="toggle" data-on="off" data-off="on" data-onstyle="off" data-offstyle="on" checked>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fb-modal__border-row" data-slide style="display: block">
                                        <div class="fb-form">
                                            <div class="fb-froala classic-editor__wrapper">
                                                <div class="fb-froala__init question-heading">Question</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Description -->
                                <div class="form-group" data-parent>
                                    <div class="fb-modal__row">
                                        <div class="fb-modal__option">Description</div>
                                        <div class="fb-modal__control">
                                            <div class="fb-toggle">
                                                <input class="fb-field-label" data-opener type="checkbox" data-toggle="toggle" data-on="off" data-off="on" data-onstyle="off" data-offstyle="on">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fb-modal__border-row" data-slide style="display: none">
                                        <div class="fb-form">
                                            <div class="fb-froala classic-editor__wrapper">
                                                <div class="fb-froala__init description-text">Description</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Field Label -->
                                <div class="form-group" data-parent>
                                    <div class="fb-modal__row">
                                        <div class="fb-modal__option">Field label</div>
                                        <div class="fb-modal__control">
                                            <div class="fb-toggle">
                                                <input class="fb-field-label" data-opener type="checkbox" data-toggle="toggle" data-on="off" data-off="on" data-onstyle="off" data-offstyle="on">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fb-modal__border-row" data-slide style="display: none">
                                        <div class="fb-form">
                                            <div class="fb-form__caption">
                                                <span class="fb-form__middle">Contact Info Field Label</span>
                                                <span class="fb-tooltip">
                                                    <span class="question-mark el-tooltip" title='<div class="overlay-tooltip">Tooltip Content</div>'>?</span>
                                                </span>
                                            </div>
                                            <div class="fb-form__group">
                                                <input type="text" class="form-control fb-form-control label-form-control" value="Contact Info">
                                                <span class="tag-box">
                                                    <i class="fa fa-tag"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Contact Form Setup -->
                                <div class="form-group" data-parent>
                                    <div class="fb-modal__row">
                                        <div class="fb-modal__option">
                                            Contact Form Setup
                                        </div>
                                        <div class="fb-modal__control">
                                            <div class="fb-modal__handler" data-handler>
                                                <i class="fa fa-chevron-down"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fb-modal__border-row" data-handler-slide style="display: none;">
                                        <div class="fb-options fb-modal_form-setup fb-options_drop-down contact-fields-wrap">
                                            <div class="fb-options__group-clone" style="display: block">
                                                <div class="grouping-label">input 1</div>
                                                <div class="fb-form__group">
                                                    <div class="input-type-step2-parent select2-parent">
                                                        <select name="input-type-step2" class="input-type-step2"></select>
                                                    </div>
                                                </div>
                                                <div class="fb-form__group">
                                                    <div class="contact-variation-step2-parent select2-parent">
                                                        <select name="contact-variation-step2" class="contact-variation-step2"></select>
                                                    </div>
                                                </div>
                                                <div class="fb-form__group first-name" style="display: block">
                                                    <input type="text" class="form-control" placeholder="First Name">
                                                </div>
                                                <div class="fb-form__group last-name" style="display: none">
                                                    <input type="text" class="form-control" placeholder="Last Name">
                                                </div>
                                                <div class="fb-form__group full-name" style="display: none">
                                                    <input type="text" class="form-control" placeholder="Full Name">
                                                </div>
                                            </div>
                                            <div class="fb-options__group-clone input2-field" style="display:none">
                                                <div class="grouping-label">input 2</div>
                                                <ul class="fb-form__list">
                                                    <li class="fb-form__item">
                                                        <div class="fb-form__input">
                                                            <div class="input-type1-step2-parent select2-parent">
                                                                <select name="input-type-step2" class="input-type1-step2"></select>
                                                            </div>
                                                        </div>
                                                        <div class="fb-form__control hide-button-2">
                                                            <span class="tag-box tag-box_lg">
                                                                <i class="ico ico-cross"></i>
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li class="fb-form__item">
                                                        <div class="fb-form__group email-field" style="display: block">
                                                            <input type="text" class="form-control" placeholder="Email Address">
                                                        </div>
                                                        <div class="fb-form__group name-field" style="display: none">
                                                            <input type="text" class="form-control" placeholder="Name">
                                                        </div>
                                                        <div class="fb-form__group number-field" style="display: none">
                                                            <input type="text" class="form-control" placeholder="Phone">
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="fb-options__group-clone input3-field" style="display: none">
                                                <div class="grouping-label">input 3</div>
                                                <ul class="fb-form__list">
                                                    <li class="fb-form__item">
                                                        <div class="fb-form__input">
                                                            <div class="input-type2-step2-parent select2-parent">
                                                                <select name="input-type-step2" class="input-type2-step2"></select>
                                                            </div>
                                                        </div>
                                                        <div class="fb-form__control hide-button-3">
                                                            <span class="tag-box tag-box_lg">
                                                                <i class="ico ico-cross"></i>
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li class="fb-form__item setting-wrap number-field" style="display: flex">
                                                        <input type="text" class="form-control" placeholder="Phone Number">
                                                        <div class="fb-form__control">
                                                            <a href="#advance-setting" data-toggle="modal" class="tag-box tag-box_lg el-tooltip" title='<div class="overlay-tooltip">Advance Settings</div>'>
                                                                <i class="ico ico-settings"></i>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="fb-form__item setting-wrap name-field" style="display: none">
                                                        <input type="text" class="form-control" placeholder="Name">
                                                    </li>
                                                    <li class="fb-form__item setting-wrap email-field" style="display: none">
                                                        <input type="text" class="form-control" placeholder="Email">
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="fb-modal__row_creat-group">
                                                <div class="fb-modal__row">
                                                    <a href="javascript:void();" class="lp-btn lp-btn_new-input button-primary add-input-button">
                                                    <span class="lp-btn__icon">
                                                        <i class="ico ico-plus"></i>
                                                    </span>
                                                        Add New Input
                                                    </a>
                                                    <a data-toggle="modal" href="#group-organize-pop" class="lp-btn lp-btn_new-input lp-btn_organize button-primary">
                                                    <span class="lp-btn__icon">
                                                        <i class="ico ico-dragging"></i>
                                                    </span>
                                                        Organize
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- CTA Button -->
                                <div class="form-group" data-parent>
                                    <div class="fb-modal__row">
                                        <div class="fb-modal__option">
                                            CTA Button
                                        </div>
                                        <div class="fb-modal__control">
                                            <div class="fb-modal__handler" data-handler>
                                                <i class="fa fa-chevron-down"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fb-modal__border-row" data-handler-slide style="display: none;">
                                        <div class="fb-form">
                                            <div class="fb-form__caption">
                                                <span class="fb-form__middle">Button Text</span>
                                                <span class="fb-tooltip">
                                                    <span class="question-mark el-tooltip" title='<div class="overlay-tooltip">Tooltip Content</div>'>?</span>
                                                </span>
                                            </div>
                                            <div class="fb-form__group">
                                                <input type="text" class="form-control fb-form-control btn-value-text" value="Next Step">
                                                <span class="tag-box">
                                                    <i class="fa fa-tag"></i>
                                                </span>
                                            </div>
                                            <div class="fb-modal__border-box fb-modal__border-box_pb-15">
                                                <div class="fb-modal__row">
                                                    <div class="fb-modal__option fb-modal__option_light">
                                                        <span class="fb-modal__middle">Font Size</span>
                                                    </div>
                                                    <div class="fb-modal__control">
                                                        <input id="question-contact-info-font-slider-step2" class="form-control" type="text"/>
                                                        <input type="hidden" class="question-contact-info-font-step2" value="18">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fb-modal__border-box fb-modal__border-box_plr0 fb-modal__border-box_plr0-top" data-parent>
                                                <div class="fb-modal__row">
                                                    <div class="fb-modal__option fb-modal__option_light">
                                                        <span class="fb-modal__middle">Button Icon</span>
                                                    </div>
                                                    <div class="fb-modal__control">
                                                        <div class="fb-toggle">
                                                            <input class="button-icon-opener fb-field-label" data-icon-opener type="checkbox" data-toggle="toggle" data-on="off" data-off="on" data-onstyle="off"  data-offstyle="on">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="button-icon-slide" data-icon-slide style="display: none">
                                                    <div class="fb-modal__border-row">
                                                        <div class="fb-modal__row icon-select-row">
                                                            <div class="icon-select">
                                                                <a href="#select-icon-modal" data-toggle="modal" class="select-icon-opener icon-select__wrapper">
                                                                <span class="icon-wrap">
                                                                    <i class="ico-start-rate"></i>
                                                                </span>
                                                                    <span class="text-icon-wrap">
                                                                <span class="icon-title">Icon:</span>
                                                                <span class="text-icon">Star</span>
                                                            </span>
                                                                </a>
                                                            </div>
                                                            <div class="icon-color">
                                                                <div id="question-contact-info-clr-icon-step2" class="last-selected">
                                                                    <div class="last-selected__box" style="background: #ffffff"></div>
                                                                    <div class="last-selected__code">#ffffff</div>
                                                                </div>
                                                                <div class="color-box__panel-wrapper question-contact-info-icon-clr-step2">
                                                                    <div class="color-box__panel-dropdown">
                                                                        <select class="color-picker-options">
                                                                            <option value="1">Color Selection:  Pick My Own</option>
                                                                            <option value="2">Color Selection:  Pull from Logo</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="color-picker-block">
                                                                        <div class="picker-block" id="question-contact-info-icon-clr-step2">
                                                                        </div>
                                                                        <label class="color-box__label">Add custom color code</label>
                                                                        <div class="color-box__panel-rgb-wrapper">
                                                                            <div class="color-box__r">
                                                                                R: <input class="color-box__rgb" value="12"/>
                                                                            </div>
                                                                            <div class="color-box__g">
                                                                                G: <input class="color-box__rgb" value="205"/>
                                                                            </div>
                                                                            <div class="color-box__b">
                                                                                B: <input class="color-box__rgb" value="186"/>
                                                                            </div>
                                                                        </div>
                                                                        <div class="color-box__panel-hex-wrapper">
                                                                            <label class="color-box__hex-label">Hex code:</label>
                                                                            <input class="color-box__hex-block" value="#707d84" />
                                                                            <input type="hidden" id="contact-info-icon-clr-trigger-step2" value="1">
                                                                        </div>
                                                                    </div>
                                                                    <div class="color-pull-block">
                                                                        <label class="color-box__label">Pulled colors</label>
                                                                        <ul class="color-box__list">
                                                                            <li class="color-box__item"></li>
                                                                            <li class="color-box__item red"></li>
                                                                            <li class="color-box__item green"></li>
                                                                            <li class="color-box__item black"></li>
                                                                            <li class="color-box__item blue"></li>
                                                                            <li class="color-box__item orange"></li>
                                                                            <li class="color-box__item yellow"></li>
                                                                            <li class="color-box__item parrot"></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="color-box__panel-pre-wrapper">
                                                                        <label class="color-box__label">Previously used colors</label>
                                                                        <ul class="color-box__list">
                                                                            <li class="color-box__item"></li>
                                                                            <li class="color-box__item"></li>
                                                                            <li class="color-box__item"></li>
                                                                            <li class="color-box__item"></li>
                                                                            <li class="color-box__item"></li>
                                                                            <li class="color-box__item"></li>
                                                                            <li class="color-box__item"></li>
                                                                            <li class="color-box__item"></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="fb-modal__row position-row">
                                                            <div class="fb-form__group">
                                                                <div class="question-contact-info-input-icon-parent-step2 select2-parent icon-parent">
                                                                    <select class="question-contact-info-icon-type-step2"></select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="fb-modal__row">
                                                            <div class="fb-modal__option fb-modal__option_light">
                                                                <span class="fb-modal__middle">Icon Size</span>
                                                            </div>
                                                            <div class="fb-modal__control">
                                                                <input id="question-contact-info-icon-size-slider-step2" class="form-control" type="text">
                                                                <input type="hidden" class="question-contact-info-icon-size-step2" value="18">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fb-checkbox hide-checkbox">
                                                <input class="fb-checkbox__input hide-checkbox-field" type="checkbox" id="funnel-question-showonly-option-dropdown-step2">
                                                <label for="funnel-question-showonly-option-dropdown-step2" class="fb-checkbox__label">
                                                    <div class="fb-checkbox__box">
                                                        <div class="fb-checkbox__inner-box"></div>
                                                    </div>
                                                    <div class="fb-checkbox__caption">
                                                        Hide CTA button until the question is&nbsp;answered
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- security message -->
                                <div class="form-group" data-parent>
                                    <div class="fb-modal__row">
                                        <div class="fb-modal__option">Security Message</div>
                                        <div class="fb-modal__control">
                                            <div class="fb-toggle">
                                            <span class="fb-tooltip">
                                                <span class="question-mark el-tooltip" title='<div class="overlay-tooltip">Tooltip Content</div>'>?</span>
                                            </span>
                                                <input class="fb-field-label" data-opener type="checkbox" data-toggle="toggle" data-on="off" data-off="on" data-onstyle="off" data-offstyle="on">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fb-modal__border-row" data-slide style="display: none">
                                        <div class="fb-form__group-holder">
                                            <div class="question-contact-info-message-parent-step2 select2-parent message-parent">
                                                <select class="question-contact-info-message-step2"></select>
                                            </div>
                                            <a href="#" class="edit-btn el-tooltip" title='<div class="security-tooltip">Edit Security Message</div>'><i class="ico-edit"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Additional -->
                                <div class="form-group" data-parent>
                                    <div class="fb-modal__row">
                                        <div class="fb-modal__option">Additional Content</div>
                                        <div class="fb-modal__control">
                                            <div class="fb-toggle">
                                                <input class="fb-field-label" data-opener type="checkbox" data-toggle="toggle" data-on="off" data-off="on" data-onstyle="off" data-offstyle="on">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fb-modal__border-row" data-slide style="display: none">
                                        <div class="fb-form">
                                            <div class="fb-froala classic-editor__wrapper">
                                                <div class="fb-froala__init"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fields detail -->
                                <div class="form-group" data-parent>
                                    <div class="fb-modal__row">
                                        <div class="fb-modal__option">
                                            Field Details
                                        </div>
                                        <div class="fb-modal__control">
                                            <div class="fb-modal__handler" data-handler>
                                                <i class="fa fa-chevron-down"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fb-modal__border-row" data-handler-slide style="display: none">
                                        <div class="fb-form">
                                            <div class="fb-form__caption">
                                                <span class="fb-form__middle">Unique Variable Name</span>
                                                <span class="fb-tooltip">
                                                    <span class="question-mark el-tooltip" title='<div class="overlay-tooltip">Tooltip Content</div>'>?</span>
                                                </span>
                                            </div>
                                            <div class="fb-form__group-holder">
                                                <div class="fb-form__group">
                                                    <input type="text" value="First_name" class="form-control fb-form-control">
                                                    <span class="tag-box">
                                                        <i class="ico-close-bracket"></i>
                                                    </span>
                                                </div>
                                                <a href="#" class="undo-btn el-tooltip" title='<div class="reset-tooltip">Reset to default</div>'><i class="ico-undo"></i></a>
                                            </div>
                                            <div class="fb-form__group-holder">
                                                <div class="fb-form__group">
                                                    <input type="text" value="Last_name" class="form-control fb-form-control">
                                                    <span class="tag-box">
                                                        <i class="ico-close-bracket"></i>
                                                    </span>
                                                </div>
                                                <a href="#" class="undo-btn el-tooltip" title='<div class="reset-tooltip">Reset to default</div>'><i class="ico-undo"></i></a>
                                            </div>
                                            <div class="fb-form__group-holder">
                                                <div class="fb-form__group">
                                                    <input type="email" value="Email_address" class="form-control fb-form-control">
                                                    <span class="tag-box">
                                                        <i class="ico-close-bracket"></i>
                                                    </span>
                                                </div>
                                                <a href="#" class="undo-btn el-tooltip" title='<div class="reset-tooltip">Reset to default</div>'><i class="ico-undo"></i></a>
                                            </div>
                                            <div class="fb-form__group-holder">
                                                <div class="fb-form__group">
                                                    <input type="tel" value="Phone_number" class="form-control fb-form-control">
                                                    <span class="tag-box">
                                                        <i class="ico-close-bracket"></i>
                                                    </span>
                                                </div>
                                                <a href="#" class="undo-btn el-tooltip" title='<div class="reset-tooltip">Reset to default</div>'><i class="ico-undo"></i></a>
                                            </div>
                                            <span class="zip-text">If you're not sure what you're doing, leave this as is!</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Settings -->
                                <div class="form-group" data-parent>
                                    <div class="tag-row">
                                        <div class="tag-row__title">Settings</div>
                                    </div>
                                    <div class="fb-modal__row" data-parent>
                                        <div class="fb-modal__option fb-modal__option_light">
                                            <span class="fb-modal__middle">Required</span>
                                            <span class="fb-tooltip">
                                        <span class="question-mark el-tooltip" title='<div class="overlay-tooltip">Tooltip Content</div>'>?</span>
                                    </span>
                                        </div>
                                        <div class="fb-modal__control">
                                            <div class="fb-toggle">
                                                <input data-parent type="checkbox" data-toggle="toggle" data-on="off" data-off="on" data-onstyle="off" data-offstyle="on">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fb-modal__row fb-modal__row_tb" data-parent>
                                        <div class="fb-modal__option fb-modal__option_light">
                                            <span class="fb-modal__middle">Auto-Cursor Focus</span>
                                            <span class="fb-tooltip">
                                        <span class="question-mark el-tooltip" title='<div class="overlay-tooltip">Tooltip Content</div>'>?</span>
                                    </span>
                                        </div>
                                        <div class="fb-modal__control">
                                            <div class="fb-toggle">
                                                <input data-parent type="checkbox" data-toggle="toggle" data-on="off" data-off="on" data-onstyle="off" data-offstyle="on">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="step3" role="tabpanel" class="tab-pane fade">
                                <!-- Edit Content Select -->
                                <div class="form-group" data-parent>
                                    <div class="fb-modal__border-row">
                                        <div class="edit-content-step3-parent select2-parent">
                                            <select name="edit-content-step3" class="edit-content-step3"></select>
                                        </div>
                                    </div>
                                </div>
                                <!-- Question -->
                                <div class="form-group" data-parent>
                                    <div class="fb-modal__row">
                                        <div class="fb-modal__option">Question</div>
                                        <div class="fb-modal__control fb-modal__control_middle">
                                            <span class="fb-tooltip">
                                                <span class="question-mark el-tooltip" title='<div class="overlay-tooltip">Tooltip Content</div>'>?</span>
                                            </span>
                                            <div class="fb-toggle">
                                                <input class="fb-field-label" data-opener type="checkbox" data-toggle="toggle" data-on="off" data-off="on" data-onstyle="off" data-offstyle="on" checked>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fb-modal__border-row" data-slide style="display: block">
                                        <div class="fb-form">
                                            <div class="fb-froala classic-editor__wrapper">
                                                <div class="fb-froala__init question-heading">Question</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Description -->
                                <div class="form-group" data-parent>
                                    <div class="fb-modal__row">
                                        <div class="fb-modal__option">Description</div>
                                        <div class="fb-modal__control">
                                            <div class="fb-toggle">
                                                <input class="fb-field-label" data-opener type="checkbox" data-toggle="toggle" data-on="off" data-off="on" data-onstyle="off" data-offstyle="on">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fb-modal__border-row" data-slide style="display: none">
                                        <div class="fb-form">
                                            <div class="fb-froala classic-editor__wrapper">
                                                <div class="fb-froala__init description-text">Description</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Field Label -->
                                <div class="form-group" data-parent>
                                    <div class="fb-modal__row">
                                        <div class="fb-modal__option">Field label</div>
                                        <div class="fb-modal__control">
                                            <div class="fb-toggle">
                                                <input class="fb-field-label" data-opener type="checkbox" data-toggle="toggle" data-on="off" data-off="on" data-onstyle="off" data-offstyle="on">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fb-modal__border-row" data-slide style="display: none">
                                        <div class="fb-form">
                                            <div class="fb-form__caption">
                                                <span class="fb-form__middle">Contact Info Field Label</span>
                                                <span class="fb-tooltip">
                                                    <span class="question-mark el-tooltip" title='<div class="overlay-tooltip">Tooltip Content</div>'>?</span>
                                                </span>
                                            </div>
                                            <div class="fb-form__group">
                                                <input type="text" class="form-control fb-form-control label-form-control" value="Contact Info">
                                                <span class="tag-box">
                                                    <i class="fa fa-tag"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Contact Form Setup -->
                                <div class="form-group" data-parent>
                                    <div class="fb-modal__row">
                                        <div class="fb-modal__option">
                                            Contact Form Setup
                                        </div>
                                        <div class="fb-modal__control">
                                            <div class="fb-modal__handler" data-handler>
                                                <i class="fa fa-chevron-down"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fb-modal__border-row" data-handler-slide style="display: none;">
                                        <div class="fb-options fb-modal_form-setup fb-options_drop-down contact-fields-wrap">
                                            <div class="fb-options__group-clone" style="display: block">
                                                <div class="grouping-label">input 1</div>
                                                <div class="fb-form__group">
                                                    <div class="input-type-step3-parent select2-parent">
                                                        <select name="input-type-step3" class="input-type-step3"></select>
                                                    </div>
                                                </div>
                                                <div class="fb-form__group">
                                                    <div class="contact-variation-step3-parent select2-parent">
                                                        <select name="contact-variation-step3" class="contact-variation-step3"></select>
                                                    </div>
                                                </div>
                                                <div class="fb-form__group first-name" style="display: block">
                                                    <input type="text" class="form-control" placeholder="First Name">
                                                </div>
                                                <div class="fb-form__group last-name" style="display: none">
                                                    <input type="text" class="form-control" placeholder="Last Name">
                                                </div>
                                                <div class="fb-form__group full-name" style="display: none">
                                                    <input type="text" class="form-control" placeholder="Full Name">
                                                </div>
                                            </div>
                                            <div class="fb-options__group-clone input2-field" style="display:none">
                                                <div class="grouping-label">input 2</div>
                                                <ul class="fb-form__list">
                                                    <li class="fb-form__item">
                                                        <div class="fb-form__input">
                                                            <div class="input-type1-step3-parent select2-parent">
                                                                <select name="input-type-step3" class="input-type1-step3"></select>
                                                            </div>
                                                        </div>
                                                        <div class="fb-form__control hide-button-2">
                                                            <span class="tag-box tag-box_lg">
                                                                <i class="ico ico-cross"></i>
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li class="fb-form__item">
                                                        <div class="fb-form__group email-field" style="display: block">
                                                            <input type="text" class="form-control" placeholder="Email Address">
                                                        </div>
                                                        <div class="fb-form__group name-field" style="display: none">
                                                            <input type="text" class="form-control" placeholder="Name">
                                                        </div>
                                                        <div class="fb-form__group number-field" style="display: none">
                                                            <input type="text" class="form-control" placeholder="Phone">
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="fb-options__group-clone input3-field" style="display: none">
                                                <div class="grouping-label">input 3</div>
                                                <ul class="fb-form__list">
                                                    <li class="fb-form__item">
                                                        <div class="fb-form__input">
                                                            <div class="input-type2-step3-parent select2-parent">
                                                                <select name="input-type-step3" class="input-type2-step3"></select>
                                                            </div>
                                                        </div>
                                                        <div class="fb-form__control hide-button-3">
                                                            <span class="tag-box tag-box_lg">
                                                                <i class="ico ico-cross"></i>
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li class="fb-form__item setting-wrap number-field" style="display: flex">
                                                        <input type="text" class="form-control" placeholder="Phone Number">
                                                        <div class="fb-form__control">
                                                            <a href="#advance-setting" data-toggle="modal" class="tag-box tag-box_lg el-tooltip" title='<div class="overlay-tooltip">Advance Settings</div>'>
                                                                <i class="ico ico-settings"></i>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="fb-form__item setting-wrap name-field" style="display: none">
                                                        <input type="text" class="form-control" placeholder="Name">
                                                    </li>
                                                    <li class="fb-form__item setting-wrap email-field" style="display: none">
                                                        <input type="text" class="form-control" placeholder="Email">
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="fb-modal__row_creat-group">
                                                <div class="fb-modal__row">
                                                    <a href="javascript:void();" class="lp-btn lp-btn_new-input button-primary add-input-button">
                                                    <span class="lp-btn__icon">
                                                        <i class="ico ico-plus"></i>
                                                    </span>
                                                        Add New Input
                                                    </a>
                                                    <a data-toggle="modal" href="#group-organize-pop" class="lp-btn lp-btn_new-input lp-btn_organize button-primary">
                                                    <span class="lp-btn__icon">
                                                        <i class="ico ico-dragging"></i>
                                                    </span>
                                                        Organize
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- CTA Button -->
                                <div class="form-group" data-parent>
                                    <div class="fb-modal__row">
                                        <div class="fb-modal__option">
                                            CTA Button
                                        </div>
                                        <div class="fb-modal__control">
                                            <div class="fb-modal__handler" data-handler>
                                                <i class="fa fa-chevron-down"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fb-modal__border-row" data-handler-slide style="display: none;">
                                        <div class="fb-form">
                                            <div class="fb-form__caption">
                                                <span class="fb-form__middle">Button Text</span>
                                                <span class="fb-tooltip">
                                                    <span class="question-mark el-tooltip" title='<div class="overlay-tooltip">Tooltip Content</div>'>?</span>
                                                </span>
                                            </div>
                                            <div class="fb-form__group">
                                                <input type="text" class="form-control fb-form-control btn-value-text" value="Next Step">
                                                <span class="tag-box">
                                                    <i class="fa fa-tag"></i>
                                                </span>
                                            </div>
                                            <div class="fb-modal__border-box fb-modal__border-box_pb-15">
                                                <div class="fb-modal__row">
                                                    <div class="fb-modal__option fb-modal__option_light">
                                                        <span class="fb-modal__middle">Font Size</span>
                                                    </div>
                                                    <div class="fb-modal__control">
                                                        <input id="question-contact-info-font-slider-step3" class="form-control" type="text"/>
                                                        <input type="hidden" class="question-contact-info-font-step3" value="18">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fb-modal__border-box fb-modal__border-box_plr0 fb-modal__border-box_plr0-top" data-parent>
                                                <div class="fb-modal__row">
                                                    <div class="fb-modal__option fb-modal__option_light">
                                                        <span class="fb-modal__middle">Button Icon</span>
                                                    </div>
                                                    <div class="fb-modal__control">
                                                        <div class="fb-toggle">
                                                            <input class="button-icon-opener fb-field-label" data-icon-opener type="checkbox" data-toggle="toggle" data-on="off" data-off="on" data-onstyle="off"  data-offstyle="on">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="button-icon-slide" data-icon-slide style="display: none">
                                                    <div class="fb-modal__border-row">
                                                        <div class="fb-modal__row icon-select-row">
                                                            <div class="icon-select">
                                                                <a href="#select-icon-modal" data-toggle="modal" class="select-icon-opener icon-select__wrapper">
                                                                <span class="icon-wrap">
                                                                    <i class="ico-start-rate"></i>
                                                                </span>
                                                                    <span class="text-icon-wrap">
                                                                <span class="icon-title">Icon:</span>
                                                                <span class="text-icon">Star</span>
                                                            </span>
                                                                </a>
                                                            </div>
                                                            <div class="icon-color">
                                                                <div id="question-contact-info-clr-icon-step3" class="last-selected">
                                                                    <div class="last-selected__box" style="background: #ffffff"></div>
                                                                    <div class="last-selected__code">#ffffff</div>
                                                                </div>
                                                                <div class="color-box__panel-wrapper
                                                                question-contact-info-icon-clr-step3">
                                                                    <div class="color-box__panel-dropdown">
                                                                        <select class="color-picker-options">
                                                                            <option value="1">Color Selection:  Pick My Own</option>
                                                                            <option value="2">Color Selection:  Pull from Logo</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="color-picker-block">
                                                                        <div class="picker-block" id="question-contact-info-icon-clr-step3">
                                                                        </div>
                                                                        <label class="color-box__label">Add custom color code</label>
                                                                        <div class="color-box__panel-rgb-wrapper">
                                                                            <div class="color-box__r">
                                                                                R: <input class="color-box__rgb" value="12"/>
                                                                            </div>
                                                                            <div class="color-box__g">
                                                                                G: <input class="color-box__rgb" value="205"/>
                                                                            </div>
                                                                            <div class="color-box__b">
                                                                                B: <input class="color-box__rgb" value="186"/>
                                                                            </div>
                                                                        </div>
                                                                        <div class="color-box__panel-hex-wrapper">
                                                                            <label class="color-box__hex-label">Hex code:</label>
                                                                            <input class="color-box__hex-block" value="#707d84" />
                                                                            <input type="hidden" id="contact-info-icon-clr-trigger-step3" value="1">
                                                                        </div>
                                                                    </div>
                                                                    <div class="color-pull-block">
                                                                        <label class="color-box__label">Pulled colors</label>
                                                                        <ul class="color-box__list">
                                                                            <li class="color-box__item"></li>
                                                                            <li class="color-box__item red"></li>
                                                                            <li class="color-box__item green"></li>
                                                                            <li class="color-box__item black"></li>
                                                                            <li class="color-box__item blue"></li>
                                                                            <li class="color-box__item orange"></li>
                                                                            <li class="color-box__item yellow"></li>
                                                                            <li class="color-box__item parrot"></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="color-box__panel-pre-wrapper">
                                                                        <label class="color-box__label">Previously used colors</label>
                                                                        <ul class="color-box__list">
                                                                            <li class="color-box__item"></li>
                                                                            <li class="color-box__item"></li>
                                                                            <li class="color-box__item"></li>
                                                                            <li class="color-box__item"></li>
                                                                            <li class="color-box__item"></li>
                                                                            <li class="color-box__item"></li>
                                                                            <li class="color-box__item"></li>
                                                                            <li class="color-box__item"></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="fb-modal__row position-row">
                                                            <div class="fb-form__group">
                                                                <div class="question-contact-info-input-icon-parent-step3 select2-parent icon-parent">
                                                                    <select class="question-contact-info-icon-type-step3"></select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="fb-modal__row">
                                                            <div class="fb-modal__option fb-modal__option_light">
                                                                <span class="fb-modal__middle">Icon Size</span>
                                                            </div>
                                                            <div class="fb-modal__control">
                                                                <input id="question-contact-info-icon-size-slider-step3" class="form-control" type="text">
                                                                <input type="hidden" class="question-contact-info-icon-size-step3" value="18">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fb-checkbox hide-checkbox">
                                                <input class="fb-checkbox__input hide-checkbox-field" type="checkbox" id="funnel-question-showonly-option-dropdown-step3">
                                                <label for="funnel-question-showonly-option-dropdown-step3" class="fb-checkbox__label">
                                                    <div class="fb-checkbox__box">
                                                        <div class="fb-checkbox__inner-box"></div>
                                                    </div>
                                                    <div class="fb-checkbox__caption">
                                                        Hide CTA button until the question is&nbsp;answered
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- security message -->
                                <div class="form-group" data-parent>
                                    <div class="fb-modal__row">
                                        <div class="fb-modal__option">Security Message</div>
                                        <div class="fb-modal__control">
                                            <div class="fb-toggle">
                                            <span class="fb-tooltip">
                                                <span class="question-mark el-tooltip" title='<div class="overlay-tooltip">Tooltip Content</div>'>?</span>
                                            </span>
                                                <input class="fb-field-label" data-opener type="checkbox" data-toggle="toggle" data-on="off" data-off="on" data-onstyle="off" data-offstyle="on">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fb-modal__border-row" data-slide style="display: none">
                                        <div class="fb-form__group-holder">
                                            <div class="question-contact-info-message-parent-step3 select2-parent message-parent">
                                                <select class="question-contact-info-message-step3"></select>
                                            </div>
                                            <a href="#" class="edit-btn el-tooltip" title='<div class="security-tooltip">Edit Security Message</div>'><i class="ico-edit"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Additional -->
                                <div class="form-group" data-parent>
                                    <div class="fb-modal__row">
                                        <div class="fb-modal__option">Additional Content</div>
                                        <div class="fb-modal__control">
                                            <div class="fb-toggle">
                                                <input class="fb-field-label" data-opener type="checkbox" data-toggle="toggle" data-on="off" data-off="on" data-onstyle="off" data-offstyle="on">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fb-modal__border-row" data-slide style="display: none">
                                        <div class="fb-form">
                                            <div class="fb-froala classic-editor__wrapper">
                                                <div class="fb-froala__init"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fields detail -->
                                <div class="form-group" data-parent>
                                    <div class="fb-modal__row">
                                        <div class="fb-modal__option">
                                            Field Details
                                        </div>
                                        <div class="fb-modal__control">
                                            <div class="fb-modal__handler" data-handler>
                                                <i class="fa fa-chevron-down"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fb-modal__border-row" data-handler-slide style="display: none">
                                        <div class="fb-form">
                                            <div class="fb-form__caption">
                                                <span class="fb-form__middle">Unique Variable Name</span>
                                                <span class="fb-tooltip">
                                                    <span class="question-mark el-tooltip" title='<div class="overlay-tooltip">Tooltip Content</div>'>?</span>
                                                </span>
                                            </div>
                                            <div class="fb-form__group-holder">
                                                <div class="fb-form__group">
                                                    <input type="text" value="First_name" class="form-control fb-form-control">
                                                    <span class="tag-box">
                                                        <i class="ico-close-bracket"></i>
                                                    </span>
                                                </div>
                                                <a href="#" class="undo-btn el-tooltip" title='<div class="reset-tooltip">Reset to default</div>'><i class="ico-undo"></i></a>
                                            </div>
                                            <div class="fb-form__group-holder">
                                                <div class="fb-form__group">
                                                    <input type="text" value="Last_name" class="form-control fb-form-control">
                                                    <span class="tag-box">
                                                        <i class="ico-close-bracket"></i>
                                                    </span>
                                                </div>
                                                <a href="#" class="undo-btn el-tooltip" title='<div class="reset-tooltip">Reset to default</div>'><i class="ico-undo"></i></a>
                                            </div>
                                            <div class="fb-form__group-holder">
                                                <div class="fb-form__group">
                                                    <input type="email" value="Email_address" class="form-control fb-form-control">
                                                    <span class="tag-box">
                                                        <i class="ico-close-bracket"></i>
                                                    </span>
                                                </div>
                                                <a href="#" class="undo-btn el-tooltip" title='<div class="reset-tooltip">Reset to default</div>'><i class="ico-undo"></i></a>
                                            </div>
                                            <div class="fb-form__group-holder">
                                                <div class="fb-form__group">
                                                    <input type="tel" value="Phone_number" class="form-control fb-form-control">
                                                    <span class="tag-box">
                                                        <i class="ico-close-bracket"></i>
                                                    </span>
                                                </div>
                                                <a href="#" class="undo-btn el-tooltip" title='<div class="reset-tooltip">Reset to default</div>'><i class="ico-undo"></i></a>
                                            </div>
                                            <span class="zip-text">If you're not sure what you're doing, leave this as is!</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Settings -->
                                <div class="form-group" data-parent>
                                    <div class="tag-row">
                                        <div class="tag-row__title">Settings</div>
                                    </div>
                                    <div class="fb-modal__row" data-parent>
                                        <div class="fb-modal__option fb-modal__option_light">
                                            <span class="fb-modal__middle">Required</span>
                                            <span class="fb-tooltip">
                                        <span class="question-mark el-tooltip" title='<div class="overlay-tooltip">Tooltip Content</div>'>?</span>
                                    </span>
                                        </div>
                                        <div class="fb-modal__control">
                                            <div class="fb-toggle">
                                                <input data-parent type="checkbox" data-toggle="toggle" data-on="off" data-off="on" data-onstyle="off" data-offstyle="on">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fb-modal__row fb-modal__row_tb" data-parent>
                                        <div class="fb-modal__option fb-modal__option_light">
                                            <span class="fb-modal__middle">Auto-Cursor Focus</span>
                                            <span class="fb-tooltip">
                                        <span class="question-mark el-tooltip" title='<div class="overlay-tooltip">Tooltip Content</div>'>?</span>
                                    </span>
                                        </div>
                                        <div class="fb-modal__control">
                                            <div class="fb-toggle">
                                                <input data-parent type="checkbox" data-toggle="toggle" data-on="off" data-off="on" data-onstyle="off" data-offstyle="on">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-aside__footer">
                <div class="action">
                    <ul class="action__list justify-content-end">
                        <li class="action__item">
                            <button class="button button-cancel">Close</button>
                        </li>
                        <li class="action__item">
                            <button class="button button-secondary">Save</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- contain the main content of the page -->
        <div id="content">
            <!-- header of the page -->
            <?php
            include ("includes/funnel-header.php");
            ?>
            <!-- contain main informative part of the site -->
            <!-- content of the page -->
            <main class="main">
                <!-- content of the page -->
                <section class="main-content">

                </section>
            </main>
        </div>
    </div>

    <!-- select icon modal -->
    <div class="modal fade select-icon-modal" id="select-icon-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Select Icon</h5>
                </div>
                <div class="modal-body">
                    <div class="icons-list-holder">
                        <ul class="icons-list">

                        </ul>
                    </div>
                </div>
                <div class="modal-footer">
                    <ul class="btns-list">
                        <li>
                            <button type="button" class="button button-cancel btn-cancel-icon" data-dismiss="modal">Close</button>
                        </li>
                        <li>
                            <button type="button" class="button button-primary btn-add-icon disabled" disabled>Select</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- organize group modal -->
    <div class="modal fade organize-pop" id="group-organize-pop">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Organize Inputs</h5>
                </div>
                <div class="modal-body pb-0">
                    <div class="organize-group">
                        <ul class="organize-group__head">
                            <span>Input Type</span>
                            <span>Options</span>
                        </ul>
                        <ul class="organize-group__list">
                            <li class="organize-group__item">
                                <span class="organize-group__name">Name</span>
                                <span class="organize-group__action">
                                            <i class="ico ico-dragging"></i>
                                        </span>
                            </li>
                            <li class="organize-group__item">
                                <span class="organize-group__name">Email</span>
                                <span class="organize-group__action">
                                            <i class="ico ico-dragging"></i>
                                        </span>
                            </li>
                            <li class="organize-group__item">
                                <span class="organize-group__name">Phone</span>
                                <span class="organize-group__action">
                                            <i class="ico ico-dragging"></i>
                                        </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="action">
                        <ul class="action__list">
                            <li class="action__item">
                                <button type="button" class="button button-bold button-cancel" data-dismiss="modal">Cancel</button>
                            </li>
                            <li class="action__item">
                                <button class="button button-bold button-primary" type="submit">Save</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Advance settings modal -->
    <div class="modal fade" id="advance-setting">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Advance Settings</h5>
                </div>
                <div class="modal-body pb-0">
                    <div class="form-group">
                        <div class="advance-country-code-parent select2-parent">
                            <select name="country-code" class="country-code"></select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="advance-phone-format-parent select2-parent">
                            <select name="phone-format" class="phone-format"></select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="action">
                        <ul class="action__list">
                            <li class="action__item">
                                <button type="button" class="button button-bold button-cancel" data-dismiss="modal">Cancel</button>
                            </li>
                            <li class="action__item">
                                <button class="button button-bold button-primary" type="submit">Save</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
    include ("includes/footer.php");
?>
