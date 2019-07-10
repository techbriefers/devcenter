<?php
include 'inc/header.php';

?>
    <div class="content-mid-heading"><a href="#">Triangular star Patterns in PHP</a></div>
    <h1>Pattern #1</h1>

    <pre>
        for ($breaker = 0; $breaker <= 5; $breaker++) {
        for ($star = 0; $star < $breaker; $star++) {
        echo '*';
        }
        echo '<br>';
        }
    </pre>

    <p class="code-result-pattern">


        <?php
        for ($breaker = 0; $breaker <= 5; $breaker++) {
            for ($star = 0; $star < $breaker; $star++) {
                echo '*';
            }
            echo '<br>';
        }
        ?></p>
<?php
include 'inc/footer.php';
?>