<?php
include ("includes/head.php");
?>
    <!-- contain sidebar of the page -->
<?php
include ("includes/sidebar-menu.php");
include ("includes/inner-sidebar-menu.php");
?>
    <!-- contain the main content of the page -->
    <div id="content">
        <!-- header of the page -->
        <?php
        include ("includes/header.php");
        ?>
        <!-- contain main informative part of the site -->
        <main class="main">
            <section class="main-content">

                <form id="auto_responderform" action="">
                    <!-- Title wrap of the page -->
                    <div class="main-content__head">
                        <div class="col-left">
                            <h1 class="title">
                                Autoresponder / Funnel: <span class="funnel-name el-tooltip" title="203K Hybrid Loans">203K Hybrid Loans</span>
                            </h1>
                            <div class="funnel-info-tag">
                                <a class="global-setting-link" data-toggle="modal" href="#global-setting-placeholder-pop" title="Global Settings">3 Selected Funnels</a>
                            </div>
                        </div>
                        <div class="col-right">
                            <a data-lp-wistia-title="Auto-responder" data-lp-wistia-key="otqs4eib4i" class="video-link lp-wistia-video" href="#" data-toggle="modal" data-target="#lp-video-modal">
                                <span class="icon ico-video"></span> Watch how to video</a>
                        </div>
                    </div>
                    <!-- content of the page -->

                    <div class="lp-panel">
                        <div class="lp-panel__head">
                            <div class="col-left">
                                <h2 class="lp-panel__title">
                                    Auto-responder message details
                                </h2>
                            </div>
                            <div class="col-right">
                                <div class="action">
                                    <ul class="action__list">
                                        <li class="action__item">
                                            <input checked class="autoreschk" id="autoreschk" name="thankyou"
                                                   data-toggle="toggle" data-onstyle="active"
                                                   data-offstyle="inactive" data-width="127" data-height="43"
                                                   data-on="INACTIVE" data-off="ACTIVE" type="checkbox">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="lp-panel__body">
                            <div class="auto-responder">
                                <div class="auto-responder__row">
                                    <div class="form-group">
                                        <label for="mg_subject" class="auto-responder__msg-lbl">Message Subject</label>
                                        <div class="input__holder">
                                            <input id="mg_subject" name="mg_subject" class="form-control flex-grow-0 font-weight-bold" type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="lp-panel">
                        <div class="lp-panel__head">
                            <div class="col-left">
                                <h2 class="lp-panel__title">
                                    Message type
                                </h2>
                            </div>
                        </div>
                        <div class="lp-panel__body">
                            <div class="row">
                                <div class="col">
                                    <div class="radio">
                                        <ul class="radio__list radio__list_message-type">
                                            <li class="radio__item">
                                                <input type="radio" id="htmlemail" value="htmlemail" name="email-temp" checked>
                                                <label class="radio__htmlemail" for="htmlemail">HTML <span>Email</span></label>
                                            </li>
                                            <li class="radio__item">
                                                <input type="radio" id="textemail" value="textemail" name="email-temp">
                                                <label class="radio__textemail" for="textemail">Text <span>Email</span></label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="html-email__body classic-editor__wrapper">
                                        <div id="textwrapper" class="">
                                            <textarea class="lp-froala-textbox classic-editor" name="tfootereditor"></textarea>
                                        </div>
                                        <!--<div name="frola_email" class="html-email__froala-editor classic-editor"></div>-->
                                    </div>
                                    <div class="text-email__body display-none">
                                        <textarea class="text-area text-area_h300" name="" id="" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- content of the page -->
                    <!-- footer of the page -->
                    <div class="footer">
<!--                        <div class="row">-->
<!--                            <button type="submit" class="button button-secondary">Save</button>-->
<!--                        </div>-->
                        <div class="row">
                            <img src="assets/images/footer-logo.png" alt="footer logo">
                        </div>
                    </div>
                </form>
            </section>
        </main>
    </div>


    <!-- start Modal -->

    <div class="modal fade" id="modal_delete_attachment" tabindex="-1" role="dialog" aria-labelledby="modal_delete_attachment" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete Confirmation</h5>
                </div>
                <div class="modal-body">
                    <div class="modal-msg">
                        Are you sure delete attachment?
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="action">
                        <ul class="action__list">
                            <li class="action__item">
                                <button type="button" class="button button-cancel" data-dismiss="modal">Close</button>
                            </li>
                            <li class="action__item">
                                <button type="button" class="button button-primary _delete_btn">Delete</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- start Modal -->
    <form class="form-pop" id="modal_emailform" action="" method="post">

        <div class="modal fade" id="add-email" tabindex="-1" role="dialog" aria-labelledby="add-email" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add New Email Address</h5>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="modal-lbl">Email Type</label>
                            <div class="select2js__email-type-parent w-100">
                                <select name="email_type" class="form-control select2js__email-type">
                                    <option value="1">SMTP</option>
                                    <option value="2">Simple Mail</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="action">
                            <ul class="action__list">
                                <li class="action__item">
                                    <button type="button" class="button button-cancel" data-dismiss="modal">Cancel</button>
                                </li>
                                <li class="action__item">
                                    <button type="button" class="button button-primary smtp__detail-pop">Next</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="smtp-pop" tabindex="-1" role="dialog" aria-labelledby="smtp-pop" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="title__w-desc">
                            <h5 class="modal-title">SMPT Details</h5>
                            <p>
                                SMTP ( Simple Mail Transfer Ptotocol ) enables you to send your email
                                through the specified server setting.
                            </p>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="modal_email" class="modal-lbl">Email Address</label>
                            <div class="input__holder">
                                <input id="modal_email" name="modal_email" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="host_name" class="modal-lbl">Hostname</label>
                            <div class="input__holder">
                                <input id="host_name" name="host_name" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="port"  class="modal-lbl">Port</label>
                            <div class="input__holder">
                                <input id="port" name="port" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="user_name" class="modal-lbl">Username</label>
                            <div class="input__holder">
                                <input id="user_name" name="user_name" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="modal-lbl">Password</label>
                            <div class="input__holder">
                                <input id="password" name="password" class="form-control" type="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="modal-lbl">Security Protocol</label>
                            <div class="input__holder">
                                <div class="select2js__sec-protocol-parent w-100">
                                    <select name="sec_protocol" class="form-control select2js__sec-protocol">
                                        <option value="1">TLS</option>
                                        <option value="2">SSL</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="action d-flex justify-content-between align-items-center w-100">
                            <span class="btn__back-pop new__email-pop">Go back</span>
                            <ul class="action__list">
                                <li class="action__item">
                                    <button type="button" class="button button-cancel" data-dismiss="modal">Cancel</button>
                                </li>
                                <li class="action__item">
                                    <button type="submit" class="button button-primary confirm-email-pop">Add Email</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="confirm-email" tabindex="-1" role="dialog" aria-labelledby="confirm-email" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="title__w-desc">
                            <h5 class="modal-title">Verified Email Details</h5>
                            <p>
                                A confirmation email will be sent to the added email address. Please
                                verify it to help us ensure that your email has been entered correctly.
                            </p>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="confirm_email" class="modal-lbl">Email Address</label>
                            <input id="confirm_email" name="confirm_email" readonly value="example@email.com" class="form-control" type="text">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="action d-flex justify-content-between align-items-center w-100">
                            <span class="btn__back-pop smtp__detail-pop">Go back</span>
                            <ul class="action__list">
                                <li class="action__item">
                                    <button type="button" class="button button-cancel" data-dismiss="modal">Cancel</button>
                                </li>
                                <li class="action__item">
                                    <button type="button" class="button button-primary">send verification code</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>

<?php
include ("includes/video-modal.php");
include ("includes/footer.php");
?>