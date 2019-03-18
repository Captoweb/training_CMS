   <div id="footer">Copyright 1818 - <?php echo date("Y"); ?> Widget Corp</div>
</body>
</html>
<?php
//close DB connection
if(isset($db)) {
    mysqli_close($db);
}
?> 