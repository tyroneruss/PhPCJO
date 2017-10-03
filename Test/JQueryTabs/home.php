
   <?php include '../includes/header.php'; ?>
    <div align="right"> 
        <?php         
            session_start();
            echo "Welcome," . $_SESSION["fullname"];
        ?>
    </div>
    <div align="center">
        
    
    </div>

    <?php include '../includes/footer.php'; ?>
        
    </body>
</html>