<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agoraphobia User Page</title>
    <link rel="stylesheet" type="text/css" href="css/user.css">
</head>

<body>
    <!-- The `user-container` div is a placeholder for the user's actual data. -->
    <div class="user-container">
        <h1>Welcome,
            <?php echo htmlspecialchars($_SESSION['user']); ?>
        </h1>
        <p>Here are your test results:</p>
        <table>
            <thead>
                <tr>
                    <th>Test</th>
                    <th>Score</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Test 1</td>
                    <td>80%</td>
                </tr>
                <tr>
                    <td>Test 2</td>
                    <td>90%</td>
                </tr>
                <tr>
                    <td>Test 3</td>
                    <td>70%</td>
                </tr>
            </tbody>
        </table>
        <footer class="footer">
            <p>&copy; 2023 PhobiaHelp</p>
        </footer>
    </div>
</body>

</html>