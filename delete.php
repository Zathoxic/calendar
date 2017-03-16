<?php
require 'connect.php';

$id = $_GET['id'];

$sql = "DELETE FROM birthdays WHERE id = $id";

$conn->query($sql);

header('Location: ./');
