<?php
include ("includes/head.php");
?>

    <!--text field overlay-->
    <div class="funnel-content funnel-menu-overlay">
        <div class="panel-aside">
            <div class="panel-aside__head">
                <div class="col-left">
                    <h4 class="panel-aside__title has-icon menu-icon">
                    <span>
                        <i class="ico ico-hamburger head-icon"></i>
                        Menu
                    </span>
                    </h4>
                </div>
                <div class="col-right">
                    <span title="Menu" class="ico-arrow-right back-ico"></span>
                </div>
            </div>
            <div class="panel-aside-wrap-overlay">
                <div class="panel-aside-holder">
                    <div class="panel-aside__body">
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
                        <!-- options -->
                        <div class="form-group" data-parent>
                            <div class="fb-modal__row">
                                <div class="fb-modal__option">
                                    Options
                                </div>
                                <div class="fb-modal__control">
                                    <div class="fb-modal__handler" data-handler>
                                        <i class="fa fa-chevron-down"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="fb-modal__border-row border-0 pt-0" data-handler-slide style="display: none">
                                <div class="fb-none-opt create-group-checkbox">
                                    <div class="fb-checkbox">
                                        <input class="fb-checkbox__input" type="checkbox" id="create-group">
                                        <label for="create-group" class="fb-checkbox__label">
                                            <div class="fb-checkbox__box">
                                                <div class="fb-checkbox__inner-box"></div>
                                            </div>
                                            <div class="fb-checkbox__caption">
                                                Create content groups
                                            </div>
                                        </label>
                                    </div>
                                    <span class="fb-tooltip">
                                        <span class="question-mark el-tooltip" title='<div class="overlay-tooltip">Tooltip Content</div>'>?</span>
                                    </span>
                                </div>
                                <div class="fb-options border-0 normal-option">
                                    <div class="fb-options__clone">
                                        <div class="fb-options__list">
                                            <div class="fb-options__col fb-options__col_field">
                                                <input type="text" class="form-control fb-form-control">
                                            </div>
                                            <div class="fb-options__col fb-options__col_handler">
                                            <span class="tag-box tag-box_move tag-box_lg">
                                                <i class="ico ico-dragging"></i>
                                            </span>
                                            </div>
                                            <div class="fb-options__col">
                                                <a href="#" class="fb-options__delete">
                                                <span class="tag-box tag-box_lg">
                                                    <i class="ico ico-cross"></i>
                                                </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fb-options__add-more">
                                        <a href="#" class="lp-btn lp-btn_add-option">
                                        <span class="lp-btn__icon">
                                            <i class="ico ico-plus"></i>
                                        </span>
                                            Add New Option
                                        </a>
                                    </div>
                                </div>
                                <div class="fb-options border-0 group-option">
                                    <div class="fb-options__group-clone">
                                        <div class="grouping-label">Group 1</div>
                                        <div class="group-head">
                                            <div class="fb-form__group">
                                                <input type="text" class="form-control fb-form-control">
                                                <span class="tag-box">
                                                    <i class="fas fa-folder-open"></i>
                                                </span>
                                            </div>
                                            <div class="fb-options__col">
                                                <a href="#" class="fb-options__delete">
                                                    <i class="ico ico-cross"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="fb-options__clone">
                                            <div class="fb-options__list">
                                                <div class="fb-options__col fb-options__col_field">
                                                    <input type="text" class="form-control fb-form-control">
                                                </div>
                                                <div class="fb-options__col fb-options__col_handler">
                                                <span class="tag-box tag-box_move tag-box_lg">
                                                    <i class="ico ico-dragging"></i>
                                                </span>
                                                </div>
                                                <div class="fb-options__col">
                                                    <a href="#" class="fb-options__delete">
                                                    <span class="tag-box tag-box_lg">
                                                        <i class="ico ico-cross"></i>
                                                    </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fb-options__add-more">
                                            <a href="#" class="lp-btn lp-btn_add-option">
                                            <span class="lp-btn__icon">
                                                <i class="ico ico-plus"></i>
                                            </span>
                                                Add New Option
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fb-modal__row_creat-group">
                                        <div class="fb-modal__row">
                                            <a href="#" class="lp-btn lp-btn_add-option_group button-primary">
                                            <span class="lp-btn__icon">
                                                <i class="ico ico-plus"></i>
                                            </span>
                                                Add New Group
                                            </a>
                                            <a data-toggle="modal" href="#group-organize-pop" class="lp-btn lp-btn_add-option_organize button-primary">
                                                <span class="lp-btn__icon">
                                                    <i class="ico ico-plus"></i>
                                                </span>
                                                Organize
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="fb-modal__row">
                                    <div class="fb-modal__option">Multiple Selections</div>
                                    <div class="fb-modal__control">
                                        <div class="fb-toggle">
                                            <input name="toggle-button" type="checkbox" id="multiple-selection" data-toggle="toggle" data-on="off" data-off="on" data-onstyle="off" data-offstyle="on">
                                        </div>
                                    </div>
                                </div>
                                <div class="fb-none-opt">
                                    <div class="fb-checkbox">
                                        <input class="fb-checkbox__input" type="checkbox" id="none-option08">
                                        <label for="none-option08" class="fb-checkbox__label">
                                            <div class="fb-checkbox__box">
                                                <div class="fb-checkbox__inner-box"></div>
                                            </div>
                                            <div class="fb-checkbox__caption">
                                                Include “None” as an option
                                            </div>
                                        </label>
                                    </div>
                                    <span class="fb-tooltip">
                                        <span class="question-mark el-tooltip" title='<div class="overlay-tooltip">Tooltip Content</div>'>?</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Automatic Progress -->
                        <div class="form-group" data-parent>
                            <div class="fb-modal__row">
                                <div class="fb-modal__option">Automatic Progress</div>
                                <div class="fb-modal__control">
                                    <div class="fb-toggle">
                                        <input class="fb-field-label automatic-checkbox" data-opener type="checkbox" data-toggle="toggle" data-on="off" data-off="on" data-onstyle="off" data-offstyle="on" checked>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- CTA Button -->
                        <div class="form-group cta-form-group el-tooltip" title="A CTA button will not be shown when the <br> option for &quot;Automatic Progress&quot; is ON <br> in the &quot;Settings&quot; section below." data-parent disabled>
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
                                                <input id="question-menu-font-slider" class="form-control" type="text"/>
                                                <input type="hidden" class="question-menu-font" value="18">
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
                                                        <div id="question-menu-clr-icon" class="last-selected">
                                                            <div class="last-selected__box" style="background: #ffffff"></div>
                                                            <div class="last-selected__code">#ffffff</div>
                                                        </div>
                                                        <div class="color-box__panel-wrapper question-menu-icon-clr">
                                                            <div class="color-box__panel-dropdown">
                                                                <select class="color-picker-options">
                                                                    <option value="1">Color Selection:  Pick My Own</option>
                                                                    <option value="2">Color Selection:  Pull from Logo</option>
                                                                </select>
                                                            </div>
                                                            <div class="color-picker-block">
                                                                <div class="picker-block" id="question-menu-icon-clr">
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
                                                                    <input type="hidden" id="menu-icon-clr-trigger" value="1">
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
                                                        <div class="question-menu-input-icon-parent select2-parent icon-parent">
                                                            <select class="question-menu-icon-type"></select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="fb-modal__row">
                                                    <div class="fb-modal__option fb-modal__option_light">
                                                        <span class="fb-modal__middle">Icon Size</span>
                                                    </div>
                                                    <div class="fb-modal__control">
                                                        <input id="question-menu-icon-size-slider" class="form-control" type="text">
                                                        <input type="hidden" class="question-menu-icon-size" value="18">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fb-checkbox hide-checkbox">
                                        <input class="fb-checkbox__input hide-checkbox-field" type="checkbox" id="funnel-question-showonly-option">
                                        <label for="funnel-question-showonly-option" class="fb-checkbox__label">
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
                                    <div class="question-menu-message-parent select2-parent message-parent">
                                        <select class="question-menu-message"></select>
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
                                            <input type="text" value="Zip_code" class="form-control fb-form-control">
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
                                    <span class="fb-modal__middle">Allow City or Zip Code</span>
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
                                    <span class="fb-modal__middle">Require U.S. Zip Code</span>
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

<?php
    include ("includes/footer.php");
?>
