<div class=" col-md-3 blogSidebarCol px-2">
    <div class="blogSidebarContainer">
        <div class="blogCategorySection">
            <h4>Blog Categories</h4>
            <ul>
                <li><a href="/blog/seo.php">SEO</a></li>
                <li><a href="/blog/ppc.php">PPC</a></li>
                <li><a href="/blog/sem.php">SEM</a></li>
                <li><a href="/blog/content-marketing.php">Content Marketing</a></li>
                <li><a href="/blog/aso.php">ASO</a></li>
                <li><a href="/blog/google-algorithum-updates.php">Google Algorithum Updates</a></li>
                <li><a href="/blog/web-technologies.php">web technologies</a></li>
            </ul>
        </div>

        <div class="blogAdvertisementContainer">
            <a href="">
                space for advertisement
            </a>
            <a href="">
                space for advertisement
            </a>
        </div>

        <div class="blogSideBarFormContainer">
            <div class="formHead">
                <h3 class="text-center text-black fw-bold">Leave a Message</h3>
                <!-- form submission Error Message -->
            </div>

            <form class="stickyContactForm d-flex flex-column gap-2" method="post" action="">

                <input class="form-control <?php echo $SnameErr ? 'is-invalid' : '' ?>" type="text" name="Sname" id=""
                    placeholder="Enter Your Name">

                <input class="form-control <?php echo $SemailErr ? 'is-invalid' : '' ?>" type="email" name="Semail"
                    id="" placeholder="Enter Your Email">

                <input class="form-control <?php echo $SphoneNoErr ? 'is-invalid' : '' ?>" type="number" name="SphoneNo"
                    id="" placeholder="Phone Number">

                <input class="form-control <?php echo $SwebsiteUrlErr ? 'is-invalid' : '' ?>" type="text"
                    name="SwebsiteUrl" id="" placeholder="Website URl">

                <textarea class="form-control <?php echo $SmessageErr ? 'is-invalid' : '' ?>" name="Smessage" id=""
                    cols="30" rows="2" placeholder="Your Ideas"></textarea>

                <button name="Ssubmit" type="submit">Submit</button>



            </form>
        </div>

        <div class="blogAdvertisementContainer stickyBlogAdBox">
            <a href="">
                space for advertisement
            </a>
            <a href="">
                space for advertisement
            </a>
        </div>
    </div>
</div>