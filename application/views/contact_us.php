<?php $this->load->view('header',$this->data); ?>

<div class="row innerpage">
    <div class="col-xs-12">

        <div align="center" >
            <h1>Contact Us</h1>
            <p>

                <?php if (validation_errors()): ?>
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <?php echo validation_errors();?>
            </div>
            <?php endif; ?>

            <?php if(isset($_SESSION['msg_error'])){ ?>
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <?php echo display_error(); ?>
                </div>
            <?php } ?>

            <?php if(isset($_SESSION['msg_success'])){ ?>
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <?php echo display_success_message(); ?>
                </div>
            <?php } ?>



            <form method="post" name="contactus" id="contactus">
                <table width="70%" cellpadding="5" cellspacing="5">
                <tr>
                    <td width="100">Name</td>
                    <td><input type="text" required name="fullname" class="form-control"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" required name="email" class="form-control"></td>
                </tr>
                <tr>
                    <td valign="top">Message</td>
                    <td><textarea required name="message" class="form-control" rows="10"></textarea></td>
                </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><br>
                            <button type="submit" class="btn btn-primary">
                                Send
                            </button></td>
                    </tr>
                </table>
            </form>
            </p>
        </div>

    </div>
</div>


<?php $this->load->view('footer',$this->data); ?>

