<html>

    <head>
        <!-- header section -->
        <?php $this->load->view("include/header_other.php")?>
    </head>

    <body>

        <!-- content section -->
        <?php $this->load->view("site/home_content.php")?>

        <!-- Footer section -->
        <?php $this->load->view("include/footer.php", array(
            "name"=>$name,
            "email_footer"=>$email
        ))?>

    </body>
</html>