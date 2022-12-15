<?php
include ("includes/head.php");
?>

    <!--text field overlay-->
    <div class="funnel-content funnel-address-overlay">
        <div class="panel-aside">
            <div class="panel-aside__head">
                <div class="col-left">
                    <h4 class="panel-aside__title has-icon zip-icon">
                        <span>
                            <i class="ico ico-building head-icon"></i>
                            Address
                        </span>
                    </h4>
                </div>
                <div class="col-right">
                    <img src="assets/images/powered-by-google.png" alt="powered-by-google">
                </div>
            </div>
            <div class="panel-aside-wrap-overlay">
                <div class="panel-aside-holder">
                    <div class="panel-aside__body">
                        <div class="form-group fb-modal__border-box fb-modal__border-box_ad">
                            <div class="fb-modal__row fb-modal__row_top-dropdown">
                                <div class="edit-content-address-parent select2-parent el-tooltip select2-parent_disabled"
                                     title='<div class="address-tooltip-content-wrap"><p>In the "Settings" section below, there is a toggle <br>switch that says "Google Map Verification Step."</p> Flip that "ON" first, then you can edit the content<br> of the Google Map Verification step.</div>'>
                                    <select name="edit-content-address" class="edit-content-address"></select>
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
                        <div class="form-group edit-content-hidden fb-address-first-step" data-parent>
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
                        <!-- CTA Button -->
                        <div class="form-group fb-modal__border-box fb-address-second-step" data-parent>
                            <div class="fb-modal__row">
                                <div class="fb-modal__option">
                                    Button Labels
                                    <span class="fb-tooltip">
                                       <span class="question-mark el-tooltip" title='<div class="overlay-tooltip">Tooltip Content</div>'>?</span>
                                    </span>
                                </div>
                                <div class="fb-modal__control">
                                    <div class="fb-modal__handler open" data-handler>
                                        <i class="fa fa-chevron-down"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="fb-modal__border-row fb-modal__border-row_menu" data-handler-slide style="display: block">
                                <div class="fb-options border-0 normal-option pt-0">
                                    <div class="fb-options__clone ui-sortable">
                                        <div class="fb-options__list">
                                            <div class="fb-options__col fb-options__col_field">
                                                <div class="fb-form__group">
                                                    <input type="text" class="form-control fb-form-control" placeholder="Text to confirm address">
                                                    <span class="tag-box">
                                                        <i class="fa fa-tag"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="fb-options__col fb-options__col_handler ui-sortable-handle">
                                                <span class="tag-box tag-box_move tag-box_lg">
                                                    <i class="ico ico-dragging"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="fb-options__list">
                                            <div class="fb-options__col fb-options__col_field">
                                                <div class="fb-form__group">
                                                    <input type="text" class="form-control fb-form-control" value="No, enter another address">
                                                    <span class="tag-box">
                                                        <i class="fa fa-tag"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="fb-options__col fb-options__col_handler ui-sortable-handle">
                                                <span class="tag-box tag-box_move tag-box_lg">
                                                    <i class="ico ico-dragging"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Field Label -->
                        <div class="form-group fb-address-first-step" data-parent>
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
                                        <span class="fb-form__middle">Address Field Label</span>
                                        <span class="fb-tooltip">
                                            <span class="question-mark el-tooltip" title='<div class="overlay-tooltip">Tooltip Content</div>'>?</span>
                                        </span>
                                    </div>
                                    <div class="fb-form__group">
                                        <input type="text" class="form-control fb-form-control label-form-control" value="Type in your address">
                                        <span class="tag-box">
                                            <i class="fa fa-tag"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- CTA Button -->
                        <div class="form-group fb-address-first-step" data-parent>
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
                                        <input type="text" class="form-control fb-form-control btn-value-text" value="CONTINUE">
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
                                                <input id="question-address-font-slider" class="form-control" type="text"/>
                                                <input type="hidden" class="question-address-font" value="18">
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
                                                        <div id="question-address-clr-icon" class="last-selected">
                                                            <div class="last-selected__box" style="background: #ffffff"></div>
                                                            <div class="last-selected__code">#ffffff</div>
                                                        </div>
                                                        <div class="color-box__panel-wrapper question-address-icon-clr">
                                                            <div class="color-box__panel-dropdown">
                                                                <select class="color-picker-options">
                                                                    <option value="1">Color Selection:  Pick My Own</option>
                                                                    <option value="2">Color Selection:  Pull from Logo</option>
                                                                </select>
                                                            </div>
                                                            <div class="color-picker-block">
                                                                <div class="picker-block" id="question-address-icon-clr">
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
                                                                    <input type="hidden" id="dropdown-icon-clr-trigger" value="1">
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
                                                        <div class="question-address-input-icon-parent select2-parent icon-parent">
                                                            <select class="question-address-icon-type"></select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="fb-modal__row">
                                                    <div class="fb-modal__option fb-modal__option_light">
                                                        <span class="fb-modal__middle">Icon Size</span>
                                                    </div>
                                                    <div class="fb-modal__control">
                                                        <input id="question-address-icon-size-slider" class="form-control" type="text">
                                                        <input type="hidden" class="question-address-icon-size" value="18">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fb-checkbox hide-checkbox">
                                        <input class="fb-checkbox__input hide-checkbox-field" type="checkbox" id="funnel-question-showonly-option-dropdown">
                                        <label for="funnel-question-showonly-option-dropdown" class="fb-checkbox__label">
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
                        <div class="form-group fb-address-first-step" data-parent>
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
                                    <div class="question-address-message-parent select2-parent message-parent">
                                        <select class="question-address-message"></select>
                                    </div>
                                    <a href="#" class="edit-btn el-tooltip" title='<div class="security-tooltip">Edit Security Message</div>'><i class="ico-edit"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Additional -->
                        <div class="form-group fb-address-first-step" data-parent>
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
                                            <input type="text" value="Address" class="form-control fb-form-control">
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
                                    <span class="fb-modal__middle">Google Map Verification Step</span>
                                    <span class="fb-tooltip">
                                        <span class="question-mark el-tooltip" title='<div class="overlay-tooltip">Tooltip Content</div>'>?</span>
                                    </span>
                                </div>
                                <div class="fb-modal__control">
                                    <div class="fb-toggle">
                                        <input data-parent name="address_required" type="checkbox" data-toggle="toggle" data-on="off" data-off="on" data-onstyle="off" data-offstyle="on">
                                    </div>
                                </div>
                            </div>
                            <div class="fb-modal__row fb-modal__row_tb" data-parent>
                                <div class="fb-modal__option fb-modal__option_light">
                                    <span class="fb-modal__middle">Show Unit#</span>
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
                                    <span class="fb-modal__middle">U.S Only</span>
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
                            <div class="w-100" data-parent>
                                <div class="fb-modal__row fb-modal__row_tb" >
                                    <div class="fb-modal__option fb-modal__option_light">
                                        <span class="fb-modal__middle">Specify U.S state(s)</span>
                                        <span class="fb-tooltip">
                                            <span class="question-mark el-tooltip" title='<div class="overlay-tooltip">Tooltip Content</div>'>?</span>
                                        </span>
                                    </div>
                                    <div class="fb-modal__control">
                                        <div class="fb-toggle">
                                            <input data-opener type="checkbox" data-toggle="toggle" data-on="off" data-off="on" data-onstyle="off" data-offstyle="on">
                                        </div>
                                    </div>
                                </div>
                                <div class="fb-modal__border-row" data-slide style="display: none">
                                    <div class="fb-form">
                                        <a href="#" data-toggle="modal" data-target="#select-state-modal-alt" class="static-opener state-active">Select States</a>
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

    <!-- Select State Modal -->
    <div class="modal fade select-state-modal conditional-logic-modals" id="select-state-modal-alt">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <strong class="modal-title">Select States</strong>
                </div>
                <div class="modal-body">
                    <div class="search-area">
                        <div class="input-holder">
                            <input type="search" class="form-control" placeholder="Type in the State Name ...">
                            <button type="submit" class="search-btn"><i class="ico-search"></i></button>
                        </div>
                    </div>
                    <div class="check-area">
                        <div class="check-head">
                            <div class="checkbox-wrap">
                                <label class="checkbox-label">
                                    <input type="checkbox" class="state-all-checked">
                                    <span class="checkbox-text"><i class="icon"></i> Select all States</span>
                                </label>
                            </div>
                            <a href="#" class="reset-btn state-reset-btn"><i class="ico-undo"></i>reset</a>
                        </div>
                        <div class="check-body">
                            <div class="check-list-wrap">
                                <ul class="check-list">
                                    <li>
                                        <div class="checkbox-wrap">
                                            <label class="checkbox-label">
                                                <input type="checkbox" class="state-checkbox">
                                                <span class="checkbox-text"><i class="icon"></i>Alabama</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox-wrap">
                                            <label class="checkbox-label">
                                                <input type="checkbox" class="state-checkbox">
                                                <span class="checkbox-text"><i class="icon"></i>Alaska</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox-wrap">
                                            <label class="checkbox-label">
                                                <input type="checkbox" class="state-checkbox">
                                                <span class="checkbox-text"><i class="icon"></i>Arizona</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox-wrap">
                                            <label class="checkbox-label">
                                                <input type="checkbox" class="state-checkbox">
                                                <span class="checkbox-text"><i class="icon"></i>Arkansas</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox-wrap">
                                            <label class="checkbox-label">
                                                <input type="checkbox" class="state-checkbox">
                                                <span class="checkbox-text"><i class="icon"></i>California</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox-wrap">
                                            <label class="checkbox-label">
                                                <input type="checkbox" class="state-checkbox">
                                                <span class="checkbox-text"><i class="icon"></i>Colorado</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox-wrap">
                                            <label class="checkbox-label">
                                                <input type="checkbox" class="state-checkbox">
                                                <span class="checkbox-text"><i class="icon"></i>Connecticut</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox-wrap">
                                            <label class="checkbox-label">
                                                <input type="checkbox" class="state-checkbox">
                                                <span class="checkbox-text"><i class="icon"></i>Delaware</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox-wrap">
                                            <label class="checkbox-label">
                                                <input type="checkbox" class="state-checkbox">
                                                <span class="checkbox-text"><i class="icon"></i>Florida</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox-wrap">
                                            <label class="checkbox-label">
                                                <input type="checkbox" class="state-checkbox">
                                                <span class="checkbox-text"><i class="icon"></i>Georgia</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox-wrap">
                                            <label class="checkbox-label">
                                                <input type="checkbox" class="state-checkbox">
                                                <span class="checkbox-text"><i class="icon"></i>Colorado</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox-wrap">
                                            <label class="checkbox-label">
                                                <input type="checkbox" class="state-checkbox">
                                                <span class="checkbox-text"><i class="icon"></i>Connecticut</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox-wrap">
                                            <label class="checkbox-label">
                                                <input type="checkbox" class="state-checkbox">
                                                <span class="checkbox-text"><i class="icon"></i>Delaware</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox-wrap">
                                            <label class="checkbox-label">
                                                <input type="checkbox" class="state-checkbox">
                                                <span class="checkbox-text"><i class="icon"></i>Florida</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox-wrap">
                                            <label class="checkbox-label">
                                                <input type="checkbox" class="state-checkbox">
                                                <span class="checkbox-text"><i class="icon"></i>Georgia</span>
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="action">
                        <ul class="action__list">
                            <li class="action__item">
                                <button type="button" class="button button-bold button-cancel state-modal-close" data-dismiss="modal">close</button>
                            </li>
                            <li class="action__item">
                                <button class="button button-bold button-primary state-save-btn" type="submit" disabled>select</button>
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
