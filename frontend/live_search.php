<style>
    a{
        text-decoration: none;
    }
</style>
<?php

include('include/config.php');
if(isset($_POST["search"])){
$search_value = $_POST["search"];
$sql = "SELECT * FROM music  WHERE name LIKE '{$search_value}%' OR artist LIKE '{$search_value}%' OR year LIKE '{$search_value}%' OR genre LIKE '{$search_value}%'";


$result = mysqli_query($db, $sql) or die("Query Failed");
$output ="";
if (mysqli_num_rows($result) > 0) {
    echo'<center><h1>Musics</h1></center>';
    $output = '<div class="container  p-3">
<div class="row">';

?>

<!-- <h2 class='movie-title'> {$row['name']} </h2> -->
<?php
    while ($row = mysqli_fetch_assoc($result)) {
        $output .= "<div class='col-lg-3 col-md-4 col-6 mt-3'>
        <a style='color: var(--tect-color); text-shadow: 1px 1px 1px var(--main-color);' href='music_details.php?id={$row['music_id']}'>   <div class='card movie-box' style='width:100%;'>
                    <img class='card-img-top' src='../admin/upload/{$row['filepath']}' alt='Card image' style='width:100%'>
                    <div class='box-text'>
                    <p class='movie-title'>NAME : <span style='color: white;'>{$row['name']}</span> </p>
                    <p class='movie-title'>ARTIST : <span style='color: white;'>{$row['artist']} </span></p>
                    <p class='movie-title'>YEAR : <span style='color: white;'>{$row['year']} </span></p>";
?>

        <?php
        
        $output .= "<p class='movie-type'><a style='color: var(--tect-color); text-shadow: 1px 1px 1px var(--main-color);' href='music_details.php?id={$row['music_id']}'>GENRE :<span style='color: white;'>{$row['genre']}</span></a></p>

                            <a href='music_details.php?id={$row['music_id']}' class='watch-btn play-btn'>
                                <i class='bx bx-right-arrow'></i>
                            </a>
                        </div></a>
                    </div>
                </div>";
        ?>

<?php }
    $output .= "</div>
</div>";
mysqli_close($db);
    echo $output;
}else{
    echo '<h2 style="text-align: center;" class="mt-5">No music Record Found</h2>';
}
}
?>
<!-- ============= -->
<?php

include('include/config.php');
if(isset($_POST["search"])){
$search_value = $_POST["search"];
$sql = "SELECT * FROM video  WHERE name LIKE '{$search_value}%' OR artist LIKE '{$search_value}%' OR year LIKE '{$search_value}%' OR genre LIKE '{$search_value}%'";


$result = mysqli_query($db, $sql) or die("Query Failed");
$output ="";
if (mysqli_num_rows($result) > 0) {

    $output = '<div class="container  p-3">
<div class="row">';
echo'<center><h1>videos</h1></center>';
?>


<?php
    while ($row = mysqli_fetch_assoc($result)) {
       
        $output .= "<div class='col-lg-3 col-md-4 col-6 mt-3'>
        <a style='color: var(--tect-color); text-shadow: 1px 1px 1px var(--main-color);' href='video_details.php?id={$row['video_id']}'> <div class='card movie-box' style='width:100%;'>
                    <img class='card-img-top' src='../admin/upload/{$row['filepath']}' alt='Card image' style='width:100%'>
                    <div class='box-text'>
                     
                        <p class='movie-title'>NAME : <span style='color: white;'>{$row['name']}</span> </p>
                    <p class='movie-title'>ARTIST : <span style='color: white;'>{$row['artist']} </span></p>
                    <p class='movie-title'>YEAR : <span style='color: white;'>{$row['year']} </span></p>";
?>

        <?php
        
        $output .= "<span class='movie-type'><a style='color: var(--tect-color); text-shadow: 1px 1px 1px var(--main-color);' href='genre.php?id={$row['video_id']}'>GENRE :<span style='color: white;'>{$row['genre']}</span></a></span>
                            <a href='video_details.php?id={$row['video_id']}' class='watch-btn play-btn'>
                                <i class='bx bx-right-arrow'></i>
                            </a>
                        </div>
                    </div></a>
                </div>";
        ?>

<?php }
    $output .= "</div>
</div>";
mysqli_close($db);
    echo $output;
}else{
    echo '<h2 style="text-align: center;" class="mt-5">No Video Record Found</h2>';
}
}
?>





