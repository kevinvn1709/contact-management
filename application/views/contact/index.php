<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-users"></i>Contact Information
        </div>
    </div>
    <div class="portlet-body form">
        <form role="form" class="form-horizontal" action="" method="post">
            <div class="form-body">
                <?php if ($this->session->flashdata('message_update') == TRUE) { ?>
                    <p class="alert alert-warning text-center">Thanks, Information Updated!</p>
                <?php } ?>
                <h3 class="form-section">Personal</h3>

                <div class="form-group form-md-line-input">
                    <label class="col-md-2 control-label">Full Name</label>
                    <span class="fullname"><?php echo $user_info['name']; ?></span>
                </div>
                <div class="form-group form-md-line-input">
                    <label class="col-md-2 control-label">Company</label>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-briefcase"></i></span>
                        <input type="text" name="company" class="form-control" value="<?php echo $contact_info['company']; ?>">

                        <div class="form-control-focus"></div>
                        <span class="help-block">Ex: Nedcoffee Vietnam LTD</span>
                    </div>
                </div>

                <h3 class="form-section">Phone numbers</h3>

                <div class="form-group form-md-line-input">
                    <label class="col-md-2 control-label">Work</label>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-mobile-phone"></i></span>
                        <input type="text" name="phone_work" class="form-control mask_phone" value="<?php echo $contact_info['phone']; ?>">

                        <div class="form-control-focus"></div>
                        <span class="help-block">Ex: 0909 000 999</span>
                    </div>
                </div>
                <div class="form-group form-md-line-input">
                    <label class="col-md-2 control-label">Mobile</label>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-mobile-phone"></i></span>
                        <input type="text" name="phone_mobile" class="form-control mask_phone" value="<?php echo $contact_info['phone_mobile']; ?>">

                        <div class="form-control-focus"></div>
                        <span class="help-block">Ex: 0909 000 999</span>
                    </div>
                </div>
                <div class="form-group form-md-line-input">
                    <label class="col-md-2 control-label">Home</label>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                        <input type="text" name="phone_home" class="form-control mask_phone_home" value="<?php echo $contact_info['phone_home']; ?>">

                        <div class="form-control-focus"></div>
                        <span class="help-block">Ex: 0838336999</span>
                    </div>
                </div>

                <h3 class="form-section">Internet</h3>

                <div class="form-group form-md-line-input">
                    <label class="col-md-2 control-label">Bussiness Email</label>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input type="text" name="email_work" class="form-control mask_email" value="<?php echo $contact_info['email_work']; ?>">

                        <div class="form-control-focus"></div>
                        <span class="help-block">Ex: contact@nedcoffee.vn</span>
                    </div>
                </div>
                <div class="form-group form-md-line-input">
                    <label class="col-md-2 control-label">Personal Email</label>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input type="text" name="email" class="form-control mask_email" value="<?php echo $contact_info['email']; ?>">

                        <div class="form-control-focus"></div>
                        <span class="help-block">Ex: contact@nedcoffee.vn</span>
                    </div>
                </div>

                <h3 class="form-section">Addresses</h3>

                <div class="form-group form-md-line-input">
                    <label class="col-md-2 control-label">Home</label>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-home"></i></span>
                        <input type="text" name="address" class="form-control" value="<?php echo $contact_info['address']; ?>">

                        <div class="form-control-focus"></div>
                        <span class="help-block">Ex: Tân An 2 Industrial Area, Buôn Mê Thuột, Daklak</span>
                    </div>
                </div>

                <h3 class="form-section">Notes</h3>

                <div class="form-group form-md-line-input">
                    <label class="col-md-2 control-label">Text</label>

                    <div class="input-group col-md-10">
                        <textarea name="note" class="form-control" rows="5"><?php echo $contact_info['note']; ?></textarea>
                    </div>
                </div>


            </div>
            <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-2 col-md-10">
                        <button type="button" class="btn default" onclick="history.back();">Back</button>
                        <button type="submit" class="btn green">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>