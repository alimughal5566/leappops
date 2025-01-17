<?php
include ("includes/head.php");
?>

    <!--text field overlay-->
    <div class="funnel-content funnel-textfield-overlay">
        <div class="panel-aside">
            <div class="panel-aside__head">
                <div class="col-left">
                    <h4 class="panel-aside__title has-icon txtfield-icon">
                    <span>
                        <i class="ico ico-select-text head-icon"></i>
                        Text Field
                    </span>
                    </h4>
                </div>
                <div class="col-right">
                    <span class="ico-arrow-right back-ico"></span>
                </div>
            </div>
            <div class="panel-aside-wrap-overlay">
                <div class="panel-aside-holder">
                    <div class="panel-aside__body">
                        <!-- Tabs -->
                        <ul class="nav nav-tabs fb-tab" role="tablist">
                            <li class="nav-item fb-tab__item">
                                <a href="#short-text" data-toggle="tab" role="tab" aria-selected="true" class="fb-tab__link active">
                                    Short Text Input
                                </a>
                            </li>
                            <li class="nav-item fb-tab__item">
                                <a href="#long-text" data-toggle="tab" role="tab" aria-selected="false" class="fb-tab__link">
                                    Long Text Input
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div role="tabpanel" id="short-text" class="tab-pane fade show fb-tab__tab-pane active">
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
                                                <div class="fb-froala__init question-heading">Anything else we should consider in the advisor matching process?</div>
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
                                                <div class="fb-froala__init description-text">Feel free to answer “no” if you've already provided enough information.</div>
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
                                                <input class="fb-field-label" data-opener type="checkbox" data-toggle="toggle" data-on="off" data-off="on" data-onstyle="off" data-offstyle="on" checked>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fb-modal__border-row" data-slide style="display: block">
                                        <div class="fb-form">
                                            <div class="fb-form__caption">
                                                <span class="fb-form__middle">Blank Text Field Label</span>
                                                <span class="fb-tooltip">
                                                    <span class="question-mark el-tooltip" title='<div class="overlay-tooltip">Tooltip Content</div>'>?</span>
                                                </span>
                                            </div>
                                            <div class="fb-form__group">
                                                <input type="text" class="form-control fb-form-control label-form-control" value="Your Answer">
                                                <span class="tag-box">
                                                    <i class="fa fa-tag"></i>
                                                </span>
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
                                            <div class="fb-modal__handler open" data-handler>
                                                <i class="fa fa-chevron-down"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fb-modal__border-row" data-handler-slide style="display: block;">
                                        <div class="fb-form">
                                            <div class="fb-form__caption">
                                                <span class="fb-form__middle">Button Text</span>
                                                <span class="fb-tooltip">
                                                    <span class="question-mark el-tooltip" title='<div class="overlay-tooltip">Tooltip Content</div>'>?</span>
                                                </span>
                                            </div>
                                            <div class="fb-form__group">
                                                <input type="text" class="form-control fb-form-control btn-value-text" value="Continue">
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
                                                        <input id="textfield-font-slider" class="form-control" type="text"/>
                                                        <input type="hidden" class="textfield-font" value="20">
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
                                                                <div id="textfield-clr-icon" class="last-selected">
                                                                    <div class="last-selected__box" style="background: #ffffff"></div>
                                                                    <div class="last-selected__code">#ffffff</div>
                                                                </div>
                                                                <div class="color-box__panel-wrapper textfield-icon-clr">
                                                                    <div class="color-box__panel-dropdown">
                                                                        <select class="color-picker-options">
                                                                            <option value="1">Color Selection:  Pick My Own</option>
                                                                            <option value="2">Color Selection:  Pull from Logo</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="color-picker-block">
                                                                        <div class="picker-block" id="textfield-icon-clr">
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
                                                                            <input type="hidden" id="textfield-icon-clr-trigger" value="1">
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
                                                                <div class="textfield-input-icon-parent select2-parent icon-parent">
                                                                    <select class="textfield-icon-type"></select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="fb-modal__row">
                                                            <div class="fb-modal__option fb-modal__option_light">
                                                                <span class="fb-modal__middle">Icon Size</span>
                                                            </div>
                                                            <div class="fb-modal__control">
                                                                <input id="text-field-icon-size-slider" class="form-control" type="text">
                                                                <input type="hidden" class="text-field-icon-size" value="18">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fb-checkbox hide-checkbox">
                                                <input class="fb-checkbox__input hide-checkbox-field" type="checkbox" id="textfield-showonly-option">
                                                <label for="textfield-showonly-option" class="fb-checkbox__label">
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
                                            <div class="textfield-input-message-parent select2-parent message-parent">
                                                <select class="textfield-message-type"></select>
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
                                                    <input type="text" value="Text_field" class="form-control fb-form-control">
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
                                                <input data-parent type="checkbox" data-toggle="toggle" data-on="off" data-off="on" data-onstyle="off" data-offstyle="on" checked>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fb-modal__row fb-modal__row_tb" data-parent>
                                        <div class="fb-modal__option fb-modal__option_light">
                                            <span class="fb-modal__middle">Automatic Progress</span>
                                            <span class="fb-tooltip">
                                                <span class="question-mark el-tooltip" title='<div class="overlay-tooltip">Tooltip Content</div>'>?</span>
                                            </span>
                                        </div>
                                        <div class="fb-modal__control">
                                            <div class="fb-toggle">
                                                <input data-parent type="checkbox" data-toggle="toggle" data-on="off" data-off="on" data-onstyle="off" data-offstyle="on" checked>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" id="long-text" class="tab-pane fb-tab__tab-pane fade">
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
                                                <div class="fb-froala__init question-heading">Anything else we should consider in the advisor matching process?</div>
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
                                                <div class="fb-froala__init description-text">Feel free to answer “no” if you've already provided enough information.</div>
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
                                                <input class="fb-field-label" data-opener type="checkbox" data-toggle="toggle" data-on="off" data-off="on" data-onstyle="off" data-offstyle="on" checked>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fb-modal__border-row" data-slide style="display: block">
                                        <div class="fb-form">
                                            <div class="fb-form__caption">
                                                <span class="fb-form__middle">Blank Text Field Label</span>
                                                <span class="fb-tooltip">
                                                    <span class="question-mark el-tooltip" title='<div class="overlay-tooltip">Tooltip Content</div>'>?</span>
                                                </span>
                                            </div>
                                            <div class="fb-form__group">
                                                <input type="text" class="form-control fb-form-control label-form-control" value="Your Answer">
                                                <span class="tag-box">
                                                    <i class="fa fa-tag"></i>
                                                </span>
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
                                            <div class="fb-modal__handler open" data-handler>
                                                <i class="fa fa-chevron-down"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fb-modal__border-row" data-handler-slide style="display: block;">
                                        <div class="fb-form">
                                            <div class="fb-form__caption">
                                                <span class="fb-form__middle">Button Text</span>
                                                <span class="fb-tooltip">
                                                    <span class="question-mark el-tooltip" title='<div class="overlay-tooltip">Tooltip Content</div>'>?</span>
                                                </span>
                                            </div>
                                            <div class="fb-form__group">
                                                <input type="text" class="form-control fb-form-control btn-value-text" value="Continue">
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
                                                        <input id="textfield-font-slider-long" class="form-control" type="text"/>
                                                        <input type="hidden" class="textfield-font-long" value="20">
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
                                                                <div id="textfield-large-clr-icon" class="last-selected">
                                                                    <div class="last-selected__box" style="background: #ffffff"></div>
                                                                    <div class="last-selected__code">#ffffff</div>
                                                                </div>
                                                                <div class="color-box__panel-wrapper textfield-large-icon-clr">
                                                                    <div class="color-box__panel-dropdown">
                                                                        <select class="color-picker-options">
                                                                            <option value="1">Color Selection:  Pick My Own</option>
                                                                            <option value="2">Color Selection:  Pull from Logo</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="color-picker-block">
                                                                        <div class="picker-block" id="textfield-large-icon-clr">
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
                                                                            <input type="hidden" id="textfield-large-icon-clr-trigger" value="1">
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
                                                                <div class="textfield-input-icon-parent-long select2-parent icon-parent">
                                                                    <select class="textfield-icon-type-long"></select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="fb-modal__row">
                                                            <div class="fb-modal__option fb-modal__option_light">
                                                                <span class="fb-modal__middle">Icon Size</span>
                                                            </div>
                                                            <div class="fb-modal__control">
                                                                <input id="text-field-icon-size-slider-long" class="form-control" type="text">
                                                                <input type="hidden" class="text-field-icon-size-long" value="18">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fb-checkbox hide-checkbox">
                                                <input class="fb-checkbox__input hide-checkbox-field" type="checkbox" id="textfield-showonly-option">
                                                <label for="textfield-showonly-option" class="fb-checkbox__label">
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
                                            <div class="textfield-input-message-parent-long select2-parent message-parent">
                                                <select class="textfield-message-type-long"></select>
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
                                                    <input type="text" value="Text_field" class="form-control fb-form-control">
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
                                                <input data-parent type="checkbox" data-toggle="toggle" data-on="off" data-off="on" data-onstyle="off" data-offstyle="on" checked>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fb-modal__row fb-modal__row_tb" data-parent>
                                        <div class="fb-modal__option fb-modal__option_light">
                                            <span class="fb-modal__middle">Automatic Progress</span>
                                            <span class="fb-tooltip">
                                                <span class="question-mark el-tooltip" title='<div class="overlay-tooltip">Tooltip Content</div>'>?</span>
                                            </span>
                                        </div>
                                        <div class="fb-modal__control">
                                            <div class="fb-toggle">
                                                <input data-parent type="checkbox" data-toggle="toggle" data-on="off" data-off="on" data-onstyle="off" data-offstyle="on" checked>
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
                    <div class="text-field-questions-wrap">
                        <div class="question_answer">
                            <div class="row">
                                <div class="col">
                                    <div class="question_answer__title">
                                        <h1>Anything else we should consider in the advisor matching&nbsp;process?</h1>
                                        <div class="question_answer__text">
                                            <p>Feel free to answer “no” if you've already provided enough&nbsp;information.</p>
                                        </div>
                                    </div>
                                    <div class="question_answer__fields">
                                        <div class="step-holder">
                                            <div class="form-group">
                                                <div class="input-wrap">
                                                    <input type="text" id="your_answer" class="form-control validate-input" autocomplete="off" data-function-name="formValidation">
                                                    <label for="your_answer" class="input-label">your answer</label>
                                                    <span class="icon-valid"><span class="icon-check"></span></span>
                                                    <span class="icon-invalid"><span class="icon-cross"></span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="question_answer__fields">
                                        <div class="form-group text-center btn-wrap cta-btn-wrap">
                                            <a href="#" class="btn btn-secondary btn-next cta-btn">
                                                <span class="icon-holder"><span class="icon-wrap"><i class="icon ico-start-rate"></i></span></span>
                                                continue
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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

<?php
    include ("includes/footer.php");
?>
