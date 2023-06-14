<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Haberler</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" 
        crossorigin="anonymous">
        <style>
            @media (max-width:991px) {
                .border-end {
                    border: none !important;
                }
            }
        </style>
    </head>
    <body>

        <?php
            $pdo = new PDO('mysql:host=localhost;dbname=news','root');

            $stmt = $pdo->query("SELECT * FROM news");
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if (isset($_POST['insert'])) {
                $sql = "INSERT INTO news (title, news) VALUES (:title, :news)";
                $stmt = $pdo->prepare($sql);
                $stmt->execute(array(':title' => $_POST['title'], ':news' => $_POST['news']));

                //* Prevents the last process to repeat when the page is reloaded.
                header("location: news.php");
                exit;
            }

            if (isset($_POST['delete'])) {
                $sql = "DELETE FROM news WHERE id = :id";
                $stmt = $pdo->prepare($sql);
                $stmt->execute(array(':id' => $_POST["id"]));

                header("location: news.php");
                exit;
            }
         ?>  

        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-6 mb-5 border-end border-dark">
                    <center>
                        <form method="post">
                            <h2>Haber ekle</h2>
                            <p>Haber Başlığı:</p>
                            <input type="text" name="title" required class="w-50 mb-3">
                            <p>Haber:</p>
                            <textarea name="news" cols="30" rows="10" class="w-75" required></textarea><br><br>
                            <input type="submit" name="insert" value="Ekle" class="btn btn-primary w-75">
                        </form>
                    </center>
                </div>
                <div class="col-lg-6">
                    <center>
                        <h2>Haberler</h2>
                        <?php
                            foreach ( $rows as $row ) {
                                echo "<div class='card mb-5 w-75'>";
                                echo "<div class='card-header'>";
                                echo $row['title'];
                                echo "</div><div class='card-body'>";
                                echo "<p class='card-text'>";
                                echo $row['news'];
                                echo "</p><form method='post'><input type='hidden' name='id' value='".$row['id']."'>";
                                echo "<input type='submit' name='delete' class='btn btn-sm btn-danger d-grid' value='Haberi sil'>";
                                echo "</form></div></div>";
                            }
                        ?>
                    </center>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    </body>
</html>