




<?php include '../includes/header.php'; ?>

<main>
<h1>Welcome to the Admin Dashboard, <?php echo htmlspecialchars($_SESSION['user_name']); ?>!</h1>
    <p>Here you can manage users, view reports, and perform other administrative tasks.</p>
    <a href="../includes/logout.php">Log Out</a>
</main>

<?php include '../includes/footer.php'; ?>
<script src="../../vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="../../vendor/bootstrap/js/popper.js"></script>
	<script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="../assets/js/main.js"></script>
	<script src="../assets/js/header.js"></script>


</body>
</html>
