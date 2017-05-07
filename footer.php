    <?php if(!is_front_page()) :?> 
    <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
            <?php if(is_active_sidebar('sidebar')): ?>
            <?php dynamic_sidebar('sidebar'); ?>
            <?php endif; ?>
        </div><!-- /.blog-sidebar -->
      </div><!-- /.row -->
<?php endif; ?>
    </div><!-- /.container -->
    <footer class="blog-footer">
        <p>&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></p>
        <p>
        <a href="#">Back to top</a>
        </p>
        </footer>
        <?php wp_footer(); ?>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="<?php bloginfo('template_url'); ?> /js/bootstrap.min.js"></script>
    </body>
</html>