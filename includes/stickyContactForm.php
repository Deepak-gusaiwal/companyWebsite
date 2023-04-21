<div class="stickyContactFormContainer">
    <span class="formtoggleLable">
        <i class="fa fa-check-square" aria-hidden="true"></i> <span>Lets connect</span>
    </span>



    <div class="form">
        <div class="formHead">
            <h3>Leave a Message</h3>
            <!-- form submission Error Message -->
        </div>
        <?php if ($SformSubmissionError): ?>
            <h5 class="redBg whiteColor px-2 text-center">Please Fill Form Correctly</h5>
        <?php endif; ?>
        <form class="stickyContactForm" method="post" action="">

            <input class="form-control <?php echo $SnameErr ? 'is-invalid' : '' ?>" type="text" name="Sname" id=""
                placeholder="Enter Your Name">

            <input class="form-control <?php echo $SemailErr ? 'is-invalid' : '' ?>" type="email" name="Semail" id=""
                placeholder="Enter Your Email">

            <input class="form-control <?php echo $SphoneNoErr ? 'is-invalid' : '' ?>" type="number" name="SphoneNo"
                id="" placeholder="Phone Number">

            <input class="form-control <?php echo $SwebsiteUrlErr ? 'is-invalid' : '' ?>" type="text" name="SwebsiteUrl"
                id="" placeholder="Website URl">

            <textarea class="form-control <?php echo $SmessageErr ? 'is-invalid' : '' ?>" name="Smessage" id=""
                cols="30" rows="2" placeholder="your ideas"></textarea>

            <button name="Ssubmit" type="submit">Submit</button>



        </form>
    </div>
</div>